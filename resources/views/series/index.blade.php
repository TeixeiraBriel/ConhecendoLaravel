
@extends ('layout')

@section('css')
    <style>
        .formulario{
        display:flex;
        justify-content: space-between;
        align-items: center;
        }
    </style>
@endsection

@section('cabecalho')
Series
@endsection



@section('conteudo')
    @if(!empty($mensagem))
    <div class="alert alert-success">
        {{ $mensagem }}
    </div>
    @endif

    <a href="{{ route('createSerie') }}" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item formulario">
                {{$serie->nome}}
                <form method="post" action="/series/{{ $serie->id }}" onSubmit="return confirm('Tem certeza que quer remover {{$serie->nome}} ? ')">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
