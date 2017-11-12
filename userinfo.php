
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="./styles/styles.css">
<title>registration form</title>
<script language="JavaScript">



function RePasswordValidataion(sPassword,sRePassword)
{
	if(sPassword.toString()!=sRePassword.toString())
	{
		alert("Re-Type Password Has to be same as the Password");
		return false;
	}
	else{return true;}
}
</script>
<style type="text/css">
<!--
body
{

			margin : 0;
			padding : 0;
			background-color: #c2c2c2;
			font-family : sans-serif; 
		
}
.style3 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
.style4 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: italic;
	color: #ffffff;
}
.style6 {font-family: Georgia, "Times New Roman", Times, serif; font-style: italic; color: #ffffff; }
.style10 {font-size: 5}
-->
</style>

</head>
<body>

<script src="./scripts/script.js"></script>
	


	<button onclick="goToTop()" id="top" title="Go to top"><img src="./images/arrow.png"></button>

	<div id="header-container">
				<div id= "title-noemi" class="title"> Hotel Online Booking     </div>

	<div id="banner" class="site-header col-12">
		
		<h3>PET MALU HOTEL<br/>
			<span>a world of unparalleled comfort and convenience</span>
		</h3>
		<nav class="main-nav">
			<ul>
				<li><a class="border" href="index.html#">HOME</a></li>
				<li><a class="border" href="index.html#about">ABOUT US</a></li>
				<li><a class="border" href="index.html#port">GALLERY</a></li>
				<li><a class="border" href="index.html#exp">ROOM TYPES</a></li>
				<li><a class="border" href="index.html#contact">CONTACT US</a></li>
				<li><a class="border" href="login.php">LOG IN</a></li>
			</ul>
		</nav>
	</div>
</div>


<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<TR></tr>

<br />

<table  class = "table" align="center" width="380" border="3" cellspacing="1" cellpadding="1">
<tr>
	<td><span class="style1"><strong>Enter user name:</strong></span> </td>
    <td width="380"><input type="text" name="username"/></td>
  </tr>
  <tr>
    <td><span class="style1"><strong>Enter password:</strong></span></td>
    <td><input type="password" name="pwd" maxlength="8" /></td>
  </tr>
  <tr>
    <td><span class="style1"><strong>Confirm password:</strong></span></td>
    <td><input type="password" name="password" maxlength="8" onchange="return RePasswordValidataion(document.userinfo.pwd.value,document.userinfo.password.value)"/></td>
  </tr>

	<tr>
		<th align=left>Full Name   :</th>
		<td colspan=4><input type=text name=txtname size=50></td>
	</tr>
	<tr>
		<th align=left>Email   :</th>
		<td colspan=4><input type="text" name="txtemail" size=50></td>
	</tr>
	<tr>
		<th align=left>Company   :</th>
		<td colspan=4><input type=text name=txtcompany size=50 onkeyPress="validcompany()"></td>
	</tr>
	<tr>
		<th align=left>Telephone   :</th>
		<td colspan=4><input type="text" name="txtnumber" size=15 ></td>
	</tr>
	<tr>
		<th align=left valign=top>Address   :</th>
		<td colspan=4><textarea name=txtaddress rows=5 cols=40></textarea></td>
	</tr>
</table>
<br />

	<div align="center"><input class="button" type="submit" value="Submit" name="ok" align="right" />
	<input name="reset" type="reset" value="Cancel"/>
</div>
</form>
</body>
</html>
