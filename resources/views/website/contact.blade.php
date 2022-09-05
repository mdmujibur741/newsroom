@extends('layouts.website')

@section('content')
    

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="container">
            <nav class="breadcrumb bg-transparent m-0 p-0">
                <a class="breadcrumb-item" href="#">Home</a>
                <span class="breadcrumb-item active">Contact</span>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Contact Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="bg-light py-2 px-4 mb-3">
                <h3 class="m-0">Contact Us For Any Queries</h3>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="bg-light mb-3" style="padding: 30px;">
                        <h6 class="font-weight-bold">Get in touch</h6>
                        <p>Labore ipsum ipsum rebum erat amet nonumy, nonumy erat justo sit dolor ipsum sed, kasd lorem sit et duo dolore justo lorem stet labore, diam dolor et diam dolor eos magna, at vero lorem elitr</p>
                       
                        @if($settings->count() >0)
                       @foreach($settings as $item)
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                            <div class="d-flex flex-column">
                                 
                                <h6 class="font-weight-bold">Our Office</h6>
                                <p class="m-0"> {{$item->address}} </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-2x fa-envelope-open text-primary mr-3"></i>
                            <div class="d-flex flex-column">
                                <h6 class="font-weight-bold">Email Us</h6>
                                <p class="m-0"> {{$item->email}} </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-2x fa-phone-alt text-primary mr-3"></i>
                            <div class="d-flex flex-column">
                                <h6 class="font-weight-bold">Call Us</h6>
                                <p class="m-0"> {{$item->phone}} </p>
                            </div>
                        </div>
                         @endforeach
                         @endif

                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact-form bg-light mb-3" style="padding: 30px;">

                        <div > 
                              @include('includes.error')
                        </div>
                        <form action="{{route('website.store')}}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <div class="control-group">
                                        <input type="text" class="form-control p-4" id="name" name="name" placeholder="Your Name" />
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <input type="email" name="email" class="form-control p-4" id="email" placeholder="Your Email"  />
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" name="subject" class="form-control p-4" id="subject" placeholder="Subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" name="message" rows="4" id="message" placeholder="Message"></textarea>
                               
                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    @endsection