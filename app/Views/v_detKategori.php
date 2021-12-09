<?= $this->extend('/layouts/template'); ?>
<!-- memanggil isi konten -->
<?= $this->section('content'); ?>


<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-body start -->
        <div class="page-body">
            <div class="row">
                <!--  sale analytics start -->
                <?php
                foreach ($note as $i => $note) : ?>
                    <div class="col-xl-4 col-md-8">
                        <div class="card table-card">
                            <?php if (session()->getFlashdata('pesan')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->getFlashdata('pesan'); ?>
                                </div>
                            <?php endif ?>
                            <div class="card-header">
                                <h5><?= $note['kategori']; ?></h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                        <li><i class="fa fa-trash close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tbody>

                                            <tr>
                                                <td><a href="/notes/detail/<?= $note['slug']; ?>"><?= $note['judul']; ?></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>

                <!--  sale analytics end -->

            </div>
        </div>
    </div>
    <!-- Page body end -->
</div>


<?= $this->endSection(); ?>