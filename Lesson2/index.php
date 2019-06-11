
<?php
	function checkRandoms($a, $b){
 		 
		 if ($a >= 0 && $b >= 0){
		  	return ( $a - $b );
	 	 }	
	 	 elseif ($a < 0 && $b < 0) {
	 	 	return ( $a * $b );
	 	 }
	 	  elseif ( ( $a < 0 && $b >= 0) || ( $a >= 0 && $b < 0 ) ) {
	 	  	return ( $a + $b );
	 	 }	
	 	 else{
	 	 	echo "Не знаем, что вывести";
	 	 }
	}	

	function switch_15($a){
	  switch ($a) {
 	 	case 0:
 	 		$result = "0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15";
 	 		break;
 	 	case 1:	
 	 		$result = "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15";
 	 		break;
 	 	case 2:	
 	 		$result = "2,3,4,5,6,7,8,9,10,11,12,13,14,15";	
 	 		break;
 	 	case 3:	
 	 		$result = "3,4,5,6,7,8,9,10,11,12,13,14,15";	
 	 		break;	
 	 	case 4:	
 	 		$result = "4,5,6,7,8,9,10,11,12,13,14,15";	
 	 		break;	
 	 	case 5:	
 	 		$result = "5,6,7,8,9,10,11,12,13,14,15";		
 	 		break;
 	 	case 6:	
 	 		$result = "6,7,8,9,10,11,12,13,14,15";	
 	 		break;		
		case 7:	
 	 		$result = "7,8,9,10,11,12,13,14,15";	
 	 		break;
		case 8:	
 	 		$result = "8,9,10,11,12,13,14,15";	
 	 		break;
		case 9:	
 	 		$result = "9,10,11,12,13,14,15";
 	 		break;	
		case 10:	
 	 		$result = "10,11,12,13,14,15";	
 	 		break;
		case 11:	
 	 		$result = "11,12,13,14,15";	
 	 		break;
 	 	case 12:	
 	 		$result = "12,13,14,15";	
 	 		break;	
		case 13:	
 	 		$result = "13,14,15";	
 	 		break;	
		case 14:	
 	 		$result = "14,15";	
 	 		break;	
		case 15:	
 	 		$result = "15";	
 	 		break;
		break;
 	 }
		return $result;
	}

	$a = rand( - 1000, 1000 );
	$b = rand( - 1000, 1000 );


	function plus($a,$b){
		return (float)$a + (float)$b;	
	}


	function minus($a,$b){
		return (float)$a - (float)$b;	
	}

	function multiply($a,$b){
		return (float)$a * (float)$b;	
	}

	function devide($a,$b){
		if ( (float)$b != 0){
			return (float)$a / (float)$b;	
		}
		else{
			return 0;
		}
	}

   function mathOperation( $ar1, $ar2, $ar3 ){
   	 switch ($ar3) {
   	  	case 'Plus':
   	  		return Plus($ar1, $ar2);
   	  		break;
   	  	case 'Minus':
   	  		return Minus($ar1, $ar2);
   	  		break;
   	  	case 'Multiply':
   	  		return Multiply($ar1, $ar2);
   	  		break;
   	  	case 'Devide':
   	  		return Devide($ar1, $ar2);
   	  		break;		 
   	 }
   }		

   function Power($val,$pow){
   	$modPow = abs($pow);
	    if ($pow == 0) {
		    return 1;
		  }
		  if ($n < 0) {
		    return Power(-$pow, 1/$val);
		  }
		  return $pow * Power( $pow-1 , $val);
		}

   	 

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Урок 2</title>
 </head>
 <body>
 	<?php
 	 echo "New line";	
 	 echo "<h2>Задание 1: анализ чисел и операции над ними</h2> <br>";
 	 echo "a = $a, b = $b <br>";
 	 $res = checkRandoms($a, $b);	
 	 echo "Результат = $res <br>";
 	 echo "<br>";
 	?>


 	<?php
 	 echo "<h2>Задание 2: Вывод с помощью Switch</h2> <br>";
 	 $a = rand( 0, 15 );
 	 $res = switch_15( $a );
 	 echo "Вывод чисел от $a <br>";
 	 echo $res;	
 	 echo "<br>";
 	?>	


 	<?php
 	 echo "<h2>Задание 3-4: Вывод с помощью функций и Switch</h2> <br>";
 	 $a = rand( 0, 150 );
 	 $b = rand( 0, 450 );
 	 echo "a = $a, b = $b <br>";
 	 $res1 = mathOperation( $a, $b, "Plus" );
 	 echo " + = $res1  <br>";  
 	 $res1 = mathOperation( $a, $b, "Minus" );
 	 echo "- = $res1 <br>";  
 	 $res1 = mathOperation( $a, $b, "Multiply" );
 	 echo "* = $res1 <br>";  
 	 $res1 = mathOperation( $a, $b, "Devide" );
 	 echo "/ = $res1 <br>";  
 	?>	

 	<?php
 	 echo "<h2>Задание 6:  Функция возведения в степень</h2> <br>";
 	 $val = rand();
 	 $pow = rand(0,10);
 	 echo "Число $val в степени $pow = <br>";
 	 $res = power( $val, $pow );
 	 echo "$res <br>";	
 	 
 	?>	


 	<div id = "footer">
 		<hr>
 		<?php
		  echo '<p> На дворе '.date('Y').' год'.'</p>';	
		?>	
 	</div>

 </body>
 </html>