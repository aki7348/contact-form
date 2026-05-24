<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last_name','first_name', 'gender','email', 'tel1', 'tel2','tel3','address',
        'building','category_id','detail']);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
    
       $contact = $request->only(['last_name','first_name', 'gender','email', 'tel1', 'tel2','tel3','address',
        'building','category_id','detail']);
             Contact::create($contact);
              return view('thanks');
    }

    public function messages()
    {
         return [
             'name.required' => '名前を入力してください',
             'name.string' => '名前を文字列で入力してください',
             'name.max' => '名前を255文字以下で入力してください',
             'email.required' => 'メールアドレスを入力してください',
             'email.string' => 'メールアドレスを文字列で入力してください',
             'email.email' => '有効なメールアドレス形式を入力してください',
             'email.max' => 'メールアドレスを255文字以下で入力してください',
             'tel.required' => '電話番号を入力してください',
             'tel.numeric' => '電話番号を数値で入力してください',
             'tel.digits_between' => '電話番号を10桁から11桁の間で入力してください',
         ];
    }

    public function thanks(Request $request)
    {
        return view('thanks');
    }
}
