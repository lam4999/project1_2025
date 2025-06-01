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
    <title></title>
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
   <!-- Page Content -->
<div class="main-content transition-all duration-300 pt-10 px-4 sm:px-8 min-h-screen flex justify-center items-start">
  <div class="bg-white rounded-xl shadow-xl p-8 w-full max-w-xl">
    <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center"> Chỉnh Sửa Người Dùng</h2>

    <form action=" <?= BASE_URL ?>?role=admin$act=update-post-user&id=<?= $_GET['id']?>" method="POST" class="space-y-6" enctype="multipart/form-data">
      <!-- Name (required) -->
      <div>
        <label for="ten" class="block text-sm font-medium text-gray-700 mb-2">Tên <span class="text-red-500">*</span></label>
        <input type="text" id="ten" name="ten" maxlength="50" required placeholder="Nhập tên"
          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?=$user->ten ?>">
      </div>

      <!-- Email (required) -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email <span class="text-red-500">*</span></label>
        <input type="email" id="email" name="email" maxlength="50" required placeholder="Nhập email"
          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?=$user->email ?>">
      </div>

      <!-- Mật khẩu (required) -->
      <div>
        <label for="matkhau" class="block text-sm font-medium text-gray-700 mb-2">Mật khẩu <span class="text-red-500">*</span></label>
        <input type="password" id="matkhau" name="matkhau" maxlength="300" required placeholder="Nhập mật khẩu"
          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Địa chỉ (optional) -->
      <div>
        <label for="diachi" class="block text-sm font-medium text-gray-700 mb-2">Địa chỉ</label>
        <input type="text" id="diachi" name="diachi" maxlength="255" placeholder="Nhập địa chỉ"
          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?=$user->diachi ?>">
      </div>

      <!-- Số điện thoại (required) -->
      <div>
        <label for="sdt" class="block text-sm font-medium text-gray-700 mb-2">Số điện thoại <span class="text-red-500">*</span></label>
        <input type="text" id="sdt" name="sdt" maxlength="10" pattern="\d{10}" required placeholder="Nhập số điện thoại 10 số"
          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?=$user->sdt ?>">
      </div>

      <!-- Ảnh đại diện (required) -->
      <div>
        <label for="anh" class="block text-sm font-medium text-gray-700 mb-2">Ảnh đại diện (URL) <span class="text-red-500">*</span></label>
        <img src="<$user->anh ?>" alt="" width="50">
        <input type="file" id="anh" name="anh" maxlength="255" required placeholder="Nhập URL hình ảnh"
          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Role (required) -->
      <div>
        <label for="role" class="block text-sm font-medium text-gray-700 mb-2">Vai trò <span class="text-red-500">*</span></label>
        <select id="role" name="role" required
          class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option value="1"
          <?php
          if($user->role == "1"){
            echo "selected";
          }?>
          >-- Chọn vai trò --</option>
          <option value="2" 
           <?php
          if($user->role == "1"){
            echo "selected";
          }?>
          >Người dùng</option>
          <option value="1">Quản trị viên</option>
        </select>
      </div>

      <!-- Submit -->
      <div class="pt-4 text-center">
        <button type="submit"
          class="bg-blue-700 hover:bg-blue-700 text-white font-semibold py-2.5 px-8 rounded-lg shadow-md transition-all duration-300">
          Chinh sua
        </button>
      </div>
    </form>
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