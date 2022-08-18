<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/login/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="/login/css/style.css">

    <title>{{ $title }}</title>
  </head>
  <body>
  
    <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img src="/login/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">             
              <div class="row justify-content-center">
                <div class="col-md-8">
                  <div class="mb-4">
                  <h3>Đăng Nhập</h3>
                  <p class="mb-4">Xin chào, vui lòng nhập thông tin đăng nhập</p>
                </div>
                @include('alert')
                <form action="/admin/login/store" method="post">
                  <div class="form-group first">
                    <label for="username">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="username" name="email">
    
                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" name="password">
                    
                  </div>
                  
                  <div class="d-flex mb-5 align-items-center">
                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                      <input type="checkbox" checked="checked" name="remember"/>
                      <div class="control__indicator"></div>
                    </label>
                    <span class="ml-auto"><a href="#" class="forgot-pass">Quên mật khẩu</a></span> 
                  </div>
    
                  <input type="submit" value="Log In" class="btn btn-block btn-primary">
    
                  @csrf
                </form>
                </div>
              </div>
              
            </div>
            
          </div>
        </div>
      </div>

  
    <script src="/login/js/jquery-3.3.1.min.js"></script>
    <script src="/login/js/popper.min.js"></script>
    <script src="/login/js/bootstrap.min.js"></script>
    <script src="/login/js/main.js"></script>
  </body>
</html>