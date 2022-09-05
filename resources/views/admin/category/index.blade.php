@extends('layouts.master')

@section('content')

            <div class="container-fluid">
                <div class="row">
                     <div class="col-12">
                         <div class="card bg-hexa">
                            <div class="card-header">
                                  <h3 class="text-center">Category List</h3>
                            </div>
                            <div class="card-body">
                                   <table class="table table-bordered text-light">
                                         <thead>
                                              <tr>
                                                <th scope="col">Serial</th>
                                                <th scope="col">Category Name</th>
                                                <th scope="col"> Description</th>
                                                <th scope="col"> Date</th>
                                                <th scope="col"> Action</th>
                                              </tr>
                                         </thead>
                                         <tbody>
                                                  @if($category->count()>0)
                                                      @foreach ($category as $key=>$item)
                                                      <tr>
                                                        <td > {{$key++}} </td>
                                                        <td > {{$item->name}} </td>
                                                        <td > {{Str::limit($item->description,30)}} </td>
                                                        <td > {{$item->created_at->format('d-M-Y')}} </td>
                                                        <td class="d-flex justify-content-evenly"> 
                                                             <a href="{{route('category.edit',Crypt::encryptString($item->id))}}" class="btn btn-sm btn-success mr-2"> <i class="fa-solid fa-pen-to-square"></i> </a>
                                                             <form action="{{route('category.destroy',$item->id)}}" method="post">
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
                         </div>
                     </div>
                </div>
            </div>
    
@endsection