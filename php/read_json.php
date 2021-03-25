<?php

  $url = $_SERVER['DOCUMENT_ROOT']."/myschedule/data/sch_rate.json";

  if(!file_exists($url)){
    echo "
      <script>
        alert('데이터가 없습니다.');
        location.href='/myschedule/index.php';
      </script>
    ";
  }

  $json_string=file_get_contents($url);
  echo $json_string;

?>