<?php require_once "conn.php";

if(isset($_POST['submit'])){
    $name      = mysqli_real_escape_string($conn, $_POST['name']);
    $bookname  = mysqli_real_escape_string($conn, $_POST['bookname']);
    $aname     = mysqli_real_escape_string($conn, $_POST['aname']);
    $file      = mysqli_real_escape_string($conn, $_POST['file']);
    $details   = mysqli_real_escape_string($conn, $_POST['details']);
    
    if (empty($name)|| empty($file )|| empty($details) || empty($aname)){
        echo "please fill all spaces";
        die();
        $sql = "INSERT INTO `books`(`name`,`aname`,`bookname`,`file`,`details`)
        VALUES ('$name', '$bookname', '$aname','$file','$details')";

        if(mysqli_query($conn, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo  "record not inserted";
        echo mysqli_error($conn);
    }
    }
}