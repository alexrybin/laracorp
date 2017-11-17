<?php

namespace Corp\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Corp\Http\Controllers\Controller;
use Gate;
class IndexController extends AdminController
{
    //
    public function __construct() {

        parent::__construct();



        $this->template = env('THEME').'.admin.index';

    }

    public function index() {
        if(Gate::denies('VIEW_ADMIN')) {
           abort(403, 'У вас нет прав доступа к админке');
       }



        $this->title = 'Панель администратора';

        return $this->renderOutput();

    }
}
