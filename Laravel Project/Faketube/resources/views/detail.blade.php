@extends('layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Channel</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route(channels.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-md-5 text-bold">ID:</div>
            <div class="col-md-7">{{ $channel->id }}</div>
        </div>
    <div class="row">
            <div class="col-md-5 text-bold">Name:</div>
            <div class="col-md-7">{{ $channel->Name }}</div>
        </div>
        <div class="row">
            <div class="col-md-5 text-bold">Description:</div>
            <div class="col-md-7">{{ $channel->Description }}</div>
        </div>
        <div class="row">
            <div class="col-md-5 text-bold">SubscribersCount:</div>
            <div class="col-md-7">{{ $channel->SubscribersCount }}</div>
        </div>
        <div class="row">
            <div class="col-md-5 text-bold">URL:</div>
            <div class="col-md-7">{{ $channel->URL }}</div>
        </div>
   
    
@endsection
