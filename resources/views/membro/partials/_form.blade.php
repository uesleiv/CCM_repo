<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome') !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email') !!}
</div>

<div class="form-group">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::select('sexo', array('M' => 'Masculino', 'F' => 'Feminino')) !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>
