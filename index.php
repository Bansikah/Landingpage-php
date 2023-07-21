<?php
$db = new Mysqli;

$db->connect('localhost','root','','landpage');


if(isset($_POST['send'])){
$name = $_POST['name'];
$email = $_POST['email'];

   $sql = "insert into info(name,email) values('$name','$email')";

   $val = $db->query($sql);

   if($val){
     echo'<h2>Successfully Inserted</h2>';
     header('location:index.php');
   }
   else{
     echo"error";
   }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Money Online</title>
    <style>
        *{
            padding:0px;
        }
        .input{
            padding:10px;
        }
        .head{
            font-size:40px;
        }
        .enter{
            font-size:30px;
            padding-top:5px;
        }
        .btn{
            border-radius:5px;
            background-color:red;
            font-size:30px;
            color:white;
        }
        .paragraph{
            background-color:green;
            color:white;
            letter-spacing:1.5px;
            font-size:30px;
            padding:0px;
            width:100%;
        }
        .p1{
       background-color:red;
       color:white;
       font-size:30px;
       padding:0px;
       width:100%;
        }
        .p2{
        background-color:pink;
       color:black;
       font-size:30px;
       padding:0px;
       width:100%; 
        }
    </style>
</head>
<body>

<form action="" method="POST">
    <center><p class="head">How To Make Money Online From Home, Receive your own book</p>
   <div class="paragraph">
    <p>Essay writing for Money The most popular option is creative essay
        writing online but other genres such as business, academic, and 
        technical writing are also available. Therefore, you would need to determine the 
        type of writing job online in which you are most interested in and qualified.
    </p>
   
   <div class="p1">
    <p>NECESSARY SKILLS AND PREREQUISITES<br>
Must have access to a smartphone, tablet or computer and be able 
to type online easily. Be able to work independently. Ability to 
closely follow the steps and instructions provided for at least 5 available 
hours per week — Reliable internet connection. Any age can apply.<br>
REMOTE
Online remote work. We are currently significantly expanding 
the number of remote workers for these roles due to demand.<br>
CONTRACT DURATION
NO FIXED TERM <br>. Pay: U$25 – U$40 per hour (depending on the 
complexity of typing tasks and details). You can work for 1 hour 
a day, for example, as long as you reach the
 minimum hours in the week (explained in the topic below).
</p>
   </div>
   </div>
    <img src="data:image/jpeg;base64,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"><div class="input">
        <input type="text" name="name" class="enter" placeholder="Please Enter your name"><br>
        <input type="email" name="email" class="enter" placeholder="Please Enter your email"><br>
        <button class="btn" name="send">I want the book Now!</button>
    </div>
<div class="p2">
    <p>
        
How to do data entry work?
Data entry work is one of the most easiest job. You may need to convert or type the data from one format to another. For example, you may need to copy the data in notepad and paste the contents in an excel sheet.

Is this website only for data entry job?
No, This website is not just for data entry jobs, You can find jobs from different sectors in this website.

    </p>
</div>
</center>
    </form>
</body>
</html>