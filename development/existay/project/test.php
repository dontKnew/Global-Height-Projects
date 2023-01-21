<?= $this->extend('admin') ?>
<?= $this->section('main-contents') ?>

    <!--start main content-->
    <div class="container-fluid">

        <h4 class="page-title">
            <a href="<?= base_url("admin/apartment-service") ?>" class="btn btn-warning">
                <i class="la la-arrow-left"></i> Back
            </a>
        </h4>
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">EDIT Service</div>
                    </div>
                    <form action="<?= base_url("admin/apartment-service/edit/".$id) ?>" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <?php if (session()->has('msg')) : ?>
                                <div class="alert alert-success text-center" role="alert">
                                    <?= session()->getFlashdata("msg") ?>
                                </div>
                            <?php endif; ?>

                            <?php if (session()->has('err')) : ?>
                                <div class="alert alert-danger text-center" role="alert">
                                    <?= session()->getFlashdata("err") ?>
                                </div>
                            <?php endif; ?>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Sorting Order</label>
                                    <input type="number" name="sort_order" value="<?= $data["sort_order"] ?>" class="form-control input-solid" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Page  Title</label>
                                    <input type="text" name="page_title" value="<?= $data["page_title"] ?>"  class="form-control input-solid" required>
                                </div>
                                <div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Service Name</label>
                                            <input type="text" name="service_name" value="<?= $data["service_name"] ?>" class="form-control input-solid" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Banner Image</label>
                                            <input type="file" name="banner_image" value="<?= $data["banner_image"] ?>" class="form-control input-solid" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Image One</label>
                                            <input type="file" name="image_one" class="form-control input-solid" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Image One Title</label>
                                            <input type="text" name="image_one_title" value="<?= $data["image_one_title"] ?>" class="form-control input-solid" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Image One Link</label>
                                            <input type="url" name="image_one_link" value="<?= $data["image_one_link"] ?>" class="form-control input-solid" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Image Two</label>
                                            <input type="file" name="image_two" class="form-control input-solid" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Image Two Title</label>
                                            <input type="text" name="image_two_title" value="<?= $data["image_two_title"] ?>" class="form-control input-solid" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Image Two Link</label>
                                            <input type="url" name="image_two_link" value="<?= $data["image_two_link"] ?>" class="form-control input-solid" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label>Image Three</label>
                                            <input type="file" name="image_three" class="form-control input-solid" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Image Three Title</label>
                                            <input type="text" name="image_three_title" value="<?= $data["image_three_title"] ?>" class="form-control input-solid" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Image Three Link</label>
                                            <input type="url" name="image_three_link" value="<?= $data["image_three_link"] ?>" class="form-control input-solid" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Meta Keywords</label>
                                            <textarea name="meta_keywords"  class="form-control input-solid" ><?= $data["meta_keywords"] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label>Meta Description</label>
                                            <textarea name="meta_description" class="form-control input-solid" ><?= $data["meta_description"] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label>Service Description</label>
                                            <textarea name="service_descripiton" id="service_descripiton"  class="form-control input-solid" required><?= $data["service_descripiton"] ?></textarea>
                                        </div>
                                    </div>

                                    <div class="card-action text-center">
                                        <button type="submit" class="btn btn-outline-primary">Submit</button
                                    </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!--end main content-->
<?= $this->endSection('main-contents') ?>

<?= $this->section("style-link") ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css" integrity="sha512-wXEyXmtKft9mEiu8LTc3+3BQ95aYbvxgvzH4IzFHOwvGlA14B6zREXD4CRmUPx8r2Z1RVUOXS47bwjsotSlZkQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?= $this->endSection() ?>

<?= $this->section("script") ?>
    <script src="<?= base_url("backend/library/summernote/jquery-3.4.1.slim.min.js") ?>"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js" integrity="sha512-98e5nQTE7pmtZ3xoD5GCVKafmziXDT5WINC91MugFzF57zzBnmvGQl1N70cvdyBSWxjCOC55gq9Zn76MUgtEMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function(){
            $('#side_description').summernote({
                tabsize: 2,
                height: 400,
                codemirror: { // codemirror options
                    theme: 'monokai'
                }
            });
            $('#apartment_description').summernote({
                tabsize: 2,
                height: 400,
                codemirror: { // codemirror options
                    theme: 'monokai'
                }
            });
        });
    </script>
<?= $this->endSection() ?>