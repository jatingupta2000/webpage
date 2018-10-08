<html>
<head>
<style>
    .error
    {
        color: red;
    }
</style>
        <h1>Form Exercise</h1><br>
    <title>Form</title>
        
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
                $errname = $erremail = $errwebsite = $errgender = " ";
                $name = $email = $website= $comment = $gender = " ";
            
                if(empty($_POST['name']))
                {
                    $errname="Name Required";
                } 
                if(empty($_POST['email']))
                {
                    $erremail="Email Required";
                } 
                if(empty($_POST['website']))
                {
                    $errwebsite="Wesite Required";
                } 
                if(empty($_POST['gender']))
                {
                    $errgender="Gender Required";
                } 
            
                $name=$_POST['name'];
                $email=$_POST['email'];
                $comment=$_POST['comment'];
                $website=$_POST['website'];
                $gender=$_POST['gender'];
        }
        ?>
        
        <div class="error">* Required Field</div>
        <form method="post" action="<?php echo "$_SERVER[PHP_SELF]"?>">
            Name : <input type="text" name="name">
            <span class="error">* <?php if(isset($errname)){echo $errname;}?></span><br><br>
            
            Email : <input type="email" name="email">
            <span class="error">* <?php if(isset($erremail)){echo $erremail;}?></span><br><br>
            
            Website : <input type="text" name="website">
            <span class="error">* <?php if(isset($errwebsite)){echo $errwebsite;}?></span><br><br>
            
            Comment : <textarea name="comment" rows="5" cols="60" placeholder="Write your comment here ..."></textarea><br><br>
            
            Gender : 
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Other">Other
            <span class="error">* <?php if(isset($errgender)){echo $errgender;}?></span><br><br>
            
            
            <input type="submit" value="Submit">
        </form>
        
        <?php
        if(isset($name))
        echo "Name : $name<br>";
        if(isset($email))
        echo "Email : $email<br>";
        if(isset($website))
        echo "Website : $website<br>";
        if(isset($comment))
        echo "Comment : $comment<br>";
        if(isset($gender))
        echo "Gender : $gender<br>";
        ?>
    </head>
</html> 