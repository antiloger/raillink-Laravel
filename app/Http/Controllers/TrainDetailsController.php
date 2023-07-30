<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainDetails;
use Illuminate\Support\Facades\Storage;

class TrainDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $train_data = TrainDetails::orderBy('created_at','desc')->paginate(10);
        return view('admin.admindetails')->with('train_data', $train_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admindetailsCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $news = new TrainDetails();
        if($request->hasFile('train_img') && $request->file('train_img')->isValid()){
            $img_file = $request->file('train_img')->store('train_img', 'public');
            $news->train_img = $img_file;
        }

        //train_type_link
        $news->train_name = $request->train_name;
        $news->ad_num = $request->ad_num;
        $news->train_name = $request->train_name;
        $news->train_no = $request->train_no;
        $news->train_dis = $request->train_dis;
        $news->train_type = $request->train_type;
        $news->train_type_link = $request->train_type_link;
        $news->train_opdays = $request->train_opdays;
        $news->train_avclass = $request->train_avclass;
        $news->train_stops_no = $request->train_stops_no;
        $news->train_stops = $request->train_stops;
        $news->train_time = $request->train_time;
        $news->train_facilites = $request->train_facilites;
        $news->train_more = $request->train_more;
        $news->save();

        return redirect('/admin/traindetails');
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
        $data = TrainDetails::find($id);
        return view('admin.admindetailsEdit')->with('data', $data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $data = TrainDetails::find($id);

        if ($request->hasFile('train_img')) {

            // Validate the file (e.g., file format and size)
            // Store the uploaded file
            $img_file = $request->file('train_img')->store('train_img', 'public');

            // Delete the old image (optional)
            if ($data->train_img) {
                Storage::disk('public')->delete($data->train_img);
            }

            // Update the image path in the database
            $data->train_img = $img_file;
        }

        $data->train_name = $request->train_name;
        $data->ad_num = $request->ad_num;
        $data->train_name = $request->train_name;
        $data->train_no = $request->train_no;
        $data->train_dis = $request->train_dis;
        $data->train_type = $request->train_type;
        $data->train_type_link = $request->train_type_link;
        $data->train_opdays = $request->train_opdays;
        $data->train_avclass = $request->train_avclass;
        $data->train_stops_no = $request->train_stops_no;
        $data->train_stops = $request->train_stops;
        $data->train_time = $request->train_time;
        $data->train_facilites = $request->train_facilites;
        $data->train_more = $request->train_more;
        $data->save();

        return redirect('/admin/traindetails');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = TrainDetails::find($id);
        
        if($data->train_img){
            Storage::disk('public')->delete($data->train_img);

        }

        $data->delete();

        return redirect('/admin/traindetails');
    }

    public function searchdetails(Request $request){
        $searchq = $request->input('news-search');
        
        if(!$searchq){
            return redirect('/trainDetails');
        }else{
            $view_data = TrainDetails::where('train_name', 'like','%'.$searchq.'%')
            ->orwhere('train_no', 'like','%'.$searchq.'%')
            ->orwhere('train_type', 'like','%'.$searchq.'%')->get();

            return view('pages.traindetails')->with('view_data', $view_data); 
        }


    }
}
