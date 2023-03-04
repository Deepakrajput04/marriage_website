<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\contact;

use App\models\ourservice;

use App\models\slide;

use App\models\ourblog;

use App\models\ourorganizer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   $slider = slide::get();
        $services = ourservice::get();
        $organizer = ourorganizer::get();
        return view('home',compact('slider','services','organizer'));
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function services()
    {    $services = ourservice::get();
        return view('services',compact('services'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function addcontact(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $adress = $request->adress;
        $services = $request->services;
        $message = $request->message;

        $contact = new contact;
        $contact->name= $name;
        $contact->email= $email;
        $contact->adress= $adress;
        $contact->services= $services;
        $contact->message= $message;
        $contact->save();
        return redirect()->back();

    }

    public function contactus()
    {   $contact = contact::get();
        return view ('contactus',compact('contact'));
    }

    public function deletecontact($id)
    {   $contact = contact::where('id',$id)->delete();
        return redirect()->back();
    }

    public function blogs()
    {   
        $blog=ourblog::get();
        return view('blogs',compact('blog'));
    }


    public function ourservices()
    {   $ourservice= ourservice::get();
        return view('ourservices',compact('ourservice'));
    }

    public function addourservices(Request $_request)
    {   $title = $_request->title;
       
        
       $ourservice = new ourservice;
        if($_request->has('image')) {
            $image = $_request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/images'), $filename);
            $ourservice->image = $filename;
    }   

        $ourservice->title = $title;
        

        $ourservice->save();
        return redirect()->back();
    }

    public function deleteourservices($id)
    {
        $ourservice= ourservice::where('id',$id)->delete();
        return redirect()->back();   
    }

    public function editourservices($id)
    {
        $ourservice= ourservice::where('id',$id)->first();
        return view('editourservices',compact('ourservice'));
    }

    public function updateourservices(Request $_request ,$id)
    {
        $ourservice = ourservice::find($id);
        $ourservice->title = $_request->title;
        
        if($_request->has('image')) {
            $image = $_request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/images'), $filename);
            $ourservice->image = $filename;
    }   
       
        
        $ourservice->save();

        return redirect()->route('ourservices');
    }



    public function slider()
    {   $data= slide::get();
        return view('slider',compact('data'));
    }

    public function addslider(Request $_request)
    {  
        
       $slide = new slide;
        if($_request->has('image')) {
            $image = $_request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/images'), $filename);
            $slide->image = $filename;
    }   

       
        $slide->save();
        return redirect()->back();
    }

    public function deleteslider($id)
    {
        $slide = slide::where('id',$id)->delete();
        return redirect()->back();
    }

    public function editslider($id)
    {
        $slide= slide::where('id',$id)->first();
        return view('editslider',compact('slide'));
    }

    public function updateslider(Request $_request ,$id)
    {
        $slide = slide::find($id);
      
        if($_request->has('image')) {
            $image = $_request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/images'), $filename);
            $slide->image = $filename;
    }   
       
        
        $slide->save();

        return redirect()->route('slider');
    }


    public function ourblogs()
    {   $ourblog= ourblog::get();
        return view('ourblogs',compact('ourblog'));
    }

    public function addourblogs(Request $_request)
    {   $title = $_request->title;
        $description = $_request->description;
        
       $ourblog = new ourblog;
        if($_request->has('image')) {
            $image = $_request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/images'), $filename);
            $ourblog->image = $filename;
    }   

        $ourblog->title = $title;
        $ourblog->description = $description;

        $ourblog->save();
        return redirect()->back();
    }

    public function deleteourblogs($id)
    {
        $ourblog= ourblog::where('id',$id)->delete();
        return redirect()->back();   
    }

    public function editourblogs($id)
    {
        $ourblog= ourblog::where('id',$id)->first();
        return view('editourblogs',compact('ourblog'));
    }

    public function updateourblogs(Request $_request ,$id)
    {
        $ourblog = ourblog::find($id);
        $ourblog->title = $_request->title;
        $ourblog->description = $_request->description;
        if($_request->has('image')) {
            $image = $_request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/images'), $filename);
            $ourblog->image = $filename;
    }   
       
        
        $ourblog->save();

        return redirect()->route('ourblogs');
    }


    public function ourorganizers()
    {   $ourorganizer= ourorganizer::get();
        return view('ourorganizers',compact('ourorganizer'));
    }

    public function addourorganizers(Request $_request)
    {   $title = $_request->title;
        $profession = $_request->profession;
        
       $ourorganizer = new ourorganizer;
        if($_request->has('image')) {
            $image = $_request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/images'), $filename);
            $ourorganizer->image = $filename;
    }   

        $ourorganizer->title = $title;
        $ourorganizer->profession = $profession;

        $ourorganizer->save();
        return redirect()->back();
    }

    public function deleteourorganizers($id)
    {
        $ourorganizer= ourorganizer::where('id',$id)->delete();
        return redirect()->back();   
    }

    public function editourorganizers($id)
    {
        $ourorganizer= ourorganizer::where('id',$id)->first();
        return view('ourorganizers',compact('ourorganizer'));
    }

    public function updateourorganizers(Request $_request ,$id)
    {
        $ourorganizer = ourorganizer::find($id);
        $ourorganizer->title = $_request->title;
        $ourorganizer->profession = $_request->profession;
        if($_request->has('image')) {
            $image = $_request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/images'), $filename);
            $ourorganizer->image = $filename;
    }   
       
        
        $ourorganizer->save();

        return redirect()->route('ourorganizers');
    }





    

}
