<?php 

// Сортировка пузырьком

$data = array(8,4,1,9,5,7,3,2,6,0);

function bubblesort($data) {
    $data_length = count($data);
    for ($i=0; $i<$data_length; $i++) {
        for ($j=0; $j<$data_length-1-$i; $j++) {
            if ($data[$j+1] < $data[$j]) {
                $data = swappositions($data, $j, $j+1);
            }
        }
    }
    return $data;
}
$data = bubblesort($data);
print_r($data);

?>
