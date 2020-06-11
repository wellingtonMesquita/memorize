@extends('principal')
@section('words.conteudo')
<div class="container">
    <div class="row ">
        <div class="col-12  col-xs-12 col-sm-12">
            <a href="{{ url('/words/leson/reset') }}" class="btn btn-inverse btn-square" style="float:right;">Reset</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-4 ">

        </div>
        <div class="col-xs-4">

        </div>
        <div class="col-xs-4 ">

        </div>
    </div>

    <div class="row align-items-center  ">
        <div class="col-md-3 col-sm-3"></div>
        <div class="col-md-6 col-sm-6 owl-carousel carousel-nav  owl-theme">
            @foreach($words as $word)
            <form action="/words/leson/comparar/{{$word->id}}" method="POST" class="col-md-10 col-sm-10 mx-auto text-center">

                @csrf
                @if($word->status == 0)
                <img class="img-responsive  " src="\assets\images\slider\white.svg" width="200" height="300"></img>
                <span style="max-width: 300px; max-height:400px;color: black;" class="meio">{{$word->foreign_words}}</span>
                @endif
                @if($word->status == 1)
                <img class="img-responsive  " src="\assets\images\slider\like.jpg" width="200" height="300"></img>
                <span style="max-width: 300px; max-height:400px;color: white;margin-top:30px" class="meio">{{$word->foreign_words}}</span>
                @endif
                @if($word->status == 2)
                <img class="img-responsive  " src="\assets\images\slider\dislike.jpg" width="50" height="300"></img>
                <span style="max-width: 300px; max-height:400px;color: white;margin-top:30px" class="meio">{{$word->foreign_words}}</span>
                @endif
                <div class="row">
                    <div class="col-md-2 col-sm-2 "></div>
                    <div class="col-md-8 col-sm-8">
                        @if($word->status == 0)
                        <div class="row align-items-center" style="margin-top:10px;">
                            <input style="margin-left: 10px;" class=" form-control col-md-7 col-sm-7 " id="native_words" name="native_words" type="text" required>
                            <button type="submit" class=" btn btn-success btn-square col-md-4 col-sm-4" style="margin-left: 5px;">Ok</button>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-2 col-sm-2 "></div>
                </div>
            </form>
            @endforeach
        </div>
        <div class="col-md-3 col-sm-3"></div>
    </div>


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#reset").on('click', function() {
            console.log($(this).serialize);
            $.ajax({

                type: 'GET',
                url: "{!! URL::to('/words/leson/reset') !!}",
                dataType: 'JSON',
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function(data) {},
                error: function() {
                    alert('Erro');
                },
            });


        });
    });

    function testAnim(x) {

    };
</script>
<style>
    .meio {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: black;
        margin: 0;
        padding: 0;
        font-family: "Apple";
        font-size: 10vh;
        color: white;
    }




    .meiobotao {
        position: absolute;
        top: 85%;
        left: 65%;
        transform: translate(-50%, -40%);


    }

    .meioinput {
        position: absolute;
        top: 85%;
        left: 47%;
        transform: translate(-50%, -40%);


    }

    .meioFalha {

        top: 30%;
        left: 50%;
        transform: translate(-19%, -40%);
        font-family: "Apple";
        font-size: 50px;
        margin-left: 20%;
        color: white;
    }

    .meioSucesso {
        position: absolute;
        top: 40%;
        left: 45%;
        transform: translate(-19%, -40%);
        font-family: "Apple";
        font-size: 10vh;
        color: white;
    }


    .meioprincipal {
        height: 350px;
        width: 200px;
        top: 5%;
        left: 62%;
        transform: translate(-65%, -0%);


    }

    .owl-item {
        width: 300px;
    }



    .tranparente {
        border-top-width: 1px;
        border-right-width: 1px;
        border-bottom-width: 1px;
        border-left-width: 1px;
        border-top-style: none;
        border-right-style: solid;
        border-bottom-style: solid;
        border-left-style: none;
        border-top-color: #F7F7F7;
        border-right-color: #000033;
        border-bottom-color: #000033;
        border-left-color: #F7F7F7;
        background-color: transparent;
    }
</style>
@stop