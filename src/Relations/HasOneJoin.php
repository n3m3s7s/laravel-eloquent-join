<?php

namespace VertigoStack\Laravel\EloquentJoin\Relations;

use VertigoStack\Laravel\EloquentJoin\Traits\JoinRelationTrait;
use Illuminate\Database\Eloquent\Relations\HasOne;

class HasOneJoin extends HasOne
{
    use JoinRelationTrait;
}
