<?php

namespace App\Models;

class AttributeValue extends Model
{	
	/**
	 * The table associated with the model.
	 * @var string
	 */
    
    protected $table = 'attribute_values';

    /**
     * The primary key for the model.
     * @var string
     */
    
    protected $primaryKey = 'att_value_id';
    
    /**
     * The attributes that aren't mass assignable.
     * @var array
     */
    
    protected $guarded = [];
}
