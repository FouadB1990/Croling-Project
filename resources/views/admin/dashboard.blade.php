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
                    <div class="col-sm-6">
                        <h4 class="mb-0">Admin Dashboard</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                        </ol>
                    </div>
                </div>
            </div>
            

            <!-- fouad -->
        @if ($userinfo->count() == 0)
        
            <p>No User To Display.</p>
        
        @endif
    <div class="row">
      @foreach ($userinfo as $item)
        <div class="col-lg-4" style="margin-bottom: 60px !important">
            <div class="card" style="width: 22rem;">
                <img style="height: 200px;" src="{{asset('/images')}}/{{$item['image']}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">User Info Brief</h5>
                    <p class="card-text">User Name English : {{$item['name']}}</p>
                    <p class="card-text">User Name Arbic : {{$item['name_ar']}}</p>
                    <p class="card-text">Nationality : {{$item['nationality']}}</p>
                    <br/>
                    <a href="admin/user/info/{{$item['id']}}" class="btn btn-primary">More Info</a>

                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                        data-target="#delete{{ $item['id'] }}"><i class="fa fa-trash"></i>
                    </button>

                    <!-- <a href="admin/user/delet/{{$item['id']}}" class="btn btn-danger">Deleat User</a> -->
                    <!-- <a href="info/{{$item['id']}}" class="btn btn-primary">Go Info</a> -->
                </div>
            </div>
        </div>

         <!-- delete_modal_Grade -->
        <div class="modal fade" id="delete{{ $item['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                        id="exampleModalLabel">
                        Delete User
                    </h5>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.deletuser','test')}}" method="post">
                        {{method_field('DELETE')}}
                        @csrf
                        
                        <!-- {{ trans('Grades_trans.Warning_Grade') }} -->
                        <input id="id" type="hidden" name="id" class="form-control"
                                value="{{ $item['id'] }}">
                            <h4>Are you sure you have completed the deletion process?</h4>   
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Undo delete</button>
                            <button type="submit"
                                    class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
        
       
        

      @endforeach
      {{ $userinfo->links()}}
    </div>

    
            <!--=================================
 footer -->

        </div><!-- main content wrapper end-->
    </div>
    </div>
    </div>

    <!--=================================
 footer -->

    @include('layouts.footer-scripts')

</body>

</html>
