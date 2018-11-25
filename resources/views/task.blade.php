<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Daily Task</title>
</head>
<body>
    <div class="container">
        <div class="text-center">
           <h1>Daily Tasks</h1>
           <div class="row">
               <div class="col-md-12">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                    @endforeach
                   <form action="/TaskApp/saveTask" method="post" autocomplete="off">
                   {{csrf_field()}}
                        <input type="text" class="form-control" name="task" placeholder="Enter Your Task">                        <br>
                        <input type="submit" class="btn btn-primary" value="SAVE">
                        <input type="button" class="btn btn-warning" value="CLEAR">
                   </form>
                   <table class="table table-dark" style="margin-top:10px">
                       <th>ID</th>
                       <th>Task</th>
                       <th>Completed</th>
                       <th>Action</th>
                       <th></th>
                       @foreach($tasks as $task)
                       <tr>
                           <td>{{$task->id}}</td>
                           <td >{{$task->task}}</td>
                           @if($task->Iscompleted)
                               <td><button class="btn btn-success">COMPLETED</button></td>
                           @else
                            <td><button class="btn btn-warning">NOT COMPLETED</button></td>
                           @endif
                           @if($task->Iscompleted)
                           <td><a href="/TaskApp/markasnotcompleted/{{$task->id}}" class="btn btn-danger">Mark As Not Completed</a></td>
                           @else
                            <td><a href="/TaskApp/markascompleted/{{$task->id}}" class="btn btn-primary">Mark As Completed</a></td>
                           @endif
                           <td>
                            <a href="/TaskApp/deleteTask/{{$task->id}}" class="btn btn-dark">DELETE</a>
                            <a href="/TaskApp/updateTask/{{$task->id}}" class="btn btn-info">UPDATE</a>
                           </td>
                       </tr>
                       @endforeach
                    </table>
                </div>
           </div> 
        </div>
    </div>
</body>
</html>