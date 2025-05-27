<div class="border-r pb-14 h-[100vh] dark:bg-[#603dc3] dark:border-slate-700/40 group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:border-slate-700/40" data-simplebar>
    <div class="p-4 block">
        <ul class="navbar-nav" id="parent-accordion" data-fc-type="accordion">

            <!-- Dashboard -->
            <li class="nav-item relative block">
                <a href="<?=BASE_URL ?>?role=admin&act=home" data-fc-type="collapse" data-fc-parent="parent-accordion"
                    class="nav-link hover:bg-transparent hover:text-black rounded-md dark:hover:text-slate-200 flex items-center decoration-0 px-3 py-3 group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200">
                    <span data-lucide="home" class="w-5 h-5 text-center text-slate-800 dark:text-slate-400 me-2"></span>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Products Group -->
            <a href="javascript:void(0)" class="nav-link hover:bg-transparent hover:text-black rounded-md dark:hover:text-slate-200 flex items-center decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200" data-fc-type="collapse" data-fc-parent="parent-accordion">
                <span data-lucide="box" class="w-5 h-5 text-center text-slate-800 dark:text-slate-400 me-2"></span>
                <span>Products and Category</span>
                <i class="icofont-thin-down ms-auto text-[14px] transition-transform duration-300 text-slate-800 dark:text-slate-400 fc-collapse-open:rotate-180"></i>
            </a>
            <div id="Products-flush" class="hidden overflow-hidden">
                <ul class="nav flex-col flex-wrap ps-0 ms-2">
                    <li class="nav-item">
                        <a href="admin-products.php" class="nav-link hover:text-primary-500 px-3 py-3 flex items-center">
                            <i class="icofont-dotted-right me-2 text-slate-600"></i> Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin-products.php" class="nav-link hover:text-primary-500 px-3 py-3 flex items-center">
                            <i class="icofont-dotted-right me-2 text-slate-600"></i> Category
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="customers-pro-details.php" class="nav-link hover:text-primary-500 px-3 py-3 flex items-center">
                            <i class="icofont-dotted-right me-2 text-slate-600"></i> Product Details
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin-add-product.php" class="nav-link hover:text-primary-500 px-3 py-3 flex items-center">
                            <i class="icofont-dotted-right me-2 text-slate-600"></i> Add New Product
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Customers Group -->
            <a href="javascript:void(0)" class="nav-link hover:bg-transparent hover:text-black rounded-md dark:hover:text-slate-200 flex items-center decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200" data-fc-type="collapse" data-fc-parent="parent-accordion">
                <span data-lucide="users" class="w-5 h-5 text-center text-slate-800 dark:text-slate-400 me-2"></span>
                <span>Customers</span>
                <i class="icofont-thin-down ms-auto text-[14px] transition-transform duration-300 text-slate-800 dark:text-slate-400 fc-collapse-open:rotate-180"></i>
            </a>
            <div id="Customers-flush" class="hidden overflow-hidden">
                <ul class="nav flex-col flex-wrap ps-0 ms-2">
                    <li class="nav-item">
                        <a href="app/views/admin/admin-customers.html" class="nav-link hover:text-primary-500 px-3 py-3 flex items-center">
                            <i class="icofont-dotted-right me-2 text-slate-600"></i> Customers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin-customers-details.php" class="nav-link hover:text-primary-500 px-3 py-3 flex items-center">
                            <i class="icofont-dotted-right me-2 text-slate-600"></i> Customers Details
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Orders Group -->
            <a href="javascript:void(0)" class="nav-link hover:bg-transparent hover:text-black rounded-md dark:hover:text-slate-200 flex items-center decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200" data-fc-type="collapse" data-fc-parent="parent-accordion">
                <span data-lucide="shopping-cart" class="w-5 h-5 text-center text-slate-800 dark:text-slate-400 me-2"></span>
                <span>Orders</span>
                <i class="icofont-thin-down ms-auto text-[14px] transition-transform duration-300 text-slate-800 dark:text-slate-400 fc-collapse-open:rotate-180"></i>
            </a>
            <div id="Orders-flush" class="hidden overflow-hidden">
                <ul class="nav flex-col flex-wrap ps-0 ms-2">
                    <li class="nav-item">
                        <a href="customers-cart.php" class="nav-link hover:text-primary-500 px-3 py-3 flex items-center">
                            <i class="icofont-dotted-right me-2 text-slate-600"></i> Cart
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="customers-checkout.php" class="nav-link hover:text-primary-500 px-3 py-3 flex items-center">
                            <i class="icofont-dotted-right me-2 text-slate-600"></i> Checkout
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mt-8 border-t pt-4">
                <a href="<?=BASE_URL ?>?role=admin&act=login" class="flex items-center px-3 py-3 text-red-500 hover:text-red-600">
                    <i class="icofont-logout me-2 text-red-500"></i>
                    <span>Sign Out</span>
                </a>
            </div>
        </ul>
    </div>
</div>