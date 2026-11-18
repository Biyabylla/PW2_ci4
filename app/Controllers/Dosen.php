<?php
namespace App\Controllers;
use App\Models\DosenModel;
class Dosen extends BaseController
{
    protected $dosenModel;
    public function __construct()
    {
        $this->dosenModel = new DosenModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Data Dosen',
            'dosen' => $this->dosenModel->findAll()
        ];
        return view('dosen/index', $data);
    }
    public function create()
    {
        return view('dosen/create', [
            'title' => 'Tambah Dosen'
        ]);
    }
    public function store()
    {
        $data = [
            'nidn' => trim($this->request->getPost('nidn') ?? ''),
            'nama' => trim($this->request->getPost('nama') ?? ''),
            'email' => trim($this->request->getPost('email') ?? ''),
            'prodi' => trim($this->request->getPost('prodi') ?? '')
        ];

        if (in_array('', $data, true)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Semua kolom wajib diisi.');
        }

        if ($this->dosenModel->where('nidn', $data['nidn'])->first()) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'NIDN sudah terdaftar.');
        }
        $this->dosenModel->insert($data);
        return redirect()->to(site_url('dosen'))
            ->with('success', 'Data dosen berhasil ditambahkan.');
    }
    public function edit($id)
    {
        $dosen = $this->dosenModel->find($id);

        if (!$dosen) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(
                'Data dosen tidak ditemukan.'
            );
        }
        return view('dosen/edit', [
            'title' => 'Edit Dosen',
            'dosen' => $dosen
        ]);
    }
    public function update($id)
    {
        $dosen = $this->dosenModel->find($id);
        if (!$dosen) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(
                'Data dosen tidak ditemukan.'
            );
        }
        $data = [
            'nidn' => trim($this->request->getPost('nidn') ?? ''),
            'nama' => trim($this->request->getPost('nama') ?? ''),
            'email' => trim($this->request->getPost('email') ?? ''),
            'prodi' => trim($this->request->getPost('prodi') ?? '')
        ];
        if (in_array('', $data, true)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Semua kolom wajib diisi.');
        }
        $existing = $this->dosenModel
            ->where('nidn', $data['nidn'])
            ->first();
        if ($existing && $existing['id'] != $id) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'NIDN sudah digunakan dosen lain.');
        }
        $this->dosenModel->update($id, $data);
        return redirect()->to(site_url('dosen'))
            ->with('success', 'Data dosen berhasil diperbarui.');
    }
public function delete($id)
    {
        $dosen = $this->dosenModel->find($id);
        if (!$dosen) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(
                'Data dosen tidak ditemukan.'
            );
        }
        $this->dosenModel->delete($id);
        return redirect()->to(site_url('dosen'))
            ->with('success', 'Data dosen berhasil dihapus.');
    }
}
