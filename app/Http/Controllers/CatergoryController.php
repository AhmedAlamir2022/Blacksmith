<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;

class CatergoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories',compact('categories'));
    }


    public function store(Request $request)
    {
        try {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(430,327)->save('upload/categories/'.$name_gen);
            $save_url = 'upload/categories/'.$name_gen;

            Category::insert([
                'cat_name' => $request->cat_name,
                'details' => $request->details,
                'contact' => $request->contact,
                'image' => $save_url,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'تم أضافة التصنيف بنجاح', 
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update(Request $request)
    {
        $category_id = $request->id;
        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(430,327)->save('upload/categories/'.$name_gen);
            $save_url = 'upload/categories/'.$name_gen;

            Category::findOrFail($category_id)->update([
                'ser_name' => $request->ser_name,
                'contact' => $request->contact,
                'details' => $request->details,
                'image' => $save_url,
            ]); 
            $notification = array(
            'message' => 'تم تحديث التصنيف والصورة بنجاح', 
            'alert-type' => 'info'
        );
        return back()->with($notification);
        } else{

            Category::findOrFail($category_id)->update([
                'ser_name' => $request->ser_name,
                'contact' => $request->contact,
                'details' => $request->details, 
            ]); 
            $notification = array(
            'message' => 'تم تحديث التصنيف بنجاح', 
            'alert-type' => 'info'
        );
        return back()->with($notification);
       } // end Else
    }

    public function destroy(Request $request)
    {
        try {
            $categories = Category::findOrFail($request->id)->delete();
            $notification = array(
                'message' => 'تم حذف التصنيف بنجاح', 
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
