@extends('layouts.app')

@section('content')

    <div  class="container">
        <div style="display:flex; justify-content:center ;padding-top:20px;" >

        
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

            <input type="submit" value="Submit">
            
        
        </form>
    </div>

    </div>

@endsection
