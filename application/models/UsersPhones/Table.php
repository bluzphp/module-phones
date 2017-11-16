<?php
/**
 * @namespace
 */
namespace Application\UsersPhones;

use \Application\UsersPhones\Row;

/**
 * Class Table for `users_phones`
 *
 * @package  Application\UsersPhones
 *
 * @author   dev
 * @created  2017-11-16 18:26:15
 */
class Table extends \Bluz\Db\Table
{
    /**
     * @var string
     */
    protected $name = 'users_phones';

    protected $rowClass = Row::class;

    /**
     * Primary key(s)
     * @var array
     */
    protected $primary = ['id'];
}
