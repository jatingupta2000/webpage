<?php
    $conn=new mysqli('localhost','root','','college');
    if($conn->connect_error)
    {
        die("Connection Failed ". $conn->connect_error);
    }
else
{
    echo "Connection Established !!!";
}

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $sname=$_POST['sname'];
        $smarks=$_POST['smarks'];
        $deptid=$_POST['deptid'];
        
        $sql="INSERT INTO student(sname,smarks,deptid) VALUES ('$sname',$smarks,$deptid)";
        if($conn->query($sql) === TRUE)
        {
            echo "Data Inserted !!!";
        }
        else
        {
            echo "Data not inserted ...";
        }
    }
?>