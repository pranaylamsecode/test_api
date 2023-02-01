@extends('layouts.app')

@section('content')

    <div  class="container">
        <div style="display:flex; justify-content:center ;padding-top:20px;" >

            <table class="table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>User Id</th>
                    <th>Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach($data as $value)
                  <tr>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->price }}</td>
                    <td>{{ $value->user_id }}</td>
                    <td>
                        <div>
                            <input type="button" value="Edit" class="btn-sm btn-primary" data-toggle="modal" data-target="#myModal">
                            
                            <input type="button" value="Delete" class="btn-sm btn-danger">
                        </div>
                    </td>
                  </tr>
                 
                  @endforeach
                </tbody>
              </table>
            
    </div> 

    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
            <div >
                <div >
        
                
                <form action={{ url('/product/store') }} method="post">
                    @csrf
                    <label for="name">Name</label><br>
                    <input type="text" name="name">
                    <br>
                    <label for="price">price</label><br>
                    <input type="text" name="price">
                    <br>
                    <label for="user_id">user_id</label><br>
                    <input type="text" name="user_id">
                    <br>
        
                    <input type="submit" value="Submit" class="btn btn-primary">
                    
                
                </form>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  

    </div>

@endsection
