@extends('admin/home')    <!-- resources/views/auth/login.blade.php -->
@section('contenido')
<main id="component" class="detalle">
  <div class="breadcrumb-class">You are in:<a href="/" target="_self" title="Inicio">Home</a>/<a href="/project-managers/" target="_self" title="Project Managers">Project Managers</a>/<span>Register</span></div>
  <div class="spacer"></div>
  <h1>Register Project Manager</h1>
  <div class="row">
      <form id="register_form" role="form" method="post" action="/project-managers/register/" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="form-group col-md-4">
          {!! Form::label('Account* '.($errors->has('account')? $errors->first('account'):'')) !!}
          {!! Form::text('account', Input::old('account'), array('class' => 'form-control', 'required' => '')) !!}
        </div>
        <div class="form-group col-md-4">
          {!! Form::label('Code* '.($errors->has('code')? $errors->first('code'):'')) !!}
          {!! Form::text('code', Input::old('code'), array('class' => 'form-control', 'required' => '')) !!}
        </div>
        <div class="form-group col-md-4">
          {!! Form::label('Name* '.($errors->has('name')? $errors->first('name'):'')) !!}
          {!! Form::text('name', Input::old('name'), array('class' => 'form-control', 'required' => '')) !!}
        </div>
        <div class="form-group col-md-4">
          {!! Form::label('Email* '.($errors->has('email')? $errors->first('email'):'')) !!}
          {!! Form::text('email', Input::old('email'), array('class' => 'form-control', 'required' => '')) !!}
        </div>
        <div class="form-group col-md-4">
          {!! Form::label('Password* '.($errors->has('password')? $errors->first('password'):'')) !!}
          {!! Form::password('password', array('placeholder' => ($errors->has('password')? $errors->first('password'):Lang::get('password')), 'class' => 'form-control', 'required' => '')) !!}
        </div>
        <div class="form-group col-md-4">
          {!! Form::label('Confirm Password* '.($errors->has('password_confirmation')? $errors->first('password_confirmation'):'')) !!}
          {!! Form::password('password_confirmation', array('placeholder' => ($errors->has('password_confirmation')? $errors->first('password_confirmation'):''),'class' => 'form-control', 'required' => '')) !!}
        </div>
        <br />* Fields are required.
          <div class="form-group col-md-4 col-md-offset-8">
          <input class="btn btn-primary form-control" type="submit" value="Register"/>
        </div>
      </form>
  </div>
</main>
@endsection
