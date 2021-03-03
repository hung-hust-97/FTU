    <div class="row header-row">

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="logo">
                    <a href="http://sicftu.vn/i-invest/"><img src="{{asset('/2019/logo_back.png')}}"/><span style="color: white;">   VỀ TRANG CHỦ</span></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <nav class="navbar navbar-right">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand visible-xs" href="#">MENU</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <!-- <ul class="nav navbar-nav navbar-right">    
                                 <li><a class="cool-link menu-border-right {{\Illuminate\Support\Facades\Route::currentRouteName() == 'tongquan' ? 'current' : '' }}"  href="{{route('tongquan')}}">TỔNG QUAN</a></li>
                                <li><a class="cool-link menu-border-right {{\Illuminate\Support\Facades\Route::currentRouteName() == 'giaithuong' ? 'current' : '' }}"  href="{{route('giaithuong')}}">GIẢI THƯỞNG</a></li>
                                <li><a class="cool-link {{\Illuminate\Support\Facades\Route::currentRouteName() == 'doitac' ? 'current' : '' }}"  href="{{route('doitac')}}">ĐƠN VỊ ĐỐI TÁC</a></li>
                                <li><a id="timkiem" class="cool-link" href="#">ĐĂNG NHẬP</a></li>
                            </ul> -->
                            <ul class="nav navbar-nav navbar-right">
                                <!-- <li><a class="cool-link menu-border-right" id="top5header" >TOP 5 I-INVEST</a></li>
                                <li><a class="cool-link menu-border-right" id="tongquanheader" >TỔNG QUAN</a></li>
                                <li><a class="cool-link menu-border-right" id="giaithuongheader">GIẢI THƯỞNG</a></li>
                                <li><a class="cool-link" id="donvidoitacheader">ĐƠN VỊ ĐỐI TÁC</a></li>
                                <li><a  class="cool-link"  href="{{route('dangkychungket')}}" style="border: solid 1px #bbd554;">ĐĂNG KÝ</a></li> -->
                                <!-- <li><a class="cool-link menu-border-right" id="tongquanheader" >TRANG CHỦ</a></li> -->
                                @if (\Illuminate\Support\Facades\Auth::check())
                                <li><a  class="cool-link"  href="{{route('logout')}}" style="border: solid 1px #bbd554;">ĐĂNG XUẤT</a></li>
                                @else
                                <li><a  class="cool-link" id="dang-nhap-button" href="{{route('login')}}" style="border: solid 1px #bbd554;" >ĐĂNG NHẬP</a></li>
                                @endif
                                

                            </ul>
                        </div><!-- /.navbar-collapse -->
                                
                </nav>
            </div>

    </div>


    <!-- <div class="row">
      <div class="navbar">
    </div> -->
