<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		$this->call('UserTableSeeder');
        $this->call('RoleTableSeeder');
        $this->call('PermissionTableSeeder');
        $this->call('AlbumTableSeeder');
        $this->call('ArticleTableSeeder');
        $this->call('ArtCategoryTableSeeder');
        $this->call('AwardHistoryTableSeeder');
        $this->call('EducationHistoryTableSeeder');
        $this->call('ExhibitionTableSeeder');
        $this->call('TagTableSeeder');
        $this->call('PhotoTableSeeder');
        $this->call('ProfileTableSeeder');

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}

class AlbumTableSeeder extends Seeder {

    public function run()
    {
        DB::table('albums')->delete();
        DB::table('albums')->insert(['id' => '1','title'=>'linking park','description'=>'linking park','date_created'=>'93/01/03','user_id'=>'1']);
        DB::table('albums')->insert(['id' => '2','title'=>'green day','description'=>'green day','date_created'=>'1993/01/03','user_id'=>'1']);
    }
}


class ArticleTableSeeder extends Seeder {

    public function run()
    {
        DB::table('articles')->delete();
        DB::table('articles')->insert(['id' => '1','title'=>'Oil Painting','description'=>'about oil painting','date_created'=>'1993/01/03','type'=>'painting','status' => 'onHold']);
    }
}


class ArtCategoryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('art_categories')->delete();
        DB::table('art_categories')->insert(['id' => '1','name'=>'Oil Painting','description'=>'Oil painting is the process of painting with pigments that are bound with a medium of drying oil—especially in early modern Europe, linseed oil. Often an oil such as linseed was boiled with a resin such as pine resin or even frankincense; these were calle']);
        DB::table('art_categories')->insert(['id' => '2','name'=>'Pastel','description'=>'Pastel is a painting medium in the form of a stick, consisting of pure powdered pigment and a binder.[14] The pigments used in pastels are the same as those used to produce all colored art media, including oil paints; the binder is of a neutral hue and lo']);
        DB::table('art_categories')->insert(['id' => '3','name'=>'Acrylic Painting','description'=>'Acrylic paint is fast drying paint containing pigment suspension in acrylic polymer emulsion. Acrylic paints can be diluted with water, but become water-resistant when dry. Depending on how much the paint is diluted (with water) or modified with acrylic g']);
        DB::table('art_categories')->insert(['id' => '4','name'=>'Watercolor Painting','description'=>'Watercolor is a painting method in which the paints are made of pigments suspended in a water soluble vehicle. The traditional and most common support for watercolor paintings is paper; other supports include papyrus, bark papers, plastics, vellum or leat']);
        DB::table('art_categories')->insert(['id' => '5','name'=>'Ink Painting','description'=>'Ink paintings are done with a liquid that contains pigments and/or dyes and is used to color a surface to produce an image, text, or design. Ink is used for drawing with a pen, brush, or quill. Ink can be a complex medium, composed of solvents, pigments, ']);
        DB::table('art_categories')->insert(['id' => '6','name'=>'Hot Wax','description'=>'Encaustic painting, also known as hot wax painting, involves using heated beeswax to which colored pigments are added. The liquid/paste is then applied to a surface—usually prepared wood, though canvas and other materials are often used. The simplest enca']);
        DB::table('art_categories')->insert(['id' => '7','name'=>'Fresco','description'=>'Fresco is any of several related mural painting types, done on plaster on walls or ceilings. The word fresco comes from the Italian word affresco [afˈfresːko], which derives from the Latin word for fresh. Frescoes were often made during the Renaissance an']);
        DB::table('art_categories')->insert(['id' => '8','name'=>'Gouache','description'=>'Gouache is a water based paint consisting of pigment and other materials designed to be used in an opaque painting method. Gouache differs from watercolor in that the particles are larger, the ratio of pigment to water is much higher, and an additional']);
        }
    }


class TagTableSeeder extends Seeder {

    public function run()
    {
        DB::table('tags')->delete();
        DB::table('tags')->insert(['id' => '1','name'=>'uncatogorised']);
        DB::table('tags')->insert(['id' => '2','name'=>'news']);
    }
}
class ProfileTableSeeder extends Seeder {

    public function run()
    {
        DB::table('portfolios')->delete();
        DB::table('portfolios')->insert(['id' => '1','first_name'=>'foo ','last_name'=>'foo','art_category_id'=>'1','contact_no'=>'9843777421','description'=>'admin is a programmer']);
        DB::table('portfolios')->insert(['id' => '2','first_name'=>'amrit ','last_name'=>'amrit','art_category_id'=>'1','contact_no'=>'9843777421','description'=>'amrit is a programmer']);
        DB::table('portfolios')->insert(['id' => '3','first_name'=>'suraj ','last_name'=>'suraj','art_category_id'=>'1','contact_no'=>'9843777421','description'=>'suraj is a programmer']);
        DB::table('portfolios')->insert(['id' => '4','first_name'=>'sarvin ','last_name'=>'sarvin','art_category_id'=>'1','contact_no'=>'9843777421','description'=>'sarvin is a programmer']);
        DB::table('portfolios')->insert(['id' => '5','first_name'=>'sudipa ','last_name'=>'sudipa','art_category_id'=>'1','contact_no'=>'9843777421','description'=>'sudipa is a programmer']);
        DB::table('portfolios')->insert(['id' => '6','first_name'=>'sukripa ','last_name'=>'sukripa','art_category_id'=>'1','contact_no'=>'9843777421','description'=>'sukripa is a programmer']);

    }
}

class EducationHistoryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('education_histories')->delete();
        DB::table('education_histories')->insert(['id' => '1','school'=>'Hindu Vidyapeeth Nepal','start_date'=>'1995','end_date'=>'2010','portfolio_id'=>'1']);
    }
}

class AwardHistoryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('award_histories')->delete();
        DB::table('award_histories')->insert(['id' => '1','title'=>'Oil Painting','year'=>'1993','portfolio_id'=>'1']);
    }
}

class ExhibitionTableSeeder extends Seeder {

    public function run()
    {
        DB::table('exhibitions')->delete();
        DB::table('exhibitions')->insert(['id' => '1','title'=>'Pulchowk engineering exhibition','description'=>'Exhibition','year'=>'2010','portfolio_id'=>'1']);
    }
}

class PhotoTableSeeder extends Seeder {

    public function run()
    {
        DB::table('photos')->delete();
        DB::table('photos')->insert(['id' => '1','title'=>'Oil Painting ','description'=>'1995 Pulchowk','image'=>'F:\Project\xampp\tmp\php9A85.tmp','date_created' => '1993','status'=>'old','user_id'=>'1','art_category_id' => '1','album_id'=>'1']);
    }
}