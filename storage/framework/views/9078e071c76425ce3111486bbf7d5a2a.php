<?php $__env->startSection('title', 'Pengelolaan Data'); ?>

<?php $__env->startSection('content'); ?>
<div class="card shadow-premium border-0 rounded-4">
    <div class="card-header bg-teal text-white py-3 rounded-top-4">
        <h5 class="mb-0 fw-bold">Pengelolaan Inventaris</h5>
    </div>
    <div class="card-body p-4">
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="bg-light">
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Nama Barang</th>
                        <th class="text-center">Stok</th>
                        <th class="text-end">Harga (Rp)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $data_barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="text-center fw-bold text-teal"><?php echo e($barang['id']); ?></td>
                        <td><?php echo e($barang['nama']); ?></td>
                        <td class="text-center"><?php echo e($barang['stok']); ?> unit</td>
                        <td class="text-end fw-bold text-teal"><?php echo e(number_format($barang['harga'], 0, ',', '.')); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">Tidak ada data yang ditemukan.</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\UTS-PWEB\resources\views/pengelolaan.blade.php ENDPATH**/ ?>