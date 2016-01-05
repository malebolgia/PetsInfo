@extends('admin::curd.index')
@section('heading')
<i class="fa fa-file-text-o"></i> {!! trans('pet::pet.name') !!} <small> {!! trans('cms.manage') !!} {!! trans('pet::pet.names') !!}</small>
@stop

@section('title')
{!! trans('pet::pet.names') !!}
@stop

@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="{!! URL::to('admin') !!}"><i class="fa fa-dashboard"></i> {!! trans('cms.home') !!} </a></li>
    <li class="active">{!! trans('pet::pet.names') !!}</li>
</ol>
@stop

@section('entry')
<div class="box box-warning" id='entry-pet'>
</div>
@stop

@section('tools')
@stop

@section('content')
<table id="main-list" class="table table-striped table-bordered">
    <thead>
        <th>{!! trans('pet::pet.label.name_of_pet')!!}</th>
            <th>{!! trans('pet::pet.label.user_id')!!}</th>
            <th>{!! trans('pet::pet.label.perfecture_id')!!}</th>
            <th>{!! trans('pet::pet.label.reward_id')!!}</th>
            <th>{!! trans('pet::pet.label.lost_date')!!}</th>
            <th>{!! trans('pet::pet.label.color_of_pet')!!}</th>
            <th>{!! trans('pet::pet.label.age_of_pet')!!}</th>
            <th>{!! trans('pet::pet.label.character')!!}</th>
            <th>{!! trans('pet::pet.label.characteristics')!!}</th>
            <th>{!! trans('pet::pet.label.status')!!}</th>
            <th>{!! trans('pet::pet.label.map_lat')!!}</th>
            <th>{!! trans('pet::pet.label.map_lang')!!}</th>
            <th>{!! trans('pet::pet.label.other_amount')!!}</th>

    </thead>
</table>
@stop
@section('script')
<script type="text/javascript">

var oTable;
$(document).ready(function(){
    $('#entry-pet').load('{{URL::to('admin/pet/pet/0')}}');
    oTable = $('#main-list').dataTable( {
        "ajax": '{{ URL::to('/admin/pet/pet') }}',
        "columns": [
            {data :'name_of_pet'},
            {data :'user_id'},
            {data :'perfecture_id'},
            {data :'reward_id'},
            {data :'lost_date'},
            {data :'color_of_pet'},
            {data :'age_of_pet'},
            {data :'character'},
            {data :'characteristics'},
            {data :'status'},
            {data :'map_lat'},
            {data :'map_lang'},
            {data :'other_amount'},

        ],
        "petLength": 50
    });

    $('#main-list tbody').on( 'click', 'tr', function () {
        $(this).toggleClass("selected").siblings(".selected").removeClass("selected");

        var d = $('#main-list').DataTable().row( this ).data();

        $('#entry-pet').load('{{URL::to('admin/pet/pet')}}' + '/' + d.id);

    });
});
</script>
@stop

@section('style')
@stop