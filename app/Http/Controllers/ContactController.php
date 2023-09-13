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
        return view('contacts.create')->render();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
        ]);

       Contact::create($request->all());

        return redirect()->route('contacts.index');

    }

    public function show(string $id)
    {
        return view('contacts.show', ['contact' => Contact::find($id)]);
    }

    public function edit(string $id)
    {
        return view('contacts.edit', ['contact' => Contact::find($id)])->render();
    }

    public function update(Request $request, string $id)
    {
        $contact = Contact::find($id);

        $contact->fill($request->all());

        $contact->save();

        return redirect()->route('contacts.index');
    }

    public function destroy(string $id)
    {
        Contact::destroy($id);

        return redirect()->route('contacts.index');
    }
}
