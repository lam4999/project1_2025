<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">

<!-- Mirrored from mannatthemes.com/robotech/default/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 May 2025 12:36:06 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Robotech - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="Mannatthemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/admin/images/favicon.ico" />

    <!-- Css -->
    <!-- Main Css -->
    <link rel="stylesheet" href="assets/admin/libs/icofont/icofont.min.css">
    <link href="assets/admin/libs/flatpickr/flatpickr.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="assets/admin/css/tailwind.min.css">

</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="bg-[#EEF0FC] dark:bg-gray-900">

    <div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
        <div class="w-full  m-auto bg-white dark:bg-slate-800/60 rounded shadow-lg ring-2 ring-slate-300/50 dark:ring-slate-700/50 lg:max-w-md">
            <div class="text-center p-6 bg-slate-900 rounded-t">
                <a href="index.html"><img src="assets/admin/images/logo-sm.png" alt="" class="w-14 h-14 mx-auto mb-2"></a>
                <h3 class="font-semibold text-white text-xl mb-1">Let's Get Started Robotech</h3>
                <p class="text-xs text-slate-400">Sign in to continue to Robotech.</p>
            </div>
            <div class="error">
                <?php if (isset($_SESSION['error'])) : ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline"><?= $_SESSION['error'] ?></span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-red-500" role="button" onclick="this.parentElement.parentElement.remove();">
                                <use xlink:href="#icon-close"></use>
                            </svg>
                        </span>
                    </div>
                    <?php unset($_SESSION['error']); ?>
                <?php endif; ?>
            </div>
            <form class="p-6" action="<?= BASE_URL ?>?role=admin&act=post-login" method="POST">

                <div>
                    <label for="email" class="font-medium text-sm text-slate-600 dark:text-slate-400">Email</label>
                    <input type="email" name="email" id="email" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Your Email" required>
                </div>
                <div class="mt-4">
                    <label for="matkhau" class="font-medium text-sm text-slate-600 dark:text-slate-400">Your password</label>
                    <input type="matkhau" name="matkhau" id="matkhau" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Password" required>
                </div>
                <a href="#" class="text-xs font-medium text-brand-500 underline ">Forget Password?</a>
                <div class="block mt-3">
                    <label class="custom-label block dark:text-slate-300">
                        <div class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-4 h-4  inline-block leading-4 text-center -mb-[3px]">
                            <input type="checkbox" class="hidden">
                            <i class="fas fa-check hidden text-xs text-slate-700 dark:text-slate-200"></i>
                        </div>
                        Remember me
                    </label>
                </div>
                <div class="mt-4">
                    <button
                        class="w-full px-2 py-2 tracking-wide text-white transition-colors duration-200 transform bg-brand-500 rounded hover:bg-brand-600 focus:outline-none focus:bg-brand-600">
                        Login
                    </button>
                </div>
            </form>
            <p class="mb-5 text-sm font-medium text-center text-slate-500"> Don't have an account? <a href="auth-register.html"
                    class="font-medium text-brand-500 hover:underline">Sign up</a>
            </p>
        </div>
    </div>


    <!-- JAVASCRIPTS -->
    <!-- <div class="menu-overlay"></div> -->
    <script src="assets/admin/libs/lucide/umd/lucide.min.js"></script>
    <script src="assets/admin/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/admin/libs/flatpickr/flatpickr.min.js"></script>
    <script src="assets/admin/libs/%40frostui/tailwindcss/frostui.js"></script>

    <script src="assets/admin/js/app.js"></script>
    <!-- JAVASCRIPTS -->
</body>

<!-- Mirrored from mannatthemes.com/robotech/default/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 May 2025 12:36:06 GMT -->

</html>