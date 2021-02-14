<?php

use yii\db\Migration;

/**
 * Class m210214_130553_add_to_tag_color
 */
class m210214_130553_add_to_tag_color extends Migration
{
    /**
     * {@inheritdoc}
     */
     public function safeUp()
     {
         $this->addColumn('tag','color', $this->text());
     }

     /**
      * {@inheritdoc}
      */
     public function safeDown()
     {
         $this->dropColumn('tag','color');
     }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210214_130553_add_to_tag_color cannot be reverted.\n";

        return false;
    }
    */
}
