<?php
session_start(); //เปิด session เพื่อทำงาน
include("connect.php");
//1 admin 
//2 user
//3 dev
$email = $_POST["email"];
$password =md5($_POST["password"]);

if($email == ""){ //เช็คค่าว่างในการกรอกข้อมูล
    echo "Chek Email"; //แสดงให้เห็นว่าอย่าลืมใส่ 
} else if($password == ""){
    echo "Check Password";
} else if{
    // query form database
    $sql = mysql_query("SELECT * FROM user_tbl WHERE email = $email AND password = $password ") // ใช้อะไรเป็นตัวค้นหาใน table
    //count result data
    $num = mysql_num_rows($sql);
    // ดักค่าที่ได้มาว่ามีค่าเท่าไร น้อยกว่าหรือเท่ากับ 0 เท่ากับหาไม่เจอ
    if($num <= 0){
        echo "<meta http-equiv='refresh' content='1;URL=index.php'>";
    }   else {
        while ($user = mysql_fetch_array($sql)){
           // admin
            if($user["status"] == 1)
            {
                $_SESSION["ses_id"] = session_id();
                $_SESSION["email"] = $user["email"];
                $_SESSION["status"] = "Admin";
                //ส่งค่าไปที่หน้าของ admin
                echo "<meta http-equiv='refresh' content='1;URL=admin.php'>";
            } else if($user["status"] == 2){
                $_SESSION["ses_id"] = session_id();
                $_SESSION["email"] = $user["email"];
                $_SESSION["status"] = "User";
                //ส่งค่าไปที่หน้าของ user
                echo "<meta http-equiv='refresh' content='1;URL=User.php'>";
            } else {
                $_SESSION["ses_id"] = session_id();
                $_SESSION["email"] = $user["email"];
                $_SESSION["status"] = "Dev";
                //ส่งค่าไปที่หน้าของ dev
                echo "<meta http-equiv='refresh' content='1;URL=dev.php'>";
            }
        } // จบ while
    } // จบ else
}


?>