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
<!-- <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XProject - Administration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
    
    <main>
        <h3 class="text-primary text-center my-3">Employee Detail</h3>
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
            </div>
        <div class="row">
            <div class="col-md-5 text-bold">Name</div>
            <div class="col-md-7">{{ $employee->Name }}</div>
        </div>
        <div class="row">
            <div class="col-md-5 text-bold">Address</div>
            <div class="col-md-7">{{ $employee->Address }}</div>
        </div>
        <div class="row">
            <div class="col-md-5 text-bold">Salary</div>
            <div class="col-md-7">{{ $employee->Salary }}</div>
        </div>
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html> -->

