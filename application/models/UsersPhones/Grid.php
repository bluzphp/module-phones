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
 * @author   Anton Shevchuk
 * @created  2017-11-21 18:26:26
 */
class Grid extends \Bluz\Grid\Grid
{
    /**
     * @var string
     */
    protected $uid = 'usersphones';

    /**
     * @return void
     * @throws \Bluz\Grid\GridException
     */
    public function init() : void
    {
        // Current table as source of grid
        $adapter = new SelectSource();
        $adapter->setSource(Table::select());

        $this->setAdapter($adapter);
        $this->setDefaultLimit(25);
        $this->setAllowFilters([
            'id',
            'userId',
            'number',
            'status',
            'created',
            'updated',
        ]);
        $this->setAllowOrders([
            'id',
            'userId',
            'number',
            'status',
            'created',
            'updated',
        ]);
    }
}
