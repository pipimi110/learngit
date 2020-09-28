<?php
$conn=mysqli_connect("mysqltest","root","root","jkba");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//连接测试
$sql = "show tables;";
$sql = "select 1;";
$sql = "select * from flag;";
//$sql="insert into record(p_id, userid)values ('".$data['id']."','".$user->getCardID()."');";
$result = mysqli_query($conn,$sql);
if(!$result){
    throw new Exception('SQLerror');
}else{
	var_dump($result);
	echo "success";
}

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"];
        echo $row['flag'];
    }
} else {
    echo "0 结果";
}
