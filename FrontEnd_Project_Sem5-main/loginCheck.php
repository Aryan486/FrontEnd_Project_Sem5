<?php
    
        require_once('dbcon.php');
        session_start() ;
        if(isset($_POST['login']))
        {
            if(empty($_POST['name']) || empty($_POST['Pass']))
            {
                echo "Please fill the following fields!" ;
            }
            else{
                $password = $_POST['Pass'];
                $hash=md5($password);
                // $hash = password_hash($password,PASSWORD_DEFAULT);
                $var = "SELECT *FROM userDet where name='".$_POST['name']."' and password='".$hash."' ";
                $result = mysqli_query($cn,$var) ;
                // $sql ="SELECT *FROM custDet where name='".$_POST['email']."' ";
                // $res=$cn->query($sql);
                // echo "idhar";
                if(mysqli_fetch_assoc($result))
                {
                    // if($res->num_rows ==1)
                    // {
                        // $row=$res->fetch_assoc();
                        // echo "Yhaa";
                        $_SESSION['username'] =$_POST['name'];
                        // $_SESSION['usid'] =$row["ID"];
                        echo "<script>alert('Login successfully!');window.location.href='../FrontEnd_Project_Sem5-main/Login/LoginForm.html';</script>" ;
                        header("location:/FrontEnd_Project_Sem5-main/RequestForm/BookingRequest.php");
                    
                }
                else{
                    echo "Wrong input details!" ;
                }
            }
        }


?>