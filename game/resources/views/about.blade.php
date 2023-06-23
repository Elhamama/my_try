@extends('layouts.app')

@section('content')
    <style>
        body {
            background-color: #f2f2f2;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .content-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .rectangle {
            width: 700px;
            height: 500px;
            background-color: #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }

        .blog-image {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .BL {
            color: rgb(98, 76, 228);
            font-weight: bold;
            font-family: "Gill Sans", sans-serif;
        }
    </style>
    
    <body>
        <div class="container">
            <div class="content-wrapper">
                <div class="rectangle">
                    <h1 class="BL">Welcome to My Blog</h1>
                    <p>Hi, my name is Elham. I am 20 years old and I am studying computer engineering. This is my first year, and I'm really excited about delving into the world of technology and exploring its endless possibilities. Apart from my academic pursuits, I have a variety of hobbies that keep me engaged and help me unwind. In my free time, I enjoy immersing myself in the captivating worlds of books, as they transport me to different realms of imagination. Additionally, I find solace in the art of cooking, experimenting with flavors and creating delicious dishes that bring joy to both myself and others. To maintain a healthy lifestyle, I also indulge in running, which not only keeps me fit but also clears my mind and allows me to appreciate the beauty of nature. Lastly, movies are a great source of entertainment and inspiration for me. Whether it's exploring different genres or analyzing the storytelling techniques, I find immense pleasure in losing myself in the captivating narratives and thought-provoking themes presented on the big screen. Overall, these activities provide a balance in my life and contribute to my personal growth and well-being.</p>
                </div>
                <img class="blog-image" src="{{ asset('assets/photos/35170de0e1a481c7536813961eedc3a0.jpg') }}" alt="">
            </div>
        </div>

        <footer class="bg-gray-200 py-4">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center text-gray-600 dark:text-gray-400">
                    &copy; elham@gmail.com
                </div>
            </div>
        </footer>
    </body>
@endsection
