<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    echo "รหัสนักศึกษา : ".$sid = $_REQUEST['sid'];
    echo "<br>";
    echo "ชื่อ : ".$fname = $_REQUEST['fname'];
    echo "<br>";
    echo "นามสกุล : ".$lname = $_REQUEST['lname'];
    echo "<br>";
    echo "สาขาวิชา : ".$program = $_REQUEST['program'];
    echo "<br>";
    echo "คณะ : ".$faculty = $_REQUEST['faculty'];
    echo "<br>";
    echo "ปี : ".$std_year = $_REQUEST['std_year'];
    echo "<br>";
    echo "ชื่อโครงงาน(ไทย) : ".$prj_name_th = $_REQUEST['prj_name_th'];
    echo "<br>";
    echo "ชื่อโครงงาน(อังกฤษ) : ".$prj_name_en = $_REQUEST['prj_name_en'];
    echo "<br>";
   $prj_tool = $_REQUEST['prj_too'];
    print_r($prj_tool);
    echo "<br>";
    echo "อาจารย์ที่ปรึกษา : ".$prj_advisor = $_REQUEST['prj_advisor'];
    echo "<br>";
    ?>

</body>
</html>