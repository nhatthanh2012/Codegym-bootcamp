<?php
    class ArrayList
    {
        // tao 1 mang danh sach
        public function __construct($arr='')
        {
            if(is_array($arr))
            {
                $this->arrayList = $arr;
            } 
            else 
            {
                $this->arrayList = array();
            }
        }
        // them phan tu vao cuoi danh sach
        public function addItem($obj)
        {
            array_push($this->arrayList, $obj);
        }
        // xoa phan tu 
        public function clearItem()
        {
            $this->arrayList = array();
        }
        // tra ve 1 phan tu
        public function getItem($index)
        {
            if($this->isInteger($index) && $index < $this->arrLength())
            {
                return $this->arrayList[$index];
            } else 
            {
                die('ERROR in ArrayList.get');
            }
        }
        // kiem tra neu danh khong co phan tu nao
        public function isEmpty()
        {
            if(count($this->arrayList) === 0)
            {
                return true;
            }
            return false;
        }
        // loai bo phan tu o vi tri da chi dinh
        public function removeItem($index)
        {
            if($this->isInteger($index) && $index < $this->arrLength())
            {
                //unset($this->arrayList[$index]);
                $newArrayList = array();
                for ($row = 0; $row < $this->arrLength(); $row++)
                {
                    if ($index != $row)
                    {
                        $newArrayList[] = $this->getItem($row);
                    }
                } $this->arrayList = $newArrayList;
                   
            } else 
            {
                die("ERROR in ArrayList.remove <br> Integer value required");
            }
        }
            // tra ve so phan tu trong danh dach
        public function arrLength()
        {
            return count($this->arrayList);
        }
        
            // sap xep danh sach theo bang chu cai
        public function sortItem()
        {
            sort($this->arrayList);
        }
            // tra ve mot mang 
        public function getArray()
        {
            return $this->arrayList;
        }
            // tra ve true neu tham so chua gia tri nguyen
        public function isInteger($ItemCheck)
        {
                return preg_match("/^[0-9]+$/", $ItemCheck);
        }
        public function showArray()
        {
            foreach($this->arrayList as $key=>$value){
                echo '<br>index = '.$key.'. value = '. $value;
            }
        }
    }
    
        $arr1 = array(2,2,545,76823,76,8,8,43,40);
        $listInteger = new ArrayList($arr1);
        
        
       
        //$listInteger->showArray();
     $listInteger->removeItem(0);
    
     $listInteger->showArray();
       // var_dump($listInteger);
        //$listInteger->showArray();
?>