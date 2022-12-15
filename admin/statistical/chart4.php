<div class="container">
                
    
    <section class="list_products">
        <div class="list-chart flex">
            <p><a href="index.php?act=list_tk">Xem bảng thống kê</a></p>
            <p><a href="index.php?act=chart_1">Xem biểu đồ thống kê</a></p>
            <p><a href="index.php?act=chart_2">Sản phẩm bán chạy nhất</a></p>
            <p><a href="index.php?act=chart_3">Sản phẩm giá cao nhất</a></p>
            <p><a href="index.php?act=chart_4">Sản phẩm giá thấp nhất</a></p>
        </div>
        <div class="list_tk">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
            <canvas id="myChart" height="100px"></canvas>
            <script>
                let myChart = document.getElementById('myChart').getContext('2d');
                // Global Options

                let massPopChart = new Chart(myChart, {
                    type:'bar', 
                    data:{
                        labels:[
                            <?php   $tongdm = count($dsthongke);
                                    $i = 1;
                                    $dauphay="";
                                    foreach ($dsthongke as $tk) {
                                        extract($tk);
                                        if($i == $tongdm){
                                            $dauphay="";
                                        }else{
                                            $dauphay=",";
                                        }
                                        echo "'".$products_name."'$dauphay ";
                                    }
                            ?>
                            ],
                        datasets:[{
                            label:'đơn giá',
                            data:[
                                <?php   
                                        $i = 1;
                                        $dauphay="";
                                        foreach ($dsthongke as $tk) {
                                            extract($tk);
                                            if($i == $tongdm){
                                                $dauphay="";
                                            }else{
                                                $dauphay=",";
                                            }
                                            echo "$money".$dauphay ;
                                            $i+=1;
                                        }
                                ?>,0,1000
                            ],
                            backgroundColor:[
                                'rgba(255, 99, 132, 0.6)',
                                'rgba(54, 162, 235, 0.6)',
                                'rgba(255, 206, 86, 0.6)',
                                'rgba(75, 192, 192, 0.6)',
                                'rgba(153, 102, 255, 0.6)'
                            ],
                                borderWidth:1,
                                borderColor:'#777',
                                hoverBorderWidth:1,
                                hoverBorderColor:'#000'
                            }]
                    },
                    options:{
                        title:{
                            display:true,
                            text:'Sản phẩm giá thấp nhất',
                            fontSize:25
                        }
                    }
                });
            </script>



        </div>
    
    </section>
</div> 
