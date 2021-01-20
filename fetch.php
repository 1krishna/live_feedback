<?php 
    $conn=mysqli_connect('localhost','feed','feed@421','live');
    $q= "select max(id) as id from feed";
    $id=mysqli_query($conn,$q);
    $id=mysqli_fetch_assoc($id);
    echo $id['id'];
?>