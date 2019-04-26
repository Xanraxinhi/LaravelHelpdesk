<!DOCTYPE html>
<html>
<title>@yield('head.title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/app.css">
<style>
  body {font-family: Arial, Helvetica, sans-serif;}
  .w3-bar-block .w3-bar-item {
    padding: 20.5px;
    font-weight: bold;
  }
</style>
<body>

  @include ('partials.sidebar')

  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

  <div class="w3-main" >

    <!-- <div id="myTop" class="w3-container w3-top w3-theme w3-large">
      <p><i class="fa fa-bars w3-button w3-teal w3-hide-large w3-xlarge" onclick="w3_open()"></i>
        <span id="myIntro" class="w3-hide" >Tips: Xem các lỗi thường gặp trước khi yêu cầu báo lỗi, có thể rắc rối của bạn đã được khắc phục nhiều lần.</span></p>
      </div> -->
        <div class="w3-container" style="padding:32px">
        @yield('body.content')
        <hr>
      </div> 
    </div>
  </div>
</div>

<div>   
  <footer class="w3-container" align="center" style="padding:32px">
    <p> Develop &copy; 2019, by Helpdesk System </p>
  </footer>

</div>

  @include ('partials.script')

</body>
</html> 

