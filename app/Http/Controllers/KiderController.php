<?php
namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Mail\ContactMail; 
 use App\Models\Contact;
 use Illuminate\Support\Facades\Mail;
 use Illuminate\Validation\Validator;
 

// use mail;

 class KiderController extends Controller
 {
    public function __invoke()
    {
        return view("404");
    }
     public function home(){
         return view("home");
     }
     public function about(){
         return view("About");
     }
     public function classes(){
         return view("classes");
     }
     public function contact(){
         return view("contact");
     }
     public function facilities(){
         return view("facilities");
     }  
     public function team(){
         return view("team");
     }
     public function become_a_teacher(){
         return view("become_a_teacher");
     }
    public function testmonials()  {
         return view("testmonials");
     }
    public function appointment()  {
         return view("appointment");
     }
     //email sending function
     public function contact_mail_send(Request $request) {

        $data = $request->validate([
            'name'=>'required|string|max:50',
            'email'=>'required|string',
            'subject'=>'required',
            'message'=>'required',

        ]);
        Contact::create($data);
        Mail::to('manalali874@yahoo.com')->send(new ContactMail($request));
        return redirect('contact');
        // dd($request->all());
       
    }

  

 }

