<?php
  $projectCate = $_POST['projectCate'];

  // 개행 문자 처리 오류 방지
  $projectTit = nl2br($_POST['projectTit']);
  $projectCon = nl2br($_POST["projectCon"]);

  // 특수 문자 처리 오류 방지
  $projectTit = addslashes($projectTit);
  $projectCon = addslashes($projectCon);

  $regDate = date("Y-m-d");

  //echo $projectCate, $projectTit, $projectCon, $regDate;

  include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/db_conn.php";
  $sql = "insert into sch_txt(sch_txt_cate, sch_txt_tit, sch_txt_con, sch_txt_reg) values('$projectCate', '$projectTit', '$projectCon', '$regDate')";

  mysqli_query($dbConn, $sql);

  echo "
    <script>
      alert('작성이 완료되었습니다!');
      location.href='/myschedule/pages/input_form.php';
    </script>
  ";
?>