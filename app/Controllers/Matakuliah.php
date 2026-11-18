<?php
namespace App\Controllers;
use App\Models\MatakuliahModel;
class Matakuliah extends BaseController
{
    protected $matakuliahModel;
    public function __construct()
    {
        $this->matakuliahModel = new MatakuliahModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Data Mata Kuliah',
            'matakuliah' => $this->matakuliahModel->findAll()
        ];
        return view('matakuliah/index', $data);
    }
    public function create()
    {
        return view('matakuliah/create', [
            'title' => 'Tambah Mata Kuliah'
        ]);
    }
    public function store()
    {
        $data = [
            'kode_mk' => trim($this->request->getPost('kode_mk') ?? ''),
            'nama_mk' => trim($this->request->getPost('nama_mk') ?? ''),
            'sks' => $this->request->getPost('sks'),
            'semester' => $this->request->getPost('semester')
        ];

        if (
            $data['kode_mk'] === '' ||
            $data['nama_mk'] === '' ||
            !is_numeric($data['sks']) ||
            !is_numeric($data['semester']) ||
            $data['sks'] < 1 || $data['sks'] > 6 ||
            $data['semester'] < 1 || $data['semester'] > 8
        ) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Periksa kembali data. Semua kolom wajib diisi, SKS 1–6, dan semester 1–8.');
        }
        if ($this->matakuliahModel->where('kode_mk', $data['kode_mk'])->first()) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Kode mata kuliah sudah terdaftar.');
        }

        $data['sks'] = (int) $data['sks'];
        $data['semester'] = (int) $data['semester'];
        $this->matakuliahModel->insert($data);
        return redirect()->to(site_url('matakuliah'))
            ->with('success', 'Data mata kuliah berhasil ditambahkan.');
    }
    public function edit($id)
    {
        $matakuliah = $this->matakuliahModel->find($id);
        if (!$matakuliah) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(
                'Data mata kuliah tidak ditemukan.'
            );
        }
        return view('matakuliah/edit', [
            'title' => 'Edit Mata Kuliah',
            'matakuliah' => $matakuliah
        ]);
    }
    public function update($id)
    {
        $matakuliah = $this->matakuliahModel->find($id);
        if (!$matakuliah) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(
                'Data mata kuliah tidak ditemukan.'
            );
        }
        $data = [
            'kode_mk' => trim($this->request->getPost('kode_mk') ?? ''),
            'nama_mk' => trim($this->request->getPost('nama_mk') ?? ''),
            'sks' => $this->request->getPost('sks'),
            'semester' => $this->request->getPost('semester')
        ];
        if (
            $data['kode_mk'] === '' ||
            $data['nama_mk'] === '' ||
            !is_numeric($data['sks']) ||
            !is_numeric($data['semester']) ||
            $data['sks'] < 1 || $data['sks'] > 6 ||
            $data['semester'] < 1 || $data['semester'] > 8
        ) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Periksa kembali data. Semua kolom wajib diisi, SKS 1–6, dan semester 1–8.');
        }
        $existing = $this->matakuliahModel
            ->where('kode_mk', $data['kode_mk'])
            ->first();

        if ($existing && $existing['id'] != $id) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Kode mata kuliah sudah digunakan.');
        }

        $data['sks'] = (int) $data['sks'];
        $data['semester'] = (int) $data['semester'];

        $this->matakuliahModel->update($id, $data);

        return redirect()->to(site_url('matakuliah'))
            ->with('success', 'Data mata kuliah berhasil diperbarui.');
    }
    public function delete($id)
    {
        $matakuliah = $this->matakuliahModel->find($id);

        if (!$matakuliah) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(
                'Data mata kuliah tidak ditemukan.'
            );
        }
        $this->matakuliahModel->delete($id);
        return redirect()->to(site_url('matakuliah'))
            ->with('success', 'Data mata kuliah berhasil dihapus.');
    }
}