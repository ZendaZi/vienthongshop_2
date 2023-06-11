<!DOCTYPE html>
@include('header')
<body>
   

    <div class="app">
        {{-- <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xl-8">
                            <div class="header__top-left">
                                <div class="header__top-info">
                                    <span><i class="ri-map-pin-line"></i></span>
                                    <p>Đ. 3/2, P. Xuân Khánh, Q. Ninh Kiều, TP. CT</p>
                                </div>
                                <div class="d-flex gap-3">
                                    <div class="header__top-info">
                                        <span><i class="ri-mail-send-line"></i></span>
                                        <a href="mailto:linhdi21v7x013@dttx.ctu.edu.vn">linhdi21v7x013@dttx.ctu.edu.vn </a>
                                    </div>
                                    <div class="header__top-info">
                                        <span><i class="ri-phone-fill"></i></span>
                                        <a href="#">0932 850 695</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-xl-4">
                            <ul class="header__top-right">
                                <li><a href="#">Giới thiệu</a></li>
                                <li><a href="#">Sơ đồ đường đi</a></li>
                                <li><a href="#">Chính sách</a></li>
                                <li><a href="#">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header__middle">
                <div class="container">
                    <div class="row">
                        <div class="col-3 show__menu-mobile">
                            <div class="menu__icon">
                                <i class="ri-menu-fill"></i>
                            </div>
                        </div>
                        <div class="col-lg-3 col-5">
                            <a href="" class="logo">
                                <img src="./public/frontend/images/logo.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-7 search">
                            <div class="search__box">
                                <input type="text" placeholder="Tìm sản phẩm">
                                <button class="search__btn"><i class="ri-search-line"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-2 col-4">
                            <ul class="social__links">
                                <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                                <li><a href="#"><i class="ri-twitter-fill"></i></a></li>
                                <li><a href="#"><i class="ri-linkedin-fill"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="header__bottom">
                <div class="container">
                    <div class="navigation">
                        <div class="nav__item">
                            <a href="#" class="nav__links">Trang chủ</a>
                        </div>
                        <div class="nav__item">
                            <a href="#" class="nav__links">Giới thiệu</a>
                        </div>
                        <div class="nav__item">
                            <a href="#" class="nav__links">Dịch vụ</a>
                        </div>
                        <div class="nav__item">
                            <a href="#" class="nav__links">Khuyễn mãi</a>
                        </div>
                        <div class="nav__item">
                            <a href="#" class="nav__links">Hỗ trợ</a>
                        </div>
                        <div class="nav__item">
                            <a href="#" class="nav__links">Sơ đồ đường đi</a>
                        </div>
                        <div class="nav__item">
                            <a href="#" class="nav__links">Đại lý</a>
                        </div>
                        <div class="nav__item">
                            <a href="#" class="nav__links">Liên hệ</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu__mobile">
                <form action="" method="post">
                    <div class="search__mobile">
                        <input type="text" name="keyword" placeholder="Tìm kiếm..." required>
                        <button type="submit" class="search__mobile-btn"><i class="ri-search-2-line"></i></button>
                    </div>
                </form>
                <a href="#" class="menu__mobile-nav">
                    <div class="menu__mobile-title">
                        <span>Trang chủ</span>
                    </div>
                    <span class="menu__mobile-nav-icon"><i class="ri-arrow-right-fill"></i></span>
                </a>
                <a href="#" class="menu__mobile-nav">
                    <div class="menu__mobile-title">
                        <span>Giới thiệu</span>
                    </div>
                    <span class="menu__mobile-nav-icon"><i class="ri-arrow-right-fill"></i></span>
                </a>
                <a href="#" class="menu__mobile-nav">
                    <div class="menu__mobile-title">
                        <span>Dịch vụ</span>
                    </div>
                    <span class="menu__mobile-nav-icon"><i class="ri-arrow-right-fill"></i></span>
                </a>
                <a href="#" class="menu__mobile-nav">
                    <div class="menu__mobile-title">
                        <span>Khuyến mãi</span>
                    </div>
                    <span class="menu__mobile-nav-icon"><i class="ri-arrow-right-fill"></i></span>
                </a>
                <a href="#" class="menu__mobile-nav">
                    <div class="menu__mobile-title">
                        <span>Hỗ trợ</span>
                    </div>
                    <span class="menu__mobile-nav-icon"><i class="ri-arrow-right-fill"></i></span>
                </a>
                <a href="#" class="menu__mobile-nav">
                    <div class="menu__mobile-title">
                        <span>Sơ đồ đường đi</span>
                    </div>
                    <span class="menu__mobile-nav-icon"><i class="ri-arrow-right-fill"></i></span>
                </a>
                <a href="#" class="menu__mobile-nav">
                    <div class="menu__mobile-title">
                        <span>Đại lý</span>
                    </div>
                    <span class="menu__mobile-nav-icon"><i class="ri-arrow-right-fill"></i></span>
                </a>
                <a href="#" class="menu__mobile-nav">
                    <div class="menu__mobile-title">
                        <span>Liên hệ</span>
                    </div>
                    <span class="menu__mobile-nav-icon"><i class="ri-arrow-right-fill"></i></span>
                </a>
            </div>
        </header> --}}
        @include('navbar')
        <!------------end header----------------------------------------------------------->
       
       
        {{-- <section>
            <div class="banner">
                <div class="slick__banner">
                    <div class="banner__item">
                        <img src="./public/frontend/images/1.jpg" alt="">
                    </div>
                    
                    <div class="banner__item">
                        <img src="./public/frontend/images/2.jpg" alt="">
                    </div>
                    
                    <div class="banner__item">
                        <img src="./public/frontend/images/3.jpg" alt="">
                    </div>

                    <div class="banner__item">
                        <img src="./public/frontend/images/4.jpg" alt="">
                    </div>

                    <div class="banner__item">
                        <img src="./public/frontend/images/5.jpg" alt="">
                    </div>

                    <div class="banner__item">
                        <img src="./public/frontend/images/6.jpg" alt="">
                    </div>

                </div>
            </div>
        </section> --}}

        <main>
            <div class="main__body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            @include('category')
                        </div>
                        <div class="col-lg-7">
                            <div class="product__body">
                                <div class="product__title">
                                    <span class="icon__category"><i class="ri-list-check"></i></span>
                                    <span>
                                        Sản phẩm bán chạy
                                    </span>
                                </div>

                                <div class="product__content row">
                                    @foreach($sanpham as $_sanpham) 
                                           @include('grid_product')
                                    @endforeach
                                </div>
                            </div>
                        </div>
                       @include('ads')
                    </div>
                </div>


                <div class="category__mobile">
                    <h5 class="category__mobile-title">Danh mục sản phẩm</h5>
                    <ul class="category__list">
                        @foreach($danhmuc_sp as $_danhmuc_sp)
                        <li>
                            <a href="#" class="category__links">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="./public/frontend/images/icon_menu_left.png" alt="">
                                    <span>{{$_danhmuc_sp->ten_dm}}</span>
                                </div>
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                        </li>

                        @endforeach
                    </ul>
                </div>
            </div>
        </main>

    @include('footer')
    </div>
    

    <!-- Link cdn js -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    
    <!-- Link custom js -->
    <script src="{{asset('front-end/assets/js/main.js')}}"></script>

    <script>
        $('.slick__banner').slick({
            dots: true,
            infinite: true,
            speed: 500,
            cssEase: 'linear'
        });



        $('.menu__icon').click(function(){
            $('.menu__mobile').toggleClass('active');
        })

        $('.icon__category').click(function(){
            $('.category__mobile').toggleClass('active');
        })
    </script>
</body>
</html>