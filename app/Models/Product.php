<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use \DateTimeInterface;

class Product extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasFactory;

    public $table = 'products';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $appends = [
        'photo',
        'additional_images',
        'attachments',
    ];

    const IMAGE_LABELS_SELECT = [
        'pre_order'   => 'Pre-Order',
        'new'         => 'New',
        'recommended' => 'Recommended',
    ];

    protected $fillable = [
        'published',
        'image_labels',
        'product_type_id',
        'name',
        'short_description',
        'description',
        'price',
        'meta_title',
        'meta_desc',
        'fb_title',
        'twitter_title',
        'slug',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function productProductReviews()
    {
        return $this->hasMany(ProductReview::class, 'product_id', 'id');
    }

    public function productsPartners()
    {
        return $this->belongsToMany(Partner::class);
    }

    public function productsPosts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function product_type()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id');
    }

    public function categories()
    {
        return $this->belongsToMany(ProductCategory::class);
    }

    public function tags()
    {
        return $this->belongsToMany(ProductTag::class);
    }

    public function getPhotoAttribute()
    {
        $file = $this->getMedia('photo')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getAdditionalImagesAttribute()
    {
        $files = $this->getMedia('additional_images');
        $files->each(function ($item) {
            $item->url       = $item->getUrl();
            $item->thumbnail = $item->getUrl('thumb');
            $item->preview   = $item->getUrl('preview');
        });

        return $files;
    }

    public function getAttachmentsAttribute()
    {
        return $this->getMedia('attachments');
    }
}
