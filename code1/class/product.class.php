<?php

require_once('common.class.php');

class product extends Common
{
	public $id,$productname,$productquantity,$productprice;
	

        public function save()
        {
                 
                   $this->productname = $_POST['productname'];
                   $this->productquantity = $_POST['productquantity'];
                    $this->productprice = $_POST['productprice'];
                    
                $sql = "insert into product (productname,productquantity,productprice) values ('$this->productname','$this->productquantity','$this->productprice')"; 
                return $this->insert($sql);
        }


        public function retrieve()
        {
                $sql = "select * from product";
                return $this->select($sql);
        }


        public function destroy()
        {
                
        }


        public function edit()
        {
                
        }

       
}




?>