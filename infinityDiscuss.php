<?php

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>infinity</title>
	<link rel="stylesheet" type="text/css" href="infinity.css">
</head>
<body>

	<div class="head">
		<h1>INFINITY DISCUSSION</h1>
	</div>
	<div class="body">
			<div class="up">
							<div class="part">
								<h3>Participants Online</h3>
								<ul>
									<li>Ssegawa</li>
									<li>Sanga</li>
									<li>Nakalyowa</li>
									<li>Andinda</li>
									<li>Wabyona</li>
								</ul>
							</div>
							<div class="form-area"> 
								<h1>Entry Form</h1>

								<form method="post" action="infinity.php" >
									
									<label>Full Name: </label>
									<input type="text" name="name">
									
									<label>Hobbies:</label>
									
									<!-- note if you want to check the box when you click the word use label -->
									<!-- note2 if you want to the box to be checked by default use checked = "checked" -->
										<input type="checkbox" name="hobby1" value="football" > Football
										<input type="checkbox" name="hobby2" value="swimming"> Swimming
										<input type="checkbox" name="hobby3" value="codding"> Codding
										<input type="checkbox" name="hobby4" value="cocking"> Cooking
										

									<label>Gender:</label>
									
									<input type="radio" name="sex" value="M" > Male
									<input type="radio" name="sex" value="F"> Female
									

									<label>Favourite Dish:</label>
									<select name="dish[]" size="4" multiple="multiple" >
											<option selected="selected" value="cassava" >Cassava</option>
											<option value="rice">Rice</option>
											<option value="posho">Posho</option>
											<option value="bean">Beans</option>
										</select>
										
									<label>Action</label>			
									<input type="reset" name="" value="Clear Fields">
									<input type="submit" name="ubmit" value=" Submit Your Data">

							</form>
						

							</div>
			</div>
		</div>
		
		<div class="data" style="overflow-y: scroll;">
			<h2>Display Data</h2>

			<?php 
// echo "hello";


 // if(isset($_POST['submit'])){
 // 	var_dump($_POST);

 // 	$hobby1 = array_key_exists("hobby1",$_POST) == TRUE?  $_POST['hobby1'] : "hello";

 // 	// if(array_key_exists("hooby1",$_POST)){
 // 	// 	$hobby1 = $_POST['hobby1'];  		
 // 	// }else{
 	
 // 	// $hobby1 = "hello";
 // 	// }
 // 	 echo $hobby1;

 	//} 
// 		foreach ($_POST as $key => $value) {
// 		echo $key." = ".$value."<br>";
// 		// code...
// 				}
// foreach($_POST['dish'] as $dish){
// 	echo $dish."<br>";

// }
// echo "hello world"."<br>";
		
// $food = $_POST['dish'];
// echo $food[0];
	//	}

			//indexed array
$infinty = array("sanga", "ruth", "Ssegawa", 2, 1.5 );
//var_dump($infinty);
//extract($infinty)
echo "<br>";
echo $infinty[1].$infinty[0];

$len = count($infinty); //count() ruturns the number of items on the array
echo $len;

//loop through
foreach ($infinty as $part ) {
	echo $part."<br>";
	// code...
}

		//Associative Arrays
	$age = array("sanga"=>"21", "ruth"=>"22", "ssegawa"=>"23", "chris"=>19);
	var_dump($age);

	foreach ($age as $key => $value) {
		echo $key. " = ".$value."<br>";
		extract($age);
		echo $sanga;
		// code...
	}
  

?>

 

			 
		</div>
		
	</div>
	<div class="foot">
		<p>All Rights Reserved &copy; 2021 To Infinity and Beyond!</p>
	</div>

</body>
</html>