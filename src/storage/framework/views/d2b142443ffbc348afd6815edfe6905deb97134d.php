<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mogitate-form</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/common.css')); ?>">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <?php echo $__env->yieldContent('css'); ?>
</head>

<body>

    <div class="app">
        <header class="header">
            <h1>mogitate</h1>
        </header>

        <div class="content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

    </div>

</body>
</html><?php /**PATH /var/www/resources/views/layouts/app.blade.php ENDPATH**/ ?>