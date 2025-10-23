<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('content'); ?>
<div class="card shadow-premium border-0 rounded-4">
    <div class="card-header bg-teal text-white py-3 rounded-top-4">
        <h3>Detail Profil</h3>
    </div>
    <div class="card-body">
        <p><strong>Username:</strong> <span class="text-success"><?php echo e($username ?? 'Tamu'); ?></span></p>
        <p><strong>Status:</strong> Pengguna Aktif</p>
        <p><strong>Jabatan:</strong> Mahasiswa PWEB</p>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\UTS-PWEB\resources\views/profile.blade.php ENDPATH**/ ?>