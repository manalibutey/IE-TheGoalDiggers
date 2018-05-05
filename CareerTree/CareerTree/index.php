<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<title>CareerTree</title>
	<link rel="icon" href="./images/tab.ico" />
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/home.css">

</head>

<body>
</body>
<SCRIPT>
function passWord() {
var testV = 1;
var pass1 = prompt('Please Enter Your Password','');
while (testV < 3) {
if (!pass1) 
history.go(-1);
if (pass1.toLowerCase() == "hd") {
alert('You Got it Right!');
window.location.href="home.php";
break;
} 
testV+=1;
var pass1 = 
prompt('Access Denied - Password Incorrect, Please Try Again.','Password');
}
if (pass1.toLowerCase()!="password" & testV ==3) 
history.go(-1);
return " ";
} 
</SCRIPT>
<CENTER>
<h1 style="padding-top: 60px;">Welcome to Career Tree</h1>
<h4>Please enter the protected area to access the website</h4>
<FORM style="
    padding-top: 50px;
    width:  fit-content;
">
<input type="button" value="Enter Protected Area" onClick="passWord()">
</FORM>
</CENTER>
</html>