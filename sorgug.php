<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TC QUERY</title>
	<style type="text/css">
		@font-face {
			font-family: poppins;
			src: url(poppins.ttf);
		}
		html,body{
			height: 90%;
		}
		body{
			background-color: black;
			color: white;
			font-family: poppins;

		}
		.content{
			background-color: #19082e;
			top: 20%;
			left: 50%;
			-webkit-transform: translateX(-50%);
			-ms-transform: translateX(-50%);
			-webkit-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			transform: translateY(-50%);
			transform: translateX(-50%);
			height: auto;
			position: relative;
			width: 90%;
			max-width: 600px;
			padding: 5px 0px;
			text-align: center;
		}
		.formi{
			font-family: poppins;
			width: 250px;
			height: 30px;
			background-color: rgba(0, 0, 0, 0.2);
			border: none;
			border-bottom: 1px solid white;
			margin: 5px 0px;
			padding: 0px 5px;
			outline: none;
			color: white;
		}
		.formb{
			background-color: #03032b;
			color: white;
			width: 150px;
			height: 35px;
			border: none;
			border-radius: 15px;
		}
	</style>
</head>
<body>
	<div class="content">
		<h3>GSM SORGU</h3>
		<form action="sorgugi.php" method="POST">
			<input type="hidden" value="t" name="i">
			<input class="formi" type="text" name="tc" placeholder="TC"><br>
			<button class="formb">SORGULA</button>
		</form>
		<hr>
		<form action="sorgugi.php" method="POST">
			<input type="hidden" value="g" name="i">
			<input class="formi" type="text" name="gsm" placeholder="Telefon Numarası"><br>
			<button class="formb">SORGULA</button>
		</form>
	</div>
</body>
</html>
