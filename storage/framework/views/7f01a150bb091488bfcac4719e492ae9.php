<?php
    // Tentukan pesan dan class alert berdasarkan Flash Session yang tersedia
    $message = session('error') ?? session('status') ?? 'Notifikasi berhasil.';
    $alertClass = session('error') ? 'alert-danger' : 'alert-success';
?>

<div class="alert <?php echo e($alertClass); ?> mt-3" role="alert">
  <?php echo e($message); ?>

</div>
<?php /**PATH C:\laragon\www\UTS-PWEB\resources\views/components/info_dashboard.blade.php ENDPATH**/ ?>