<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('tag');
            $table->string('name');
            $table->boolean('editable');
            $table->text('content')->nullable();
            $table->timestamps();
        });

        $this->createBlocks("home.news", "Nieuws");
        $this->createBlocks("downloads.catalog", "Downloads / Catalogus");
        $this->createBlocks("downloads.files", "Downloads / Artikelbestanden");
        $this->createBlocks("downloads.flyers", "Downloads / Flyers");
        $this->createBlocks('info.assortment', "Info / Assortiment");
        $this->createBlocks('info.manufacturers', "Info / Fabrikanten");
        $this->createBlocks('admin.product_import', "Admin / Product import", false);
        $this->createBlocks('admin.discount_import', "Admin / Korting import", false);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blocks');
    }

    protected function createBlocks(string $tag, string $name, bool $editable = true)
    {
        $block = new \WTG\Block\Models\Block;
        $block->setId(\Webpatser\Uuid\Uuid::generate(4));
        $block->setTag($tag);
        $block->setName($name);
        $block->setEditable($editable);
        $block->save();
    }
}
