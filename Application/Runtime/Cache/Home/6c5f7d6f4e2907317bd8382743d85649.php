<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>
<script>
function returnFloat(value){
 var value=Math.round(parseFloat(value)*100)/100;
 var xsd=value.toString().split(".");
 if(xsd.length==1){
 value=value.toString()+".00";
 return value;
 }
 if(xsd.length>1){
 if(xsd[1].length<2){
 value=value.toString()+"0";
 }
 return value;
 }
}
var num=178;
console.log(returnFloat(num));
</script>