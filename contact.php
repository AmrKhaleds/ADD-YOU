<?php 

    if(isset($_POST['btn-send']))
    {
       $FirstName = $_POST['fname'];
       $LastName = $_POST['lname'];
       $Email = $_POST['email'];
       $Msg = $_POST['msg'];

       if(empty($FirstName) || empty($Email) || empty($LastName) || empty($Msg))
       {
           header('location:contact-html.php?error');
       }
       else
       {
           $to = "amrkhaleds898@gmail.com";

           if(mail($to,$Msg,$Email))
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("location:contact-html.php");
    }
?>