@extends('layouts.website')
@section('content')
    

    <!-- Top News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="owl-carousel owl-carousel-2 carousel-item-3 position-relative">

                @if($headerSlider->count() > 0)
                @foreach ($headerSlider as $item)

                <div class="d-flex">
                    <img src="{{asset($item->image)}}" style="width: 80px; height: 80px; object-fit: cover;">
                    <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                        <a class="text-secondary font-weight-semi-bold" href="{{route('website.post',$item->slug)}}"> {{$item->title}} </a>
                    </div>
                </div>

                @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- Top News Slider End -->


    <!-- Main News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">

                    @if($mainSlider->count() > 0)
                     @foreach ($mainSlider as $item)

                        <div class="position-relative overflow-hidden" style="height: 435px;">
                            <a href="{{route('website.post',$item->slug)}}">
                            <img class="img-fluid h-100" src="{{asset($item->image)}}" style="object-fit: cover;">
                        </a>
                            <div class="overlay">
                                <div class="mb-1">
                                    <a class="text-white" href="{{route('website.category',$item->category->slug)}}"> {{$item->category->name}} </a>
                                    <span class="px-2 text-white">/</span>
                                    <a class="text-white" href="{{route('website.post',$item->slug)}}"> {{$item->created_at->format('M d, Y')}} </a>
                                </div>
                                <a class="h2 m-0 text-white font-weight-bold" href="{{route('website.post',$item->slug)}}"> {{Str::limit($item->description,30)}} </a>
                            </div>
                        </div>
                       
                        @endforeach
                        @endif

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Categories</h3>
                        {{-- <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a> --}}
                    </div>

                      @if( $categorys->count() > 0)
                    @foreach ( $categorys as $cat)
                            <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                                <img class="img-fluid w-100 h-100" src="{{asset($cat->image)}}" style="object-fit: cover;">
                                <a href="{{route('website.category',$cat->slug)}}" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                                     {{$cat->name}}
                                </a>
                            </div>
                    @endforeach
                     @endif

                   
                  
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Featured News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                <h3 class="m-0">Featured</h3>
                
            </div>
            <div class="owl-carousel owl-carousel-2 carousel-item-4 position-relative">
                

                @if($featerSlider->count() > 0)
                @foreach ($featerSlider as $item)
                    

                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <a href="{{route('website.post',$item->slug)}}">
                    <img class="img-fluid w-100 h-100" src="{{asset($item->image)}}" style="object-fit: cover;">
                </a>
                    <div class="overlay">
                        <div class="mb-1" style="font-size: 13px;">
                            <a class="text-white" href="{{route('website.category',$item->category->slug)}}"> {{$item->category->name}} </a>
                            <span class="px-1 text-white">/</span>
                            <a class="text-white" href="{{route('website.post',$item->slug)}}"> {{$item->created_at->format('M d, Y')}} </a>
                        </div>
                        <a class="h4 m-0 text-white" href="{{route('website.post',$item->slug)}}"> {{$item->title}} </a>
                    </div>
                </div>
               
                @endforeach
                @endif
            </div>
        </div>
    </div>
    </div>
    <!-- Featured News Slider End -->


    <!-- Category News Slider Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">@if($catOne) {{$catOne->name}} @endif </h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">

                        @if($oneSlider->count()>0)
                        @foreach ($oneSlider as $item)
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{asset($item->image)}}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 13px;">
                                        <a href="{{route('website.category',$item->category->slug)}}"> {{$item->category->name}} </a>
                                        <span class="px-1">/</span>
                                        <span> {{$item->created_at->format('M d, Y')}} </span>
                                    </div>
                                    <a class="h4 m-0" href="{{route('website.post',$item->slug)}}"> {{$item->title}} </a>
                                </div>
                            </div>
                        @endforeach
                        @endif
                       


                    </div>
                </div>
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0"> @if($catTwo) {{$catTwo->name}} @endif </h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">

                        @if($twoSlider->count()>0)
                        @foreach ($twoSlider as $item)

                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{asset($item->image)}}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="{{route('website.category',$item->category->slug)}}"> {{$item->category->name}} </a>
                                    <span class="px-1">/</span>
                                    <span> {{$item->created_at->format('M d, Y')}} </span>
                                </div>
                                <a class="h4 m-0" href="{{route('website.post',$item->slug)}}">  {{$item->title}} </a>
                            </div>
                        </div>
                  
                        @endforeach
                        @endif
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Category News Slider End -->


    <!-- Category News Slider Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0"> @if($catThree) {{$catThree->name}} @endif </h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">

                    @if($threeSlider->count() > 0)
                    @foreach ($threeSlider as $item)
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{asset($item->image)}}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 13px;">
                                        <a href="{{route('website.category',$item->category->slug)}}"> {{$item->category->name}} </a>
                                        <span class="px-1">/</span>
                                        <span> {{$item->created_at->format('M d, Y')}} </span>
                                    </div>
                                    <a class="h4 m-0" href="{{route('website.post',$item->slug)}}">  {{$item->title}} </a>
                                </div>
                            </div>
                    @endforeach
                    @endif

                    </div>
                </div>
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">  @if($catFour) {{$catFour->name}} @endif </h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
           

                        @if($fourSlider->count() > 0)
                        @foreach ($fourSlider as $item)
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="{{asset($item->image)}}" style="object-fit: cover;">
                                    <div class="overlay position-relative bg-light">
                                        <div class="mb-2" style="font-size: 13px;">
                                            <a href="{{route('website.category',$item->category->slug)}}"> {{$item->category->name}} </a>
                                            <span class="px-1">/</span>
                                            <span> {{$item->created_at->format('M d, Y')}} </span>
                                        </div>
                                        <a class="h4 m-0" href="{{route('website.post',$item->slug)}}">  {{$item->title}} </a>
                                    </div>
                                </div>
                        @endforeach
                        @endif
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Category News Slider End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Popular</h3>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="{{route('website.popular')}}">View All</a>
                            </div>
                        </div>

                     @if($popularOne->count()>0)
                     @foreach ($popularOne as $item)                        
                        
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{asset($item->image)}}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="{{route('website.category',$item->category->slug)}}"> {{$item->category->name}} </a>
                                        <span class="px-1">/</span>
                                        <span> {{$item->created_at->format('M d, Y')}} </span>
                                    </div>
                                    <a class="h4" href="{{route('website.post',$item->slug)}}"> {{$item->title}} </a>
                                    <p class="m-0"> {{ Str::limit($item->description,35)}} </p>
                                </div>
                            </div>
                        </div>
                      
                        @endforeach
                        @endif

                         <div class="col-12">

                            @if($popularTwo->count() > 0)
                            @foreach ($popularTwo as $item)

                            <div class="d-flex mb-3">
                                <img src="{{asset( $item->image )}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="{{route('website.category',$item->category->slug)}}"> {{$item->category->name}} </a>
                                        <span class="px-1">/</span>
                                        <span> {{$item->created_at->format('M d, Y')}} </span>
                                    </div>
                                    <a class="h6 m-0" href="{{route('website.post',$item->slug)}}"> {{$item->title}} </a>
                                </div>
                            </div>

                            @endforeach
                            @endif
                         </div>

                    </div>
                    
                    <div class="mb-3 pb-3">
                        <a href=""><img class="{{asset('website')}}/img-fluid w-100" src="img/ads-700x70.jpg" alt=""></a>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Latest</h3>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="{{route('website.latest')}}">View All</a>
                            </div>
                        </div>


                        @if($headerSlider->count() >0)
                        @foreach ($headerSlider as $key=>$item)
                         @if($key < 2)
                                <div class="col-lg-6">
                                    <div class="position-relative mb-3">
                                        <img class="img-fluid w-100" src="{{asset($item->image)}}" style="object-fit: cover;">
                                        <div class="overlay position-relative bg-light">
                                            <div class="mb-2" style="font-size: 14px;">
                                                <a href="{{route('website.category',$item->category->slug)}}"> {{$item->category->name}} </a>
                                                <span class="px-1">/</span>
                                                <span> {{$item->created_at->format('M d, Y')}} </span>
                                            </div>
                                            <a class="h4" href="{{route('website.post',$item->slug)}}"> {{$item->title}} </a>
                                            <p class="m-0"> {{ Str::limit($item->description, 30)}} </p>
                                        </div>
                                    </div>                        
                                </div>
                          @endif
                        @endforeach
                        @endif

                 
                    <div class="col-12">
                        @if($headerSlider->count() > 0)
                        @foreach ($headerSlider as $key=>$item)
                          @if($key < 2)
                        <div class="d-flex mb-3">
                            <img src="{{asset( $item->image )}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="{{route('website.category',$item->category->slug)}}"> {{$item->category->name}} </a>
                                    <span class="px-1">/</span>
                                    <span> {{$item->created_at->format('M d, Y')}} </span>
                                </div>
                                <a class="h6 m-0" href="{{route('website.post',$item->slug)}}"> {{$item->title}} </a>
                            </div>
                        </div>  
               
                        @endif
                        @endforeach
                        @endif  
                    </div>
               

                       




                     </div> 
                </div>
                
                {{-- <div class="col-lg-4 pt-3 pt-lg-0">
                    <!-- Social Follow Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Follow Us</h3>
                        </div>
                        
                        @if($settings->count() > 0)
                        @foreach ($settings as $item)
                        <div class="d-flex mb-3">
                            <a target="_blank" href="{{$item->facebook}}" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #39569E;">
                                <small class="fab fa-facebook-f mr-2"></small><small>12,345 Fans</small>
                            </a>
                            <a target="_blank" href="{{$item->twitter}}" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #52AAF4;">
                                <small class="fab fa-twitter mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a target="_blank" href="{{$item->linkedin}}" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #0185AE;">
                                <small class="fab fa-linkedin-in mr-2"></small><small>12,345 Connects</small>
                            </a>
                            <a target="_blank" href="{{$item->instagram}}" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #C8359D;">
                                <small class="fab fa-instagram mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a target="_blank" href="{{$item->youtube}}" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #DC472E;">
                                <small class="fab fa-youtube mr-2"></small><small>12,345 Subscribers</small>
                            </a>
                            <a target="_blank" href="{{$item->vimeo}}" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #1AB7EA;">
                                <small class="fab fa-vimeo-v mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                        @endforeach
                        @endif
                       
                    </div>
                    <!-- Social Follow End -->

                    <!-- Newsletter Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Newsletter</h3>
                        </div>
                        <div class="bg-light text-center p-4 mb-3">
                            <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>
                            <div class="input-group" style="width: 100%;">
                                <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                            <small>Sit eirmod nonumy kasd eirmod</small>
                        </div>
                    </div>
                    <!-- Newsletter End -->

                    <!-- Ads Start -->
                    <div class="mb-3 pb-3">
                        @if($settings->count() > 0)
                        @foreach ($settings as $item)
                        <a href=""><img class="img-fluid" src="{{asset($item->image)}}" alt=""></a>
                        @endforeach
                        @endif
                    </div>
                    <!-- Ads End -->

                    <!-- Popular News Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Tranding</h3>
                        </div>

                        @if($trading->count() > 0)
                        @foreach ($trading as $key=>$item)
                        @if($key < 5)       
                        
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
                       
                        @endif
                        @endforeach
                        @endif
                       
                    </div>
                    <!-- Popular News End -->

                    <!-- Tags Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Tags</h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">

                            @if($tags->count() > 0)
                            @foreach ($tags as $item)
                            <a href="" class="btn btn-sm btn-outline-secondary m-1"> {{$item->name}} </a>
                            @endforeach
                            @endif
                            
                           
                        </div>
                    </div>
                    <!-- Tags End -->
                </div> --}}
                {{-- sidebar for website --}}

                 @include('website.includes.sidebar')

            </div>
        </div>
    </div>
    </div>
    <!-- News With Sidebar End -->

    @endsection