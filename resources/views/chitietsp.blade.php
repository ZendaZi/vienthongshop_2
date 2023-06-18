<html>
@include('header')
<body>
    <div class="app">
        @include('navbar')
        <!------------end header----------------------------------------------------------->
        <main>
            <div class="main__body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            @include('category')
                        </div>

                        @foreach ($sanpham as $sp)
                        <div class="col-lg-7">
                            <div class="product__body">
                                @include('product_details')
                            </div>
                        </div>
                        @endforeach

                        @include('ads')
                    </div>
                </div>
            </div>
        </main>

        @include('footer')
    </div>


    <!-- Link cdn js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- Link custom js -->
    <script src="{{ asset('front-end/assets/js/main.js') }}"></script>

    <script>
        $('.slick__banner').slick({
            dots: true
            , infinite: true
            , speed: 500
            , cssEase: 'linear'
        });



        $('.menu__icon').click(function() {
            $('.menu__mobile').toggleClass('active');
        })

        $('.icon__category').click(function() {
            $('.category__mobile').toggleClass('active');
        })

    </script> 
</body>

</html>
