<?php

namespace App\Exports;

use App\Models\Keuangan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromQuery;

class KeuanganExport implements FromQuery, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function query()
    {
        return Keuangan::query()
            ->whereYear("created_at", Carbon::now()->year)
            ->whereMonth("created_at", Carbon::now()->month);
    }

    public function headings(): array
    {
        return [
            "Tanggal Transaksi",
            "Nama Transaksi",
            "Tipe Transaksi",
            "Jumlah Transaksi",
        ];
    }

    public function map($row): array
    {
        $fields = [
            $row->created_at->isoFormat("D MMMM Y"),
            $row->nama_transaksi,
            $row->keterangan_transaksi,
            $row->jumlah_transaksi,
        ];

        return $fields;
    }
}
