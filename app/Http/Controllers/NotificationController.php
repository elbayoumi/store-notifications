<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notifications=Notification::orderBy('created_at', 'desc')-> paginate(11);
        // dd($notifications);
        return view('welcome',['notifications'=>$notifications]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titel'=>'required|max:70',
            'msg'=>'required'
        ]);
        Notification::create([
            'titel'=>$request->titel,
            'msg'=>$request->msg,
        ]);
        return redirect()->back()->withSuccess("تم تسجيل الإشعار بنجاح") ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'titel'=>'required|max:70',
            'msg'=>'required'
        ]);
        Notification::where('id',$id)->update([
            'titel'=>$request->titel,
            'msg'=>$request->msg,
        ]);
        return redirect()->back()->withSuccess("تم تعديل الإشعار بنجاح") ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Notification::find($id)->delete();
        return redirect()->back()->withSuccess("تم حذف الإشعار بنجاح") ;

    }
}
