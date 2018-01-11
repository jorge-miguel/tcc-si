<fieldset id="domain-form" class="ls-form-disable ls-form-text">
      <input class="form-control" name="user_id" type="hidden" value="{{ Auth::user()->id }}">
      <label class="ls-label col-md-6 col-lg-8">
        <b class="ls-label-text">CNPJ:</b>
        {!! Form::text('cnpj', null, array('placeholder' => '00.000.000/0000-00', 'class'=>'ls-mask-cnpj')) !!}
      </label>
      <label class="ls-label col-md-6 col-lg-8">
        <b class="ls-label-text">Razão Social:</b>
        {!! Form::text('name', null, array('placeholder' => 'Razão social')) !!}
      </label>
      <label class="ls-label col-md-6 col-lg-8">
        <b class="ls-label-text">E-mail:</b>
        {!! Form::email('email', null, array('placeholder' => 'Email')) !!}
      </label>
    </fieldset>
    <div class="domain-actions ls-display-none">
      <button type="submit" class="ls-btn-primary">Salvar</button>
      <button class="ls-btn" data-ls-fields-enable="#domain-form" data-toggle-class="ls-display-none" data-target=".domain-actions">Cancelar</button>
    </div>