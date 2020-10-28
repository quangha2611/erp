<?php
/**
 * Created by PhpStorm.
 * User: quangha
 * Date: 13/10/2020
 * Time: 10:22
 */

namespace App\Exports;


use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Modules\Crm\Services\ReportService;

class ReportBillExport extends Controller implements FromCollection, WithHeadings, ShouldAutoSize
{
    use Exportable;

    protected $report;

    public function __construct(ReportService $report) {
        $this->report = $report;
    }

    public function collection()
    {
        $reports = [];

        $reports = $this->report->bill();

        $bill = [];
        foreach ($reports as $key => $report) {
            $bill[] = array(
                '0' => $key,
                '1' => $report['personal'],
                '2' => $report['enterprise'],
                '3' => $report['totalValueContractPersonal'],
                '4' => $report['totalValueContractEnterprise'],
            );
        }

        return (collect($bill));
    }

    public function headings(): array
    {
        return [
            'Ngày Xuất',
            'Tổng số đơn hàng cá nhân',
            'Tổng số đơn hàng doanh nghiệp',
            'Tổng giá trị các đơn hàng cá nhân',
            'Tổng giá trị các đơn hàng doanh nghiệp',
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