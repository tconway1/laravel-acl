<?php

namespace VivifyIdeas\Acl\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent model for acl_permissions table.
 * This is used by Eloquent permissions provider.
 */
class Permission extends Model
{
    protected $table = 'acl_permissions';

    protected $fillable = [ 'id', 'allowed', 'route', 'resource_id_required', 'name', 'group_id' ];

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
