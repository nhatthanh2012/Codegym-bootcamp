<?php
    // tao lop node
    class Node 
    {
        public $data;
        public $next;

        function __construct($_data)
        {
            $this->data = $_data;
            $this->next = null;
        }
        function readNote()
        {
            return $this->data;
        }
    }
    // tao lop linklist
    class LinkList 
    {
        private $firstNode;
        private $lastNode;
        private $count;

        function __construct()
        {
            $this->firstNode = null;
            $this->secondNode = null;
            $this->count = 0;
        }
        // them node vao dau danh sach
        public function insertFirst($data)
        {
            $link = new Node($data);
            $link->next = $this->firstNode;
            $this->firstNode = $link;
            if($this->lastNode===null)
            {
                $this->lastNode = $link;
                $this->count ++;
            }
        }
        // them node vao sau danh sach
        public function insertLast($data)
        {
            if($this->firstNode != null)
            {
                $link = new Node($data);
                $this->lastNode->next = $link;
                $link->next = null;
                $this->lastNode = $link;
                $this->count ++;
            }
            else
            {
                $this->insertFirst($data);
            }
        }
        function totalNodes()
        {
            return $this->count;
        }
        function readlist()
        {
            $listData = array();
            $current = $this->firstNode;
            while($current != null)
            {
                array_push($listData, $current->readNode());
                $current = $current->next;
            }
            return $listData;
        }
    }

        $linkedList = new LinkList();
        $linkedList->insertFirst(11);
        $linkedList->insertFirst(22);
        $linkedList->insertLast(33);
        $linkedList->insertLast(44);
        $totalNodes = $linkedList->totalNodes();
        $linkData = $linkedList->readList();
        echo $totalNodes;
        echo implode ('-' , $linkData);

?>
