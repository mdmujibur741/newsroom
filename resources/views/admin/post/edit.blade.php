
@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3 bg-hexa">
                    <div class="card-header">
                        <h3 class="text-center text-light"> Post Create </h3>
                          @include('includes.error')
                    </div>

                    <div class="card-body">
                        <form action="{{route('post.update',$post->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title Name" value="{{$post->title}}">
                            </div>

                            <div class="form-group">
                                <label for="category">Category</label>
                                 <select name="category" id="category" class="form-control">
                                    <option value="" selected disabled> Choose Category </option>
                                       @foreach ($category as $item)
                                            <option value="{{$item->id}}" @if($post->category_id==$item->id) selected @endif> {{$item->name}} </option>
                                       @endforeach
                                 </select>
                            </div>

                            <div class="form-group">   
                                @foreach ($tag as $item)
                                <label for="tag{{$item->id}}"> <input type="checkbox" value="{{$item->id}}" name="tag[]" id="tag{{$item->id}}" class="m-2 p-1" @foreach ($post->tag as $t)
                                    @if($item->id==$t->id) checked @endif
                                @endforeach> {{$item->name}} </label>
                                @endforeach
                            </div>
                        
                            <div class="form-group">
                                <label for="summernote">Description</label>
                                <textarea class="form-control text-dark" name="description" id="summernote" rows="4"> {!!$post->description!!} </textarea>
                            </div>

                           


                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" type="file" id="formFile" name="image">
                              </div>
                              <div>
                                  <img src="{{asset($post->image)}}" width="30%" class="img-thumbnail float-end" alt="" srcset="">
                              </div>
                        
                            
                              

                            <button type="submit" class="btn btn-primary mr-2"> Update </button>
                           
                        </form>
                    </div>
                    <div class="card-footer">
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection




@section('style')
<link rel="stylesheet" href="{{asset('master')}}/plugin/summernote/summernote-bs4.min.css">
@endsection


@section('script')
<script src="{{asset('master')}}/plugin/summernote/summernote-bs4.min.js"></script>
<script>
    $(function () {
      // Summernote
      $('#summernote').summernote()
      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai",
        
      });
    })
  </script>
@endsection

