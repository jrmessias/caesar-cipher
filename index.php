<?php

$alphabet = range('a', 'z');
$phrase = "D OLJHLUD UDSRVD PDUURP VDOWRX VREUH R FDFKRUUR FDQVDGR";
$size = 3;
	
/**
Functions
**/
function isLetter($letter){
	return ctype_alpha($letter);
}

function getLetterPosition($letter){	
	return array_search($letter, $GLOBALS['alphabet']);
}

function getLetterPositionEncrypt($letter, $size){
	$newPosition = getLetterPosition($letter);
	$positionCalc = $newPosition + $size;
	return ($positionCalc > 25) ? $positionCalc - 26 : $positionCalc;
}

function  getLetterPositionDecrypt($letter, $size){
	$newPosition = getLetterPosition($letter);
	$positionCalc = $newPosition - $size;
	return ($positionCalc < 0) ? 26 - abs($positionCalc) : $positionCalc;
}

function decrypt($phrase){
	$return = '';
	$phrase = strtolower($phrase);
	foreach(str_split($phrase) as $char){	
		if(isLetter($char)){
			$return .= $GLOBALS['alphabet'][getLetterPositionDecrypt($char, $GLOBALS['size'])];
		}else{
			$return .= $char;
		}
	}
	return $return;
}

function encrypt($phrase){
	$return = '';
	$phrase = strtolower($phrase);
	foreach(str_split($phrase) as $char){
		if(isLetter($char)){
			$return .= $GLOBALS['alphabet'][getLetterPositionEncrypt($char, $GLOBALS['size'])];
		}else{
			$return .= $char;
		}
	}
	return $return;
}

/**
Execution
**/
echo "Size: ".$size."\n";
echo "Original Phrase: ".$phrase."\n";
echo "SHA1 Phrase: ".sha1($phrase)."\n";

$phraseDecrypted = decrypt($phrase);
echo "Decrypted: ".$phraseDecrypted."\n";
echo "SHA1 Dencrypted: ".sha1($phraseDecrypted)."\n";

$phraseEncrypted = encrypt($phraseDecrypted);
echo "Encrypted: ".$phraseEncrypted."\n";
echo "SHA1 Encrypted: ".sha1($phraseEncrypted)."\n";