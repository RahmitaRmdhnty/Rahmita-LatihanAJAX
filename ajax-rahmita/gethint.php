<?php
//Array with names
$a[] = "Aini";
$a[] = "Bila";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Erdo";
$a[] = "Fiona";
$a[] = "Gilang";
$a[] = "Hendra";
$a[] = "Iqbal";
$a[] = "Jihan";
$a[] = "Mutiara";
$a[] = "Mita";
$a[] = "Nurul";
$a[] = "Petrus";
$a[] = "Resti";
$a[] = "Salsabila";
$a[] = "Suci";
$a[] = "Wawan";
$a[] = "Yulia";
$a[] = "Zulfan";


//get the q parameter from url
$q = $_REQUEST["q"];

$hint = "";

//lookup all hints from array if $q is different from ""
if ($q !== ""){
	$q = strtolower($q);
	$len = strlen($q);
	foreach($a as $name) {
		if (stristr($q, substr($name,0,$len))){
		if ($hint === ""){
			$hint = $name;
		} else {
			$hint .= ", $name";
		}
		}
	}
}
//output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>