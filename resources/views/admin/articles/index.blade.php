@extends('admin') 
@section('breadcrumb')
<div class="row">
	<div class="col-md-1">
		<h3 class="panel-title">project</h3>
	</div>



	@stop @section('adminContent')
	<div class="table-responsive">
		<table class="table table-hover table-striped" id="projects-table">
			<thead>
				<th>TITLE</th>
				<th>DESCRIPTION</th>
				<th>CATEGORY</th>

				<th>URL</th>


			</thead>
			<tbody>
				@foreach($projects as $project)
				<tr>
					<td>{!! substr($project->title,0,100) !!}</td>
					<td>{!! substr($project->description,0,35) !!}</td>
					<td>{!! $project->date_created !!}</td>
					<td>{!! $project->url !!}</td>

					<td>{!! link_to_route('project.edit', 'edit', array($project->id),
						array('class' => 'fa fa-pencil fa-fw')) !!}</td>
					</td>
					@endforeach
				</tr>
			</tbody>
		</table>
		
	</div>
	@stop