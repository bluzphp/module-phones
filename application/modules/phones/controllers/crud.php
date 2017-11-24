<?php
/**
 * CRUD controller for UsersPhones model
 *
 * @author   dev
 * @created  2017-11-21 14:39:14
 */

/**
 * @namespace
 */
namespace Application;

use Bluz\Controller\Controller;
use Bluz\Controller\Mapper\Crud;

/**
 * @accept HTML
 * @accept JSON
 * @privilege Management
 *
 * @return mixed
 */
return function () {
    /**
     * @var Controller $this
     */
    $crud = new Crud(UsersPhones\Crud::getInstance());

    $crud->get('system', 'crud/get');
    $crud->post('phones', 'crud/post');
    $crud->put('system', 'crud/put');
    $crud->delete('system', 'crud/delete');

    return $crud->run();
};
