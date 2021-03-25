<meta charset="UTF-8" />

<?php
$update_num = $_GET['num'];
$update_tit = n12br($_POST['updateTit']);
$update_con = n12br($_POST['updateCon'];

include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/db_conn.php";
$sql = "update sch_txt set sch_txt_tit, sch_txt_con = '$update_con' where sch_txt_con = $update_num";
'$update_con' where sch_txt_num=$update_num';
mysqli_query($dbConn, $sql);

echo "
<script>
  alert('수정이 완료 되었습니다.');
  location.href='/myschedule/pages/detail_view.php?num=<?=$update_num';
</script>

";

?>