<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::where('user_id', auth()->id())->get();
        $users = User::all(); // Get all users to select target user
        return view('notes.index', compact('notes', 'users'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,docx,txt|max:2048',
            'target_user_id' => 'required|exists:users,id',
        ]);

        $filePath = $request->file('file')->store('notes');

        Note::create([
            'user_id' => auth()->id(),
            'target_user_id' => $request->target_user_id,
            'title' => $request->title,
            'file_path' => $filePath,
        ]);

        return redirect()->route('notes.index')->with('success', 'Note uploaded successfully!');
    }

    public function download(Note $note)
    {
        if ($note->target_user_id !== auth()->id() && $note->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        return Storage::download($note->file_path, $note->title);
    }
}

