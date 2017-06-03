<?php

use Illuminate\Database\Schema\Blueprint;
use WTG\Content\Interfaces\ContentInterface;
use Illuminate\Database\Migrations\Migration;

class CreateContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('tag');
            $table->string('type');
            $table->string('name');
            $table->boolean('editable');
            $table->text('value')->nullable();
            $table->timestamps();
        });

        $this->createBlock("home.news", "Nieuws");
        $this->createBlock("downloads.catalog", "Downloads / Catalogus");
        $this->createBlock("downloads.files", "Downloads / Artikelbestanden");
        $this->createBlock("downloads.flyers", "Downloads / Flyers");
        $this->createBlock('info.assortment', "Info / Assortiment");
        $this->createBlock('info.manufacturers', "Info / Fabrikanten");
        $this->createBlock('admin.product_import', "Admin / Product import", false);
        $this->createBlock('admin.discount_import', "Admin / Korting import", false);
        $this->createBlock('admin.catalog_footer', "Catalogus footer", false, "Telefoon: (050) 544 55 66  -  E-Mail: verkoop@wiringa.nl  -  Website: wiringa.nl  -  Maart 2017");

        $this->createPage('test', 'Custom page title', "<h1>Foobar</h1>");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content');
    }

    /**
     * Create a content item.
     *
     * @param  string  $tag
     * @param  string  $name
     * @param  bool  $editable
     * @param  string|null  $value
     */
    protected function createBlock(string $tag, string $name, bool $editable = true, $value = null)
    {
        /** @var ContentInterface $content */
        $content = app()->make(ContentInterface::class);
        $content->setId(\Webpatser\Uuid\Uuid::generate(4));
        $content->setTag($tag);
        $content->setName($name);
        $content->setEditable($editable);
        $content->setType(ContentInterface::TYPE_BLOCK);

        if ($value !== null) {
            $content->setValue($value);
        }

        $content->save();
    }

    /**
     * Create a content item.
     *
     * @param  string  $tag
     * @param  string  $name
     * @param  string  $value
     */
    protected function createPage(string $tag, string $name, string $value)
    {
        /** @var ContentInterface $content */
        $content = app()->make(ContentInterface::class);
        $content->setId(\Webpatser\Uuid\Uuid::generate(4));
        $content->setTag($tag);
        $content->setName($name);
        $content->setEditable(true);
        $content->setValue($value);
        $content->setType(ContentInterface::TYPE_PAGE);
        $content->save();
    }
}
