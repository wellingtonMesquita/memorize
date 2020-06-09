@extends('principal')
@section('words.conteudo')
<div class="col-12 col-xl-12" style="margin-left: 18%;margin-top:5%">
    <!-- Owl corousel style 1 card start -->
    <div class="col-10">
        @csrf
        <a href="{{ url('/words/leson/reset') }}" class="col-2 col-xl-2 col-sm-2 btn btn-inverse btn-square" style="float:right;">Reset</a>
        <!-- <button id="reset" class="col-2 col-xl-2 col-sm-2 btn btn-inverse btn-square" >Reset</button> -->

    </div>
    <div class="card col-8 col-xl-8">
        <div class="row">
            <div style="margin-top: 2%; margin-left:10%" class=" col-10 col-xl-10 owl-carousel carousel-nav  owl-theme">

                @if(count($words)==0)
                <div class="form-group row">
                    <img style="
                    width: 400px;
                    height: 400px;
                    margin-left:50px;
                    " src="\assets\images\slider\sucess.png">

                    </img>

                </div>
                @endif
                @foreach($words as $word)

                <div style="margin-left: 10%;margin-top:5px;" class=" col-6 col-xl-6 col-sm-6 item">
                    <form action="{{ url('/words/leson/comparar') }}" method="GET" class="post-form">
                        @csrf

                        <div class="form-group row">
                            @if(count($words)==0)
                            <img class="" style="margin-left: 10%;" src="\assets\images\slider\sucess.png">

                            </img>
                            <span>Todas as palvras foram respondidas</span>
                            @endif
                            @if($word->status == 0)
                            <img class="" style="margin-left: 10%;" src="\assets\images\slider\white.png">

                            </img>
                            <input readonly="true" style="background: transparent;border: 0 none;" id="foreign_words" name="foreign_words" type="text" class="form-control meio" value="{{$word->foreign_words}}" required>
                            @endif
                            @if($word->status == 1)
                            <input readonly="true" style="background: transparent;border: 0 none;" id="foreign_words" name="foreign_words" type="text" class="form-control meioSucesso" value="{{$word->foreign_words}}" required>
                            <img class="" src="\assets\images\slider\like.png"></img>
                            @endif
                            @if($word->status == 2)
                            <input readonly="true" style="background: transparent;border: 0 none;" id="foreign_words" name="foreign_words" type="text" class="form-control meioFalha" value="{{$word->foreign_words}}" required>
                            <img class="" src="\assets\images\slider\dislike.png">
                            </img>
                            @endif
                        </div>


                        @if($word->status == 0)
                        <div class="row" style="margin-left: 10%;margin-top: 3%">
                            <input class="col-6 col-xl-6 col-sm-6 form-control" id="native_words" name="native_words" type="text" required>
                            <button type="submit" class="col-4 col-xl-4 col-sm-4 btn btn-success btn-square" style="margin-left: 10px">Ok</button>

                        </div>
                        @endif
                    </form>
                </div>

                @endforeach

            </div>
        </div>
    </div>
    <!-- Owl corousel style 1 card end -->
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
        transform: translate(-19%, -40%);
        font-family: "Apple";
        font-size: 50px;


    }

    .meioFalha {
        position: absolute;
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
        top: 55%;
        left: 30%;
        transform: translate(-19%, -40%);
        font-family: "Apple";
        font-size: 50px;
        color: white;
    }


    .meioprincipal {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-65%, -0%);
        font-family: "Apple";

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