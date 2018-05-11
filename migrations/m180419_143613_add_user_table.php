<?php

use yii\db\Migration;

/**
 * Class m180419_143613_add_user_table
 */
class m180419_143613_add_user_table extends Migration
{
    public function up()
    {
        $this->createTable('user', [
            'id'            => $this->primaryKey(),
            'email'         => $this->string()->notNull(),
            'password_hash' => $this->string()->notNull(),
            'first_name'    => $this->string()->null(),
            'second_name'   => $this->string()->null(),
            'telephone'     => $this->string()->null(),
            'country'       => $this->string()->null(),
            'city'          => $this->string()->null(),
        ]);
    }

    public function down()
    {
        $this->dropTable('user');
    }
}
