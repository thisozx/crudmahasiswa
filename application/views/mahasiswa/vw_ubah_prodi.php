<!-- Form Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-sm-6">
            <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4">Form Ubah Data Prodi</h4>
                <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $prodi['id']; ?>">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="nama" value="<?= $prodi['nama']; ?>" placeholder="">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">Nama Prodi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="ruangan" value="<?= $prodi['ruangan']; ?>" placeholder="">
                        <?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">Ruangan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" name="jurusan" value="<?= $prodi['jurusan']; ?>" aria-label="Floating label select example">
                            <option value="" selected disabled>Jurusan</option>
                            <option value="JTI">JTI</option>
                            <option value="JTIN">JTIN</option>
                            <option value="AKUTANSI">AKUTANSI</option>
                        </select>
                        <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingSelect">Jurusan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="akreditasi" value="<?= $prodi['akreditasi']; ?>" placeholder="">
                        <?= form_error('akreditasi', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">Akreditasi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="nama_kaprodi" value="<?= $prodi['nama_kaprodi']; ?>" placeholder="">
                        <?= form_error('nama_kaprodi', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">Nama Kaprodi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="tahun_berdiri" value="<?= $prodi['tahun_berdiri']; ?>" placeholder="">
                        <?= form_error('tahun_berdiri', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">Tahun Berdiri</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="output_lulusan" value="<?= $prodi['output_lulusan']; ?>" placeholder="">
                        <?= form_error('output_lulusan', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">Output Lulusan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <img src='<?= base_url('assets/img/prodi/').$prodi['gambar'];?>' style="width: 100px;" class="img-thumbnail">
                        <input type="file" class="form-control" id="floatingInput" name="gambar" placeholder="">
                        <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">Choose File</label>
                    </div>
                    <a href="<?= base_url('index.php/Prodi')?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->