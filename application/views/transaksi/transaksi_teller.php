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
    <?php if ($this->session->flashdata('success') != "") { ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success');?>
        </div>
    <?php }?>
    <form method="POST" id="myForm"  action="<?= site_url('/TransTeller/save_trans_teller') ?>">
        <div class="card">
            <div class="card-header">
                <h5>Basic Component</h5>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">No. Referensi</label>
                    <div class="col-4">
                        <input type="text" class="form-control" name="noref" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Transaksi</label>
                    <div class="col-1">
                        <input type="text" class="form-control" name="trncode" readonly>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" name="tnm" readonly>
                    </div>
                    <div class="col-1">
                        <button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#exampleModalLong">find</button>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-4">
                        <label>No Referensi</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="noref" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <label>Kode Transaksi</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="trncode" readonly>
                        </div>  
                    </div>
                    <div class="col-3">
                        <p style="padding-top:13px"></p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="tnm" readonly>
                        </div>
                    </div>
                    <div class="col-2">
                        <p style="padding-top:13px"></p>
                        <button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#exampleModalLong">find</button>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="alert" id="alert" style="display: none;" role="alert"></div>
        <div class="card" id="detail" style="display: none;">
            <div class="card-header">
                <h5>Detail</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label>Ledger</label>
                            <input type = "hidden" name="hidden_slno_debet">
                            <input type="text" name="slno_debet" class="form-control" onclick="$('#modalSlnoDebet').modal('show')">
                        </div>  
                    </div>    
                    <div class="col-sm">
                        <div class="form-group">
                            <label>Rekening</label>
                            <input type = "hidden" name="hidden_sldRek_debet">
                            <input type="text" name="rek_debet" class="form-control" onclick="$('#modalRekDebet').modal('show')">
                        </div>  
                    </div>                 
                    <div class="col-1">
                        <div class="form-group">
                            <label>DOC</label>
                            <input type="text" name="doc_debet" class="form-control" value = "D" readonly>
                        </div>  
                    </div>     
                    <div class="col-sm">
                        <div class="form-group">
                            <label>Nilai</label>
                            <input type="number" name="nilai_debet" class="form-control" >
                        </div>  
                    </div>     
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" name="ket_debet" class="form-control">
                        </div>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <input type = "hidden" name="hidden_slno_kredit">
                            <input type="text" name="slno_kredit" class="form-control" onclick="$('#modalSlnoKredit').modal('show')">
                        </div>  
                    </div>    
                    <div class="col-sm">
                        <div class="form-group">
                            <input type = "hidden" name="hidden_sldRek_kredit">
                            <input type="text" name="rek_kredit" class="form-control" onclick="$('#modalRekKredit').modal('show')">
                        </div>  
                    </div>                 
                    <div class="col-1">
                        <div class="form-group">
                            <input type="text" name="doc_kredit" class="form-control" value = "C" readonly>
                        </div>  
                    </div>     
                    <div class="col-sm">
                        <div class="form-group">
                            <input type="number" name="nilai_kredit" class="form-control" >
                        </div>  
                    </div>     
                </div> 
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" name="ket_kredit" class="form-control">
                        </div>  
                    </div>
                </div>   
            </div>
            <div class="card-footer text-right">
                <div class="row">
                    <div class="col-sm">
                        <!-- <button type="button" class="btn btn-primary">Save</button> -->
                        <input type="button" onclick="save()" class="btn btn-primary" value="save">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<div id="exampleModalLong" class="modal fade bd-example-modal-lg show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-modal="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="exampleModalLong" >Large Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <table id="list-permohonan" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Transaksi</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="modalRekDebet" class="modal fade bd-example-modal-lg show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-modal="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="exampleModalLong" >Large Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <table id="list-rek-debet" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Rekening</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="modalRekKredit" class="modal fade bd-example-modal-lg show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-modal="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="exampleModalLong" >Large Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <table id="list-rek-kredit" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Rekening</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="modalSlnoDebet" class="modal fade bd-example-modal-lg show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-modal="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="exampleModalLong" >Large Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <table id="list-slno-debet" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Ledger</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="modalSlnoKredit" class="modal fade bd-example-modal-lg show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-modal="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="exampleModalLong" >Large Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <table id="list-slno-kredit" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Ledger</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $( document ).ready(function() {
        $.ajax({
            type: "GET",
            url: "<?= site_url('/TransTeller/gettcd'); ?>",
            success: function(response){
                response = JSON.parse(response)
                setDataTable(response);
            }
        });
    });

    function setDataTable(data){
        var table = [];
        for(var i = 0; i < data.length; i++){
            var row = {
                "recordId":i+1,
                "trncode":data[i].TRN_CODE,
                "keterangan":data[i].TNM,
                "action" : "<button type='button' class='btn btn-primary' onclick=setAllFill('"+data[i].TRN_CODE+"','"+data[i].TNM.replaceAll(" ","_")+"','"+data[i].DAC+"','"+data[i].CAC+"','"+data[i].DAT+"','"+data[i].CAT+"')>Pilih</button>"
            };
            table.push(row);
        }

        new DataTable('#list-permohonan', {
            data : table,
            pageLength: 10,
            responsive: !0,
            columns: [
                { "data" : "recordId" },
                { "data" : "trncode" },
                { "data" : "keterangan" },
                { "data" : "action" },
            ]
        })
    }

    $( document ).ready(function() {
        $.ajax({
            type: "GET",
            url: "<?= site_url('/TransTeller/getRek'); ?>",
            success: function(response){
                response = JSON.parse(response)
                setDataRekDeb(response);
                setDataRekKre(response);
            }
        });
    });

    function setDataRekDeb(data){
        var table = [];
        for(var i = 0; i < data.length; i++){
            var row = {
                "recordId":i+1,
                "noac":data[i].NOAC,
                "keterangan":data[i].ALIASNM,
                "action" : "<button type='button' class='btn btn-primary' onclick=setRek('"+data[i].NOAC+"','"+data[i].ALIASNM.replaceAll(" ","_")+"','D','"+data[i].DBGL+"','"+data[i].SLDAKHIR+"')>Pilih</button>"
            };
            table.push(row);
        }

        new DataTable('#list-rek-debet', {
            data : table,
            pageLength: 10,
            responsive: !0,
            columns: [
                { "data" : "recordId" },
                { "data" : "noac" },
                { "data" : "keterangan" },
                { "data" : "action" },
            ]
        })
    }

    function setDataRekKre(data){
        var table = [];
        for(var i = 0; i < data.length; i++){
            var row = {
                "recordId":i+1,
                "noac":data[i].NOAC,
                "keterangan":data[i].ALIASNM,
                "action" : "<button type='button' class='btn btn-primary' onclick=setRek('"+data[i].NOAC+"','"+data[i].ALIASNM.replaceAll(" ","_")+"','C','"+data[i].CRGL+"','"+data[i].SLDAKHIR+"')>Pilih</button>"
            };
            table.push(row);
        }

        new DataTable('#list-rek-kredit', {
            data : table,
            pageLength: 10,
            responsive: !0,
            columns: [
                { "data" : "recordId" },
                { "data" : "noac" },
                { "data" : "keterangan" },
                { "data" : "action" },
            ]
        })
    }

    function setRek(noac,aliasnm,doc,gl,saldo){
        if (doc == "D") {
            $("[name=rek_debet]").val(noac);
            $("[name=slno_debet]").val(gl);
            $("[name=hidden_slno_debet]").val(gl); 
            $("[name=hidden_sldRek_debet]").val(saldo); 
            $('#modalRekDebet').modal('hide');
        }else if (doc == "C") {
            $("[name=rek_kredit]").val(noac);
            $("[name=slno_kredit]").val(gl);
            $("[name=hidden_slno_kredit]").val(gl);
            $("[name=hidden_sldRek_kredit]").val(saldo);
            $('#modalRekKredit').modal('hide');
        }
        
    }

    $( document ).ready(function() {
        $.ajax({
            type: "GET",
            url: "<?= site_url('/TransTeller/getSlno'); ?>",
            success: function(response){
                response = JSON.parse(response)
                setDataSlnoDeb(response);
                setDataSlnoKre(response);
            }
        });
    });

    function setDataSlnoDeb(data){
        var table = [];
        for(var i = 0; i < data.length; i++){
            var row = {
                "recordId":i+1,
                "slno":data[i].SLNO,
                "keterangan":data[i].DESCRIPTION,
                "action" : "<button type='button' class='btn btn-primary' onclick=setSlno('"+data[i].SLNO+"','"+data[i].DESCRIPTION.replaceAll(" ","_")+"','D')>Pilih</button>"
            };
            table.push(row);
        }

        new DataTable('#list-slno-debet', {
            data : table,
            pageLength: 10,
            responsive: !0,
            columns: [
                { "data" : "recordId" },
                { "data" : "slno" },
                { "data" : "keterangan" },
                { "data" : "action" },
            ]
        })
    }

    function setDataSlnoKre(data){
        var table = [];
        for(var i = 0; i < data.length; i++){
            var row = {
                "recordId":i+1,
                "slno":data[i].SLNO,
                "keterangan":data[i].DESCRIPTION,
                "action" : "<button type='button' class='btn btn-primary' onclick=setSlno('"+data[i].SLNO+"','"+data[i].DESCRIPTION.replaceAll(" ","_")+"','C')>Pilih</button>"
            };
            table.push(row);
        }

        new DataTable('#list-slno-kredit', {
            data : table,
            pageLength: 10,
            responsive: !0,
            columns: [
                { "data" : "recordId" },
                { "data" : "slno" },
                { "data" : "keterangan" },
                { "data" : "action" },
            ]
        })
    }

    function setSlno(slno,ket,doc){
        if (doc == "D") {
            $("[name=slno_debet]").val(slno);
            $("[name=hidden_slno_debet]").val(slno); 
            $('#modalSlnoDebet').modal('hide');
        }else if (doc == "C") {
            $("[name=slno_kredit]").val(slno);
            $("[name=hidden_slno_kredit]").val(slno); 
            $('#modalSlnoKredit').modal('hide');
        }
        
    }

    function resetAll(){
        $("[name=slno_debet]").val("");
        $("[name=slno_kredit]").val("");
        $("[name=rek_debet]").val("");
        $("[name=rek_kredit]").val("");
        $("[name=nilai_debet]").val("");
        $("[name=nilai_kredit]").val("");
        $("[name=hidden_slno_debet]").val(""); 
        $("[name=hidden_slno_kredit]").val(""); 
        $("[name=hidden_sldRek_debet]").val(""); 
        $("[name=hidden_sldRek_kredit]").val(""); 
    }



    function setAllFill(trncode,tnm,dac,cac,dat,cat){
        resetAll();
        $("[name=trncode]").val(trncode);
        $("[name=tnm]").val(tnm.replaceAll("_"," "));
        if (dac == "null") {dac = ''}
        if (cac == "null") {cac = ''}
        $("[name=rek_debet]").attr('disabled', false);
        $("[name=rek_kredit]").attr('disabled', false);
        $("[name=slno_debet]").attr('disabled', false);
        $("[name=slno_kredit]").attr('disabled', false);
        if (dat != "R") { $("[name=rek_debet]").attr('disabled', true) }
        if (cat != "R") { $("[name=rek_kredit]").attr('disabled', true) }
        if (dat != "G") { $("[name=slno_debet]").attr('disabled', true) }
        if (cat != "G") { $("[name=slno_kredit]").attr('disabled', true) }
        $("[name=slno_debet]").val(dac);
        $("[name=slno_kredit]").val(cac);
        if (dat == "C") { $("[name=slno_debet]").val("111001022") }
        if (cat == "C") { $("[name=slno_kredit]").val("111001022") }
        $("[name=hidden_slno_debet]").val($("[name=slno_debet]").val()); 
        $("[name=hidden_slno_kredit]").val($("[name=slno_kredit]").val()); 
        $('#exampleModalLong').modal('hide');
        $("#detail").show();
    }
    function formatNumber(numberString) {
        var commaIndex = numberString.indexOf(',');
        var int = numberString;
        var frac = '';
        if (~commaIndex) {
            int = numberString.slice(0, commaIndex);
            frac = ',' + numberString.slice(commaIndex + 1);
        }
        var firstSpanLength = int.length % 3;
        var firstSpan = int.slice(0, firstSpanLength);
        var result = [];
        if (firstSpan) {
            result.push(firstSpan);
        }
        int = int.slice(firstSpanLength);
        var restSpans = int.match(/\d{3}/g);
        if (restSpans) {
            result = result.concat(restSpans);
            return result.join(',') + frac;
        }
        return firstSpan + frac;
        
    }

    $("[name=nilai_debet]").keyup(function(){ 
        $("[name=nilai_kredit]").val(($(this).val()));
        $(this).val(format($(this).val()));
    });
    $("[name=nilai_kredit]").keyup(function(){ 
        $("[name=nilai_debet]").val(($(this).val())); 
        $(this).val(format($(this).val()));
    });
    $("[name=ket_debet]").keyup(function(){ 
        $("[name=ket_kredit]").val($(this).val());
        $(this).val($(this).val());
    });
    $("[name=ket_kredit]").keyup(function(){ 
        $("[name=ket_debet]").val($(this).val()); 
        $(this).val($(this).val());
    });

    // var format = function(num){
    //   var str = num.toString().replace("", ""), parts = false, output = [], i = 1, formatted = null;
    //   if(str.indexOf(".") > 0) {
    //     parts = str.split(".");
    //     str = parts[0];
    //   }
    //   str = str.split("").reverse();
    //   for(var j = 0, len = str.length; j < len; j++) {
    //     if(str[j] != ",") {
    //       output.push(str[j]);
    //       if(i%3 == 0 && j < (len - 1)) {
    //         output.push(",");
    //       }
    //       i++;
    //     }
    //   }
    //   formatted = output.reverse().join("");
    //   return("" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
    // };

    $("[name=slno_debet]").change(function(){ 
        $("[name=hidden_slno_debet]").val($(this).val()); 
    });
    function save() {
        if ($("[name=rek_debet]").val() == "") {
            document.getElementById("myForm").submit();
        } else {
            hasil = $("[name=hidden_sldRek_debet]").val() - $("[name=nilai_debet]").val();
            if (hasil >= 0) {
                document.getElementById("myForm").submit();
            } else {
                $("#alert").html("Saldo Rekening Debet Kurang ...").addClass("alert-danger").show();            
            }
        }
    }

    
    
</script>