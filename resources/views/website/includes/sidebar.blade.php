<div class="col-lg-4 pt-3 pt-lg-0">
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
</div>