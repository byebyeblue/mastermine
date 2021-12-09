<?= $this->extend('/layouts/template'); ?>
<!-- memanggil isi konten -->
<?= $this->section('content'); ?>


<div class="main-body">
    <div class="page-wrapper">
        <!-- Page body start -->
        <div class="page-body">
            <div class="row">
                <!--  sale analytics start -->
                <div class="col-xl-4 col-md-8">
                    <div class="card table-card">
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif ?>
                        <div class="card-header">
                            <h5>Recent Notes</h5>
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

                                        <?php
                                        foreach ($note as $i => $note) : ?>
                                            <tr>
                                                <th scope="row"><?= $i + 1; ?></th>
                                                <td><a href="/notes/detail/<?= $note['slug']; ?>"><?= $note['judul']; ?></a></td>
                                                <td><?= $note['kategori']; ?></td>
                                            </tr>
                                        <?php
                                        endforeach;
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card text-center order-card">
                        <section class="ftco-section">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-6 text-center mb-5">
                                        <h2 class="heading-section">My Calender</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content w-100">
                                            <div class="calendar-container">
                                                <div class="calendar">
                                                    <div class="year-header">
                                                        <span class="left-button fa fa-chevron-left" id="prev"> </span>
                                                        <span class="year" id="label"></span>
                                                        <span class="right-button fa fa-chevron-right" id="next"> </span>
                                                    </div>
                                                    <table class="months-table w-100">
                                                        <tbody>
                                                            <tr class="months-row">
                                                                <td class="month">Jan</td>
                                                                <td class="month">Feb</td>
                                                                <td class="month">Mar</td>
                                                                <td class="month">Apr</td>
                                                                <td class="month">May</td>
                                                                <td class="month">Jun</td>
                                                                <td class="month">Jul</td>
                                                                <td class="month">Aug</td>
                                                                <td class="month">Sep</td>
                                                                <td class="month">Oct</td>
                                                                <td class="month">Nov</td>
                                                                <td class="month">Dec</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <table class="days-table w-100">
                                                        <td class="day">Sun</td>
                                                        <td class="day">Mon</td>
                                                        <td class="day">Tue</td>
                                                        <td class="day">Wed</td>
                                                        <td class="day">Thu</td>
                                                        <td class="day">Fri</td>
                                                        <td class="day">Sat</td>
                                                    </table>
                                                    <div class="frame">
                                                        <table class="dates-table w-100">
                                                            <tbody class="tbody">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <button class="button" id="add-button">Add Event</button>
                                                </div>
                                            </div>
                                            <div class="events-container">
                                            </div>
                                            <div class="dialog" id="dialog">
                                                <h2 class="dialog-header"> Add New Event </h2>
                                                <form class="form" id="form">
                                                    <div class="form-container" align="center">
                                                        <label class="form-label" id="valueFromMyButton" for="name">Event name</label>
                                                        <input class="input" type="text" id="name" maxlength="36">
                                                        <!--  -->
                                                        <input type="button" value="Cancel" class="button" id="cancel-button">
                                                        <input type="button" value="OK" class="button button-white" id="ok-button">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!-- Page-body end -->
        </div>
    </div>
</div>


<?= $this->endSection(); ?>