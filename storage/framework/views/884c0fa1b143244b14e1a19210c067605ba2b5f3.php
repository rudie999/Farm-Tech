<?php $__env->startSection('title'); ?>
Pengumuman & Informasi | SIPERPUS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Pengumuman & Informasi</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<div class="about_area plus_padding">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $pengumuman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-12">
                <div class="card border-0 mt-5">
                    <a href="/pengumuman/detail/<?php echo e($p->slug); ?>">
                        <img src="<?php echo e(asset('img/pengumuman/' . $p->gambar_header)); ?>"
                            style="object-fit: cover;width:100%;height:15vw">
                    </a>
                    <div class="card-block mt-3">
                        <a href="/pengumuman/detail/<?php echo e($p->slug); ?>">
                            <h4 class="card-title m-2"><?php echo e($p->judul); ?></h4>
                        </a>
                        <p class="card-text m-2"><?php echo substr($p->isi,0,330); ?>... <a
                                href="/pengumuman/detail/<?php echo e($p->slug); ?>">Read More</a></p>
                        Posted : <?php echo e($p->created_at->diffForHumans()); ?> | <i class="fa fa-calendar"></i>
                        <?php echo e(date("d-m-Y", strtotime($p->created_at->toDateString()))); ?>

                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="row justify-content-md-center mt-5">
            <?php echo e($pengumuman->links()); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('homepage.templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyek 1 - UAS\Example\siperpus\resources\views/homepage/pengumuman.blade.php ENDPATH**/ ?>