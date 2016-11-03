@extends('welcome')    
@section('titulo')
Change Member State
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
        <form action="/recruitMember" method="post" class=" well">
			<center>
			<BR>
		    <div class="form-group">
                <label>List of Members</label>
            </div>
			<BR>
			<select name="Member">
			<option>Andres David Mesa</option>
			<option>James Wilmer</option>
			<option>Andres Felipe Arboleda</option>
			</select>
			
			<select name="transporte">
			<option>Busy</option>
			<option>Free</option>
			</select>
			</center>
			<BR>
			<BR>
			<center>
			<div
			<button type="submit" class="btn btn-primary btn-lg" style="width:250px">Change</button>
            </div>
			<BR>
			<BR>
            <div
            <button type="submit" class="btn btn-primary btn-lg" style="width:250px"onclick="window.location.href= 'volver';">Go back to the menu</button>			
			</div>
			</center>
			<BR>			
        </form>
    </div>
</main>
@endsection