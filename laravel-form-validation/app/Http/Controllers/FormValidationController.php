<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Form;

class FormValidationController extends Controller {

  public function createUserForm(Request $request) {
    return view('form');
  }

  public function UserForm(Request $request) {

      $this->validate($request, [
          'name' => 'required',
          'email' => 'required|email',
          'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
          'subject'=>'required',
          'message' => 'required'
       ]);

      Form::create($request->all());

      return back()->with('success', 'Your form has been submitted.');
  }
}