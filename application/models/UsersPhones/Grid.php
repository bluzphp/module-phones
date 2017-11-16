<?php
/**
 * @namespace
 */
namespace Application\UsersPhones;

use Bluz\Grid\Source\SelectSource;

/**
 * Grid based on Table
 *
 * @package  Application\UsersPhones
 *
 * @author   dev
 * @created  2017-11-16 18:33:06
 */
class Grid extends \Bluz\Grid\Grid
{
    /**
     * @var string
     */
    protected $uid = 'usersphones';

    /**
     * @return void
     */
    public function init() : void
    {
        // Current table as source of grid
        $adapter = new SelectSource();
        $adapter->setSource(Table::select());

        $this->setAdapter($adapter);
        $this->setDefaultLimit(25);
        $this->setAllowOrders(['id', 'userId', 'phone', 'status']);
    }
}
