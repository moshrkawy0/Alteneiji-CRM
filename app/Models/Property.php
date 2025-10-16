<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Property extends Model
{
    protected $fillable = [
        'parent_id',
        'code',
        'name',
        'type',
        'is_parent',
        'status',
        'city',
        'area',
        'district',
        'address',
        'latitude',
        'longitude',
        'total_area',
        'built_area',
        'bedrooms',
        'bathrooms',
        'floor_number',
        'total_floors',
        'parking_spaces',
        'price',
        'price_per_sqm',
        'listing_type',
        'rental_period',
        'currency',
        'negotiable',
        'developer_name',
        'completion_date',
        'construction_status',
        'total_units',
        'project_completion_percentage',
        'amenities',
        'unit_number',
        'view_type',
        'finishing_status',
        'furnished',
        'has_balcony',
        'agent_id',
        'commission_percentage',
        'listing_date',
        'available_from',
        'last_price_update',
        'views_count',
        'description',
        'features',
        'images',
        'documents',
        'virtual_tour_url',
    ];

    protected $casts = [
        'is_parent' => 'boolean',
        'negotiable' => 'boolean',
        'furnished' => 'boolean',
        'has_balcony' => 'boolean',
        'amenities' => 'array',
        'features' => 'array',
        'images' => 'array',
        'documents' => 'array',
        'completion_date' => 'date',
        'listing_date' => 'date',
        'available_from' => 'date',
        'last_price_update' => 'datetime',
    ];

    // ← ضيف الـ boot function هنا
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($property) {
            // لو الـ code فاضي، اعمله تلقائي
            if (empty($property->code)) {
                $property->code = 'PROP-' . strtoupper(substr(uniqid(), -8));
            }
        });
    }

    // Relationships
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Property::class, 'parent_id');
    }

    public function agent(): BelongsTo
    {
        return $this->belongsTo(User::class, 'agent_id');
    }

    // Scopes
    public function scopeParents($query)
    {
        return $query->where('is_parent', true)->whereNull('parent_id');
    }

    public function scopeUnits($query)
    {
        return $query->where('is_parent', false)->whereNotNull('parent_id');
    }

    public function scopeAvailable($query)
    {
        return $query->where('status', 'available');
    }

    public function scopeResidential($query)
    {
        return $query->whereIn('type', [
            'residential_tower',
            'apartment',
            'villa',
            'townhouse',
            'penthouse'
        ]);
    }

    public function scopeCommercial($query)
    {
        return $query->whereIn('type', [
            'commercial_tower',
            'shop',
            'office',
            'warehouse',
            'showroom'
        ]);
    }
}
