<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%categorias}}`.
 */
class m191007_031026_drop_categoriaid_column_from_categorias_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%categorias}}', 'category_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('{{%categorias}}', 'category_id', $this->integer());
    }
}
