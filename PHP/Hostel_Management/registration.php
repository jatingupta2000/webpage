<html>
    <head>
        
        <?php
            $conn=new mysqli('localhost','root','','hostelpractise');
            if(!$conn)
            {
                die("Server Not Found");
            }
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                    $username=$password=$email=$gender=$mobile=$address="";
                    $errusername=$errpassword=$erremail=$errgender=$errmobile=$erraddress="";
                    
                    if(empty($_POST['username']))
                    {
                        $errusername="*";
                    }
                    else
                    {
                        $username=$_POST['username'];
                    }
                    
                    if(empty($_POST['password']))
                    {
                        $errpassword="*";
                    }
                    else
                    {
                        $password=$_POST['password'];
                    }
                    if(empty($_POST['email']))
                    {
                        $erremail="*";
                    }
                    else
                    {
                        $email=$_POST['email'];
 
                    }                
                    if(empty($_POST['gender']))
                    {
                        $errgender="*";
                    }
                    else
                    {
                        $gender=$_POST['gender'];
                    }
                    if(empty($_POST['mobile']))
                    {
                        $errmobile="*";
                    }
                    else
                    {
                        $mobile=$_POST['mobile'];
 
                    }
                    if(empty($_POST['address']))
                    {
                        $erraddress="*";
                    }
                    else
                    {
                        $address=$_POST['address'];
 
                    }
                    
            }
        if(isset($username,$password,$email,$gender,$mobile,$address))
        {
            $sql="INSERT INTO registration(username,password,email,gender,mobile,address) VALUES ('$username','$password','$email','$gender','$mobile','$address')";
            if($conn->query($sql)===TRUE)
            {
                echo "Data Inserted !!!";
            }
            else
            {
                echo "Data Insertion Error !!!"."   $conn->error";
            }
        }
                
        ?>
        
        <title>School</title>
        <h1 class="h1">ABC Group of Institutions</h1>
        <link rel="stylesheet" type="text/css" href="registration.css">
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
                    <b><h1 class="head2">Registration</h1></b>
                    <form class="reg" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        
                        Username : 
                        <input type="text" name="username" placeholder="Username">
                        <span><?php if(isset($username)){echo $errusername;}?></span><br><br>
                        Password : 
                        <input type="password" name="password" placeholder="password">
                        <span><?php if(isset($password)){echo $errpassword;}?></span><br><br>
                        Email :
                        <input type="email" name="email" placeholder="E-mail">
                        <span><?php if(isset($email)){echo $erremail;}?></span><br><br>
                        Gender : 
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                        <span><?php if(isset($gender)){echo $errgender;}?></span><br><br>
                        Mobile : 
                        <input type="number" name="mobile" placeholder="Mobile No.">
                        <span><?php if(isset($mobile)){echo $errmobile;}?></span><br><br>
                        Address : <br>
                        <textarea rows="4" cols="30" name="address" placeholder="Address"></textarea>
                        <span><?php if(isset($address)){echo $erraddress;}?></span><br><br><br>
                        <input type="reset" value="Reset">
                        <input type="submit" value="Submit">
                        
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