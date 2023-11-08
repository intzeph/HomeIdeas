<?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>



<body class="bg-gray-100 font-sans">

    <div class="h-10 bg-indigo-900">

    </div>

    <header class=" sticky top-0">
        <?php echo $__env->make('layout.navLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>

    <div class="flex justify-center items-center h-screen">
        <div class="bg-white p-8 shadow-md rounded-md w-96">
            <h2 class="text-2xl font-semibold mb-4">Log In</h2>
            <form action="<?php echo e(route('loginProcess')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-4">
                    <input type="email" name="email" placeholder="Email" class="p-2 w-full border rounded-md" value="<?php echo e(old('email')); ?>">
                </div>
                <div class="mb-4">
                    <input type="password" name="password" placeholder="Password" class="p-2 w-full border rounded-md">
                </div>
                <?php if($errors->has('email')): ?>
                    <p class="text-red-500"><?php echo e($errors->first('email')); ?></p>
                <?php endif; ?>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">Log In</button>
            </form>
            <p class="text-gray-600 text-center mt-6">Forgot password? <a href="#" class="text-blue-500 hover:underline">Reset it</a></p>
            <p class="text-gray-600 text-center mt-2">Don't have an account? <a href="<?php echo e(route('register')); ?>" class="text-blue-500 hover:underline">Sign Up</a></p>
        </div>
    </div>

</body>
<?php /**PATH C:\xampp\htdocs\HomeIdeas\resources\views/user/login.blade.php ENDPATH**/ ?>