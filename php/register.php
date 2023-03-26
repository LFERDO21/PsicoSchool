<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<title>PsicoVAK</title>
</head>
<body>
<div class="circulos">
	<div class="circle1"></div>
	<div class="circle2"></div>
	<div class="circle3"></div>
	<div class="circle4"></div>
	<div class="circle5"></div>
	<div class="circle6"></div>
</div>
 <div class="container">
 	<div class="login">
        	<center>
			<img class="milogo" src="../img/PsicoVAK.png"></center>
            <p class="login-text" style="font-size: 1.5rem; font-weight: 400;">Registro</p>
            <div class="form-register">
                <input type="text" class="form-input" placeholder="Usuario" name="username" class="input-48">
                <input type="text" class="form-input" placeholder="Email" name="email" class="input-48">
                <input type="text" class="form-input"  placeholder="Contraseña" name="password" class="input-100">
                <input type="text" class="form-input" placeholder="Confirmar contraseña" name="cpassword" class="input-100">
            </div>
            <form class="formulario">
            <div class="radio">
            	<center>
            	<input type="radio" name="sexo" id="hombre">
            	<label for="hombre">Hombre</label>
            	<input type="radio" name="sexo" id="mujer">
            	<label for="mujer">Mujer</label>
            	<input type="radio" name="sexo" id="alien">
            	<label for="alien">Alien</label>
            	</center>
            </div>
            </form>
            <br>
            <div class="input-group">
               <center><button name="submit" class="btn">Registrarme<a href="#"></a></button></center>
            <div class="tex">
            <center><br>
            <a href="login.php">Login</a></center>
            </div>
            </div>
     </div>
    </div>	
</body>
</html>