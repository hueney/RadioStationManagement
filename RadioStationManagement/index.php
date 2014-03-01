<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>ระบบจัดการไฟล์เพลง @ SUT-RADIO</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- BOOTSTRAP -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
</head>
<body background="images/bg.jpg">
	<script src="bootstrap/js/jQuery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<!-- HEADER TOP  -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand">
					<div class="glyphicon glyphicon-music" style="font-size: 25px;"> SUT-RADIO</div> ระบบจัดการไฟล์เพลง	
				</a>
			</div>	
			<?php if(!empty($_SESSION["USER"])){?>
			<!-- LOGOUT -->
			<div class="navbar-form pull-right">			
				<button class="btn btn-danger" onClick="JavaScript:window.location='controller/logout.php';">
					<span class="glyphicon glyphicon-off"></span>&nbsp;ออกจากระบบ
				</button>
			</div>
			<!-- WELLCOME -->
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a  class="">สวัสดีคุณ : <b><?php echo strtoupper($_SESSION['USER']); ?></b></a>
				</li>
			</ul>
			<?php }?>
		</div>
	</nav>
	<!-- END HEADER TOP  -->

	<?php 
		require_once ('lib/Control.php');
		if(!empty($_SESSION["USER"])){
	?>
	
	<!-- CONTENT LAOUT -->
	<div class="container well" style="margin-top: 80px">
		<div class="row">
			<!-- MENU -->
			<div class="col-md-3">
			<?php 
				Control::viewMenu();
			?>	
			</div>
			
			<!-- CONTENT -->
			<div class="col-md-9">
			<?php 
				Control::content($_GET['v']);
			?>
			</div>
		</div>
	</div>
	<!-- END CONTENT LAOUT -->
	<!-- FOOTER -->
	<div class="footer">
		<center><font color="white">
    		Display the best results on <strong>Mozilla Firefox</strong><br>
    		<a href="http://getbootstrap.com">Bootstrap</a></font>
  		</center>
  	</div>
	<!-- END FOOTER -->
	<?php 
		}else{ 
			Control::viewLogin();
		} 
	?>
	
</body>
</html>