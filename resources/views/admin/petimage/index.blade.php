@extends('admin::curd.index')
@section('heading')
<i class="fa fa-file-text-o"></i> {!! trans('pet::petimage.name') !!} <small> {!! trans('cms.manage') !!} {!! trans('pet::petimage.names') !!}</small>
@stop

@section('title')
{!! trans('pet::petimage.names') !!}
@stop

@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="{!! URL::to('admin') !!}"><i class="fa fa-dashboard"></i> {!! trans('cms.home') !!} </a></li>
    <li class="active">{!! trans('pet::petimage.names') !!}</li>
</ol>
@stop

@section('entry')
<div class="box box-warning" id='entry-petimage'>
</div>
@stop

@section('tools')
@stop

@section('content')
<table id="main-list" class="table table-striped table-bordered">
    <thead>
        <th>{!! trans('pet::petimage.label.pet_id')!!}</th>
            <th>{!! trans('pet::petimage.label.title')!!}</th>
            <th>{!! trans('pet::petimage.label.image_path')!!}</th>
            <th>{!! trans('pet::petimage.label.mainpic')!!}</th>

    </thead>
</table>
@stop
@section('script')
<script type="text/javascript">

var oTable;
$(document).ready(function(){
    $('#entry-petimage').load('{{URL::to('admin/pet/petimage/0')}}');
    oTable = $('#main-list').dataTable( {
        "ajax": '{{ URL::to('/admin/pet/petimage') }}',
        "columns": [
            {data :'pet_id'},
            {data :'title'},
            {data :'image_path'},
            {data :'mainpic'},

        ],
        "petimageLength": 50
    });

    $('#main-list tbody').on( 'click', 'tr', function () {
        $(this).toggleClass("selected").siblings(".selected").removeClass("selected");

        var d = $('#main-list').DataTable().row( this ).data();

        $('#entry-petimage').load('{{URL::to('admin/pet/petimage')}}' + '/' + d.id);

    });
});
</script>
@stop

@section('style')
@stop