<?php $this->load->view('struktur/header'); ?>



<div class="jumbotron">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="text">
                    News
                </div>
            </div>
        </div>
    </div>
</div>



<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="news-title">
                                            <h2><?= $data->title; ?></h2>
                                        </div>
                                        <div class="news-cats">
                                            <ul class="list-unstyled list-inline mb-1">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-folder-o text-danger"></i>
                                                    <!-- <a href="#"><small><?= $data->create_date; ?></small></a> -->
                                                </li>




                                            </ul>
                                        </div>
                                        <hr>
                                        <div class="news-image">
                                            <img src="<?= base_url('assets/dash/files/news/' . $data->image_thumbnail) ?>" width="100%">
                                            <p class="text-muted " ></p>
                                        </div>
                                        <div class="news-content">
                                            <?= $data->description; ?>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Highlight</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group">
                                <?php
                $news = $this->db->query("SELECT * FROM pam_news order by news_id DESC limit 8")->result();

                foreach ($news as $hi) { ?>

                                <a href="<?= base_url($hi->url); ?>"
                                    class="list-group-item list-group-item-action"><?= $hi->title ?></a>

                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>





<!-- FOOTER PHP -->
<?php $this->load->view('struktur/footer'); ?>