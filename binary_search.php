<?php
$randomArray=array();

for ($i=0; $i<1000; $i++)               // заполнение массива
    {
        $randomArray[]=rand(0,10000);
    }

sort($randomArray); // сортировка массива

foreach($randomArray as $key=>$value)   // отображение массива
{
    echo $key."---".$value."<br>";
}

$iMin = 0;
$iMax = count($randomArray) - 1;

$iRand = rand($iMin, $iMax);  // cлучайный порядковый номер числа
$number = $randomArray[$iRand];               // случайное число для поиска
echo 'Случайный порядковый номер числа для поиска:'. $iRand. '<br>';

$found = BinarySearch($randomArray, $number);
echo $found. '<br>';

$foundRec = recBinarySearch($randomArray, $number, $iMin, $iMax);
echo $foundRec;

function  BinarySearch(array $arr, $x)          //итеративный бинарный поиск
{
   $iFirst = 0;
    $iLast = count($arr) - 1;
    while ($iFirst <= $iLast)
    {
        $iMid = floor( ($iFirst + $iLast) / 2); //вычисление порядкового номера элемента в середине массива, округленного в меньшую сторону
        if ($arr[$iMid] == $x)                   //сравнение элемента в середине массива с заданным для поиска числом
        {
            return 'Порядковый номер числа:'.$iMid;
        }
        elseif ($arr[$iMid] > $x)                //поиск в левой части массива
        {
            $iLast = $iMid - 1;
        }
        else                                    //поиск в правой части массива
        {
           $iFirst = $iMid + 1;
        }
    }
    //   return 'Число не найдено';  проверка, если числа нет в массиве
}

function recBinarySearch(array $arr, $x,$iFirst, $iLast)   //рекурсивный бинарный поиск
{
/*    if ($iFirst > $iLast)                //проверка, если числа нет в массиве
    {
        return 'Число не найдено';
    }
*/
        $iMid = floor(($iFirst + $iLast) / 2); //вычисление порядкового номера элемента в середине массива, округленного в меньшую сторону
        if ($arr[$iMid] == $x)                        //сравнение элемента в середине массива с заданным для поиска числом
        {
            return 'Порядковый номер числа:' . $iMid;
        }
        elseif ($arr[$iMid] > $x)
        {
            return recBinarySearch($arr, $x, $iFirst, $iMid - 1);  //поиск в левой части массива
        }
        else
        {
            return recBinarySearch($arr, $x, $iMid + 1, $iLast);    //поиск в правой части массива
        }
 }
    ?>
