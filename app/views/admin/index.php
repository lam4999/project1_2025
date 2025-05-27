<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">

<!-- Mirrored from mannatthemes.com/robotech/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 May 2025 12:34:18 GMT -->
<style>
    .main-sidebar {
        width: 250px;
        position: fixed;
        left: 0;
        top: 0;
        z-index: 99;
        transition: left 0.3s;
    }

    .main-header,
    .main-content,
    .main-footer {
        margin-left: 250px;
        transition: margin-left 0.3s;
    }

    body.sidebar-closed .main-sidebar {
        left: -250px;
    }

    body.sidebar-closed .main-header,
    body.sidebar-closed .main-content,
    body.sidebar-closed .main-footer {
        margin-left: 0;
    }
</style>

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

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="min-h-screen flex flex-col bg-[#EEF0FC] dark:bg-gray-900">

    <!-- leftbar-tab-menu -->

    <div class="min-h-full z-[99] fixed inset-y-0 print:hidden bg-gradient-to-t from-[#6f3dc3] from-10% via-[#603dc3] via-40% to-[#5c3dc3] to-100% dark:bg-[#603dc3] main-sidebar duration-300 group-data-[sidebar=dark]:bg-[#603dc3] group-data-[sidebar=brand]:bg-brand group-[.dark]:group-data-[sidebar=brand]:bg-[#603dc3]">
        <!-- Logo -->
        <?php include_once './app/views/admin/layout/logo.php'; ?>
        <!-- Sidebar -->
        <?php include_once './app/views/admin/layout/sidebar.php'; ?>
    </div>

    <!-- Header-Board -->
    <div class="main-header transition-all duration-300">
        <?php include_once './app/views/admin/layout/header-board.php'; ?>
    </div>
    <!-- Header-Board -->

    <!-- Page Content -->
    <div class="main-content transition-all duration-300">
        <!-- Nội dung trang ở đây -->
        <div class="p-8">
            <br>
            <br>
            <br>
            <br>
            <h1 class="text-2xl font-bold ml-5">Dashboard</h1>
            <div class="active  p-4 bg-gray-50 rounded-lg dark:bg-gray-800/40 ml-5" id="all" role="tabpanel" aria-labelledby="all-tab">
                <div class="grid grid-cols-1 p-0 md:p-4">
                    <div class="sm:-mx-6 lg:-mx-8">
                        <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                            <table class="w-full">
                                <thead class="bg-gray-50 dark:bg-gray-700/20">
                                    <tr>
                                        <th scope="col" class="p-3">
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                            ID
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                            Name
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                            Phone
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                            Email
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                            Address
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- 1 -->
                                    <?php foreach ($dataUsers as $key => $value):  ?>
                                        <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                            <td class="w-4 p-4">
                                            </td>
                                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                <div class="flex items-center">
                                                    <div class="self-center">
                                                        <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400"></h5>
                                                        <span class="block font-medium text-slate-500"><?= $key + 1 ?></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <?= $value->ten ?>
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <?= $value->sdt ?>
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <?= $value->email ?>
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <?= $value->diachi ?>
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <a href="#"><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div><!--end div-->
                    </div><!--end div-->
                </div><!--end grid-->
            </div>
        </div>
    </div>
    <!-- Page Content -->

    <!-- Footer -->
    <div class="main-footer transition-all duration-300 ml-0">
        <?php include_once './app/views/admin/layout/footer.php'; ?>
    </div>
    <!-- Footer -->

    <!-- JAVASCRIPTS -->
    <script src="assets/admin/libs/lucide/umd/lucide.min.js"></script>
    <script src="assets/admin/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/admin/libs/flatpickr/flatpickr.min.js"></script>
    <script src="assets/admin/js/app.js"></script>
    <script>
        document.getElementById('toggle-menu-hide').addEventListener('click', function() {
            document.body.classList.toggle('sidebar-closed');
        });
        document.querySelectorAll('[data-fc-type="collapse"]').forEach(function(toggle) {
            toggle.addEventListener('click', function() {
                var next = toggle.nextElementSibling;
                if (next && next.classList.contains('overflow-hidden')) {
                    next.classList.toggle('hidden');
                }
            });
        });
    </script>
    <!-- JAVASCRIPTS -->
</body>

<!-- Mirrored from mannatthemes.com/robotech/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 May 2025 12:34:56 GMT -->

</html>