<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">

    <div class="h-10 bg-indigo-900">

    </div>
    <header class=" sticky top-0">
        <?php echo $__env->make('layout.navLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>

    <div class="container py-4 flex flex-row items-center justify-center h-screen ">
        

        
        <?php if(auth()->check()): ?>
            <div class="flex justify-center flex-col">

                    <?php $__currentLoopData = $userData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h1 class="font-thin text-2xl">
                        Email used: <?php echo e($data->email); ?>

                    </h1>
                    <br>
                    <h1 class="font-bold text-3xl">
                        Hello, <span class="font-medium"><?php echo e($data->name); ?></span>
                    </h1>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <h1 class="font-bold  text-6xl mb-10">HOME WITH AUTH</h1>

                <form action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded">
                        Logout
                    </button>
                </form>
            </div>
        <?php else: ?>
            <h1 class="font-bold  text-6xl">HOME WITHOUT AUTH</h1>

        <?php endif; ?>


    </div>

</body>

</html>






<?php /**PATH C:\xampp\htdocs\HomeIdeas\resources\views/layout/home.blade.php ENDPATH**/ ?>