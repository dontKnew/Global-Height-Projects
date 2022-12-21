
<?= $this->extend('include/app') ?>

<?= $this->section('contents') ?>

<div class="container-fluid pt-0 px-0">
    <div class="vh-100 bg-grey-l text-center rounded p-4" style=" background-color:#f3f0f0 !important;">
        <div class="d-flex align-items-center justify-content-center mb-4">
            <h4 class="mb-0 text-black">Course Category Table Table</h4>
        </div>
        <?php if (session()->getFlashdata('msg')) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>
        <div class="table-responsive" id="shipmentSearchData">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                <tr class="text-blue">
                    <th scope="col" class="btn-blue">Category Id</th>
                    <th scope="col" class="btn-blue">Category Name</th>
                    <th scope="col" class="btn-blue">Parent Id</th>
                    <th scope="col" class="btn-blue">Created at</th>
                    <th scope="col" class="btn-blue">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($data as $value){ ?>
                    <tr class="text-dark bg-white">
                        <td><?= ucwords($value['id']); ?></td>
                        <td><?= ucwords($value['category_name']); ?></td>
                        <td><?= $value['sub_category_id']; ?></td>
                        <td><?= date("D d-m-Y", srtotime($value['created_at'])); ?></td>
                        <td>
                            <a href="<?= base_url("course-category/update".$value['id'])?>"  class="btn btn-md-square btn-green">Update</a>
                            <a href="<?= base_url("course-category/update".$value['id'])?>"   class="btn btn-md-square btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
