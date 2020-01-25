<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>หน้าแรก - VIP88 Plus</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/all.css')}}">
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

        <main role="main" class="container">

            <div class="row">
                <div class="col-sm-8 mb-4">
                    <div class="card h-100">
                        <div class="jumbotron h-100">
                            <h1 class="display-4">VIP88 Plus</h1>
                            <p class="lead">ยินดีต้อนรับท่านสมาชิกทุกท่านเข้าสู่เว็บ vip88plus.com เลขเด็ด เด่น ดัง ที่จะนำโชคก้อนใหญ่มาให้ทุกคน !</p>
                            <hr class="my-4">
                            <p><span class="badge badge-success">*แนะนำ</span> ระบบคอมพิวเตอร์ AI หรือ การคำนวณหวยในแต่ล่ะงวดที่จะทำให้ท่านมีโอกาสมากยิ่งขึ้นกว่าเดิม!</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-4">
                    <div class="card h-100">
                        <img class="img-fluid h-100" src="{{asset('images/logo.png')}}" alt="vip88plus"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8 mb-4">
                    <div class="card h-100">
                        <div class="card-body pb-1">
                            <h5 class="card-title">ดูเลขเด็ดนำโชค</h5>
                            @include('game.lottonumber')
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">ผลสลากกินแบ่งรัฐบาลล่าสุด</h5>
                            @include('widgets.rewards')
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ดูดวงประจำวัน</h5>
                            <p class="card-text">Service is not ready yet.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Facebook Page</h5>
                            <p class="card-text">Service is not ready yet.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Advertisements</h5>
                            <p class="card-text">Contact 097-327-9939.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Advertisements</h5>
                            <p class="card-text">Contact 097-327-9939.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Advertisements</h5>
                            <p class="card-text">Contact 097-327-9939.</p>
                        </div>
                    </div>
                </div>
            </div>

        </main>

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
