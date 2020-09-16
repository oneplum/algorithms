<?php

function selectsort($arr) {
    $c = count($arr);
    if ($c > 1) {
        for ($i = 0; $i < $c - 1; ++$i) {
            $minIndex = $i;
            for ($j = $i + 1; $j < $c; ++$j) {
                if ($arr[$minIndex] > $arr[$j]) {
                    $minIndex = $j;
                }
            }
            if ($minIndex != $i) {
                $t = $arr[$i];
                $arr[$i] = $arr[$minIndex];
                $arr[$minIndex] = $t;
            }
        }
    }
    return $arr;
}
