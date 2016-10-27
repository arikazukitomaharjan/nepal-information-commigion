<div class="search-form">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h4 class="h4-without-margin"><i class="fa fa-search"> </i> {{ trans('frontpage.Search') }}</h4>
        </div>
        <div class="panel-body">
            {!! Form::open(array('method' => 'Post', 'url' => 'posts/search')) !!}

            <div class="form-group">
                <label class="sr-only" for="search_text">Search Text</label>
                {!! Form::text('search_text',null,array('class'=>'form-control', 'placeholder' => 'Search Text')) !!}
            </div>
            <div class="form-group">
                <label class="sr-only" for="date">Year</label>
                {!! Form::text('date',null,array('class'=>'form-control', 'placeholder' => 'Year')) !!}
            </div>

            <div class="form-group">
                <label class="sr-only" for="type">Type</label>
                {!! Form::select('type',$categories,null,array('id'=>'category_id','class'=>'form-control','placeholder' => 'Categories')) !!}
            </div>

            <br><br>

            {!! form::submit('Search',[' class'=>'btn btn-primary form-control'])!!}


            {!! Form::close() !!}
        </div>

    </div>
</div>

  