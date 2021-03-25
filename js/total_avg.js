$(function(){

  $.ajax({
    url : '/myschedule/php/read_json.php',
    success : function(result){
      
      let obj=JSON.parse(result);
      console.log(obj);
      let apiRate = Number(obj[0].api_rate);
      let dbRate = Number(obj[0].db_rate);
      let plaRate = Number(obj[0].pla_rate);
      let renRate = Number(obj[0].ren_rate);

      let schAvg = (apiRate * 0.2) + (dbRate * 0.4) + (plaRate * 0.3) + (renRate * 0.1);

      $(".circle-graph-container").html(`<div class="circle-graph easyPieChart" data-percent="${schAvg}">
        <p>${schAvg}%</p>
      </div>`);
      }
  });

});

