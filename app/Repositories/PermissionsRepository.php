<?php
/**
 * Created by PhpStorm.
 * User: VIAP
 * Date: 16.03.2018
 * Time: 18:15
 */

namespace Corp\Repositories;
use Corp\Permission;


class PermissionsRepository extends Repository {


    public function __construct(Permission $permission) {
        $this->model = $permission;
    }

}
