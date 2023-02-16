<?php

namespace App\Http\Controllers;
use Session;
use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;



class employeeController extends Controller
{
    public function index(){
        $data = Employee::get();
       // return $data;
        return view('employee-list',compact('data'));
    }
    public function addEmployee(){
        return view('add-employee');
    }
    public function saveEmployee(Request $request){
        $request->validate([
            'name' =>'required',
            'age' =>'required',
            'address' =>'required',
            'phone' =>'required',
            'salary' =>'required',

                ]);
         $name = $request->name;
         $age = $request->age;
         $address = $request->address;
         $phone = $request->phone;
         $salary = $request->salary;


         $stu = new Employee();
         $stu->name = $name;
         $stu->age = $age;
         $stu->address = $address;
         $stu->phone = $phone;
         $stu->salary = $salary;
         $stu->save();
         return redirect()->back()->with('success','Employee Added Successfully');


    }
    public function editEmployee($id){
        $data = Employee::where('id','=',$id)->first();
        return view('edit-employee',compact('data')) ;
    }
    public function updateEmployee(Request $request){
        $request->validate([
        'name' =>'required',
        'age' =>'required',
        'address' =>'required',
        'phone' =>'required',
        'salary' =>'required',

            ]);
     $id = $request->id;
     $name = $request->name;
     $age = $request->age;
     $address = $request->address;
     $phone = $request->phone;
     $salary = $request->salary;

     Employee::where('id','=',$id)->update([
         'name' =>$name,
         'age' =>$age,
         'address'=>$address,
         'phone'=>$phone,
         'salary'=>$salary

     ]);
     return redirect()->back()->with('success','Employee update Successfully');

    }
    public function deleteEmployee($id){
       Employee::where('id','=',$id)->delete();
       return redirect()->back()->with('success','Employee Delete Successfully');

    }







    public  function home(){
        return view('homepage');
    }

    public function index1(){
        return view('login');
    }
    public function login(Request $request){
      $request->validate([
        'email'=>'required',
        'password'=>'required'
      ]);
      $credentials = $request->only('email' , 'password');
      if(Auth::attempt($credentials)){
        return redirect()->intended('dashboard')
        ->with('message','Signed in!');
      }
      return redirect('/login')->with('message','Login details are not valid');
    }
    public function signup(){
     return view('registration');
    }
    public function signupsave(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect("dashboard");
    }
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])

        ]);
    }

    public function dashboard(){
        if(Auth::check()){
            return view('dashboard');
        }
        return redirect('/login');
    }
    public function signOut(){

        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}






