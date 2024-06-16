<?php

namespace App\Http\Controllers;

use App\Models\WebpageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebpageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = WebpageModel::where('status',1)->get();
        return view('AdminDashboard.Webpage.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('AdminDashboard.Webpage.addEdit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function save(Request $request)
    {
        $user = new WebpageModel([
            'name'=>$request->get('page_name'),
            'slug'=>$request->get('page_slug'),
            'html'=>$request->get('page_content'),
            'status'=>$request->get('page_status'),
            'created_by'=>Auth::user()->user_type,
        ]);
        $user->save();
        return redirect()->route('webpage.index');
    
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = WebpageModel::find($id);
        return view('AdminDashboard.Webpage.addEdit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $page =WebpageModel::find($id);
        $page->name = $request->get('page_name');
        $page->slug = $request->get('page_slug');
        $page->html= $request->get('page_content');
        $page->status= $request->get('page_status');
        $page->updated_by = Auth::user()->id;
        $page->save();
        return redirect()->route('webpage.index');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function viewDelete($id)
    {
        return view('AdminDashboard.Webpage.delete');
    }

    public function delete($id){
        WebpageModel::where('id',$id)->delete();
        return redirect()->route('webpage.index');
    }

    public function landingpage(){
        return view('index');
    }

    public function viewPage($page){
        $data = WebpageModel::where('slug',$page)->first();
        return view('dynamic',['data'=>$data]);
    }
}
