<?php
use Migrations\AbstractSeed;

/**
 * Resources seed.
 */
class ResourcesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'user_id' => '1',
                'name' => 'First Post',
                'slug' => 'first-post',
                'description' => 'This is the first post.',
                'published' => '1',
                'created' => '2018-08-24 08:50:04',
                'modified' => '2018-09-05 15:58:30',
            ],
            [
                'id' => '2',
                'user_id' => '1',
                'name' => 'Nouvel article modifié',
                'slug' => 'nouvel-article',
                'description' => 'Corps du nouvel article modifié',
                'published' => '0',
                'created' => '2018-08-24 14:15:11',
                'modified' => '2018-08-31 12:48:13',
            ],
            [
                'id' => '3',
                'user_id' => '3',
                'name' => 'Article avec un slug',
                'slug' => 'Article-avec-un-slug',
                'description' => 'Coprs de l\'Article avec un slug',
                'published' => '0',
                'created' => '2018-08-24 14:21:03',
                'modified' => '2018-08-24 14:21:03',
            ],
            [
                'id' => '4',
                'user_id' => '3',
                'name' => 'test de validation',
                'slug' => 'test-de-validation',
                'description' => 'test du corps de l\'article',
                'published' => '0',
                'created' => '2018-08-24 14:33:22',
                'modified' => '2018-08-24 14:33:22',
            ],
            [
                'id' => '5',
                'user_id' => '3',
                'name' => 'Un article de André modifié',
                'slug' => 'Un-article-de-Andre',
                'description' => 'Le corps de l\'article de André modifié',
                'published' => '0',
                'created' => '2018-08-24 20:49:37',
                'modified' => '2018-08-24 20:50:17',
            ],
            [
                'id' => '6',
                'user_id' => '4',
                'name' => 'Un article d\'admin mod.',
                'slug' => 'un-article-d-admin',
                'description' => 'Voici le corps de l\'article d\'admin modifié',
                'published' => '0',
                'created' => '2018-08-31 14:14:44',
                'modified' => '2018-08-31 14:17:05',
            ],
            [
                'id' => '7',
                'user_id' => '4',
                'name' => 'Un autre de l\'admin',
                'slug' => 'un-autre',
                'description' => 'Voici le corps de l\'autre article de l\'admin',
                'published' => '0',
                'created' => '2018-08-31 14:22:16',
                'modified' => '2018-09-07 13:30:55',
            ],
        ];

        $table = $this->table('resources');
        $table->insert($data)->save();
    }
}
