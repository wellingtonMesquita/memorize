@extends('principal')
@section('words.conteudo')
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- Zero config.table start -->
            <div class="card">
                <div class="card-header">
                    <h5>Lista de Palavras</h5>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table id="simpletable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Palavra Nativa</th>
                                    <th>Palavra Estrangeira</th>
                                    <th>Nº Acertos</th>
                                    <th>Nº Erros</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($words as $word)
                                <tr>
                                    <td>{{$word->native_words}}</td>
                                    <td>{{$word->foreign_words}}</td>
                                    <td>{{$word->word_learned}}</td>
                                    <td>{{$word->word_wrong}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 ">
                                                <form action="{{ route('words.destroy', $word) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger waves-effect waves-light active"><span class="icofont icofont-ui-delete"></span></button>
                                                </form>
                                            </div>
                                           <div class="col-md-1 col-sm-1"></div>
                                            <div class="col-md-2 col-sm-2 ">
                                                <form action="{{ route('words.edit', $word) }}" method="POST">
                                                    @method('GET')
                                                    @csrf
                                                    <button class="btn btn-danger waves-effect waves-light active"><span class="icofont icofont-ui-edit"></span></button>
                                                </form>
                                            </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Palavra Nativa</th>
                                    <th>Palavra Estrangeira</th>
                                    <th>Nº Acertos</th>
                                    <th>Nº Erros</th>
                                    <th>Ação</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Language - Comma Decimal Place table end -->
        </div>
    </div>
</div>
@stop