<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%categorias}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%category}}`
 */
class m191007_030526_add_categoryid_column_to_categorias_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%categorias}}', 'category_id', $this->integer()->defaultValue(1));

        // creates index for column `category_id`
        $this->createIndex(
            '{{%idx-categorias-category_id}}',
            '{{%categorias}}',
            'category_id'
        );

        // add foreign key for table `{{%category}}`
        $this->addForeignKey(
            '{{%fk-categorias-category_id}}',
            '{{%categorias}}',
            'category_id',
            '{{%category}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%category}}`
        $this->dropForeignKey(
            '{{%fk-categorias-category_id}}',
            '{{%categorias}}'
        );

        // drops index for column `category_id`
        $this->dropIndex(
            '{{%idx-categorias-category_id}}',
            '{{%categorias}}'
        );

        $this->dropColumn('{{%categorias}}', 'category_id');
    }
}
