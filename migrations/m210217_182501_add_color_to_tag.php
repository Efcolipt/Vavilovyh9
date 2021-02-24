<?php

use yii\db\Migration;

/**
 * Class m210217_182501_add_color_to_tag
 */
class m210217_182501_add_color_to_tag extends Migration
{
    /**
     * {@inheritdoc}
     */
     public function up()
    {
        $this->addColumn('tag','color', $this->string());
    }

    public function down()
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
        echo "m210217_182501_add_color_to_tag cannot be reverted.\n";

        return false;
    }
    */
}
