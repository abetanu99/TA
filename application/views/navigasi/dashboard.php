<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Dashboard Analytics</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- [ breadcrumb ] end -->
<div class="row">
    <div class="col-sm">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-purple" id="rek"><?= $rek ?></h4>
                        <h6 class="text-muted m-b-0">Rekening</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="fa fa-user-circle f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-purple">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">% change</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="fa fa-line-chart text-white f-16"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-sm">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-green" id="trans"><?= $totTrans ?></h4>
                        <h6 class="text-muted m-b-0">Transaksi</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="fa fa-file-text-o f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-green">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">% change</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="fa fa-line-chart text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-red" id="tppu"><?= $totKyc ?></h4>
                        <h6 class="text-muted m-b-0">Indikasi TPPU</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="fa fa-calendar-check-o f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-red">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">% change</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="fa fa-line-chart text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5>Pie Charts</h5>
            </div>
            <div class="card-body">
                <div id="pie-chart-1" style="width:100%"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5>Basic line chart</h5>
            </div>
            <div class="card-body">
                <div id="line-chart-1"></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-6 col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Projects</h5>
                <div class="card-header-right">
                    <div class="btn-group card-option">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather icon-more-horizontal"></i>
                        </button>
                        <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(12px, 28px, 0px);">
                            <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                            <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                            <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                            <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>
                                    <div class="chk-option">
                                        <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label"></span>
                                        </label>
                                    </div>
                                    Assigned
                                </th>
                                <th>Name</th>
                                <th>Due Date</th>
                                <th class="text-right">Priority</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="chk-option">
                                        <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label"></span>
                                        </label>
                                    </div>
                                    <div class="d-inline-block align-middle">
                                        <!-- <img src="assets/images/user/avatar-4.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15"> -->
                                        <div class="d-inline-block">
                                            <h6>John Deo</h6>
                                            <p class="text-muted m-b-0">Graphics Designer</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Able Pro</td>
                                <td>Jun, 26</td>
                                <td class="text-right"><label class="badge badge-light-danger">Low</label></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="chk-option">
                                        <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label"></span>
                                        </label>
                                    </div>
                                    <div class="d-inline-block align-middle">
                                        <!-- <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15"> -->
                                        <div class="d-inline-block">
                                            <h6>Jenifer Vintage</h6>
                                            <p class="text-muted m-b-0">Web Designer</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Mashable</td>
                                <td>March, 31</td>
                                <td class="text-right"><label class="badge badge-light-primary">high</label></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="chk-option">
                                        <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label"></span>
                                        </label>
                                    </div>
                                    <div class="d-inline-block align-middle">
                                        <!-- <img src="assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15"> -->
                                        <div class="d-inline-block">
                                            <h6>William Jem</h6>
                                            <p class="text-muted m-b-0">Developer</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Flatable</td>
                                <td>Aug, 02</td>
                                <td class="text-right"><label class="badge badge-light-success">medium</label></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="chk-option">
                                        <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label"></span>
                                        </label>
                                    </div>
                                    <div class="d-inline-block align-middle">
                                        <!-- <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15"> -->
                                        <div class="d-inline-block">
                                            <h6>David Jones</h6>
                                            <p class="text-muted m-b-0">Developer</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Guruable</td>
                                <td>Sep, 22</td>
                                <td class="text-right"><label class="badge badge-light-primary">high</label></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<script src="<?=base_url('assets')?>/assets/js/vendor-all.min.js"></script>
<script src="<?=base_url('assets')?>/assets/js/plugins/bootstrap.min.js"></script>
<script src="<?=base_url('assets')?>/assets/js/pcoded.min.js"></script>

<script src="<?=base_url('assets')?>/assets/js/plugins/apexcharts.min.js"></script>
<script src="<?=base_url('assets')?>/assets/js/pages/chart-apex.js"></script>

<link rel="stylesheet" type="text/css" href="<?=base_url('assets')?>/assets/icon/font-awesome/css/font-awesome.min.css">

<script>

var arrayFromPHP = <?php print_r($arTotal)?>;
    console.log(arrayFromPHP);
    $({ Counter: 0 }).animate({
        Counter: $('#rek').text()}, {
        duration: 1000,
        easing: 'swing',
        step: function() {
            $('#rek').text(Math.ceil(this.Counter));
        }
    });
    $({ Counter: 0 }).animate({
        Counter: $('#trans').text()}, {
        duration: 1000,
        easing: 'swing',
        step: function() {
            $('#trans').text(Math.ceil(this.Counter));
        }
    });
    $({ Counter: 0 }).animate({
        Counter: $('#tppu').text()}, {
        duration: 1000,
        easing: 'swing',
        step: function() {
            $('#tppu').text(Math.ceil(this.Counter));
        }
    });

$(document).ready(function() {
    setTimeout(function() {
        $(function() {
            var options = {
                chart: {
                    height: 300,
                    type: 'line',
                    zoom: {
                        enabled: false
                    }
                },
                dataLabels: {
                    enabled: false,
                    width: 2,
                },
                stroke: {
                    curve: 'straight',
                },
                colors: ["#1abc9c"],
                series: [{
                    name: "Desktops",
                    data: <?php print_r($arTotal)?>
                }],
                title: {
                    text: 'Product Trends by Month',
                    align: 'left'
                },
                grid: {
                    row: {
                        colors: ['#f3f6ff', 'transparent'], // takes an array which will be repeated on columns
                        opacity: 0.5
                    },
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Okt' , 'Nov' , 'Des'],
                }
            }

            var chart = new ApexCharts(
                document.querySelector("#line-chart-1"),
                options
            );
            chart.render();
        });

        // $(function() {
        //     var options = {
        //         chart: {
        //             height: 350,
        //             type: 'area',
        //         },
        //         dataLabels: {
        //             enabled: false
        //         },
        //         stroke: {
        //             curve: 'smooth'
        //         },
        //         colors: ["#f1c40f", "#e74c3c"],
        //         series: [{
        //             name: 'series1',
        //             data: [31, 40, 28, 51, 42, 109, 100]
        //         }, {
        //             name: 'series2',
        //             data: [11, 32, 45, 32, 34, 52, 41]
        //         }],

        //         xaxis: {
        //             type: 'datetime',
        //             categories: ["2018-09-19T00:00:00", "2018-09-19T01:30:00", "2018-09-19T02:30:00", "2018-09-19T03:30:00", "2018-09-19T04:30:00", "2018-09-19T05:30:00", "2018-09-19T06:30:00"],
        //         },
        //         tooltip: {
        //             x: {
        //                 format: 'dd/MM/yy HH:mm'
        //             },
        //         }
        //     }

        //     var chart = new ApexCharts(
        //         document.querySelector("#area-chart-1"),
        //         options
        //     );

        //     chart.render();
        // });
        
		
        // $(function() {
        //     var options = {
        //         chart: {
        //             height: 350,
        //             type: 'bar',
        //         },
        //         plotOptions: {
        //             bar: {
        //                 horizontal: false,
        //                 columnWidth: '55%',
        //                 endingShape: 'rounded'
        //             },
        //         },
        //         dataLabels: {
        //             enabled: false
        //         },
        //         colors: ["#0e9e4a", "#1abc9c", "#e74c3c"],
        //         stroke: {
        //             show: true,
        //             width: 2,
        //             colors: ['transparent']
        //         },
        //         series: [{
        //             name: 'Net Profit',
        //             data: [44, 55, 57, 56, 61, 58, 63]
        //         }, {
        //             name: 'Revenue',
        //             data: [76, 85, 101, 98, 87, 105, 91]
        //         }, {
        //             name: 'Free Cash Flow',
        //             data: [35, 41, 36, 26, 45, 48, 52]
        //         }],
        //         xaxis: {
        //             categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
        //         },
        //         yaxis: {
        //             title: {
        //                 text: '$ (thousands)'
        //             }
        //         },
        //         fill: {
        //             opacity: 1

        //         },
        //         tooltip: {
        //             y: {
        //                 formatter: function(val) {
        //                     return "$ " + val + " thousands"
        //                 }
        //             }
        //         }
        //     }
        //     var chart = new ApexCharts(
        //         document.querySelector("#bar-chart-1"),
        //         options
        //     );
        //     chart.render();
        // });
        // $(function() {
        //     var options = {
        //         chart: {
        //             height: 350,
        //             type: 'bar',
        //             stacked: true,
        //             toolbar: {
        //                 show: true
        //             },
        //             zoom: {
        //                 enabled: true
        //             }
        //         },
        //         colors: ["#1abc9c", "#0e9e4a", "#f1c40f", "#e74c3c"],
        //         responsive: [{
        //             breakpoint: 480,
        //             options: {
        //                 legend: {
        //                     position: 'bottom',
        //                     offsetX: -10,
        //                     offsetY: 0
        //                 }
        //             }
        //         }],
        //         plotOptions: {
        //             bar: {
        //                 horizontal: false,
        //             },
        //         },
        //         series: [{
        //             name: 'PRODUCT A',
        //             data: [44, 55, 41, 67, 22, 43]
        //         }, {
        //             name: 'PRODUCT B',
        //             data: [13, 23, 20, 8, 13, 27]
        //         }, {
        //             name: 'PRODUCT C',
        //             data: [11, 17, 15, 15, 21, 14]
        //         }, {
        //             name: 'PRODUCT D',
        //             data: [21, 7, 25, 13, 22, 8]
        //         }],
        //         xaxis: {
        //             type: 'datetime',
        //             categories: ['01/01/2011 GMT', '01/02/2011 GMT', '01/03/2011 GMT', '01/04/2011 GMT', '01/05/2011 GMT', '01/06/2011 GMT'],
        //         },
        //         legend: {
        //             position: 'right',
        //             offsetY: 40
        //         },
        //         fill: {
        //             opacity: 1
        //         },
        //     }
        //     var chart = new ApexCharts(
        //         document.querySelector("#bar-chart-2"),
        //         options
        //     );
        //     chart.render();
        // });
            console.log(<?php print_r($pieKet) ?>);
            console.log(<?php print_r($nilaiKet) ?>);
		$(function() {
            var options = {
                chart: {
                    height: 320,
                    type: 'pie',
                },
                labels: <?php print_r($pieKet) ?> ,
                series: <?php print_r($nilaiKet) ?>,
                colors: ["#1abc9c", "#0e9e4a",  "#f1c40f", "#e74c3c"],
                legend: {
                    show: true,
                    position: 'bottom',
                },
                dataLabels: {
                    enabled: true,
                    dropShadow: {
                        enabled: false,
                    }
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            }
            var chart = new ApexCharts(
                document.querySelector("#pie-chart-1"),
                options
            );
            chart.render();
        });
        // $(function() {
        //     var options = {
        //         chart: {
        //             height: 320,
        //             type: 'donut',
        //         },
        //         series: [44, 55, 41, 17, 15],
        //         colors: ["#1abc9c", "#0e9e4a", "#00acc1", "#f1c40f", "#e74c3c"],
        //         legend: {
        //             show: true,
        //             position: 'bottom',
        //         },
        //         plotOptions: {
        //             pie: {
        //                 donut: {
        //                     labels: {
        //                         show: true,
        //                         name: {
        //                             show: true
        //                         },
        //                         value: {
        //                             show: true
        //                         }
        //                     }
        //                 }
        //             }
        //         },
        //         dataLabels: {
        //             enabled: true,
        //             dropShadow: {
        //                 enabled: false,
        //             }
        //         },
        //         responsive: [{
        //             breakpoint: 480,
        //             options: {          
        //                 legend: {
        //                     position: 'bottom'
        //                 }
        //             }
        //         }]
        //     }
        //     var chart = new ApexCharts(
        //         document.querySelector("#pie-chart-2"),
        //         options
        //     );
        //     chart.render();
        // });
    
	}, 700);
});

</script>