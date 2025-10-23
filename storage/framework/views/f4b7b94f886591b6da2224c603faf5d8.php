<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PWEB - <?php echo $__env->yieldContent('title', 'Login'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-teal { background-color: #004d40 !important; }
        .text-gold { color: #ffd700 !important; }
        .btn-teal { background-color: #004d40; border-color: #004d40; color: white; }
        .btn-teal:hover { background-color: #00897b; border-color: #00897b; }
    </style>
</head>
<body class="bg-teal d-flex align-items-center justify-content-center min-vh-100">

    <main class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\laragon\www\UTS-PWEB\resources\views/layouts/guest.blade.php ENDPATH**/ ?>