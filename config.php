<?php 

 
        $servername ="us-cdbr-east-02.cleardb.com";
        $username ="bf05ca120624fb";
        $password="181ac24a";
        $dbconnect="heroku_4e956cc525a6de9";

      $connect = mysqli_connect($servername,$username,$password,$dbconnect);
    
      if ($connect->connect_errno) 
      {
    echo "Failed to connect : (" . $connect->connect_errno . ") " . $connect->connect_error;
     }
     
?>