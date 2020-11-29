<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style type="text/css">
	
	body {
  background-color: black;
	}

	div {
  color: Aqua;
  font-family: Courier New;
  font-size: 30px;
	}


	input[type=submit] {
	font-size: 15px;
	background-color: rgb(55, 255, 138);
    border: none;
    color: black;
    padding: 7px 25px;
    text-decoration: none;
    cursor: pointer;  
    text-align: center;
	}



</style>

<body>


	<form method="post" action="costo.php">	



	<input type="number" name="consumo" class="form-control" placeholder="TOTAL KW CONSUMIDOS">	

    <div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
   	Residencial
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
    Industrial
  </label>
</div>

<input type="submit" name="btnEnviar" id="btn1">

	</form>

</body>
</html>