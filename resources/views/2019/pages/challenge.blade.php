@extends('2019.layout')
@section('title','Thử thách')
@section('content')
   


        <div class="container-info test-content text-left">


            <div id="overlay" style="display: none;">
                <div class="countdown-challenge">
                    <!-- <h1 style="color: #0c0c0c">Chuẩn bị làm bài trong</h1> -->
                    <div class="seconds-wrapper">
                        <span class="seconds" id="ready"></span> <br>giây
                    </div>
                </div>

            </div>


            <div id="rule-content" class="text-center">
                <p>Bài thi gồm <span class="text-bold" style="color: #198440">20 câu hỏi trắc nghiệm</span></p>
                <p style="margin-bottom: 30px;">Thời gian làm bài <span class="text-bold" style="color: #198440">20 phút </span></p>

                <i><u class="text-bold">Lưu ý trước khi làm bài:</u></i>
                <p style="margin-top: 15px;">- Bạn có tối đa 02 lần <span class="text-bold">(còn {{$chance}} lần)</span> để vào làm bài thi nhưng chỉ nộp bài 01 lần duy nhất </p>
                <p>nên hãy kiểm tra kết nối mạng trước khi làm bài.</p>
                <p>- BTC được quyền hủy bỏ kết quả thi nếu phát hiện có bất kỳ gian lận nào trong quá trình</p>
                <p> làm bài.</p>
                <p  class="text-bold text-center" >Chúc bạn may mắn!</p>

                <div class="margin-top">
                    <input type="checkbox" class="check-accept"><span
                            class="text-main-color"><u> Tôi đã đọc và đồng ý.</u></span>
                </div>
            </div>


            <form action="{{route('submit_result')}}" method="post" id="result">
                {{csrf_field()}}
                <input hidden id="check" value="" name="checking">
                <div id="list-question" hidden>
                </div>
            </form>
        </div>
    <button type="button" id="lambai" style="font-family: montserratsemiBold" disabled>LÀM BÀI</button>
    <div id="someid"></div>
@endsection
<div style="float:right">
    <span class="count-time" id="counttime"  style="font-family: montserratsemiBold" hidden>20:00</span>
</div>
@section('scripts')
    <script type="text/javascript">
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-red',
            increaseArea: '20%' // optional
        });

        var html = "";
        $('input[type=checkbox]').on('ifChecked',function(e)
        {
            document.getElementById('lambai').disabled =false;
        })
        $('#lambai').click(function(e){
            var now = new Date();
            document.getElementById('lambai').hidden =true;
            document.getElementById('counttime').hidden =false;
            $(this).attr("check","check");
            $(this).attr('readonly','readonly')
            $("body").css("overflow", "hidden");
            $('#overlay').css('display','block');


            $('#ready').countdown(new Date(+now + 10000))
                .on('update.countdown', function(event) {
                    var format = '%-S';
                    $(this).html(event.strftime(format));
                })

                .on('finish.countdown', function(event) {
                    $('#overlay').css('display','none');
                    $("body").css("overflow", "auto");
                    $('#rule-content').remove()

                    $.post('{{route('getExam')}}', [], function (response) {
                        html = generate(response.exam)

                        $('#list-question').closest('.container-info').removeClass('container-info test-content text-left').addClass('container-question')
                        $('#list-question').html("");
                        $('#list-question').prepend(html);
                        $('#list-question').css('display', 'block');
                        $('input#check').val(response.check)

                        $('#rule').css('display', 'none');


                        $('.count-time').countdown(new Date(+now + 120e4))
                            .on('update.countdown', function (event) {
                                var format = "%-M:%-S";
                                x = event.strftime("%-S")*1000 + event.strftime("%-M")*1000 *60                    
                                var minutes = Math.floor((x % (1000 * 60 * 60)) / (1000 * 60)); //conversion miliseconds on minutes 
                                if (minutes < 10) minutes="0"+minutes;
                                var seconds = Math.floor((x % (1000 * 60)) / 1000); //conversion miliseconds on seconds
                                if (seconds < 10) seconds="0"+seconds;

                                $(this).html(minutes + ":" + seconds);
                                // console.log(event)
                                // console.log(event.strftime(format))
                            })

                            .on('finish.countdown', function (event) {
                                $('form#result').submit();
                            });

                        setTimeout(function() {
                            verifySchedule();
                        }, 20e4); // for 4-5 minutes delay

                        setTimeout(function() {
                            verifySchedule();
                        }, 50e4);

                        setTimeout(function() {
                            verifySchedule();
                        }, 80e4);

                        setTimeout(function() {
                            verifySchedule();
                        }, 110e4);


                    });



                });
        })

        function generate(array_question) {
            for(var i = 0; i < array_question.length; i++) {
                html += '<div class="header-question">' +
                    '                    <h4> <strong class="text-bold">Câu '+ (i+1) +': </strong>'+array_question[i].question+'?</h4>';


                html+=
                    '                    <div class="row answer-between">' +
                    '                        <div class="answer-left col-md-4">' +
                    '                            <div class="radio">' +
                    '                                <label>' +
                    '                                    <input type="radio" name="'+i+'" value="0"> A. '+array_question[i].answer[0]+'' +
                    '                                </label>' +
                    '                            </div>' +
                    '                        </div>' +
                    '                        <div class="col-md-offset-2 col-md-4">' +
                    '                            <div class="radio">' +
                    '                                <label>' +
                    '                                    <input type="radio" name="'+i+'" value="1"> B. '+array_question[i].answer[1]+' ' +
                    '                                </label>' +
                    '                            </div>' +
                    '                        </div>' +
                    '                    </div>' +
                    '                    <div class="row">' +
                    '                        <div class="answer-left col-md-4">' +
                    '                            <div class="radio">' +
                    '                                <label>' +
                    '                                    <input type="radio" name="'+i+'" value="2"> C. '+array_question[i].answer[2]+'' +
                    '                                </label>' +
                    '                            </div>' +
                    '                        </div>' +
                    '                        <div class="col-md-offset-2 col-md-4">' +
                    '                            <div class="radio">' +
                    '                                <label>' +
                    '                                    <input type="radio" name="'+i+'" value="3"> D. '+array_question[i].answer[3]+'' +
                    '                                </label>' +
                    '                            </div>' +
                    '                        </div>' +
                    '                    </div>' +
                    '                </div>'
            }

            html += '<input type="submit" class="btn btn-challenge btn-lg center-block" style="font-family: montserratBold" value="NỘP BÀI">'
            return html
        }

        function verifySchedule() {
            $.post('{{route('verify')}}', $('form#result').serialize(), function (response) {
            })
        }


    </script>




@endsection