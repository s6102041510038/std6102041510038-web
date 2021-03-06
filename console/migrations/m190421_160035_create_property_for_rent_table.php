<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_for_rent}}`.
 */
class m190421_160035_create_property_for_rent_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_for_rent}}', [
            'id' => $this->primaryKey(),
            'property_no' => $this->string(5)->notNull()->unique(),
            'type' => $this->string(5),
            'rooms' => $this->integer(5),
            'rent' => $this->decimal(7,2),
            'private_owner_id' => $this->integer(11),
            'staff_id' => $this->integer(11),
            'branch_id' => $this->integer(11)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%property_for_rent}}');
    }
}
