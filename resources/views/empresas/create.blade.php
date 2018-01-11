@extends('layouts.escopo')
@section('content')
<div class="container-fluid">
  <h1 class="ls-title-intro ls-ico-users">Editar empresa</h1>
  <a class="btn btn-primary" href="{{ route('empresas.index') }}"> Voltar</a>
<div class="ls-box">
  <div class="ls-float-right ls-regroup">
    <a href="" class="ls-btn-primary" target="_blank">Acessar o Painel</a>
    <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
      <a href="#" class="ls-btn"></a>
      <ul class="ls-dropdown-nav">
        <li>
          <a href="" data-ls-fields-enable="#domain-form" data-toggle-class="ls-display-none" data-target=".domain-actions" class="domain-actions">Editar</a>
        </li>
        <li><a href="#" data-ls-module="modal" data-target="#editPassword">Alterar senha</a></li>
        <li><a href="#">Desativar</a></li>
      </ul>
    </div>
  </div>
    {!! Form::open(array('route' => 'empresas.store','class' => 'ls-form row', 'data-ls-module' => 'form','method'=>'POST')) !!}
                 @include('empresas.form')
            {!! Form::close() !!}
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
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection