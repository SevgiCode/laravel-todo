<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do Create</title>
    <link href="/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    
<form method="post" action="{{route('todo.store')}}">
@csrf
    @method('post')
    <label for="">To DO</label>
    <input type="text" value="" name="todo" placeholder="To DO">
    <br/>
    <label for="">Status</label>
    <input type="text" value="" name="status" placeholder="status">
    <br/>
    <div>
    <input type="submit" value="Save">
    </div>
</form>

<script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>
</html>