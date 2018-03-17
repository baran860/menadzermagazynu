<?php include_once('funkcje.php'); ?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Magazyn Menedżer v1.0</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="css/my_cs.css" rel="stylesheet">
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>
	


	</script>
</head>
<body >
		<div class="row">
			<div class="col-lg-2">
				<?php CreateNavLeft(); ?>
			</div>
			<div class="col-lg-9">
				<!--Formularz logowania-->
				<div class="card centered-element" id="form_log">
					<?php 
						
						if($_GET['page'] == "pracownicy"){
							CreatePagePracownicy(); 
						}elseif($_GET['page'] == "narzedzia"){
							CreatePageNarzedzia(); 
						}	
						elseif($_GET['page'] == "kto_wypo"){
							CreatePageWypozyczyl();
						}else{
							echo "Brak podanej strony!";
						}
					?>

				</div>
			</div>
			<div class="col-lg-1"></div>
		</div>
  </body>
</html>