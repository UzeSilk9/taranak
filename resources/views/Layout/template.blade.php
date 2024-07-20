<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('dist/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/all.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"></script>
    <title> @yield('title') </title>
</head>

<body>
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
    <div class="flex justify-between">
        <div class="p-1 mx-3 inline-flex items-center">
            <svg id="sidebarToggleBtn" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white cursor-pointer" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <h1 class="text-white p-2">Logo</h1>
        </div>
        <div class="p-1 flex flex-row items-center">
            <a href="https://github.com/tailwindadmin/admin" class="text-white p-2 mr-2 no-underline hidden sm:block">Github</a>
            <img id="profileToggleBtn" class="inline-block h-8 w-8 rounded-full cursor-pointer" src="https://avatars0.githubusercontent.com/u/4323180?s=460&v=4" alt="">
            <a href="#" id="profileToggleBtnText" class="text-white p-2 no-underline hidden sm:block cursor-pointer">Taranak</a>
            <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute mt-12 right-0">
                <ul class="list-reset">
                    <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Akun Saya</a></li>
                    <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Notifikasi</a></li>
                    <li><hr class="border-t mx-2 border-grey-light"></li>
                    <li><a href="{{ route('logout') }}" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Keluar</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- Tambahkan sidebar untuk contoh -->
<div id="sidebar" class="hidden bg-gray-800 text-white w-64 h-full fixed inset-y-0 left-0 transform -translate-x-full transition-transform duration-200">
    <!-- Isi sidebar -->
</div>

        
        <!--/Header-->

        <div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">
                <ul class="list-reset flex flex-col">
                    <li class="w-full h-full py-3 px-2 border-b border-light-border bg-white">
                        <a href="{{ route('dashboard') }}" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-tachometer-alt float-left mx-2"></i>
                            Dashboard
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border" x-data="{ isPagesMenuOpen: false }">
                        <a href="#" @click="isPagesMenuOpen = !isPagesMenuOpen" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline flex justify-between">
                            <span>
                                <i class="far fa-file float-left mx-2"></i>
                                Tabel
                            </span>
                            <i :class="{'fa-angle-down': !isPagesMenuOpen, 'fa-angle-up': isPagesMenuOpen}" class="fa"></i>
                        </a>
                        <template x-if="isPagesMenuOpen">
                            <ul
                                x-transition:enter="transition-all ease-in-out duration-300"
                                x-transition:enter-start="opacity-0 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-xl"
                                x-transition:leave="transition-all ease-in-out duration-300"
                                x-transition:leave-start="opacity-100 max-h-xl"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="list-reset -mx-2 bg-white-medium-dark p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner"
                                aria-label="submenu"
                            >
                                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a href="{{ route('hewan') }}" class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                        Data Hewan
                                        <span><i class="fa fa-angle-right float-right"></i></span>
                                    </a>
                                </li>
                                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a href="register.html" class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                        Data Peternak
                                        <span><i class="fa fa-angle-right float-right"></i></span>
                                    </a>
                                </li>
                                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a href="{{ route('jenis') }}" class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                        Data Jenis Hewan
                                        <span><i class="fa fa-angle-right float-right"></i></span>
                                    </a>
                                </li>
                                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a href="404.html" class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                        Data Riwayat Medis Hewan
                                        <span><i class="fa fa-angle-right float-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </template>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="tables.html" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-table float-left mx-2"></i>
                            Tables
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="ui.html" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-uikit float-left mx-2"></i>
                            Ui components
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-300-border">
                        <a href="modals.html" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-square-full float-left mx-2"></i>
                            Modals
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                </ul>
            </aside>
            <!--/Sidebar-->
            
            @yield('content')    

        </div>
        <!--Footer-->
        <footer class="bg-grey-darkest text-white p-2">
            <div class="flex flex-1 mx-auto">&copy; My Design</div>
            <div class="flex flex-1 mx-auto">Distributed by:  <a href="https://themewagon.com/" target=" _blank">Themewagon</a></div>
        </footer>
        <!--/footer-->

    </div>

  <!-- Example modal structure -->
  <div id="exampleModal" class="modal-wrapper hidden">
    <div class="modal-content">
        <button class="close-modal">Close</button>
        <!-- Modal content -->
    </div>
</div>

</div>
<script src="main.js"></script>
</body>

</html>
