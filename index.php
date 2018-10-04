<!DOCTYPE html>

<?php
// including the function.php file
include("functions/function.php");

?>


<html>
<head>
    <meta charset="utf-8" />
    <title>home | fcsit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
</head>
<body>
    <header>
        <div id="logo">
            <img src="images/a.jpg" alt="">
        </div>
        <div id="form">
            <form action="" method="post">
                <label>email:</label><input type="email"name="email" required>
                <label>password:</label><input type="password"name="pwd" required>
                <input type="submit" name="login"value="login">
            </form>
        </div>
    </header>
    <div class="clr"></div>
   <!--parent container-->
    <div id="container1">
        <!-- first child container that hold image -->
        <div id="ccontainer">
            <h2>fcsit  buk community</h2>
           <img src="images/a.jpg" alt="">
        </div>
        <!--second child container that contains reg form-->
       <div class="clr"></div>
        <div id="ccontainer1">
            <h2>sign_up here</h2>
            <form action="" method="post">
                <label>full Name:</label><br/><input type="text"name="f_name"placeholder="full name" required><br>
                <label>email:</label><br/><input type="email"name="email"placeholder="email" required><br>
                <label>phone number:</label><br/><input type="text"name="phone"placeholder="phone number" required><br>
                <label>department:</label><br/>
                <select  name="department" id="select">
                    <option value="default">choose Department...</option>
                    <option value="computer science">computer science</option>
                    <option value="information technology">information technology</option>
                    <option value="software engineering">software engineering</option>
                
                </select>
                <br>
                <label>level:</label><br/>
                <select name="level" id="select">
                    <option value="default">chose level...</option>
                    <option value="100">Level 100</option>
                    <option value="200">Level 200</option>
                    <option value="300">Level 300</option>
                    <option value="400">Level 400</option>
                    <option value="spill over">Spill Over</option>
                </select>
                <br>
                <label>registration Number:</label><br/><input type="text"name="R_num"placeholder="registration Number" required><br/>
                <label>Date Of Birth:</label><label style="margin-left:22.5%;">Gender:</label>
                <input type="date" name="dob" placeholder="DOB" required>
                <select style="width:30%;" name="gender" >
                    <option id="ml">Male</option>
                    <option id="fml">Female</option>
                </select>
                <label>password</label><label style="margin-left:22.5%;">comfirm password</label><br>
                <input type="password"name="pass1"placeholder="password" required> 
                <input type="password"name="pass2"placeholder="comfirm password" required><br>
                <input type="submit" name="sign_up" value="submit">
            </form>
            <!-- calling the inseruser function -->
            <?php InsertUser(); ?>
        </div>
    
        <div class="clr"></div>
    </div>
    <div id="footer">
        <footer>
            <h3>&copy; 2018 - <a href="#">www.fcsitforum.com</a></h3>
        </footer>
    </div>
    
    
</body>

</html>
