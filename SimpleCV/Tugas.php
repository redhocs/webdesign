<?php
/* Method GET php */
	if(isset($_GET['get'])){

		$nums = $_GET['get'];
/* Get halaman yang menyediakan tombol prev & next */			
		echo ('
<html>
<head>
	<title>PROGRAM ANTRIAN</title>
</head>
<style> fieldset{ margin-top: 70px; }
fieldset {
	border: 2px solid #DDDDDD;
	display: inline-block;
	font-size: 20px;
	padding: 1em 5em;
	background: #3366FF;
	border-radius: 70px;
	
}

legend {
	background: #008B8B;     
	color: #FFFFFF;          
	margin-bottom: 50px;
	padding: 0.5em 1em;
}

.footer {
   position:absolute;
   bottom:0;
   width:100%;
   height:60px;
}


</style>
<body>
	<center>

<!--FORM Inputan-->
<fieldset >
<legend style="font-family: FELIX TITLING; font-size: 30px;">NOMOR ANTRIAN</legend>	
	<form action="?get" method="get">
	<input type="text" style="text-align: center; font-size: 250%" value="'.$nums.'"><br /> 

<div style="padding-top: 20px;">
	
<!-- Button Prev get method $nums-1 dan menampilkannya-->
<button type="button" style="background-color:#00FF00"><a href="?get='.($nums - 1).'" style=" font-size:250%; text-align:center; font-family:Arial Black; color:#000000">PREV</a></button>

<!-- Manual set jarak button prev dan next -->
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<!-- Button Prev Get method $nums +1 dan menampilkannya -->	
	<button type="button" style="background-color:#FF7F00"><a href="?get='.($nums + 1).'" style=" font-size: 250%; text-align:center; font-family:Arial Black; color:#000000">NEXT</a></button>
</div>

	</form>


<!-- Tampilan angka yang ditampilkan dibawah-->
	<div style="font-weight: bold; font-size: 500%; color:#000000; font-family:Clarendon Blk BT">
	'.$nums.'	
	</div>
</fieldset>
<div class="footer">Copyright © 2018 - Agung Laksono Putro</div>
</body>
</html>
				');
/* End method get */

		die();
	}
?>

<!-- Html tampilan awal form penginputan angka -->
<html>
<head>
	<title>PROGRAM ANTRIAN</title>
</head>
<style> fieldset{ margin-top: 100px; }

input[type="text"] {
	background: linear-gradient(to bottom, #FFFF99, #E6E6E6);
    border: 3px solid #6666FF;
    margin: 3px 2px;
    padding: 3px;
    text-align: center;
    width: 550px;
}
fieldset {
	border: 2px solid #DDDDDD;
	display: inline-block;
	font-size: 14px;
	padding: 1em 2em;
	background: #3366FF;
}

legend {
	background: #008B8B;     /* Green */
	color: #FFFFFF;          /* White */
	margin-bottom: 10px;
	padding: 0.5em 1em;
}

.footer {
   position:absolute;
   bottom:0;
   width:100%;
   height:60px;
}

</style>

<body>
	<center>
	<fieldset>
	<legend style="font-family: FELIX TITLING; font-size: 30px;"><b>NOMOR ANTRIAN</b></legend>
	<form action="" method="get">
	<input type="text" placeholder="Input angka disini"; name="get" style="text-align: center; font-size: 300%;">
	</form>
	</fieldset>
<!--Copyright-->
<div class="footer">Copyright © 2018 - Agung Laksono Putro</div>
</body>
</html>
