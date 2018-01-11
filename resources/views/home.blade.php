@extends('layouts.escopo')
@section('content')
<div class="container-fluid">
  <h1 class="ls-title-intro ls-ico-dashboard">Página inicial</h1>
<div class="ls-box ls-board-box">
  <header class="ls-info-header">
    <h2 class="ls-title-3">Resumo da conta</h2>
  </header>
  <div id="sending-stats" class="row">
    <div class="col-sm-6 col-md-4">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">Dados</h6>
        </div>
        <div class="ls-box-body">
          <div class="col-xs-4">
            <strong>{{$countEmpresas}}</strong>
            <small>Empresas</small>
          </div>
          <div class="col-xs-4">
            <strong>{{$countDepartamentos}}</strong>
            <small>Áreas</small>
          </div>
          <div class="col-xs-4">
            <strong>{{$countUsuarios}}</strong>
            <small>Funcionários</small>
          </div>
        </div>
        <div class="ls-box-footer">
          <a href="#" aria-label="Mudar o Plano de Revenda" class="ls-btn ls-btn-sm" title="Mudar o Plano de Revenda">Cadastrar</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">Avaliações</h6>
        </div>
        <div class="ls-box-body">
          <div class="col-xs-6">
            <strong>10</strong>
            <small>Em andamento</small>
          </div>
          <div class="col-xs-6">
            <strong>10</strong>
            <small>Finalizadas</small>
          </div>
        </div>
        <div class="ls-box-footer">
          <a href="#" aria-label="Comprar mais envios" class="ls-btn ls-btn-sm" title="Ver mais">Ver mais</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">EMPRESAS</h6>
        </div>
        <div class="ls-box-body">
          <strong>4</strong>
        </div>
      </div>
    </div>
  </div>
</div>
</div>



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>Seja bem vindo {{ Auth::user()->name }}</h5>
                    <p>Meu perfil: {{ Auth::user()->perfil }}</p>
                    <p>E-mail: {{ Auth::user()->email }}</p>
                    <p>Empresa: {{ Auth::user()->email }}</p>
                    <p>Área: {{ Auth::user()->email }}</p>
                    <p>Cargo: {{ Auth::user()->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
