<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;

class BukuController extends BaseController
{
    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    public function index()
    {
        $data = [
            'buku' => $this->bukuModel->findAll(),
        ];

        return view('buku/index', $data);
    }

    public function create()
    {
        return view('buku/create');
    }

    public function store()
    {
        $rules = [
            'judul'        => 'required',
            'penulis'      => 'required',
            'penerbit'     => 'required',
            'tahun_terbit' => 'required|numeric|greater_than[1800]|less_than[2024]',
        ];

        $messages = [
            'judul' => [
                'required' => 'Judul harus diisi.',
            ],
            'penulis' => [
                'required' => 'Penulis harus diisi.',
            ],
            'penerbit' => [
                'required' => 'Penerbit harus diisi.',
            ],
            'tahun_terbit' => [
                'required'     => 'Tahun terbit harus diisi.',
                'numeric'      => 'Tahun terbit harus berupa angka.',
                'greater_than' => 'Tahun terbit harus lebih besar dari 1800.',
                'less_than'    => 'Tahun terbit harus lebih kecil dari 2024.',
            ],
        ];

        if (! $this->validate($rules, $messages)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $this->bukuModel->insert([
            'judul'        => $this->request->getPost('judul'),
            'penulis'      => $this->request->getPost('penulis'),
            'penerbit'     => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        return redirect()->to('/buku')
            ->with('success', 'Data buku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $buku = $this->bukuModel->find($id);

        if (! $buku) {
            return redirect()->to('/buku')
                ->with('error', 'Data buku tidak ditemukan.');
        }

        return view('buku/edit', [
            'buku' => $buku,
        ]);
    }

    public function update($id)
    {
        $buku = $this->bukuModel->find($id);

        if (! $buku) {
            return redirect()->to('/buku')
                ->with('error', 'Data buku tidak ditemukan.');
        }

        $rules = [
            'judul'        => 'required',
            'penulis'      => 'required',
            'penerbit'     => 'required',
            'tahun_terbit' => 'required|numeric|greater_than[1800]|less_than[2024]',
        ];

        $messages = [
            'judul' => [
                'required' => 'Judul harus diisi.',
            ],
            'penulis' => [
                'required' => 'Penulis harus diisi.',
            ],
            'penerbit' => [
                'required' => 'Penerbit harus diisi.',
            ],
            'tahun_terbit' => [
                'required'     => 'Tahun terbit harus diisi.',
                'numeric'      => 'Tahun terbit harus berupa angka.',
                'greater_than' => 'Tahun terbit harus lebih besar dari 1800.',
                'less_than'    => 'Tahun terbit harus lebih kecil dari 2024.',
            ],
        ];

        if (! $this->validate($rules, $messages)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $this->bukuModel->update($id, [
            'judul'        => $this->request->getPost('judul'),
            'penulis'      => $this->request->getPost('penulis'),
            'penerbit'     => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        return redirect()->to('/buku')
            ->with('success', 'Data buku berhasil diperbarui.');
    }

    public function delete($id)
    {
        $buku = $this->bukuModel->find($id);

        if (! $buku) {
            return redirect()->to('/buku')
                ->with('error', 'Data buku tidak ditemukan.');
        }

        $this->bukuModel->delete($id);

        return redirect()->to('/buku')
            ->with('success', 'Data buku berhasil dihapus.');
    }
}