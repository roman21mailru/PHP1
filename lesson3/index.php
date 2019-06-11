<!DOCTYPE html>
<html>
<head>
	<title>Домашнее задание к уроку 3</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>	
	<div class="task">
		<h2>Задание №1 Вывести все числа от 1 до 100, которые делятся на 3 без остатка.</h2>
		<?php
			$cnt = 0;
			while ( $cnt <= 100) {
				$cnt++;
				if ( $cnt % 3 == 0 ){
					echo "$cnt ";
				}
			}
		?>
	</div>	
	<hr>
	<br>

	<div class="task">
		<h2>Задание №2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, и определить, четное число или нечетное</h2>
		<?php

			function chetNechet($a){
			  if ($a == 0){
			  	return "ноль";
			  }
			  else if ( $a % 2 == 0 ){
			  	return "четное";
			  	}	
			  else {
			  		return "нечетное";
			  	}	
			  }	
			

			$cnt = 0;
			do{
			  echo $cnt. " - ".chetNechet($cnt). '<br>';	
			  $cnt ++;
			}while ( $cnt <= 10);
			
		?>
	</div>	


	<div class="task">
		<h2>Задание №3.  ООбъявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива. </h2>
		<?php

			$regions =  [];
			$regions[0] = [
				'Reg' => 'Московская область',
				'cityes' => ['Серпухов', 'Клин', 'Наро-Фоминск', 'Балашиха', '...'] 
			];

			$regions[1] = [
				'Reg' => 'Калужская область',
				'cityes' => ['Калуга', 'Обнинск', 'Малоярославец', 'Балашиха', '...'] 
			];

			$regions[2] = [
				'Reg' => 'Брянская область',
				'cityes' => ['Брянск', 'Дядьково', 'Жуково', 'Почеп ', '...'] 
			];
			
			foreach ($regions as $key => $value) {
				echo "<b>".$value['Reg']."</b><br>"; 
				$city = $value['cityes'];
				foreach ( $city as $k2 => $val2){
					echo "  -<i>$val2</i> <br>"; 
				} 
			}
		?>
	</div>	

	<div class="task">
		<h2>Задание №4.  Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’). </h2>
		<?php
		 
		
		function TranslitChar($chr){

		$arrTranslit  = [
		  'А'=>'A', 'а' =>'a', 'Б'=>'B', 'б'=>'b' , 'В'=>'V', 'в'=>'v', 'Г'=>'G', 'г'=>'g',  
		  'Д'=>'D',	'д'=>'d', 'Е'=>'E', 'е'=>'e', 'Ж'=>'Zh', 'ж'=>'zh', 'З'=>'Z', 'з'=>'z',
		  'И'=>'I', 'и'=>'i', 'К'=>'K', 'к'=>'k', 'Л'=>'L', 'л'=>'l', 'М'=>'M', 'м'=>'m', 
		  
		  'Н'=>'N', 'н'=>'n', 'О'=>'O', 'о'=>'o', 'П'=>'P', 'п'=>'p', 'Р'=>'R', 'р'=>'r',
		  
		  'С'=>'S', 'с'=>'s', 'Т'=>'T', 'т'=>'t', 'У'=>'U', 'у'=>'u', 'Ф'=>'F', 'ф'=>'f',
		  'Х'=>'H', 'х'=>'h', 'Ц'=>'Ts', 'ц'=>'ts', 'Ч'=>'Ch', 'ч'=>'ch', 'Ш'=>'Sh','ш'=>'sh',
		  'Щ'=>'Sch', 'щ'=>'sch', 'Э'=>'E','э'=>'e','Ю'=>'Yu', 'ю'=>'yu', 'Я'=>'Ya', 'я'=>'ya'
			];	

			 return  $arrTranslit[$chr];
			}

		function TranslitGl($str){
			$retStr = '';
			//$arrStr = str_split($str);
			$arrStr = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
			//var_dump($arrStr);
			  foreach ($arrStr as $value) {
			  	 $transKey = TranslitChar($value);
			  	 $retStr = $retStr.$transKey;
			  }
			  return $retStr;
		}	

			echo "Транслит слова 'Яблоко'-><br>";	
			$rv = TranslitGl('Яблоко');
			echo ''.$rv;
		?>
	</div>	

	<div class="task">
		<h2>Задание №5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.</h2>
		<?php
			define('SPACE', ' ');
			define('UNDERSCORE', '_');
			
			// Вообще-то все это может сделать функция str_replace()
			function spaceReplace($str){
				$ret_str = '';
				$arrStr = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
				foreach ($arrStr as $value) {
					if ($value == SPACE){
						$ret_str = $ret_str.UNDERSCORE;
					}
					else{
						$ret_str = $ret_str.$value;
					}
				}
				return $ret_str;
			}
				$myStr = spaceReplace("Я очень люблю программировать, но мне лень делать домашние задания");
				echo $myStr;
		?>
	</div>		

	<div class="task">
		<h2>Задание №6. В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом.  </h2>
		<?php
			$arrMenu = [];
			$arrMenu[0] = ['Title'=>'Главная', 'Link'=>'/', 
									'Items'=>[
						  ['Title'=>'Продукты', 'Link'=>'/products', 'Items'=>[]] , 
						  ['Title'=>'Магазины', 'Link'=>'/shops', 'Items'=>[]]
											 ]
						  ];

			$arrMenu[1] = ['Title'=>'Контакты', 'Link'=>'/contacts', 
						   'Items'=>[
						   	['Title'=>'Директор', 'Link'=>'/contacts/director', 'Items'=>[]] , 
						  	['Title'=>'Гл.бух.', 'Link'=>'/contacts/accoutant', 'Items'=>[]]
						   ]
						  ];
						   
			$arrMenu[2] = ['Title'=>'О нас', 'Link'=>'/about', 'Items'=>[] ];
			 
			function createMenu($menu){
				//var_dump($menu);
				echo '<ul>';	
					foreach($menu as $value) {
			 			echo '<li>';
			 			echo '<a href = "'.$value['Link'].'">'.$value['Title'].'</a>';	
			 			if (isset($value['Items'])){
			 				 createMenu($value['Items']);
			 			}
			 			echo '</li>';
			 		}
		 		echo '</ul>';	
			} 

		 createMenu($arrMenu);
		 		
		?>
	</div>		
	
</body>
</html>