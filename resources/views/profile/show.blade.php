@extends('adminlte::page')
@section('title','User profile')
@section('content_header')
  <h1><i class="fas fa-user-circle text-info"></i> User profile:</h1>
@endsection
@section('content')
<table class="table " style="margin-bottom:5px">
  <tbody>
    
    <i class="fas fa-image mr-1 text-info "></i>
    <label>User Image:</label>
    <br>  
    <tr>
      <td><a href="{{$user->image}}"><img src="{{$user->image}}" alt="User profile image " class="rounded-circle" height="120" width="200"></a></td>
    </tr>
    <tr>
      <td >
        <i class="fas fa-signature text-info"></i>
        <label for="">User Name:</label>
        {{ $user->name }}
      </td>
    </tr>
    <tr>
      <td>
        <i class="fas fa-envelope text-info"></i>
        <label for="">User Email:</label>
         {{ $user->email }}</td>
     </tr>
      
      </tbody>
</table>

@endsection

