<?php

  $auth_code=$_REQUEST['authCode'];

  include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/db_conn.php";
  $sql="select * from dashboard_admin where da_ad_pass = '$auth_code'";

  $auth_result = mysqli_query($dbConn, $sql);
  $auth_match = mysqli_num_rows($auth_result);

  if(!$auth_match){
    echo "
      <script>
        alert('인증 코드가 틀립니다.');
        history.go(-1);
      </script>
    ";
  } else {
    $auth_row = mysqli_fetch_array($auth_result);

    session_start();
    $_SESSION['usercode'] = $auth_row['da_ad_pass'];

    echo "
      <script>
        location.href='/myschedule/index.php';
      </script>
    ";
  }

?>