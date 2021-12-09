<?= $this->extend('/layouts/template'); ?>
<!-- memanggil isi konten -->
<?= $this->section('content'); ?>


<div class="main-body">
    <div class="page-wrapper">
        <!-- Page body start -->
        <div class="page-body">
            <div class="row">
                <!--  sale analytics start -->
                <div class="col-sm-12">
                    <div class="card table-card">
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif ?>
                        <div class="card-header">
                            <h5>Note's Detail</h5>
                            <div class="card-header-right">
                                <a href="/notes/edit/<?= $note['slug'] ?>"><i class="fa fa-pencil"></i> </a>

                                <a href="/notes/delete/<?= $note['slug']; ?>"> <i class="fa fa-trash"></i> </a>
                            </div>
                        </div>
                        <div class="container ">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h1 class="mb-4">
                                        <?= $note['judul']; ?>
                                    </h1>
                                    <div class="post-meta d-flex mb-5">
                                        <!-- <div class="bio-pic mr-3">
                                            <img src="images/person_1.jpg" alt="Image" class="img-fluidid">
                                        </div> -->
                                        <div class="vcard ">
                                            <span class="date-read">Created at: <?= $note['created_at']; ?> <span class="mx-1">&bullet;
                                                </span>
                                                <span class="date-read">Updated at: <?= $note['updated_at']; ?> <span class="mx-1">
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <?= $note['deskripsi']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  sale analytics end -->
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>