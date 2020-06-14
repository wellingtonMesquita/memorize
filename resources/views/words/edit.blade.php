@extends('principal')
@section('words.conteudo')
<div class="page-wrapper">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Memorize</h4>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="#!"> <i class="icofont icofont-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Memorize</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

    <!-- Page body start -->
    <div class="page-body">
        <div class="row">

            <div class="card col-12">

                <div class="card-block">
                    <h4 class="sub-title">Cadastro de Palavras</h4>
                    <form action="{{ route('words.update',$word->id) }}" method="POST" class="post-form">
                        @method('PUT')
                        @csrf
                        <div class="form-group row">
                            <label for="palavra_portugues" class="col-sm-2 col-form-label">Palavra Estrangeira</label>
                            <div class="col-sm-6">
                                <input id="foreign_words" name="foreign_words" type="text" class="form-control" value="{{$word->foreign_words}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="palavra_ingles" class="col-sm-2 col-form-label">Tradução</label>
                            <div class="col-sm-6">
                                <input id="native_words" name="native_words" type="text" class="form-control" value="{{$word->native_words}}" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" style="float: right; margin-bottom: 10px;" class="btn btn-success btn-square">Cadastrar</button>
                        </div>
                </div>


            </div>
            <!-- Default card start -->




            <!-- Default card end -->

        </div>
    </div>
    <!-- Page body end -->
</div>
@stop