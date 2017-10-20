<?php
/**
 * Created by PhpStorm.
 * User: VIAP
 * Date: 19.10.2017
 * Time: 20:05
 */

namespace Corp\Repositories;

use Corp\Menu;


class MenusRepository extends Repository {


    public function __construct(Menu $menu) {
        $this->model = $menu;
    }



}