<!DOCTYPE html>
<html data-theme="dark" lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<meta charset="UTF-8">
<title><?php echo e(config('app.name', 'Laravel')); ?></title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<head>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>

<body class="mx-auto bg-base-100">
    
    <?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main class="py-4 mx-[10%]">
        
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    @livewireScripts

</body>
</html>
<?php /**PATH /Users/erwinyuen/Herd/Laravel_Dynamic-main/resources/views/layouts/default.blade.php ENDPATH**/ ?>