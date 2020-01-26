<lucky role="lucky" class="container">
    <div class="row">
        <div class="col-sm-12 d-flex justify-content-center">
            <a class="m-2" href="{{route('daily.lucky', ['day' => 'sunday'])}}">
                <div class="col-sm-1.25">
                    <div class="sunday" data-hover="อาทิตย์">อา.</div>
                </div>
            </a>
            <a class="m-2" href="{{route('daily.lucky', ['day' => 'monday'])}}">
                <div class="col-sm-1.25">
                    <div class="monday" data-hover="จันทร์">จ.</div>
                </div>
            </a>
            <a class="m-2" href="{{route('daily.lucky', ['day' => 'tuesday'])}}">
                <div class="col-sm-1.25">
                    <div class="tuesday" data-hover="อังคาร">อ.</div> 
                </div>
            </a>
            <a class="m-2" href="{{route('daily.lucky', ['day' => 'wednesday'])}}">
                <div class="col-sm-1.25">
                    <div class="wednesday" data-hover="พุธ">พ.</div>
                </div>
            </a>
            <a class="m-2" href="{{route('daily.lucky', ['day' => 'thursday'])}}">
                <div class="col-sm-1.25">
                    <div class="thursday" data-hover="พฤหัส">พฤ.</div>
                </div>
            </a>
            <a class="m-2" href="{{route('daily.lucky', ['day' => 'friday'])}}">
                <div class="col-sm-1.25">
                    <div class="friday" data-hover="ศุกร์">ศ.</div>
                </div>
            </a>
            <a class="m-2" href="{{route('daily.lucky', ['day' => 'saturday'])}}">
                <div class="col-sm-1.25 ">
                    <div class="saturday" data-hover="เสาร์">ส.</div>
                </div>
            </a>
        </div>
    </div>
</lucky>

