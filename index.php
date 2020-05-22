<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
    <style>
        .banner {
            background: url();
            height: 350px;
        }

        *, ::after, ::before {
            box-sizing: border-box;
        }

        div {
            display: block;
        }

        *, ::after, ::before {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff;
        }

        .banner .heading {
            padding: 100px 50px;
            color: #272882;
            text-transform: uppercase;
        }

        :root {
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #007bff;
            --secondary: #6c757d;
            --success: #28a745;
            --info: #17a2b8;
            --warning: #ffc107;
            --danger: #dc3545;
            --light: #f8f9fa;
            --dark: #343a40;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }

        .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        .codegym-intro .col-md-3, .codegym-intro .col-md-9 {
            padding: 20px;
            background-color: #404040;
        }

        .codegym-intro .col-md-9 {
            color: white;
            font-size: 12pt;
        }

        *, ::after, ::before {
            box-sizing: border-box;
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -ms-overflow-style: scrollbar;
            -webkit-tap-highlight-color: transparent;
        }

        *, ::after, ::before {
            box-sizing: border-box;
        }

        *, ::after, ::before {
            box-sizing: border-box;
        }

        @media (min-width: 1200px)
            .container {
                max-width: 1140px;
            }

            @media (min-width: 992px)
                .container {
                    max-width: 960px;
                }

                @media (min-width: 768px)
                    .container {
                        max-width: 720px;
                    }

                    @media (min-width: 768px)
                        .container {
                            max-width: 720px;
                        }

                        @media (min-width: 576px)
                            .container {
                                max-width: 540px;
                            }

                            .container {
                                width: 100%;
                                padding-right: 15px;
                                padding-left: 15px;
                                margin-right: auto;
                                margin-left: auto;
                            }

                            .col-12 {
                                -ms-flex: 0 0 100%;
                                flex: 0 0 100%;
                                max-width: 100%;
                            }

                            .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
                                position: relative;
                                width: 100%;
                                min-height: 1px;
                                padding-right: 15px;
                                padding-left: 15px;
                            }
                            .row {
                                display: -ms-flexbox;
                                display: flex;
                                -ms-flex-wrap: wrap;
                                flex-wrap: wrap;
                                margin-right: -15px;
                                margin-left: -15px;
                            }
                            .footer {
                                background-color: #272882;
                                padding: 20px;
                                margin-top: 20px;
                            }
                            .footer h4, .footer a {
                                color: white;
                            }
                            .h4, h4 {
                                font-size: 1.5rem;
                            }
                            .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
                                margin-bottom: .5rem;
                                font-family: inherit;
                                font-weight: 500;
                                line-height: 1.2;
                                color: inherit;
                            }
                            h1, h2, h3, h4, h5, h6 {
                                margin-top: 0;
                                margin-bottom: .5rem;
                            }
                            .text-center {
                                text-align: center!important;
                            }
                            .h3, h3 {
                                font-size: 1.75rem;
                            }
                            .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
                                margin-bottom: .5rem;
                                font-family: inherit;
                                font-weight: 500;
                                line-height: 1.2;
                                color: inherit;
                            }
                            h1, h2, h3, h4, h5, h6 {
                                margin-top: 0;
                                margin-bottom: .5rem;
                            }
                            button, input {
                                overflow: visible;
                            }
                            button, input, optgroup, select, textarea {
                                margin: 0;
                                font-family: inherit;
                                font-size: inherit;
                                line-height: inherit;
                            }
                            .form-control {
                                display: block;
                                width: 100%;
                                padding: .375rem .75rem;
                                font-size: 1rem;
                                line-height: 1.5;
                                color: #495057;
                                background-color: #fff;
                                background-clip: padding-box;
                                border: 1px solid #ced4da;
                                border-radius: .25rem;
                                transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                            }
                            @media screen and (prefers-reduced-motion: reduce)
                                .form-control {
                                    transition: none;
                                }
                                input[type="text" i] {
                                    padding: 1px 2px;
                                }
                                input {
                                    -webkit-writing-mode: horizontal-tb !important;
                                    text-rendering: auto;
                                    color: -internal-light-dark-color(black, white);
                                    letter-spacing: normal;
                                    word-spacing: normal;
                                    text-transform: none;
                                    text-indent: 0px;
                                    text-shadow: none;
                                    display: inline-block;
                                    text-align: start;
                                    -webkit-appearance: textfield;
                                    background-color: -internal-light-dark-color(rgb(255, 255, 255), rgb(59, 59, 59));
                                    -webkit-rtl-ordering: logical;
                                    cursor: text;
                                    margin: 0em;
                                    font: 400 13.3333px Arial;
                                    padding: 1px 2px;
                                    border-width: 2px;
                                    border-style: inset;
                                    border-color: -internal-light-dark-color(rgb(118, 118, 118), rgb(195, 195, 195));
                                    border-image: initial;
                                }
                                body {
                                    margin: 0;
                                    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
                                    font-size: 1rem;
                                    font-weight: 400;
                                    line-height: 1.5;
                                    color: #212529;
                                    text-align: left;
                                    background-color: #fff;
                                }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="codeGym.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Lịch khai giảng <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Chương trình</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Khoá học</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tin tức & Sự kiện</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<div class="container-fluid">
    <div class="banner">
        <div class="heading">
            <h3>Đào tạo lập trình</h3>
            <h1>Hiện đại</h1>
        </div>
    </div>
</div>
<div class="row codegym-intro">
    <div class="col-md-3">
        <img src="https://demo.codegym.vn/web/codegym-bootstrap-layout/images/CodeGym-Logo-small.png" alt="">
    </div>
    <div class="col-md-9">
        <p>CodeGym ra đời với mục tiêu đào tạo những lập trình viên hiện đại, là chủ lực cung cấp nhân lực chất lượng
            cao cho ngành công nghiệp, góp phần nâng tầm phát triển ngành phần mềm Việt Nam, tiến kịp tiêu chuẩn quốc
            tế.</p>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h3 class="text-center title">
            Các chương trình đào tạo
        </h3>
        <div class="card-deck text-center">
            <div class="card">
                <div class="card-header">

                    CAREER

                </div>
                <div class="card-body">
                    <p>Chương trình đào tạo full-stack developer chuyên nghiệp trong vòng 6 tháng dành cho người học từ
                        đầu.
                    </p>
                    <p>
                        <button class="btn btn-primary">Tìm hiểu thêm</button>
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">


                    ACCELERATOR


                </div>
                <div class="card-body">
                    <p>Chương trình đào tạo nhanh để cập nhật công nghệ mới và những lĩnh vực có nhu cầu tuyển dụng cao.
                    </p>
                    <p>
                        <button class="btn btn-primary">Tìm hiểu thêm</button>
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">


                    PREMIUM


                </div>
                <div class="card-body">
                    <p>Chương trình học tập đặc biệt dành cho lập trình viên đam mê nâng cao tay nghề và trình độ.</p>
                    <p>
                        <button class="btn btn-primary">Tìm hiểu thêm</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row gallery">
        <div class="col-12">
            <h3 class="text-center title">
                Hình ảnh hoạt động
            </h3>
        </div>
        <div class="col-md-4">
            <a href="">
                <img src="https://demo.codegym.vn/web/codegym-bootstrap-layout/images/1.jpg" alt="">
            </a>
        </div>
        <div class="col-md-4">
            <a href="">
                <img src="https://demo.codegym.vn/web/codegym-bootstrap-layout/images/2.jpg" alt="">
            </a>
        </div>
        <div class="col-md-4">
            <a href="">
                <img src="https://demo.codegym.vn/web/codegym-bootstrap-layout/images/3.jpg" alt="">
            </a>
        </div>
        <div class="col-md-4">
            <a href="">
                <img src="https://demo.codegym.vn/web/codegym-bootstrap-layout/images/4.jpg" alt="">
            </a>
        </div>
        <div class="col-md-4">
            <a href="">
                <img src="https://demo.codegym.vn/web/codegym-bootstrap-layout/images/5.jpg" alt="">
            </a>
        </div>
        <div class="col-md-4">
            <a href="">
                <img src="https://demo.codegym.vn/web/codegym-bootstrap-layout/images/6.jpg" alt="">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h3 class="text-center title">LIÊN HỆ</h3>
        </div>
        <div class="col-md-6">
            <img class="address" src="https://demo.codegym.vn/web/codegym-bootstrap-layout/images/address.png">
        </div>
        <div class="col-md-6">
            <h3 class="text-center">Liên hệ tư vấn</h3>
            <form action="">
                <div class="form-group">
                    <label>Họ và tên:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Số điện thoại:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nội dung:</label>
                    <textarea class="form-control"></textarea>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary btn-lg">LIÊN HỆ</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="fluid-contaner footer">
    <div class="row">
        <div class="col-md-3">
            <h4>GIỚI THIỆU</h4>
            <ul>
                <li><a href="#">Về CodeGym</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h4>CHƯƠNG TRÌNH</h4>
            <ul>
                <li><a href="#">Career</a></li>
                <li><a href="#">Premium</a></li>
                <li><a href="#">Accelerator</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h4>TÀI NGUYÊN</h4>
            <ul>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Tạp chí Lập trình</a></li>
                <li><a href="#">AgileBreackfast</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h4>CỘNG ĐỒNG</h4>
            <ul>
                <li><a href="#">Fanpage</a></li>
                <li><a href="#">Sự kiện</a></li>
            </ul>
        </div>
        <div class="col-12">
            <p class="text-center text-white">CodeGym@2018. All rights reserved.</p>
        </div>
    </div>
</div>
</body>
</html>