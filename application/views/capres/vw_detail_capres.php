<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Calon Presiden
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $capres['nama_lengkap'];?></h2>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $capres['partai_pendukung'];?></h6>
                    <div class="row">
                        <div class="col-md-4">NIK</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $capres['nik'];?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Asal</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $capres['asal'];?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Riwayat Pekerjaan</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $capres['riwayat_pekerjaan'];?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Umur</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $capres['umur'];?></div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('index.php/Capres')?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>