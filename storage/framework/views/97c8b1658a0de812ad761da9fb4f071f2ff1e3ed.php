<?php $__env->startSection('title'); ?>
Register Anggota | Sistem Informasi Jasa Petani
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- login area start -->
<div class="login-area login-bg">
    <div class="container">
        <div class="login-box ptb--100">
            <form action="/auth/postRegister" method="POST">
                <?php echo csrf_field(); ?>
                <div class="login-form-head">
                    <h4>Register Anggota</h4>
                    <p>SISTEM INFORMASI JASA PETANI</p>
                </div>
                <div class="login-form-body">
                    <div class="form-gp">
                        <label for="exampleInputName1">Nama Lengkap</label>
                        <input type="text" id="exampleInputName1" value="<?php echo e(old('name')); ?>" name="name" required>
                        <i class="ti-user"></i>
                        <?php if($errors->has('name')): ?>
                        <div class="text-danger"><?php echo e($errors->first('name')); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputName1">Alamat Lengkap</label>
                        <input type="text" id="exampleInputName1" value="<?php echo e(old('alamat')); ?>" name="alamat" required>
                        <i class="ti-home"></i>
                        <?php if($errors->has('alamat')): ?>
                        <div class="text-danger"><?php echo e($errors->first('alamat')); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputName1">Nomor Handphone</label>
                        <input type="number" id="exampleInputName1" value="<?php echo e(old('no_hp')); ?>" name="no_hp" required>
                        <i class="fa fa-phone-square"></i>
                        <?php if($errors->has('no_hp')): ?>
                        <div class="text-danger"><?php echo e($errors->first('no_hp')); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" id="exampleInputEmail1" value="<?php echo e(old('email')); ?>" name="email" required>
                        <i class="ti-email"></i>
                        <?php if($errors->has('email')): ?>
                        <div class="text-danger"><?php echo e($errors->first('email')); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" id="exampleInputPassword1" name="password">
                        <i class="ti-lock"></i>
                        <?php if($errors->has('password')): ?>
                        <div class="text-danger"><?php echo e($errors->first('password')); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" id="exampleInputPassword1" name="password_confirmation">
                        <i class="ti-lock"></i>
                        <?php if($errors->has('password_confirmation')): ?>
                        <div class="text-danger"><?php echo e($errors->first('password_confirmation')); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                    </div>
                    <div class="form-footer text-center mt-5">
                        <p class="text-muted">Sudah memiliki akun? <a href="/auth/login">Login Sekarang!</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyek 1 - UAS\Example\siperpus\resources\views/auth/register-anggota.blade.php ENDPATH**/ ?>