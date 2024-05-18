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
        <table class="table" id="listRek">
                <thead>
                    <tr>
                        <th>No. Rekening</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>	
                </tbody>
            </table>
        </div>
    </div>
</div>

<script> 

    $.ajax({
        type: "GET",
        url: "<?php echo site_url()?>"+"/MasterTeller/getRek",
        success: function(response){
            response = JSON.parse(response)
            setList(response);
        }
    });

    function setList(data){
        var table = [];
        for(var i = 0; i < data.length; i++){
            var row = {
                "noac"      : data[i].NOAC,
                "cnm"       : data[i].ALIASNM,
                "action"    : "<button type='button' class='btn btn-primary' onclick=document.location='<?php echo site_url('MasterTeller/detailRek/')?>"+data[i].NOAC+"'>Pilih</button>"
            };
            table.push(row);
        }
        new DataTable('#listRek', {
            data : table,
            pageLength: 10,
            responsive: !0,
            columns: [
                { "data" : "noac" },
                { "data" : "cnm" },
                { "data" : "action" },
            ]
        })
    }    
</script>