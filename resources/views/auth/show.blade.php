@extends('layouts.app')

@section('content')
    <ul class="list-unstyled m-4">
        <li>Nome: {{ $project['nome'] }}</li>
        <li>Framework: {{ $project['framework'] }}</li>
        <li>Versione: {{ $project['versione'] }}</li>
        <li>Deployato:
            @if ($project->deployato == 1)
                Sì
            @else
                No
            @endif
        </li>
    </ul>
@endsection
