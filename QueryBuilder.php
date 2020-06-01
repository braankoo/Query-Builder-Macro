<?php

namespace App\Macros;


/**
 * Class QueryBuilder
 * @package App\Macros
 */
class QueryBuilder {

    /**
     * @return \Closure
     */
    public function updateValueByColumn()
    {

        return function (string $column, array $data) {

            $query = "UPDATE {$this->connection->getDatabaseName()}.{$this->from} SET {$column} = CASE ";

            for ( $i = 0; $i < count($data); $i ++ )
            {
                $c = 0;
                foreach ( $data[$i]['columns'] as $key => $value )
                {
                    $query .= "WHEN {$key} = '{$value}' ";
                    if ($c > 0)
                    {
                        $query .= " AND {$key} = $value";
                    }

                    $c ++;
                }
                $query .= " THEN {$data[$i]['value'][0]} ";

            }
            $query .= "END";

            $this->connection->statement($query);

        };
    }

}
