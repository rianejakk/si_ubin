<?php
    require ('connect.php');

    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        $sql = "DELETE from data_mitra 
                WHERE NIK = '$id'
                ";
        $result = $conn->query($sql);

        if($result) {
            header('location: ../dashboard/data_mitra.php?username=' . urlencode($username));
        }
        else {
            die("Error: " . $sql . "<br>" . $conn->error);
        }
    }
?>