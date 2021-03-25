<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Input Board</title>

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
      $detail_num=$_GET['num'];

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
      <div class="inputContainer">

        <!-- total and each projects progress -->
        <?php
          include $_SERVER["DOCUMENT_ROOT"]."/myschedule/include/latest_date.php";
          include $_SERVER["DOCUMENT_ROOT"]."/myschedule/include/grid_up.php"; 
        ?>

        <div class="item viewBox">

          <?php
            include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/db_conn.php";
            $sql = "select * from sch_txt where sch_txt_num = $detail_num";
            $board_result = mysqli_query($dbConn, $sql);

            while($board_row = mysqli_fetch_array($board_result)){
              $bo_num = $board_row['sch_txt_num'];
              $bo_cate = $board_row['sch_txt_cate'];
              $bo_tit = $board_row['sch_txt_tit'];
              $bo_reg = $board_row['sch_txt_reg'];
              $bo_con = $board_row['sch_txt_con'];
            ?>
          <form action="/myschedule/php/detail_update.php?num=<?=$bo_num?>" method="post">
            <div class="detailTit">
              <h2><?=$bo_tit?></h2>
              <input type="text" value="<?=$bo_tit?>" class="hiddenTit" name="updateTit">
            </div>

            <ul class="viewTable">
              <li class="viewTitle">
                <span class="boNum">번호</span>
                <span class="boCate">종류</span>
                <span class="boCon">내용</span>
                <span class="boReg">작성일</span>
              </li>
              <li class="viewList">
                <span class="boNum"><?=$bo_num?></span>
                <span class="boCate"><?=$bo_cate?></span>
                <span class="boCon">
                  <em><?=$bo_con?></em>
                  <textarea class="hiddenCon" name="updateCon"><?=$bo_con?></textarea>
                </span>
                <span class="boReg"><?=$bo_reg?></span>
              </li>
              <?php
            }
            ?>
            </ul>
            <div class="subBtn">
              <button type="submit">수정 사항 입력</button>
            </div>
          </form>
        </div>

        <div class="item btns">
          <button type="button" class="updateConBtn">진행 상황 수정</button>
          <button type="button" onclick="confirmDel()">진행 상황 삭제</button>
          <a href="/myschedule/pages/sch_view.php?key=view_all" class="schInput">진행 상황 확인</a>
        </div>

      </div>
      <!-- end of container -->
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
  <script>
  function confirmDel() {
    let isCheck = confirm('정말로 삭제 하시겠습니까?');
    if (isCheck == false) {
      return false;
    } else {
      location.href = '/myschedule/php/detail_delete.php?num=<?=$bo_num?>';
    }
  }
  </script>
</body>

</html>