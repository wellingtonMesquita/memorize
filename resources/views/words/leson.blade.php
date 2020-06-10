@extends('principal')
@section('words.conteudo')
<div class="row">
    <!-- Owl corousel style 1 card start -->
    <div class="col-12 col-xl-12 col-sm-12">
        @csrf
        <a href="{{ url('/words/leson/reset') }}" class="col-4 col-xl-4 col-sm-4 btn btn-inverse btn-square" style="float:right;">Reset</a>
        <!-- <button id="reset" class="col-2 col-xl-2 col-sm-2 btn btn-inverse btn-square" >Reset</button> -->

    </div>
    <div class="card">
        <div  class=" row owl-carousel carousel-nav  owl-theme">

            @if(count($words)==0)
            <div class="form-group col-8 col-xl-8 col-sm-8">
                <img style="
                    width: 400px;
                    height: 400px;
                    margin-left:50px;
                    " src="\assets\images\slider\sucess.png">

                </img>

            </div>
            @endif
            @foreach($words as $word)

            <div style="width:100%" class="row">
                <form style="width: 100%;" action="{{ url('/words/leson/comparar') }}" method="GET" class="post-form row">
                    @csrf

                    <div class="form-group " style="width: 100%;">
                        @if(count($words)==0)
                        <img class="col-6 col-xl-6 col-sm-6" src="\assets\images\slider\sucess.svg"></img>
                        <span>Todas as palvras foram respondidas</span>
                        @endif
                        @if($word->status == 0)
                        <img class="col-6 col-xl-6 col-sm-6 meioprincipal" style="justify-content:center" src="\assets\images\slider\white.svg">
                        <input readonly="true" style="background: transparent;border: 0 none;" id="foreign_words" name="foreign_words" type="text" class="form-control meio col-4 col-xl-4 col-sm-4" value="{{$word->foreign_words}}" required>
                        </img>
                       
                        @endif
                        @if($word->status == 1)
                        <input readonly="true" style="background: transparent;border: 0 none;" id="foreign_words" name="foreign_words" type="text" class="form-control meioSucesso" value="{{$word->foreign_words}}" required>
                        <img class="" src="\assets\images\slider\like.svg"></img>
                        @endif
                        @if($word->status == 2)
                        <input readonly="true" style="background: transparent;border: 0 none;" id="foreign_words" name="foreign_words" type="text" class="form-control meioFalha" value="{{$word->foreign_words}}" required>
                        <img class="" src="\assets\images\slider\dislike.svg">
                        </img>
                        @endif
                    </div>


                    @if($word->status == 0)
                    <div class="row"style="width:100%;margin-bottom:0px" >
                        <input class="col-2 col-xl-2 col-sm-4 form-control meioinput " id="native_words" name="native_words" type="text" required>
                        <button type="submit" class="col-2 col-xl-2 col-sm-2 meiobotao btn btn-success btn-square">Ok</button>

                    </div>
                    @endif
                </form>
            </div>

            @endforeach

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
       
        top: -38%;
        left: 60%;
        transform: translate(-50%, -40%);
        font-family: "Apple";
        font-size: 5vw;


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
        top: 55%;
        left: 30%;
        transform: translate(-19%, -40%);
        font-family: "Apple";
        font-size: 50px;
        color: white;
    }


    .meioprincipal {
        height: 350px;
        width:200px;
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
