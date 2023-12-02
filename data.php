<?php 
class data {
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "oop_project";

    private $conn = "";

    function __construct()
    {
        $this->conn = new mysqli($this->hostname,$this->username,$this->password,$this->database);
    }

    public function create($table, $arr)
    {
        $keys    =  array_keys($arr);
        $values  = array_values($arr);

        $key  = implode('`,`',$keys);
        $value = implode("','",$values);
        $Sql = "INSERT INTO `{$table}`  (`$key`) VALUES ('$value')";
           
        $result = $this->conn->query($Sql);
    }
    public function show($table)
    {
        $sql = "SELECT * FROM `{$table}`";
        $result = $this->conn->query($sql);
        $res = $result->fetch_all(MYSQLI_ASSOC);
        return $res;
    }
    public function  delete($table,$id)
    {
        $sql = "DELETE FROM `{$table}` WHERE `id` = $id";
        $this->conn->query($sql);
    }
    public function showsingle($table,$id)
    {
        $sql = "SELECT * FROM `{$table}` WHERE `id` = $id";
        $result = $this->conn->query($sql);
        $res = $result->fetch_assoc();
        return $res;

    }

    public function update($table,$arr, $id)
    {
        $pair = [];
        foreach( $arr as $key=>$val )
        {
            $pair[]  = "`$key`='$val'";
        }
        $pairs = implode(",",$pair);
        $sql = "UPDATE `{$table}` SET $pairs WHERE `id` = $id";
        $result = $this->conn->query($sql);
        if($result)
        {
            return "User Updated successfuly";
        }
    }
    
    public function login($name, $email)
    {
        // You should perform proper validation and security measures here.
        // For simplicity, we're not hashing passwords in this example.
        
        $name = $this->conn->real_escape_string($name);
        $email = $this->conn->real_escape_string($email);
    
        $sql = "SELECT * FROM `user_tbl` WHERE `name` = '$name' AND `email` = '$email'";
        $result = $this->conn->query($sql);
    
        if ($result->num_rows == 1) {
            // User is authenticated, you can set session variables here if needed.
            // For now, we'll just return true.
            return true;
        } else {
            // User authentication failed.
            return false;
        }
    }
    
    
    
}

    


$crudobj = new data();
