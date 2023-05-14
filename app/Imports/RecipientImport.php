<?php

namespace App\Imports;

use App\Models\Recipient;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RecipientImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Recipient([
            //
            'name' => $row['name'],
            'email' => $row['email'],
            'position' => $row['position']
        ]);
    }
}
