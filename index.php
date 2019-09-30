<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Cherry's Portfolio</title>
     <link rel = "icon" href = "picture/det.jpg" type = "image/x-icon"/>

     <style type="text/css">
     	body{
     		background-image: url(picture/wall1.jpg);
   			background-size: auto; 
     		color: white;
     		margin-left: 50px;
     		margin-top: 20px;
     		font-size: 20px;
     	}
     	.box{
     		text-align: center;
		    width: 960px;
		    margin: 75px auto;
		    background: rgba(0,0,0,0.4);
		    box-shadow: 3px 3px 3px 3px rgba(0,0,0,0.6);
     	}
     </style>
</head>
<body>

	<div class="box">
		<h1 style="text-align: center; font-size: 100px; margin-bottom: -10px;">Bio.</h1>
	<form action="data-diri.php" method="post">
				<p style="margin-left: -370px; padding-top: 30px;">About Me : </p>
				<input type="text" name="about" style="width: 50%; height: 30px; border-radius: 10px;"/><br><br>
				<p style="margin-left: -400px;">Nama : </p>
				<input type="text" name="nama" style="width: 50%; height: 30px; border-radius: 10px;"/><br><br>
				<p style="margin-left: -400px;">NPM : </p>
				<input type="text" name="NPM" style="width: 50%; height: 30px; border-radius: 10px;"/><br><br>
				<p style="margin-left: -400px;">TTL : </p>
				<input type="text" name="ttl" style="width: 50%; height: 30px; border-radius: 10px;"/><br><br>
				<p style="margin-left: -380px;">Alamat : </p>
				<input type="text" name="alamat" style="width: 50%; height: 30px; border-radius: 10px;"/><br><br>
				<p style="margin-left: -415px;">SD : </p>
				<input type="text" name="sd" style="width: 50%; height: 30px; border-radius: 10px;"/><br><br>
				<p style="margin-left: -400px;">SMP : </p>
				<input type="text" name="smp" style="width: 50%; height: 30px; border-radius: 10px;"/><br><br>
				<p style="margin-left: -400px;">SMA : </p>
				<input type="text" name="sma" style="width: 50%; height: 30px; border-radius: 10px;"/><br><br>
				<p style="margin-left: -355px;">Universitas : </p>
				<input type="text" name="univ" style="width: 50%; height: 30px; border-radius: 10px;"/><br><br>
				<p style="margin-left: -400px;">Hobi : </p>
				<input type="text" name="hobi" style="width: 50%; height: 30px; border-radius: 10px;"/><br><br>
				<p style="margin-left: -390px;">Motto : </p>
				<input type="text" name="motto" style="width: 50%; height: 30px; border-radius: 10px;"/><br><br>

				<button type="submit" style="width: 100px; height: 40px; font-size: 15px; border-radius: 10px; background-color: magenta; color: white; margin-bottom: 50px;">Send Data!</button>
	</form>
</div>

</body>
</html>