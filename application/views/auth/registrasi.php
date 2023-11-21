<div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Sign Up Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6">
                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h3>Sign Up</h3>
                    </div>
                    <form class="user" method="POST" action="<?= base_url('index.php/Auth/registrasi') ?>">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" name="nama" placeholder=""
                                value=<?= set_value('nama'); ?>>
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            <label for="floatingText">Nama Lengkap</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email" placeholder=""
                                value=<?= set_value('email'); ?>>
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" name="password1"
                                placeholder="" value=<?= set_value('password1'); ?>>
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" name="password2"
                                placeholder="" value=<?= set_value('password2'); ?>>
                            <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            <label for="floatingPassword">Confirm Password</label>
                        </div>
                        <button type="" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                    </form>
                    <p class="text-center mb-0">Already have an Account? <a href="<?= base_url(); ?>index.php/Auth">Sign
                            In</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up End -->
</div>