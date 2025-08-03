<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MDC-LOGIN</title>
    <link rel="stylesheet" href="mdc-css/mdc_login.css">    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">    
</head>
<body>
     <!-- <div><img src="mdc-img/login-bg4.png"></div> -->
     <div class="login-container">
        <div class="container1">
            <div style="text-transform: uppercase;
            font-weight: 700;
            font-size: 25px;">Đăng nhập</div>

            <div style="font-weight: 500;
                font-size: 13px;">Chào mừng các em đã trở lại</div>

            <div><img src="mdc-img/mdc-logo.jpg"></div>                
        </div>            
        <div class="container2">
            <div class="sub-container">
                <div class="img-container"><img src="mdc-icon/user.png"></div>
                <input placeholder="Mã Học Sinh">
            </div>
            <div class="sub-container">
                <div class="img-container"><img src="mdc-icon/padlock.png"></div>
                <input placeholder="Mật Khẩu" type="password"  id="password">
                <img src="mdc-icon/eye-close.png" id="eyeicon" style="margin-right: 10px;
                cursor: pointer;
                width: 30px;">
            </div>
            <div class="QMK">Quên mật khẩu?</div>
            <div class="login-button"><button>ĐĂNG NHẬP</button></div>
        </div>            
    </div>

    <script>
        let eyeicon = document.getElementById("eyeicon");
        let password = document.getElementById("password");

        eyeicon.onclick = function(){
            if(password.type == "password"){
                password.type = "text";
                eyeicon.src = "mdc-icon/eye-open.png";
            }else{
                password.type = "password";
                eyeicon.src = "mdc-icon/eye-close.png";
            }
        }
    </script>
</body>
</html>

