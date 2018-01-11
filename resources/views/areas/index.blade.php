@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-lg-12 margin-tb row">
            <div class="pull-left">
                <h2>Gerenciar areas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('areas.create') }}"> Cadastrar nova área</a>
            </div>
        </div>
        <table class="table table-bordered">
        <tr>
            <th>Avaliador</th>
            <th>Nome da área</th>
            <th>Funcionários</th>
            <th>Avaliações</th>
            <th width="280px">Operação</th>
        </tr>
    @foreach ($areas as $area)
    <tr>
        <td>{{ $area->user_id}}</td>
        <td>{{ $area->name}}</td>
        <td>0</td>
        <td>0</td>
        <td>
            <a class="btn btn-info" href="{{ route('areas.show',$area->id) }}">Ver</a>
            <a class="btn btn-primary" href="{{ route('areas.edit',$area->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['areas.destroy', $area->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    {!! $areas->render() !!}
@endsection