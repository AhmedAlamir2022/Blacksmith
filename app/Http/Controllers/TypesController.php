<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Type;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;#

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
        return view('admin.types',compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(430,327)->save('upload/types/'.$name_gen);
            $save_url = 'upload/types/'.$name_gen;

            Type::insert([
                'thename' => $request->thename,
                'details' => $request->details,
                'image' => $save_url,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'تم أضافة النوع بنجاح', 
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $type_id = $request->id;
        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(430,327)->save('upload/types/'.$name_gen);
            $save_url = 'upload/types/'.$name_gen;

            Type::findOrFail($type_id)->update([
                'thename' => $request->thename,
                'details' => $request->details,
                'image' => $save_url,
            ]); 
            $notification = array(
            'message' => 'تم تحديث النوع والصورة بنجاح', 
            'alert-type' => 'info'
        );
        return back()->with($notification);
        } else{

            Type::findOrFail($type_id)->update([
                'thename' => $request->thename,
                'details' => $request->details,
            ]); 
            $notification = array(
            'message' => 'تم تحديث النوع بنجاح', 
            'alert-type' => 'info'
        );
        return back()->with($notification);
       } // end Else
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            $types = Type::findOrFail($request->id)->delete();
            $notification = array(
                'message' => 'تم حذف النوع بنجاح', 
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
