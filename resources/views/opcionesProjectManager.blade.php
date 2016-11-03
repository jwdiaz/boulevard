@extends('welcome')    
@section('titulo')
Project manager´s options
@endsection
@section('contenido')



<main id="component" class="wrapper">
    <style>
        .wrapper{
            background:url('/images/fondo_Intranet.jpg') no-repeat center center !important;
            background-size: cover;
        }
        .login{
            max-width: 450px;
            margin: 0 auto;
        }

        .well{
            border: none;
            border-radius: 0;
            background-color: rgba(250,250,250,0.7);
        }
    </style>
    <div class="spacer"></div>
    <div class="Login">
        <form action="/opcionesProjectManager" method="post" class=" well">
		    <center>
			<BR>
			<div
			<button type="submit" class="btn btn-primary btn-lg" style="width:250px" onclick="window.location.href= 'elegirProyectoLicitado';">Picks up bidding project</button>
            </div>
			<BR>
			<BR>
			<div
			<button type="submit" class="btn btn-primary btn-lg" style="width:250px" onclick="window.location.href= 'asignarProyectoInstantaneo';">Assigns instant project</button>
            </div>
			<BR>
			<BR>
			<div
			<button type="submit" class="btn btn-primary btn-lg" style="width:250px"onclick="window.location.href= 'solveSlidingPuzzle';">Solves sliding puzzle</button>
            </div>
			<BR>
			<BR>
			<div
			<button type="submit" class="btn btn-primary btn-lg" style="width:250px"onclick="window.location.href= 'recruitMember';">Recruits member</button>
            </div>
			<BR>
			<BR>
			<div
			<button type="submit" class="btn btn-primary btn-lg" style="width:250px"onclick="window.location.href= 'memberState';">Change member´s state</button>
            </div>
			</center>
        </form>
    </div>
</main>
@endsection


