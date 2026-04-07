<?php namespace Pensoft\Initiatives\Models;

use Model;


/**
 * Model
 */
class Initiative extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\Sortable;

    protected $casts = [
        'deleted_at' => 'datetime',
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pensoft_initiatives_data';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'category' => [\Pensoft\Initiatives\Models\Category::class]
    ];

    public $attachOne = [
        'logo' => \System\Models\File::class,
    ];
}
