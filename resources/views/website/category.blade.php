@extends('layouts.website')
@section('content')
    


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="container">
            <nav class="breadcrumb bg-transparent m-0 p-0">
                <a class="breadcrumb-item" href="{{route('website.home')}}">Home</a>
                <a class="breadcrumb-item" href="#">Category</a>
                <span class="breadcrumb-item active"> {{$category->name}} </span>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0"> {{$category->name}} </h3>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>
                    
                        @if($catPost->count() > 0)
                        @foreach ($catPost as $key=>$item)
                         @if($key < 4)
                        
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                               
                                <a href="{{route('website.post',$item->slug)}}">
                                <img class="img-fluid w-100" src="{{asset($item->image)}}" style="object-fit: cover;">
                                </a>
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                   <a href="{{route('website.category',$item->category->slug)}}">  {{$item->category->name}} </a>
                                        <span class="px-1">/</span>
                                        <span> {{$item->created_at->format('d M Y')}} </span>
                                    </div>
                                    <a class="" href="{{route('website.post',$item->slug)}}"> {{$item->title}} </a>
                                    <p class="m-0"> {!!Str::limit($item->description,40)!!} </p>
                                </div>
                            
                            </div>
                        </div>
                        @endif
                        @endforeach
                        @endif

                      
                    </div>
                    
                    <div class="mb-3">
                        <a href=""><img class="img-fluid w-100" src="{{asset('website')}}/img/ads-700x70.jpg" alt=""></a>
                    </div>
                    
                    <div class="row">

                        @if($catPost->count() > 0)
                        @foreach ($catPost as $key=>$item)
                         @if($key < 10)
                        <div class="col-lg-6">
                            <div class="d-flex mb-3">
                                <img src="{{asset($item->image)}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="{{route('website.category',$item->category->slug)}}"> {{$item->category->name}} </a>
                                        <span class="px-1">/</span>
                                        <span> {{$item->created_at->format('M d, Y')}} </span>
                                    </div>
                                    <a class="h6 m-0" href="{{route('website.post',$item->slug)}}"> {{$item->title}} </a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        @endif
       
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <nav aria-label="Page navigation">
                              <ul class="pagination justify-content-center">
                             
                                {{$catPost->links()}}
                              </ul>
                            </nav>
                        </div>
                    </div>
                </div>

               
                     {{--Website sidebar  --}}
                     @include('website.includes.sidebar')

            </div>
        </div>
    </div>
    </div>
    <!-- News With Sidebar End -->

    @endsection