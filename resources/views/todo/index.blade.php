<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags --> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Todo List</title>
  </head>
<body>
    <h1>Todo List</h1>
    <h3>
        <a href="/create">Create</a>
    </h3>
    <h3>
        <x-alert />
    </h3>
    @foreach($todos as $todo)
        <li>
            @if($todo->completed)
                <span style="text-decoration:line-through">{{$todo->title}}</span>
            @else 
                {{$todo->title}}
            @endif
            <a href="{{asset('/' . $todo->id . '/edit')}}">Edit</a>
            <a href="{{asset('/' . $todo->id . '/completed')}}">Completed</a>
            <a href="{{asset('/' . $todo->id . '/delete')}}">Delete</a>
        </li>
    @endforeach


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>