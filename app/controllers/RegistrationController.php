<?php

class RegistrationController extends \BaseController {

    public function create()
    {
        return View::make('register');
    }

    public function store()
    {
        $input = Input::only('username', 'password');

        $user = new User;

        $user->username = $input['username'];
        $user->password = Hash::make($input['password']);

        $user->save();

        return Redirect::home()
            ->withMessage('New user has been created');
    }
}
