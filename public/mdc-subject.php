<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MDC_SUBJECT</title>            
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="mdc-css/mdc_user.css">
    <link rel="stylesheet" href="mdc-css/general.css">
    <link rel="stylesheet" href="mdc-css/footer.css">
    <link rel="stylesheet" href="mdc-css/sidebar.css">
    <link rel="stylesheet" href="mdc-css/mdc_subject.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="mdc-school-name">
            <div class="menu" id="menu"><img src="mdc-icon/menu.png" style="height: 20px;                
            cursor: pointer;
            padding-left: 8px;
            padding-top: 6px;"></div>
            <div class="logo-container" onclick="location.href='index.php'"><img src="mdc-img/mdc-logo.jpg"></div>
            <div class="school-name-container">
                <div class="thpt">trường trung học phổ thông</div>
                <div class="name">mạc đĩnh chi</div>
            </div>
        </div>
        <div class="mdc-login">
            <div class="info-container">
                <div onclick="location.href='index.php'">trang chủ</div>
                <div onclick="location.href='mdc-user.php'">môn học</div>
                <div>hướng dẫn</div>
                <div>tin tức</div>
            </div>
            <div class="login-container">                    
                <div class="noti-container">
                    <img src="mdc-icon/notification.png" class="noti-icon">
                    <div class="tb-text">Thông báo</div>
                </div>
                <div class="find-container">
                    <img src="mdc-icon/search.png" class="search-icon">
                    <div class="tk-text">Tìm kiếm</div>
                </div>                                 
                
                <div class="user"></div>
            </div>                
        </div>
    </header>

    <div class="sidebar" id="sidebar">                    
        <div class="close" id="close">                
            <img src="mdc-icon/close.png" style="height: 20px;
            padding-top: 3px;">
            <div class="close-text">Đóng</div>                
        </div>
        
        <div class="mini-sidebar" style="margin-top: 50px;">
            <div class="mini-sidebar-container">
                <img src="mdc-icon/home.png">
                <div>Trang chủ</div>
            </div>            
            <div class="mini-sidebar-container">
                <img src="mdc-icon/lesson.png">
                <div>Khóa học</div>
            </div>            
            <div class="mini-sidebar-container">
                <img src="mdc-icon/instruction.png">
                <div>Hướng dẫn</div>
            </div>            
            <div class="mini-sidebar-container">
                <img src="mdc-icon/news.png">
                <div>Tin tức</div>
            </div>                
        </div> 
        
        <div class="MDC-ICON" style="
        margin-top: 100px;
        position: relative;">
            <img src="mdc-img/mdc-logo.jpg" style="height: 60px;
            padding-left: 60px;
            padding-top: 10px;">
            <p style="padding-left: 20px;
            position: absolute;
            top: 60px;
            left: 1px;">THPT MẠC ĐĨNH CHI</p>
        </div>
    </div>

    
    <nav class="content-container">       
           
        <div class="left-sidebar">
            <div style="font-weight: 700;
                font-size: 20px;
                margin-left: 70px;
                margin-bottom: 10px;">TIẾNG ANH 11
            </div>  
            <div class="subject-info">
                <img src="mdc-img/english.png" style="height: 150px;
                width: 200px;
                object-fit: cover;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
                border-radius: 10px;">
                <div style="margin-top: 8px;">Giáo viên: Yang Trí Phú</div>
                <div class="contact">
                    <img src="mdc-icon/phone-call.png" style="height: 15px;
                    margin-right: 10px;">
                    <div style="font-size: 15px;
                    color: rgb(0,164,0);
                    cursor: pointer;">Liên Hệ</div>
                </div>
            </div>
            <div class="more-info">
                <div class="more-info-content" style="background-color: rgb(0,164,0);">
                    <img src="mdc-icon/learn.png">
                    <div>Nội Dung</div>
                </div>
                <div class="more-info-content">
                    <img src="mdc-icon/notiBell.png">
                    <div>Thông Báo</div>
                </div>
                <div class="more-info-content">
                    <img src="mdc-icon/doc.png">
                    <div>Tài liệu</div>
                </div>
                <div class="more-info-content">
                    <img src="mdc-icon/chat.png">
                    <div>Thảo Luận</div>
                </div>
                <div class="more-info-content">
                    <img src="mdc-icon/check.png">
                    <div>Bài Tập</div>
                </div>
                <div class="more-info-content">
                    <img src="mdc-icon/pencil.png">
                    <div>Kiểm Tra</div>
                </div>
            </div>
        </div>
        <div class="right-content">                
            <div class="option1">
                <div class="option1-title">
                    <div class="gt-symbol" id="gt-symbol"></div>
                    <div style="
                    padding-top: 3px;">Bài 1: Thì Hiện Tại Đơn</div>
                </div>
                <div class="option1-header">
                    <div class="small-header">Tiêu Đề</div>                            
                    <div class="small-header">Hạn Hoàn Thành</div>                            
                    <div class="small-header">Tiến Độ</div>                            
                    <div class="small-header">Trạng Thái</div>                        
                </div>                                        
                <div class="lesson-content1"></div>                    
            </div>
            <div class="option2">                    
                <div class="option1-title">
                    <div class="gt-symbol" id="gt-symbol"></div>
                    <div style="
                    padding-top: 3px;">Bài Thuyết Trình 1</div>
                </div>
                <div class="option1-header">
                    <div class="small-header">Tiêu Đề</div>                            
                    <div class="small-header">Hạn Hoàn Thành</div>                            
                    <div class="small-header">Tiến Độ</div>                            
                    <div class="small-header">Trạng Thái</div>                            
                </div>                                     
                <div class="lesson-content1"></div>
            </div>
        </div>
    </nav>

    <footer>
        <div class="footer1">
            <div class="left-section">
                <div><img src="mdc-img/mdc-icon.png"></div>
                <div style="margin-left: 7px;">
                    <div style="text-transform: uppercase;
                    font-weight: 700;
                    font-size: 11px;">hệ thống giáo dục trực tuyến</div>
                    <div style="text-transform: uppercase;
                    font-weight: 700;
                    font-size: 15px;
                    letter-spacing: 1px;
                    margin-top: 2px;
                    margin-bottom: 2px;">trường thpt mạc đĩnh chi</div>
                    <div style="font-weight: 700;
                    font-size: 10px;">Mac Dinh Chi High School E-learning System</div>
                </div>
            </div>
            <div class="middle-section">
                <div style="font-weight: 700;">WEBSITE</div>
                <div style="font-size: 12px;
                font-weight: 500;">TRANG CHỦ TRƯỜNG THPT MẠC ĐĨNH CHI</div>
                <div style="font-size: 12px;
                font-weight: 500;">BỘ GIÁO DỤC VÀ ĐÀO TẠO</div>
            </div>
            <div class="right-section">
                <div style="font-weight: 700;">THÔNG TIN LIÊN LẠC</div>
                <div class="ttll">                        
                    <div><span><img src="mdc-icon/location.png"></span>Số 4 Tân Hòa Đông, Phường 14, Quận 6, Thành Phố Hồ Chí Minh</div>
                </div>
                <div class="ttll">                        
                    <div><span><img src="mdc-icon/phone-call.png"></span>0948837138</div>
                </div>
                <div class="ttll">                        
                    <div><span><img src="mdc-icon/email.png"></span>thptmdc6hcm@edu.com.vn</div>
                </div>
            </div>
        </div>

        <div class="footer2">Copyright 2023 Office of Student Affairs. MDC - Powered by No man</div>
       
    </footer>

    <script src="mdc-js/mdc_subject.js"></script>        
    <script src="mdc-js/mdc_subject1.js"></script>      
    <script src="mdc-js/sidebar.js"></script>  
    <script>
        var coll = document.getElementsByClassName("option1-title");
        var symbol = document.getElementsByClassName("gt-symbol");
        var i;
        for(i = 0; i < coll.length; i++){
            let subject_content = getSubjectInfo(i);
            let content0 = symbol[i];
            coll[i].onclick = function() {                                   
                let content = this.nextElementSibling;
                let content1 = content.nextElementSibling;                                        
                // var content1 = document.querySelector(`.lesson-content1`);
                // var content1 = this.nextElementSibling;
                if(content.style.opacity === "1"){
                    content.style.opacity = "0";
                }else{
                    content.style.opacity = "1";
                }
                if(content1.innerHTML === ''){
                    content1.innerHTML = subject_content;
                }else{
                    content1.innerHTML = '';
                }                    
                content0.classList.toggle("active");
            }
        }            
    </script>
</body>
</html>
