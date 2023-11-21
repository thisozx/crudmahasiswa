<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url() ?>index.php/Capres/tambah" class="btn btn-info">
                Tambah Calon Presiden
            </a>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>NIK</td>
                        <td>Nama Lengkap</td>
                        <td>Partai Pendukung</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($capres as $cp): ?>
                        <tr>
                            <td>
                                <?= $i ?>.
                            </td>
                            <td>
                                <?= $cp['nik']; ?>

                            </td>
                            <td>
                                <?= $cp['nama_lengkap']; ?>
                            </td>
                            <td>
                                <?= $cp['partai_pendukung']; ?>
                            </td>
                            <td>
                                <a href="<?= base_url('index.php/Capres/hapus/') . $cp['id']; ?>"
                                    class="btn btn-danger">Hapus</a>
                                <a href="<?= base_url('index.php/Capres/edit/') . $cp['id']; ?>"
                                    class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('index.php/Capres/detail/') . $cp['id']; ?>"
                                    class="btn btn-info">Detail</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>