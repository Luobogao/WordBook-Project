<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>You-On EDU 背单词计划</title>
<meta name="ViewPort" content="initial-scale=1, minimum-scale=1, width=device-width">
<meta name="HandheldFriendly" content="true">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<p class="title">You-On EDU 背单词计划</p>
<div class="box">
<h2>赶紧滚去背单词！</h2>
<p class="main">
<?php
session_start();
$un=$_SESSION["username"];
if ($un == "")
{
	echo "<script>alert('少年你的体位不对啊');document.location.href='./index.php'</script>";
	exit;
}
else
{
	
}
?>
<center>
<?php require("./word_result.php"); ?><p></p>
<a href="./index.php">返回首页</a>
</center>


