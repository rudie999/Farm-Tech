<?php $__env->startSection('title'); ?>
Katalog Petani | Sistem Informasi Jasa Petani
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- bradcam_area  -->
<div class="bradcam_area" style="background-image: url(<?php echo e(asset('img/buku/' . $buku->gambar)); ?>)">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3><?php echo e($buku->nama); ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<div class="about_area plus_padding">
    <div class="container">
        <a href="/petani/katalog"><i class="fa fa-arrow-left"></i> Back to Katalog Petani</a>
        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <h2 class="mb-5"><?php echo e($buku->nama); ?></h2>
                <img src="<?php echo e(asset('img/buku/' . $buku->gambar)); ?>" alt="<?php echo e($buku->nama); ?>"
                    style="width: 100%;max-width: 350px">
                <h5 class="m-3">Alamat : <?php echo e($buku->pengarang); ?></h5>
                <p><?php echo e($buku->deskripsi); ?></p>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('homepage.templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyek 1 - UAS\Example\siperpus\resources\views/homepage/detail-buku.blade.php ENDPATH**/ ?>