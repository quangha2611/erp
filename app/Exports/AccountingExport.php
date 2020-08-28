<?php

namespace App\Exports;

use Modules\Accounting\Entities\Transaction;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class AccountingExport implements FromArray, WithHeadings, ShouldAutoSize
{
    // public function collection()
    // {
    //     return Asset::all();
    // }

    public function headings(): array {
        return [
            'ID',
            'Công ty',
            'Loại phiếu',
            'Quỹ',
            'Giá trị',
            'Người tạo',
            'Ngày tạo',
            'Trạng thái',
            'Diễn giải',
        ];
    }
 
    protected $accounting;

    public function __construct(array $accounting)
    {
        $this->accounting = $accounting;
    }

    public function array(): array
    {
        return $this->accounting;
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
