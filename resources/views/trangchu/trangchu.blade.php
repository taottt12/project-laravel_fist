@extends('trangchu.layout')
@section('content')

<div class="banner" style="width: 98%; height: 350px; margin: 1%">


    <div class="nhan">
        <style>
            .nhan {
                background-color: rgb(178, 2, 2);
                text-align: center;
            }

            .nhan img {
                width: 100%;
                height: 350px;
            }
        </style>
        <img id="img" onclick="changeImage()" src="a1pn.png" alt="">
    </div>
    <script>
        var index = 1;
        changeImage = function() {
            var imgs = ["https://tse4.mm.bing.net/th?id=OIP.HG3NCyDXbnGorKAc1ilX7gHaEr&pid=Api&P=0&h=180",
                "https://tse4.mm.bing.net/th?id=OIP.ghjDBD9VisMfoFbr9vK90wHaE7&pid=Api&P=0&h=180",
                "https://tse4.mm.bing.net/th?id=OIP.4bc4xdwkSn6JVb9YJ2WUYQHaDV&pid=Api&P=0&h=180",
                "https://tse2.mm.bing.net/th?id=OIP.7QOvHI2mttpZXTruFiHlfwHaEK&pid=Api&P=0&h=180"
            ];
            document.getElementById('img').src = imgs[index];
            index++;
            if (index == 4) {
                index = 0;
            }
        }
        setInterval(changeImage, 1000);
    </script>
</div>
@endsection