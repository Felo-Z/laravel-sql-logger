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
    public function get($number, $query, array $bindings = null, $time = null)
    {
        return new SqlQuery($number, $query, $bindings, $time);
    }
}
