<?php

require_once "connect.php";

$connect = @new mysqli($host, $db_user, $db_password, $db_name);

if($connect->connect_errno!=0)
{
    echo "Error: ". $connect->connect_errno. "Opis: ". $connect->connect_error;
}
else{
    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE login='$login' AND password='$password'";

    if($result=@$connect->query($sql))
    {
        $quantity=$result->num_rows;
        if($quantity>0)
        {
        $row=$result->fetch_assoc();
        $user=$row['password'];



        $result->close();

        //header('Location:');
        }
        else
        {

        }
    }

    $connect->close();
}

?>