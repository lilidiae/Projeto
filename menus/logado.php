<?php
session_start();
$logado = $_SESSION['email'];
?>
<script>
function certeza()
{
alert("Tem certeza que deseja excluir conta?");
}
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar col-12 m-auto position-fixed navbar-expand-lg bg-secundary " style="z-index:999; background-color: #cbaacb  ; opacity: 1,0; top: 0%;">
		  
          <div class="container-fluid col-11 m-auto">
            <a class="navbar-brand text-white" href="">Start Design</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
                <li class="nav-item">
                  <a class="nav-link text-white" href="dicas/index.php">Dicas</a>
                </li>
                <li class="nav-item">
				<a class="nav-link text-white" href="postar/index.php">Postar</a>
			  </li>
			
				<div class= 'nav-item ' > <a class='nav-link text-white me-auto mb-2 mb-lg-0 '><?php $logado?></a></div>
				<div class= 'nav-item '> <a class='nav-link text-danger me-auto mb-2 mb-lg-0' href='auth/logout.php'>Sair</a></div>
			    <div class='nav-item'> <a class='nav-link text-danger me-auto mb-2 mb-lg-0' href='usuarios/deletar.php?y=d' onclick="certeza()"> Excluir conta</a> </div>
			
          </div>
        </nav>
</body>
</html>