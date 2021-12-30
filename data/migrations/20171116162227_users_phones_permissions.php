<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class UsersPhonesPermissions extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $data = [
            [
                'roleId' => 2,
                'module' => 'phones',
                'privilege' => 'Management'
            ],
            [
                'roleId' => 2,
                'module' => 'users',
                'privilege' => 'EditPhones'
            ],
            [
                'roleId' => 3,
                'module' => 'users',
                'privilege' => 'EditPhones'
            ],
        ];

        $privileges = $this->table('acl_privileges');
        $privileges->insert($data)
            ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->execute('DELETE FROM acl_privileges WHERE module = "phones"');
    }
}
