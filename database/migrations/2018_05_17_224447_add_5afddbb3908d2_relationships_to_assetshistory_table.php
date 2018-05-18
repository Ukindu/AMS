<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5afddbb3908d2RelationshipsToAssetsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets_histories', function(Blueprint $table) {
            if (!Schema::hasColumn('assets_histories', 'asset_id')) {
                $table->integer('asset_id')->unsigned()->nullable();
                $table->foreign('asset_id', '160374_5afddbb06b17b')->references('id')->on('assets')->onDelete('cascade');
                }
                if (!Schema::hasColumn('assets_histories', 'status_id')) {
                $table->integer('status_id')->unsigned()->nullable();
                $table->foreign('status_id', '160374_5afddbb077244')->references('id')->on('assets_statuses')->onDelete('cascade');
                }
                if (!Schema::hasColumn('assets_histories', 'location_id')) {
                $table->integer('location_id')->unsigned()->nullable();
                $table->foreign('location_id', '160374_5afddbb085613')->references('id')->on('assets_locations')->onDelete('cascade');
                }
                if (!Schema::hasColumn('assets_histories', 'assigned_user_id')) {
                $table->integer('assigned_user_id')->unsigned()->nullable();
                $table->foreign('assigned_user_id', '160374_5afddbb090f74')->references('id')->on('users')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assets_histories', function(Blueprint $table) {
            
        });
    }
}
