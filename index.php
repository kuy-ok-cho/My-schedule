<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Schedule Dashboard</title>

  <!-- Awesome Font Link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- CSS Style Link -->
  <link rel="stylesheet" href="/myschedule/css/reset.css" />
  <link rel="stylesheet" href="/myschedule/css/style.css" />
  <link rel="stylesheet" href="/myschedule/css/media.css" />
</head>

<body>
  <!-- All Contents are wrapped inside wrap class -->
  <div class="wrap">
    <!-- header -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/myschedule/include/header.php"; ?>

    <?php
      include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/db_conn.php";
      $sql="select * from schedule_progress";

      $sch_result=mysqli_query($dbConn, $sql);
      $sch_row=mysqli_fetch_array($sch_result);

      $sch_db = $sch_row['sch_db'];
      $sch_api = $sch_row['sch_api'];
      $sch_ren = $sch_row['sch_ren'];
      $sch_pla = $sch_row['sch_pla'];
    ?>

    <!-- Container -->
    <div class="center gridWrap">
      <form action="/myschedule/php/update_rate.php" method="get" name="updateRate">
        <div class="container">

          <!-- total and each projects progress -->
          <?php           
            include $_SERVER["DOCUMENT_ROOT"]."/myschedule/include/latest_date.php"; 
            include $_SERVER["DOCUMENT_ROOT"]."/myschedule/include/grid_up.php";           
          ?>

          <div class="item btns">
            <button type="submit">진행률 수정</button>
            <button type="button" onclick="javascript:location.href='/myschedule/pages/input_form.php'">진행 상황
              작성</button>
            <button type="button" onclick="javascript:location.href='/myschedule/pages/sch_view.php?key=view_all'">진행 상황
              확인</button>
          </div>
        </div>
        <!-- end of container -->
      </form>
    </div>
    <!-- end of center -->

    <!-- Footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/myschedule/include/footer.php"; ?>
  </div>
  <!-- end of wrap -->

  <!-- script files load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>
  <script src="/myschedule/js/piechart.js"></script>
  <script src="/myschedule/js/custom.js"></script>
  <script src="/myschedule/js/total_avg.js"></script>
</body>

</html>