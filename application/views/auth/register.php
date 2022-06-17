<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="<?= base_url('assets') ?>/images/logo.svg" alt="logo">
                        </div>
                        <h4>Buat Baru?</h4>
                        <form class="pt-3" method="post" action="<?= base_url('auth/register'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Username" value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="password1" name="password1" placeholder="Password">
                                <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="password2" name="password2" placeholder="Confirm Password">
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-block btn-primary" type="submit">REGISTER</button>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Already have an account? <a href="<?= base_url('auth') ?>" class="text-primary">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>