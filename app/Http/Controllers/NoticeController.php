<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notice=Notice::all();
        return view('Notice.view_notice',compact('notice'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Notice.add_notice');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $data = $request->validate([
            'date' => 'required',
            'notice_title' => 'required',
            'upload_file' => 'required|upload_file|mimes:jpg,png,pdf,webp,docx|max:2048',
        ]);

        // Store the file in the 'public' disk (usually storage/app/public)
        $filePath = $request->file('upload_file')->store('uploads', 'public');

        $notice = new Notice();
        $notice->date = $request->date;
        $notice->notice_title = $request->notice_title;
        $notice->file_path =  $filePath;
        $notice->save();
        return redirect()->route('notice.index')->with('success', "Notice Data Store Successfully..");
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
