@extends('layouts.escopo')
@section('content')
<div class="container-fluid">
   <h1 class="ls-title-intro ls-ico-dashboard">Nova avaliação</h1>
   <form action="" class="ls-form row">
      <div class="ls-steps">
         <div class="ls-steps-mobile">
            <a class="ls-steps-mobile-btn ls-ico-chevron-down"></a>
         </div>
         <ol class="ls-steps-nav">
            <li>
               <button class="ls-steps-btn" data-ls-module="steps" data-target="#step1" title="Básico"></button>
            </li>
            <li>
               <button class="ls-steps-btn" data-ls-module="steps" data-target="#step2" title="Relacionar"></button>
            </li>
            <li>
               <button class="ls-steps-btn" data-ls-module="steps" data-target="#step3" title="Conteúdo"></button>
            </li>
            <li>
               <button class="ls-steps-btn" data-ls-module="steps" data-target="#step4" title="Destinatários"></button>
            </li>
            <li>
               <button class="ls-steps-btn" data-ls-module="steps" data-target="#step5" title="Envios"></button>
            </li>
         </ol>
         <div class="ls-steps-main">
            <div class="ls-steps-content" id="step1">
               <fieldset>
                  <label class="ls-label col-md-6">
                     <b class="ls-label-text">Nome da avaliação</b>
                     <p class="ls-label-info">Insira o nome da avaliação</p>
                     <input type="text" name="nome" placeholder="Ex: Avaliação 001" required >
                  </label>
                  <label class="ls-label col-md-6 col-sm-12">
                     <b class="ls-label-text">Data de início</b>
                     <p class="ls-label-info">Selecione a data inicial</p>
                     <div class="ls-prefix-group">
                        <span data-ls-module="popover" data-content="Escolha o período desejado e clique em 'Filtrar'."></span>
                        <input type="date" name="range_start" class="datepicker ls-daterange" placeholder="dd/mm/aaaa" id="datepicker1" data-ls-daterange="#datepicker2">
                        <a class="ls-label-text-prefix ls-ico-calendar" data-trigger-calendar="#datepicker1" href="#"></a>
                     </div>
                  </label>
                  <label class="ls-label col-md-6 col-sm-12">
                     <b class="ls-label-text">Data limite</b>
                     <p class="ls-label-info">Selecione a data final</p>
                     <div class="ls-prefix-group">
                        <span data-ls-module="popover" data-content="Clique em 'Filtrar' para exibir  o período selecionado."></span>
                        <input type="date" name="range_end" class="datepicker ls-daterange" placeholder="dd/mm/aaaa" id="datepicker2">
                        <a class="ls-label-text-prefix ls-ico-calendar" data-trigger-calendar="#datepicker2" href="#"></a>
                     </div>
                  </label>
               </fieldset>
               <div class="ls-actions-btn">
                  <a href="#" class="ls-btn-primary ls-float-right" data-action="next">Próximo</a>
               </div>
            </div>
            <div class="ls-steps-content" id="step2">
               <fieldset>
                  <label class="ls-label col-md-6 col-sm-12">
                     <b class="ls-label-text">Empresa</b>
                     <p class="ls-label-info">Selecione a Empresa</p>
                     <div class="ls-custom-select">
                        <select name="empresa" class="ls-custom">
                           <option value="">Selecione</option>
                           @foreach ($empresas as $empresa => $value)
                           <option value="{{ $empresa }}"> {{ $value }}</option>
                           @endforeach
                        </select>
                     </div>
                  </label>
                  <label class="ls-label col-md-6 col-sm-12">
                     <b class="ls-label-text">Área</b>
                     <p class="ls-label-info">Selecione a Empresa</p>
                     <div class="ls-custom-select">
                        <select name="area" class="ls-custom">
                           <option>--State--</option>
                        </select>
                     </div>
                  </label>
               </fieldset>
               <div class="ls-actions-btn">
                  <a href="#" class="ls-btn" data-action="prev">Anterior</a>
                  <a href="#" class="ls-btn-primary ls-float-right" data-action="next">Próximo</a>
               </div>
            </div>
            <div class="ls-steps-content" id="step3">
               <label class="ls-label col-md-6 col-sm-12" id="profs">
                  <b class="ls-label-text">Questionário relacionado a Conhecimentos</b>
                  <p class="ls-label-info">Insira o nome da avaliação</p>
                  <input type="hidden" name="count" value="1" />
                  <div class="ls-prefix-group">
                     <input type="text" class="ls-txt-center ls-no-spin" id="field1" name="prof1" placeholder="Type something" data-items="8"/>
                     <button id="b1" class="ls-label-text-prefix ls-bg-white" type="button" style="float: right;">+</button>
                     <br>
                  </div>
                  <!--<div class="row">
                     <div class="ls-prefix-group col-md-4 col-sm-8 col-lg-3">
                       <a href="" class="ls-label-text-prefix ls-bg-white">-</a>
                       <input type="number" value="8" class="ls-txt-center ls-no-spin">
                       <a href="" class="ls-label-text-prefix ls-bg-white">+</a>
                     </div>
                     </div>-->
               </label>
               <div class="ls-actions-btn">
                  <a href="#" class="ls-btn" data-action="prev">Anterior</a>
                  <a href="#" class="ls-btn-primary ls-float-right" data-action="next">Próximo</a>
               </div>
            </div>
            <div class="ls-steps-content" id="step4">
               <p>Quibusdam eaque vero ex et optio sed temporibus nam placeat. necessitatibus sapiente totam ea minima aut eum ut quidem. saepe libero porro est ad consequatur facere rerum eos minus dolore voluptas veniam cupiditate
                  Eum aut eos similique sunt nulla pariatur dignissimos fugiat consequatur omnis autem nesciunt placeat alias. amet consectetur dignissimos soluta reprehenderit. vero voluptas deleniti minus sed qui beatae ex sint cumque. rerum ducimus sunt illum quidem quia tempore aut corrupti aut explicabo repellat. recusandae repellendus itaque exercitationem veniam repudiandae et consequatur ex eius deserunt praesentium facere et architecto. nostrum quos vel repellat
                  Beatae nostrum inventore consequatur fugiat unde ea alias. consequatur temporibus iusto corporis quia in enim tempore qui vel sunt sint. tempora et tenetur dicta dolor eum eaque eum enim velit aperiam rem odit ut. vero alias accusantium eum velit ea earum delectus sequi veritatis possimus. et alias quos et modi voluptatem earum veritatis molestias
               </p>
               <div class="ls-actions-btn">
                  <a href="#" class="ls-btn" data-action="prev">Anterior</a>
                  <a href="#" class="ls-btn-primary ls-float-right" data-action="next">Próximo</a>
               </div>
            </div>
            <div class="ls-steps-content" id="step5">
               <p>Ab dignissimos eveniet ex veniam et voluptas facilis consequatur esse at reiciendis aliquam. temporibus repudiandae beatae laboriosam delectus ipsam velit voluptas dolorem error molestiae. laboriosam consequatur ipsum aut sequi minima unde deserunt non ut
                  Veniam recusandae commodi inventore. porro vel eos est praesentium aut qui quis quos. beatae aliquam praesentium aspernatur
                  Ut quas ipsam repellendus nam ut corrupti. ea hic architecto fuga dicta nostrum vitae voluptas velit voluptas ex. qui quisquam et at sed dolor et beatae accusantium iste eveniet sint ipsam sit fuga. possimus quasi nisi odit ea qui non. cumque ex minus qui repudiandae ducimus soluta dignissimos. vel quia corrupti repudiandae praesentium consectetur velit dolore sequi corrupti dolore quae amet minus enim. eius inventore dolores repudiandae voluptatem dolorem non
               </p>
               <div class="ls-actions-btn">
                  <a href="#" class="ls-btn" data-action="prev">Anterior</a>
                  <a href="#" class="ls-btn-primary ls-float-right">Finalizar</a>
               </div>
            </div>
         </div>
      </div>
   </form>
</div>
@endsection