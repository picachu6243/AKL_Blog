<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@600&family=Martel&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/doc.css">
    <title>ALK Blog</title>
</head>

<body>
    <!-- Navbar -->
    @include('layouts.navbar')
    <!-- Container -->
    <div class="container">
        <div class="head-container">
            <div class="chapter">
                <button class="chapterbtn">Chương<i class="fa fa-chevron-down" aria-hidden="true"></i></button>
                <div class="chapter-content">
                    <a href="#">Chương 1</a>
                    <a href="#">Chương 2</a>
                    <a href="#">Chương 3</a>
                    <a href="#">Chương 4</a>
                    <a href="#">Chương 5</a>
                    <a href="#">Chương 6</a>
                </div>
            </div>
        </div>
        <div class="title">
            <h1>Đấu la đại lục 3</h1>
            <h2>Chương 1</h2>
        </div>
        <div class="item mx-auto">
                {{-- Add truyen --}}
        </div>
        <div class="next">
            <div class="next-btn">
                <a href="#"><span></span>Chương tiếp theo</a>
            </div>
        </div>
        <div class="interact">
            <div id="add">
                <button onclick="addFunction()" id="addbutton">
                    <i id="iconplus" class="fa fa-plus" aria-hidden="true"></i>
                    <p id="addbtn">Thêm vào thư viện</p>
                </button>
            </div>
            <div id="voted">
                <button onclick="votedFunction()" id="votedbutton">
                    <i id="iconvoted" class="fa fa-star-o" aria-hidden="true"></i>
                    <p id="votedbtn">Bình chọn</p>
                </button>
            </div>
            <div id="share">
                <div class="sharebtn">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                </div>
            </div>
        </div>
        <section id="box">
            <div class="comment">
                <div class="comment1">
                    <form class="comment-form">
                        <img id="img-avatar" src="images/avatar.png" alt="">
                        <p class="user-name">ALK Blog</p>
                        <textarea id="commentbox" placeholder="Để lại một bình luân"></textarea>
                        <div class="cmtbtn">
                            <input type="submit" value="Bình luận">
                            <button id="cancel">Huỷ</button>
                        </div>
                    </form>
                    <div id="list-top">
                        <div id="list">

                        </div>
                    </div>
                </div>

            </div>
            <!--  -->
            <div id="slide-art">
                <div class="title-slider">Có thể bạn sẽ thích</div>
                <div class="slider">
                    <div class="slides">
                        <!--  -->
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">
                        <!--  -->
                        <div class="slide first">
                            <a href="#"><img src="images/avt-truyen/thichdamnhauko.png" alt=""></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="images/avt-truyen/daikhaugiapsu.png" alt=""></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="images/avt-truyen/khongnho.png" alt=""></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="images/avt-truyen/olongvien.jpg" alt=""></a>
                        </div>
                        <!--  -->
                        <div class="navigation-auto">
                            <div class="auto-btn"></div>
                            <div class="auto-btn"></div>
                            <div class="auto-btn"></div>
                            <div class="auto-btn"></div>
                        </div>
                        <!--  -->
                    </div>
                    <!--  -->
                    <div class="navigation-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                    </div>
                </div>
            </div>
        </section>

        <div class="introduce"></div>
    </div>
    <!-- Footer -->
    @include('layouts.footer');

    <script type="text/javascript" src="js/js-read.js"></script>
    <script src="https://unpkg.com/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        let html = '';
        for (let i = 2; i <= 25; i++) {
            html += `<div class= "shadow col-md-4 py-2 col-6 masonry-items">
            <div class="w-100  border border-primary">
                <img src="/txt/tranh/dldl/DLDL 079_${i}.jpg" class="w-200 shadow rounded">
            </div>
        </div>`;
        }
        $(".item").append(html);
        setTimeout(() => {
            $(".item").masonry({
                itemSelector: ".masonry-items",
                columWitch: '.col-xl-12'
            });
        }, 100);
    </script>
</body>

</html>
