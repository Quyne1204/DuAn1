<div class="container">
                
    <section class="list_products ">
        <div class="list-chart flex">
            <p><a href="index.php?act=list_tk">Xem bảng thống kê</a></p>
            <p><a href="index.php?act=chart_1">Xem biểu đồ thống kê</a></p>
            <p><a href="index.php?act=chart_2">Sản phẩm bán chạy nhất</a></p>
            <p><a href="index.php?act=chart_3">Sản phẩm giá cao nhất</a></p>
            <p><a href="index.php?act=chart_4">Sản phẩm giá thấp nhất</a></p>
        </div>
        <div class="list_tk flex">
            <h1>Biểu đồ thống kê</h1>

            <div id="piechart"></div>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

            <script type="text/javascript">
            // Load google charts
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            // Draw the chart and set the chart values
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Danh Mục', 'Số lượng sản phẩm'],
                    <?php 
                        $tongdm = count($dsthongke);
                        $i = 1;
                        $dauphay="";
                        foreach ($dsthongke as $tk) {
                            extract($tk);
                            if($i == $tongdm){
                                $dauphay="";
                            }else{
                                $dauphay=",";
                            }
                            echo " ['".$name_dm."', ".$count_sp."] ".$dauphay;
                            $i+=1;

                        }
                    ?>
                ]);

                // Optional; add a title and set the width and height of the chart
                var options = {'title':'Danh mục', 'width':500, 'height':400};

                // Display the chart inside the <div> element with id="piechart"
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
            }
            </script>
        </div>
        
        
    
    </section>
</div> 
