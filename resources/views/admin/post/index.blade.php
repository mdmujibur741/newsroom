@extends('layouts.master')

@section('content')

            <div class="container-fluid">
                <div class="row">
                     <div class="col-12">
                         <div class="card bg-hexa">
                            <div class="card-header">
                                  <h3 class="text-center text-light">Post List</h3>
                            </div>
                            <div class="card-body">
                                   <table class="table table-bordered text-light">
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
                                                                  <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
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
                            <div class="card-fotter d-flex justify-content-center">
                               {{$post->links()}}
                            </div>
                         </div>
                     </div>
                </div>
            </div>
    


           
        
          



@endsection