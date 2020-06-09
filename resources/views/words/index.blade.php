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
                    <div class="dt-responsive ">
                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>Palavra Nativa</th>
                                    <th>Palavra Estrangeira</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($words as $word)
                                <tr>
                                    <td>{{$word->native_words}}</td>
                                    <td>{{$word->foreign_words}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Palavra Nativa</th>
                                    <th>Palavra Estrangeira</th>
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