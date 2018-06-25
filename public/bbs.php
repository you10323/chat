<?php
$url = "localhost";
$user = "homestead";
$password = "secret";
$database = "homestead";
$connect = mysqli_connect($url,$user,$password,$database) or die("can't connect");
$userid = htmlspecialchars($_GET['userid'], ENT_QUOTES, "utf-8");
$friendid = htmlspecialchars($_GET['friendid'], ENT_QUOTES, "utf-8");
$sql = "SELECT log FROM talk WHERE user_id=".$userid." AND friend_id=".$friendid;
$result = $connect->query($sql);
$logUrl = mysqli_fetch_array($result)['log'];
$logFile = "chatlog/".$logUrl;
//$testFile = "chatlog/test.log";

if($_GET['mode'] == "0"){
$user = htmlspecialchars($_GET['user'], ENT_QUOTES, "utf-8");
$message = htmlspecialchars($_GET['message'], ENT_QUOTES, "utf-8");
$inputValue = "<div class='user'>".$user."</div><div class='left_balloon'>".$message."</div>";

if ($inputValue) {
	if (!$fp = fopen($logFile, "a")) {
		echo "could not open";
		exit;
	}
	if (fwrite($fp, $inputValue) === false) {
		echo "could not write";
		exit;
	}
	fclose($fp);
} else {
	echo "not writable";
	exit;
}

$outputValue = file_get_contents($logFile);
echo $outputValue;
} else {
	$outputValue = file_get_contents($logFile);
	echo $outputValue;
}