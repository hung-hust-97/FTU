@extends('2019.layout')
@section('title','Trang chủ')
@section('content')

<!-- <div class="homepage trang-chu">
    <div class="text-center countdown ">
        <div>
            <h1 class="text-main-color">CUỘC THI I-INVEST! 2020</h1>
        </div>
        <div class="noidung ">
            <p>Thời sinh viên là chuỗi ngày tháng tìm kiếm và tích lũy
                <p> kinh nghiệm quý giá, đừng ngai thử thách bản thân bằng</p>
                <p> những trải nghiệm mới vì chúng tôi tin rằng:</p>

        </div>
        <div>
            <h3 class="text-main-color" style="font-family: 'montserratSemiBoldItalic' ">
                <i>“Giá trị bản thân làm nên điều khác biệt”</i>
            </h3>
        </div>
        <div class="table-responsive ">
            <table class="table no-border" style="margin-top: 0%;">
                <tbody>
                    <tr>
                        <td class="time">
                            <span class="clock" id="countdown-day"></span>
                            <span class="after-clock">:</span>
                        </td>
                        <td class="time">
                            <span class="clock" id="countdown-hour"></span>
                            <span class="after-clock">:</span>
                        </td>
                        <td class="time">
                            <span class="clock" id="countdown-minute"></span>
                            <span class="after-clock">:</span>
                        </td>
                        <td class="time">
                            <span class="clock" id="countdown-second"></span>
                        </td>
                    </tr>

                    <tr>
                        <td class="under-countdown">ngày</td>
                        <td class="under-countdown">giờ</td>
                        <td class="under-countdown">phút</td>
                        <td class="under-countdown">giây</td>
                    </tr>

                </tbody>
            </table>

        </div>

        @if (\Illuminate\Support\Facades\Auth::check())
        <a type="button" id="btn-dangky" href="{{route('challenge')}}" class="btn">VÀO THI NGAY</a>
        @else
        <button type="button" id="btn-dangky" class="btn" data-toggle="modal" data-target=".challenge">VÀO THI NGAY</button>

        @endif
        <p class="text-main-color" id="deadline">DEADLINE: 23:59 NGÀY 17/03/2020</p>

    </div>
</div> -->

<!-- Vào thi -->
<div class="home-responsive">
    <img src="{{asset('/2019/1060x526.png')}}" alt="" style="width: 100%;height: 100%;">
    @if (\Illuminate\Support\Facades\Auth::check())
        <a type="button" id="btn-dangky" href="{{route('challenge')}}" class="btn">VÀO THI NGAY</a>
        @else
        <button type="button" id="btn-dangky" class="btn" data-toggle="modal" data-target=".challenge">VÀO THI NGAY</button>
        @endif
</div>

<!-- Đăng ký đêm chung kết -->
<!-- <div class="home-responsive">
    <img src="{{asset('/2019/1060x526.png')}}" alt="" style="width: 100%;height: 100%;">
    @if (\Illuminate\Support\Facades\Auth::check())
        <a type="button" id="btn-dangky" href="{{route('dangkychungket')}}" class="btn">ĐĂNG KÝ NGAY</a>
        @else
        <a type="button" id="btn-dangky" href="{{route('dangkychungket')}}" class="btn">ĐĂNG KÝ NGAY</a>
        @endif
</div> -->


<div class="modal fade challenge" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content dang-nhap">
            <form enctype="multipart/form-data" class="validate" id="form-input" method="post" action="{{route('loginPost')}}">
                {{csrf_field()}}
                <div id="overlay" style="display: none;">
                    <div class="sk-fading-circle" style="top:45%; margin: auto;">
                        <div class="sk-circle1 sk-circle"></div>
                        <div class="sk-circle2 sk-circle"></div>
                        <div class="sk-circle3 sk-circle"></div>
                        <div class="sk-circle4 sk-circle"></div>
                        <div class="sk-circle5 sk-circle"></div>
                        <div class="sk-circle6 sk-circle"></div>
                        <div class="sk-circle7 sk-circle"></div>
                        <div class="sk-circle8 sk-circle"></div>
                        <div class="sk-circle9 sk-circle"></div>
                        <div class="sk-circle10 sk-circle"></div>
                        <div class="sk-circle11 sk-circle"></div>
                        <div class="sk-circle12 sk-circle"></div>
                    </div>
                </div>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>

                <div class="modal-body">

                    <div class="alert alert-danger" style="display: none; text-align: center">
                        <strong id="alert">Error!</strong>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group ">
                                <label class="" for="exampleInputEmail1">Tài khoản</label>
                                <input type="text" class="form-control" name="email" required>
                            </div>

                            <div class="form-group ">
                                <label class="">Mật khẩu </label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                        </div>
                    </div>
                    <p>Chưa có tài khoản? <a href="{{route('dangky')}}"><u>Đăng ký ngay</u></a></p>
                </div>

                <div class="modal-footer text-center">
                    <button type="submit" class="btn btn-lg" id="button-submit">ĐĂNG NHẬP</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- <div class="tong-quan">
<div class="img-footer-homepage">
    <img src="{{asset('/2019/footer_home.png')}}" alt="">
</div>
<div class="tongquan-header">
    <table class="table-responsive-footer footer-homepage">
    <thead>
    <tr>
                <th class="header text-bold">
                    QUY MÔ TỔ CHỨC
                </th>
                <th class="header text-bold">
                    CHẤT LƯỢNG CHUYÊN MÔN
                </th>
                <th class="header text-bold">
                    GIÁ TRỊ THỰC TIỄN
                </th>
            </tr>
    </thead>    
    <tbody>
            

            <tr>
                <td data-title="QUY MÔ TỔ CHỨC" class="contenthomepage border-footer">Trải qua hơn 10 năm hình thành, Cuộc thi I-INVEST! luôn khẳng định được vị thế là cuộc thi Tài chính - Chứng khoán lớn nhất miền Bắc dành cho sinh viên.</td>
                <td data-title="CHẤT LƯỢNG CHUYÊN MÔN" class="contenthomepage border-footer">Đến với đấu trường trí tuệ I-INVEST!, các thí sinh sẽ có cơ hội nâng cao kiến thức chuyên môn và học hỏi trực tiếp từ các chuyên gia hàng đầu trong lĩnh vực.</td>
                <td data-title="GIÁ TRỊ THỰC TIỄN" class="contenthomepage">I-INVEST! luôn chú trọng vào việc đề cao tính thực tiễn của mỗi vòng thi, từ đó xây dựng cho các bạn sinh viên nền tảng kiến thức cần thiết cho công việc tương lai.</td>
            </tr>

        </tbody>
    </table>
</div>

<div class="tongquan-content">
        <h3><p>Bước sang năm thứ 11, Cuộc thi I-INVEST! 2020 vẫn sẽ tiếp tục hành trình hoàn thành sứ mệnh của mình, mang tới</p>
        <p>những <span class="text-bold">"trải nghiệm khác biệt"</span> để phù hợp với thế hệ sinh viên đầy sáng tạo, bản lĩnh và sẵn sàng đón nhận nhiều</p>
        <p class="text-center">thử thách với mong muốn từng ngày hoàn thiện bản thân.</p>
        </h3>
        <h1><i>LIỆU BẠN ĐÃ SẴN SÀNG CHINH PHỤC NHỮNG THỬ THÁCH VÀ NÂNG TẦM GIẤ TRỊ CỦA BẢN THÂN? </i></h1>

</div>
</div> -->

<div class="top5laptop" >
<img src="{{asset('/2019/top 5 test-01.png')}}" id="top5laptop" style="width: 100%; height: 100%" alt="Top 5">
</div>
<div class="top5laptop" >
<img src="{{asset('/2019/Top5phone.png')}}" id="top5phone"  style="width: 100%; height: 100%" alt="Top 5">
</div>
<div class="tongquanlaptop" >
<img src="{{asset('/2019/Tổng quan.png')}}" id="tongquanlaptop" style="width: 100%; height: 100%" alt="Tổng quan">
</div>

<div class="tongquanlaptop" >
<img src="{{asset('/2019/Tongquanphone.png')}}" id="tongquanphone"  style="width: 100%; height: 100%" alt="Tổng quan">
</div>
<div class="giai-thuong" >
    <img src="{{asset('/2019/Giải thưởng.png')}}"  id="giaithuonglaptop" alt="Giải Thưởng" style="width: 100%; height: 100%">
</div>
<div class="giai-thuong" >
    <img src="{{asset('/2019/Giải thưởng phone.png')}}" id="giaithuongphone" alt="Giải Thưởng" style="width: 100%; height: 100%">
</div>
<div class="doi-tac">
    <img src="{{asset('/2019/đối tác.png')}}" alt="Đối tác" style="width: 100%; height: 100%">
</div>

<div class="footer-web-phone" >
    <img src="{{asset('/2019/footer điện thoại.png')}}" alt="Giải Thưởng" style="width: 100%; height: 100%">
</div>

@endsection

@section('scripts')

<script type="text/javascript">
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-red',
            increaseArea: '20%' // optional
        });
        $('#datetimepicker').datetimepicker({
            format: "DD-MM-YYYY",
        });

        $("#form-input").validate({
            onfocusout: false,
            onkeyup: false,
            onclick: false,
        });


        $('#form-input').on('submit', function(e) {
            e.preventDefault();
            if ($(this).valid()) {
                $('#overlay').css('display', 'block');
                $.post('{{route('loginPost')}}', $(this).serialize(),
                    function(response) {
                        $('#overlay').css('display', 'none');
                        if (response.success == true) {
                            window.location.href = '{{route('challenge')}}'
                        } else {
                            alert(response.errors)
                        }

                    });
            }

            return false;
        });


        $('.clock').countdown('03/17/2020')
            .on('update.countdown', function(event) {
                var totalDays = event.offset.totalDays;

                $('span#countdown-day').html(totalDays);
                $('span#countdown-hour').html(event.strftime('%H'));
                $('span#countdown-minute').html(event.strftime('%M'));
                $('span#countdown-second').html(event.strftime('%S'));


            })
            .on('finish.countdown', function(event) {
                $('.table-responsive ').replaceWith('<h1>Thời gian đăng ký đã kết thúc</h1>')
                $('#btn-thuthach').remove();
                // $('h2#change-1').text("Bạn còn")
                // $('#btn-dangky').removeClass("disabled")
                // $('button#btn-dangky').attr("data-target",".challenge")
                //
                // $('.clock').countdown('03/10/2019')
                //     .on('update.countdown', function(event) {
                //         var totalDays= event.offset.totalDays;
                //
                //         $('span#countdown-day').html(totalDays);
                //         $('span#countdown-hour').html(event.strftime('%H'));
                //         $('span#countdown-minute').html(event.strftime('%M'));
                //         $('span#countdown-second').html(event.strftime('%S'));
                //
                //
                //     })
                //     .on('finish.countdown', function(event) {
                //         $('.table-responsive ').replaceWith('<h1>Thời gian đăng ký đã kết thúc</h1>')
                //         $('#btn-thuthach').remove();
                //
                //     });
            });


    });
</script>
<script>
                                    $(document).ready(function (){

                                        $("#tongquanheader").click(function (){
                                            $('html, body').animate({
                                                scrollTop: $("#tongquanlaptop").offset().top
                                            }, 2000);
                                        });
                                        $("#top5header").click(function (){
                                            $('html, body').animate({
                                                scrollTop: $("#top5laptop").offset().top
                                            }, 2000);
                                        });
                                        $("#giaithuongheader").click(function (){
                                            $('html, body').animate({
                                                scrollTop: $(".giai-thuong").offset().top
                                            }, 2000);
                                        });
                                        $("#donvidoitacheader").click(function (){
                                            $('html, body').animate({
                                                scrollTop: $(".doi-tac").offset().top
                                            }, 2000);
                                        });
                                        $("#dang-nhap-button").removeAttr("href");
                                        $("#dang-nhap-button").click(function (){
                                            $('#btn-dangky').click();
                                        });
                                    });
                                </script>
@endsection