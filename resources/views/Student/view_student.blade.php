<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        @notifyCss
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                overflow-x: hidden;
                background-color:#F5F5F5;
            }
            .wrapper{
                box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
                background-color:white;
                padding:20px;
            }
        </style>
    </head>
    <body>

    <div class=container>
       <div class="wrapper m-5">
           <div class="d-flex justify-content-end">
                <a href="{{route('student_add')}}" class="btn btn-primary mb-3">Add Student</a>
           </div>
            <div class="row d-flex justify-content-center">
                    <div class="col-md-12">
                        <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                <thead >
                                    <tr >
                                            <th>SL</th>
                                            <th>Student Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Actions</th>
                                    </tr>     
                                    </thead>
                                    <tbody>
                                        <?php $sn=1; ?>
                                        @foreach($students as $student)
                                        <tr>
                                        <td>{{$sn++}}</td>
                                        <td>{{$student->first_name}} {{$student->last_name}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->phone}}</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{route('student_view_all',$student->id)}}" class="btn btn-success">View</a>&nbsp;
                                            <a href="{{route('student_edit',$student->id)}}" class="btn btn-warning">Edit</a>&nbsp;
                                            <a href="{{route('student_delete',$student->id)}}" class="btn btn-danger">Delete</a>
                                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
       </div> 
    </div>
    <x:notify-messages />
    @notifyJs
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
