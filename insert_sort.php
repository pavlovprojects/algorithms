<?php

//Сортировка вставкой

$numbers = [1,13,9,2,4,7,11,8,6,10,5,3,12];

function insertSort(array $arr)
    
{
    for($i = 1; $i<count($arr); $i++){
        $key = $arr[$i];
        $j = $i - 1;
        while($j>=0 && $arr[$j] > $key){
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        $arr[$j+1] = $key;
    }
    return $arr;
}
$resultSortInsert = insertSort($numbers);
echo '<ul>';
foreach($resultSortInsert as $key=>$value){
    echo '<li>'.$value.'</li>';
}
echo '</ul>';
