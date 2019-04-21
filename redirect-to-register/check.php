<?php
//    $conn = new mysqli("localhost", "root", "", "event_participants");
    $conn = new mysqli("localhost", "event", "Hello@exodia", "event_participants");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $id = $_POST['id'];
    $name = $_POST['name'];
    $search = "select * from user_details where id = '$id'";
    $result = $conn->query($search);
    if ($result->num_rows>0) {
        echo "success";
    } else {
        $sql = "insert into user_details(id, name) values ('$id', '$name')";
        if($conn->query($sql)==TRUE){
            echo "success";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
?>