<?php

/**
 * Created by PhpStorm.
 * User: TienDinh
 * Date: 9/1/2016
 * Time: 3:10 PM
 */
namespace Multiple\Backend\Models;

use Phalcon\Mvc\Model;

class Posts extends Model
{
    public function getResource() {
        return 'posts';
    }
}