<?php
// Assume we have fetched data from a database or some other source
$data = [10, 41, 35, 51, 49, 62, 69, 91, 148];

// Convert the PHP array to JSON
$jsonData = json_encode($data);
?>

<link href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css" rel="stylesheet">
<script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js" type="text/javascript"></script>
<!-- Apex charts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
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
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Basic Component</h5>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">TANGGAL</label>
                <div class="col-sm">
                    <input type="date" class="form-control" name="tanggal1">
                </div>
                <label for="inputEmail3" class="col-form-label">S/D</label>
                <div class="col-sm">
                    <input type="date" class="form-control" name="tanggal2">
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            <div class="row">
                <div class="col-sm">
                    <!-- <button type="button" class="btn btn-primary">Save</button> -->
                    <button type="button" class="btn  btn-primary" id="retrive" >Retrive</button>
                </div>
            </div> 
        </div>

    </div>
	<div class="card">
        <div class="card-header">
            <h5>Charts</h5>
        </div>
        <div class="card-body">
			<div id="chart"></div>
				<script>
					document.addEventListener('DOMContentLoaded', function () {
						var phpData = <?php echo $jsonData; ?>;
						
						var options = {
							series: [{
								name: 'XYZ MOTORS',
								data: dates
							}],
							chart: {
								type: 'area',
								stacked: false,
								height: 350,
							zoom: {
								type: 'x',
								enabled: true,
								autoScaleYaxis: true
							},
							toolbar: {
								autoSelected: 'zoom'
							}
							},
							dataLabels: {
								enabled: false
							},
							markers: {
								size: 0,
							},
							title: {
								text: 'Stock Price Movement',
								align: 'left'
							},
							fill: {
								type: 'gradient',
								gradient: {
									shadeIntensity: 1,
									inverseColors: false,
									opacityFrom: 0.5,
									opacityTo: 0,
									stops: [0, 90, 100]
							},
							},
							yaxis: {
							labels: {
								formatter: function (val) {
								return (val / 1000000).toFixed(0);
								},
							},
							title: {
								text: 'Price'
							},
							},
							xaxis: {
								type: 'datetime',
							},
							tooltip: {
								shared: false,
							y: {
								formatter: function (val) {
								return (val / 1000000).toFixed(0)
								}
							}
						}
					};
						// var options = {
						// 	chart: {
						// 		type: 'line',
						// 		height: 350
						// 	},
						// 	series: [{	
						// 		name: 'Example Data',
						// 		data: phpData
						// 	}],
						// 	xaxis: {
						// 		categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep']
						// 	},
						// 	toolbar: {
            			// 		autoSelected: 'zoom'
          				// 	},
						// 	title: {
						// 		text: 'Laporan KYC',
						// 		align: 'left'
						// 	}
						// };

						var chart = new ApexCharts(document.querySelector("#chart"), options);
						chart.render();
					});
				</script>
			</div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5>Basic Component</h5>
        </div>
        <div class="card-body">
            <table class="table " style="width:100%" id="laporan_kyc">
                <thead>
                    <tr>
                        <th>No. Referensi</th>
                        <th>No. Rekening</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Nilai</th>
                        <th>% lebih</th>
                        <th>Kategori</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>	
                </tbody>
            </table>
        </div>
    </div>
</div>

<script> 

    $("#retrive").click(function(){
        console.log($("[name=tanggal1]").val());
        console.log($("[name=tanggal2]").val());
        $.ajax({
            type: "GET",
            url: "<?php echo site_url()?>"+"/LaporanTeller/laporanKyc?tgl1="+$("[name=tanggal1]").val()+"&tgl2="+$("[name=tanggal2]").val(),
            success: function(response){
                response = JSON.parse(response)
                setLaporan(response);
            }
        });
    });
    // console.log($("[name=tanggal1]").val());
    //     console.log($("[name=tanggal2]").val());
    //     $.ajax({
    //         type: "GET",
    //         url: "<?php //echo site_url()?>"+"/LaporanTeller/laporanKyc?tgl1="+$("[name=tanggal1]").val()+"&tgl2="+$("[name=tanggal2]").val(),
    //         success: function(response){
    //             response = JSON.parse(response)
    //             setLaporan(response);
    //         }
    //     });

    function setLaporan(data){
        var table = [];
        for(var i = 0; i < data.length; i++){
            var row = {
                "noref" : data[i].NOREF,
                "noac"  : data[i].NOAC,
                "tgval" : data[i].TANGGAL,
                "cnm"   : data[i].ALIASNM,
                "nilai" : data[i].NILAI,
                "persentase"   : data[i].PERSENTASE,
                "kategori" : data[i].KET_KATEGORI,
                "ket"   : data[i].KET,
                
            };
            table.push(row);
        }
        let datatable = new DataTable('#laporan_kyc');
        datatable.destroy();
        new DataTable('#laporan_kyc', {
            data : table,
            scrollX: true,
            retrieve: true,
            // paging: false,
            responsive: true,
            columns: [
                { "data" : "noref" },
                { "data" : "noac" },
                { "data" : "tgval" },
                { "data" : "cnm" },
                { "data" : "nilai" },
                { "data" : "persentase" },
                { "data" : "kategori" },
                { "data" : "ket" },
            ],
            layout: {
                topStart: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
        })
    }
    
</script>
