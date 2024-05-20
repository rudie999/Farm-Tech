<?php $__env->startSection('title'); ?>
Daftar Pengumuman | SIPERPUS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('header'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Start datatable css -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Daftar Pengumuman Perpustakaan</h4>
                    <?php if(session('status')): ?>
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <?php echo e(session('status')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif; ?>
                    <a href="/kelola/pengumuman/tambah" class="btn btn-primary mb-3">
                        Buat Pengumuman
                    </a>
                    <div class="table-responsive">
                        <table id="dataTable" class="text-center">
                            <thead class="text-capitalize bg-primary text-white">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Post</th>
                                    <th>Author</th>
                                    <th>Judul</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php $__currentLoopData = $pengumuman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengumuman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($no); ?></td>
                                    <td><?php echo e(date("d-m-Y", strtotime($pengumuman->created_at->toDateString()))); ?></td>
                                    <td><?php echo e($pengumuman->user->name); ?></td>
                                    <td><?php echo e($pengumuman->judul); ?></td>
                                    <td>
                                        <a href="/kelola/pengumuman/detail/<?php echo e($pengumuman->slug); ?>"
                                            class="badge badge-info btn-sm m-1"><i class="fa fa-eye"></i>
                                            Detail</a>
                                        <a href="/kelola/pengumuman/edit/<?php echo e($pengumuman->slug); ?>"
                                            class="badge badge-warning btn-sm m-1"><i class="fa fa-pencil"></i>
                                            Edit</a>
                                        <a onclick="return confirm('Apakah anda yakin ingin menghapus pengumuman ini?')"
                                            href="/kelola/pengumuman/delete/<?php echo e($pengumuman->slug); ?>"
                                            class="badge badge-danger btn-sm m-1"><i class="fa fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                                <?php $no++  ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace( 'isi' );
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<!-- Start datatable js -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyek 1 - UAS\Example\siperpus\resources\views/pengumuman/daftar-pengumuman.blade.php ENDPATH**/ ?>