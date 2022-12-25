<?= $this->extend('include/app') ?>
<?= $this->section('contents') ?>
<div class="container-fluid pt-0 px-0">
    <div class="row  rounded  mx-0 d-flex justify-content-center py-4" style=" background-color:#f3f0f0 !important;">
        <div class="col-md-8">
            <h4 class="mb-4 text-center text-black"> Add Course Category </h4>
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
            <?php endif; ?>
            <form action="<?= base_url("course-category/add") ?>" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue">Category Name</label>
                            <input type="text" name="category_name" class="form-control form-white " required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue">Page Link</label>
                            <input type="text" name="page_link" class="form-control form-white " required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="" class="form-label text-blue">Parent Category (Optional)</label>
                            <select name="sub_category_id" class="form-control form-white" >
                                <option value="">Select Parent Category</option>   
                                <?php foreach($parent_category as $category): ?>
                                    <option value="<?= $category['id'] ?>"><?= $category['category_name'] ?></option>   
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-green">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
