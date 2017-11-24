<?php
/**
 * @namespace
 */
namespace Application\UsersPhones;

use Bluz\Validator\Traits\Validator;

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
 * @author   Anton Shevchuk
 * @created  2017-11-21 18:26:26
 */
class Row extends \Bluz\Db\Row
{
    use Validator;

    /**
     * @return void
     */
    protected function afterRead() : void
    {
        $this->addValidator('userId')
            ->numeric()
            ->required();

        $this->addValidator('number')
            ->numeric()
            ->length(12, 12)
            ->required();
    }

    /**
     * getUser
     *
     * @return \Application\Users\Row|false
     */
    public function getUser()
    {
        return $this->getRelation('Users');
    }
}
