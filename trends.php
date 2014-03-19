    <?php 
    header('Content-type: text/html; charset=utf-8');
 $feedurl = 'http://www.google.com/trends/hottrends/atom/feed?pn=p14';
 $jsrcim = "http://ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=10&q=" .$feedurl . '&userip=' . $_SERVER["REMOTE_ADDR"];
$jsonim = file_get_contents($jsrcim);
$jsetim = json_decode($jsonim, true);
$jroot = $jsetim["responseData"]["feed"]["entries"];
 foreach ($jroot as $line_nums => $lines) {

  echo $line_nums+1  . '.&nbsp;   <a href="https://' . $_SERVER["SERVER_NAME"] . '/html5/example/text.html#' . $lines["title"] . '">' .$lines["title"] .'<br></a>';

 }
?>