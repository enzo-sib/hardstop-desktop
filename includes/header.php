		<header>
		<div class="flexlogin">
	       	<div id="header" class="cajaheader">
	       		<img src="img/logoHD.png" class="img1">
	       		<form class="header-form" action="productos.php" method="GET">
	       			<div class="div-header">
						<input type="hidden" name="grupo" value="">
	       				<input type="text" name="p_buscar" placeholder="Buscar productos" class="header-text">
	       				<button type="submit" name="buscar" class="header-button" value="buscar"><span class="icon-search"></span></button>
	       			</div>
	       		</form>
				<div class="botones-header">
					<a href=""><img src="img/carrito.png" class="img3"></a>
					<input type="checkbox" name="activar3" id="activar3">
					<a href="#"><img  id="usuario" src="img/user.png" class="img4" for="activar3"></a>
				</div>
			</div>
			
		</div>	
		<div id="login"  class="arrow_box" style="display: none;">	
					
						<form action="#" class="form-login">
							<input type="text" name="user" class="form-css" placeholder="Usuario">
							<input type="password" name="pw" class="form-css" placeholder="Contraseña">
							<div class="toggler">
  								<input id="toggler-1" name="toggler-1" type="checkbox" value="1"/>
  								<label for="toggler-1" >
    							<svg class="toggler-on" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 130.2 130.2">
      							<polyline class="path check" points="100.2,40.2 51.5,88.8 29.8,67.5 "></polyline>
   								 </svg>
    							<svg class="toggler-off" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 130.2 130.2">
    							<line class="path line" x1="34.4" y1="34.4" x2="95.8" y2="95.8"></line>
     								<line class="path line" x1="95.8" y1="34.4" x2="34.4" y2="95.8"></line>
    								</svg>
									</label>
									<p style="color: white;">Recordame</p>  
								
							</div>
							<input type="submit" name="" class="login-enviar" value="Iniciar sesion">
						</form>
						<div class="login-links">	
							<a href="registro.php" class="opciones">Registrarse</a>
							<a href="" class="opciones">Olvide la contraseña</a>
						</div>
					</div>		
		</header>