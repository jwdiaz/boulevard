@extends('welcome')    
@section('titulo')
Assigns instant project
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
        <form action="/asignarProyectoInstantaneo" method="post" class=" well">
		    <center>
		    <BR>
		    <div class="form-group">
                <label>List of instants projects</label>
            </div>
			<div
			<button type="submit" class="btn btn-primary btn-lg" style="width:250px" onclick="window.location.href= 'asignacionProyecto';">Assign</button>
            </div>
			<BR>
			<BR>
			<div
            <button type="submit" class="btn btn-primary btn-lg" style="width:250px"onclick="window.location.href= 'volver';">Go back to the menu</button>			
			</div>
			<BR>
			<BR>
						<table>
            <tr>
			<td><strong>Name &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</strong></td>
            <td><strong>Description &nbsp;&nbsp;</strong></td>
            </tr>
 
            <tr>
			<td>Software w</td>
            <td>...</td>
            </tr>

            <tr>
			<td>Software z</td>
            <td>...</td>
            </tr>
 
            </table>
			</center>
        </form>
    </div>
</main>
@endsection