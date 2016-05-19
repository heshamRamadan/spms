
@extends('layouts.master')

@section('title')
   SPMS | issue# :{{$issue->id}}
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'viewtask'] )
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	
	<h1>issue# :{{$issue->id}}</h1><br>
	
	 

<div class="row">
				
		
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						Issue Id
					</div>
					<div class="panel-body">
						<p> {{$issue->id}}</p>
					</div>
				</div>
			</div>

			
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						Created By
					</div>
					<div class="panel-body">
						<p>{{$issue->user->created_by}}</p>
					</div>
				</div>
			</div>	
			
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						Assigned To
					</div>
					<div class="panel-body">
						<p>{{$issue->user->name}}</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						Tested By
					</div>
					<div class="panel-body">
						<p>{{$issue->developer->user->name}}</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						Project Name
					</div>
					<div class="panel-body">
						<p>{{$task->release->project->name}}</p>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						Release Id
					</div>
					<div class="panel-body">
						<p>{{$task->release_id}}</p>
					</div>
				</div>
			</div>
			
				<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading">
						Description
					</div>
					<div class="panel-body">
						<p>{{$issue->desc}}</p>
					</div>
				</div>
			</div>
			
			
			
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						Start Date
					</div>
					<div class="panel-body">
						<p>{{$task->created_at}}</p>
					</div>
				</div>
			</div>
			
				<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						End Date
					</div>
					<div class="panel-body">
						<p>{{$task->end_date}}</p>
					</div>
				</div>
			</div>
			
			
			
			
		</div><!-- /.row -->
</div>

	@endsection