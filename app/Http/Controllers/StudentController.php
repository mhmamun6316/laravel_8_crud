<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function Add_Student(){
        return view('Student.add_student');
    }

    public function Store_Student(Request $request){

        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'phone' => 'required',
            'university' => 'required',
            'experience' => 'required',
            'present_address' => 'required',
            'parmanent_address' => 'required',
            'father_name' => 'required',
            'father_profession' => 'required',
            'mother_name' => 'required',
            'mother_profession' => 'required',
            'emergency_contact_number' => 'required',
        ]);

           $student=new Student;
           $student->first_name=$request->first_name;
           $student->last_name=$request->last_name;
           $student->email=$request->email;
           $student->dob=$request->dob;
           $student->phone=$request->phone;
           $student->university=$request->university;
           $student->experience=$request->experience;
           $student->present_address=$request->present_address;
           $student->parmanent_address=$request->parmanent_address;
           $student->father_name=$request->father_name;
           $student->father_profession=$request->father_profession;
           $student->mother_name=$request->mother_name;
           $student->mother_profession=$request->mother_profession;
           $student->emergency_contact_number=$request->emergency_contact_number;
           $student->save();

           notify()->success('information added successfully!');
           return redirect()->route('student_view');
    }

    public function View_Student(){
        $students=Student::all();
        return view('Student.view_student',compact('students'));
    }

    public function Edit_Student($id){
        $student=Student::find($id);
        return view('Student.edit_student',compact('student'));
    }

    public function Update_Student(Request $request){

        $student=Student::find($request->student_id);
        $student->first_name=$request->first_name;
        $student->last_name=$request->last_name;
        $student->email=$request->email;
        $student->dob=$request->dob;
        $student->phone=$request->phone;
        $student->university=$request->university;
        $student->experience=$request->experience;
        $student->present_address=$request->present_address;
        $student->parmanent_address=$request->parmanent_address;
        $student->father_name=$request->father_name;
        $student->father_profession=$request->father_profession;
        $student->mother_name=$request->mother_name;
        $student->mother_profession=$request->mother_profession;
        $student->emergency_contact_number=$request->emergency_contact_number;
        $student->save();

        notify()->success('information Updated successfully!');
        return redirect()->route('student_view');
    }

    public function Delete_Student($id){
        $students=Student::find($id);
        $students->delete();
        notify()->success('information deleted successfully!');
        return redirect()->back();
    }

    public function View_All_Student($id){
        $student=Student::find($id);
        return view('Student.view_all_student',compact('student'));
    }
}
