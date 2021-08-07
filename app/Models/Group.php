<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasLaTable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Group extends Model
{
    use HasLaTable;
    protected $fillable = ['name'];

    /** @return BelongsToMany  */
    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'customer_group', 'group_id', 'customer_id');
    }
}
