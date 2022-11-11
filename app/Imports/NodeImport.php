<?php

namespace App\Imports;

use App\Models\Tmnode;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NodeImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Tmnode([
            'tmnode'  => $row['tmnode'],
            'cableid' => $row['cableid']
        ]);
    }
}
