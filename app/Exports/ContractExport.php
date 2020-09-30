<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;
use Modules\Crm\Services\ContractService;

class ContractExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
    protected $contract;

    public function __construct(ContractService $contract)
    {
        $this->contract = $contract;
    }

    public function collection()
    {
        $contracts = $this->contract->all();
        foreach ($contracts as $contract) {
            $data[] = array(
                '0' => $contract->id,
                '1' => $contract->customer->name,
                '2' => number_format($contract->totalValue),
                '3' => 0,
                '4' => $contract->signType->name,
                '5' => 0,
                '6' => $contract->user->name
            );

            if($contract->is_checked == 1) {
                $data[count($data)-1]['5'] = 'Đã duyệt';
                $data[count($data)-1]['3'] = number_format($contract->totalValue);
            } else {
                $data[count($data)-1]['5'] = 'Chưa duyệt';
            }
        }

        return (collect($data));
    }
    public function headings(): array
    {
        return [
            'ID',
            'Customer',
            'Value',
            'Paid',
            'Sign Type',
            'Checked',
            'Author',
        ];
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

?>