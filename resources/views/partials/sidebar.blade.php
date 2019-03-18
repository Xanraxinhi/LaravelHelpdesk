<nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;" id="mySidebar">
    <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>

    <a class=" w3-button w3-teal w3-bar-item" href="{{ url('/') }}">Trang chủ FAQ</a>


    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button  w3-bar-item  " >Đăng nhập</button>


    <div id="id01" class="w3-modal">
      <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

        <form class="w3-container" action="/action_page.php">
          <div class="w3-section">
            <label class="w3-text-teal"><b>Tài khoản</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Nhập tài khoản" name="usrname" required>
            <label class="w3-text-teal"><b>Mật khẩu</b></label>
            <input class="w3-input w3-border" type="text" placeholder="Nhập mật khẩu" name="psw" required>
            <button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Đăng nhập</button>
            <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Nhớ tài khoản
          </div>
        </form> 

        <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
          <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Đóng</button>
          <span class="w3-right w3-padding w3-hide-small">Quên <a href="#">mật khẩu?</a></span>
        </div>


      </div>
    </div>

    <button onclick="document.getElementById('id02').style.display='block'" class="w3-button  w3-bar-item  " >Báo lỗi</button>

    <div id="id02" class="w3-modal">
      <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

        <form class="w3-container" action="/action_page.php">
          <div class="w3-section">
            <label class="w3-text-teal"><b>Tiêu đề</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="vd: Laravel, Bootstrap, ..." name="usrname" required>
            <label class="w3-text-teal"><b>Miêu tả ngắn gọn</b></label>
            <input class="w3-input w3-border" type="text" placeholder="vd: lỗi font chữ trong world, CPU không khởi động,..." name="psw" required>
            <br><br>
            <input class="w3-file w3-border " type="file" name="myFile">
            <button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Gởi yêu cầu</button>
          </div>
        </form> 

        <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
          <button onclick="document.getElementById('id02').style.display='none'" type="button" class="w3-button w3-red">Đóng</button>
        </div>


      </div>
    </div>
  </nav>