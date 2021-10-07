<?php

namespace App\Models;

class Publikasi 
{
   private static $dokumen_publikasi = [
    [
    "title" => "Laporan akuntabilitas Kinerja Akuntansi Pemerintah",
    "slug" => "laporan-akuntabilitas-kinerja-akuntansi-pemerintah",
    "author" => "Tatayuni" ,
    "body" => "Dengan mengucapkan syukur kehadirat Allah SWT, Dokumen Rencana Kerja
    (RENJA) Dinas Komunikasi, Informatika dan Statistik Provinsi Riau Tahun Anggaran
    2020 telah dapat disusun sesuai dengan ketentuan.
    Rencana Kerja (RENJA) Dinas Komunikasi, Informatika dan Statistik Provinsi Riau
    Tahun 2020 ini merupakan wujud nyata dari pelaksanaan Rencana Pembangunan yang
    berbasis Kinerja yang mengacu kepada RENSTRA dan RPJMD Provinsi Riau. Diharapkan
    nantinya RENJA 2020 dapat menjadi dasar pelaksanaan kegiatan selama tahun 2020
    guna meningkatkan kinerja Dinas Komunikasi, Informatika dan Statistik Provinsi Riau.
    Kami mengucapkan terima kasih kepada semua pihak yang telah ikut
    berpartisipasi dalam penyusunan Dokumen Rencana Kerja (RENJA) Dinas Komunikasi,
    Informatika dan Statistik Tahun 2020." 
    ],
    [
    "title" => "Rencana Kerja Dinas Komunikasi dan Informatika Kabuaten Wonosobo" ,
    "slug" => "rencana-kerja-dinas-komunikasi-dan-informatika-kabupaten-wonosobo",
    "author" => "Rafi Naufa" , 
    "body" => "Dengan mengucapkan syukur kehadirat Allah SWT, Dokumen Rencana Kerja
    (RENJA) Dinas Komunikasi, Informatika dan Statistik Provinsi Riau Tahun Anggaran
    2020 telah dapat disusun sesuai dengan ketentuan.
    Rencana Kerja (RENJA) Dinas Komunikasi, Informatika dan Statistik Provinsi Riau
    Tahun 2020 ini merupakan wujud nyata dari pelaksanaan Rencana Pembangunan yang
    berbasis Kinerja yang mengacu kepada RENSTRA dan RPJMD Provinsi Riau. Diharapkan
    nantinya RENJA 2020 dapat menjadi dasar pelaksanaan kegiatan selama tahun 2020
    guna meningkatkan kinerja Dinas Komunikasi, Informatika dan Statistik Provinsi Riau.
    Kami mengucapkan terima kasih kepada semua pihak yang telah ikut
    berpartisipasi dalam penyusunan Dokumen Rencana Kerja (RENJA) Dinas Komunikasi,
    Informatika dan Statistik Tahun 2020."
        ]
    ];

    public static function all()
    {
        return collect(self::$dokumen_publikasi) ;
    }

    public static function find($slug)
    {
        $publikasi = static::all();

        return $publikasi->firstWhere('slug', $slug);
    }
}
