<?php
use yii\db\Migration;

/**
 * Class m240117_105244_add_data_demo
 */
class m240117_105244_add_data_demo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 32; $i++) {
            $this->insert('book', [
                'title' => $faker->text(32),
                'description' => $faker->text(244),
                'author' => $faker->name(),
                'pages' => rand(100, 1000),
                'created_at' => date('Y-m-d\TH:i:s.v\Z'),
                'updated_at' => date('Y-m-d\TH:i:s.v\Z'),
            ]);
        }

        $this->insert('user', [
            'username' => 'admin',
            'auth_key' => 'admin',
            'password_hash' => Yii::$app->security->generatePasswordHash('admin'),
            'email' => 'user@gmail.com',
            'created_at' => date('Y-m-d\TH:i:s.v\Z'),
            'updated_at' => date('Y-m-d\TH:i:s.v\Z')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        for ($i = 0; $i < 32; $i++) {
            $this->delete('book', ['id' => $i]);
        }
        
        $this->delete('user', ['id' => 1]);
    }
}
