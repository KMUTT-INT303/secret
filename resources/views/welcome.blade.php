@extends('layouts.app')

@section('content')
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
                <div class="card-body" >
                    <h5 class="card-title">ผลสลากกินแบ่งรัฐบาลล่าสุด</h5>
                    @include('widgets.rewards')
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8 mb-4">
            <div class="card border-0">
                <div class="card-body" style="background-image: url({{asset('images/ss.png')}})">
                    <h2 class="card-title horohead" >ดูดวงประจำวัน</h2>

                    @include('game.lucky')
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
@endsection