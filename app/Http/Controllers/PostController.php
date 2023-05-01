<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use PDF;

class PostController extends Controller
{ 
  public function save(Request $request) { 
    $request->validate([
        'name' => 'required',
        'proffesion' => 'required',
        'email' => 'required',
        'country' => 'required',
        'age' => 'required',
        'experience' => 'required',
        'education' => 'required',
        'skills' => 'required',
        'languages' => 'required',
        'aboutMe' => 'required'
    ]);  

    $data = $request->all();
    Post::create([
        'name' => $data['name'],
        'proffesion' => $data['proffesion'],
        'email' => $data['email'],
        'country' => $data['country'],
        'age' => $data['age'],
        'experience' => $data['experience'],
        'education' => $data['education'],
        'skills' => $data['skills'],
        'languages' => $data['languages'],
        'aboutMe' => $data['aboutMe'],
        'user_id' => Auth::user()->id
      ]);

      return redirect("/home")->with('success','Great! You have Successfully create resume.');

  }  

  public function exportPdf($id){
    $pdf = PDF::loadview('resume-pdf-export', ['posts' => Post::where('user_id', Auth::user()->id)->where('id', $id)->get()]);
    return $pdf->download('resume.pdf');
  }

  public function viewPdf($id){
    return view('resume-pdf-view', ['posts' => Post::where('user_id', Auth::user()->id)->where('id', $id)->get()]);
  }

  public function get() {
      return view('home', ['posts' => Post::where('user_id', Auth::user()->id)->get()] );
    }
    
}
