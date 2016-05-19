@extends('layouts.master')

@section('title')
   SPMS | View Project
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'viewproject'] )
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >
	<h1>View Project</h1><br>
	
	 <div class="row">
	        <div class="col-md-8 " style="margin-left: 3%; margin-top:3%;">
	           <div class="panel panel-primary reg-panal"  >
	           <div class="panel-heading"><h3 style="color: white; ">Find project</h3></div>
	            <div class="panel-body">
	                 <label>Enter your project name</label>
	                   
	       			 <form  role="search" method="post" action="{{ route('projectdata') }}">
				      {!! csrf_field() !!}
				        <div class="form-group">
				          <br><input type="text" class="form-control" id="search" name="search"  placeholder="Search" style="display:inline;" autofocus >
				        </div>
				        
				        <button type="submit" class="btn btn-default">Search</button>
				   <input type="hidden" value="{{ Session::token() }}" name="_token">
				     
				    </form> 				
	           </div>
	        
			</div>
			</div>
		</div>
		
	   <div class="row">
           <div class="col-md-8 " style="margin-left: 3%; margin-top:3%;">
           <div class="panel panel-primary reg-panal"  >
           <div class="panel-heading"><h3 style="color: white; ">View All Projects</h3></div>
           <div class="panel-body">
				 <table class="table table-bordered table-striped" style="width: 100%; font-size: 1.5em;">
					    <thead style="background-color:#DEF0DA; color:#009425;">
					      <tr>
					        <th>Project Name</th>
					        <th>Project Manager</th>
					        <th>Start Date</th>
					        <th>Dead Line</th>
					      
					      </tr>
					    </thead>
					    <tbody>
					    @foreach ($projects as $project)
					      <tr>
					        <td>{{$project->name}}</td>
					       	<td>{{$project->manager->user->name}}</td>
					       	<td>{{$project->created_at}}</td>
					       	<td>{{$project->dead_line}}</td>
					      </tr>
					    	@endforeach
					    </tbody>
					  </table>
						</div>	
					
										    
	        </div> 
			</div>
			</div>
		</div>
</div>


	@endsection
