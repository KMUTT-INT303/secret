<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>หน้าแรก - VIP88 Plus</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/all.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Sriracha&display=swap" rel="stylesheet">
    </head>
    <body>

        <nav class="navbar navbar-expand-md navbar-dark fixed-top polar-b">
            <div class="container">
                <a class="navbar-brand" href="#"> VIP88 Plus</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-home"></i> หน้าแรก</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-money-bill-alt"></i> เลขเด็ด</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-money-check"></i> ตรวจสลากกินแบ่งรัฐบาล</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-search-dollar"></i> ตรวจหวย</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-search"></i> ดูดวง</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row container-fluid p-0 m-0">


            <div class="col-sm-2 d-none d-sm-block p-0 d-flex justify-content-center">

            </div>



            <div class="col-sm-8 p-0">
                @yield('content')
            </div>

            <div class="col-sm-2 d-none d-sm-block p-0">
                <div class="ad-wrapper-r">

                </div>
            </div>


        </div>

        <footer class="footer">
            <div class="container">
                <span class="text-footer">สงวนลิขสิทธิ์ © 2562 บริษัท โพล่าแบร์ (ประเทศไทย) จำกัด • ติดต่อเรา/สนใจลงโฆษณา</span>
            </div>
        </footer>

    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{mix('/js/all.js')}}"></script>
    <script src="{{mix('/js/script.js')}}"></script>
</html>
