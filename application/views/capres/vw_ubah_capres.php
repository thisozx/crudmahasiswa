<!-- Form Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-sm-6">
            <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4">Form Tambah Data Calon Presiden</h4>
                <form action="<?= base_url('index.php/Capres/update') ?>" method="POST">
                    <input type="hidden" name="id" value="<?= $capres['id']; ?>">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="nama_lengkap" placeholder="" value="<?= $capres['nama_lengkap']; ?>">
                        <label for="floatingInput">Nama Calon Presiden</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="nik" placeholder="" value="<?= $capres['nik']; ?>">
                        <label for="floatingInput">NIK Calon Presiden</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="asal" placeholder="" value="<?= $capres['asal']; ?>">
                        <label for="floatingInput">Asal Calon Presiden</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="partai_pendukung"
                            placeholder="" value="<?= $capres['partai_pendukung']; ?>">
                        <label for="floatingInput">Partai Pendukung</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="riwayat_pekerjaan"
                            placeholder="" value="<?= $capres['riwayat_pekerjaan']; ?>">
                        <label for="floatingInput">Riwayat Pekerjaan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingInput" name="umur" placeholder="" value="<?= $capres['umur']; ?>">
                        <label for="floatingInput">Umur</label>
                    </div>
                    <a href="<?= base_url('index.php/Capres')?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->