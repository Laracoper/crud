<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use App\Http\Requests\ContactRequest;
use App\Models\Contusers;

class MainController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactSubmit(ContactRequest $request)
    {
        $contusers = new Contusers();
        $contusers->name = $request->input('name');
        $contusers->email = $request->input('email');
        $contusers->subject = $request->input('subject');
        $contusers->message = $request->input('message');

        $contusers->save();
        return redirect()->route('contactall')->with('success', 'сообщение было успешно добавлено');
    }

    public function contactall()
    {
        // $cont = new Contusers;
        // $cont = Contusers::all();
        // dd($cont->all());
        // dd($cont);

        // $date = Contusers::all();
        // return view('messages', compact('date'));

        return view('messages', ['date' => Contusers::all()]);
    }

    public function contactallid($id)
    {
        return view('one-messages', ['date' => Contusers::find($id)]);
    }

    public function updateid($id)
    {
        return view('update-messages', ['date' => Contusers::find($id)]);
    }

    public function updateidsubmit($id, ContactRequest $request)
    {
        $contusers = Contusers::find($id);
        $contusers->name = $request->input('name');
        $contusers->email = $request->input('email');
        $contusers->subject = $request->input('subject');
        $contusers->message = $request->input('message');

        $contusers->save();
        return redirect()->route('contactallid', $id)->with('success', 'сообщение было обновлено');
    }

    public function deleteid($id)
    {
        Contusers::find($id)->delete();
        return redirect()->route('contactall')->with('success', 'сообщение было успешно удалено');
    }
}
