@php
$usr = Auth::guard('web')->user();
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('backend/index3.html')}}" class="brand-link">
        <img src="{{asset('backend/dist/img/hsbl.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">HSBLCO</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" />
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                @if ($usr->can('dashboard.view'))
                <li class="nav-item {{ Route::is('general.index') || Route::is('general.create') || Route::is('general.edit')  ? 'menu-open' : null }} ">
                    <a href="#" class="nav-link {{ Route::is('general.index') || Route::is('general.create') || Route::is('general.edit')  ? 'active' : null }} ">
                        <!-- <i class="nav-icon fas fa-solid fa-user"></i> -->
                        <i class="nav-icon fa fa-info-circle" aria-hidden="true"></i>
                        <p>
                            General Info
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('general.create')}}" class="nav-link {{ Route::is('general.create') ? 'active' : 'null' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add</p>
                            </a>
                        </li>
                        {{--<li class="nav-item ">
                            <a href="{{route('general.index')}}" class="nav-link {{ Route::is('general.edit') ? 'active' : 'null' }} ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Info List</p>
                        </a>
                </li>--}}
            </ul>
            </li>
            <li class="nav-item {{ Route::is('user.index') || Route::is('user.create') || Route::is('user.edit')  ? 'menu-open' : null }} ">
                <a href="#" class="nav-link {{ Route::is('user.index') || Route::is('user.create') || Route::is('user.edit')  ? 'active' : null }} ">
                    <!-- <i class="nav-icon fas fa-solid fa-user"></i> -->
                    <i class="nav-icon fas fa-users mr-2"></i>
                    <p>
                        Users
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('user.create')}}" class="nav-link {{ Route::is('user.create') ? 'active' : 'null' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{route('user.index')}}" class="nav-link {{ Route::is('user.index') ? 'active' : 'null' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>User List</p>
                        </a>
                    </li>
                </ul>
            </li>
            @endif
            @if ($usr->can('role.create') || $usr->can('role.view') || $usr->can('role.edit') || $usr->can('role.delete'))
            <li class="nav-item {{ Route::is('role.index') || Route::is('role.create') || Route::is('role.edit')  ? 'menu-open' : null }} ">
            <a href="#" class="nav-link {{ Route::is('role.index') || Route::is('role.create') || Route::is('role.edit')  ? 'active' : null }}">
                <i class="nav-icon fas fa-users mr-2"></i>
                <p>
                    Roles & Permissions
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @if ($usr->can('role.create'))
                <li class="nav-item">
                    <a href="{{route('role.create')}}" class="nav-link {{ Route::is('role.create') ? 'active' : 'null' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add</p>
                    </a>
                </li>
                @endif
                @if ($usr->can('role.view'))
                <li class="nav-item">
                    <a href="{{route('role.index')}}" class="nav-link {{ Route::is('role.index') || Route::is('role.edit') ? 'active' : null }} ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Roles</p>
                    </a>
                </li>
                @endif
            </ul>
            </li>
            @endif
            <li class="nav-item {{ Route::is('branch.index') || Route::is('branch.create') || Route::is('branch.edit')  ? 'menu-open' : null }} ">
                <a href="#" class="nav-link {{ Route::is('branch.index') || Route::is('branch.create') || Route::is('branch.edit')  ? 'active' : null }} ">
                    <!-- <i class="nav-icon fas fa-solid fa-user"></i> -->
                    <i class="nav-icon fas fa-solid fa-code-branch"></i>
                    <p>
                        Resort
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('branch.create')}}" class="nav-link {{ Route::is('branch.create') ? 'active' : 'null' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{route('branch.index')}}" class="nav-link {{ Route::is('branch.index') ? 'active' : 'null' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Resort List</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ Route::is('branch_message.index') || Route::is('branch_message.create') || Route::is('branch_message.edit')  ? 'menu-open' : null }} ">
                <a href="#" class="nav-link {{ Route::is('branch_message.index') || Route::is('branch_message.create') || Route::is('branch_message.edit')  ? 'active' : null }} ">
                    <!-- <i class="nav-icon far fa-regular fa-message"></i> -->
                    <i class="nav-icon fas fa-regular fa-envelope"></i>
                    <p>
                        Contact Message
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    {{--<li class="nav-item">
                        <a href="{{route('branch_message.create')}}" class="nav-link {{ Route::is('branch_message.create') ? 'active' : 'null' }} ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add</p>
                    </a>
            </li>--}}
            <li class="nav-item ">
                <a href="{{route('branch_message.index')}}" class="nav-link {{ Route::is('branch_message.index') ? 'active' : 'null' }} ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Message List</p>
                </a>
            </li>
            </ul>
            </li>

            <li class="nav-item {{ Route::is('branchslider.index') || Route::is('branchslider.create') || Route::is('branchslider.edit')  ? 'menu-open' : null }} ">
                <a href="#" class="nav-link {{ Route::is('branchslider.index') || Route::is('branchslider.create') || Route::is('branchslider.edit')  ? 'active' : null }} ">
                    <i class="nav-icon fa fa-solid fa-sliders">S</i>
                    <!-- <i class="nav-icon fas fa-users mr-2"></i> -->
                    <p>
                        Resort Slider
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('branchslider.create')}}" class="nav-link {{ Route::is('branchslider.create') ? 'active' : 'null' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{route('branchslider.index')}}" class="nav-link {{ Route::is('branchslider.index') ? 'active' : 'null' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ Route::is('facility.index') || Route::is('facility.create') || Route::is('facility.edit')  ? 'menu-open' : null }} ">
                <a href="#" class="nav-link {{ Route::is('facility.index') || Route::is('facility.create') || Route::is('facility.edit')  ? 'active' : null }} ">
                    <i class="nav-icon fas fa-solid fa-house-medical">F</i>
                    <p>
                        Facility
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('facility.create')}}" class="nav-link {{ Route::is('facility.create') ? 'active' : 'null' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{route('facility.index')}}" class="nav-link {{ Route::is('facility.index') ? 'active' : 'null' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ Route::is('main_address.index') || Route::is('main_address.create') || Route::is('main_address.edit')  ? 'menu-open' : null }} ">
                <a href="#" class="nav-link {{ Route::is('main_address.index') || Route::is('main_address.create') || Route::is('main_address.edit')  ? 'active' : null }} ">
                    <i class="nav-icon fas fa-regular fa-address-book"></i>
                    <p>
                        Main Address
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('main_address.create')}}" class="nav-link {{ Route::is('main_address.create') ? 'active' : 'null' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{route('main_address.index')}}" class="nav-link {{ Route::is('main_address.index') ? 'active' : 'null' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ Route::is('main_slider.index') || Route::is('main_slider.create') || Route::is('main_slider.edit')  ? 'menu-open' : null }} ">
                <a href="#" class="nav-link {{ Route::is('main_slider.index') || Route::is('main_slider.create') || Route::is('main_slider.edit')  ? 'active' : null }} ">
                    <i class="nav-icon fa fa-solid fa-sliders">S</i>
                    <p>
                        Main Sliders
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('main_slider.create')}}" class="nav-link {{ Route::is('main_slider.create') ? 'active' : 'null' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{route('main_slider.index')}}" class="nav-link {{ Route::is('main_slider.index') ? 'active' : 'null' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ Route::is('offer.index') || Route::is('offer.create') || Route::is('offer.edit')  ? 'menu-open' : null }} ">
                <a href="#" class="nav-link {{ Route::is('offer.index') || Route::is('offer.create') || Route::is('offer.edit')  ? 'active' : null }} ">
                    <i class="nav-icon fas fa-regular fa-envelope"></i>
                    <p>
                        Offer
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('offer.create')}}" class="nav-link {{ Route::is('offer.create') ? 'active' : 'null' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{route('offer.index')}}" class="nav-link {{ Route::is('offer.index') ? 'active' : 'null' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ Route::is('room.index') || Route::is('room.create') || Route::is('room.edit')  ? 'menu-open' : null }} ">
                <a href="#" class="nav-link {{ Route::is('room.index') || Route::is('room.create') || Route::is('room.edit')  ? 'active' : null }} ">
                    <i class="nav-icon fas fa-solid fa-person-booth"></i>
                    <p>
                        Room
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('room.create')}}" class="nav-link {{ Route::is('room.create') ? 'active' : 'null' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{route('room.index')}}" class="nav-link {{ Route::is('room.index') ? 'active' : 'null' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List</p>
                        </a>
                    </li>
                </ul>
            </li>

            {{--<li class="nav-item {{ Route::is('room_photo.index') || Route::is('room_photo.create') || Route::is('room_photo.edit')  ? 'menu-open' : null }} ">
            <a href="#" class="nav-link {{ Route::is('room_photo.index') || Route::is('room_photo.create') || Route::is('room_photo.edit')  ? 'active' : null }} ">
                <!-- <i class="nav-icon fas fa-solid fa-user"></i> -->
                <i class="nav-icon fas fa-users mr-2"></i>
                <p>
                    Room Photo
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('room_photo.create')}}" class="nav-link {{ Route::is('room_photo.create') ? 'active' : 'null' }} ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{route('room_photo.index')}}" class="nav-link {{ Route::is('room_photo.index') ? 'active' : 'null' }} ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List</p>
                    </a>
                </li>
            </ul>
            </li>--}}
            {{--<li class="nav-item {{ Route::is('wash.income') || Route::is('product.income') || Route::is('product.summery') || Route::is('product.dateWise') || Route::is('wash.summery') || Route::is('wash.dateWise') || Route::is('expense.summery') || Route::is('expense.dateWise') ? 'menu-open' : null }} ">
            <a href="#" class="nav-link {{ Route::is('wash.income') || Route::is('product.income') || Route::is('product.dateWise') || Route::is('wash.summery') || Route::is('wash.dateWise')|| Route::is('expense.summery') || Route::is('expense.dateWise') ? 'active' : null }}">
                <i class="nav-icon fas fa-solid fa-wallet"></i>
                <p>
                    Report
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('wash.income')}}" class="nav-link {{ Route::is('wash.income') ? 'active' : null }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Car Wash All</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('wash.summery')}}" class="nav-link {{ Route::is('wash.summery') || Route::is('wash.dateWise') ? 'active' : null }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Car Wash Summery</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('product.income')}}" class="nav-link {{  Route::is('product.income') ? 'active' : null }} ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Product Sale All</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('product.summery')}}" class="nav-link {{  Route::is('product.summery') || Route::is('product.dateWise') ? 'active' : null }} ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Product Sale Summery</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('expense.summery')}}" class="nav-link {{  Route::is('expense.summery') || Route::is('expense.dateWise') ? 'active' : null }} ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Total Expense</p>
                    </a>
                </li>
            </ul>
            </li>--}}

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>