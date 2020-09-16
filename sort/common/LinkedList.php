<?php

class ListNode {
    public $val;
    public $next;

    public function __construct($val) {
        $this->val = $val;
        $this->next = null;
    }
}

abstract class LinkedList {
    protected $head;

    public function addNode($val) {
        if (is_null($this->head)) {
            $this->head = new ListNode($val);
        } else {
            $t = $this->head;
            while (!is_null($t->next)) {
                $t = $t->next;
            }
            $t->next = new ListNode($val);
        }
    }

    public function display() {
        $head = $this->head;
        while (!is_null($head)) {
            echo $head->val.' ';
            $head = $head->next;
        }
        echo "\r\n";
    }

    public function fadeData($count = 0, $min = -10, $max = 1000) {
        if ($count == 0) {
            $count = mt_rand(2, 100);
        }
        for ($i = 0; $i < $count; ++$i) {
            $this->addNode(mt_rand($min, $max));
        }
    }

    abstract public function sort();
}
