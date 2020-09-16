<?php

function quicksort(&$arr, $s, $e) {
    if ($s < $e) {
        $m = partition($arr, $s, $e);
        quickSort($arr, $s, $m-1);
        quickSort($arr, $m+1, $e);
    }
}

function partition(&$arr, $s, $e) {
    $x = $arr[$e];
    $i = $s - 1;
    for ($j = $s; $j < $e; ++$j) {
        if ($arr[$j] <= $x) {
            $t = $arr[++$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $t;
        }
    }
    $arr[$e] = $arr[++$i];
    $arr[$i] = $x;
    return $i;
}
