<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Events\AuditEvent;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('id', 'DESC')->get();

        return view('admin.messages.index', compact('messages'));
    }

    public function show(Message $messages, $id)
    {
       $messages = Message::find($id);

       Message::find($id)->update(['status'=>1]);

        return view('admin.messages.show', compact('messages'));
    }

    public function destroy(Message $message)
    {

        $user = auth()->user()->name;
        event(new AuditEvent('delete', 'messages', $user, $message));
        
        $message->delete();

        return redirect()->route('admin.messages.index')->with('danger', 'Malumot mavaffaqiyatli ochirildi');
    }
}
