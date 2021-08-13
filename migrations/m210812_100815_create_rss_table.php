<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rss}}`.
 */
class m210812_100815_create_rss_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%rss}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'url' => $this->string()->notNull(),
            'date' => $this->string()->notNull(),
            'author' => $this->string(),
            'description' => $this->string()->notNull(),
            'imagine' => $this->string()

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rss}}');
    }
}
