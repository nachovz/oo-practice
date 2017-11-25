<html><body>
<?php

require_once("User.class.php");

$user1 = new User("Steve", "Sanchez", "st@gmail.com", "ssanchez");

if($user1->setPassword("helloworld")){
    echo "password changed!<br>";
}

if($user1->setEmail("dsgjhfjhnfjlh")){
    echo "email changed!<br>";
}else{
    echo "BAD EMAIL!<br>";
}


$user1->email = "dsgjhsdjg";

print_r($user1);
?>
</body>
</html>