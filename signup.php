<?php
    include_once 'header.php';
?>

<section class = "signup-form">
    <h2>Sign Up</h2>
    <form action = "signup.inc.php" method = "post">
    
        <input type = "text" name = "name" placeholder = "Full name...">
        <input type = "text" name = "email" placeholder = "Email...">
        <input type = "text" name = "uid" placeholder = "Username...">
        <input type = "text" name = "pwd" placeholder = "Password...">
        <input type = "text" name = "pwdrepeat" placeholder = "Repeat Password...">
        <button type = "submit" name = "submit">Sign Up</button>
    </form>
</section>