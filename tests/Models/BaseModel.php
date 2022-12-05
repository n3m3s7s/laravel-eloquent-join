<?php

namespace VertigoStack\Laravel\EloquentJoin\Tests\Models;

use VertigoStack\Laravel\EloquentJoin\Traits\EloquentJoin;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use EloquentJoin;
}
