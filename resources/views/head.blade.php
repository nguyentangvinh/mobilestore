<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>{{ $title }}</title>

    <!-- Favicon  -->
    <link rel="icon" href="/home-template/img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    
    <link rel="stylesheet" href="/home-template/css/core-style.css">
    <link rel="stylesheet" href="/home-template/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <style>
      .container .row .col-md-3{         
            margin-bottom: 50px;
        }

      .hidden {
        display: none;
        
      }

      .header_area .classynav ul li .dropdown li a {
        font-size: 12px;
      }

      .header_area .classy-navbar{
        text-transform: uppercase;
      }
      
      .container .row .col-md-3 .product-description a h6:hover{
        color: rgb(221, 221, 6);
        
      }

      .quantity{
        display:flex;
        width:160px;
      }

    .search-ajax-result h4{
          font-size: 20px;
          margin-left: 10px;
      }

    .search-ajax-result h4 a{
        font-size: 16px;
        margin-left: 6px;
    }

    .search-ajax-result p{
        margin: 0;
        font-size: 14px;
        margin-left: 16px;
        /* font-style: italic; */
    }

    .media{
        padding-top: 6px;
        border-bottom: 1px solid #eeeeee;
    }

    .search-ajax-result {
        position: absolute;
        background-color: #fff;
        padding: 10px;
        z-index: 1000; 

        
    }

    
    </style>