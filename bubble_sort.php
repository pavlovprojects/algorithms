<?

// Сортировка пузырьком

$data = array(3,5,15,3,2,6,7,50,1,4,5,2,100,9,3,2,6,7,13,18);

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

function swappositions($data, $left, $right) {
    $backup_old_data_right_value = $data[$right];
    $data[$right] = $data[$left];
    $data[$left] = $backup_old_data_right_value;
    return $data;
    }
?>
