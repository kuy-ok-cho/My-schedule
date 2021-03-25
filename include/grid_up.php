<div class="item">
  <section class="graph-circle">
    <div class="circle-graph-container">
      <!-- <div class="circle-graph easyPieChart" data-percent="60">
                  <p>60%</p>
                  <canvas width="269" height="269" style="width: 150px; height: 150px;"></canvas>
                </div> -->
    </div>
    <p class="totalTit">Total Process Rates</p>
  </section>
</div>
<div class="item subPfBar">
  <div class="pfImg">
    <i class="fa fa-database"></i>
  </div>
  <div class="pfContents">
    <h3>Database Project</h3>
    <p>Progress Rate : <input type="text" value="<?=$sch_db?>" class="rateNum" name="sch_db_rate">% || Last
      Update :
      <b><?=$db_date?></b>
    </p>
    <div class="pfBarBox">
      <span class="pfBar"></span>
    </div>
  </div>
</div>
<div class="item subPfBar">
  <div class="pfImg">
    <i class="fa fa-thermometer-half"></i>
  </div>
  <div class="pfContents">
    <h3>API Project</h3>
    <p>Progress Rate : <input type="text" value="<?=$sch_api?>" class="rateNum" name="sch_api_rate">% || Last
      Update :
      <b><?=$api_date?></b>
    </p>
    <div class="pfBarBox">
      <span class="pfBar"></span>
    </div>
  </div>
</div>
<div class="item subPfBar">
  <div class="pfImg">
    <i class="fa fa-clone"></i>
  </div>
  <div class="pfContents">
    <h3>Renewal Project</h3>
    <p>Progress Rate : <input type="text" value="<?=$sch_ren?>" class="rateNum" name="sch_ren_rate">% || Last
      Update :
      <b><?=$ren_date?></b>
    </p>
    <div class="pfBarBox">
      <span class="pfBar"></span>
    </div>
  </div>
</div>
<div class="item subPfBar">
  <div class="pfImg">
    <i class="fa fa-bar-chart-o"></i>
  </div>
  <div class="pfContents">
    <h3>WEB Planning Project</h3>
    <p>Progress Rate : <input type="text" value="<?=$sch_pla?>" class="rateNum" name="sch_pla_rate">% || Last
      Update :
      <b><?=$web_date?></b>
    </p>
    <div class="pfBarBox">
      <span class="pfBar"></span>
    </div>
  </div>
</div>