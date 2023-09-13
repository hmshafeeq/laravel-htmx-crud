<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $contacts = Contact::all();

        if ($request->has('table')) {
            return view('contacts.partials.table', ['contacts' => $contacts, 'only' => 'tableBody'])->render();
        }

        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.partials.form')->render();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
        ]);

        $contact = Contact::create($request->all());

        return redirect()->route('contacts.index');

        //return  view('contacts.partials.table-row', compact('contact'))->render();

        //return response()->noContent()->withHeaders(['HX-Trigger' => 'newContact']);
    }

    public function show(string $id)
    {
        return view('contacts.partials.show', ['contact' => Contact::find($id)]);
    }

    public function edit(string $id)
    {
        return view('contacts.partials.form', ['contact' => Contact::find($id)])->render();
    }

    public function update(Request $request, string $id)
    {
        $contact = Contact::find($id);

        $contact->fill($request->all());

        $contact->save();

        //return  view('contacts.partials.table-row', compact('contact'))->render();

        return response()->noContent()->withHeaders(['HX-Trigger' => 'newContact']);
    }

    public function destroy(string $id)
    {
        Contact::destroy($id);
    }
}
