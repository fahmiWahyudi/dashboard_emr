@extends('layouts.content_full_screen')
        @section('my_content')
            <!-- line chart section start -->
                <section id="chartjs-charts">
                    <!-- Line Chart -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Line Chart</h4>
                                    <h4 class="card-title"><button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1 waves-effect waves-light"><i class="feather icon-search"></i></button></h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pl-0">
                                        <div class="height-300">
                                            <canvas id="line-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bar Chart -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Line Chart 2</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pl-0">
                                        <div class="height-300">
                                            <canvas id="line-chart-kedua"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Horizontal Chart -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Horizontal Bar Chart</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pl-0">
                                        <div class="height-300">
                                            <canvas id="horizontal-bar"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bar Chart</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pl-0">
                                        <div class="height-300">
                                            <canvas id="bar-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Doughnut Chart -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Doughnut Chart</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="height-300">
                                            <canvas id="simple-doughnut-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Radar Chart -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Pie Chart</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="height-300">
                                            <canvas id="simple-pie-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- // line chart section end -->
            @endsection

            @section('my_script')
            <script>
            jQuery(document).ready(function() {
                var $primary = '#7367F0';
                var $success = '#28C76F';
                var $danger = '#EA5455';
                var $warning = '#FF9F43';
                var $label_color = '#1E1E1E';
                var grid_line_color = '#dae1e7';
                var scatter_grid_color = '#f3f3f3';
                var $scatter_point_light = '#D1D4DB';
                var $scatter_point_dark = '#5175E0';
                var $white = '#fff';
                var $black = '#000';

                var themeColors = [$primary, $success, $danger, $warning, $label_color];

            // Line Chart
            // ------------------------------------------

                // Chart Options
                var linechartOptions = {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        position: 'top',
                    },
                    hover: {
                        mode: 'label'
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            gridLines: {
                            color: grid_line_color,
                            },
                            scaleLabel: {
                            display: true,
                            }
                        }],
                        yAxes: [{
                            display: true,
                            gridLines: {
                            color: grid_line_color,
                            },
                            scaleLabel: {
                            display: true,
                            }
                        }]
                    },
                    title: {
                        display: true,
                        text: 'World population per region (in millions)'
                    }
                };

                // Chart Data
                var linechartData = {
                    labels: [],
                    datasets: [
                        {
                            label: "Param 1",
                            data: [],
                            borderColor: $primary,
                            fill: false
                        }, 
                        {
                            label: "Param 2",
                            data: [],                            
                            borderColor: $success,
                            fill: false
                        }, 
                        {
                            label: "Param 3",
                            data: [],                            
                            borderColor: $danger,
                            fill: false
                        }
                    ]
                };

                // Create the chart
                // var lineChart = new Chart(lineChartctx, lineChartconfig);
                //Get the context of the Chart canvas element we want to select
                var lineChartctx = $("#line-chart");
                var lineChart = new Chart(lineChartctx,{
                    type: 'line',

                    // Chart Options
                    options: linechartOptions,

                    data: linechartData
                });

                // Create the chart kedua
                // Chart Data kedua
                var linechartduaData = {
                    labels: [],
                    datasets: [
                        {
                            label: "Param 4",
                            data: [],
                            borderColor: $primary,
                            fill: false
                        }, 
                        {
                            label: "Param 5",
                            data: [],
                            borderColor: $success,
                            fill: false
                        }
                    ]
                };

                //Get the context of the Chart canvas element we want to select
                var lineChartKedua = $("#line-chart-kedua");
                var lineChart_2 = new Chart(lineChartKedua,{
                    type: 'line',

                    // Chart Options
                    options: linechartOptions,

                    data: linechartduaData
                });

            // End Line Chart
            // ------------------------------------------


            // Bar Chart
            // ------------------------------------------

                //Get the context of the Chart canvas element we want to select
                var barChartctx = $("#bar-chart");

                // Chart Options
                var barchartOptions = {
                    // Elements options apply to all of the options unless overridden in a dataset
                    // In this case, we are setting the border of each bar to be 2px wide
                    elements: {
                        rectangle: {
                            borderWidth: 2,
                            borderSkipped: 'left'
                        }
                    },
                    responsive: true,
                    maintainAspectRatio: false,
                    responsiveAnimationDuration: 500,
                    legend: { display: false },
                    scales: {
                        xAxes: [{
                                display: true,
                                gridLines: {
                                    color: grid_line_color,
                                },
                                scaleLabel: {
                                display: true,
                            }
                        }],
                        yAxes: [{
                            display: true,
                            gridLines: {
                                color: grid_line_color,
                            },
                            scaleLabel: {
                                display: true,
                            },
                            ticks: {
                                stepSize: 10,
                                min: 0
                            },
                        }],
                    },
                    title: {
                    display: true,
                    text: ''
                    },

                };

                // Chart Data
                var barchartData = {
                    labels: [],
                    datasets: [{
                        label: "",
                        data: [],
                        backgroundColor: themeColors,
                        borderColor: "transparent"
                    }]
                };

                var barChartconfig = {
                    type: 'bar',

                    // Chart Options
                    options: barchartOptions,

                    data: barchartData
                };

                // Create the chart
                var barChart = new Chart(barChartctx, barChartconfig);
            // END Bar Chart
            // ----------------------------------------------------------------

            // Horizontal Chart
            // -------------------------------------

                // Get the context of the Chart canvas element we want to select
                var horizontalChartctx = $("#horizontal-bar");

                var horizontalchartOptions = {
                // Elements options apply to all of the options unless overridden in a dataset
                // In this case, we are setting the border of each horizontal bar to be 2px wide
                elements: {
                    rectangle: {
                    borderWidth: 2,
                    borderSkipped: 'right',
                    borderSkipped: 'top',
                    }
                },
                responsive: true,
                maintainAspectRatio: false,
                responsiveAnimationDuration: 500,
                legend: {
                    display: false,
                },
                scales: {
                    xAxes: [{
                    display: true,
                        gridLines: {
                            color: grid_line_color,
                        },
                        scaleLabel: {
                            display: true,
                        },
                        ticks: {
                            stepSize: 10,
                            min: 0
                        },
                    }],
                    yAxes: [{
                    display: true,
                        gridLines: {
                            color: grid_line_color,
                        },
                        scaleLabel: {
                            display: true,
                        }
                    }]
                },
                title: {
                    display: true,
                    text: ''
                }
                };

                // Chart Data
                var horizontalchartData = {
                labels: [],
                datasets: [{
                        label: "",
                        data: [],
                        backgroundColor: themeColors,
                        borderColor: "transparent"
                    }]
                };

                var horizontalChartconfig = {
                type: 'horizontalBar',

                // Chart Options
                options: horizontalchartOptions,

                data: horizontalchartData
                };

                // Create the chart
                var horizontalChart = new Chart(horizontalChartctx, horizontalChartconfig);

            // End Horizontal Chart
            // -------------------------------------

            // Pie Chart
            // --------------------------------

                //Get the context of the Chart canvas element we want to select
                var pieChartctx = $("#simple-pie-chart");

                // Chart Options
                var piechartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                responsiveAnimationDuration: 500,
                title: {
                    display: true,
                    text: ''
                }
                };

                // Chart Data
                var piechartData = {
                labels: [],
                datasets: [{
                    label: "",
                    data: [],
                    backgroundColor: themeColors,
                }]
                };

                var pieChartconfig = {
                type: 'pie',

                // Chart Options
                options: piechartOptions,

                data: piechartData
                };

                // Create the chart
                var pieSimpleChart = new Chart(pieChartctx, pieChartconfig);

            // End Pie Chart
            // --------------------------------

            // Doughnut Chart
            // ---------------------------------------------

                //Get the context of the Chart canvas element we want to select
                var doughnutChartctx = $("#simple-doughnut-chart");

                // Chart Options
                var doughnutchartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                responsiveAnimationDuration: 500,
                title: {
                    display: true,
                    text: ''
                }
                };

                // Chart Data
                var doughnutchartData = {
                    labels: [],
                    datasets: [{
                        label: "My First dataset",
                        data: [],
                        backgroundColor: themeColors,
                    }]
                };

                var doughnutChartconfig = {
                type: 'doughnut',

                // Chart Options
                options: doughnutchartOptions,

                data: doughnutchartData
                };

                // Create the chart
                var doughnutSimpleChart = new Chart(doughnutChartctx, doughnutChartconfig);

            // Doughnut Chart
            // ---------------------------------------------


            // set value chart
            // ---------------------------------------------------------

                var set_value_line_chart_satu = function(){
                    $.ajax({
                        type:'GET',
                        url:'/data_chart/',
                        data:{no_emr:{{ $no_emr }}},
                        dataType: "json",
                        contentType: "application/json",
                        success:function(respon) {
                            $.each(respon.data, function(index, value_data){
                                lineChart.data.labels.push(value_data.date);
                                lineChart.data.datasets[0].data.push(value_data.param_1);
                                lineChart.data.datasets[1].data.push(value_data.param_2);
                                lineChart.data.datasets[2].data.push(value_data.param_3);
                            });
                            lineChart.options.title.text = 'Line Chart 1 Untuk Judul';
                            lineChart.update();
                        }
                    });

                    // lineChart.data.datasets[0].data.push(4478);
                    // lineChart.data.datasets[0].label = 'Percobaan aja';
                    // lineChart.options.title.text = 'Percobaan';

                    // lineChart.update();
                }

                var set_value_line_chart_dua = function(){
                    $.ajax({
                        type:'GET',
                        url:'/data_chart/',
                        data:{no_emr:{{ $no_emr }}},
                        dataType: "json",
                        contentType: "application/json",
                        success:function(respon) {
                            $.each(respon.data, function(index, value_data){
                                lineChart_2.data.labels.push(value_data.date);
                                lineChart_2.data.datasets[0].data.push(value_data.param_4);
                                lineChart_2.data.datasets[1].data.push(value_data.param_5);
                            });
                            lineChart_2.options.title.text = 'Line Chart 2 Untuk Judul';
                            lineChart_2.update();
                        }
                    });
                }

                var set_value_bar_chart = function(){
                    $.ajax({
                        type:'GET',
                        url:'/data_chart/',
                        data:{no_emr:{{ $no_emr }}},
                        dataType: "json",
                        contentType: "application/json",
                        success:function(respon) {
                            $.each(respon.data, function(index, value_data){
                                barChart.data.labels.push(value_data.date);
                                barChart.data.datasets[0].data.push(value_data.param_1);
                            });
                            barChart.data.datasets[0].label='Percobaan ganti label';
                            barChart.options.title.text = 'Bar Chart Untuk Judul';
                            barChart.update();
                        }
                    });
                }

                var set_value_horizontal_bar_chart = function(){
                    $.ajax({
                        type:'GET',
                        url:'/data_chart/',
                        data:{no_emr:{{ $no_emr }}},
                        dataType: "json",
                        contentType: "application/json",
                        success:function(respon) {
                            $.each(respon.data, function(index, value_data){
                                horizontalChart.data.labels.push(value_data.date);
                                horizontalChart.data.datasets[0].data.push(value_data.param_2);
                            });
                            horizontalChart.data.datasets[0].label='Percobaan ganti label';
                            horizontalChart.options.title.text = 'Horizontal Bar Chart Untuk Judul';
                            horizontalChart.update();
                        }
                    });
                }

                var set_value_pie_chart = function(){
                    $.ajax({
                        type:'GET',
                        url:'/data_chart/',
                        data:{no_emr:{{ $no_emr }}},
                        dataType: "json",
                        contentType: "application/json",
                        success:function(respon) {
                            $.each(respon.data, function(index, value_data){
                                pieSimpleChart.data.labels.push(value_data.date);
                                pieSimpleChart.data.datasets[0].data.push(value_data.param_3);
                            });
                            pieSimpleChart.data.datasets[0].label='Percobaan ganti label';
                            pieSimpleChart.options.title.text = 'Pie Chart Untuk Judul';
                            pieSimpleChart.update();
                        }
                    });
                }

                var set_value_doughnut_chart = function(){
                    $.ajax({
                        type:'GET',
                        url:'/data_chart/',
                        data:{no_emr:{{ $no_emr }}},
                        dataType: "json",
                        contentType: "application/json",
                        success:function(respon) {
                            $.each(respon.data, function(index, value_data){
                                doughnutSimpleChart.data.labels.push(value_data.date);
                                doughnutSimpleChart.data.datasets[0].data.push(value_data.param_4);
                            });
                            doughnutSimpleChart.data.datasets[0].label='Percobaan ganti label';
                            doughnutSimpleChart.options.title.text = 'Doughnut Chart Untuk Judul';
                            doughnutSimpleChart.update();
                        }
                    });
                }

                set_value_line_chart_satu();
                set_value_line_chart_dua();
                set_value_bar_chart();
                set_value_horizontal_bar_chart();
                set_value_pie_chart();
                set_value_doughnut_chart();

            // END set Value Chart
            // ----------------------------------------------------------------

                
            });
            </script>
            @endsection