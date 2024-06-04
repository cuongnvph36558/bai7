<?php

namespace Cuong\Bai7\Controllers\Client;

use Cuong\Bai7\Commons\Controller;

class ProductController extends Controller
{
    public function index()
    {
        echo __CLASS__. '@' .__FUNCTION__;
    }

    public function detail($id)
    {
        echo __CLASS__. '@' .__FUNCTION__ . '@' . $id;
    }
}
