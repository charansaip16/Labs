<?php
    if(isset($_POST['submit'])) 
    {
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $flag = 1;
	
        if(!$uname){
            echo "Name not entered!<br>";
            }
        else 
        {	
            if(ctype_alpha($uname)==0) { 
                echo "Name contains numeric characters<br>"; 
                $flag=0; 
            }
		
            else if(strlen($uname)<6) { 
                echo "Name is less than 6 characters<br>";
                $flag=0; 
            }
        }

        if(!$pass)
        {
            echo "Password not entered!<br>";
        }
        else 
        {	
            if(strlen($pass)<6) { 
                echo "Password is less than 6 characters<br>";
                $flag=0; 
            }
        }
        
        if(!$email)
        {
            echo "Email not entered!<br>";
        }
        else 
        {	
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email address is Incorrect<br>";
                $flag=0; 
            }
        }
	
        if(!$phone)
        {
            echo "Phone number not entered!<br>";
        }
        else 
        {	
            if(ctype_digit($phone)==0) { 
                echo "Phone Number cannot contain alphabets<br>";
                $flag=0; 
            }
		
            else if(strlen($phone)!=10) { 
                echo "Phone Number is not 10 digits long<br>";
                $flag=0; 
            }
        }
        if($flag)
        {
            echo "All fields are validated!";
        } 
}
?>
