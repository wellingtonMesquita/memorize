<?php

namespace App\Http\Controllers;

use App\User;
use App\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WordsController extends Controller
{
    public $users;



    public function index()
    {
        // get all the nerds
        $words = Word::where('user_id', Auth::user()->id)->get();

        // load the view and pass the nerds
        return view('words.index', compact('words'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('words.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        Word::create([
            'user_id' => Auth::user()->id, 'native_words' => $request->native_words,
            'foreign_words' => $request->foreign_words, 'word_learned' => '0', 'word_wrong' => '0'
        ]);
        return view('words.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function show(Word $word)
    {
        //
    }


    public function dashboard()
    {
        $total = Word::where('user_id', Auth::user()->id)->count();
        $aprendidas = Word::where('word_learned', '>=', 5)->where('user_id', Auth::user()->id)->count();
        $listanegra = Word::where('word_wrong', '>=', 5)->where('user_id', Auth::user()->id)->count();
        $porcetagem =  ($aprendidas / $total) * 100;
        $data = ['total'=>$total,'aprendidas' => $aprendidas, 'listaNegra' => $listanegra, 'porcetagemAcerto' => floor($porcetagem)];
        return view('words.dashboard', compact('data'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function edit(Word $word)
    {
        $word = Word::findOrFail($word->id);
        return view('words.edit', compact('word'));
    }
    /**
     * Show the words for comparasion.
     *
     * @param  \App\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function getWords()
    {
        $words =  Word::where('word_learned', '<=', 5)->orderBy('status', 'ASC')->where('user_id', Auth::user()->id)->get();
        $data = ['hit' => false];
        return view('words.leson', compact('words'), compact('data'));
    }

    /**
     * Show the words for comparasion.
     *
     * @param  \App\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function confirm(Request $request, $id)
    {

        $palavraEstrangeira = Word::where('id', '=', $id)->where('user_id', Auth::user()->id)->first();
        if (strcasecmp($palavraEstrangeira['native_words'], $request->native_words) == 0) {
            $palavraEstrangeira->word_learned = $palavraEstrangeira->word_learned + 1;
            $palavraEstrangeira->status = 1;
            $palavraEstrangeira->update();
        } else {
            $palavraEstrangeira->word_wrong = $palavraEstrangeira->word_wrong + 1;
            $palavraEstrangeira->status = 2;
            $palavraEstrangeira->update();
        }
        $words =  Word::where('word_learned', '<=', 5)->orderBy('status', 'ASC')->where('user_id', Auth::user()->id)->get();
        return view('words.leson', compact('words'));
    }

    public function reset()
    {

        $words = Word::where('status', '>', 0)->where('user_id', Auth::user()->id)->get();
        foreach ($words as $word) {
            $word->status = 0;
            $word->update();
        }
        $words =  Word::where('word_learned', '<=', 5)->orderBy('status', 'ASC')->where('user_id', Auth::user()->id)->get();
        return view('words.leson', compact('words'))->render();
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Word $word)
    {
        $word = Word::find($word->id);
        $word->foreign_words = $request->foreign_words;
        $word->native_words = $request->native_words;
        $word->save();
        $words = Word::where('user_id', Auth::user()->id)->get();

        // load the view and pass the nerds
      return redirect()->route('words.index')->with('alert-success', 'Product hasbeen deleted!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function destroy(Word $word)
    {
        $word->delete();
        // get all the nerds
        $words = Word::where('user_id', Auth::user()->id)->get();

        // load the view and pass the nerds
        return redirect()->route('words.index')->with('alert-success', 'Product hasbeen deleted!');
    }
}
