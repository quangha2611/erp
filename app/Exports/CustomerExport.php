<?php

namespace App\Exports;

use Modules\Assets\Entities\Asset;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class CustomerExport implements FromArray, WithHeadings, ShouldAutoSize
{
    // public function collection()
    // {
    //     return Asset::all();
    // }

    public function headings(): array {
        return [
            'ID',
            'Tên khách hàng',
            'Công ty',
            'Chuyên ngành',
            'Điện thoại',
            'Giá trị',
            'Email',
            'Website',
            'Loại khách hàng',
            'Level'
        ];
    }
 
    protected $customer;

    public function __construct(array $customer)
    {
        $this->customer = $customer;
    }

    public function array(): array
    {
        return $this->customer;
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            },
        ];
    }

}
