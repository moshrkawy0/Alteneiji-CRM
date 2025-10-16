<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            
            // Self-referencing for parent-child relationship
            $table->foreignId('parent_id')->nullable()->constrained('properties')->nullOnDelete();
            
            // Basic Information
            $table->string('code')->unique()->nullable(); // ← التعديل هنا: أضفنا nullable()
            $table->string('name');
            $table->enum('type', [
                'residential_tower',
                'commercial_tower', 
                'mixed_tower',
                'shopping_mall',
                'compound',
                'apartment',
                'villa',
                'townhouse',
                'penthouse',
                'shop',
                'office',
                'warehouse',
                'showroom',
                'land'
            ]);
            $table->boolean('is_parent')->default(false);
            $table->enum('status', [
                'available',
                'reserved',
                'sold',
                'rented',
                'under_maintenance',
                'off_market'
            ])->default('available');
            
            // Location
            $table->string('city')->nullable();
            $table->string('area')->nullable();
            $table->string('district')->nullable();
            $table->text('address')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            
            // Specifications
            $table->decimal('total_area', 10, 2)->nullable();
            $table->decimal('built_area', 10, 2)->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('floor_number')->nullable();
            $table->integer('total_floors')->nullable();
            $table->integer('parking_spaces')->nullable();
            
            // Pricing
            $table->decimal('price', 15, 2)->nullable();
            $table->decimal('price_per_sqm', 10, 2)->nullable();
            $table->enum('listing_type', ['sale', 'rent', 'both'])->default('sale');
            $table->enum('rental_period', ['monthly', 'yearly'])->nullable();
            $table->string('currency', 10)->default('AED');
            $table->boolean('negotiable')->default(false);
            
            // Project-specific (for parent properties)
            $table->string('developer_name')->nullable();
            $table->date('completion_date')->nullable();
            $table->enum('construction_status', [
                'planning',
                'under_construction',
                'completed'
            ])->nullable();
            $table->integer('total_units')->nullable();
            $table->integer('project_completion_percentage')->nullable();
            $table->json('amenities')->nullable();
            
            // Unit-specific (for child properties)
            $table->string('unit_number')->nullable();
            $table->enum('view_type', [
                'sea_view',
                'street_view', 
                'garden_view',
                'city_view'
            ])->nullable();
            $table->enum('finishing_status', [
                'finished',
                'semi_finished',
                'unfinished'
            ])->nullable();
            $table->boolean('furnished')->default(false);
            $table->boolean('has_balcony')->default(false);
            
            // Management
            $table->foreignId('agent_id')->nullable()->constrained('users')->nullOnDelete();
            $table->decimal('commission_percentage', 5, 2)->nullable();
            $table->date('listing_date')->nullable();
            $table->date('available_from')->nullable();
            $table->timestamp('last_price_update')->nullable();
            $table->integer('views_count')->default(0);
            
            // Description & Media
            $table->text('description')->nullable();
            $table->json('features')->nullable();
            $table->json('images')->nullable();
            $table->json('documents')->nullable();
            $table->string('virtual_tour_url')->nullable();
            
            $table->timestamps();
            
            // Indexes
            $table->index('parent_id');
            $table->index(['is_parent', 'status']);
            $table->index('code');
            $table->index('type');
            $table->index('listing_type');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
