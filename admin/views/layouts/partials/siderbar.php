<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"><!--begin::Sidebar Brand-->
    <div class="sidebar-brand"><!--begin::Brand Link--><a href="<?= BASE_URL_ADMIN ?>" class="brand-link"><!--begin::Brand Image--><img src="<?= BASE_URL ?>assets/admin/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"><!--end::Brand Image--><!--begin::Brand Text--><span class="brand-text fw-light">AdminLTE 4</span><!--end::Brand Text--></a><!--end::Brand Link--></div><!--end::Sidebar Brand--><!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"><!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-table"></i>
                        <p>
                            Tables
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= BASE_URL_ADMIN . '?act=danh-muc' ?>" class="nav-link"><i class="nav-icon bi bi-circle"></i>
                                <p>Danh mục</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= BASE_URL_ADMIN . '?act=san-pham' ?>" class="nav-link"><i class="nav-icon bi bi-circle"></i>
                                <p>Sản phẩm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= BASE_URL_ADMIN . '?act=don-hang' ?>" class="nav-link"><i class="nav-icon bi bi-circle"></i>
                                <p>Quản lý đơn hàng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= BASE_URL_ADMIN . '?act=users' ?>" class="nav-link"><i class="nav-icon bi bi-circle"></i>
                                <p>Users</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!--end::Sidebar Menu-->
        </nav>
    </div><!--end::Sidebar Wrapper-->
</aside>