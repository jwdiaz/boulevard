@extends('welcome')    
@section('titulo')
Create proyect Assignment
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
        <form action="/estimarProyectosLicitados" method="post" class=" well">
		    <center>
		    <BR>
		    <div class="form-group">
                <label>Name of the company &nbsp;&nbsp; &nbsp;&nbsp;</label>
				<input type="text" name="nombredelacaja">
            </div>
			<div class="form-group">
                <label>Name of the project  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</label>
				<input type="text" name="nombredelacaja">
            </div>
			<div class="form-group">
                <label>Stage &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</label>
				<input type="text" name="nombredelacaja" value = "Analysis">
            </div>
			<BR>
			<div
			<button type="submit" class="btn btn-primary btn-lg" style="width:250px">Create</button>
            </div>
			<BR>
            <BR>				
            <div
            <button type="submit" class="btn btn-primary btn-lg" style="width:250px"onclick="window.location.href= 'volver';">Go back to the menu</button>			
			</div>	
            </center>			
        </form>
    </div>
</main>
@endsection