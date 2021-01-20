<?php
    function get_client_ip()
    {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    if(isset($_POST['cmt']))
    {
        $cmt=$_POST['cmt'];
        $team=$_POST['team'];
        $stu = $_POST['stu'];
        $conn=mysqli_connect('localhost','feed', 'feed@421','live');
        $ip = get_client_ip();
        $q= "INSERT INTO `feed`(`team`, `name`, `ip`, `comment`) VALUES ('$team','$stu','$ip','$cmt')";
        $res=mysqli_query($conn,$q);
        if($res)
        {
            echo "FeedBack Submitted";
        }
        else{
            echo "Failed To Submit";
        }
        
    }

?>