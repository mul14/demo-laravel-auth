<?php

class SessionController extends \BaseController {

    public function create()
    {
        return View::make('login');
    }

    public function store()
    {
        $input = Input::only('username', 'password');

        if (Auth::attempt($input))
            return 'Login success';

        return 'Invalid credentials';
    }
}
