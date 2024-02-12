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
 * @property int $id
 * @property string $worker_name
 * @property string $worker_email
 * @property string $worker_profession
 * @property string $worker_technologies
 * @property int $is_online
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 *
 * @method static \Database\Factories\Worker\WorkerFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Worker whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Worker whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Worker whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Worker whereIsOnline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Worker whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Worker whereWorkerEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Worker whereWorkerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Worker whereWorkerProfession($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Worker whereWorkerTechnologies($value)
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
