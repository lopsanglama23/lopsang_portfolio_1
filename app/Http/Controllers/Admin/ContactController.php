<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::orderByDesc('created_at')->paginate(20);

        return view('admin.contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Contacts are created from the public site, so we don't need a create form in admin.
        return redirect()
            ->route('admin.contacts.index')
            ->with('info', 'Contacts are created from the contact form.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Creation is handled by the public ContactController.
        return redirect()
            ->route('admin.contacts.index')
            ->with('info', 'Contacts are created from the contact form.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = Contact::findOrFail($id);

        if (! $contact->is_read) {
            $contact->update([
                'is_read' => true,
                'read_at' => now(),
            ]);
        }

        return view('admin.contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Contacts are not editable from admin – just show them.
        return redirect()
            ->route('admin.contacts.show', $id)
            ->with('info', 'Contacts cannot be edited.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // We do not support updating contact messages from admin.
        return redirect()
            ->route('admin.contacts.index')
            ->with('info', 'Contacts cannot be updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()
            ->route('admin.contacts.index')
            ->with('success', 'Contact message deleted successfully.');
    }
}
