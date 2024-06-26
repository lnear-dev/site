<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    protected $connection = 'docs';
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('language');
            $table->string('url');
            $table->string('github_url')->nullable();
            $table->longText('icon')->nullable();
            $table->longText('description')->nullable();
            $table->longText('readme')->nullable();
            $table->integer('active')->default(1);
            $table->unique(['name', 'language']);
            $table->timestamps();
        });

        // Package versions table
        Schema::create('package_versions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('package_id')->constrained('packages')->onDelete('cascade');
            $table->string('version');
            $table->string('download_url')->nullable();
            $table->string('documentation')->nullable();
            $table->unique(['package_id', 'version']);
            $table->timestamps();
        });

        // Docs table
        Schema::create('docs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('package_version_id')->constrained('package_versions')->onDelete('cascade');
            $table->string('url');
            $table->unique(['package_version_id', 'url']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        foreach (['docs', 'package_versions', 'packages'] as $table) {
            Schema::dropIfExists($table);
        }
    }
};
