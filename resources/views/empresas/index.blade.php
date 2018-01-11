@extends('layouts.escopo')
@section('content')
<div class="container-fluid">
      <h1 class="ls-title-intro ls-ico-users">Empresas</h1>
@if ($message = Session::get('success'))
    <div class="ls-alert-success"><strong>Sucesso!</strong> {{ $message }}</div>
@endif
<a href="{{ route('empresas.create') }}" class="ls-btn-primary">Cadastrar nova</a>
<table class="ls-table">
  <thead>
    <tr>
      <th>Razão Social</th>
      <th class="ls-txt-center hidden-xs">CNPJ</th>
      <th class="ls-txt-center hidden-xs">Responsável</th>
      <th class="ls-txt-center hidden-xs">Áreas</th>
      <th class="ls-txt-center">Funcionários</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($empresas as $empresa)
    <tr>
        <td><a href="{{ route('empresas.show',$empresa->id) }}">{{ $empresa->name}}</a></td>
        <td class="ls-txt-center hidden-xs">{{ $empresa->cnpj}}</td>
        <td class="ls-txt-center hidden-xs">{{$empresa->user->name}}</td>
        <td class="ls-txt-center">{{$empresa->user->name}}</td>
        <td class="ls-txt-center">1</td>
        <td class="ls-txt-right ls-regroup">
            <a href="{{ route('empresas.show',$empresa->id) }}" class="ls-btn ls-btn-sm">Visualizar</a>
          <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
            <a href="#" class="ls-btn ls-btn-sm"></a>
            <ul class="ls-dropdown-nav">
                <li><a href="{{ route('empresas.edit',$empresa->id) }}">Editar</a></li>
                {!! Form::open(['method' => 'DELETE','route' => ['empresas.destroy', $empresa->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Excluir', ['class' => 'ls-btn ls-btn-danger']) !!}
                {!! Form::close() !!}
            </ul>
          </div>
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
<div class="ls-pagination-filter">
  <ul class="ls-pagination">
    <li><a href="#">« Anterior</a></li>
    <li class="ls-active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#" class="hidden-xs">4</a></li>
    <li><a href="#" class="hidden-xs">5</a></li>
    <li><a href="#">Próximo »</a></li>
  </ul>

  <div class="ls-filter-view">
    <label for="">
      Exibir
      <div class="ls-custom-select ls-field-sm">
        <select name="" id="">
          <option value="10">10</option>
          <option value="30">30</option>
          <option value="50">50</option>
          <option value="100">100</option>
        </select>
      </div>
      ítens por página
    </label>
  </div>
</div>


    </div>

    <footer class="ls-footer" role="contentinfo">
  <nav class="ls-footer-menu">
      <h2 class="ls-title-footer">suporte e ajuda</h2>
      <ul class="ls-footer-list">
        <li>
          <a href="#" target="_blank" class="bg-customer-support">
            <span class="visible-lg">Atendimento</span>
          </a>
        </li>
        <li>
          <a href="#" target="_blank" class="bg-my-tickets">
            <span class="visible-lg">Meus Chamados</span>
          </a>
        </li>
        <li>
          <a href="#" target="_blank" class="bg-help-desk">
            <span class="visible-lg">Central de Ajuda (Wiki)</span>
          </a>
        </li>
        <li>
          <a href="#" target="_blank" class="bg-statusblog">
            <span class="visible-lg">Statusblog</span>
          </a>
        </li>
      </ul>
  </nav>
  <div class="ls-footer-info">
    <span class="last-access ls-ico-screen"><strong>Último acesso: </strong>99/99/9999 99:99:99</span>
    <div class="set-ip"><strong>IP:</strong> 000.00.00.000</div>
    <p class="ls-copy-right">Copyright © 1997-2017 Serviços de Internet S/A.</p>
  </div>
</footer>    
    {!! $empresas->render() !!}
@endsection