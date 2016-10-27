<?php
/**
 * Created by PhpStorm.
 * User: Sabin Maharjan
 * Date: 10/1/2015
 * Time: 3:32 PM
 */

 @extends('admin')

 @section('breadcrumb')
 <div class="row">
   <div class="col-md-3">
     <h3 class="panel-title">Album</h3>
   </div>
   <div class="col-md-4">

 {!! Form::open(array('method' => 'Post', 'url' => 'album/search')) !!}

             <div class="form-group">
                 <label class="sr-only" for="search_text">Search Text</label>
                 {!! Form::text('search_text',null,array('class'=>'form-control', 'placeholder' => 'Search Album')) !!}
             </div>
 </div>
 <div class="col-md-2">

 {!! form::submit('Search',[' class'=>'btn btn-primary form-control'])!!}
 {!! Form::close() !!}
 </div>

 <div class="col-md-3">
     <div class="sub-menu">
         <a href="{{url('albums/create')}}"><i class="fa fa-plus-circle fa-2x pull-right"></i></a>
     </div>
 </div>
 </div>



 @stop

 @section('adminContent')
     <div class="table-responsive album-content">
         <table class="table table-hover table-striped">
             <thead>
             <th> TITLE</th>
             <th> DESCRIPTION</th>
             <th> DATE CREATED</th>
             <th> USER</th>
             <th> ACTIONS</th>
             </thead>

             <tbody>

             @foreach($albums as $album)
                 <tr>
                     <td><a href="{!! url('photo-album/' . $album->id) !!}">{!! $album->title !!}</a></td>
                     <td>{!! $album->description !!}</td>
                     <td>{!! $album->date_created !!}</td>
                          <td>{!! $album->user->username !!}</td>
                     <td>{!! link_to_route('albums.edit', '', array($album->id),array('class' => 'fa fa-pencil fa-fw')) !!}</td>
                      <td>
                                         {!! Form::open(['method' => 'DELETE', 'route' => ['albums.destroy', $album->id]]) !!}

                                         {!! Form::button('<span class="fa fa-trash-o"></span>', array('class'=>'btn btn-default', 'type'=>'submit')) !!}
                                         {!!Form::close() !!}
                                     </td>
             @endforeach
                 </tr>
             </tbody>
         </table>

     </div>
 @stop
