<fieldset id="domain-form" class="ls-form-disable ls-form-text">
      <label class="ls-label col-md-6 col-lg-8">
        <b class="ls-label-text">CNPJ:</b>
        {!! Form::text('cnpj', null, array('placeholder' => 'CNPJ')) !!}
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