<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="p-5 mb-4 bg-white rounded-4 shadow-premium">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bolder text-teal">Selamat Datang!</h1>
        <p class="col-md-8 fs-4">Halo, <span class="text-teal fw-bold"><?php echo e($username); ?></span>.Ini adalah halaman utama Elektronik Shann.<br>Disini Anda bisa membeli keperluan untuk rakit PC impian Anda</p>
        <hr class="my-4">
        <p class="lead text-muted">Gunakan navigasi di atas untuk mengelola data dan melihat profil.</p>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\UTS-PWEB\resources\views/dashboard.blade.php ENDPATH**/ ?>