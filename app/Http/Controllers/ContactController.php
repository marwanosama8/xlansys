<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function message(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'phone' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json('Email And Phone Are Requerd');
        }

        $data = new Contact();
        $data->name = $request->input('name');
        $data->phone = $request->input('phone');
        $data->email = $request->has('email')  ? $request->input('email') : '';
        $data->service = $request->has('service')  ? $request->input('service') : '';
        $data->message = $request->has('message')  ? $request->input('message') : '';
        $data->save();

        return response()->json('Message Send Successfuly');

    }
}
