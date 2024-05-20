<?php $__env->startSection('title'); ?>
Login | Sistem Informasi Jasa Petani
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- login area start -->
<div class="login-area login-bg">
    <div class="container">
        <div class="login-box ptb--100">
            <form action="/auth/postLogin" method="POST">
                <div class="login-form-head">
                    <h4>Login</h4>
                    <p>SISTEM INFORMASI JASA PETANI</p>
                </div>
                <?php echo csrf_field(); ?>
                <div class="login-form-body">
                    <?php if(session('status')): ?>
                    <div class="alert alert-info" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                    <?php endif; ?>
                    <div class="form-gp">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" required id="exampleInputEmail1">
                        <i class="ti-email"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" required id="exampleInputPassword1">
                        <i class="ti-lock"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                    </div>
                    <div class="form-footer text-center mt-5">
                        <p class="text-muted">Belum Menjadi Anggota? <a href="/auth/register">Daftar Sekarang!</a></p>
                        <a href="/">Back to Homepage <i class="ti-home"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- login area end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyek 1 - UAS\Example\siperpus\resources\views/auth/login.blade.php ENDPATH**/ ?>