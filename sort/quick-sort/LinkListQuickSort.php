<?php

class ListNode {
    public $val;
    public $next;

    public function __construct($val, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class SingleLinedList {
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
    public function sort() {
        $this->_sort($this->head);
    }
    private function _sort($head, $tail = null) {
        if ($head !== $tail) {
            $m = $this->_partition($head, $tail);
            $this->_sort($head, $m);
            $this->_sort($m->next, $tail);
        }
    }
    private function _partition($head, $tail = null) {
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
}

$list = new SingleLinedList();
$n = mt_rand(2, 100);
for ($i=0;$i<$n;++$i) {
    $list->addNode(mt_rand(-100, 10000));
}
$list->display();
$list->sort();
$list->display();
