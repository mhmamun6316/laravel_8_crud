<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                overflow-x: hidden;
                background-color:#F5F5F5;
            }
            label{
                padding: 0px!important;
                display:flex;
                align-items:center;
            }
            .col-sm-10{
                display:flex;
            }
            .form-group{
                margin:10px 0px!important;
            }
            .wrapper{
                box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
                background-color:white;
                padding:20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
          <div class="wrapper mt-3">
           <div class="row ">
               <div class="div col-md-12">
                   <h2 class="d-flex justify-content-center"><b>Student Information Edit</b></h2>
                    <form action="{{route('student_update')}}" method="post">
                        @csrf

                        <input type="hidden" class="form-control" value="{{$student->id}}" name="student_id">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                                <div class="col-sm-10">
                                   <input type="text" class="form-control" id="first_name" value="{{$student->first_name}}" name="first_name">
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="last_name" value="{{$student->last_name}}" name="last_name">
                                </div>
                                </div> 
                            </div>
                        </div>
                            
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="first_name" value="{{$student->email}}" name="email">
                                </div>
                               </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="phone" value="{{$student->phone}}" name="phone">
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="dob" class="col-sm-2 col-form-label">DOB</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="dob" value="{{$student->dob}}" name="dob">
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="university" class="col-sm-2 col-form-label">University</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="university" value="{{$student->university}}" name="university">
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="experience" class="col-sm-2 col-form-label">Experience</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="experience" value="{{$student->experience}}" name="experience">
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="present_address" class="col-sm-2 col-form-label">Present Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="present_address" value="{{$student->present_address}}" name="present_address">
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="parmanent_address" class="col-sm-2 col-form-label">Parmanent Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="parmanent_address" value="{{$student->parmanent_address}}" name="parmanent_address">
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="father_name" class="col-sm-2 col-form-label">Father Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="father_name" value="{{$student->father_name}}" name="father_name">
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="father_profession" class="col-sm-2 col-form-label">Father Profession</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="father_profession" value="{{$student->father_profession}}" name="father_profession">
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="mother_name" class="col-sm-2 col-form-label">Mother Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="mother_name" value="{{$student->mother_name}}" name="mother_name">
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="mother_profession" class="col-sm-2 col-form-label">Mother Profession</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="mother_profession" value="{{$student->mother_profession}}" name="mother_profession">
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="emergency_contact_number" class="col-sm-2 col-form-label">Emergency Number</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="emergency_contact_number" value="{{$student->emergency_contact_number}}" name="emergency_contact_number">
                                </div>
                                </div>
                            </div>
                        </div>
                                                 
                        <div class="form-group row">
                        <div class="col-sm-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Update Student</button>
                        </div>
                        </div>

                    </form>
               </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif        
              </div>  
           </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
