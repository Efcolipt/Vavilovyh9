<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%water}}`.
 */
class m210224_104132_create_water_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%water}}', [
          'id' => $this->primaryKey(),
          'surname'=>$this->string(),
          'email'=>$this->string(),
          'apartment'=>$this->integer(),
          'hotwater'=>$this->integer(),
          'coldwater'=>$this->integer(),
          'date'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%water}}');
    }
}
