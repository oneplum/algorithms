<?php

class ListNode {
    public $val;
    public $next;

    public function __construct($val, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

function QuickSort($list, $head, $tail = null) {
    if (isLowerP($head, $tail)) {
        $m = partition($list, $head, $tail);
        QuickSort($list, $head, $m);
        QuickSort($list, $m->next, $tail);
    }
}

function partition($list, $head, $tail = null) {
    $x = $head->val;
    $i = $head;
    $j = $head->next;
    while ($j !== $tail) {
        if ($j->val <= $x) {
            $i =  $i->next;
            $tmp = $i->val;
            $i->val = $j->val;
            $j->val = $tmp;
        }
        $j = $j->next;
    }
    $tmp = $head->val;
    $head->val = $i->val;
    $i->val = $tmp;
    return $i;
}

function isLowerP($head, $tail) {
    if ($head === $tail) {
        return false;
    }
    if (is_null($tail) && !is_null($head)) {
        return true;
    }
    $tmp = $head;
    while (!is_null($tmp)) {
        if ($tmp === $tail) {
            return true;
        }
        $tmp = $tmp->next;
    }
    return false;
}

function display($list) {
    $head = $list;
    while (!is_null($head)) {
        echo $head->val.' ';
        $head = $head->next;
    }
    echo "\r\n";
}
