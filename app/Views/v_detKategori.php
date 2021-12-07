<?= $this->extend('/layouts/template'); ?>
<!-- memanggil isi konten -->
<?= $this->section('content'); ?>


<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-body start -->
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
                            <h5>Note's Detail sorted by Category</h5>
                        </div>
                        <div class="container ">
                            <div class="row">
                                <?php
                                $note_id = 0;
                                foreach ($note as $note) :
                                    $note_id++;
                                ?>
                                    <div class="col-lg-8">
                                        <h1 class="mb-4">
                                            <?= $note['judul']; ?>
                                        </h1>
                                        <div class="post-meta d-flex mb-5">
                                            <div class="vcard ">
                                                <span class="date-read">Created at: <?= $note['created_at']; ?> <span class="mx-1">&bullet;
                                                    </span>
                                                    <span class="date-read">Updated at: <?= $note['updated_at']; ?> <span class="mx-1">&bullet;
                                                        </span>
                                            </div>
                                        </div>

                                    </div>
                                <?php
                                endforeach;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>


                <!--  sale analytics end -->

            </div>
        </div>
    </div>
    <!-- Page body end -->
</div>


<?= $this->endSection(); ?>