<?php
$i = 0;
$total = 0;
$mang=[1, 4, 6, 7, 9, 2, 12];
while( $i < count($mang))
{
    if ($mang[$i] % 2 == 0) {
        $total += $mang[$i];
    }
    $i++;
}
echo 'tong la: '. $total
?>
