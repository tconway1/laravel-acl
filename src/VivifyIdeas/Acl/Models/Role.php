<?php

namespace VivifyIdeas\Acl\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent model for acl_groups table.
 * This is used by Eloquent permissions provider.
 */
class Role extends Model
{
    protected $table = 'acl_roles';

    protected $fillable = [ 'id', 'name', 'permission_ids', 'parent_id' ];

    public $timestamps = false;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
	
	/**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';
}
