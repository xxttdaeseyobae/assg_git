<?php

require_once('common.class.php');

class comment extends Common
{
	public $commentid,$comment,$date,$email;
	

        public function save()
        {
                 
                   $this->comment = $_POST['comment'];
                   $this->email = $_POST['email'];
                    
                $sql = "insert into comment (comment,date,email) values ('$this->comment','$this->date','$this->email')"; 
                return $this->insert($sql);
        }


        public function retrieve()
        {
                $sql = "select * from comment";
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