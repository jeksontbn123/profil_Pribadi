<?php

use App\Models\setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key' => '_site_name',
            'label' => 'judul situs',
            'value' => 'portofolio',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_location',
            'label' => 'alamat kantor',
            'value' => 'jayapura,papua',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_youtube',
            'label' => 'Youtube',
            'value' => 'https://www.youtube.com/watch?v=131g9lQ1Vx0',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://www.instagram.com/',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_facebook',
            'label' => 'Facebook',
            'value' => 'https://web.facebook.com/?_rdc=1&_rdr',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_twitter',
            'label' => 'Twitter',
            'value' => 'https://twitter.com/',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_site_keterangan',
            'label' => 'Site Keteragan',
            'value' => 'Website Pribadi Jekson',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
