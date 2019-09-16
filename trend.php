<?php




function uptrend($data){

	$res = ['uptrend' => false, 'downtrend' => false, 'index' => -1];

	$counter = 0;

	$loop = count($data) - 1;

	for ($i=0; $i < $loop; $i++){

		$diff = $data[$i] - $data[($i +1)];

		if ($diff < 0){

			$counter++;
		}
		else{

			$counter = 0;
		}

		if ($counter === 3){

			$res['uptrend'] = true;

			$res['index'] = $i - 2;

			break;
		}
	}

	return $res;

}

function downtrend($data){

	$res = ['uptrend' => false, 'downtrend' => false, 'index' => -1];

	$counter = 0;

	$loop = count($data) - 1;

	for ($i=0; $i < $loop; $i++){

		$diff = $data[$i] - $data[($i +1)];

		if ($diff > 0){

			$counter++;
		}
		else{

			$counter = 0;
		}

		if ($counter === 3){

			$res['downtrend'] = true;

			$res['index'] = $i -2;

			break;
		}
	}

	return $res;

}

function trendCheck($input=null){

	/* Check Uptrend */

	$trend = uptrend($input);

	if ($trend['uptrend'] === true){

		return $trend;
	}


	/* If not Uptrend check downtrend */

	$trend = downtrend($input);


	if ($trend['downtrend'] === true){

		return $trend;
	}


	return ['uptrend' => false, 'downtrend' => false, 'index' => -1];

}




//$testData = [2, 3, 1, 19, 28, 42, 11, 18, 15, 32, 20, 11, 8, 5, 2];

//$testData = [32, 12, 11, 15, 11, 9, 8, 5, 2];

$testData = [32, 12, 11, 15, 11, 9, 10, 8, 11, 5, 1];

$res = trendCheck($testData);

var_dump($res);




?>
