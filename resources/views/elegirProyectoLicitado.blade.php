@extends('welcome')    
@section('titulo')
Picks up bidding project
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
        <form action="/elegirProyectoLicitado" method="post" class=" well">
		    <center>
		    <BR>
		    <div class="form-group">
            <label>List of bidding projects</label>
            </div>
			<div
			<button type="submit" class="btn btn-primary btn-lg" style="width:250px"onclick="window.location.href= 'estimarProyectosLicitados';">Pick up</button>
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
            <td><strong>Analyst level &nbsp;&nbsp;</strong></td>
            <td><strong>Developer level &nbsp;&nbsp;</strong></td>
            <td><strong>Tester level &nbsp;&nbsp;</strong></td>
			<td><strong>Demanded k &nbsp;&nbsp;</strong></td>
            <td><strong>Threshold &nbsp;&nbsp;</strong></td>
            </tr>
 
            <tr>
			<td>Software x</td>
            <td>...</td>
            <td>5</td>
            <td>4</td>
            <td>5</td>
            <td>100</td>
            <td>10%</td>
            </tr>

            <tr>
			<td>Software y</td>
            <td>...</td>
            <td>3</td>
            <td>4</td>
            <td>4</td>
            <td>150</td>
            <td>15%</td>
            </tr>
 
            </table>
			</center>
        </form>
    </div>
</main>
@endsection