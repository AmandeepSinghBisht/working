<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$bgroup=$_POST['bgroup'];

if(!empty($name) || !empty($email) || !empty($phone) || !empty($bgroup)){
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="student1";

    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);

    if(mysqli_connect_error()){
        die('Connect error('.mysqli_connect_error().')'.mysqli_connect_error());
    }else{
        $SELECT="SELECT email From one Where email=? Limit 1";
        $INSERT="INSERT Into one(name,email,phone,bgroup) values(?,?,?,?)";

        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum=$stmt->num_rows;

        if($rnum==0){
            $stmt->close();

            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ssss",$name,$email,$phone,$bgroup);
            $stmt->execute();
            echo "New Record inserted successfully..!";
        }else{
            echo "Someone already registred using this email";
        }
        $stmt->close();
        $conn->close(); 
    }
}else{
    echo "All Field is Required...!";
    die();
}
?>