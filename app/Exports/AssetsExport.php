<?php

namespace App\Exports;

use Modules\Assets\Entities\Asset;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class AssetsExport implements FromArray, WithHeadings, ShouldAutoSize
{
    // public function collection()
    // {
    //     return Asset::all();
    // }

    public function headings(): array {
        return [
            'ID',
            'Tên tài sản',
            'Công ty',
            'Danh mục tài sản',
            'Mã TS',
            'Giá trị',
            'Số lượng',
            'Tình trạng thiết bị',
            'Ngày mua',
            'Số tháng bảo hành'
        ];
    }
 
    protected $asset;

    public function __construct(array $asset)
    {
        $this->asset = $asset;
    }

    public function array(): array
    {
        return $this->asset;
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
