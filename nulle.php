<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
		<title>Bataille Navale</title>
	</head>

	<body>
		
		<div class="Form">	
			<form method="post" action="">
				Letters : <input type="text" name="letters">
				Numbers : <input type="text" name="numbers">
				<button id="button">Send</button>
			</form><br>
		</div>

		<div id="Game">
		<?php
			$letters = array('A','B','C','D','E','F','G','H','I','J');
			$numbers = array(1,2,3,4,5,6,7,8,9,10);
			
			$boats1 = array("F3", "F4", "F5");
			$boats2 = array("C5", "C6");
			$boats3 = array("C9", "D9", "E9", "F9", "G9");
			$boats4 = array("J7", "J8", "J9", "J10");
			$boats5 = array("B2");
			$boats6 = array("A8");

			echo "<table>";
			echo "<tr style='background-color: #cfe0e8'><th style='height: 60px;'></th><th>A</th><th>B</th><th>C</th><th>D</th><th>E</th><th>F</th><th>G</th><th>H</th><th>I</th><th>J</th></tr>";

			foreach ($numbers as $key => $lines) {
				echo "<tr>";

			foreach ($letters as $key => $columns) {
				if($key === 0) {

				echo "<td style='font-weight:bold; text-align:center; height: 60px; width: 60px; background-color: #cfe0e8'>".$lines."</td>";}

			$petit = $columns.$lines;
			if(in_array($petit,$boats1)||
				in_array($petit,$boats2)||
				in_array($petit,$boats3)||
				in_array($petit,$boats4)||
				in_array($petit,$boats5)||
				in_array($petit,$boats6)){
				echo "<td style='background-color:#667292;height: 60px; width: 60px'></td>";}

 				else{
					echo "<td style='text-align: center; width: 60px; height: 60px; background-color: #87bdd8;'>";
					echo"</td>";}
				}
              echo "</tr>";
				}

			$letters = $_POST['letters'];
			$numbers = $_POST['numbers'];
			$filled = $letters.$numbers;

			if ($letters == '' || $numbers == '') {
				echo ("Fill in all boxes.");}

			else if (strlen($letters) > 1 || strlen($numbers) > 2){
      		echo ("You must insert a single CAPITAL letter and a single number.");}
    	
    		else if(in_array($filled, $boats1) || in_array($filled, $boats2) || in_array($filled, $boats3) || in_array($filled, $boats4) || in_array($filled, $boats5) || in_array($filled, $boats6)) {
      			echo ("Touch !");}
    
    		else if ($letters > 'j' || $numbers > 10) {
      			echo ("Off-Side !");}
    		
    		else {
      			echo ("Missing !");}
		?>
		</div>
	</body>
</html>