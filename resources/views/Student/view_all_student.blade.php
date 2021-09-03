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
          <div class="wrapper m-5">
           <div class="row">
               <div class="div col-md-12 px-5">
                   <div class="d-flex justify-content-between">
                        <h2><b>Student Information View</b></h2>
                        <a href="{{route('student_view')}}" class="btn btn-info d-flex align-items-center">All Student</a>
                   </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="first_name" class="col-sm-2 col-form-label">First Name:</label>
                                <div class="col-sm-10">
                                    <b>{{$student->first_name}}</b>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="last_name" class="col-sm-2 col-form-label">Last Name:</label>
                                <div class="col-sm-10">
                                     <b>{{$student->last_name}}</b>
                                </div>
                                </div> 
                            </div>
                        </div>
                            
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email:</label>
                                <div class="col-sm-10">
                                    <b>{{$student->email}}</b>
                                </div>
                               </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="phone" class="col-sm-2 col-form-label">Phone:</label>
                                <div class="col-sm-10">
                                     <b>{{$student->phone}}</b>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="dob" class="col-sm-2 col-form-label">DOB:</label>
                                <div class="col-sm-10">
                                    <b>{{$student->dob}}</b>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="university" class="col-sm-2 col-form-label">University:</label>
                                <div class="col-sm-10">
                                    <b>{{$student->university}}</b>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="experience" class="col-sm-2 col-form-label">Experience:</label>
                                <div class="col-sm-10">
                                    <b>{{$student->experience}}</b>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="present_address" class="col-sm-2 col-form-label">Present Address:</label>
                                <div class="col-sm-10">
                                     <b>{{$student->present_address}}</b>        
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="parmanent_address" class="col-sm-2 col-form-label">Parmanent Address:</label>
                                <div class="col-sm-10">
                                     <b>{{$student->parmanent_address}}</b>  
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="father_name" class="col-sm-2 col-form-label">Father Name:</label>
                                <div class="col-sm-10">
                                    <b>{{$student->father_name}}</b>  
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="father_profession" class="col-sm-2 col-form-label">Father Profession:</label>
                                <div class="col-sm-10">
                                    <b>{{$student->father_profession}} </b>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="mother_name" class="col-sm-2 col-form-label">Mother Name:</label>
                                <div class="col-sm-10">
                                    <b>{{$student->mother_name}}</b> 
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="mother_profession" class="col-sm-2 col-form-label">Mother Profession:</label>
                                <div class="col-sm-10">
                                     <b>{{$student->mother_profession}}</b>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label for="emergency_contact_number" class="col-sm-2 col-form-label">Emergency Number:</label>
                                <div class="col-sm-10">
                                    <b>{{$student->emergency_contact_number}}</b>
                                </div>
                                </div>
                            </div>
                        </div>

               </div>      
              </div>  
           </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
