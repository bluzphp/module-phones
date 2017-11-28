<?php
/**
 * Grid controller for UsersPhones model
 *
 * @author   dev
 * @created  2017-11-21 14:39:14
 */

/**
 * @namespace
 */
namespace Application;

use Bluz\Controller\Controller;
use Bluz\Proxy\Layout;

/**
 * @privilege Management
 *
 * @return mixed
 */
return function () {
    /**
     * @var Controller $this
     */
    Layout::setTemplate('dashboard.phtml');
    Layout::breadCrumbs(
        [
            Layout::ahref('Dashboard', ['dashboard', 'index']),
            __('Pages')
        ]
    );
    $grid = new UsersPhones\Grid();
    $this->assign('grid', $grid);
};
