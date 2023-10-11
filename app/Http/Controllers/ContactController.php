<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $searchTerm = $request->input('q');

        $contacts = Contact::where('name', 'LIKE', "%$searchTerm%")
            ->when($request->has('sort_field'), function ($query) use ($request) {
                $sortField = $request->input('sort_field');
                $sortDir = $request->input('sort_dir', 'asc');
                $query->orderBy($sortField, $sortDir);
            })
            ->paginate(5);

        if ($request->header('hx-request') && $request->header('hx-target') == 'table-container') {
            return view('contacts.partials.table', compact('contacts'));
        }

        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(ContactRequest $request)
    {
        $contact = Contact::create($request->all());

        return response()->make($contact, 200, ['HX-Trigger' => 'loadContacts']);
    }

    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    public function update(ContactRequest $request, Contact $contact)
    {
        $contact->update($request->all());

        return response()->make($contact, 200, ['HX-Trigger' => 'loadContacts']);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return response()->make(null, 200, ['HX-Trigger' => 'loadContacts']);
    }
}
