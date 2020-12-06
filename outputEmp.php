<?php
    $host="localhost";
    $user="root";
    $pass="";
    $dbname="project";
    $conn = mysqli_connect($host,$user,$pass,$dbname) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");
    mysqli_set_charset($conn,"utf8");
    
    $sql = "INSERT INTO Contacts (empID,empFullname,empNickname,empPhone,empEmail,empDepartment,empMajor,empStartDate)
    VALUES ('{$_POST['empID']}','{$_POST['empFullName']}','{$_POST['empNickName']}','{$_POST['empPhone']}','{$_POST['empEmail']}','{$_POST['empDepartment']}','{$_POST['empMajor']}','{$_POST['empStartDate']}')";
    
    if (mysqli_query($conn, $sql)) {
    $result = "บันทึกข้อมูลสำเร็จ";
    } else {
    $result ="Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    echo ($result);
    mysqli_close($conn);
	echo 'edit on local';    
    ?>
