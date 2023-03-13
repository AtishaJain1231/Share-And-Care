<?php



// if(isset($_POST['submit']))
// {
   // echo "hello";
   $server="mysamplepolardb.mysql.polardb.japan.rds.aliyuncs.com:3306";
   $username="atisha";
   $password="Atisha@1234";
   $database="data1";

  //Create Connection
   $connection = mysqli_connect($server,$username,$password,$database);

  
  //check for connection success

    //echo"success connecting to the DB";


   if(isset($_POST['submit']))
   {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $sql="INSERT INTO booknow VALUES ('$name','$email','$phone','$address','$arrivals','$leaving');";
   
      if ($connection->query($sql) === TRUE) {
         echo '<script>alert("Inserted Successfully")</script>';
         header( "refresh:3;url=book.php" );
       } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
       }

      // header('location:book.php');       
    
   }
//     else{
//        echo 'something went wrong please try again!';
//  }

   // echo $sql;

// execute query
// if($connection->query($sql)==true){
//    // echo"Successfully inserted";

//    //flag for successful insertion
//    $insert=true;
// }
// else{
   
//    echo"ERROR: $sql <br> $connection->error";
// }

// close the database connection
$connection->close();


?>