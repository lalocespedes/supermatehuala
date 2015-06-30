<?php

use Phinx\Db\Adapter\MysqlAdapter;
use Phinx\Migration\AbstractMigration;

class SmCustomersMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    // public function change()
    // {

    // }

    /**
     * Migrate Up.
     */
    public function up()
    {
        $users = $this->table('sm_customers');
        $users->addColumn('firstname', 'string', array('limit' => 32))
            ->addColumn('lastname', 'string', array('limit' => 32))
            ->addColumn('username', 'string', array('limit' => 128))
            ->addColumn('email', 'string', array('limit' => 128))
            ->addColumn('email_subscribe', 'integer', array('limit' =>  MysqlAdapter::INT_TINY))
            ->addColumn('phone', 'string', array('limit' => 32))
            ->addColumn('company', 'string', array('limit' => 128))
            ->addColumn('password', 'string', array('limit' => 40))
            ->addColumn('active', 'integer', array('limit' =>  MysqlAdapter::INT_TINY))
            ->addColumn('group_id', 'integer', array('limit' => 11))
            ->addColumn('confirmed', 'integer', array('limit' =>  MysqlAdapter::INT_TINY))
            ->addColumn('created', 'datetime')
            ->addColumn('updated', 'datetime', array('null' => true))
            ->addIndex(array('username', 'email'), array('unique' => true))
            ->create();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}
