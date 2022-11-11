<?php

namespace App\Exports;

use App\Models\Core;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataExport implements FromQuery, WithMapping, WithHeadings
{

    public function query()
    {
        return Core::query()->with('node', 'customer');
    }

    public function map($item): array
    {
        return [
            $item->node->tmnode,
            $item->cableid,
            $item->code,
            $item->epeid,
            $item->customer->cctno,
            $item->customer->reduncygroup,
            $item->customer->customer
        ];
    }

    public function headings(): array
    {
        return [
            'TMNode',
            'CABLEID',
            'CODE',
            'EPEID',
            'CCTNO',
            'LV/LD',
            'CUSTOMER',
        ];
    }
}
