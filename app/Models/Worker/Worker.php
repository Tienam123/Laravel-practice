<?php

namespace App\Models\Worker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Worker\Worker
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Worker newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Worker newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Worker query()
 * @method static \Illuminate\Database\Eloquent\Builder|Worker onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Worker withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Worker withoutTrashed()
 *
 * @mixin \Eloquent
 */
class Worker extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'workers';

    protected $guarded;
}
