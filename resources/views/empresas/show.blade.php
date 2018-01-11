@extends('layouts.escopo') 
@section('content')
<div class="container-fluid">
  <h1 class="ls-title-intro ls-ico-home">{{ $empresa->name}}</h1>
<div class="ls-list">
  <header class="ls-list-header">
    <div class="ls-list-title col-md-12">
      <a href="#">{{ $empresa->name}}</a>
      <small>Razão Social </small>
    </div>
  </header>
  <div class="ls-list-content ">
    <div class="col-xs-12 col-md-3">
      <span class="ls-list-label">CNPJ</span>
      <strong>{{ $empresa->cnpj}}</strong>
    </div>
    <div class="col-xs-12 col-md-3">
      <span class="ls-list-label">E-mail</span>
      <strong>{{ $empresa->email}}</strong>
    </div>
    <div class="col-xs-12 col-md-3">
      <span class="ls-list-label">Áreas</span>
      <strong>45</strong>
    </div>
    <div class="col-xs-12 col-md-3">
      <span class="ls-list-label">Funcionários</span>
      <strong>45</strong>
    </div>
  </div>
</div>
<div class="ls-list">
  <header class="ls-list-header">
    <div class="col-md-12">
      <div class="ls-list-title">
        <a href="#">Área da empresa</a>
      </div>
      <div class="ls-list-description">
        <p>Área da empresa, são os areas ou setores que serão criados para a aplicação da avaliação de desempenho</p>
        <div class="col-md-12"> 
            @if (count($areas) > 0)
                @foreach ($areas as $area)
                <div class="ls-list">
                  <header class="ls-list-header">
                    <div class="ls-list-title col-md-10">
                      <a href="{{ route('areas.show',$area->id) }}">{{ $area->name}}</a>
                      <small>{{ $area->email}}</small>
                    </div>
                    <div class="col-md-2 ls-txt-right">
                      <a href="{{ route('areas.edit',$area->id) }}" class="ls-btn-primary">Administrar</a>
                      <!--{!! Form::open(['method' => 'DELETE','route' => ['areas.destroy', $area->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}-->
                    </div>
                  </header>
                </div>
                @endforeach
            @endif
          </div>
      </div>
    </div>
  </header>
  <div class="ls-list-content ">
    <div class="col-xs-12 col-md-6">
      <span class="ls-list-label">Status</span>
      <strong>Publicado</strong>
    </div>
    <div class="col-xs-12 col-md-6">
      <span class="ls-list-label">Status</span>
      <strong>Publicado</strong>
    </div>
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
@endsection