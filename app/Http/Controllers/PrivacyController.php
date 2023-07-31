<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Privacy;
use Carbon\Carbon;

class PrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $privices = Privacy::all();
        return view('admin.privices',compact('privices'));
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
            Privacy::insert([
                'question' => $request->question,
                'answer' => $request->answer,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'تم أضافة السياسة بنجاح', 
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
        $question_id = $request->id;

        Privacy::findOrFail($question_id)->update([
                'question' => $request->question,
                'answer' => $request->answer,
            ]); 
            $notification = array(
            'message' => 'تم تحديث السياسة بنجاح', 
            'alert-type' => 'info'
        );
        return back()->with($notification);
       
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
            $Privacies = Privacy::findOrFail($request->id)->delete();
            $notification = array(
                'message' => 'تم حذف السياسة بنجاح', 
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
