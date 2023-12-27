<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" data-bs-toggle="sidebar" aria-expanded="false">
                        <i class="mdi mdi-receipt"></i>
                        <span class="hide-menu">Quan ly danh muc</span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.category.index') }}" class="sidebar-link">
                                <i class="fas fa-book"></i>
                                <span class="hide-menu"> Danh sach danh muc</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.category.create') }}" class="sidebar-link">
                                <i class="mdi mdi-note-plus"></i>
                                <span class="hide-menu"> Them danh muc moi</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-book"></i>
                        <span class="hide-menu">Quan ly san pham </span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.product.index') }}" class="sidebar-link">
                                <i class="fas fa-book"></i>
                                <span class="hide-menu"> Danh sach san pham</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.product.create') }}" class="sidebar-link">
                                <i class="mdi mdi-note-outline"></i>
                                <span class="hide-menu"> Them san pham moi</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-account-edit"></i>
                        <span class="hide-menu">Quan ly tai khoan </span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.adminuser.index') }}" class="sidebar-link">
                                <i class="f fas fa-address-card"></i>
                                <span class="hide-menu"> Danh sanh tai khoan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('get.register') }}" class="sidebar-link">
                                <i class=" fas fa-user-plus"></i>
                                <span class="hide-menu"> Them tai khoan</span>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>


