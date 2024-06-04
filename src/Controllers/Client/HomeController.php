<?php

namespace Cuong\Bai7\Controllers\Client;

use Cuong\Bai7\Commons\Controller;
use eftec\bladeone\BladeOne;

class HomeController extends Controller
{
    public function index() {
        $name = 'Cường';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}
