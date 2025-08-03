<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MDC-USER</title>
    <link rel="stylesheet" href="mdc-css/mdc_user.css">
    <link rel="stylesheet" href="mdc-css/general.css">
    <link rel="stylesheet" href="mdc-css/footer.css">
    <link rel="stylesheet" href="mdc-css/sidebar.css">    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="mdc-school-name">
            <div class="menu"><img src="mdc-icon/menu.png" style="height: 20px;                
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
        <!-- <div class="close">   
                                   
                            
        </div> -->
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
    
    <nav style="margin-bottom: 100px;">
        <div style="color: rgb(0,164,0);
        font-size: 28px;
        font-weight: 700;            
        margin-bottom: 25px;
        margin-left: 40px;">MÔN HỌC CỦA BẠN</div>
        <div class="option-search" style="margin-left: 40px;">
            <div class="option">
                <select style="color: white;
                background-color: rgb(0,164,0);
                font-size: 10px;
                font-weight: 700;
                padding: 6px 10px;
                border: none;
                border-radius: 5px;
                margin-right: 20px;
                cursor: pointer;">
                    <option style="background-color: white;
                    color: black;">HỌC KÌ 1 - 2024</option>
                    <option style="background-color: white;
                    color: black;">HỌC KÌ 2 - 2024</option>
                </select>
            </div>                
            <div class="search-container" id="searchContainer">
                <input placeholder="Tìm kiếm">
                <div class="search-icon" style="position: relative;
                display: flex;
                justify-content: center;">
                    <img src="mdc-icon/search.png">
                    <div class="tk">Tìm kiếm</div>
                </div>                    
            </div>        
        </div>

        <div class="subject-container">
            <div class="subject">
                <div class="subject-img"><img src="mdc-img/geography-copy.png"></div>
                <div class="info-subject">
                    <div class="subject-name">địa lý 11</div>
                    <div class="subject-teacher">
                        <div>Giáo viên: Văn Xuân Anh</div>
                        <div class="teacher-img"><img src="mdc-img/vxa.png"></div>
                    </div>
                    <div class="subject-type">Môn Học: Lựa Chọn - KHXH</div>
                </div>
            </div>

            <div class="subject">
                <div class="subject-img"><img src="mdc-img/math-copy.png"></div>
                <div class="info-subject">
                    <div class="subject-name">Giải tích 11</div>
                    <div class="subject-teacher">
                        <div>Giáo viên: Trần Trung Kiên</div>
                        <div class="teacher-img"><img src="mdc-img/ttk.png"></div>
                    </div>
                    <div class="subject-type">Môn Học: Bắt Buộc - KHTN</div>
                </div>
            </div>

            <div class="subject">
                <div class="subject-img"><img src="mdc-img/english.png"></div>
                <div class="info-subject">
                    <div class="subject-name" onclick="location.href='mdc-subject.php'">Tiếng Anh</div>
                    <div class="subject-teacher">
                        <div>Giáo viên: Yang Trí Phú</div>
                        <div class="teacher-img"><img src="mdc-img/ytb.png"></div>
                    </div>
                    <div class="subject-type">Môn Học: Bắt Buộc - Ngoại Ngữ 1</div>
                </div>
            </div>

            <div class="subject">
                <div class="subject-img"><img src="mdc-img/literature.png"></div>
                <div class="info-subject">
                    <div class="subject-name">ngữ văn 11</div>
                    <div class="subject-teacher">
                        <div>Giáo viên: Văn Xuân Enh</div>
                        <div class="teacher-img"><img src="mdc-img/vxa.png"></div>
                    </div>
                    <div class="subject-type">Môn Học: Bắt Buộc - KHXH</div>
                </div>
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
            <div class="middle-section" style="line-height: 20px;">
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
</body>
</html>