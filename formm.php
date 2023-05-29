<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        alert("Data successfully added!");
    </script>
</head>
<body>
    
</body>
</html>
<?php


  $servername="localhost";
  $username="root";
  $password="";
  $database="stu";
  $conn=mysqli_connect($servername,$username,$password,$database);

  if(!$conn)
  {
    die("Connecion failed" . mysqli_connect_error());
  }
  else{
  echo "Connected successfully\n";
  }

   if(isset($_POST['submit']))
   {
     $name=$_POST['name'];
     $age=$_POST['age'];
     $gender=$_POST['gender'];
     $branch=$_POST['branch'];
     $email=$_POST['email'];
   }
   else
   {
     echo "  not set"; 
     
    }
  //$sql="CREATE DATABASE stu";
  
  // $sql = "CREATE TABLE student( ID int unsigned AUTO_INCREMENT Primary key, FULLNAME varchar (50),AGE int,GENDER varchar(20),BRANCH varchar (6),EMAIL varchar(50))";

   $sql = "insert into student( FULLNAME ,AGE ,GENDER ,BRANCH ,EMAIL) VALUES('$name','$age','$gender','$branch','$email')";
   $data = "\n Name : '$name' \n Age : '$age' \n Gender : '$gender' \n Branch : '$branch' \n Email : '$email'";
   //$sql = "DROP TABLE student";
    if(mysqli_query($conn,$sql))
     {
     echo " Data added is : " . $data ;
     }
     else{
     echo "Error occured while creating table";
     }
?>

