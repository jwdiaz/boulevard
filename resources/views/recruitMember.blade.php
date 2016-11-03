@extends('welcome')    
@section('titulo')
Recruits Member
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
                <label>List of Free Members</label>
            </div>
			<BR>
			<select name="Member" size="5">
			<option>Andres David Mesa - admesap@softwareboulevard.com</option>
			<option>James Wilmer - jwilmer@softwareboulevard.com</option>
			<option>Andres Felipe - afarboleda@softwareboulevard.com</option>
			<option>Albeiro Bedoya - abedoya@softwareboulevard.com</option>
			<option>Sandra Lopez - slopez@softwareboulevard.com</option>
			<option>Wilson Daniel - wdaniel@softwareboulevard.com</option>
			<option>Camilo Mejia - cmejia@softwareboulevard.com</option>
			<option>Andrea Serna - aserna@softwareboulevard.com</option>
			<option>Esteban Suarez - esuarez@softwareboulevard.com</option>
			<option>Laura Maya - lmaya@softwareboulevard.com</option>
			<option>Jose Lopez - jlopez@softwareboulevard.com</option>
			<option>Leandro Guerra - lguerra@softwareboulevard.com</option>
			</select>
			</center>
			<BR>
			<BR>
			<center>
			<div
			<button type="submit" class="btn btn-primary btn-lg" style="width:250px">Send Message</button>
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