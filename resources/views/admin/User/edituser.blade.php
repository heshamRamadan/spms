@extends('layouts.master')

@section('title')
   SPMS | Add New Users
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'edituser'] )
	
<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<h1>Edit User</h1>
	 <div class="row">
        <div class="col-md-8 " style="margin-left: 3%; margin-top:3%;">
           <div class="panel panel-primary reg-panal"  >
           <div class="panel-heading"><h3 style="color: white; ">New User</h3></div>
            <div class="panel-body">
            
			
				  <table class="table table-bordered table-striped" style="width: 100%; font-size: 1.5em;">
					    <thead >
					      <tr>
					        <th>Name</th>
					        <th>-----</th>
					      
					      </tr>
					    </thead>
					    <tbody>
					    @foreach ($users as $user)
					      <tr>
					        <td>{{$user->name}}</td>
					        <td><button type="button" class="btn btn-primary btn-sm">Edit</button> <button type="button" class="btn btn-primary btn-sm">Delete</button></td>
					      </tr>
					    	@endforeach
					    </tbody>
					  </table>
						</div>
						
						
						   
						
		
</div>
		
</div>
</div>
</div>

@endsection
