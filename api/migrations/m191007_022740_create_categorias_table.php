<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%categorias}}`.
 */
class m191007_022740_create_categorias_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%categorias}}', [
            'id' => $this->primaryKey(),
            'category_name' => $this->string('150'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%categorias}}');
    }
}
