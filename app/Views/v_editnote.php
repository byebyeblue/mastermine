<?= $this->extend('/layouts/template'); ?>
<!-- memanggil isi konten -->
<?= $this->section('content'); ?>


<div class="main-body">
    <div class="page-wrapper">
        <!-- Page body start -->
        <div class="row">
            <div class="col-sm-12">
                <!-- Basic Form Inputs card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Note</h5>
                    </div>
                    <div class="card-block">

                        <form action="/notes/update/<?= $note['note_id']; ?>" method="POST">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="slug" value="<?= $note['slug']; ?>">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; //if-else dlm satu baris
                                                                            ?>" placeholder="Type title note here..." id="judul" name="judul" value="<?= $note['judul']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= ($validation->hasError('kategori')) ? 'is-invalid' : ''; //if-else dlm satu baris
                                                                            ?>" placeholder="Type category note here..." id="kategori" name="kategori" value="<?= $note['kategori']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea style="width: 755px; height: 250px;" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; //if-else dlm satu baris
                                                                                                        ?>" placeholder="Type your description note here..." id="deskripsi" name="deskripsi"><?= $note['deskripsi']; ?></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right" style="position: right;"> Update </button>
                        </form>
                    </div>
                </div>
                <!-- Basic Form Inputs card end -->
            </div>
        </div>
    </div>
    <!-- Page body end -->
</div>


<?= $this->endSection(); ?>