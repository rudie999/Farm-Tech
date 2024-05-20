<?php $__env->startSection('title'); ?>
<?php echo e($pengumuman->judul); ?> | SIPERPUS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- bradcam_area  -->
<div class="bradcam_area" style="background-image: url(<?php echo e(asset('img/pengumuman/' . $pengumuman->gambar_header)); ?>)">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3><?php echo e($pengumuman->judul); ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<div class="about_area plus_padding">
    <div class="container">
        <a href="/pengumuman"><i class="fa fa-arrow-left"></i> Back to Daftar Pengumuman</a>
        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <h2 class="mb-5"><?php echo e($pengumuman->judul); ?></h2>
                <img src="<?php echo e(asset('img/pengumuman/' . $pengumuman->gambar_header)); ?>" alt="<?php echo e($pengumuman->judul); ?>"
                    style="width: 100%;max-width: 350px">
                <h5 class="m-3"><i class="fa fa-user"></i> : <?php echo e($pengumuman->user->name); ?> | <i
                        class="fa fa-calendar"></i> :
                    <?php echo e(date("d-m-Y", strtotime($pengumuman->created_at->toDateString()))); ?></h5>
            </div>
            <p><?php echo $pengumuman->isi; ?></p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('homepage.templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyek 1 - UAS\Example\siperpus\resources\views/homepage/detail-pengumuman.blade.php ENDPATH**/ ?>