<?php $__env->startSection('title'); ?>
Edit Pengumuman | SIPERPUS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('header'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit Pengumuman Perpustakaan</h4>
                    <?php if(session('status')): ?>
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <?php echo e(session('status')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif; ?>
                    <form action="/kelola/pengumuman/edit" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($pengumuman->id); ?>">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" value="<?php echo e($pengumuman->judul); ?>" name="judul" class="form-control"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Isi Pengumuman</label>
                            <textarea type="text" name="isi" class="form-control" rows="10"
                                required><?php echo e($pengumuman->isi); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Gambar Header Pengumuman</label>
                            <input type="file" class="form-control-file" name="gambar">
                            <?php if($errors->has('gambar')): ?>
                            <span class="help-block"><?php echo e($errors->first('gambar')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            *Gambar format : <span style="color:red">JPG, JPEG, PNG, maksimal ukuran 3mb</span><br>
                            *<b>Jika ingin mengganti gambar silahkan upload gambar baru, jika tidak maka biarkan
                                kosong.</b>
                        </div>
                        <a href="/kelola/pengumuman/daftar" class="btn btn-secondary">Back to Pengumuman</a>
                        <button type="submit" class="btn btn-success">Edit Pengumuman</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let editor = CKEDITOR.replace( 'isi' ,{
        extraPlugins: 'notification'
    });
    editor.value = 
    editor.on( 'required',function( evt ) {
        editor.showNotification('This field is required.');
        evt.cancel();
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyek 1 - UAS\Example\siperpus\resources\views/pengumuman/edit-pengumuman.blade.php ENDPATH**/ ?>