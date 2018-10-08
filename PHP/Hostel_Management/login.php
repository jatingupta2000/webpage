<html>
    <head>
        <?php
            $conn=new mysqli('localhost','root','','hostelpractise');
            if(!$conn)
            {
                die("Server Not Found");
            }
            if($_SERVER['REQUEST_METHOD']=="POST")
            {
                $username=$password="";
                $errusername=$errpassword="";
                $username=$_POST['username'];
                if(empty($username))
                {
                    $errusername="*";
                }
                $password=$_POST['password'];
                if(empty($password))
                {
                    $errpassword="*";
                }
                if(isset($username,$password))
                {
                    //comparing code
                    $sql="SELECT * FROM login";
                    $result=$conn->query($sql);
                    $row=$result->fetch_assoc();
                    if(($username===$row['username']) and ($password===$row['password']))
                    {
                        header("Refresh:0; url=loginpage.php");
                    }
                    else
                    {
                        echo "wrong details ";
                    }
                }
            }
        $conn->close();
        ?>
        
        <title>School</title>
        <h1 class="h1">ABC Group of Institutions</h1>
        <link rel="stylesheet" type="text/css" href="login.css">
        <body>
            <marquee direction="left" class="slider" >College Information</marquee>
            <image src="images/home.jpg" class="image"></image>
            <header>
                <a href="home.html">HOME</a>
                <a href="about.html">ABOUT</a>
                <a href="contact.html">CONTACT</a>
                <a href="gallery.html">GALLERY</a>
                <a href="courses.html">COURSES</a>
                <a href="registration.php">REGISTRATION</a>
                <a href="login.php">LOGIN</a>
            </header>
            
            <div class="leftpor">
                <center class="head">
                    <b><h1 class="head2">Login</h1></b>
                    <form class="log" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                        
                        Username : 
                        <input type="text" name="username" placeholder="Username"?>
                        <span class="error"><?php if(isset($username)){echo $errusername;}?></span><br><br>
                        Password : 
                        <input type="password" name="password" placeholder="password">
                        <span class="error"><?php if(isset($password)){echo $errpassword;}?></span><br>
                        <br><br><br>
                        <input type="submit" value="Login">
                        
                    </form>
                </center>
            </div>
            
            <div class="rightpor">
                <h2>School Updates</h2>
                <div class="scroll"><marquee direction="up" onmouseover="stop()" onmouseout="start()">
                <a href="#" onm>Campus Drive</a>
                <a href="#">News</a>
                <a href="#">Sports Fest</a>
                <a href="#">Admissions</a>
                <a href="#">Weekend Event</a>
                <a href="#">Notice Board</a></marquee>
                    </div>
            </div>
            
        </body>
        <div class="footer">
             Copyright under 2018-19
        </div>
    </head>
</html>