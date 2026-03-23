<?php

namespace Mnabialek\LaravelSqlLogger;

use Mnabialek\LaravelSqlLogger\Objects\SqlQuery;

class Query
{
    /**
     * Query constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param int $number
     * @param string|\Illuminate\Database\Events\QueryExecuted $query
     * @param array|null $bindings
     * @param float|null $time
     *
     * @return SqlQuery
     */
    public function get($number, $query, ?array $bindings = null, ?float $time = null)
    {
        if (is_object($query) && property_exists($query, 'sql')) {
            $bindings = $query->bindings ?? [];
            $time = $query->time ?? null;
            $query = $query->sql;
        }

        return new SqlQuery($number, $query, $bindings ?? [], $time);
    }
}
