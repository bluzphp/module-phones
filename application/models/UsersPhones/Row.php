<?php
/**
 * @namespace
 */
namespace Application\UsersPhones;

/**
 * Class Row for `users_phones`
 *
 * @package  Application\UsersPhones
 *
 * @property integer $id
 * @property integer $userId
 * @property string $number
 * @property string $status
 * @property string $created
 * @property string $updated
 *
 * @author   dev
 * @created  2017-11-16 18:26:15
 */
class Row extends \Bluz\Db\Row
{
    /**
     * @return void
     */
    public function beforeInsert() : void
    {
    }

    /**
     * @return void
     */
    public function beforeUpdate() : void
    {
    }
}
