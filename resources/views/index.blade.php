@extends('layouts.app',["current" => "home"])

@section('body')
    <div class="jumbotron bg-light border-secondary">    
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro do Produto</h5>   
                        <p class="card=text">
                             Aqui você cadstra  todos os produtos.
                            Só não se esqueça de cadastrar as categorias
                        </p>
                        <a href="/produtos"class="btn btn-primary">Cadastre seus produtos </a>
                    </div>
                </div>
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de categorias</h5>   
                        <p class="card=text">
                            Cadastre as categorias dos seus produtos
                        </p>
                        <br>
                        <a href="/categorias"class="btn btn-primary">Cadastre suas categorias </a>

                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection