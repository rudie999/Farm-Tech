<?php $__env->startSection('title'); ?>
Daftar Anggota | SIPERPUS
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Daftar Anggota Perpustakaan</h4>
                    <?php if(session('status')): ?>
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <?php echo e(session('status')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table id="dataTable" class="text-center">
                            <thead class="text-capitalize bg-danger text-white">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>No HP</th>
                                    <th>Status Anggota</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anggota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($no); ?></td>
                                    <td><?php echo e($anggota->name); ?></td>
                                    <td><?php echo e($anggota->email); ?></td>
                                    <td><?php echo e($anggota->alamat); ?></td>
                                    <td><?php echo e($anggota->no_hp); ?></td>
                                    <td><?php echo e($anggota->status_user); ?></td>
                                    <td>
                                        <?php
                                            if($anggota->status_user ==  "Aktif"){ ?>
                                        <a onclick="return confirm('Apakah anda yakin ingin menonaktifkan anggota?')"
                                            href="/kelola/anggota/status/nonaktifkan/<?php echo e($anggota->id); ?>"
                                            class="btn btn-warning btn-sm"><i class="fa fa-times-circle"></i>
                                            Nonaktifkan</a>
                                        <?php
                                        }else{ ?>
                                        <a onclick="return confirm('Apakah anda yakin ingin mengaktifkan anggota?')"
                                            href="/kelola/anggota/status/aktifkan/<?php echo e($anggota->id); ?>"
                                            class="btn btn-success btn-sm"><i class="fa fa-check-circle"></i>
                                            Aktifkan</a>
                                        <?php
                                            }
                                            ?>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<!-- Start datatable js -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyek 1 - UAS\Example\siperpus\resources\views/pegawai/daftar-anggota.blade.php ENDPATH**/ ?>