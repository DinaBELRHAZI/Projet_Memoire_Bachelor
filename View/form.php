
<?php
ob_get_clean();
ob_start();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulaire d'inscription d'un étudiant</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="../fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>
		<div class="wrapper">
            <form class="login-form" method="post" action="" enctype="multipart/form-data">
            	<div id="wizard">
            		<!-- SECTION 1 -->
	                <h4></h4>
	                <section>
	                	<div class="form-header">
	                		<!-- <div class="avartar">
								<a href="#">
									<img src="images/avartar.png" alt="">
								</a>
								<div class="avartar-picker">
									<input type="file" name="fileToUpload" id="fileToUpload" class="inputfile" data-multiple-caption="{count} files selected" multiple />
									<label for="file-1">
										<i class="zmdi zmdi-camera"></i>
										<span>Photo de profil</span>
									</label>
								</div>
							</div> -->
							<div class="form-group">
              <div class="form-holder active">
									<input type="hidden" placeholder="id" class="form-control" id="inputPassword4" name="ID_ETUDIANT" required>
								</div>
								<div class="form-holder active">
									<input type="text" placeholder="Nom" class="form-control" id="inputPassword4" name="NOM_ETUDIANT" required>
								</div>
								<div class="form-holder">
									<input type="text" placeholder="Prénom" class="form-control" id="inputPassword4" name="PRENOM_ETUDIANT" required>
								</div>
								<!-- <div class="form-holder">
									<input type="text" placeholder="niveau/classe" class="form-control" id="inputPassword4" name="MAIL" required>
								</div> -->
							</div>
	                	</div>
	                	<div class="form-holder">
							<input type="mail" placeholder="Email" class="form-control">
						</div>
						<div class="form-holder">
							<input type="password" placeholder="Mot de passe" class="form-control" id="inputPassword4" name="MDP_E" required>
						</div>
	                </section>
	                
					<!-- SECTION 2 -->
	                <!-- <h4></h4>
	                <section>
                		<div class="grid">
                			<div class="row"> -->
                				<!-- <a href="#" class="grid-item" style="background-image: url(images/programming-bg.jpg);">
	                				<div class="inner">
	                					<img src="images/programming.png" alt="">
	                					<span>Programming</span>
	                				</div>
	                			</a>
	                			<a href="#" class="grid-item" style="background-image: url('images/research-bg.jpg');">
	                				<div class="inner">
	                					<img src="images/research.png" alt="">
	                					<span>Research</span>
	                				</div>
	                				
	                			</a> -->
	                			<!-- <a href="#" class="grid-item" style="background-image: url('images/teacher-bg.jpg');">
	                				<div class="inner">
	                					<img src="images/teacher.png" alt="">
	                					<span>Elève</span>
	                				</div>
	                				
	                			</a> -->
                			<!-- </div>
                			<div class="row"> -->
                				<!-- <a href="#" class="grid-item" style="background-image: url('images/tour-guide-bg.jpg');">
	                				<div class="inner">
	                					<img src="images/tour-guide.png" alt="">
	                					<span>Administration</span>
	                				</div>
	                			</a>
	                			<a href="#" class="grid-item" style="background-image: url('images/business-bg.jpg');">
	                				<div class="inner">
	                					<img src="images/business.png" alt="">
	                					<span>Professeur</span>
	                				</div>
	                			</a> -->
	                			<!-- <a href="#" class="grid-item" style="background-image: url('images/artist-bg.jpg');">
	                				<div class="inner">
	                					<img src="images/artist.png" alt="">
	                					<span>Artist</span>
	                				</div>
	                			</a> -->
                			<!-- </div>
                		</div>
	                </section> -->

	                <!-- SECTION 3 -->
	                <!-- <h4></h4>
	                <section>
						
	                    <div class="form-row">
	                    	<div class="form-holder">
								<input type="text" placeholder="Street Name" class="form-control">
							</div>
							<div class="form-holder">
								<input type="text" placeholder="Street Number" class="form-control">
							</div>
	                    </div>
	                    <div class="form-row">
	                    	<div class="form-holder">
								<input type="text" placeholder="City" class="form-control">
							</div>
							<div class="form-holder">
								<input type="text" placeholder="Country" class="form-control">
							</div>
	                    </div>
	                </section> -->
            	</div>
            </form>
		</div>


		<script src="../js/jquery-3.3.1.min.js"></script>

		<!-- JQUERY STEP -->
		<script src="../js/jquery.steps.js"></script>

		<script src="../js/main.js"></script>
<!-- Template created and distributed by Colorlib -->
</body>
</html>
