<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'text'  => 'required',
        ]);
        $form = $request->all();
        Contact::create($form);
        return view('confirm',['form' => $form,]);
    }

    public function process(Request $request)
    {
        $action = $request->get('action', 'return');
        $form  = $request->except('action');

        if($action === 'submit') {

            // DBにデータを保存
            $contact = new Contact();
            $contact->fill($input);
            $contact->save();

            return redirect()->route('thanks');
        } else {
            return redirect()->route('/')->withInput($form);
        }
    }

    public function thanks()
    {
        return view('thanks');
    }
}
