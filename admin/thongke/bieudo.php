<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="../View/src/css/style.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<style>
  .fill{
    color: green;
  }
</style>
<body>
<div class="bieudo_css"  id="myChart" style=""></div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['Danh Mục', 'Số Lượng Sản Phẩm'],
    <?php
    $tongdm = count($listthongke);
    $i = 1;
         foreach ($listthongke as $thongke){
            extract($thongke);
            if ($i == $tongdm) $dauphay=""; else $dauphay=",";
            echo "['".$thongke['tendm']."',".$thongke['countsp']."]".$dauphay;
            $i+=1;
         }
    ?>
]);

var options = {
  title:'Biểu Đồ Thống Kê Sản Phẩm'
};

var chart = new google.visualization.BarChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>
</body>
</html> 