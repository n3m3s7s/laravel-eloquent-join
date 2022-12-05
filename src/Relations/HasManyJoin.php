<?php

namespace VertigoStack\Laravel\EloquentJoin\Relations;

use VertigoStack\Laravel\EloquentJoin\Traits\JoinRelationTrait;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HasManyJoin extends HasMany
{
    use JoinRelationTrait;
}
