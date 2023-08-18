<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faketube - Administration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
    
    <main>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Channels Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success float-end my-3" href="{{ route('channels.create') }}"> Create New +</a>
            </div>
        </div>
    </div>
        
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p> </div>
        @endif
       
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">SubscribersCount</th>
                <th scope="col">URL</th>
                <th scope="col" colspan="3" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($channels as $cha)
                <tr>
                    <th scope="row">{{$cha->id}}</th>
                    <td>{{$cha->Name}}</td>
                    <td>{{$cha->Description}}</td>
                    <td>{{$cha->SubscribersCount}}</td>
                    <td>{{$cha->URL}}</td>
                    <td>
                        <a href="{{ route('channels.show', ['channel' => $cha->id]) }}"><i class="bi bi-eye"></i></a>
                    </td>
                    <td>
                        <a href="{{ route('channels.edit', ['channel' => $cha->id]) }}"><i class="bi bi-pencil"></i></a>
                    </td>
                    <td>
                        <a data-id="{{ $cha->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger delete-button"><i class="bi bi-trash"></i></a>
                        <!-- Delete Confirmation Modal -->
                        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <form method="post" action="{{ route('channels.destroy', ['channel' => $cha->id]) }}">
                                @csrf
                                @method('DELETE')
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this todo? id = {{ $cha->id }}
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger" id="confirmDelete">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

       

    </main>
    {!! $channels->links() !!}
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
