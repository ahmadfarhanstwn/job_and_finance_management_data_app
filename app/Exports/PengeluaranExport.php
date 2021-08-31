<?php

namespace App\Exports;

use App\Models\Pengeluaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PengeluaranExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Pengeluaran::all();
    }

    public function headings(): array
    {
        return [
            "Tanggal Pengeluaran",
            "Nama Pengeluaran",
            "Detail Pengeluaran",
            "Kategori Pengeluaran",
            "Jumlah Pengeluaran",
            "Penanggungjawab",
        ];
    }

    public function map($row): array
    {
        $fields = [
            $row->created_at->isoFormat("D MMMM Y"),
            $row->nama_pengeluaran,
            $row->detail_pengeluaran,
            $row->kategori_pengeluaran,
            $row->jumlah_pengeluaran,
            $row->penanggungjawab,
        ];

        return $fields;
    }
}
