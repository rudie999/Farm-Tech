<?php $__env->startSection('title'); ?>
Daftar Petani | Sistem Informasi Jasa Petani
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
                    <h4 class="header-title">Daftar Jasa Petani</h4>
                    <?php if(session('status')): ?>
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <?php echo e(session('status')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif; ?>
                    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addBukuModal">
                        Tambah Data Petani
                    </button>
                    <div class="table-responsive">
                        <table id="dataTable" class="text-center">
                            <thead class="text-capitalize bg-primary text-white">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Petani</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($no); ?></td>
                                    <td><?php echo e($buku['nama']); ?></td>
                                    <td><img src="<?php echo e(asset('img/buku/' . $buku['gambar'])); ?>"
                                            style="width:100%;max-width:150px"></td>
                                    <td>
                                        <button class="badge badge-info btn-sm m-1" data-toggle="modal"
                                            data-target="#detailModal" onclick="detailBuku('<?php echo e($buku['slug']); ?>')"><i
                                                class="fa fa-eye"></i> Detail</button>
                                        <button data-toggle="modal" data-target="#editBukuModal"
                                            onclick="editBuku('<?php echo e($buku['slug']); ?>')"
                                            class="badge badge-warning btn-sm m-1"><i class="fa fa-pencil"></i>
                                            Edit</button>
                                        <a onclick="return confirm('Apakah anda yakin ingin menghapus data petani ini?')"
                                            href="/kelola/petani/delete/<?php echo e($buku['slug']); ?>"
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


<div class="modal fade" id="addBukuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Petani</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/kelola/petani/tambah" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>Nama Petani</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="pengarang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Petani</label>
                        <textarea type="text" name="deskripsi" class="form-control" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar Petani</label>
                        <input type="file" class="form-control-file" name="gambar">
                    </div>
                    <small>
                        *Gambar format : <span style="color:red">JPG, JPEG, PNG, maksimal ukuran 3mb</span><br>
                        *Gambar <b>Tidak Wajib Diupload</b>
                    </small>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Tambah Petani</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Detail Buku Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Petani</span>
                </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <center class="mb-4">
                    <h6 id="judul_buku_detail"></h6>
                </center>
                <center>
                    <div id="gambar_detail" class="mb-2"></div>
                    <span id="pengarang_detail" class="mb-5" style="font-weight: bold"></span><br>
                </center>
                <span id="deskripsi_detail" style="white-space: pre-line"></span>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="editBukuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Petani</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div id="current_gambar" class="mb-3 mt-4"></div>
                </center>
                <form action="/kelola/petani/edit" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="slug" id="edit_slug" required>
                    <div class="form-group">
                        <label>Nama Petani</label>
                        <input type="text" name="nama" id="edit_nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="pengarang" id="edit_pengarang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Petani</label>
                        <textarea type="text" name="deskripsi" id="edit_deskripsi" class="form-control" rows="4"
                            required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar Petani</label>
                        <input type="file" class="form-control-file" name="gambar">
                    </div>
                    <small>
                        *Gambar format : <span style="color:red">JPG, JPEG, PNG, maksimal ukuran 3mb</span><br>
                        <b>* Jika ingin mengganti foto petani silahkan pilih gambar. Jika tidak biarkan kosong.</b>
                    </small>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Edit Buku</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function detailBuku(slug) {
            let judul_buku = document.getElementById(`judul_buku_detail`);
            let pengarang_buku = document.getElementById(`pengarang_detail`);
            let deskripsi_buku = document.getElementById(`deskripsi_detail`);
            $.ajax({
                type: `GET`,
                url: `/kelola/petani/detail/${slug}`,
                dataType: 'json',
                success: (hasil) => {
                    hasil.forEach(function(item){
                        judul_buku.textContent = item.nama;
                        $("#gambar_detail").html(`<img src="<?php echo e(asset('img/buku/${item.gambar}')); ?>" style="width:100%;max-width:150px">`)
                        pengarang_buku.textContent = item.pengarang;
                        deskripsi_buku.textContent = item.deskripsi;
                    });
                }
            });
        }

        function editBuku(slug){
            $.ajax({
                type: `GET`,
                url: `/kelola/petani/detail/${slug}`,
                dataType: 'json',
                success: (hasil) => {
                    hasil.forEach(function(item){
                        $("#current_gambar").html(`<img src="<?php echo e(asset('img/buku/${item.gambar}')); ?>" style="width:100%;max-width:150px">`)
                        document.getElementById(`edit_slug`).value = item.slug;
                        document.getElementById(`edit_nama`).value = item.nama;
                        document.getElementById(`edit_pengarang`).value = item.pengarang;
                        document.getElementById(`edit_deskripsi`).value = item.deskripsi;
                    });
                }
            });
        }
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

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyek 1 - UAS\Example\siperpus\resources\views/buku/daftar-buku.blade.php ENDPATH**/ ?>