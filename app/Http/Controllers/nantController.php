<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



use function PHPUnit\Framework\returnSelf;

use Mail;

use DataTables;// import Datatable class

class nantController extends Controller
{
    function Home(Request $req)// Request is a class & $req in an object of class
    {
        // call the view - return ("View File Name")
        return view("Home"); // resources/view/Home.blade.php 
    }

    function About(Request $req)
    {
        return view("About");
    }

    function Contact(Request $req){
        return view("Contact");
    }
    function registration(Request $request){
        return view('registration');
    }

    function insert(Request $request){
        // Fetch Form Values
        // $variable = $request->input_field_name;
        $name = $request->name;
        $email = $request->email;
        $password =Hash::make($request->password);
        $pin = $request->pin;
        $city = $request->city;
        $phone = $request->phone;
        echo "Name:".$name."<br>"
        ,"Email:".$email."<br>"
        ,"Password:".$password."<br>"
        ,"Pin:".$pin."<br>","City:".$city."<br>","Phone:".$phone;  
        
        // step to save Values to users table

        $obj = new User;
        // 2. Now assign Values to each column one by one

        $obj->name = $name;
        $obj->email = $email;
        $obj->password = $password;
        $obj->pin = $pin;
        $obj->city = $city;
        $obj->phone = $phone;
        $obj->save(); // Same as insert query
        echo "Done ! Registration Successfull";
    }

    

    function display_users (Request $request){

        $k = User::all(); // select * from users


        // send $k to the view
        return view('display_users')->with('k',$k);

        // with() function is used to send value from controller to the view.

    }

    function user_loging(Request $request){

        return view('user_loging');
    }

    function check_loging(Request $request){


        $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required',
        'g-recaptcha-response' => 'required|captcha',
        ]);


        // Authenticate the user
        $email = $request->email;
        $password = $request->password;
        
        // select * from users where username='$username' and password='$pasword'

        // Auth is Laavel Authentication Class and and attempt() is a Laravel Function
        $check = Auth::attempt(['email'=>$email, 'password'=>$password]);

        if($check){
            return redirect("user_dashboard");

        }else{

            echo "Invalid login";

        }

        
    }

    function user_logout()
    {
        Auth::logout(); // Auth is a Authentication Class
        return redirect("user_loging");
    }

    // function must be outside another function.
    function user_dashboard(){
            return view('user_dashboard'); // view
        }

    function displayusers(){
        $data=User::all();
        return view("displayusers")->with('data',$data);
    }

    function deleteuser($id){
        //Delete from tablename where id='$id'
        User::find($id)->delete();

        // User is MODENAME/table Name.
        //find($id) function is used to find an Id
        //delete() is used to delete a record

        return redirect("displayusers");
    }

    function edituser(){
        // fetch the record using id

        $data = User::where('id',$id)->get();
        // $data = User::find($id)->get(); // select * from user where id='$id';

        // get() or first() - to fetch specific record from table 
        //all() -  to fetch all records from table 

        return view('edituser')->with('data',$data);
    }

    function updateuser(Request $req){
        // fetch from values

        $n1 = $req->n1;
        $e1 = $req->e1;
        $p1 = $req->p1;
        $id = $req->id;

        // Update Query
        // 1) Fetch User where id =$id
        //2) Save record one by one - same as regidter logic
        
        $obj = User::find($id)->get(); // find User where id='$id';

        $obj->name = $n1;
        $obj->name = $e1;
        $obj->name = $p1;
        $obj->save();

        echo "Update Successs";

    }

    function display(){

        $data = User::paginate(2); // Model::paginate(no. of records)

        return view("display")->with('data',$data);
    }

    function contactform(){

        return view("contactform");
    }
    function contactform_action(Request $req){
        // fetch all values
        $n1 = $req->n1;
        $m1 = $req->m1;
        $e1 = $req->e1;

        $body = "Name : $n1 and Mobile : $m1";

        // Code to send email in laravel
        // Mail is a built-in Laravel Class

        Mail::raw($body,function($m) use($n1,$e1,$m1){
            $m->from('abc@gmail.com','Nant');
            $m->to($e1,$n1);
            $m->subject("New Inquiry From Someone");
        });

        echo "Mail Sent";
    }

    function display1()
    {
        return view("display1");
    }

    public function getUsers(Request $request)
    {
        if ($request->ajax()) 
        {
            $data = User::latest()->get(); // replacing Student model with User
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}

