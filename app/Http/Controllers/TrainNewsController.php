<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainNews;
use Illuminate\Support\Facades\Storage;

class TrainNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return TrainNews::all();
        $news_data = TrainNews::orderBy('created_at','desc')->paginate(10);
        return view('admin.adminnews')->with('news_data', $news_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.adminnewsCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $fromFields = $request->validate([

        ]);
        $news = new TrainNews;

        if($request->hasFile('head_img')){
            $head_img_file = $request->file('head_img')->store('news_head_img', 'public');
            $news->head_img = $head_img_file;
        }

        
        $news->author_name = $request->auth_name;
        $news->ad_num = $request->admin_id;
        
        $news->news_head = $request->news_head;
        $news->news_dis = $request->news_body;
        $news->save();

        return redirect('/admin/trainnews');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = TrainNews::find($id);
        return view('admin.adminnewsEdit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $news = TrainNews::find($id);

        if ($request->hasFile('head_img')) {

            // Validate the file (e.g., file format and size)
            // Store the uploaded file
            $head_img_file = $request->file('head_img')->store('news_head_img', 'public');

            // Delete the old image (optional)
            if ($news->head_img) {
                Storage::disk('public')->delete($news->head_img);
            }

            // Update the image path in the database
            $news->head_img = $head_img_file;
        }

        $news->author_name = $request->auth_name;
        $news->ad_num = $request->admin_id;
        $news->news_head = $request->news_head;
        $news->news_dis = $request->news_body;
        $news->save();

        return redirect('/admin/trainnews');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = TrainNews::find($id);
        $data->delete();

        if($data->head_img){
            Storage::disk('public')->delete($data->head_img);

        }

        return redirect('/admin/trainnews');
    }

    public function searchnews(Request $request){
        $searchq = $request->input('news-search');

        $view_data = TrainNews::where('news_head', 'like','%'.$searchq.'%')
                    ->orwhere('created_at', 'like','%'.$searchq.'%')
                    ->orwhere('author_name', 'like','%'.$searchq.'%')->get();
                    
        return view('pages.trainnews')->with('view_data', $view_data); 
        
    }
}
