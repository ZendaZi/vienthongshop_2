<nav class="fixed top-0 z-50 w-full border-b border-gray-200 bg-blue-800 dark:border-gray-700 dark:bg-gray-800">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between ">
            <div class="flex items-center justify-start">
                <a href="" class="ml-2 flex md:mr-24">
                    <img src="public/icon.jpg" class="mr-3 h-8" alt="icon" />
                    <span
                        class="self-center whitespace-nowrap text-xl font-semibold text-white dark:text-blue-500 xs:text-xs sm:text-sm lg:text-lg">SIÊU THỊ VIỄN THÔNG</span>
                </a>
            </div>
            <div class="flex items-center w-full md:flex md:w-auto md:order-1">
                <div class="ml-auto flex items-center">
                    <div>
                        <button type="button"
                            class="md:ml-72 sm:ml-72  flex rounded-full text-white bg-white text-sm focus:ring-4 focus:ring-white dark:focus:ring-white"
                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Mở menu</span>
                            <img class="h-8 w-8 rounded-full" src="public/member.png" alt="user photo" />
                        </button>
                    </div>
                    <div class="z-70 my-4 hidden list-none divide-y divide-gray-100 rounded bg-white text-base shadow dark:divide-gray-600 dark:bg-gray-700"
                        id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-gray-900 dark:text-white" role="none">
                              Xin chào admin!
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <form action="{{ url('logout_form') }}" method="post">
                                    @csrf
                                    <input type="hidden" id="ID_LOG" name="ID_LOG"
                                        value="{{ session()->get('IDlog') }}">
                                    <button type="submit"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Đăng xuất</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button data-collapse-toggle="navbar-default" type="button"
        class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <nav class=" bg-blue-600 dark:bg-gray-700">
            <div class="max-w-screen-2xl  lg:py-3  mx-auto">
                <div class="flex items-center justify-center">
                    <ul class="flex flex-row font-medium mt-0 mr-6 space-x-8 text-sm">
                        <li>
                            <a href="quanly" class="text-white dark:text-black hover:bg-blue-800"
                                aria-current="page">Trang chủ</a>
                        </li>
                        <li>
                            <a href="quanlysp" class="text-white dark:text-black hover:bg-blue-800"
                                aria-current="page">Quản lý sản phẩm</a>
                        </li>
                        <li>
                            <a href="quanlydh" class="text-white dark:text-black hover:bg-blue-800"
                                aria-current="page">Quản lý đơn hàng</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
</nav>
</div>
