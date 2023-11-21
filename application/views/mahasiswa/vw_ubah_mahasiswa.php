<!-- Form Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-sm-6">
            <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4">Form Ubah Data Mahasiswa</h4>
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="nama"
                            value="<?= $mahasiswa['nama']; ?>" placeholder="">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">Nama Mahasiswa</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="nim"
                            value="<?= $mahasiswa['nim']; ?>" placeholder="">
                        <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">NIM Mahasiswa</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" name="jenis_kelamin"
                            value="<?= $mahasiswa['jenis_kelamin']; ?>" aria-label="Floating label select example">
                            <option value="" selected disabled>Jenis Kelamin</option>
                            <option value="Laki-Laki" <?php if ($mahasiswa['jenis_kelamin'] == "Laki-Laki") {
                                echo "selected";
                            } ?>>Laki-Laki</option>
                            <option value="Perempuan" <?php if ($mahasiswa['jenis_kelamin'] == "Perempuan") {
                                echo "selected";
                            } ?>>Perempuan</option>
                        </select>
                        <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingSelect">Jenis Kelamin</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="email"
                            value="<?= $mahasiswa['email']; ?>" placeholder="">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">Email Mahasiswa</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" name="prodi" value="<?= $mahasiswa['prodi']; ?>"
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
                            value="<?= $mahasiswa['asal_sekolah']; ?>" placeholder="">
                        <?= form_error('asal_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">Asal Sekolah</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="no_hp"
                            value="<?= $mahasiswa['no_hp']; ?>" placeholder="">
                        <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">No HP</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="alamat"
                            value="<?= $mahasiswa['alamat']; ?>" placeholder="">
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        <label for="floatingInput">Alamat</label>
                    </div>
                    <a href="<?= base_url('index.php/Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->