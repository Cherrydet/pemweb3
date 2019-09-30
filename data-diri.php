<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="960_12_col.css">

	<title>Cherry's Portfolio</title>
     <link rel = "icon" href = "picture/det.jpg" type = "image/x-icon"/>

     <style type="text/css">
     	body{
     		background-image: url(picture/wall1.jpg);
   			background-size: cover; 
     	}
     </style>
</head>
<body>

	<div class="container_12" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,0.6);">

	<div class="container_12" style="background: rgba(0,0,0,0.4);">
		<div class="grid_8">
			<div class="about me" style="color: white;">
				<h1 style="font-size: 50px; margin-left: 10px;">About Me.</h1>
				<p style="margin-left: 10px;"><?= $_POST ['about'] ; ?></p>
				 <br>
				<table style="width: 100% ; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px; margin-left: 10px;">
					<tr style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
						<td style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
							Nama :
						</td>
						<td style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
							<?= $_POST['nama']; ?>
						</td>
					</tr>
					<tr style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
						<td style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
							NPM :
						</td>
						<td style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
							<?= $_POST['NPM']; ?>
						</td>
					</tr>
					<tr style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
						<td style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
							TTL :
						</td>
						<td style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
							<?= $_POST['ttl']; ?>
						</td>
					</tr>
					<tr style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
						<td style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
							Alamat :
						</td>
						<td style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
							<?= $_POST['alamat']; ?>
						</td>
					</tr>
					<tr style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
						<td style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
							Pendidikan :
						</td>
						<td style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
							<li><?= $_POST['sd']; ?></li>
							<li><?= $_POST['smp']; ?></li>
							<li><?= $_POST['sma']; ?></li>
							<li><?= $_POST['univ']; ?></li>
						</td>
					</tr>
					<tr style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
						<td style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
							Hobi :
						</td>
						<td style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
							<?= $_POST['hobi']; ?>
						</td>
					</tr>
					<tr style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
						<td style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
							Motto :
						</td>
						<td style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
							<?= $_POST['motto']; ?>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="grid_4">
			<div class="gallery" style="float: right; color: white;">
          		<h2 style="font-size: 35px; margin-bottom: 35px; ">My Gallery.</h2>
          			<img src="picture/me1.jpg" style="width: 200px;"><br><br>
          			<img src="picture/me4.jpg" style="width: 200px;">
        	</div>
		</div>
	</div>

		<div class="container_12" style="background: rgba(0,0,0,0.4); padding-bottom: 20px;">
			<div class="grid_12">
				<div class="Portfolio" style="color:white; text-align: center;">
					<h1 style="font-size: 50px; padding-top: 10px;">Portfolio.</h1>

					<img src="picture/port2.jpg" alt="Gambar Tidak Tersedia" style="width: 135px; margin-right: 10px;">
	                <img src="picture/port5.jpg" alt="Gambar Tidak Tersedia" style="width: 135px; margin-right: 10px;">
	                <img src="picture/port6.jpg" alt="Gambar Tidak Tersedia" style="width: 135px; margin-right: 10px;">
	                <img src="picture/port8.jpg" alt="Gambar Tidak Tersedia" style="width: 135px; margin-right: 10px;"><br>

	                <img src="picture/port18.jpg" alt="Gambar Tidak Tersedia" style="width: 170px; margin-right: 10px; margin-top: 10px;">
	                <img src="picture/port10.jpg" alt="Gambar Tidak Tersedia" style="width: 170px; margin-right: 10px; margin-top: 10px;">
	                <img src="picture/port16.jpg" alt="Gambar Tidak Tersedia" style="width: 170px; margin-right: 10px; margin-top: 10px;">
	                <img src="picture/port12.jpg" alt="Gambar Tidak Tersedia" style="width: 170px; margin-right: 10px; margin-top: 10px;">
	                <img src="picture/port17.jpg" alt="Gambar Tidak Tersedia" style="width: 170px; margin-top: 10px; margin-right: 10px;">
				</div>
			</div>
		</div>


		<div class="container_12" style="background: rgba(0,0,0,0.4); color: white; padding-bottom: 20px;">
			<div class="grid_12">
				<div class="interest">
					<h1 style="font-size: 50px; margin-left: 10px;">My Interest.</h1>
				</div>
			</div>

				<div class="arc" style="text-align: center;">
					<div class="grid_6">
						<img src="picture/UIUX.jpg" alt="UI/UX Designer" style="width: 250px; height: 140px;">
			            <h2>UI/UX Designer</h2>
			            <p style="text-align: justify;"> Karena memiliki suatu karya seni digital yang dapat dipakai oleh semua orang adalah impian saya, terlebih untuk segi design, daya telah tertarik bidang ini semenjak sekolah menengah. Daya tarik dari design dalam pembuatannya membuat saya selalu tertantang mencoba hal baru.</p>
					</div>
					<div class="grid_6">
						<img src="picture/photo.jpg" alt="Photography" style="width: 250px; height: 140px;">
			            <h2>Photography</h2>
			            <p style="text-align: justify;"> Dari dalam diri saya, memiliki ketertarikan pada bidang seni digital yang salah satunya merupakan fotografi, saya senang ketika meng-capture suasana ataupun potret orang yang sedang melakukan sesuatu. Saya tertarik karena banyak hal yang dapat diambil dalm sebuah jepretan foto.</p>
					</div>
				</div>
			</div>


			<div class="container_12" style="background: rgba(0,0,0,0.4); color: white; padding-bottom: 20px;">
				<div class="grid_12">
					<div class="contact">
						<h1 style="font-size: 50px; margin-left: 10px;">Contact Me.</h1>
						<table style="width: 90%; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px; margin-left: 45px;">
							<tr style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
								<td style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
									<img src="picture/telp.png" alt="Gambar Tidak Ada" style="width: 40px;">  <img src="picture/wa.png" alt="Gambar Tidak Ada" style="width: 40px;">
								</td>
								<td style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
									082323468491
								</td>
								<td style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
									<img src="picture/gmail.png" alt="Gambar Tidak Ada" style="width: 40px;">
								</td>
								<td style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
									cherrydaniella10@gmail.com
								</td>
								<td style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
									<img src="picture/line.png" alt="Gambar Tidak Ada" style="width: 40px;">
								</td>
								<td style="padding: 15px; border: 3px solid #FF36AB; border-collapse: collapse; border-spacing: 10px;">
									cherrydaniella
								</td>
							</tr>
						</table><br><br>

						<div class="sosmed" style="text-align: center; margin-left: 150px;">
				            <a style="margin-right: 150px;" href="https://www.facebook.com/cherry.naghspenpatda"><img src="picture/fb.png" alt="Gambar Tidak Ada" style="width: 50px;"></a>
				            <a style="margin-right: 150px;" href="https://www.instagram.com/cherry_det/"><img src="picture/ig.png" alt="Gambar Tidak Ada" style="width: 50px;"></a>
				            <a style="margin-right: 150px;" href="https://twitter.com/daniella_cr"><img src="picture/twit.png" alt="Gambar Tidak Ada" style="width: 50px;"></a>
			          </div>

					</div>
				</div>
			</div>
</div>

</body>
</html>