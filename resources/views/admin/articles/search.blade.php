@extends('admin')

@section('breadcrumb')
<div class="row">
	<div class="col-md-1">
		<h3 class="panel-title">Article</h3>
	</div>
	<div class="col-md-8">

		{!! Form::open(array('method' => 'Post', 'url' => 'article/search'))
		!!}

		<div class="form-group col-md-3">
			<label class="sr-only" for="search_text">Search Text</label> {!!
			Form::text('search_text',null,array('class'=>'form-control',
			'placeholder' => 'Search Article')) !!}
		</div>
		
		<div class="form-group col-md-3">
			<label class="sr-only" for="search_text">Search Text</label> {!!
			Form::select('search_category',array('Select'=>'Select',$category),null,array('id'=>'category_id','class'=>'form-control'))
			!!}
		</div>
		<div class="col-md-2">{!! form::submit('Search',[' class'=>'btn
			btn-primary form-control'])!!} {!! Form::close() !!}
		</div>
		</div>

		<div class="col-md-3">
			<div class="sub-menu">
				<a href="{{url('articles/create')}}"><i
					class="fa fa-plus-circle fa-2x pull-right"></i></a> <a
					href="{{url('articlesExport')}}"><i
					class="fa fa-chevron-circle-up fa-2x pull-right"></i></a> <a
					href="{{url('articlesImportFileSelect')}}"><i
					class="fa fa-chevron-circle-down fa-2x pull-right"></i></a>
				<button type="button" id="delete-button-articles"
					class="delete-button">
					<i class="fa fa-trash-o"></i>
				</button>
			</div>
		</div>
	</div> 

@stop

@section('adminContent')
    <div class="table-responsive">
        <table class="table table-hover table-striped" id="articles-table">
            <thead>
            <th> TITLE</th>
            <th> DESCRIPTION</th>
            <th> DATE CREATED</th>
            <th> CATEGORY</th>
            <th> TYPE</th>
            <th> STATUS</th>
            <th> ACTIONS</th>
           <th>CHECKALL<input name="checkall" id="checkAll"
						type="checkbox" class="checkall"/></th>		
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{!! substr($article->title_ne,0,100) !!} </td>
                     <td>{!! substr($article->description_ne,0,35) !!}</td>
                    <td>{!! $article->date_created !!}</td>
                    <td>{!! $article->category->name !!}</td>
                    <td>{!! $article->type !!}</td>
                    <td>{!! $article->status !!}</td>
                    <td>{!! link_to_route('articles.edit', '', array($article->id), array('class' => 'fa fa-pencil
                        fa-fw')) !!}
                    </td>              
                </td>
                 <td><input name="check" class="check" value="{!! $article->id !!}"
						type="checkbox"/></td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
@stop