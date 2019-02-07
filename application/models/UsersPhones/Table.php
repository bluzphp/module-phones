<?php
/**
 * @namespace
 */
namespace Application\UsersPhones;

/**
 * Class Table for `users_phones`
 *
 * @package  Application\UsersPhones
 *
 * @author   Anton Shevchuk
 * @created  2017-11-21 18:26:26
 */
class Table extends \Bluz\Db\Table
{
    /**
     * Pending phone verification
     */
    public const STATUS_PENDING = 'pending';
    /**
     * Active phone number
     */
    public const STATUS_ACTIVE = 'active';
    /**
     * Disabled by administrator or by user
     */
    public const STATUS_DISABLED = 'disabled';
    /**
     * Removed by user
     */
    public const STATUS_DELETED = 'deleted';

    /**
     * @var string
     */
    protected $name = 'users_phones';

    /**
     * @var string
     */
    protected $rowClass = Row::class;

    /**
     * Primary key(s)
     * @var array
     */
    protected $primary = ['id'];

    /**
     * Init table relations
     *
     * @return void
     */
    public function init() : void
    {
        $this->linkTo('userId', 'Users', 'id');
    }
}
