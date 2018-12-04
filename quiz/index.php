<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Kalkulator</title>
  
   
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

	
	<div class="calculator">
		<form>
		<h5 align="center"> Kalkulator Sederhana</h5>
		<input type='text' name='nilai'  style="width: 300px" />
		<input type='reset' value="CLEAR" style="width:145px" >
		<input type='text' name='hasil'  style="width:145px" />
		<br>
			<input type="button" value="+" class="if" onclick='tambah()'/>
			<input type="button" value="-" class="if" onclick='kurang()'/>
			<input type="button" value="X" class="if" onclick='kali()'/>
			<input type="button" value=":" class="if" onclick='bagi()'/>
			<input type="button" value="=" class="eq" onclick='hitung()'/>
		</form>  

    	<script  src="js/index.js"></script>
	</div>


</body>

</html>
