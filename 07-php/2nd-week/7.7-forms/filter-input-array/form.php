<?php

/**
 * 1. action 
 * Form က ပေးပို့တဲ့ Data တွေကို လက်ခံ အလုပ်လုပ်မယ့် Code File ရဲ့ တည်နေရာကိုပေးရမယ်။
 * 2. method
 * HTTP Request တွေထဲက GET or POST ကို ထည့်ပေးရမယ်။ Default က GET။
 */
?>
<!-- <form action="./process.php" method="get">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">

    <input type="submit" value="Submit">
</form> -->

<form method="post" action="process.php">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username"><br><br>
    <label for="age">Age:</label>
    <input type="text" name="age" id="age"><br><br>
    <label for="email">Email:</label>
    <input type="text" name="email" id="email"><br><br>
    <input type="submit" value="Submit">
</form>