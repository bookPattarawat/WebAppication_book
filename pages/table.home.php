<?php 
    include("../connect.php");
    $search = $_POST['search'];

    $qData = $conn->query("SELECT * FROM tb_borrow_book JOIN tb_book ON tb_borrow_book.b_id = tb_book.b_id JOIN tb_member ON tb_borrow_book.m_user = tb_member.m_user  WHERE tb_member.m_name LIKE '%$search%' OR tb_book.b_name LIKE '%$search%'ORDER BY tb_borrow_book.br_date_br DESC, tb_borrow_book.b_id DESC");

    while($data = $qData->fetch_object()){ ?>
        <tr>
            <td><?php echo $data->b_id ?></td>
            <td><?php echo $data->b_name ?></td>
            <td><?php echo $data->m_name ?></td>
            <td><?php echo $data->br_date_br ?></td>
            <td><?php echo $data->br_date_rt ?></td>
            <td><?php echo $data->br_fine  ?></td>
        </tr>
  <?php  }
?>