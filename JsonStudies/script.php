<?php
	function getLevel($name){
		$someJSON = file_get_contents('https://api.tibiadata.com/v2/characters/'.$name.'.json');
		$someObject = json_decode($someJSON);
		//print_r($someObject);
		$level = $someObject->characters->data->level;
		echo $level;
	}
 	$name = $_POST['name']; // Variavel post de recebimento do ajax
 	getLevel($name);

 	$someJson = file_get_contents("text.json");
 	$jsonObj = json_decode($someJson);
 	echo $jsonObj->Data[1]->Name;
 	$jsonObj->Data[1]->Name = "Rakshara";
 	$jsonObj->Data[1]->Level = "136";
 	$jsonObj->Data[1]->Vocation = "Royal Paladin";
 	//print_r($jsonObj);
 	$newValue = json_encode($jsonObj);
 	file_put_contents('text.json', $newValue);


?>