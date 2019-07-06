<?php
  include "db_config.php";
  class User{
    protected $db;
    public function __construct(){
      $this->db = new DB_con();
      $this->db = $this->db->ret_obj();
    }

    public function reg_user($firstname, $lastname, $email, $phonenumber, $location, $dateofbirth, $password){
      //echo "k";

      $password = md5($password);


      //checking if the username or email is available in db
      $query = "SELECT * FROM users WHERE email='$email'";

      $result = $this->db->query($query) or die($this->db->error);

      $count_row = $result->num_rows;

      //if the username is not in db then insert to the table

      if($count_row == 0){
        $query = "INSERT INTO users SET firstname='$firstname', lastname='$lastname', email='$email',phonenumber='phonenumber', location='$location', dateofbirth='$dateofbirth', password='$password'";

        $result = $this->db->query($query) or die($this->db->error);

        return true;
      }
      else{return false;}


      }


  /*** for login process ***/
    public function check_login($emailusername, $password){
        $password = md5($password);

    $query = "SELECT id from users WHERE email='$emailusername' and password='$password'";

    $result = $this->db->query($query) or die($this->db->error);


    $user_data = $result->fetch_array(MYSQLI_ASSOC);
    $count_row = $result->num_rows;

    if ($count_row == 1) {
              $_SESSION['login'] = true; // this login var will use for the session thing
              $_SESSION['id'] = $user_data['id'];
              return true;
          }

    else{return false;}


  }

  public function get_fullname($id){
    $query = "SELECT firstname FROM users WHERE id = $id";

    $result = $this->db->query($query) or die($this->db->error);

    $user_data = $result->fetch_array(MYSQLI_ASSOC);
    echo $user_data['firstname'];

  }

  /*** starting the session ***/
  public function get_session(){
      return $_SESSION['login'];
      }

  public function user_logout() {
      $_SESSION['login'] = FALSE;
    unset($_SESSION);
      session_destroy();
      }
      public function getusersByKeyword($keyword)
{
  $sql = "select * from users where title like '%$keyword%' or short_detail like '%$keyword%' or detail like '%$keyword%' and role = 0";
  return $this->select($sql);
}


    public function getData($query){

   // $query = "SELECT * FROM product ORDER BY id DESC";

    $result = $this->db->query($query) or die($this->db->error);

    //$user_data = $result->fetch_array(MYSQLI_ASSOC);
   // var_dump($user_data);
    return $result;

    }
       
  
   public function single_getData($query){

   // $query = "SELECT * FROM product ORDER BY id DESC";

    $result = $this->db->query($query) or die($this->db->error);

    $user_data = $result->fetch_array(MYSQLI_ASSOC);
   // var_dump($user_data);
    return $user_data;

    }

    public function escape_string($value)
    {
        return $this->db->real_escape_string($value);
    }


      public function execute($query) 
    {
        $result = $this->db->query($query);
        
        if ($result == false) {
            echo 'Error: cannot execute the command';
            return false;
        } else {
            return true;
        }        
    }

    public function delete($id, $table) 
    { 
        $query = "DELETE FROM $table WHERE id = $id";
        
        $result = $this->db->query($query);
    
        if ($result == false) {
            echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    } 
  

  }//end of class