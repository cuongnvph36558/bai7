<?php

namespace Cuong\Bai7\Controllers\Admin;

use Cuong\Bai7\Commons\Controller;
use Cuong\Bai7\Commons\Helper;
use Cuong\Bai7\Models\User;

class UserController extends Controller
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        echo '<pre>';
        Helper::debug($this->user->all());

        echo __CLASS__ . '@' . __FUNCTION__;
    }
    public function create()
    {
        echo __CLASS__ . '@' . __FUNCTION__;
    }

    public function store()
    {
        echo __CLASS__ . '@' . __FUNCTION__;
    }

    public function show($id)
    {
        echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }

    public function edit($id)
    {
        echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }

    public function update($id)
    {
        echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }

}
