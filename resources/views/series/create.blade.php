
@extends ('layout')

@section('css')
    <style>
    
    </style>
@endsection

@section('cabecalho')
    Adicionar Serie
@endsection



@section('conteudo')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form method="post">
    @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control " name="nome" id="nome">
        </div>

    <div class="container">
        <button class="btn btn-primary">Adicionar</button>
        <a href="{{ route('index') }}" class="btn btn-dark ">Voltar</a>
    </div>
    </form>

@endsection
