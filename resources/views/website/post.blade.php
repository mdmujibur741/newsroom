@extends('layouts.website')

@section('content')
    

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="container">
            <nav class="breadcrumb bg-transparent m-0 p-0">
                <a class="breadcrumb-item" href="{{route('website.home')}}">Home</a>
                <a class="breadcrumb-item" href="#">Category</a>
                <a class="breadcrumb-item" href="{{route('website.category',$post->category->slug)}}"> @if($post==!null){{$post->category->name}}@endif </a>
                <span class="breadcrumb-item active">News Title</span>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- News Detail Start -->
                    <div class="position-relative mb-3">

                        

                        <img class="img-fluid w-100" src="@if($post==!null){{asset($post->image)}} @endif" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-3">
                                <a href=""> @if($post==!null){{$post->category->name}}@endif </a>
                                <span class="px-1">/</span>
                                <span> {{$post->created_at->format('M d, Y')}} </span>
                            </div>
                            <div>
                                <h3 class="mb-3"> @if($post==!null){{$post->title}}@endif </h3>
                                <p>  @if($post==!null){!!$post->description!!}@endif </p>

                            </div>
                        </div>
                    </div>
                    <!-- News Detail End -->

                    <!-- Comment List Start -->
                    <div class="bg-light mb-3" style="padding: 30px;">
                        <div id="disqus_thread"></div>
                    </div>
                    <!-- Comment List End -->

                    <!-- Comment Form Start -->
                    <div class="bg-light mb-3" style="padding: 30px;">
               
                    </div>
                    <!-- Comment Form End -->
                </div>

               
                  <!-- website sidebar -->
                  @include('website.includes.sidebar')


            </div>
        </div>
    </div>
    </div>
    <!-- News With Sidebar End -->

    @endsection

    @section('scirpt')
   
    <script>
       
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://newsroom-3.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    @endsection