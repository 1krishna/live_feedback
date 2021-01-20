<?php
    $conn=mysqli_connect('localhost','feed', 'feed@421', 'live');
    $id=$_GET['id'];
    $maxid=$_GET['maxid'];
    $q="select * from feed where id>$id and id<=$maxid";
    $res=mysqli_query($conn,$q);
    $arr=array();
    $i = 0;
    while ($row = mysqli_fetch_assoc($res)) {
        $arr[$i] = array(
            'id' => $row['id'],
            'comment' => $row['comment'],
            'timestamp' => $row['timestamp'],
            'name' => $row['name'],
            'team' => $row['team'],
        );
        $i++;
    }
    echo json_encode($arr);


?>