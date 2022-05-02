<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

	<script src="../ÖDEV/js/popper.min.js" ></script>
	<script src="../ÖDEV/js/bootstrap.min_.js" ></script>
	<script src="../ÖDEV/js/jquery-3.3.1.min.js" ></script>
	<script src="../ÖDEV/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" href="../ÖDEV/css/bootstrap.minn.css"/> 

	<style>
		.kenarlik{ 
			border:4px solid #FFFF99; 
		}

		.colorWhite * {
			color: white !important;
		}

		a:hover { 
			color:white !important;
		}
	</style>

	<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();
		});
	</script>

<?php
include "fonksiyonlar.php";
?>

</head>
<body style="color:white ;background: black;">
<div class="container">

	<div class="row p-1 mt-5">
	 		<div class="col-12 kenarlik">
	 			
	 					<?php
	 						$anaBolumIndex=1;
	 					?>
	 					<img src="<?php echo tekliIcerikAl($anaBolumIndex)?>" class="img-fluid" />
	       </div>
    </div>


   	<div class="row p-1">
	 		<div class="col-12 kenarlik rounded colorWhite">
	 			<div class="row align-items-end">
	 				<div class="col-2">
	 					<?php
	 						$anaBolumIndex=2;
	 					?>
	 					<img src="<?php echo tekliIcerikAl($anaBolumIndex)?>" class="img-fluid" />
	 				</div>
	 				<div class="col-auto p-2 colorWhite">
	 					<?php
	 						$anaBolumIndex=3;
	 					?>
	 					<h3 class="m-0 d-none d-lg-block "><?php echo tekliIcerikAl($anaBolumIndex)?></h3>
	 					<h6 class="m-0 d-block d-lg-none"><?php echo tekliIcerikAl($anaBolumIndex)?></h6>
	 				</div>
                   <div class="colorWhite">
	 				<?php
	 					$anaBolumIndex=4;
	 					$sonuc=cokluIcerikAl($anaBolumIndex);
	 					$ks=$sonuc->num_rows;
	 					
	 				?>
	 			   </div>
	 			     <div class="col-12 col-lg p-2 colorWhite ">
	 					<div class="row justify-content-lg-end py-2 py-lg-0">
	 						<?php
	 							for($i=0;$i<$ks;$i++){
									$kayit=$sonuc->fetch_assoc();
									$icerik=$kayit["icerik"];
									$linkId=$kayit["linkId"];
									if ($linkId!=0){
										$link=linkAl($linkId);
									}
									else{
										$link="#";
									}
							 echo "<div class='col-auto'><a href='$link'>$icerik</a></div>";
							//echo '<div class="col-auto"><a href="color :red;"></a></div>';
	 							}
	 						?>
	 						
	 					</div>
	 				</div>
	 			</div>
	 		</div>
    </div>

    <div class="row p-1">
	 		<div class="col-12 text-white p-2 rounded kenarlik">
	 			<div class="row">
		 			<div class="col">
		 				<?php
	 						$anaBolumIndex=5;
	 					?>
		 				<h5><?php echo tekliIcerikAl($anaBolumIndex)?></h5>
		 			</div>
	 			</div>
	 		</div>
    </div>


    <div class="row my-2 p-1">
	 		<div class="col-12 rounded" style = "background:black; color: white;">
	 			<div class="row">
	 				<?php
	 				$tekrarSayisi=4;
	 				$anaBolumIndex=6;
	 				$sonuc=cokluIcerikAl($anaBolumIndex);
	 				for($i=0;$i<$tekrarSayisi;$i++){
		 				echo '<div class="col kenarlik">';
		 					echo '<div class="card text-center h-100" style = "background:black; color: white;">';
							  echo '<div class="card-header text-white">';
							  	$kayit=$sonuc->fetch_assoc();
							  	$icerik=$kayit["icerik"];
							    echo '<h4>'.$icerik.'</h4>';
							  echo '</div>';
							  echo '<div class="card-body">';
							  
							    $kayit=$sonuc->fetch_assoc();
							  	$icerik=$kayit["icerik"];
							    echo '<img src="'.$icerik.'" class="img-fluid" />';
							    	$kayit=$sonuc->fetch_assoc();
							  	$icerik=$kayit["icerik"];
							    echo '<h5 class="card-title mt-3 ">'.$icerik.'</h5>';
							    $kayit=$sonuc->fetch_assoc();
							  	$icerik=$kayit["icerik"];
							    echo '<p class="card-text">'.$icerik.'</p>';
							  echo '</div>';
							  echo '<div class="card-footer"style = "background:black; color: white;">';
							  		$kayit=$sonuc->fetch_assoc();
									$icerik=$kayit["icerik"];
									$linkId=$kayit["linkId"];
									if ($linkId!=0){
										$link=linkAl($linkId);
									}
									else{
										$link="#";
									}
							 
							    echo '<h6 class="mt-1">'.$icerik.'</h6>';
							    $kayit=$sonuc->fetch_assoc();
								$icerik=$kayit["icerik"];
								    echo '<a href="'.$link.'" class="btn btn-warning mt-2">'.$icerik.'</a>';
							    $kayit=$sonuc->fetch_assoc();
								$icerik=$kayit["icerik"];
							    echo '<h6 class="text-white mt-3">'.$icerik.'</h6>';
							  echo '</div>';
							echo '</div>';
		 				echo '</div>';
		 			}
	 				?>
	 			</div>
	 		</div>
	</div>

  
    <div class="row my-2 p-1">
	 		<div class="col-12 rounded" style = "background:black; color: white;">
	 			<div class="row">
	 				<?php
	 				$tekrarSayisi=4;
	 				$anaBolumIndex=7;
	 				$sonuc=cokluIcerikAl($anaBolumIndex);
	 				for($i=0;$i<$tekrarSayisi;$i++){
		 				echo '<div class="col kenarlik">';
		 					echo '<div class="card text-center h-100" style = "background:black; color: white;">';
							  echo '<div class="card-header text-white">';
							  	$kayit=$sonuc->fetch_assoc();
							  	$icerik=$kayit["icerik"];
							    echo '<h4>'.$icerik.'</h4>';
							  echo '</div>';
							  echo '<div class="card-body">';
							  
							    $kayit=$sonuc->fetch_assoc();
							  	$icerik=$kayit["icerik"];
							    echo '<img src="'.$icerik.'" class="img-fluid" />';
							    	$kayit=$sonuc->fetch_assoc();
							  	$icerik=$kayit["icerik"];
							    echo '<h5 class="card-title mt-3 ">'.$icerik.'</h5>';
							    $kayit=$sonuc->fetch_assoc();
							  	$icerik=$kayit["icerik"];
							    echo '<p class="card-text">'.$icerik.'</p>';
							  echo '</div>';
							  echo '<div class="card-footer"style = "background:black; color: white;">';
							  		$kayit=$sonuc->fetch_assoc();
									$icerik=$kayit["icerik"];
									$linkId=$kayit["linkId"];
									if ($linkId!=0){
										$link=linkAl($linkId);
									}
									else{
										$link="#";
									}
							 
							    echo '<h6 class="mt-1">'.$icerik.'</h6>';
							    $kayit=$sonuc->fetch_assoc();
								$icerik=$kayit["icerik"];
								    echo '<a href="'.$link.'" class="btn btn-warning mt-2">'.$icerik.'</a>';
							    $kayit=$sonuc->fetch_assoc();
								$icerik=$kayit["icerik"];
							    echo '<h6 class="text-white mt-3">'.$icerik.'</h6>';
							  echo '</div>';
							echo '</div>';
		 				echo '</div>';
		 			}
	 				?>
	 			</div>
	 		</div>
	</div>

    <div class="row p-1">
	  <div class="col-12 text-white kenarlik">
         <div class="colorWhite">
	 				<?php
	 					$anaBolumIndex=8;
	 					$sonuc=cokluIcerikAl($anaBolumIndex);
	 					$ks=$sonuc->num_rows;
	 					
	 				?>
	 			   </div>
	 			     <div class="col-12 col-lg p-2 mt-3 colorWhite "  >
	 					<div class="row justify-content-lg-center py-2 py-lg-0">
	 						<?php
	 							for($i=0;$i<$ks;$i++){
									$kayit=$sonuc->fetch_assoc();
									$icerik=$kayit["icerik"];
									$linkId=$kayit["linkId"];
									if ($linkId!=0){
										$link=linkAl($linkId);
									}
									else{
										$link="#";
									}
							 echo "<div class='col-auto'><a href='$link'>$icerik</a></div>";
							//echo '<div class="col-auto"><a href="color :red;"></a></div>';
	 							}
	 						?>
	 						
	 					</div>
	 				</div>
	 			</div>
         </div>
    </div>


</div>
</body>
</html>