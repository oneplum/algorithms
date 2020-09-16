<?php

require __DIR__.'/../common/LinkedList.php';

class LinkedListSelectSort extends LinkedList {
    public function sort() {
        $head = $this->head;
        while (!is_null($head)) {
            $minPoint = $head;
            $walkPoint = $head->next;
            while (!is_null($walkPoint)) {
                if ($walkPoint->val < $minPoint->val) {
                    $minPoint = $walkPoint;
                }
                $walkPoint = $walkPoint->next;
            }
            if ($minPoint != $head) {
                $tmp = $head->val;
                $head->val = $minPoint->val;
                $minPoint->val = $tmp;
            }
            $head = $head->next;
        }
    }
}

$list = new LinkedListSelectSort();
$list->fadeData();
$list->display();
$list->sort();
$list->display();
