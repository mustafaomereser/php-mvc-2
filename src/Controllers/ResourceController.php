<?php

namespace Src\Controllers;

use Src\Models\User;

class ResourceController
{
    public function __construct()
    {
        $this->userModel = new User(0);
    }

    public function index()
    {

        return view('testt', ['users' => $this->userModel->get()]);

        return $this->userModel->where([['id', '=', 1]])->limit(0, 10)->get();
    }

    public function create()
    {
        return "create";
    }

    public function store()
    {
        return "store";
    }

    public function show($id)
    {
        return "show $id";
    }

    public function edit($id)
    {
        return "edit $id";
    }

    public function update($id)
    {
        return "update $id";
    }

    public function destroy($id)
    {
        return "destroy $id";
    }
}
