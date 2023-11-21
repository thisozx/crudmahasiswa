<!-- Form Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-sm-6">
            <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4">Form Tambah Data Prodi</h4>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="nama" value="<?= set_value('nama'); ?>" placeholder="">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">Nama Prodi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="ruangan" value="<?= set_value('ruangan'); ?>" placeholder="">
                        <?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">Ruangan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" name="jurusan" value="<?= set_value('jurusan'); ?>" aria-label="Floating label select example">
                            <option value="" selected disabled>Jurusan</option>
                            <option value="JTI">JTI</option>
                            <option value="JTIN">JTIN</option>
                            <option value="AKUTANSI">AKUTANSI</option>
                        </select>
                        <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingSelect">Jurusan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="akreditasi" value="<?= set_value('akreditasi'); ?>" placeholder="">
                        <?= form_error('akreditasi', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">Akreditasi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="nama_kaprodi" value="<?= set_value('nama_kaprodi'); ?>" placeholder="">
                        <?= form_error('nama_kaprodi', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">Nama Kaprodi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="tahun_berdiri" value="<?= set_value('tahun_berdiri'); ?>" placeholder="">
                        <?= form_error('tahun_berdiri', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">Tahun Berdiri</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="output_lulusan" value="<?= set_value('output_lulusan'); ?>" placeholder="">
                        <?= form_error('output_lulusan', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">Output Lulusan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" id="floatingInput" name="gambar" placeholder="">
                        <label for="floatingInput">Choose File</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Prodi</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->