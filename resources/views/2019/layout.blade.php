<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head >

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, width=device-width, shrink-to-fit=no">
    <!-- Primary Meta Tags -->
    <meta name="title" content="Giá trị bản thân làm nên điều khác biệt">
    <meta name="description" content="CUỘC THI I-INVEST! 2020">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://i-invest.sicftu.vn/">
    <meta property="og:title" content="Giá trị bản thân làm nên điều khác biệt">
    <meta property="og:description" content="CUỘC THI I-INVEST! 2020">
    <meta property="og:image" content="http://i-invest.sicftu.vn/2019/icon.png">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://i-invest.sicftu.vn/">
    <meta property="twitter:title" content="Giá trị bản thân làm nên điều khác biệt">
    <meta property="twitter:description" content="CUỘC THI I-INVEST! 2020">
    <meta property="twitter:image" content="http://i-invest.sicftu.vn/2019/icon.png">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="icon" type="image/x-icon" href="{{asset('/2019/icon.png')}}" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('admin-lte/bootstrap/css/bootstrap.min.css') }}">

    <!-- Font Awesome -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin-lte/font-awesome/css/font-awesome.min.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin-lte/dist/css/AdminLTE.min.css') }}">

    <!-- Custom CSS -->
    {{-- <link href="{{asset('/css/style.css')}}" rel="stylesheet" type="text/css">--}}

    <link href="{{asset('/css/style2019.css?v=2.2')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/loading.css')}}" rel="stylesheet" type="text/css">



    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/datatables/dataTables.bootstrap.css') }}">


    <link rel="stylesheet" href="{{ URL::asset('admin-lte/dist/css/bootstrap-datetimepicker.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/5a4b0fc7b3.js" crossorigin="anonymous"></script>
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">

    <!-- Waitme -->
    <link href="{{ asset('admin-lte/plugins/waitMe/waitMe.css') }}" rel="stylesheet" />

    <!-- Icheck -->
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/iCheck/all.css') }}">

    <!-- Loading -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.css">


    <!-- PACE PRELOADING -->
    <script src="{{asset('admin-lte/plugins/pace/pace.min.js')}}"></script>
    <link id="flashPace" href="{{asset('admin-lte/plugins/pace/themes/green/pace-theme-flash.css')}}" rel="stylesheet" />

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135113074-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-135113074-2');
    </script>


    <![endif]-->

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '250292479180048');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=250292479180048&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

</head>

<body class="hold-transition skin-blue sidebar-mini">


<div class="container-fluid">
    <header class="header" style="z-index: 1;" >
        @component('2019.components.header')@endcomponent
    </header>
    @yield('banner')

    <div class="content">
        @yield('content')
    </div>
    <!-- <footer class="footer">
        @component('2019.components.footer')@endcomponent
    </footer> -->
    <!-- <footer class="footer-web">
            <div class="row" style="color: white;padding-top: 1rem;">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                    <div class="footer-content-1" style="   font-family: montserrat;">
                    <div>
                    <h3>Về chúng tôi</h3>
                           <table style="color: white;/*font-size: 1.5rem;*/ font-family: montserrat;">
                           <tbody>
                           <tr>
                           <td style="display: flex; align-items: center;">
                           <img src="{{asset('/2019/logo_sic.png')}}" style="width:4rem;height=4rem">
                           <div>CLB Chứng khoán SIC - FTU</div>
                           </td>
                           </tr>
                           </tbody>
                           </table>
                       </div>

                       <div class="footer-content-botom">
                        <table class="table-responsive" style="color: white;font-size: 1.5rem;     font-family: montserrat;">
            
                        <tr >
                        <td style="display: flex; align-items: center;"> 
                            <img src="{{asset('/2019/placeholder.png')}}" style="width:4rem;height=4rem">
                            <div>Phòng H103, Đại học Ngoại thương <br/> 91 Chùa Láng, Đống Đa, Hà Nội</div>
                        </td>
                        </tr>
                        
                        </table>
                    </div>      
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                    <div class="footer-content-1" style="padding-left: 9rem;font-family: montserrat;">
                    <div>
                    <h3>Cuộc thi I-INVEST! 2020</h3>
                        <table style="color: white;/*font-size: 1.5rem;*/ font-family: montserrat;">
                        <tbody>
                        <tr>
                        <td style="display: flex; align-items: center;"> 
                            <img src="{{asset('/2019/Logo1.png')}}" style="width:20px;">
                           <div> Cuộc thi Tài chính - Chứng khoán <br />lớn nhất miền Bắc dành cho sinh viên.</div>
                            </td>
                           </tr>
                        </tbody>
                           </table>
                    </div>

                    <div class="footer-content-botom">
                        <table class="table-responsive" style="color: white;font-size: 1.5rem" >
                            <tr>
                            <td><i class="fas fa-phone"></i> <a href="tel:0769274068" style="color: white">0329087892 (Mr. Trung Kiên)</a><i>&ensp;&ensp;&ensp; &emsp;&emsp;&ensp;&ensp;&ensp;&ensp;&ensp;          </i></td>
                            </tr>
                            <tr>
                            <td  padding-left: 15%><i class="fab fa-facebook"></i> <a href="https://www.facebook.com/iinvest.sic" style="color: white;    ">facebook.com/gs.i.invest</a></td>
                            </tr>
                            <tr>
                            <td><i class="fas fa-envelope-square"></i> <a href="mailto:btccuocthiiinvest2021@gmail.com" style="color: white; ">btccuocthiiinvest2021@gmail.com</a></td>
                            </tr>
                        </table>

                    </div>
                    
                    </div>
                    

                    </div>
               
                </div>
                </div>


</footer> -->


<style>
    body{
        background-image: url('{{asset('/2019/nen.png')}}');
        background-size: cover;
        background-repeat: repeat;
        min-height: 100%;
        height : 100%;
        font-family: 'montserrat', sans-serif;
    }


</style>

<!-- jQuery 3 -->
<script src="{{ asset('admin-lte/jquery/jquery.min.js') }}"></script>
<script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('admin-lte/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin-lte/plugins/jqueryValidation/jquery.validate.min.js') }}"></script>

<!-- Bootstrap core JavaScript -->

<script src="{{ asset('admin-lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin-lte/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

<!-- Jquery countdown-->
<script src="{{asset('/js/jquery.countdown.js')}}"></script>

<!-- Select 2 -->
<script src="{{ asset('admin-lte/plugins/select2/select2.js') }}"></script>
<script src="{{ URL::asset('admin-lte/dist/js/moment-with-locales.min.js') }}"></script>


<!-- AdminLTE App -->
<script src="{{ URL::asset('admin-lte/dist/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('admin-lte/dist/js/adminlte.min.js') }}"></script>

<!-- SLICK SLIDER -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<!--Icheck-->
<script src="{{ asset('admin-lte/plugins/iCheck/icheck.min.js') }}"></script>

<!-- Custom -->
<script src="{{ asset('js/init.js') }}"></script>
<script src="{{ asset('admin-lte/plugins/waitMe/waitMe.js') }}"></script>
<script src="{{ asset('js/notify.min.js') }}"></script>
<script src="{{asset('admin-lte/dist/js/custom.js')}}"></script>


@yield('scripts')


<!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. -->
</body>
</html>