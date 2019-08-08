<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Setting;
use App\Mail\SendMailContact;
use Mail;
use Mapper;
class ContactController extends Controller
{
    public function contact() {
        $data['pageClass'] = "html not-front not-logged-in no-sidebars page-node page-node- page-node-49 node-type-webform i18n-vi adminimal-theme jquery-once-1-processed mq-desktop";
	    return view('frontpage.contact-us', compact('data'));
    }

    public function addContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|max:64',
            'message' => 'required',
        ], 
        [
            'name.required' => 'Tên là trường bắt buộc',
            'name.max' => 'Tên không vượt quá 255 ký tự',
            'email.required' => 'Email là trường bắt buộc',
            'email.max' => 'Email không vượt quá 64 ký tự',
            'message.required' => 'Message là trường bắt buộc',

        ]);
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->read = 0;
        if($contact->save()) {
            $to = Setting::where('code', 'email')->first()->value;
            Mail::to($to)->send(new SendMailContact($request->all()));
            return view('frontpage.contact-us', ['success' => __('Bạn đã gửi thành công')]);
        }
    }
}
