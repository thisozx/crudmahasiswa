<!-- Form Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-sm-6">
            <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4">Form Tambah Data Mahasiswa</h4>
                <form action="" method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="nama" placeholder=""
                            value="<?= set_value('nama'); ?>">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">Nama Mahasiswa</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="nim" placeholder=""
                            value="<?= set_value('nim'); ?>">
                        <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">NIM Mahasiswa</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" name="jenis_kelamin"
                            aria-label="Floating label select example" value="<?= set_value('jenis_kelamin'); ?>">
                            <option value="" selected disabled>Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingSelect">Jenis Kelamin</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="email" placeholder=""
                            value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">Email Mahasiswa</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" name="prodi" value="<?= set_value('prodi'); ?>"
                            aria-label="Floating label select example">
                            <option value="" disabled selected>Program Studi</option>
                            <?php foreach ($prodi as $p): ?>
                                <option value="<?= $p['id']; ?>">
                                    <?= $p['nama']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('prodi', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingSelect">Program Studi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="asal_sekolah"
                            value="<?= set_value('asal_sekolah'); ?>" placeholder="">
                        <?= form_error('asal_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">Asal Sekolah</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="no_hp"
                            value="<?= set_value('no_hp'); ?>" placeholder="">
                        <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">No HP</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="alamat"
                            value="<?= set_value('alamat'); ?>" placeholder="">
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">Alamat</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->