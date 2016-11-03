@extends('plantilla')    <!-- resources/views/auth/login.blade.php -->
@section('titulo')
Administrator
@endsection
@section('menu')
<div class="btn-group dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" >
        Management<span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
        <li><a href="/project-managers/">Project Managers</a><span class="caret-right"></span></li>
        <li><a href="/companies/">Companies</a><span class="caret-right"></span></li>
        <li><a href="/employees/">Employees</a><span class="caret-right"></span></li>
        <li><a href="/slidding-puzzles/">Slidding Puzzles</a><span class="caret-right"></span></li>
    </ul>
</div>
@endsection
@section('contenido')
<main id="component" class="detalle">
    <div class="breadcrumb-class">You are in:<a href="/" target="_self" title="Inicio">Home</a></div>
    <div id="system-message-container">
        <div class="alert alert-message">
        	<h4 class="alert-heading">Welcome {{ $user->name }}</h4>
            <div>
               <div class="alert-message">¿What do you want to do?</div>
        	</div>
        </div>
    </div>
</main>
@endsection
