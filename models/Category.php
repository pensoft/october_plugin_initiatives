<?php namespace Pensoft\Initiatives\Models;

use Model;


/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\Sluggable;

    protected $casts = [
        'deleted_at' => 'datetime',
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pensoft_initiatives_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'cover' => \System\Models\File::class,
    ];

    protected $slugs = ['slug' => 'title'];
}
