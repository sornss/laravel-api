<?php

namespace App\Entities;

use App\Support\UuidScopeTrait;
use App\Support\HasPermissionsUuid;

/**
 * Class Role
 * @package App\Entities
 */
class Role extends \Spatie\Permission\Models\Role
{

    use UuidScopeTrait, HasPermissionsUuid;

    /**
     * @var array
     */
    protected $fillable = ['name', 'uuid'];

}
