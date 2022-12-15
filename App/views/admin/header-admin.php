<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../ressources/bootstrap-4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="../ressources/bootstrap-4.5.0/js/bootstrap.bundle.min.js"></script>
		<style>
			.big-header {
				display:none;
			}
			@media  (max-width: 960px) {
				.large-header {
					display:none;
				}
				.big-header {
					display:block;
			}
			}
		</style>
</head>
<body>
	<header class="big-header">
		<div class=" bg-dark">
			<nav class="navbar navbar-dark d-flex justify-content-between">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="d-flex align-items-center" style>
					<a class="nav-link d-flex" href="">
						<img src="../../../Public/ressources/images/logo.svg" alt="admin profil" style="width:50px; height:50px"/>
						<h1 class="text-white" > HITech.NET<h1>
					</a>
				</div> 
			</nav>
			<div class="collapse" id="navbarToggleExternalContent">
				<div class="bg-dark p-4">
					<h2 class="text-secondary ">Gestion des produits</h2>
					<div class="btn-group" style="margin-right: 60px;">
						<img src="../../../Public/ressources/images/product-1/desc-2.jpg" alt="" style="border-radius:50%;width:50px;height:50px;">
						<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="text-white">Bob</span>
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">Profil</a>
							<a class="dropdown-item" href="#">Deconnexion</a>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</header>
    <header class="large-header">
       
		<div class="card-header bg-dark">
			<div class="d-flex justify-content-between">
				<div class="d-flex align-items-center ">
					<a class="nav-link d-flex" href="">
						<img src="../../../Public/ressources/images/logo.svg" alt="" style="width:50px; height:50px"/>
						<h1 class="text-white" > HITech.NET<h1>
					</a>
					<h2 class="text-secondary ">Gestion des produits</h2>
				</div>   
				<div class="btn-group" style="margin-right: 60px;">
					<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="../../../Public/ressources/images/product-1/desc-2.jpg" alt="" style="border-radius:50%;width:50px;height:50px;">
						<span class="text-white">Bob</span>
					</button>
					<div class="dropdown-menu">
					<a class="dropdown-item" href="#">Profil</a>
					<a class="dropdown-item" href="#">Deconnexion</a>
					</div>
				</div>
			</div>  
    	</div>
    </header>

    <main style ="padding-inline:10px">
        <div class="card-fluid">
            <div class="row">
                <div class="col-3 bg-light">
                    <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <ul class="list-unstyled">
                            <li >
                                <a href="#"  class="navbar-brand text-dark">
                                    <i class="bi bi-house-door-fill"></i>
                                    Accueil
                                </a>
                                <ul class="list-unstyled">
                                    <li style="margin-block: 8px;">
                                        <a href="#"  class="nav-link" style="padding-inline:10px;">Tableau de bord</a>				
                                    </li>								
                                </ul>
                            </li>
                        </ul>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#" class="navbar-brand text-dark" style="margin-block: 10px;">
                                    <i class="bi bi-globe2"></i>
                                    Site web
                                </a>
                                <ul class="list-unstyled">
                                    <li style="margin-block: 8px;">
                                        <a href="#"  class="nav-link" style="padding-inline:10px;" >Gestion des rubriques</a>				
                                    </li>
                                    <li style="margin-block: 8px;">
                                        <a href="#"  class="nav-link" style="padding-inline:10px;">Gestion des actualités</a>				
                                    </li>								
                                </ul>
                            </li>
                        </ul>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#" class="navbar-brand text-dark" style="margin-block: 10px;">
                                    <i class="bi bi-shop"></i>
                                    Boutiques
                                </a>
                                <ul class="list-unstyled">
                                    <li style="margin-block: 8px;">
                                        <a href="#"  class="nav-link" style="padding-inline:10px;">Gestion des rayons</a>				
                                    </li>
                                    <li style="margin-block: 8px;">
                                        <a class="nav-link" href="products.php" style="padding-inline:10px;">Gestion des Produits</a>								
                                    </li>
                                    <li style="margin-block: 8px;">
                                        <a href="#" class="nav-link" style="padding-inline:10px;">Gestion des commandes</a>				
                                    </li>									
                                </ul>
                            </li>
                        </ul>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#" class="navbar-brand text-dark" style="margin-block: 10px;">
                                    <i class="bi bi-gear-fill"></i>
                                        Paramètres
                                </a>
                                <ul class="list-unstyled">
                                    <li style="margin-block: 8px;">
                                        <a href="#"  class="nav-link" style="padding-inline:10px;">Gestion des utilisateurs</a>				
                                    </li>
                                    <li style="margin-block: 8px;">
                                        <a href="#"  class="nav-link" style="padding-inline:10px;">Gestion des rôles</a>				
                                    </li>
                                    <li style="margin-block: 8px;">
                                        <a href="#"  class="nav-link" style="padding-inline:10px;">Préférences</a>				
                                    </li>
                                </ul>
                            </li>						
                        </ul>					
                    </nav>
                </div>
