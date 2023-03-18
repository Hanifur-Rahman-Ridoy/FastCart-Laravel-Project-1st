<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
   @include('admin.includes.meta')
    
    <title>@yield('title')</title>
   
    @include('admin.includes.style')
</head>

<body>
    <!-- tap on top start -->
   
    <!-- tap on tap end -->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">

       @include('admin.includes.header')

       <!-- Page Body Start -->
        <div class="page-body-wrapper">
           
          @include('admin.includes.sidebar')
          
          <div class="page-body">

            @yield('body')

           @include('admin.includes.footer')
           
        </div>
        </div>
        <!-- Page Body End -->
        
    </div>
    <!-- page-wrapper End-->

    @include('admin.includes.modal')

  
    @include('admin.includes.script')

    @if (Session::has('message'))
  <script>
    $(document).ready(function(){

      toastr.success('{{ Session::get('message') }}');
    });
   
    
  </script>
@endif


   
</body>


</html>