<!DOCTYPE html>
<?php require_once 'includes/nav.php'; ?>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" type="text/css" href="css/estilo.css">

  <title>Sistema Portafolio</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	</head>
	 	
    <header class="php">
    	
   
    	
    </header>
    
    <body background="img/background.jpg">
        

<br><br><br><br><br><br><br>



	<div class="container" style="width: 300px; align= center;"  >
		
		<div class="row vertical">
		
			<div style="with:100%;">
			
				<div class="panel panel-info">
				
				
				
					<div class="panel-body" >
					    
					    



<form class="form-horizontal" action="php_action/validarRegister.php"  method="post" id="loginForm" align="center">
			
							<fieldset> 
							  <div class="form-group">
									<div class="col-sm-9">
										
										
									    
<label for="">Nombre: </label>
<br>
<input align="center" type="text" class="form-control" id="username" name="nom" size="30" maxlength="30" placeholder="Usuario" autocomplete="off" required   />

<br>
<label for="">Contraseña: </label>
<input type="password" class="form-control" id="password" name="pass" placeholder="Password" autocomplete="off" required />
									
<br>
<label for="">Email: </label>
<input type="email" class="form-control" id="mail" name="mail" placeholder="Correo Electronico" autocomplete="off"  required />
									
<br><br>

<button type="submit" class="btn btn-default"></i> enviar</button>
									
									</div>
									
								</div>
													
							</fieldset>
						</form>
					    
					    
					    
					    
					    
					    
			
					
					

						

						
					</div>
					<!-- panel-body -->
				</div>
				<!-- /panel -->
			</div>
			<!-- /col-md-4 -->
		</div>
		<!-- /row -->
	</div>
	<!-- container -->	

    </body>
    
</html>