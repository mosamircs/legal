<?php 

class validation
{
    public function username_validation($name)
    {
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {     
                $_SESSION['error'][] =  "Only letters and white space allowed";  
            }else{
                $_SESSION['name'] = $name;
            } 
    }

    public function email_validation($email)
    {
        if (empty($_POST["email"])) {
            $_SESSION['error'][] = "Email is required";
        } else {
            if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST["email"])) {
                $_SESSION['error'][] =  "Invalid email format";
            } else {
                $_SESSION['email'] = $_POST['email'];
            }
        }
    }

    public function phone_validation($phone)
    {
        if (empty($_POST["phone"])) {
            $_SESSION['error'][] = "Phone is required";
        } else{
           
            if (!preg_match("/[0-9]{11}/", $_POST["phone"])) {     
                $_SESSION['error'][] =  "Invalid email format";  
            }else{
                $_SESSION['phone'] = $_POST['phone'];
            }
        }   
    }
}
//function for 
?>