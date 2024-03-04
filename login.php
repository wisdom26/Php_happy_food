<?php include 'header.php';?>
<center>
    <form action="logdb.php" method="post" class="hero__section">
        <?php 
        // echo htmlspecialchars($_SERVER["PHP_SELF"] );
        ?>
     <fieldset class="fild"> 
        <h1>Login</h1><br>
<!-- <label for="name" >Name:</label> -->
<input type="text" name="username" placeholder="Enter Uesrname" class="it"><br><br>
<!-- <label for="name" ></label> -->
<input type="password" name="pass" placeholder="Enter Password" class="it"><br><br>
<input type="submit" name="sub" value="Login" class="btn__dark margin__top">
<button class="btn__dark margin__top"><a href="signup.php">SignUp</a></button>
</fieldset>
</center>
    <?php
//     if(isset($_POST['sub']));
// $Fname= $_POST['name1'];
// $Lname= $_POST['pass'];
    
//     echo "<b> <p>$Fname $Lname </p>  </b>";
//     ?>
<?php include 'footer.php';?>