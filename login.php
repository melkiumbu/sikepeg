<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<!--META-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>

<!--STYLESHEETS-->
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />

<!--SCRIPTS-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<!--Slider-in icons-->
<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>

</head>
<body>

<!--WRAPPER-->
<div id="wrapper">

	<!--SLIDE-IN ICONS-->
    <div class="user-icon"></div>
	<div class="pass-icon"></div>
	<!--END SLIDE-IN ICONS-->

<!--LOGIN FORM-->
<form name="login-form" class="login-form" action="ceklogin.php" method="GET">
<!--TITLE-->
  <div class="header" align="center">

    <table width="200" border="3">
      <tr>
        <td><p align="center"><img src="images/Bogor.png" alt="" width="77" height="98" align="middle" /></p>
          <h1 align="center">Website Resmi</h1>
          <p align="center">
            <!--END TITLE-->
            <!--DESCRIPTION-->
            <span>Pemerintah Kota Bogor</span></p>
          <p></p>
        <p>&nbsp;</p></td>
      </tr>
    </table>
</div>
    <!--END HEADER-->
	
	<!--CONTENT-->
	<form action="ceklogin.php" method="get">
    <div class="content">
	<!--USERNAME--><input name="nip" type="text" class="input username" value="Username" onfocus="this.value=''" /><!--END USERNAME-->
    <!--PASSWORD--><input name="pass" type="password" class="input password" value="Password" onfocus="this.value=''" /><!--END PASSWORD-->
    </div>
    <!--END CONTENT-->

    
    <!--FOOTER-->
    <div class="footer">
	
    <!--LOGIN BUTTON--><!--END LOGIN BUTTON-->
    <!--REGISTER BUTTON--><!--END REGISTER BUTTON-->
   
    <table width="240" border="3">
      <tr>
        <td width="240"><p>
          <input type="submit" name="submit" value="Login" class="button"/>
        </p></td>
      </tr>
      <tr>
        <td><br><h5 align="justify">*Pegawai yang belum mempunyai user untuk login silahkan hubungi Admin agar segera didaftarkan, selanjutnya silahkan login menggunakan NIP dan Password *</h5></td>
      </tr>
    </table>
    </div>
     
 </form>   
   <!--END FOOTER-->

</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->

</body>
</html>