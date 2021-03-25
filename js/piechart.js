$(function() {
  $(window).ajaxComplete(function(){
    let pieSize = 250;
    let liWidth = $(window).width();
    let clear;

    if(liWidth > 400){
      pieSize = 250;
    } else {
      pieSize = 180;
    }

    //console.log(pieSize);

    $('.circle-graph').easyPieChart({
      scaleColor: false,
      lineWidth: 40,
      lineCap: 'butt',
      barColor: 'indigo',
      trackColor: '#cccccc' ,
      size: pieSize,
      animate: 1200
    });

    $(window).resize(function(){
      let liWidth = $(window).width();

      if(liWidth > 401){
        pieSize = 250;
      } else {
        pieSize = 180;
      }

      //clearTimeout(clear);

      clear = setTimeout(function(){
        $('.circle-graph').removeData('easyPieChart').find('canvas').remove();
        $('.circle-graph').easyPieChart({
          scaleColor: false,
          lineWidth: 40,
          lineCap: 'butt',
          barColor: 'indigo',
          trackColor: '#cccccc' ,
          size: pieSize,
          animate: 1
        });
      }, 150);
    });
  });
});