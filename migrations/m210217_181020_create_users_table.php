<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m210217_181020_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
     public function safeUp()
     {
         $this->createTable('{{%users}}', [
           'id' => $this->primaryKey(),
           'name'=>$this->string(),
           'email'=>$this->string()->defaultValue(null),
           'password'=>$this->string(),
           'role'=>$this->integer()->defaultValue(0),
           'photo'=>$this->string()->defaultValue(null)
         ]);
     }

     /**
      * {@inheritdoc}
      */
     public function safeDown()
     {
         $this->dropTable('{{%users}}');
     }
}
