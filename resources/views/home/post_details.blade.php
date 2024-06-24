<!DOCTYPE html>
<html lang="en">
<head>

    <base href="/public">

@include('home.homecss')
</head>
<body>
    <!-- header section start -->
    <div class="header_section">
    @include('home.header')
        <!-- banner section start -->

    </div>

    <div style="text-align: center;" class="col-md-4">
        <div><img style="padding: 20px; height: 300px; width: 550px; margin:auto;" src="/postimage/{{$post->image}}"></div>
        <h3> <b>{{$post->title}}</b> </h3>
        <h4>{{$post->description}}</h4>
        <p>Post by Admin <b>{{$post->name}}</b></p>

     </div>

    @include('home.footer')
</body>
</html>
