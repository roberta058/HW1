<?php
    $conn=mysqli_connect("localhost", "root", "", "around");
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $query="SELECT username FROM account WHERE username='$username';";
    $res=mysqli_query($conn,$query);

    $json = json_encode(array('exists' => mysqli_num_rows($res) > 0 ? true : false));

    echo $json;

    mysqli_close($conn);
    ?>
