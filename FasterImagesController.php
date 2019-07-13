<?php

namespace Statamic\Addons\FasterImages;

use Statamic\Extend\Controller;

class FasterImagesController extends Controller
{
    /**
     * Maps to your route definition in routes.yaml
     *
     * @return mixed
     */
    public function index()
    {
        return $this->view('index');
    }
}
