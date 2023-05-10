<?php
if(isset($_POST['submit'])){
                    $username=$_POST['username'];
                    $email=$_POST['email'];
                    $password_1=$_POST['password_1'];
                    $password_2=$_POST['password_2'];

                $verify_query=mysqli_query($con, "SELECT email from administrators WHERE email='$email'");
                if(mysqli_num_rows($verify_query)!=0){
                    echo "Error";
                    

                }
                else{
                    mysqli_query($con,"INSERT INTO administrators(username,email,password_1,password_2) VALUES('$username','$email','$password_1',$password_2)") or die("ERROR!");
                    echo "Registration succesfully!";
                        


                } 
            }
?>   