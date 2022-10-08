  @extends('layouts.master')
  
  @section('content')
     
 
       <div class="cotainer-fluid mt-4">
          <div class="row justify-content-center">

                <div class="col-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0 text-info"> {{$category}} </h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">have</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success p-2">
                            {{-- <span class="mdi mdi-arrow-top-right icon-item"></span> --}}
                            <i class="mdi fa-solid fa-laptop fs-2"></i>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-info">Category</h6>
                    </div>
                  </div>
                </div>

                <div class="col-3">
                  <div class="card" >
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0 text-info"> {{$tag}} </h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">have</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success ">
                            
                            <i class="mdi fa-solid fa-hashtag fs-2"></i>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-info"> Tag </h6>
                    </div>
                  </div>
                </div>

                <div class="col-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0 text-info"> {{$postCount}} </h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">have</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success ">
                         
                            <i class="fa-solid fa-blog mdi fs-2"></i>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-info">Post</h6>
                    </div>
                  </div>
                </div>

                <div class="col-3">
                  <div class="card" >
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0 text-info">{{$user}}</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">have</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success ">
                           
                            <i class="fa-solid fa-users mdi fs-2"></i>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-info">User</h6>
                    </div>
                  </div>
                </div>


          </div>
       </div>

       <div class="container-fluid mt-3">
        <div class="row">
             <div class="col-12">
                 <div class="card bg-hexa">
                    <div class="card-header">
                          <h3 class="text-center">Post List</h3>
                    </div>
                    <div class="card-body">
                           <table class="table table-bordered">
                                 <thead>
                                      <tr>
                                        <th scope="col">Serial</th>
                                        <th scope="col">Title</th>
                                        <th scope="col"> Category </th>
                                        <th scope="col"> Tag</th>
                                        <th scope="col"> Date</th>
                                        <th scope="col"> Action</th>
                                      </tr>
                                 </thead>
                                 <tbody>
                                          @if($post->count()>0)
                                              @foreach ($post as $key=>$item)
                                              <tr>
                                                <td > {{++$key}} </td>
                                                <td > {{$item->title}} </td>
                                                <td > {{$item->category->name}} </td>
                                                <td > 
                                                           @foreach ($item->tag as $tag)
                                                                 <span class="badge badge-primary"> {{$tag->name}} </span>
                                                           @endforeach     
                                               </td>
                                               <td>  {{$item->created_at->format('d-M-Y')}} </td>
                                                <td class="d-flex"> 
                                                    <a class="btn btn-sm btn-primary mr-2" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="fa-solid fa-eye"></i></a>
                                                     <a href="{{route('post.edit',Crypt::encryptString($item->id))}}" class="btn btn-sm btn-success mr-2"> <i class="fa-solid fa-pen-to-square"></i> </a>
                                                     <form action="{{route('post.destroy',$item->id)}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                          <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa-solid fa-trash"></i></button>
                                                     </form>
                                                </td>
                                              </tr>

                           




                                              @endforeach
                                          
                                           @else <tr>
                                                  <td class="100"> <h3>No Data Foud</h3> </td>
                                           </tr>
                                          @endif
                                 </tbody>
                           </table>
                    </div>
                    
                 </div>
             </div>
        </div>
    </div>


  @endsection