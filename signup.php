<?php include 'header.php';?>
<center>
<form action="db.php" method="post" class="hero__section">
    <fieldset class="fild" >
        <h1>SignUp</h1><br>
        <input type="text" name="name" placeholder="Enter Name" class="it"><br><br>
        <input type="text" name="username" placeholder="Enter Username" class="it"><br><br>
        <input type="text" name="mobile" placeholder="Enter Mobile Number" class="it"><br><br>
        <input type="password" name="pass" placeholder="Enter Password" class="it"><br><br>
        <input type="submit" name="sub" value="SignUp for free" class="btn__dark margin__top">
        <button class="btn__dark margin__top"><a href="login.php">Login</a></button>

     </fieldset>
</form>
</center>
<?php include 'footer.php';?>