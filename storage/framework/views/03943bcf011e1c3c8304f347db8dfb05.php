<?php if(session()->has('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e(session('success')); ?>

    </div>
<?php elseif(session()->has('error')): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>
<?php /**PATH /Users/ephesiansprismaranatha/Documents/Backup/poliklink-bengkel-koding-main/resources/views/Layout/login-alert.blade.php ENDPATH**/ ?>