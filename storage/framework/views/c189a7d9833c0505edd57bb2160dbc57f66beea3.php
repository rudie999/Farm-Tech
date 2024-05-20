<div class="header-area">
    <div class="row align-items-center">
        <!-- nav and search button -->
        <div class="col-md-6 col-sm-8 clearfix">
            <div class="nav-btn pull-left">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="search-box pull-left">
                <div class="col-sm-6">
                    <div class="breadcrumbs-area clearfix">
                        <ul class="breadcrumbs pull-left">
                            <li><span>Sistem Informasi Jasa Petani</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- profile info & task notification -->
        <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
                <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo e(auth()->user()->name); ?><i
                        class="fa fa-angle-down"></i></h4>
                <div class="dropdown-menu">
                    <?php if(auth()->check() && auth()->user()->hasRole('anggota')): ?>
                    <a class="dropdown-item" href="/anggota/password/change">Ganti Password</a>
                    <?php endif; ?>
                    <?php if(auth()->check() && auth()->user()->hasRole('pegawai')): ?>
                    <a class="dropdown-item" href="/pegawai/password/change">Ganti Password</a>
                    <?php endif; ?>
                    <a class="dropdown-item" href="/auth/logout">Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\Proyek 1 - UAS\Example\siperpus\resources\views/templates/header.blade.php ENDPATH**/ ?>