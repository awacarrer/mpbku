<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $items = Contact::all();
        return view('pages.contact', [
            'items' => $items
        ]);
        return view('pages.contact');
    }

    public function create()
    {
        return view('pages.contact', ['pelanggan_id' => $id]);

    }

    public function store(ContactRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->palanggan_id);

        Contact::create($data);
        return redirect('pages.contact'. $request->pelanggan_id);
    }
}