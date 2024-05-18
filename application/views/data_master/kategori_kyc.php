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
    <div class="card">
        <form method="POST" action="<?= site_url('/MasterTeller/saveKategoriKyc') ?>">
            <div class="card-header">
                <h5>Kategori KYC</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">BESAR</label>
                            <label for="inputEmail3" class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm">
                                <input type="number" class="form-control" name="besar1" value="<?= $kyc[0]['NILAI_AWAL']?>">
                            </div>
                            <label for="inputEmail3" class="col-form-label">S/D</label>
                            <div class="col-sm">
                                <input type="number" class="form-control" name="besar2" value="<?= $kyc[0]['NILAI_AKHIR']?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">SEDANG</label>
                            <label for="inputEmail3" class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm">
                                <input type="number" class="form-control" name="sedang1" value="<?= $kyc[1]['NILAI_AWAL']?>">
                            </div>
                            <label for="inputEmail3" class="col-form-label">S/D</label>
                            <div class="col-sm">
                                <input type="number" class="form-control" name="sedang2" value="<?= $kyc[1]['NILAI_AKHIR']?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">KECIL</label>
                            <label for="inputEmail3" class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm">
                                <input type="number" class="form-control" name="kecil1" value="<?= $kyc[2]['NILAI_AWAL']?>">
                            </div>
                            <label for="inputEmail3" class="col-form-label">S/D</label>
                            <div class="col-sm">
                                <input type="number" class="form-control" name="kecil2" value="<?= $kyc[2]['NILAI_AKHIR']?>">
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <div class="card-footer text-right">
                <div class="row">
                    <div class="col-sm">
                        <!-- <button type="button" class="btn btn-primary">Save</button> -->
                        <button type="input" class="btn  btn-primary" >Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


