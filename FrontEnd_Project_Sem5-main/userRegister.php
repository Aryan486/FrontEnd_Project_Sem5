<?php
    require_once('dbcon.php');
    if(isset($_POST['submit']))
    {
        $f_name =$_POST['name'];
        $email =$_POST['email'] ;
        $phone =$_POST['phone'] ;
        $password =$_POST['password'] ;
        $id =$_POST['id'] ;
        $dob =$_POST['dob'] ;
        // $hash = password_hash($password,PASSWORD_DEFAULT);
        $hash=md5($password);

        
        $sql = mysqli_query($cn,"INSERT into userDet (id,name,email,mobile,dob,password) values ('$id','$f_name','$email','$phone','$dob','$hash')") ;
        if($sql ===TRUE)
        {
            echo "<script>alert('Registered successfully!');window.location.href='../FrontEnd_Project_Sem5-main/Login/LoginForm.html';</script>" ;
        }
        else
        {
            echo "<script>alert('Some error has occured, Try Again!!');window.location.href='../FrontEnd_Project_Sem5-main/SignUp/SignIn.html';</script>" ;
        }
    }
    ?>