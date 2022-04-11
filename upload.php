<?php
if(isset($_POST['submit'])){
    $check = getimagesize($_FILES['file']['tmp_name']);
    if($check){
$dir = "uploads/";
$fileImage = $dir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"],$fileImage)){
    echo "ไฟล์ภาพชื่อ" . basename($_fILES["file"]["name"]) . "อัพโหลดเสร็จแล้ว";
}else{
    echo "เกิดข้อผิดพลาด";
}
    }else{
        echo"<script> alert('ไม่ใช่รูปภาพโปรดอัพโหลดไฟล์ภาพเท่านั้น') </script>";
        header("Refresh:0; url=index.php");
    }
}else{
    header("location: index.php");
}
