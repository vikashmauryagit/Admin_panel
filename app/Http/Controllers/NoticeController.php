<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $request->validate([
            'date' => 'required',
            'notice_title' => 'required',
            'upload_file' => 'nullable|file|mimes:jpg,png,pdf,webp,docx|max:2048',
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
        $notice=Notice::find($id);
        return view('Notice.display_notice',compact('notice'));
    }

    
    public function edit(string $id)
    {
        $notice=Notice::find($id);
        return view('Notice/edite_notice',compact('notice'));
    }

        public function update(Request $request, string $id)
{
    $request->validate([
        'date' => 'required',
        'notice_title' => 'required',
        'upload_file' => 'nullable|file|mimes:jpg,png,pdf,webp,docx|max:2048',
    ]);

    $notice = Notice::findOrFail($id);

    if ($request->hasFile('upload_file')) {
        if ($notice->file_path && Storage::disk('public')->exists($notice->file_path)) {
            Storage::disk('public')->delete($notice->file_path);
        }
        // Store the file and get the file path
        $filePath = $request->file('upload_file')->store('uploads', 'public');
        // Update the file path in the database
        $notice->file_path = $filePath;
    }

    // Update other fields
    $notice->date = $request->date;
    $notice->notice_title = $request->notice_title;

    $notice->save();

    return redirect()->route('notice.index')->with('success', "Notice Data Updated Successfully.");
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $notice = Notice::findOrFail($id);
        if ($notice->file_path && Storage::disk('public')->exists($notice->file_path)) {
            Storage::disk('public')->delete($notice->file_path);
        }
        $notice->delete();
    
        return redirect()->route('notice.index')->with('success', 'Notice deleted successfully.');
    }
}
