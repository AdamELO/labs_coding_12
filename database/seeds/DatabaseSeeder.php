<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(ArticleTableSeeder::class);
        $this->call(TitreTableSeeder::class);
        $this->call(BannercarTableSeeder::class);
        $this->call(SloganTableSeeder::class);
        $this->call(LogoTableSeeder::class);
        $this->call(IconTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(PresentationTableSeeder::class);
        $this->call(TestimonialTableSeeder::class);
        $this->call(ReadyTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(TeamTableSeeder::class);
        $this->call(ServiceprimTableSeeder::class);
        $this->call(CommentaireTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(CategorieTableSeeder::class);
        $this->call(CategorieArticleTableSeeder::class);
        $this->call(TagArticleTableSeeder::class);
        $this->call(FooterTableSeeder::class);
        $this->call(NewsletterTableSeeder::class);
    }
}
