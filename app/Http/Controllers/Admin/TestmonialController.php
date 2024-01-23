<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bootstrap\HandleExceptions;
use Illuminate\Http\Request;
use App\Models\Testmonial;
use App\Traits\UploadImage;
//use Validator;

class TestmonialController extends Controller
{
    use UploadImage;

    public function index()
    {
        $testmonials = Testmonial::all();
        return view("admin.testmonials", compact("testmonials"));
    }

    public function show(){
            $data=[
                'title'=>'Testmonials'
            ];
            return view("admin.testmonials", $data);
        }
        
      
        // public function addTestmonial()
        // {   $data=[
        //     'title'=>'AddTestmonial'
        //     ];  
        //         return view("admin.addTestmonial", $data);
        //     }

            public function create()
            {   $data=[
                'title'=>'AddTestmonial'
                ];
                // $testmonials = Testmonial::get();
                return view('admin.addTestmonial',$data);
            }
          
            
            public function edit( $id)
            {
                $data=Testimonal::findOrFail($id);
                return view("admin.editTestmonial",compact("data"));
            }
        

            public function store(Request $request)
            { 
            //$messages = $this->messages();
            $data = $request->validate([
                'clientName' => 'required|string|max:50',
                'title' => 'required|string',
                //'clientImage' => 'nullable|image|mimes:png,jpg,jpeg|max:2048', // Allow null for updating without changing the image
                'clientImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'review' => 'required',


            ]);

       // ], $messages);
            $fileName = $this->uploadFile($request->clientImage, 'public/admin-assets/dist/img');    
            $data['clientImage'] = $fileName;
            // $data['published'] = isset($request->published);
            Testmonial::create($data);
            return redirect('admin.testmonials');
        }


}   


