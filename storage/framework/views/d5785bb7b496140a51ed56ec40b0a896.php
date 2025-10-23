<?php
    $message = session('error') ?? 'Pesan notifikasi.';
    $alertClass = 'alert-danger';
?>

<div class="alert <?php echo e($alertClass); ?> mt-3 shadow-sm rounded-3 fw-bold" role="alert">
    <?php echo e($message); ?>

</div>
<?php /**PATH C:\laragon\www\UTS-PWEB\resources\views/components/alert_notif.blade.php ENDPATH**/ ?>