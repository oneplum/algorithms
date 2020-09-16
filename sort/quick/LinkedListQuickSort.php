<?php

require __DIR__.'/../common/LinkedList.php';

class LinkedListQuickSort extends LinkedList {
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


$list = new LinkedListQuickSort();
$list->fadeData(5, 0, 20);
$list->display();
$list->sort();
$list->display();
