<?php
namespace Julius\Greetr\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Julius\Greetr\Model\ContactForm;

class ContactFormController extends Controller
{
    public function index()
    {
        return view('greetr::contact');
    }

    public function sendMail(Request $request)
    {
        ContactForm::create($request->all());

        return redirect()->route('contact')->with(['message' => 'Thank you, Your message was sent successfully!']);
    }
}
