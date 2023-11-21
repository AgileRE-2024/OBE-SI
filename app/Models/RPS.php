<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RPS extends Model
{
    protected $primaryKey = 'id_RPS';
    public $incrementing = TRUE;
    protected $table = 'RPS';
    protected $fillable = [
        'id_rps', 'nip','kodeMK', 'kodeRPS', 'tahunAjaran', 'semester', 'diperiksa_oleh','disiapkan_oleh','disetujui_oleh', 'dibuat_oleh','versi', 'penanggungJawab','dosenPengampu','detail_penilaian','deleted_at'
    ];

    protected static function booted()
    {
        static::creating(function ($rps) {
            // Ambil 6 karakter pertama dari kodeMK
            $kodeMK_part = substr($rps->kodeMK, 0, 6);

            // Ambil 2 digit terakhir tahunAjaran
            $tahunAjaran_part = substr($rps->tahunAjaran, -2);

            // Ambil 2 digit semester
            $semester_part = str_pad($rps->semester, 2, '0', STR_PAD_LEFT);

            // Gabungkan semua bagian untuk membuat id_rps
            $rps->id_rps = $kodeMK_part . $tahunAjaran_part . $semester_part;
        });
    }



    public function Mata_Kuliah()
    {
        return $this->belongsTo(Mata_Kuliah::class, 'kodeMK', 'kodeMK');
    }

    // public function User()
    // {
    //     return $this->belongsTo(User::class, 'kps', 'nip');
    // }

    // public function User1()
    // {
    //     return $this->belongsToMany(User::class, 'Detail_Peran_Dosen', 'id_RPS', 'nip');
    // }

    public function Minggu_RPS()
    {
        return $this->belongsToMany(Minggu_RPS::class, 'Detail_RPS', 'id_RPS', 'kodeMingguRPS');
    }

    public function Nilai_Mahasiswa()
    {
        return $this->hasMany(Nilai_Mahasiswa::class,'id_RPS', 'id_RPS');
    }

    public function Teknik_Penilaian()
    {
        return $this->belongsToMany(Teknik_Penilaian::class, 'Detail_RPS', 'id_RPS', 'kodePenilaian');
    }

    public function User(){
        return $this->belongsTo(User::class, 'nip','nip');
    }

    public function Kelas(){
        return $this->belongsTo(Kelas::class, 'kodeKelas','kodeKelas');
    }


}
