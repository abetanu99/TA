<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Master Rekening</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">Master Rekening</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- [ breadcrumb ] end -->
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Master Rekening</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-sm">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">No. Rekening</label>
                                <input type="text" class="form-control" value="<?= $rek[0]['NOAC']?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tgl. Input</label>
                                <input type="date" class="form-control" value="<?= date('Y-m-d',strtotime($rek[0]['TGINP']))?>" readonly>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label for="exampleInputPassword1">No. Nasabah</label>
                                    <input type="text" class="form-control" value="<?= $rek[0]['CNO']?>" readonly>
                                </div>
                                <div class="col-sm">
                                    <label for="exampleInputPassword1">Nama Nasabah</label>
                                    <input type="text" class="form-control" value="<?= $rek[0]['ALIASNM']?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label for="exampleInputPassword1">Jenis</label>
                                    <input type="text" class="form-control" value="<?= $rek[0]['JENIS']?>" readonly>
                                </div>
                                    <div class="col-sm">
                                    <label for="exampleInputPassword1">Keterangan</label>
                                    <input type="text" class="form-control" value="<?= $rek[0]['KET']?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Saldo Akhir</label>
                                <input type="number" class="form-control" value="<?= $rek[0]['SLDAKHIR']?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">BKYC</label>
                                <input type="number" class="form-control" value="<?= $rek[0]['BKYC']?>">
                            </div>
                        </form>
                    </div>
                    <div class="col-3"></div>
                </div>
            </form>
        </div>
    </div>
</div>


