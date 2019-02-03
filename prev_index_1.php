<?php
	// comment
	$a = 100;
	$b = 10.5;
	$arr = array(1, 2, 3, 4, 5, 6, 7, 8 );
	$associateArray = array(
		'name' => 'Abraham',
		'surname' => 'God',
		'age' => 24,
		'birthYear' => 1994,
		'education' => array(
			'school in 2012', 
			'university still'
			)
		 );

	echo $a;
	echo "<hr>";
	echo $b;
	echo "<hr>";
	echo $arr[2];
	echo "<hr>";
	echo $associateArray['education'][0];
	echo '<hr>';
	echo 'test $a<br>';
	echo "test $a";
	echo '<hr>';
	echo $associateArray['name'] . ' ' . $associateArray['birthYear'];
	echo "<hr>";
	// simple math operations
	echo 5 + 10 . "<br>";
	$var1 = 1082;
	echo "Even or odd. Number $var1 is ";
	echo $var1 % 2 . "<br>" . "<hr>";

	// simple loops
	for( $i = 0; $i <= 100; $i++){
		echo $i . " ";
		if($i % 2 == 0){
			echo " - Even number" . "<br>";
		} else {
			echo " - Odd numder" . "<br>";
		}
	}
	echo "<hr>";
	$names = array(
		'Jonny',
		'Eve',
		'Malcolm',
		'Curt',
		'Alex'
	);
	foreach($names as $name){
		echo $name . '<br>';
	};
	echo '<br>';
	
	//functions
	function my_function(){
		echo "call function my_function()" . '<br>';
	};

	my_function();
	my_function();

	function comparison_funk($a, $b){
		if($a > $b){
			echo "$a is bigger than $b<br>";
		} else if($b > $a){
			echo "$b is bigger than $a<br>";
		} else {
			echo 'they are equal<br>';
		};
	};
	comparison_funk(50, 22);
	comparison_funk(1, 1.5);
	comparison_funk(0, 0);
	
	//heredoc
	echo "<hr>";
	$author = "Brian W. Kernighan";

	//closing tag _END should be single character in the line (even without space before it)
	echo <<<_END
	Debbugin is twice as hard as writing the code in the first place.\n
	Therefore, if you write the code as cleverly as possible, you are,\n
	by definition, not smart enough to debug it.\n
\n
	- $author.
_END;

	//magick constants
	echo "<br>This line is " . __LINE__ . " in the file " . __FILE__;
	
?>
