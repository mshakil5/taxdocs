<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxdocs</title>
    <link rel="icon" href="{{ url('css/favicon.jpg') }}">
    <link href="{{ asset('user/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('user/css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('user/css/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/slick.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('user/css/animate.min.css')}}" />
    {{--  datatables --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.bootstrap4.min.css">
</head>

<body>
    <!-- dashboard  section -->
    <div class="dashbaord-main">
        <div class="leftSection wow fadeIn" data-wow-delay=".25s" id='leftSidebar'>
            <div class="user-profile">
                <div class="close-dashboard-sidebar">
                    <span class="iconify" onclick="foldSidebar();" data-icon="mdi:window-close"></span>
                </div>
                <a href="{{ route('homepage')}}" target="blank">
                    <img src="{{ asset('images/company/'.\App\Models\CompanyDetail::where('id',1)->first()->header_logo)}}" alt="">
                </a>
            </div>
            <nav class="sidenav">
                <ul>

                    <li class="nav-item {{ (request()->is('user/user-dashboard*')) ? 'active' : '' }}">
                        <a href="{{route('user.dashboard')}}">
                            <span class="iconify" data-icon="clarity:dashboard-solid-badged"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item {{ (request()->is('user/photo*')) ? 'active' : '' }}">
                        <a href="{{route('user.photo')}}">
                            <span class="iconify" data-icon="icon-park-outline:transaction"></span>
                            Image
                        </a>
                    </li>
                    <li class="nav-item {{ (request()->is('user/payroll*')) ? 'active' : '' }}">
                        <a href="{{route('user.payroll')}}">
                            <span class="iconify" data-icon="icon-park-outline:transaction"></span>
                            Payroll
                        </a>
                    </li>
                   
                </ul>
            </nav>
        </div>
        <div class="rightSection">
            <div class="topbar">
                <div class="fold" onclick='foldSidebar();'>
                    <span class="iconify" data-icon="eva:menu-fill"></span>
                </div>
                <div class="right-element">
                    <div class="dropdown">
                        <a href="#" class="btn dropdown-toggle profile-manage" role="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('user/images/profile.png')}}">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <a class="dropdown-item" href="{{ route('user.profile') }}"><span class="iconify" data-icon="carbon:user-avatar"></span> Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="iconify" data-icon="ion:log-out-outline"></span> Log Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>



                        </ul>
                    </div>
                </div>
            </div>



            
            @yield('content')



        </div>
    </div>

    <!-- footer  -->

    <footer class="py-3 w-100">
        <div class="container">
            <div class="d-flex flex-wrap w-100 mx-auto">

                <div class=" flex-fill bd-highlight ">
                    <ul class="m-0 text-white">
                        {{-- <li class="list-style-none">+44 (0)xx xxxx 8xxxx</li>
                        <li class="list-style-none">support@admin.com</li>
                        <li class="list-style-none"> address goes here </li> --}}
                    </ul>
                </div>
                <div class="p-2 flex-fill bd-highlight">
                    <img src="{{ asset('user/images/company-logo-your-logo.png')}}" width="160px">
                </div>
                <div class="p-2 d-flex align-items-center footerContact">
                    {{-- <a href="" class="mx-2 text-decoration-none text-white">Help</a>
                    <a href="" class="mx-2 text-decoration-none text-white">Contact</a> --}}
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="{{ asset('user/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('user/js/iconify.min.js')}}"></script>
    <script src="{{ asset('user/js/wow.min.js')}}"></script>
    <script src='{{ asset('user/js/app.js')}}'> </script>

    
    {{-- datatables  --}}
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script> 
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script> 
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script> 
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.bootstrap4.min.js"></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> 
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script> 
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script> 
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.colVis.min.js"></script> 

    <script>
        new WOW().init();
    </script>
    <script>
        function pagetop() {
            window.scrollTo({
                top: 130,
                behavior: 'smooth',
            });
        }


      function success(msg){
            $.notify({
                    // title: "Update Complete : ",
                    message: msg,
                    // icon: 'fa fa-check'
                },{
                    type: "info"
                });

        }

        function dlt(){
                    swal({
                      title: "Are you sure?",
                      text: "You will not be able to recover this imaginary file!",
                      type: "warning",
                      showCancelButton: true,
                      confirmButtonText: "Yes, delete it!",
                      cancelButtonText: "No, cancel plx!",
                      closeOnConfirm: false,
                      closeOnCancel: false
                        }, function(isConfirm) {
                          if (isConfirm) {
                              swal("Deleted!", "Your imaginary file has been deleted.", "success");
                          } else {
                              swal("Cancelled", "Your imaginary file is safe :)", "error");

                          }
                  });
                }
    </script>
 <script type="text/javascript" src="{{asset('js/plugins/bootstrap-notify.min.js')}}"></script>
 <script type="text/javascript" src="{{asset('js/plugins/sweetalert.min.js')}}"></script>

@yield('script')
</body>

</html>