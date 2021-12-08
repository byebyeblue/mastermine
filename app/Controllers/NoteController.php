<?php

namespace App\Controllers;

use App\Models\NoteModel;

class NoteController extends BaseController
{
    protected $NoteModel;
    public function __construct()
    {
        $this->NoteModel = new NoteModel(); //nah ini contruct utk usermodel
    }
    public function index()
    {
        $note = $this->NoteModel->findAll();
        $data = [
            'title' => "Dashboard",
            'note' => $note
        ];
        return view('v_home', $data);
    }

    public function create()
    {
        session();
        $data = [
            'validation' => \Config\Services::validation(),
            'title' => 'Create Note'
        ];
        return view('v_tambahnote', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[note.judul]',
                'errors' => [
                    'required' => '{field} catatan harus diisi!',
                    'is_unique' => '{field} catatan sudah terdaftar!'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} catatan harus diisi!'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} catatan harus diisi!'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/notes/create')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->NoteModel->save([
            'judul' => $this->request->getVar('judul'),
            //getPost ini utk ambil data dari item POST yng ada di form v_blog
            'slug' => $slug,
            'kategori' => $this->request->getVar('kategori'),
            'deskripsi' => $this->request->getVar('deskripsi')
        ]);

        session()->setFlashdata('pesan', 'Catatan berhasil ditambahkan.');
        return redirect()->to('/');
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Note',
            'note' => $this->NoteModel->getNote($slug)
        ];

        //jika note tidak ada
        if (empty($data['note'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Catatan ' . $slug . ' tidak ditemukan.');
        }
        return view('v_detail', $data);
    }

    public function category()
    {

        $data = [
            'title' => 'Detail Kategori Note',
            'note' => $this->NoteModel->getNotes()
        ];
        return view('v_detKategori', $data);
    }

    public function editnote($slug)
    {
        session();
        $data = [
            'title' => "Edit Note",
            'validation' => \Config\Services::validation(),
            'note' =>  $this->NoteModel->getNote($slug)
        ];
        return view('v_editnote', $data);
    }

    public function update($note_id)
    {
        //cek judul
        $noteLama = $this->NoteModel->getNote($this->request->getVar('slug'));
        if ($noteLama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[note.judul]';
        }

        //validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => '{field} catatan harus diisi!',
                    'is_unique' => '{field} catatan sudah terdaftar!'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} catatan harus diisi!'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} catatan harus diisi!'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/blogs/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->NoteModel->save([
            'note_id' => $note_id,
            'judul' => $this->request->getVar('judul'),
            //getPost ini utk ambil data dari item POST yng ada di form v_blog
            'slug' => $slug,
            'kategori' => $this->request->getVar('kategori'),
            'deskripsi' => $this->request->getVar('deskripsi')
        ]);

        session()->setFlashdata('pesan', 'Catatan berhasil diubah.');
        return redirect()->to("/");
    }

    public function delete($slug)
    {
        $NoteModel = model('NoteModel');
        $NoteModel->where(['slug' => $slug])->delete();
        session()->setFlashdata('pesan', 'Catatan berhasil dihapus.');
        return redirect()->to('/');
    }
}
