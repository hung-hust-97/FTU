@extends('2019.layout')
@section('title','Thử thách')
@section('content')
<div>
<div class="text-center" style="margin-top: 7%;">>
<img src="{{asset('/2019/bóng đèn.png')}}" style="width:45%; height:auto"/> 
</div>
    <div class="container-resultv1">

        <div class="test-content score-screen" >
            <h1 class="text-bold">Chúc mừng bạn {{$member->name}} đã hoàn thành bài thi!</h1>
            <div class="line-content"></div>
            <p>Kết quả <span class="text-bold" style="color:#188440">Vòng 1: I-START!</span> sẽ được thông báo tới bạn trong thời gian sớm nhất.</p>
            <p>Bạn hãy chú ý theo dõi Facebook page <a href="https://www.facebook.com/iinvest.sic" style="color: white;    "><span class="text-bold" style="color:#188440">Cuộc thi I-INVEST!</span></a> để có thể cập nhật</p>
            <p>thêm các thông tin sắp tới.</p>
            <div class="line-content"></div>
            <p style="font-family: montserratBold" ><i>BTC xin chân thành cảm ơn! </i></p>
        </div>
    </div>
    </div>
@endsection

@section('scripts')

@endsection