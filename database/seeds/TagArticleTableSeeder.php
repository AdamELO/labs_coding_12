<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'tag_articles' )->insert( [
            'article_id' => 1,
            'tag_id' => 1,
        ] );
        DB::table( 'tag_articles' )->insert( [
            'article_id' => 1,
            'tag_id' => 3,
        ] );
        DB::table( 'tag_articles' )->insert( [
            'article_id' => 1,
            'tag_id' => 5,
        ] );
        DB::table( 'tag_articles' )->insert( [
            'article_id' => 2,
            'tag_id' => 5,
        ] );
        DB::table( 'tag_articles' )->insert( [
            'article_id' => 2,
            'tag_id' => 4,
        ] );
        DB::table( 'tag_articles' )->insert( [
            'article_id' => 2,
            'tag_id' => 1,
        ] );
        DB::table( 'tag_articles' )->insert( [
            'article_id' => 3,
            'tag_id' => 7,
        ] );
        DB::table( 'tag_articles' )->insert( [
            'article_id' => 3,
            'tag_id' => 2,
        ] );
        DB::table( 'tag_articles' )->insert( [
            'article_id' => 3,
            'tag_id' => 6,
        ] );
    }
}
