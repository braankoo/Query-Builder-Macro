# Query-Builder-Macro
Find and update multiple columns with different values (Builder macro) 


        DB::connection('connection_name')->table('table_to_work_with')->updateValueByColumn(
            'colum_to_update',
            [
                "columns" => [
                    "column_one" => "value",
                    "column_two" => "value2",
                ],
                "value"   => [ "new value"
                ]
            ],

            [
                "columns" => [
                    "one"        => "Column name one",
                    "column_two" => "value2",
                ],
                "value"   => [ "new value" ]
            ]
        );
