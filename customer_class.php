<?php


require '../Settings/db_class.php';


//inherits methods from db_class

class NewCustomer extends db_connection
{
    //returns true or false for all methods
    function NewCustomer($name,$email,$password,$address,$phone)
    {
        $sql = "INSERT INTO `customer`( `cust_name`, `cust_email`, `cust_password`, `cust_address`, `cust_contact`) VALUES ('$name','$email','$password','$address','$phone')";
        return $this->db_query($sql);
    }
    //selecting a particular user from a database
    function login($email)
    {
        $sql = "SELECT * FROM customer WHERE customer_email='$email'";
        return $this->db_fetch_one($sql);
    }

   function EditCustomer(){
    
   }
}
