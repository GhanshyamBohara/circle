<?php 

/* mysql://ba406683c58e0e:9100f338@us-cdbr-east-02.cleardb.com/heroku_bd26c1de3d217c7?reconnect=true*/
        $servername ="us-cdbr-east-02.cleardb.com";
        $username ="ba406683c58e0e";
        $password="9100f338";
        $dbconnect="heroku_bd26c1de3d217c7";

     /* $servername = "localhost";
      $username = 'root';
      $password = '';
      $dbconnect='form';*/

      $connect = mysqli_connect($servername,$username,$password,$dbconnect);
    
      if ($connect->connect_errno) 
      {
    echo "Failed to connect : (" . $connect->connect_errno . ") " . $connect->connect_error;
     }
     

?>