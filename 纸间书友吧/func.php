<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>纸间书友吧</title>
    <link rel="stylesheet" href="./func.css">
    <link rel="stylesheet" href="./font_4013428_fi9a2xy7j/iconfont.css">
    <script src="./font_4013428_fi9a2xy7j/iconfont.js"></script>
    <link rel="stylesheet" href="./swiper/swiper-bundle.min.css">
    <script type="text/javascript" src="./swiper/swiper-bundle.min.js"></script>
</head>
<body>
    <!--头部 header 热榜区域-->
    <header class="header">
        <ul>
            <li><a href="#">推荐</a></li>
            <li><a href="#">热榜</a></li>
            <li><a href="#">脑洞</a></li>
        </ul>
    </header>

    <!--侧边 nav 导航栏-->
    <div class="navbar">
        <input type="checkbox" id="checkbox">
        <label for="checkbox">
            <i class="iconfont icon-mulu" aria-hidden="true" style="font-size: 30px"></i>
        </label>
        <ul>
            <li>
                <i class="iconfont icon-yonghu" aria-hidden="true" style="font-size: 50px;"></i>
                <span>欢迎您登陆！</span>
            </li>
            <li>
                <!--不做跳转，防止点击给页面刷新 -->
                <a href="javascript:void(0)">
                    <i class="iconfont icon-tushu"></i>
                    <span>阅览</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" id="comment">
                    <i class="iconfont icon-jiaoliu"></i>
                    <span>消息</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i class="iconfont icon-tianjiajihua"></i>
                    <span>添加计划</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" id="likes">
                    <i class="iconfont icon-xihuan"></i>
                    <span>喜欢</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" id="delete">
                    <i class="iconfont icon-shanchu"></i>
                    <span>删除</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" id="exitFunc">
                    <i class="iconfont icon-tuichu"></i>
                    <span>退出</span>
                </a>
            </li>
        </ul>
    </div>

    <!--主内容区 main -->
    <main class="main">
        <!--今日推荐-->
        <h4>今日推荐</h4>
        <div class="NowReCom swiper">
            <div class="swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="img-box">
                        <img src="./img/porject/hotbook1.jpg" alt="活着">
                    </div>
                    <div class="bookMsg">
                        <h3>《活着》</h3>
                        <p> 作者:余华</p>
                        <p> 上架时间:2019/09</p>
                        <p> 评分:⭐⭐⭐⭐⭐</p>
                        <button class="button">阅读</button>
                    </div>
                    <em>
                        <img src="./img/hot.png" alt="hot" class="hotImg">
                    </em>
                    <div class="bookComment">
                        <svg t="1681620268171" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="9284" width="32" height="32"><path d="M749.013333 622.933333m-181.333333 0a181.333333 181.333333 0 1 0 362.666667 0 181.333333 181.333333 0 1 0-362.666667 0Z" fill="#FFCA5F" p-id="9285"></path><path d="M333.013333 164.266667m-42.666666 0a42.666667 42.666667 0 1 0 85.333333 0 42.666667 42.666667 0 1 0-85.333333 0Z" fill="#FFCA5F" p-id="9286"></path><path d="M720.853333 941.013333l-21.333333-14.08-162.346667-135.253333a19.84 19.84 0 0 0-13.226666-4.906667H205.866667a110.08 110.08 0 0 1-109.866667-110.08V298.666667a110.08 110.08 0 0 1 109.866667-110.293334h40.96v64H205.866667A45.866667 45.866667 0 0 0 160 298.666667v378.026666a46.08 46.08 0 0 0 45.866667 46.08h318.72a85.333333 85.333333 0 0 1 54.186666 19.626667l110.933334 92.373333v-75.093333a37.333333 37.333333 0 0 1 37.12-36.906667h65.493333a46.08 46.08 0 0 0 45.866667-46.08V298.666667a45.866667 45.866667 0 0 0-45.866667-45.866667H424.96v-64h367.36A110.08 110.08 0 0 1 902.186667 298.666667v378.026666a110.08 110.08 0 0 1-109.866667 110.08h-38.613333v111.786667l3.626666 17.92z" fill="#5C1CF7" p-id="9287"></path><path d="M306.133333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9288"></path><path d="M499.2 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9289"></path><path d="M692.053333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9290"></path></svg>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="img-box">
                        <img src="./img/porject/hotbook2.jpg" alt="">
                    </div>
                    <div class="bookMsg">
                        <h3>《断舍离》</h3>
                        <p> 作者:山下英子</p>
                        <p> 上架时间:2019/04</p>
                        <p> 评分:⭐⭐⭐⭐</p>
                        <button class="button">阅读</button>
                    </div>
                    <em>
                        <img src="./img/hot.png" alt="hot" class="hotImg">
                    </em>
                    <div class="bookComment">
                        <svg t="1681620268171" class="icon" viewBox="0 0 1024 1024" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" p-id="9284" width="32" height="32"><path d="M749.013333 622.933333m-181.333333 0a181.333333 181.333333 0 1 0 362.666667 0 181.333333 181.333333 0 1 0-362.666667 0Z" fill="#FFCA5F" p-id="9285"></path><path d="M333.013333 164.266667m-42.666666 0a42.666667 42.666667 0 1 0 85.333333 0 42.666667 42.666667 0 1 0-85.333333 0Z" fill="#FFCA5F" p-id="9286"></path><path d="M720.853333 941.013333l-21.333333-14.08-162.346667-135.253333a19.84 19.84 0 0 0-13.226666-4.906667H205.866667a110.08 110.08 0 0 1-109.866667-110.08V298.666667a110.08 110.08 0 0 1 109.866667-110.293334h40.96v64H205.866667A45.866667 45.866667 0 0 0 160 298.666667v378.026666a46.08 46.08 0 0 0 45.866667 46.08h318.72a85.333333 85.333333 0 0 1 54.186666 19.626667l110.933334 92.373333v-75.093333a37.333333 37.333333 0 0 1 37.12-36.906667h65.493333a46.08 46.08 0 0 0 45.866667-46.08V298.666667a45.866667 45.866667 0 0 0-45.866667-45.866667H424.96v-64h367.36A110.08 110.08 0 0 1 902.186667 298.666667v378.026666a110.08 110.08 0 0 1-109.866667 110.08h-38.613333v111.786667l3.626666 17.92z" fill="#5C1CF7" p-id="9287"></path><path d="M306.133333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9288"></path><path d="M499.2 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9289">
                        </path><path d="M692.053333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9290"></path></svg>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="img-box">
                        <img src="./img/porject/hotbook3.jpg" alt="">
                    </div>
                    <div class="bookMsg">
                        <h3>《黄金时代》</h3>
                        <p> 作者:王小波</p>
                        <p> 上架时间:2019/10</p>
                        <p> 评分:⭐⭐⭐⭐⭐</p>
                        <button class="button">阅读</button>
                    </div>
                    <em>
                        <img src="./img/hot.png" alt="hot" class="hotImg">
                    </em>
                    <div class="bookComment">
                        <svg t="1681620268171" class="icon" viewBox="0 0 1024 1024" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" p-id="9284" width="32" height="32"><path d="M749.013333 622.933333m-181.333333 0a181.333333 181.333333 0 1 0 362.666667 0 181.333333 181.333333 0 1 0-362.666667 0Z" fill="#FFCA5F" p-id="9285"></path><path d="M333.013333 164.266667m-42.666666 0a42.666667 42.666667 0 1 0 85.333333 0 42.666667 42.666667 0 1 0-85.333333 0Z" fill="#FFCA5F" p-id="9286"></path><path d="M720.853333 941.013333l-21.333333-14.08-162.346667-135.253333a19.84 19.84 0 0 0-13.226666-4.906667H205.866667a110.08 110.08 0 0 1-109.866667-110.08V298.666667a110.08 110.08 0 0 1 109.866667-110.293334h40.96v64H205.866667A45.866667 45.866667 0 0 0 160 298.666667v378.026666a46.08 46.08 0 0 0 45.866667 46.08h318.72a85.333333 85.333333 0 0 1 54.186666 19.626667l110.933334 92.373333v-75.093333a37.333333 37.333333 0 0 1 37.12-36.906667h65.493333a46.08 46.08 0 0 0 45.866667-46.08V298.666667a45.866667 45.866667 0 0 0-45.866667-45.866667H424.96v-64h367.36A110.08 110.08 0 0 1 902.186667 298.666667v378.026666a110.08 110.08 0 0 1-109.866667 110.08h-38.613333v111.786667l3.626666 17.92z" fill="#5C1CF7" p-id="9287"></path><path d="M306.133333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9288"></path><path d="M499.2 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9289">
                        </path><path d="M692.053333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9290"></path></svg>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="img-box">
                        <img src="./img/porject/hotbook4.jpg" alt="活着">
                    </div>
                    <div class="bookMsg">
                        <h3>《美顺与长生》</h3>
                        <p> 作者:毛建军</p>
                        <p> 上架时间:2018/08</p>
                        <p> 评分:⭐⭐⭐⭐</p>
                        <button class="button">阅读</button>
                    </div>
                    <em>
                        <img src="./img/hot.png" alt="hot" class="hotImg">
                    </em>
                    <div class="bookComment">
                        <svg t="1681620268171" class="icon" viewBox="0 0 1024 1024" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" p-id="9284" width="32" height="32"><path d="M749.013333 622.933333m-181.333333 0a181.333333 181.333333 0 1 0 362.666667 0 181.333333 181.333333 0 1 0-362.666667 0Z" fill="#FFCA5F" p-id="9285"></path><path d="M333.013333 164.266667m-42.666666 0a42.666667 42.666667 0 1 0 85.333333 0 42.666667 42.666667 0 1 0-85.333333 0Z" fill="#FFCA5F" p-id="9286"></path><path d="M720.853333 941.013333l-21.333333-14.08-162.346667-135.253333a19.84 19.84 0 0 0-13.226666-4.906667H205.866667a110.08 110.08 0 0 1-109.866667-110.08V298.666667a110.08 110.08 0 0 1 109.866667-110.293334h40.96v64H205.866667A45.866667 45.866667 0 0 0 160 298.666667v378.026666a46.08 46.08 0 0 0 45.866667 46.08h318.72a85.333333 85.333333 0 0 1 54.186666 19.626667l110.933334 92.373333v-75.093333a37.333333 37.333333 0 0 1 37.12-36.906667h65.493333a46.08 46.08 0 0 0 45.866667-46.08V298.666667a45.866667 45.866667 0 0 0-45.866667-45.866667H424.96v-64h367.36A110.08 110.08 0 0 1 902.186667 298.666667v378.026666a110.08 110.08 0 0 1-109.866667 110.08h-38.613333v111.786667l3.626666 17.92z" fill="#5C1CF7" p-id="9287"></path><path d="M306.133333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9288"></path><path d="M499.2 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9289">
                        </path><path d="M692.053333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9290"></path></svg>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="img-box">
                        <img src="./img/porject/hotbook5.jpg" alt="">
                    </div>
                    <div class="bookMsg">
                        <h3>《东奔西走》</h3>
                        <p> 作者:十月老肥</p>
                        <p> 上架时间:2022/07</p>
                        <p> 评分:⭐⭐⭐⭐⭐</p>
                        <button class="button">阅读</button>
                    </div>
                    <em>
                        <img src="./img/hot.png" alt="hot" class="hotImg">
                    </em>
                    <div class="bookComment">
                        <svg t="1681620268171" class="icon" viewBox="0 0 1024 1024" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" p-id="9284" width="32" height="32"><path d="M749.013333 622.933333m-181.333333 0a181.333333 181.333333 0 1 0 362.666667 0 181.333333 181.333333 0 1 0-362.666667 0Z" fill="#FFCA5F" p-id="9285"></path><path d="M333.013333 164.266667m-42.666666 0a42.666667 42.666667 0 1 0 85.333333 0 42.666667 42.666667 0 1 0-85.333333 0Z" fill="#FFCA5F" p-id="9286"></path><path d="M720.853333 941.013333l-21.333333-14.08-162.346667-135.253333a19.84 19.84 0 0 0-13.226666-4.906667H205.866667a110.08 110.08 0 0 1-109.866667-110.08V298.666667a110.08 110.08 0 0 1 109.866667-110.293334h40.96v64H205.866667A45.866667 45.866667 0 0 0 160 298.666667v378.026666a46.08 46.08 0 0 0 45.866667 46.08h318.72a85.333333 85.333333 0 0 1 54.186666 19.626667l110.933334 92.373333v-75.093333a37.333333 37.333333 0 0 1 37.12-36.906667h65.493333a46.08 46.08 0 0 0 45.866667-46.08V298.666667a45.866667 45.866667 0 0 0-45.866667-45.866667H424.96v-64h367.36A110.08 110.08 0 0 1 902.186667 298.666667v378.026666a110.08 110.08 0 0 1-109.866667 110.08h-38.613333v111.786667l3.626666 17.92z" fill="#5C1CF7" p-id="9287"></path><path d="M306.133333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9288"></path><path d="M499.2 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9289">
                        </path><path d="M692.053333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9290"></path></svg>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="img-box">
                        <img src="./img/porject/hotbook6.jpg" alt="">
                    </div>
                    <div class="bookMsg">
                        <h3>《龙族》</h3>
                        <p> 作者:江南</p>
                        <p> 上架时间:2022/02</p>
                        <p> 评分:⭐⭐⭐⭐⭐</p>
                        <button class="button">阅读</button>
                    </div>
                    <em>
                        <img src="./img/hot.png" alt="hot" class="hotImg">
                    </em>
                    <div class="bookComment">
                        <svg t="1681620268171" class="icon" viewBox="0 0 1024 1024" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" p-id="9284" width="32" height="32"><path d="M749.013333 622.933333m-181.333333 0a181.333333 181.333333 0 1 0 362.666667 0 181.333333 181.333333 0 1 0-362.666667 0Z" fill="#FFCA5F" p-id="9285"></path><path d="M333.013333 164.266667m-42.666666 0a42.666667 42.666667 0 1 0 85.333333 0 42.666667 42.666667 0 1 0-85.333333 0Z" fill="#FFCA5F" p-id="9286"></path><path d="M720.853333 941.013333l-21.333333-14.08-162.346667-135.253333a19.84 19.84 0 0 0-13.226666-4.906667H205.866667a110.08 110.08 0 0 1-109.866667-110.08V298.666667a110.08 110.08 0 0 1 109.866667-110.293334h40.96v64H205.866667A45.866667 45.866667 0 0 0 160 298.666667v378.026666a46.08 46.08 0 0 0 45.866667 46.08h318.72a85.333333 85.333333 0 0 1 54.186666 19.626667l110.933334 92.373333v-75.093333a37.333333 37.333333 0 0 1 37.12-36.906667h65.493333a46.08 46.08 0 0 0 45.866667-46.08V298.666667a45.866667 45.866667 0 0 0-45.866667-45.866667H424.96v-64h367.36A110.08 110.08 0 0 1 902.186667 298.666667v378.026666a110.08 110.08 0 0 1-109.866667 110.08h-38.613333v111.786667l3.626666 17.92z" fill="#5C1CF7" p-id="9287"></path><path d="M306.133333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9288"></path><path d="M499.2 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9289">
                        </path><path d="M692.053333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9290"></path></svg>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="img-box">
                        <img src="./img/porject/hotbook7.jpg" alt="">
                    </div>
                    <div class="bookMsg">
                        <h3>《孔乙己》</h3>
                        <p> 作者:鲁迅</p>
                        <p> 上架时间:2011/05</p>
                        <p> 评分:⭐⭐⭐⭐⭐</p>
                        <button class="button">阅读</button>
                    </div>
                    <em>
                        <img src="./img/hot.png" alt="hot" class="hotImg">
                    </em>
                    <div class="bookComment">
                        <svg t="1681620268171" class="icon" viewBox="0 0 1024 1024" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" p-id="9284" width="32" height="32"><path d="M749.013333 622.933333m-181.333333 0a181.333333 181.333333 0 1 0 362.666667 0 181.333333 181.333333 0 1 0-362.666667 0Z" fill="#FFCA5F" p-id="9285"></path><path d="M333.013333 164.266667m-42.666666 0a42.666667 42.666667 0 1 0 85.333333 0 42.666667 42.666667 0 1 0-85.333333 0Z" fill="#FFCA5F" p-id="9286"></path><path d="M720.853333 941.013333l-21.333333-14.08-162.346667-135.253333a19.84 19.84 0 0 0-13.226666-4.906667H205.866667a110.08 110.08 0 0 1-109.866667-110.08V298.666667a110.08 110.08 0 0 1 109.866667-110.293334h40.96v64H205.866667A45.866667 45.866667 0 0 0 160 298.666667v378.026666a46.08 46.08 0 0 0 45.866667 46.08h318.72a85.333333 85.333333 0 0 1 54.186666 19.626667l110.933334 92.373333v-75.093333a37.333333 37.333333 0 0 1 37.12-36.906667h65.493333a46.08 46.08 0 0 0 45.866667-46.08V298.666667a45.866667 45.866667 0 0 0-45.866667-45.866667H424.96v-64h367.36A110.08 110.08 0 0 1 902.186667 298.666667v378.026666a110.08 110.08 0 0 1-109.866667 110.08h-38.613333v111.786667l3.626666 17.92z" fill="#5C1CF7" p-id="9287"></path><path d="M306.133333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9288"></path><path d="M499.2 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9289">
                        </path><path d="M692.053333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9290"></path></svg>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>

            <!-- 如果需要导航按钮 -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <!--继续阅读-->
        <h4>继续阅读</h4>
        <div class="GotoRead swiper">
            <div class="swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="img-box">
                        <img src="./img/porject/hotbook7.jpg" alt="">
                    </div>
                    <div class="readPlan">
                        <h3>《孔乙己》</h3>
                        <span class="planText1">进度:</span><span class="planText2">65%</span>
                        <div class="myProgress">
                            <div class="myBar">
                            </div>
                        </div>
                        <button class="button">继续阅读</button>
                    </div>
                    <div class="bookComment">
                        <svg t="1681620268171" class="icon" viewBox="0 0 1024 1024" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" p-id="9284" width="32" height="32"><path d="M749.013333 622.933333m-181.333333 0a181.333333 181.333333 0 1 0 362.666667 0 181.333333 181.333333 0 1 0-362.666667 0Z" fill="#FFCA5F" p-id="9285"></path><path d="M333.013333 164.266667m-42.666666 0a42.666667 42.666667 0 1 0 85.333333 0 42.666667 42.666667 0 1 0-85.333333 0Z" fill="#FFCA5F" p-id="9286"></path><path d="M720.853333 941.013333l-21.333333-14.08-162.346667-135.253333a19.84 19.84 0 0 0-13.226666-4.906667H205.866667a110.08 110.08 0 0 1-109.866667-110.08V298.666667a110.08 110.08 0 0 1 109.866667-110.293334h40.96v64H205.866667A45.866667 45.866667 0 0 0 160 298.666667v378.026666a46.08 46.08 0 0 0 45.866667 46.08h318.72a85.333333 85.333333 0 0 1 54.186666 19.626667l110.933334 92.373333v-75.093333a37.333333 37.333333 0 0 1 37.12-36.906667h65.493333a46.08 46.08 0 0 0 45.866667-46.08V298.666667a45.866667 45.866667 0 0 0-45.866667-45.866667H424.96v-64h367.36A110.08 110.08 0 0 1 902.186667 298.666667v378.026666a110.08 110.08 0 0 1-109.866667 110.08h-38.613333v111.786667l3.626666 17.92z" fill="#5C1CF7" p-id="9287"></path><path d="M306.133333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9288"></path><path d="M499.2 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9289">
                        </path><path d="M692.053333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9290"></path></svg>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="img-box">
                        <img src="./img/porject/planbook1.jpg" alt="">
                    </div>
                    <div class="readPlan">
                        <h3>《数学实验》</h3>
                        <span class="planText1">进度:</span><span class="planText2">70%</span>
                        <div class="myProgress">
                            <div class="myBar">
                            </div>
                        </div>
                        <button class="button">继续阅读</button>
                    </div>
                    <div class="bookComment">
                        <svg t="1681620268171" class="icon" viewBox="0 0 1024 1024" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" p-id="9284" width="32" height="32"><path d="M749.013333 622.933333m-181.333333 0a181.333333 181.333333 0 1 0 362.666667 0 181.333333 181.333333 0 1 0-362.666667 0Z" fill="#FFCA5F" p-id="9285"></path><path d="M333.013333 164.266667m-42.666666 0a42.666667 42.666667 0 1 0 85.333333 0 42.666667 42.666667 0 1 0-85.333333 0Z" fill="#FFCA5F" p-id="9286"></path><path d="M720.853333 941.013333l-21.333333-14.08-162.346667-135.253333a19.84 19.84 0 0 0-13.226666-4.906667H205.866667a110.08 110.08 0 0 1-109.866667-110.08V298.666667a110.08 110.08 0 0 1 109.866667-110.293334h40.96v64H205.866667A45.866667 45.866667 0 0 0 160 298.666667v378.026666a46.08 46.08 0 0 0 45.866667 46.08h318.72a85.333333 85.333333 0 0 1 54.186666 19.626667l110.933334 92.373333v-75.093333a37.333333 37.333333 0 0 1 37.12-36.906667h65.493333a46.08 46.08 0 0 0 45.866667-46.08V298.666667a45.866667 45.866667 0 0 0-45.866667-45.866667H424.96v-64h367.36A110.08 110.08 0 0 1 902.186667 298.666667v378.026666a110.08 110.08 0 0 1-109.866667 110.08h-38.613333v111.786667l3.626666 17.92z" fill="#5C1CF7" p-id="9287"></path><path d="M306.133333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9288"></path><path d="M499.2 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9289">
                        </path><path d="M692.053333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9290"></path></svg>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="img-box">
                        <img src="./img/porject/planbook2.jpg" alt="">
                    </div>
                    <div class="readPlan">
                        <h3>《近代物理实验》</h3>
                        <span class="planText1">进度:</span><span class="planText2">100%</span>
                        <div class="myProgress">
                            <div class="myBar">
                            </div>
                        </div>
                        <button class="button">继续阅读</button>
                    </div>
                    <div class="bookComment">
                        <svg t="1681620268171" class="icon" viewBox="0 0 1024 1024" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" p-id="9284" width="32" height="32"><path d="M749.013333 622.933333m-181.333333 0a181.333333 181.333333 0 1 0 362.666667 0 181.333333 181.333333 0 1 0-362.666667 0Z" fill="#FFCA5F" p-id="9285"></path><path d="M333.013333 164.266667m-42.666666 0a42.666667 42.666667 0 1 0 85.333333 0 42.666667 42.666667 0 1 0-85.333333 0Z" fill="#FFCA5F" p-id="9286"></path><path d="M720.853333 941.013333l-21.333333-14.08-162.346667-135.253333a19.84 19.84 0 0 0-13.226666-4.906667H205.866667a110.08 110.08 0 0 1-109.866667-110.08V298.666667a110.08 110.08 0 0 1 109.866667-110.293334h40.96v64H205.866667A45.866667 45.866667 0 0 0 160 298.666667v378.026666a46.08 46.08 0 0 0 45.866667 46.08h318.72a85.333333 85.333333 0 0 1 54.186666 19.626667l110.933334 92.373333v-75.093333a37.333333 37.333333 0 0 1 37.12-36.906667h65.493333a46.08 46.08 0 0 0 45.866667-46.08V298.666667a45.866667 45.866667 0 0 0-45.866667-45.866667H424.96v-64h367.36A110.08 110.08 0 0 1 902.186667 298.666667v378.026666a110.08 110.08 0 0 1-109.866667 110.08h-38.613333v111.786667l3.626666 17.92z" fill="#5C1CF7" p-id="9287"></path><path d="M306.133333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9288"></path><path d="M499.2 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9289">
                        </path><path d="M692.053333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9290"></path></svg>
                    </div>
                </div>
                <div class="card swiper-slide lastCard">
                    <!-- 设置 添加书籍 -->
                    <div class="addbook">
                        <img src="./img/addbook.png" alt="">
                        <h3>添加书籍</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--前沿艺术-->
        <h4>前沿艺术</h4>
        <div class="FrontierArt swiper">
            <div class="swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="card-imgArt">
                        <img src="./img/porject/art1.jpg" alt="">
                        <span class="VIP-box">VIP精选</span>  <!--顶部-->
                        <span class="bot-box">电子书</span>  <!--底部-->
                        <div class="artTitle">
                            <h4>《极简西方艺术史》</h4>
                        </div>
                    </div>
                    <div class="bookComment">
                        <svg t="1681620268171" class="icon" viewBox="0 0 1024 1024" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" p-id="9284" width="32" height="32"><path d="M749.013333 622.933333m-181.333333 0a181.333333 181.333333 0 1 0 362.666667 0 181.333333 181.333333 0 1 0-362.666667 0Z" fill="#FFCA5F" p-id="9285"></path><path d="M333.013333 164.266667m-42.666666 0a42.666667 42.666667 0 1 0 85.333333 0 42.666667 42.666667 0 1 0-85.333333 0Z" fill="#FFCA5F" p-id="9286"></path><path d="M720.853333 941.013333l-21.333333-14.08-162.346667-135.253333a19.84 19.84 0 0 0-13.226666-4.906667H205.866667a110.08 110.08 0 0 1-109.866667-110.08V298.666667a110.08 110.08 0 0 1 109.866667-110.293334h40.96v64H205.866667A45.866667 45.866667 0 0 0 160 298.666667v378.026666a46.08 46.08 0 0 0 45.866667 46.08h318.72a85.333333 85.333333 0 0 1 54.186666 19.626667l110.933334 92.373333v-75.093333a37.333333 37.333333 0 0 1 37.12-36.906667h65.493333a46.08 46.08 0 0 0 45.866667-46.08V298.666667a45.866667 45.866667 0 0 0-45.866667-45.866667H424.96v-64h367.36A110.08 110.08 0 0 1 902.186667 298.666667v378.026666a110.08 110.08 0 0 1-109.866667 110.08h-38.613333v111.786667l3.626666 17.92z" fill="#5C1CF7" p-id="9287"></path><path d="M306.133333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9288"></path><path d="M499.2 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9289">
                        </path><path d="M692.053333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9290"></path></svg>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="card-imgArt">
                        <img src="./img/porject/art2.jpg" alt="">
                        <span class="VIP-box">VIP精选</span>  <!--顶部-->
                        <span class="bot-box">电子书</span>  <!--底部-->
                        <div class="artTitle">
                            <h4>《人生的智慧》</h4>
                        </div>
                    </div>
                    <div class="bookComment">
                        <svg t="1681620268171" class="icon" viewBox="0 0 1024 1024" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" p-id="9284" width="32" height="32"><path d="M749.013333 622.933333m-181.333333 0a181.333333 181.333333 0 1 0 362.666667 0 181.333333 181.333333 0 1 0-362.666667 0Z" fill="#FFCA5F" p-id="9285"></path><path d="M333.013333 164.266667m-42.666666 0a42.666667 42.666667 0 1 0 85.333333 0 42.666667 42.666667 0 1 0-85.333333 0Z" fill="#FFCA5F" p-id="9286"></path><path d="M720.853333 941.013333l-21.333333-14.08-162.346667-135.253333a19.84 19.84 0 0 0-13.226666-4.906667H205.866667a110.08 110.08 0 0 1-109.866667-110.08V298.666667a110.08 110.08 0 0 1 109.866667-110.293334h40.96v64H205.866667A45.866667 45.866667 0 0 0 160 298.666667v378.026666a46.08 46.08 0 0 0 45.866667 46.08h318.72a85.333333 85.333333 0 0 1 54.186666 19.626667l110.933334 92.373333v-75.093333a37.333333 37.333333 0 0 1 37.12-36.906667h65.493333a46.08 46.08 0 0 0 45.866667-46.08V298.666667a45.866667 45.866667 0 0 0-45.866667-45.866667H424.96v-64h367.36A110.08 110.08 0 0 1 902.186667 298.666667v378.026666a110.08 110.08 0 0 1-109.866667 110.08h-38.613333v111.786667l3.626666 17.92z" fill="#5C1CF7" p-id="9287"></path><path d="M306.133333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9288"></path><path d="M499.2 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9289">
                        </path><path d="M692.053333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9290"></path></svg>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="card-imgArt">
                        <img src="./img/porject/art3.jpg" alt="">
                        <span class="VIP-box">VIP精选</span>  <!--顶部-->
                        <span class="bot-box">严选专栏</span>  <!--底部-->
                        <div class="artTitle">
                            <h4>《时光出租屋》</h4>
                        </div>
                    </div>
                    <div class="bookComment">
                        <svg t="1681620268171" class="icon" viewBox="0 0 1024 1024" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" p-id="9284" width="32" height="32"><path d="M749.013333 622.933333m-181.333333 0a181.333333 181.333333 0 1 0 362.666667 0 181.333333 181.333333 0 1 0-362.666667 0Z" fill="#FFCA5F" p-id="9285"></path><path d="M333.013333 164.266667m-42.666666 0a42.666667 42.666667 0 1 0 85.333333 0 42.666667 42.666667 0 1 0-85.333333 0Z" fill="#FFCA5F" p-id="9286"></path><path d="M720.853333 941.013333l-21.333333-14.08-162.346667-135.253333a19.84 19.84 0 0 0-13.226666-4.906667H205.866667a110.08 110.08 0 0 1-109.866667-110.08V298.666667a110.08 110.08 0 0 1 109.866667-110.293334h40.96v64H205.866667A45.866667 45.866667 0 0 0 160 298.666667v378.026666a46.08 46.08 0 0 0 45.866667 46.08h318.72a85.333333 85.333333 0 0 1 54.186666 19.626667l110.933334 92.373333v-75.093333a37.333333 37.333333 0 0 1 37.12-36.906667h65.493333a46.08 46.08 0 0 0 45.866667-46.08V298.666667a45.866667 45.866667 0 0 0-45.866667-45.866667H424.96v-64h367.36A110.08 110.08 0 0 1 902.186667 298.666667v378.026666a110.08 110.08 0 0 1-109.866667 110.08h-38.613333v111.786667l3.626666 17.92z" fill="#5C1CF7" p-id="9287"></path><path d="M306.133333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9288"></path><path d="M499.2 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9289">
                        </path><path d="M692.053333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9290"></path></svg>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="card-imgArt">
                        <img src="./img/porject/art4.jpg" alt="">
                        <span class="VIP-box">VIP精选</span>  <!--顶部-->
                        <span class="bot-box">课程</span>  <!--底部-->
                        <div class="artTitle">
                            <h4>朗朗钢琴课</h4>
                        </div>
                    </div>
                    <div class="bookComment">
                        <svg t="1681620268171" class="icon" viewBox="0 0 1024 1024" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" p-id="9284" width="32" height="32"><path d="M749.013333 622.933333m-181.333333 0a181.333333 181.333333 0 1 0 362.666667 0 181.333333 181.333333 0 1 0-362.666667 0Z" fill="#FFCA5F" p-id="9285"></path><path d="M333.013333 164.266667m-42.666666 0a42.666667 42.666667 0 1 0 85.333333 0 42.666667 42.666667 0 1 0-85.333333 0Z" fill="#FFCA5F" p-id="9286"></path><path d="M720.853333 941.013333l-21.333333-14.08-162.346667-135.253333a19.84 19.84 0 0 0-13.226666-4.906667H205.866667a110.08 110.08 0 0 1-109.866667-110.08V298.666667a110.08 110.08 0 0 1 109.866667-110.293334h40.96v64H205.866667A45.866667 45.866667 0 0 0 160 298.666667v378.026666a46.08 46.08 0 0 0 45.866667 46.08h318.72a85.333333 85.333333 0 0 1 54.186666 19.626667l110.933334 92.373333v-75.093333a37.333333 37.333333 0 0 1 37.12-36.906667h65.493333a46.08 46.08 0 0 0 45.866667-46.08V298.666667a45.866667 45.866667 0 0 0-45.866667-45.866667H424.96v-64h367.36A110.08 110.08 0 0 1 902.186667 298.666667v378.026666a110.08 110.08 0 0 1-109.866667 110.08h-38.613333v111.786667l3.626666 17.92z" fill="#5C1CF7" p-id="9287"></path><path d="M306.133333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9288"></path><path d="M499.2 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9289">
                        </path><path d="M692.053333 497.28m-32 0a32 32 0 1 0 64 0 32 32 0 1 0-64 0Z" fill="#5519F9" p-id="9290"></path></svg>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php

    ?>
    <!--公共频道PublicChat-->
    <div class="PublicChat" id="publicChat">
        <h3>公共频道</h3>
        <div class="chatArea">
            <ul id="uls"></ul>
        </div>
        <div class="reply">
            <form action="function.php" method="get">
                <textarea id="replyText" name="replyText" cols="30" rows="3" placeholder="请输入"></textarea>
                <button id="replyBtn" type="submit" name="btnReply">发送</button>
            </form>
        </div>
    </div>

</body>

<script type="text/javascript" src="./func.js"></script>
<script>
    <!-- Initialize Swiper -->
    var swiper = new Swiper(".NowReCom", {
        slidesPerView: 4,
        spaceBetween: 20,
        freeMode: true,
        loop: true, // 循环模式选项
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        // 如果需要前进后退按钮
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    var swiper = new Swiper(".GotoRead", {
        slidesPerView: 4,
        spaceBetween: 20,
        freeMode: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

    });

    var swiper = new Swiper(".FrontierArt", {
        slidesPerView: 4,
        spaceBetween: 20,
        freeMode: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

    });
</script>
<?php
/* 创建空二维数组 */
$lists = array(array());
$lens = 0;   /* 文件行数 */


/* 打开文件 获取信息 */
$filename = "replychat.csv";
$fp = fopen($filename,"r"); /* 读取信息 */
/* 循环读取文件信息， 存放到一个二维数组中 */
while(!feof($fp)){
    $line = str_replace(array("\r\n"), "", fgets($fp));   /* 替换每一行的换行符   */
    if($line == ""){
        continue;
    }
    $lens++;
    $list = explode("##", $line);
    $lists[] = $list;
}
/* 关闭文件 */
fclose($fp);

/* 创建 li 的 评论留言盒子 */   /* 用于显示 */
echo "<script> addList($lens) </script>";

/*/* 获取 控件 */
$li = ".uls-lis-style:nth-child";
/* js 修改控件文本 */
for ($i =1; $i<=$lens; $i++){
    echo "<script>document.querySelector('$li(".$i.") .chat-name').innerText = '".print_r($lists[$i][0], true)."';</script>";
    echo "<script>document.querySelector('$li(".$i.") .chat-p').innerText = '".print_r($lists[$i][1], true)."';</script>";
    echo "<script>document.querySelector('$li(".$i.") .chat-date').innerText = '".print_r($lists[$i][2], true)."';</script>";
}


?>
</html>