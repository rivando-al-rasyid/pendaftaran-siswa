<?php

namespace App\Http\Controllers;

use App\Models\Ortu;
use App\Models\Pelajar;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('registration.form');
    }

    // Menghandle pengiriman formulir
    public function register(Request $request)
    {
        // Validasi data formulir
        $validatedData = $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'nomor_telepon_siswa' => 'required|string|max:20',
            'agama_siswa' => 'required|string|max:255',
            'tanggal_lahir_siswa' => 'required|date',
            'tempat_lahir_siswa' => 'required|string|max:255',
            'sekolah_sekarang' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'nisn' => 'required|string|max:20|unique:students',
            'nama_ayah' => 'required|string|max:255',
            'pekerjaan_ayah' => 'required|string|max:255',
            'penghasilan_ayah' => 'required|numeric',
            'nama_ibu' => 'required|string|max:255',
            'pekerjaan_ibu' => 'required|string|max:255',
            'penghasilan_ibu' => 'required|numeric',
            'nomor_telepon_orang_tua' => 'required|string|max:20',
        ]);

        // Membuat catatan baru untuk Siswa
        $pelajar = Pelajar::create([
            'nama' => $validatedData['nama_siswa'],
            'nomor_telepon' => $validatedData['nomor_telepon_siswa'],
            'agama' => $validatedData['agama_siswa'],
            'tanggal_lahir' => $validatedData['tanggal_lahir_siswa'],
            'tempat_lahir' => $validatedData['tempat_lahir_siswa'],
            'sekolah_sekarang' => $validatedData['sekolah_sekarang'],
            'alamat' => $validatedData['alamat'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'nisn' => $validatedData['nisn'],
        ]);

        // Membuat catatan baru untuk Orang Tua
        $orangTua = Ortu::create([
            'nama_ayah' => $validatedData['nama_ayah'],
            'pekerjaan_ayah' => $validatedData['pekerjaan_ayah'],
            'penghasilan_ayah' => $validatedData['penghasilan_ayah'],
            'nama_ibu' => $validatedData['nama_ibu'],
            'pekerjaan_ibu' => $validatedData['pekerjaan_ibu'],
            'penghasilan_ibu' => $validatedData['penghasilan_ibu'],
            'nomor_telepon' => $validatedData['nomor_telepon_orang_tua'],
        ]);

        // Anda dapat menambahkan logika tambahan di sini, seperti mengirim email konfirmasi

        // Redirect ke halaman sukses atau tempat lain sesuai keinginan Anda
        return redirect('/registrasi/sukses')->with('success', 'Pendaftaran berhasil!');
    }
}
