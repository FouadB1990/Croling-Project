<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('layouts.head')
   

</head>

<body>

    <div class="wrapper">

        <!--=================================
 preloader -->

        <div id="pre-loader">
            <img src="assets/images/pre-loader/loader-01.svg" alt="">
        </div>

        <!--=================================
 preloader -->

        @include('layouts.main-header')

        @include('layouts.main-sidebar')

        <!--=================================
 Main content -->
        <!-- main-content -->






        <div class="content-wrapper">
            <div class="page-title">
            <div class="row">
                <h4 class="mb-0">Hello {{$sailorinfo->name}}</h4>
            </div>
            <br/>

                <!-- widgets 1 -->
            <div class="row">
                <div class="col-sm-6">
                    <ul class="list-group">
                        <li class="list-group-item active" style="font-size: 1.4em;">Personal Info</li>
                        <img class="card-img-top" src="{{asset('/images')}}/{{$sailorinfo->image}}" alt="Card image cap">

                        <!-- <li class="list-group-item" style="font-size: 1.2em;">Arabic Name: <span style="word-break: break-all;">{{$sailorinfo->image}}</span></li> -->
                        <li class="list-group-item" style="font-size: 1.2em;">Arabic Name: <span style="word-break: break-all;">{{$sailorinfo->name_ar}}</span></li>
                        <li class="list-group-item" style="font-size: 1.2em;">Nationality: <span style="word-break: break-all;">{{$sailorinfo->nationality}}</span></li>
                        <li class="list-group-item" style="font-size: 1.2em;">Date Of Birth: <span style="word-break: break-all;">{{$sailorinfo->date_of_birth}}</span></li>
                        <li class="list-group-item" style="font-size: 1.2em;">Place Of Birth: <span style="word-break: break-all;">{{$sailorinfo->place_of_birth}}</span></li>
                    </ul>
                </div>

                <div class="col-sm-6">                        
                    <ul class="list-group">
                        <li class="list-group-item active" style="font-size: 1.4em;">Passport Info</li>
                        <li class="list-group-item" style="font-size: 1.2em;">Passport Number: <span style="word-break: break-all;">{{$sailorinfo->passport_number}}</span></li>
                        <li class="list-group-item" style="font-size: 1.2em;">Date Of Passpot End: <span style="word-break: break-all;">{{$sailorinfo->date_of_passpot_end}}</span></li>
                        <li class="list-group-item" style="font-size: 1.2em;">Naval Passport Number: <span style="word-break: break-all;">{{$sailorinfo->naval_passport_number}}</span></li>
                        <li class="list-group-item" style="font-size: 1.2em;">Date Of Passport Naval End: <span style="word-break: break-all;">{{$sailorinfo->date_of_passport_naval_end}}</span></li>
                        <li class="list-group-item" style="font-size: 1.2em;">Nearest Airport: <span style="word-break: break-all;">{{$sailorinfo->nearest_airport}}</span></li>
                    </ul>
                </div>
                   
                </div>
            </div>
            <!-- widgets 2 -->
            <br/>

            <div class="row">
                <div class="col-sm-6">
                    <ul class="list-group">
                        <li class="list-group-item active" style="font-size: 1.4em;">Bank Info</li>
                        <li class="list-group-item" style="font-size: 1.2em;">Bank Name: <span style="word-break: break-all;">{{$sailorinfo->bank_name}}</span></li>
                        <li class="list-group-item" style="font-size: 1.2em;">Bank Branch: <span style="word-break: break-all;">{{$sailorinfo->bank_branch}}</span></li>
                        <li class="list-group-item" style="font-size: 1.2em;">Bank Address: <span style="word-break: break-all;">{{$sailorinfo->bank_address}}</span></li>
                        <li class="list-group-item" style="font-size: 1.2em;">Account Number: <span style="word-break: break-all;">{{$sailorinfo->account_number}}</span></li>
                        <li class="list-group-item" style="font-size: 1.2em;">IBN Number: <span style="word-break: break-all;">{{$sailorinfo->ibn_number}}</span></li>
                        <li class="list-group-item" style="font-size: 1.2em;">Swift Code: <span style="word-break: break-all;">{{$sailorinfo->swift_code}}</span></li>
                    </ul>
                </div>

                <div class="col-sm-6">                        
                    <ul class="list-group">
                        <li class="list-group-item active" style="font-size: 1.4em;">Contact Info</li>
                        <li class="list-group-item" style="font-size: 1.2em;">Phone: <span style="word-break: break-all;">{{$sailorinfo->phone}}</span></li>
                        <li class="list-group-item" style="font-size: 1.2em;">Email: <span style="word-break: break-all;">{{$sailorinfo->email}}</span></li>
                        <!-- <li class="list-group-item" style="font-size: 1.2em;">Password: <span style="word-break: break-all;">{{$sailorinfo->password}}</span></li> -->
                    </ul>
                </div>
                </div>
            
            <!-- Orders Status widgets-->
        
            <!--=================================
 wrapper -->

            <!--=================================
 footer -->

       <!-- main content wrapper end-->
    </div>
    </div>
    </div>

    <!--=================================
 footer -->
    
    @include('layouts.footer-scripts')

</body>

</html>
