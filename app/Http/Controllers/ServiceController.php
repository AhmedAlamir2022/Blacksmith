<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;

class ServiceController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();
        $services = Service::all();
        return view('admin.services',compact('services','categories'));
    }

    public function store(Request $request)
    {
        try {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(430,327)->save('upload/services/'.$name_gen);
            $save_url = 'upload/services/'.$name_gen;

            Service::insert([
                'ser_name' => $request->ser_name,
                'details' => $request->details,
                'cat_id' => $request->cat_id,
                'image' => $save_url,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'تم أضافة الخدمة بنجاح', 
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $categories = Category::all();
        $services = Service::findOrFail($id);
        return view('admin.edit_service',compact('services','categories'));
    }

    public function update(Request $request)
    {
        $service_id = $request->id;
        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(430,327)->save('upload/services/'.$name_gen);
            $save_url = 'upload/services/'.$name_gen;

        Service::findOrFail($service_id)->update([
            'ser_name' => $request->ser_name,
            'details' => $request->details,
            'cat_id' => $request->cat_id,
            'image' => $save_url,
        ]);

       $notification = array(
        'message' => 'تم تحديث الخدمة والصورة بنجاح ', 
        'alert-type' => 'info'
        );
        return back()->with($notification);
    } else{

        Service::findOrFail($service_id)->update([
            'ser_name' => $request->ser_name,
            'details' => $request->details,
            'cat_id' => $request->cat_id,
        ]);
        $notification = array(
        'message' => 'تم تحديث الخدمة بنجاح', 
        'alert-type' => 'info'
    );
    return back()->with($notification);
   } // end Else
    }

    public function destroy(Request $request)
    {
        try {
            $services = Service::findOrFail($request->id)->delete();
            $notification = array(
                'message' => 'تم حذف الخدمة بنجاح', 
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function Service  (){
        $categories = Category::all();
        $services = Service::all();
        return view('frontend.services',compact('services','categories'));
    } // end mehtod 

    public function CategoryService ($id){
        $categoryService = Service::where('cat_id',$id)->orderBy('id','DESC')->get();
        $allservices = Service::latest()->limit(10)->get();
        $categories = Category::orderBy('cat_name','ASC')->get();
        $catname = Category::findOrFail($id);
        return view('frontend.cat_service_details',compact('categoryService','allservices','categories','catname'));
     } // End Method 
}
