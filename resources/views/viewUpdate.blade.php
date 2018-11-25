<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Update Task</title>
</head>
<body>
    <div class="container"> 
            <form action="/TaskApp/update" method="post" style="margin-top:30px" >
            {{csrf_field()}}
                <input type="hidden" name="taskId" value="{{$taskdata->id}}">
                <input type="text" class="form-control" name="taskValue" value="{{$taskdata->task}}" >
                <div class="row" style="margin-top:10px">
                    <div class="col-md-8">
                        <button type=submit" class="btn btn-info" >UPDATE</button>
                        <button type=button" class="btn btn-danger">CANCEL</button>
                    </div>
                </div>
            </form>
    </div>
</body>
</html>