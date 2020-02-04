<?php

$tree = array(
		'4' => array(
					'7' => array('13','8'),
					'5' => array('9','20'),
				) );

echo treeLayout($tree);

$searchItem = 3;
$result = funSearchTree($tree,$searchItem);
echo "Searching tree for ".$searchItem."<br>";
echo $result;


function funSearchTree($tree,$item)
{
	foreach ($tree as $key => $value) {
		if($key == $item){
			return "Search item ".$item." found";
		}
		else {
			if(is_array($value))
				return funSearchTree($value,$item);
			else 
				return "Search item ".$item." not found";
		}
	}
}


function treeLayout($tree)
{
	$template = "";
	foreach ($tree as $key => $value) {
		$template .= "<li>". (is_array($value) ? $key. treeLayout($value) :  $value)  ."</li>";
	}
	return "<ul>".$template."</ul>";
}