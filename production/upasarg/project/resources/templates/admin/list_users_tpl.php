<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="row">
                    <div class="col-sm-10">
                        <h4>Users & Articles</h4>
                    </div>
                </div>
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">

                        <?=success_alert()?>
                        <?=error_alert()?>

                        <table id="custom-ordering" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Latest Post</th>
                                    <th>No. of Posts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data as $k => $v) {
                                ?>
                                <tr>
                                    <td><?=$v['id']?></td>
                                    <td><?=$v['user_username']?></td>
                                    <td><?=$v['title']?></td>
                                    <td><?=$v['TOT_CNT']?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#custom-ordering').DataTable( {
            "order": [[ 3, "desc" ]]
        } );
    } );
</script>
