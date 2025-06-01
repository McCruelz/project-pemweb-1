<?php
class AdminModel extends Model
{
    private $ongoingPesanan = [
        ['id' => 1, 'name' => 'Pesanan 1'],
        ['id' => 2, 'name' => 'Pesanan 2'],
        ['id' => 3, 'name' => 'Pesanan 3']
    ];

    private $detailPesanan = [
        1 => [
            'id' => 1,
            'nomor' => '#01',
            'status' => 'Belum Selesai',
            'tanggal' => '12/10/2024',
            'meja' => 8,
            'items' => [
                ['nama' => 'Nasi Goreng', 'qty' => 1, 'harga' => 25000],
                ['nama' => 'Es Teh', 'qty' => 1, 'harga' => 3000],
                ['nama' => 'Kerupuk', 'qty' => 2, 'harga' => 2000]
            ],
            'total' => 30000
        ],
        2 => [
            'id' => 2,
            'nomor' => '#02',
            'status' => 'Belum Selesai',
            'tanggal' => '12/10/2024',
            'meja' => 8,
            'items' => [
                ['nama' => 'Nasi Goreng', 'qty' => 1, 'harga' => 25000],
                ['nama' => 'Es Teh', 'qty' => 1, 'harga' => 3000],
                ['nama' => 'Kerupuk', 'qty' => 2, 'harga' => 2000]
            ],
            'total' => 30000
        ],
        3 => [
            'id' => 3,
            'nomor' => '#03',
            'status' => 'Belum Selesai',
            'tanggal' => '12/10/2024',
            'meja' => 8,
            'items' => [
                ['nama' => 'Nasi Goreng', 'qty' => 1, 'harga' => 25000],
                ['nama' => 'Es Teh', 'qty' => 1, 'harga' => 3000],
                ['nama' => 'Kerupuk', 'qty' => 2, 'harga' => 2000]
            ],
            'total' => 30000
        ]
    ];

    private $riwayatPesanan = [
        ['id' => 1, 'name' => 'Pesanan 1'],
        ['id' => 2, 'name' => 'Pesanan 2'],
        ['id' => 3, 'name' => 'Pesanan 3']
    ];

    function getOngoingPesanan()
    {
        return $this->ongoingPesanan;
    }

    function getPesananById($id)
    {
        return $this->detailPesanan[$id] ?? null;
    }

    function getRiwayatPesanan()
    {
        return $this->riwayatPesanan;
    }

    function getRiwayatPesananById($id)
    {
        return $this->detailPesanan[$id] ?? null;
    }
}
