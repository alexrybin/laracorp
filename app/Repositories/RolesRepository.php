<?php
/**
 * Created by PhpStorm.
 * User: VIAP
 * Date: 16.03.2018
 * Time: 18:17
 */

namespace Corp\Repositories;

use Corp\Role;

class RolesRepository extends Repository {


    public function __construct(Role $role) {
        $this->model = $role;
    }

}