<?php

namespace VertigoStack\Laravel\EloquentJoin\Tests\Tests\Clauses;

use VertigoStack\Laravel\EloquentJoin\Tests\Models\Order;
use VertigoStack\Laravel\EloquentJoin\Tests\TestCase;

class JoinRelationsTest extends TestCase
{
    public function testWhere()
    {
        Order::joinRelations('seller')
            ->get();

        $queryTest = 'select orders.* 
            from "orders" 
            left join "sellers" on "sellers"."id" = "orders"."seller_id" 
            where "orders"."deleted_at" is null 
            group by "orders"."id"';

        $this->assertQueryMatches($queryTest, $this->fetchQuery());
    }
}
