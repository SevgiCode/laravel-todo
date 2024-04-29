<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do</title>
    <link href="/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <h1 style="text-align:center">To Do List</h1>
    <button type="button" class="btn btn-success" ><a href="{{route('todo.create')}}">Add New</a></button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">To Do</th>
      <th scope="col">Status</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($todo as $todo)
    
    <tr>
      <th scope="row">{{$todo->id}}</th>
      <td>{{$todo->todo}}</td>
      <td>{{$todo->status}}<button type="button" class="btn btn-warning"> <a href="{{route('todo.edit', ['todo' => $todo])}}">Edit</a></button></td>
      <td><button type="button" class="btn btn-danger">
        <form action="post" action="{{route('todo.destroy',['todo' => $todo])}}">
            @csrf
            @method('delete')
            <input type="submit" value="Delete"/>
        </form>
    </button></td>
    </tr>
    <@endforeach
  </tbody>
</table>

<script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>
</html>