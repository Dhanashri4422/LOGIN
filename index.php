<?php
if(isset($_POST['submit'])){
    $Name=$_POST['Name'];
    $Password=$_POST['Password'];

    $host = 'localhost';
    $user = 'root';
    $pass = 'Dhanashri@44';
    $dbname = 'dhanu';

    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $sql = "INSERT INTO data(Name,Password) values ('$Name','$Password')";
    mysqli_query($conn,$sql);
}
?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        html{
            background-image: url("wallpaper.jpg");
        }
        form{
            border:5px solid white;
            padding: 6%;
            margin:3% 0%;
            width:40%;
            height:5%;
            background-image: url("Background image.jpg");
            
            
           
        }
        
        #submit:hover{
            background-color:red;
            
        }
        #submit{
           
            width:50%;
            height:50%;
            font-size:100%;
            cursor:pointer;


            
        }
        input{
            width:100%;
            border:5px solid #9ECFFD;
        }
        input:hover{
            background-color:#77FC31;
        }
        #h{
            color:white;
        }
        </style>
</head>
<body>
    <center>
        
    <form action="#" method="POST">
    <h1 id="h">Login Page</h1>
        <lable for="Name">Name</lable><br>
        <input type="text" id="Name" name="Name" placeholder="Name"><br><br>
        <lable for="Password">Password</lable><br>
        <input type="Password" id="Password" name="Password" placeholder="Password"><br><br><br>
        <input type="reset" name="reset"><br><br>
        <input type="submit" name="submit" value="submit" id="submit">
    </center>
</body>

</html>