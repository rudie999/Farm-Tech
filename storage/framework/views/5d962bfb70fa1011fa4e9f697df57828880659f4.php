<?php $__env->startSection('title'); ?>
Katalog Petani | Sistem Informasi Jasa Petani
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Katalog Petani</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<div class="about_area plus_padding">
    <div class="container">
        <nav class="navbar">
            <form class="form-inline" method="POST" action="/buku/katalog">
                <?php echo csrf_field(); ?>
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Nama Petani"
                    aria-label="Search" required>
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Cari Petani</button>
            </form>
        </nav>
        <div class="row">
            <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-4">
                <div class="card border-0 mt-5">
                    <a href="/buku/detail/<?php echo e($b->slug); ?>">
                        <img src="<?php echo e(asset('img/buku/' . $b->gambar)); ?>"
                            style="object-fit: cover;width:100%;height:15vw">
                    </a>
                    <div class="card-block mt-3">
                        <a href="/buku/detail/<?php echo e($b->slug); ?>">
                            <h4 class="card-title m-2"><?php echo e($b->nama); ?></h4>
                        </a>
                        <p class="card-text m-2"><?php echo e(substr($b->deskripsi,0,130)); ?>... <a
                                href="/buku/detail/<?php echo e($b->slug); ?>">Read More</a></p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="row justify-content-md-center mt-5">
            <?php echo e($buku->links()); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('homepage.templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyek 1 - UAS\Example\siperpus\resources\views/homepage/katalog-buku.blade.php ENDPATH**/ ?>