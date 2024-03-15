@extends('master')
@section('content')

<div class="container-md" style="text-align: center;">
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <a href="{{ route('users.index') }}" class="myCard">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Users</h5>
                        <p class="card-text">Veja todos os usuários cadastrados.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6">
            <a href="#" class="myCard">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Categorias</h5>
                        <p class="card-text">Veja todas as categorias cadastradas</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <a href="#" class="myCard">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Livros</h5>
                        <p class="card-text">Veja todas os livros cadastrados.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6">
            <a href="#" class="myCard">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Empréstimo</h5>
                        <p class="card-text">Veja todas os empréstimos cadastrados.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection