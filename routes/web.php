<?php

Route::get('/', 'HomepageController@index');
Route::match(array('GET', 'POST'), '/petani/katalog', 'HomepageController@katalogBuku');

Route::get('/buku/detail/{slug}', 'HomepageController@detailBuku');
Route::get('/pengumuman', 'HomepageController@pengumuman');
Route::get('/pengumuman/detail/{slug}', 'HomepageController@detailPengumuman');

Route::get('/auth/login', 'AuthController@login')->middleware('guest')->name('login');
Route::post('/auth/postLogin', 'AuthController@postLogin');

Route::get('/auth/register', 'AuthController@registerAnggota')->middleware('guest')->name('register');
Route::post('/auth/postRegister', 'AuthController@postRegisterAnggota');

Route::get('/auth/logout', 'AuthController@logout');

Route::group(['middleware' => ['auth', 'role:pegawai']], function () {
    Route::get('/pegawai', 'PegawaiController@index');
    Route::match(array('GET', 'POST'), '/pegawai/password/change', 'PegawaiController@changePassword');

    Route::get('/kelola/petani/daftar', 'BukuController@index');
    Route::post('/kelola/petani/tambah', 'BukuController@tambah');
    Route::get('/kelola/petani/detail/{slug}', 'BukuController@detail');
    Route::post('/kelola/petani/edit', 'BukuController@edit');
    Route::get('/kelola/petani/delete/{slug}', 'BukuController@delete');

    Route::get('/kelola/penyewaan/daftar', 'PeminjamanController@index');
    Route::post('/kelola/penyewaan/tambah', 'PeminjamanController@tambah');
    Route::get('/kelola/penyewaan/detail/{id}', 'PeminjamanController@detail');
    Route::post('/kelola/penyewaan/pengembalian', 'PeminjamanController@pengembalian');
    Route::get('/kelola/penyewaan/delete/{id}', 'PeminjamanController@delete');

    Route::get('/kelola/anggota/daftar', 'PegawaiController@daftarAnggota');
    Route::get('/kelola/anggota/status/{status}/{id}', 'PegawaiController@statusAnggota');
});
//     Route::get('/kelola/pengumuman/daftar', 'PengumumanController@index');
//     Route::match(array('GET', 'POST'), '/kelola/pengumuman/tambah', 'PengumumanController@tambah');
//     Route::get('/kelola/pengumuman/detail/{slug}', 'PengumumanController@detail');
//     Route::match(array('GET', 'POST'), '/kelola/pengumuman/edit/{slug?}', 'PengumumanController@edit');
//     Route::get('/kelola/pengumuman/delete/{slug}', 'PengumumanController@delete');


//     Route::get('/kelola/anggota/daftar', 'PegawaiController@daftarAnggota');
//     Route::get('/kelola/anggota/status/{status}/{id}', 'PegawaiController@statusAnggota');
// });

// Route::group(['middleware' => ['auth', 'role:admin']], function () {
//     Route::get('/kelola/pegawai/daftar', 'AdminController@daftarPegawai');
//     Route::post('/kelola/pegawai/tambah', 'AdminController@tambahPegawai');
//     Route::get('/kelola/pegawai/hapus/{id}', 'AdminController@hapusPegawai');
//     Route::get('/kelola/pegawai/setadmin/{id}', 'AdminController@setAdminPegawai');
// });

Route::group(['middleware' => ['auth', 'role:anggota']], function () {
    Route::get('/anggota', 'AnggotaController@index');
    Route::get('/anggota/pinjaman/riwayat', 'AnggotaController@riwayatPinjam');
    Route::match(array('GET', 'POST'), '/anggota/password/change', 'AnggotaController@changePassword');
});
