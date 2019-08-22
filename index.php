<?php

/**
*
*	Encryption and decryption system
*
*	By Hammed Olalekan Osanyinpeju
*
*	https://successtar.github.io
*
**/

function encrypt($data=null){

	$output = '';

	$search_arr = str_split(strtolower($data));

	$search = ["a" => "e", "o" => "u", "p" => "b", "t" => "d", "s" => "c", "j" => "g", "m" => "n", "e" => "a", "u" => "o", "b" => "p", "d" => "t", "c" => "s", "g" => "j", "n" => "m"];

	for ($i=0; $i < count($search_arr); $i++){

		/* Test if current char and next is same */

		$next = isset($search_arr[($i +1)]) ? $search_arr[($i +1)] : '';

		if ($search_arr[$i] === $next){

			/* Test if char is in the encryption list */

			$pick = isset($search[$search_arr[$i]]) ? $search[$search_arr[$i]] : $search_arr[$i];

			$output = $output.strtoupper($pick);

			$i++; // skip next loop

		}
		else{

			/* Test if char is in the data encryption list */

			if (isset($search[$search_arr[$i]])){

				$output = $output.$search[$search_arr[$i]];
			}
			else{

				$output = $output.$search_arr[$i];
			}
		}


	}

	return $output;
}

function decrypt($data=null){

	$output = '';

	$search_arr = str_split($data);

	$search = ["a" => "e", "o" => "u", "p" => "b", "t" => "d", "s" => "c", "j" => "g", "m" => "n", "e" => "a", "u" => "o", "b" => "p", "d" => "t", "c" => "s", "g" => "j", "n" => "m"];

	for ($i=0; $i < count($search_arr); $i++){

		/* Test if char is in upper case */

		if (ctype_upper($search_arr[$i]) === true){

			$search_arr[$i] = strtolower($search_arr[$i]);

			/* Test if char it is in the encryption list */

			$pick = isset($search[$search_arr[$i]]) ? $search[$search_arr[$i]] : $search_arr[$i];

			$output = $output.$pick.$pick;

		}
		else{

			/* Test if char is in the data encryption list */

			if (isset($search[$search_arr[$i]])){

				$output = $output.$search[$search_arr[$i]];
			}
			else{

				$output = $output.$search_arr[$i];
			}
		}
	}

	return $output;
}

$result = '';

/* Test if input and action is supplied */

if ( isset($_GET['input']) && isset($_GET['action'])){

	/* forward Request to appropriate method block */

	if ($_GET['action'] === 'encrypt'){

		$result = encrypt($_GET['input']);

	}
	elseif ($_GET['action'] === 'decrypt') {

		$result = decrypt($_GET['input']);
	}

}

?>

<form action="index.php" method="get">

		<center>

		<?= '<h1>'. $result.'</h1>'; ?>
			
		<input type="text" name="input">

		<br/>
		<br/>

		<label for="encrypt">Encrypt</label>

		<input type="radio" id="encrypt" name="action" value="encrypt">

		<br/>
		<br/>

		<label for="decrypt">Decrypt</label>

		<input type="radio" id="decrypt" name="action" value="decrypt">

		<br/>
		<br/>

		<input type="submit" name="">
	</center>
</form>