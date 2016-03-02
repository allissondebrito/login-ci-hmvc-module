<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Área Administrativa - Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.css">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        
        <div class="container">    

        	<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        		<div class="panel panel-info" >

        			<div class="panel-heading">
        				<div class="panel-title">Login - Por favor realize o login no sistema</div>
        			</div>     

        			<div style="padding-top:30px" class="panel-body" >

        				<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

        				<form id="loginform" class="form-horizontal" role="form" method="post" action="login/logar">

        					<div style="margin-bottom: 25px" class="input-group">
        						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        						<input id="emailAdmin" type="text" class="form-control" name="emailAdmin" value="" placeholder="E-mail">                                        
        					</div>

        					<div style="margin-bottom: 25px" class="input-group">
        						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        						<input id="senhaAdmin" type="password" class="form-control" name="senhaAdmin" placeholder="Senha">
        					</div>


        					<div style="margin-top:10px" class="form-group">
        						<!-- Button -->

        						<div class="col-sm-12 controls">
        							<input type="submit" id="btn-login" value="Realizar Login" class="btn btn-success">
        						</div>
        					</div>


        					<div class="form-group">
        						<div class="col-md-12 control">
        							<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
        								Desenvolvido por Fire Tecnologia - 2014 / <?php echo date('Y');	?>
        							</div>
        						</div>
        					</div>    

        				</form>  

        			</div>  

        		</div>  

        	</div>

        </div>
    

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>

    </body>
</html>