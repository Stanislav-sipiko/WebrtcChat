<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />


	<title>Main</title>
    <style>
    .menu_div ul
{
    padding:0px 0 0 10px;
    margin:0px;
    list-style:none;
    font-family:Arial, Helvetica, sans-serif;
    font-size:13px;
    height:30px;
    line-height:30px;
    background: blue;
}
.menu_div ul li
{
    float:left;
}
.menu_div ul li a
{
    color:#FFF;
    text-decoration:none;
    padding: 2px 15px 2px 15px;
}
.menu_div ul li a:hover
{
    color:#FFF;
    background:#c80202;
}
.menu_div ul li#active a
{
    color:#FFF;
    background:#c80202;
}
    </style>
</head>

<body>
<table border="2" width="90%" align="center">
<tr>
	<td></td>
	<td align="center"><h2>Анонимный чат: обо всём и об этом тоже...</h2></td>
	<td align="center" width="220px" style="padding-top: 10px;"><span id="gotuser" style="line-height: 40%";>
	<form id="Formnick" >
 <input type="text" id="username" placeholder="Ваш никнейм" style="padding: 5px 0px 5px 35px;">
 <button id="setup-new-username" class="setup">Войти</button>
</form></span>
	</td>
</tr>
<tr>
	<td></td>
<td bgcolor="blue" width="70%" id="tdmenu"><div class="menu_div">
 
<ul>
<li id="active"><a href="index.html">Главная</a></li>
<li><a href="text.html">Текстовый</a></li>
<li><a href="voice.html">Голосовой</a></li>
<li><a href="video.html">Видео</a></li>
<li><a href="univer.html">Личные кабинеты</a></li>
<li><a href="#">Лекции</a></li>
<li><a href="#">Вебинары</a></li>
<li><a href="#">Contact Us</a></li>
</ul>
 
</div></td>
	<td></td>
</tr>
</table>
<table align="center" width="90%" border="2" >
<tr>
	<td width="80%">ПОПУЛЯРНЫЕ ТЕМЫ<br />
	    <?php 
    header('Content-type: text/html; charset=utf-8');
 $feedurl = 'http://www.google.com/trends/hottrends/atom/feed?pn=p14';
 $jsrcim = "http://ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=10&q=" .$feedurl . '&userip=' . $_SERVER["REMOTE_ADDR"];
$jsonim = file_get_contents($jsrcim);
$jsetim = json_decode($jsonim, true);
$jroot = $jsetim["responseData"]["feed"]["entries"];
 foreach ($jroot as $line_nums => $lines) {

  echo $line_nums+1  . '.&nbsp;   <a href="text.html#' . $lines["title"] . '">' .$lines["title"] .'<br></a>';

 }
?>
	<pre>
	Секс 
Тактичное, но откровенное обсуждение этой деликатной темы

Формула любви
Теория и практика виртуальных и реальных знакомств, соблазнения, флирта. Семейные отношения.


Отцы и дети
Взаимоотношения поколений, а также вопросы воспитания и рождения детей.

Философия, психология, непознанное
Что есть мир и что такое человек в этом мире. Сложные психологические, философические и религиозные вопросы. НЛО и прочее.
Подразделы:  Палата №6

Знакомства
Знакомства, встречи в реале.

NO PROBLEM! Серьезно о серьёзном
Сложности в семье? На работе? В быту? 
	</pre>
	</td>
	<td valign="top">Сейчас в чате</td>
</tr>
</table>
<script>
var ristration = false;
var setNewuser = document.getElementById('tdmenu');
function alertNickname()
{

var person=prompt("Ваш никнэйм","Дядюшка Чиличало");

if (person!=null && person!="Дядюшка Чиличало")
  {
  ristration = true;
  setNewuser.removeEventListener("click", myEventListener, false);
  console.log('got from input = "%s"  length = "%s"', person, person.length);
            localStorage.username = person;
          document.getElementById('gotuser').innerHTML = 'Ваш Nickname <br /><h3>'+person+'</h3>';
  }
}



		if("username" in localStorage){
			document.getElementById('gotuser').innerHTML = 'Ваш Nickname <br /><h3>'+localStorage.username+'</h3>';
			console.log("Username present  '%s' ", localStorage.username);
			ristration = true;
			setNewuser.removeEventListener("click", myEventListener, false);
		}
		else{		
          				// false click
          				if(ristration != true){ 
				          var myEventListener = function(evt) {
                            alertNickname();
                            //alert("Ваш никнэйм");
                            evt.preventDefault();
                  };
                  setNewuser.addEventListener("click", myEventListener, false);			
	}
				  // try to get new user from form
          var setupNewuser = document.getElementById('setup-new-username');
          setupNewuser.addEventListener("click", function(evt) {
          var userName = document.getElementById('username').value;
          console.log('got from input = "%s"  length = "%s"', userName, userName.length);
          if(userName.length >0 && userName !=""){
          ristration = true;
          setupNewusercl.setAttribute("class", "ok");
          setupNewuser.removeEventListener("click", myEventListener, false);
          localStorage.username = userName;
          document.getElementById('gotuser').innerHTML = 'Ваш Nickname <br /><h3>'+userName+'</h3>';
          }
          else {
          alert("Чё то не то!");
          }
				    evt.preventDefault();
				}, false);
				}

</script>
</body>
</html>