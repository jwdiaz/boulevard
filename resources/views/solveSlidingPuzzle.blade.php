@extends('welcome')    
@section('titulo')
Solve sliding puzzle
@endsection
@section('contenido')
<link rel="stylesheet" href="css/style.css">
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
<!-- Jquery -->


<div id="puzzle"></div>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

      <script src="js/puzzle.js"></script>
    
    </div>       

    </div>
      <center>
			<div id="buttonDiv">
       
			<div
            <button type="submit" class="btn btn-primary btn-lg" style="width:250px"onclick="window.location.href= 'volver';">Go back to the menu</button>			
			</div></center>	
        </form>
    </div>
</main>
@endsection
