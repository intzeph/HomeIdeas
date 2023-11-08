<?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>





<body class="bg-gray-100 font-sans">

    <div class="h-10 bg-indigo-900">

    </div>

    <header class=" sticky top-0">
        <?php echo $__env->make('layout.navLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>

<div class="flex justify-center items-center h-screen mt-10">

    <div class="bg-white p-8 shadow-md rounded-md w-96 border mt-20">
        <h2 class="text-2xl font-semibold mb-4">Sign Up</h2>
        <p class="text-gray-600 mb-6">It's quick and easy.</p>
        <form action="<?php echo e(route('registerProcess')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-4">
                <input type="text" name="first_name" placeholder="First name" class="p-2 w-full border rounded-md">
            </div>
            <div class="mb-4">
                <input type="text" name="last_name" placeholder="Last name" class="p-2 w-full border rounded-md">
            </div>
            <div class="mb-4">
                <input type="email" name="email" placeholder="Email" class="p-2 w-full border rounded-md">
            </div>
            <div class="mb-4">
                <input type="email" name="contact_number" placeholder="Contact Number" class="p-2 w-full border rounded-md">
            </div>
            <div class="mb-4">
                <input type="date" name="birthdate" placeholder="Birthdate" class="p-2 w-full border rounded-md">
            </div>
            <div class="mb-4">
                <input type="password" name="password" placeholder="Password" class="p-2 w-full border rounded-md">
            </div>
            <div class="mb-4">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" class="p-2 w-full border rounded-md">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">Sign Up</button>
        </form>

        <div class="mt-3 mb-3 flex items-center justify-center">
            <h3 class="text-gray-600">Or</h3>
        </div>

        <button class="w-full site-btn" type="submit">
            <a href="<?php echo e(route('googleLogin')); ?>">
                <div class="w-full h-10 bg-white rounded-lg border border-gray-800 border-opacity-25 flex-col justify-center items-start inline-flex">
                    <div class="self-stretch h-10 px-5 py-2 flex-col justify-start items-start gap-2 flex">
                        <div class="justify-start items-center gap-2 inline-flex">
                            <div class="w-4 h-5 relative">
                                <div class="w-6 h-6 left-[-6px] top-[-1px] absolute">
                                    <div class="w-5 h-5 left-[2px] top-[2px] absolute">
                                        <img src="<?php echo e(asset('icons/google_icon.svg')); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="text-black text-base font-normal font-['Roboto'] leading-normal tracking-tight">Sign in with Google</div>
                        </div>
                    </div>
                </div>
            </a>


        </button>

        <hr class="my-4">

        <div class="text-center">
            <p class="text-gray-600">Already have an account? <a href="<?php echo e(route('login')); ?>" class="text-blue-500 hover:underline">Log In</a></p>
        </div>
    </div>
</div>

</body>
<?php /**PATH C:\xampp\htdocs\HomeIdeas\resources\views/user/register.blade.php ENDPATH**/ ?>