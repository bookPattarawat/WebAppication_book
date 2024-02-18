<?php  
    include("../connect.php");

    $b_id = $_POST['b_id'];
    $date = date("Y-m-d");

    $sql = "UPDATE tb_borrow_book SET br_date_rt = '$date' WHERE b_id = '$b_id'";
    $qSql = $conn->query($sql);

    if($qSql){
        echo json_encode(1);
    }else{
        echo json_encode(0);
    }

?>