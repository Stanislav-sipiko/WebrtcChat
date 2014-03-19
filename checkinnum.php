#!/usr/bin/php -q
<?php
ob_implicit_flush(false);
set_time_limit(30);
error_reporting(0);

require_once "xagi.php";

$xagi = new XAGI();

//$gcallerid = $xagi->getCallerId();
$gcallername = $xagi->getCallerIdName();

//$gcalleridcut =substr($cidorig,-7);
//$gcallernamecut =substr($cidorig,-7);
// try to find number 3118923
$numfind = '4884808';

if (strpos($gcallername, $numfind) !== false){
  //  echo 'true';
    $xagi->cmd("EXEC GOTO incoming_TTT,".$gcallername.",1")
    }

 //   echo 'false';

/*
if (preg_match("/(915|911|912|913|914)/", $num)) {
 $xagi->cmd("EXEC Answer");
 $xagi->cmd("EXEC Wait 1"); 
$xagi->cmd("EXEC PLAYBACK /var/www/extra/fitcurves_hellov");
 $xagi->cmd("EXEC Wait 1"); 
 $xagi->cmd("EXEC PLAYBACK /var/www/extra/pls-hold-while-try");
$xagi->cmd("EXEC GOTO goip_incomming,".$num.",3"); # ну и собственно звонок  манагеру
}

$xagi->cmd("EXEC GOTO goip_incomming,".$num.",3"); # ну и собственно звонок  манагеру
	//	$xagi->cmd("EXEC GOTO out_main,916,2");
}
else {
$xagi->cmd("EXEC GOTO goip_incomming,".$num.",2");

	//$xagi->cmd("EXEC GOTO out_main,916,2");
}

mysql_close($c);
*/
$xagi->close();


?>