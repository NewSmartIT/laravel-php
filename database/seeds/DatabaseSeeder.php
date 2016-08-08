<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    			$this->call(ArticleTableSeeder::class);
    }

}
class ArticleTableSeeder extends Seeder {

	public function run()
	{
		DB::table('articles')->insert([
			array('title'=>'Article Title','content'=>'Article Content'),
			
			]);
	}
	

}
