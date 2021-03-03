@extends('2019.layout')
@section('title','Đăng ký')
@section('content')
    <!-- <div class="text-center">
        <img src="{{asset('/2019/text i-invest .png')}}" style="width: 30%;margin-bottom: -40px;margin-top: -40px;" class="img-banner">
    </div> -->
    <form enctype="multipart/form-data" class="validate" id="form-input" method="post" action="{{route('register')}}">
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
        <div class="container-info box-register">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12 form-group">
                    <span for="exampleInputEmail1">Họ và tên</span>
                    <input type="text" class="form-control" name="name" required>
                </div>
            </div>

            <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 form-group">
                    <span>Khu vực</span>
                    {{--<input type="text" class="form-control" name="year" required>--}}
                    <select name="khu_vực" class="form-control" required>
                        <option value >--Chọn khu vực--</option>
                        <option value="Miền Bắc">Miền Bắc</option>
                        <option value="Miền Nam">Miền Nam</option>
                    </select>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 form-group">
                    <span>Ngày sinh</span>
                    <input type="text" class="form-control" id="datetimepicker" name="dateOfBirth" required>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12 form-group">
                    <span for="exampleInputEmail1">Địa chỉ email</span>
                    <input type="email" class="form-control" placeholder="name@gmail.com" name="email" required>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 form-group">
                    <span for="exampleInputEmail1">Số điện thoại</span>
                    <input type="number" class="form-control" name="phone" placeholder="0889717412" required>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 form-group">
                    <span>Trường học</span>
                    <input type="text" class="form-control" name="university" required>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12 form-group">
                    <span for="exampleInputEmail1">Chuyên ngành </span>
                    <input type="text" class="form-control" name="speciality" required>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 form-group">
                    <span for="exampleInputEmail1">Khóa</span>
                    <input type="text" class="form-control" name="year" required>
                </div>


            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12 form-group">
                    <span>Số chứng minh nhân dân (căn cước công dân)</span>
                    <input type="number" class="form-control" name="identification" placeholder="14577356" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12 form-group">
                    <span>Link facebook</span>
                    <input type="url" class="form-control" placeholder=www.facebook.com/btciinvest name="facebook" required>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12 form-group">
                    <span>Thành tích học tập, kinh nghiệm làm việc nổi bật:</span>
                    <textarea name="prices" rows="6" class="form-control"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12 form-group">
                    <span>Thành tích ngoại khóa nổi bật (tối đa 3):</span>
                    <textarea name="extracurricular" rows="6" class="form-control"></textarea>
                </div>
            </div> -->

            <!-- <h2 class="text-main-color register-title" style="margin: 6% 0 0px">Đăng kí địa điểm và lịch thi </h2>
            <h3 class="text-main-color" style="margin-bottom: 30px">(nếu được vào vòng 2)</h3> -->

            <!-- <div>
                <span>Địa điểm:</span>
                <div class="row register-radio">
                    <div class="col-md-6 col-lg-6 col-xs-12 form-group">
                        <div class="radio">
                            <span>
                                <input type="radio" name="location" value="1" checked>Đại học Kinh tế Quốc dân
                            </span>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-5 col-lg-5 col-xs-12 form-group">
                        <div class="radio">
                            <span>
                                <input type="radio" name="location" value="2">Đại học Ngoại thương
                            </span>
                        </div>
                    </div>
                </div>

            </div>

            <div>
                <span>Thời gian:</span>
                <div class="row register-radio" style="margin-bottom: 0">
                    <div class="col-md-6 col-lg-6 col-xs-12 form-group">
                        <div class="radio">
                            <span>
                                <input type="radio" name="shift" value="1" checked>Ca 1: 8h00 - 9h30
                            </span>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-5 col-lg-5 col-xs-12 form-group">
                        <div class="radio">
                            <span>
                                <input type="radio" name="shift" value="2">Ca 2: 10h00 - 11h30
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row register-radio">
                    <div class="col-md-6 col-lg-6 col-xs-12 form-group">
                        <div class="radio">
                            <span>
                                <input type="radio" name="shift" value="3">Ca 3: 14h00 - 15h30
                            </span>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-5 col-lg-5 col-xs-12 form-group">
                        <div class="radio">
                            <span>
                                <input type="radio" name="shift" value="4">Ca 4: 16h00 - 17h30
                            </span>
                        </div>
                    </div>
                </div>

            </div> -->
            <div class="pull-right">
                <input type="submit" class="btn btn-challenge btn-lg center-block" style="font-family: montserratBold" value="ĐĂNG KÝ">

            </div>
        </div>
    </form>
   



@endsection

@section('scripts')
    <script type="text/javascript">
        $(function(){
            $("#form-input").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
            });

            $('#datetimepicker').datetimepicker({
                format: "DD-MM-YYYY",
            });

            $('#form-input').on('submit',function(e) {
                e.preventDefault();

                if ($(this).valid()) {
                    $('#overlay').css('display','block');
                    $.post('{{route('register')}}',$(this).serialize(), function(response) {
                        $('#overlay').css('display','none');
                        if (response.success === 1) {
                            window.location.href = '{{route('dangkyvong1')}}'
                        } else {
                            alert(response.messages)
                        }

                    });
                }

                return false;
            });
        })

    </script>
    @endsection