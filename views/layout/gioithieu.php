<?php require_once 'header.php' ?>
<?php require_once 'menu.php' ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới Thiệu </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <header class="bg-indigo-700 text-white py-4 text-center text-2xl font-bold">
        Giới Thiệu Về TrendingShop
    </header>
    <div class="container mx-auto p-6 max-w-4xl bg-white shadow-lg rounded-lg mt-6">
        <h2 class="text-3xl font-bold text-indigo-600 text-center">Chào Mừng Đến Với TrendingShop</h2>
        <p class="mt-4 text-gray-700 text-lg text-center">TrendingShop là thương hiệu thời trang hiện đại, cung cấp quần áo phong cách, chất lượng cao phù hợp với giới trẻ và mọi dịp trong cuộc sống.</p>
        
        <div class="flex justify-center mt-6">
            <img src="./img/logo.png" alt="Thời trang" class="w-full rounded-lg shadow">
        </div>
        
        <section class="mt-6">
            <h3 class="text-2xl font-semibold text-indigo-500">Sứ Mệnh Của Chúng Tôi</h3>
            <p class="text-gray-600 mt-2">TrendingShop mang đến những sản phẩm thời trang độc đáo, thoải mái và hợp xu hướng. Chúng tôi tin rằng thời trang là cách thể hiện cá tính và sự tự tin của bạn.</p>
        </section>
        
        <section class="mt-6">
            <h3 class="text-2xl font-semibold text-indigo-500">Danh Mục Sản Phẩm</h3>
            <ul class="list-disc pl-6 text-gray-600">
                <li>Áo thun, sơ mi, hoodie đa phong cách</li>
                <li>Quần jeans, kaki, váy thiết kế trẻ trung</li>
                <li>Phụ kiện thời trang: túi xách, mũ, kính</li>
            </ul>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
                <img src="./uploads/1749619902sp2.jpeg" alt="Sản phẩm 1" class="w-full rounded-lg shadow">
                <img src="./uploads/1749619902sp2.jpeg" alt="Sản phẩm 2" class="w-full rounded-lg shadow">
            </div>
        </section>
        
        <section class="mt-6">
            <h3 class="text-2xl font-semibold text-indigo-500">Liên Hệ Với Chúng Tôi</h3>
            <p class="text-gray-600">Mọi thắc mắc xin vui lòng liên hệ qua:</p>
            <p class="mt-2 font-semibold">📧 Email: support@fwear.com</p>
            <p class="font-semibold">📞 Hotline: 0909-123-456</p>
        </section>
    </div>
</body>
</html>
