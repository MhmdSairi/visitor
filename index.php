<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Auto Visitor by paitontio.blogspot.com</title>
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
        <meta name="keywords" content="Auto Visitor Blog By paitontio.blogspot.com, Auto Visitor Web, Visitor Blog, Blogger, Visitor, Blog, Web, Blogspot, WP, Free Visitor"/>
        <meta name="description" content="A simple and easy to get Visitor.">
        <meta name="author" content="paitontio.blogspot.com">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="solid-green.css" type="text/css" />
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="solid-green.js"></script>
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">
<!-- Start form-->
<form class="formoid-solid-green" style="background-color:#1A2223;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:700px;min-width:150px" method="post" action="?"><div class="title"><h2>Auto Visitor Blog</h2></div>
	<div class="element-url"><label class="title"></label><div class="item-cont"><input class="large" type="url" name="url_blog"  placeholder="Blog URL" value="<?php echo $_POST['url_blog']; ?>" required /><span class="icon-place"></span></div></div>
	<div class="element-select"><label class="title"></label><div class="item-cont"><div class="small"><span><select name="jumlah_visitor" required />
		<option value="0"><?php if(isset($_POST['jumlah_visitor'])){ echo $_POST['jumlah_visitor']; } else { ?>Quantity<? } ?></option>
		<option value="50">50</option>
		<option value="100">100</option>
		<option value="300">300</option>
		<option value="500">500</option>
		<option value="700">700</option>
		<option value="900">900</option>
		<option value="1000">1000</option>
		<option value="1200">1200</option>
		<option value="1500">1500</option>
		<option value="2000">2000</option>
		<option value="5000">5000</option></select><i></i><span class="icon-place"></span></span></div></div></div>
              <!--- <div class="element-textarea"><label class="title"></label><div class="item-cont"><textarea class="medium" name="proxy" cols="20" rows="5" placeholder="PROXY List Here (Leave it Blank if you don't have)"><?php echo $_POST['proxy']; ?></textarea><span class="icon-place"></span></div></div> --->
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="proxy" placeholder="SINGLE PROXY HERE (Leave it blank if you don't have)" value="<?php echo $_POST['proxy']; ?>" /><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" name="submit" value="Get Visitor Now"/>
</div></form>
<br/>
<!-- End form--><br>
<?php
set_time_limit(0);
ini_set('display_errors', 0);
if(isset($_POST['submit'])) {

$url = $_POST['url_blog'];
$total = $_POST['jumlah_visitor'];
$p = $_POST['proxy'];
$dat = explode("\n", $p);

echo "<center>";
echo "Target -> <b style='color:red;'>".$url."</b><br>Quantity -> <b style='color:green;'>".$total."</b><br><br>";
foreach($dat as $proxy){

function curl($url){
$userAgent = array(
'Mozilla/5.0 (X11; Linux i686) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.52 Safari/536.5',
'Mozilla/5.0 (Windows; U; Windows NT 5.1; it; rv:1.8.1.11) Gecko/20071127 Firefox/2.0.0.11',
'Opera/9.25 (Windows NT 5.1; U; en)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)',
'Mozilla/5.0 (compatible; Konqueror/3.5; Linux) KHTML/3.5.5 (like Gecko) (Kubuntu)',
'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.12) Gecko/20070731 Ubuntu/dapper-security Firefox/1.5.0.12',
'Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:50',
'Mozilla/5.0 (BlackBerry; U; BlackBerry 9800; en) AppleWebKit/534.1+ (KHTML, like Gecko) Version/6.0.0.337 Mobile Safari/534.1+2011-10-16 20:21:10',
'Mozilla/5.0 (BlackBerry; U; BlackBerry 9860; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.254 Mobile Safari/534.11+',
'Mozilla/5.0 (BlackBerry; U; BlackBerry 9700; pt) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.546 Mobile Safari/534.8+',
'Mozilla/5.0 (Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30',
'Mozilla/5.0 (Linux; U; Android 2.2.1; en-ca; LG-P505R Build/FRG83) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A341 Safari/528.16',
'iTunes/9.1 (Macintosh; U; PPC Mac OS X 10.2',
'Mozilla/5.0 (Linux; U; Android 2.1; en-us; Nexus One Build/ERD62) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.66 Safari/535.11',
'Mozilla/5.0 (X11; Linux i686) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.65 Safari/535.11',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.0',
'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6',
'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36',
'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.7) Gecko/20070914 Firefox/2.0.0.7');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_REFERER, "https://www.google.com");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_HTTPTUNNELPROXY, $proxy);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_USERAGENT, $userAgent[array_rand($userAgent)]);
// curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.7) Gecko/20070914 Firefox/2.0.0.7");
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
$exec = curl_exec($ch);
if(!curl_errno($ch)){
//$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$info = curl_getinfo($ch);
$ip = $info['primary_ip'];
$port = $info['primary_port'];
$code = $info['http_code'];
curl_close($ch);
return $ip.":".$port." -> ".$code."<br>";
}
return "<font color='red'>Failed!</font><br>";
}

$start = time();
for($a=0; $a<$total; $a++){
echo curl($url)."\n";
flush();
}
$end = time()-$start;
$cop = "Copyright &copy; 2018 Paitontio.blogspot.com All Right Reserved.";
echo "<br><b style='color:blue;'>Completed within ".$end." seconds.</b>";
echo "<br><br>".$cop."</center>";
}
?>
</body>
</html>
<? } ?>