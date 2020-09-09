<?php

use yii\db\Migration;

/**
 * Class m200909_102635_create_invoice_table
 */
class m200909_102635_create_invoice_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=MyISAM';
        }

        $this->createTable('{{%invoice}}', [
            'id' => $this->primaryKey(),
            'nomer' => $this->string()->notNull()->unique(),
            'summa' => $this->integer(32)->notNull(),
			'created' => 'datetime DEFAULT NOW()',
            'pay_from' => $this->string()->notNull(),
            'pay_to' => $this->string()->notNull(),
            'naznachenie' => $this->string()->notNull()->unique(),

        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%invoice}}');
    }
}
