<input type="hidden" name="id_grupo_caseiro" value="1">

<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome',null,array('required' => 'required')) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email',null ,array('required' => 'required')) !!}
</div>

<div class="form-group">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::select('sexo', array('M' => 'Masculino', 'F' => 'Feminino'),null, array('required' => 'required')) !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>
