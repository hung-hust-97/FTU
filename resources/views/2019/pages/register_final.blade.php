@extends('2019.layout')
@section('title','Đăng ký')
@section('content')

    <form enctype="multipart/form-data" class="validate" id="form-input" method="post" action="{{route('register_final')}}">
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
                    <span>Trường học</span>
                    <input type="text" class="form-control" name="university" required>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 form-group">
                    <span for="exampleInputEmail1" >Số điện thoại</span>
                    <input type="text" class="form-control" name="phone" pattern="^[1-9]\d*(?:\.\d+)?(?:[kmbt])?$" required>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12 form-group">
                    <span for="exampleInputEmail1">Chuyên ngành </span>
                    <input type="text" class="form-control" name="speciality" required>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 form-group">
                    <span for="exampleInputEmail1">Năm tốt nghiệp</span>
                    <input type="text" class="form-control" name="year" required>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 form-group">
                    <span for="exampleInputEmail1">Địa chỉ email</span>
                    <input type="email" class="form-control" placeholder="name@example.com" name="email" required>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 form-group">
                    <span>Link facebook</span>
                    <input type="text" class="form-control" placeholder=facebook.com/example name="facebook" required>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 form-group">
                    <span>Mục tiêu tham dự Đêm Chung Kết</span>
                    <select name="place" class="form-control" required>
                        <option value >Lý do bạn đăng ký tham gia Đêm chung kết?</option>
                        <option value="Cổ vũ thí sinh Hoàng Anh Tuấn">Cổ vũ thí sinh Hoàng Anh Tuấn</option>
                        <option value="Cổ vũ thí sinh Tiền Quốc Việt">Cổ vũ thí sinh Tiền Quốc Việt</option>
                        <option value="Cổ vũ thí sinh Phạm Mỹ Linh">Cổ vũ thí sinh Phạm Mỹ Linh</option>
                        <option value="Cổ vũ thí sinh Dư Anh Tuấn">Cổ vũ thí sinh Dư Anh Tuấn</option>
                        <option value="Cổ vũ thí sinh Nguyễn Hữu Thiên Ân">Cổ vũ thí sinh Nguyễn Hữu Thiên Ân</option>
                        <option value="Học hỏi thêm kiến thức về Tài chính - Chứng khoán">Học hỏi thêm kiến thức về Tài chính - Chứng khoán</option>
                    </select>
                </div>
                
            </div>
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
                    $.post('{{route('register_final')}}',$(this).serialize(), function(response) {
                        $('#overlay').css('display','none');
                        if (response.success === 1) {
                            window.location.href = '{{route('xacnhandangkychungket')}}'
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