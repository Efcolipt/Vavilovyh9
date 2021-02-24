<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%question}}`.
 */
class m210219_054136_create_question_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $this->createTable('{{%question}}', [
        'id' => $this->primaryKey(),
        'name'=>$this->string(),
        'text'=>$this->string(),
        'apartment'=>$this->integer(),
        'contact'=>$this->string(),
        'date'=>$this->string(),
      ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%question}}');
    }
}
