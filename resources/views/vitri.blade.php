<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Website Quản lý nhân sự</title>
    <style>
        @charset 'utf-8';

        body {
            margin: 0;
            padding: 0;
        }

        .main {
            width: 96%;
            height: auto;
            margin-left: 2%;
            margin-right: 2%;
            margin: auto;
        }

        .banner {
            width: 100%;
            height: 150px;
            /* margin-left: 10%;
    margin-right: 10%; */
            background-color: yellowgreen;
        }

        .footer {
            width: 100%;
            height: 150px;
            /* margin-left: 10%;
    margin-right: 10%; */
            background-color: yellowgreen;
        }

        /* menu ngang */
        .menu-ngang {
            width: 100%;
            height: 60px;
            background: #303030;
            border: #999 solid 4px;
            border-radius: 10px;
        }

        .menu-ngang ul {
            text-align: right;
            margin-right: 20px;
            list-style-type: none;
            color: #fff;
        }

        .menu-ngang ul li {
            display: inline-table;
            width: auto;
            height: 40px;
            line-height: 60px;
            margin-left: 2%;
            position: relative;
        }

        .menu-ngang ul li a {
            text-decoration: none;
            color: #fff;
            display: block;
        }

        .menu-ngang ul li :hover {
            color: aqua;
            background: #645f5f;
            border-radius: 3px;
        }

        .conten {
            width: 100%;
            height: auto;
            display: flex;
        }

        /* menu left */
        .menu-left {
            width: 20%;
            height: auto;
            background: #e2f4fd;

        }


        .menu-left ul {
            text-align: center;
            list-style-type: none;
            color: #fff;
        }

        .menu-left ul li {
            display: block;
            width: 180px;
            height: 40px;
            line-height: 40px;
            position: relative;
        }

        .menu-left ul li a {
            text-decoration: none;
            color: #666;
            display: block;
        }

        .menu-left ul li :hover {
            color: aqua;
            background: #645f5f;
            border-radius: 3px;
        }

        /* .menu-left{
    float: left;
    width: 15%;
    height: auto;
    background-color: bisque;
} */
        .center {
            float: left;
            width: 80%;
            height: auto;
            background-color: #e2f4fd;

        }

        .right {
            float: left;
            width: 20%;
            height: auto;
            background-color: #4db41e;
        }

        .button {
            padding: 15px 25px;
            font-size: 24px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #04AA6D;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
        }

        .button:hover {
            background-color: #00ff08
        }

        .button:active {
            background-color: #00ff08;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
    </style>
</head>
<?php

?>

<body>

    <div class="main" style="margin-top: 2px;">

        <div class="conten">
            <div class="menu-left">
                <nav>
                    <ul class="menu_top">
                        <li><a href="">Trang chủ</a></li>
                        <li><a href="{{  url('/nv') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Quản lý nhân viên</a></li>
                        <li><a href="{{  url('/pb') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Quản lý phòng ban</a></li>
                        <li><a href="{{  url('/vt') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vị trí</a></li>
                    </ul>
                </nav>
            </div>
            <div class="center">
                <div class="menu-ngang">
                    <nav>
                        <ul class="menu_top">
                            @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                                @auth
                                <li><a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a></li>
                                @else
                                <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                                @if (Route::has('register'))
                                <li><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                                @endif
                                @endauth
                            </div>
                            @endif
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
        <footer>
            <div style="background-color: #0091ff; text-align: center;">
                <h3>Công ty TNHH Truyền Thông Số</h3>
                <img src="https://www.webike.vn/frontend/moto-v2/pc/img/logo-moto.png?159169869320200827" style="size: 50%; margin-top: 30px; margin-bottom: 30px;" alt="">
                <p>Số ĐKKD: 0304710474</p>
                <p>Văn Phòng: 427 Trường Chinh, P.14, Q.Tân Bình, Tp.HCM
                    Địa chỉ làm việc: 309 Vườn Lài,
                    P.Phú Thọ Hòa, Q.Tân Phú, Tp.HCM</p>
            </div>
        </footer>
    </div>
    </div>
</body>

</html>