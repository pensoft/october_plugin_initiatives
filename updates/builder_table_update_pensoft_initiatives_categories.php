<?php namespace Pensoft\Initiatives\Updates;

use Schema;
use Illuminate\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftInitiativesCategories extends Migration
{
    public function up(): void
    {
        Schema::table('pensoft_initiatives_categories', function(Blueprint $table)
        {
            $table->string('slug')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('pensoft_initiatives_categories', function(Blueprint $table)
        {
            $table->dropColumn('slug');
        });
    }
}
