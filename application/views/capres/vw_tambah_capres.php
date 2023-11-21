<!-- Form Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-sm-6">
            <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4">Form Tambah Data Calon Presiden</h4>
                <form action="<?= base_url('index.php/Capres/upload')?>" method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="nama_lengkap" placeholder="">
                        <label for="floatingInput">Nama Calon Presiden</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="nik" placeholder="">
                        <label for="floatingInput">NIK Calon Presiden</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="asal" placeholder="">
                        <label for="floatingInput">Asal Calon Presiden</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="partai_pendukung" placeholder="">
                        <label for="floatingInput">Partai Pendukung</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="riwayat_pekerjaan" placeholder="">
                        <label for="floatingInput">Riwayat Pekerjaan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingInput" name="umur" placeholder="">
                        <label for="floatingInput">Umur</label>
                    </div>
                    <a href="<?= base_url('index.php/Capres')?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->