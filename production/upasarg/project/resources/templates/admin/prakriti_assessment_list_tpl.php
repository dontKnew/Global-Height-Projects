<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="row">
                    <div class="col-sm-10">
                        <h4>Prakriti Assessment</h4>
                    </div>
                </div>
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">

                        <?=success_alert()?>
                        <?=error_alert()?>

                        <table id="zero-config" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>User</th>
                                    <th>Answers</th>
                                    <th>Created On</th>
                                    <th>Manage</th>
                                </tr>
                            </thead>
                            <tbody id="sortable">
                                <?php foreach($data as $k => $v) {
                                $c = 1;
                                ?>
                                <tr>
                                    <td><?=$c++?></td>
                                    <td>
                                        <?php
                                        if(!empty($v['user_username'])) {echo $v['user_username'];}else{echo $v['user_email'];}
                                        ?>
                                    </td>
                                    <td><?=$v['total_answer']?></td>
                                    <td><?=$v['date_create']?></td>
                                    <td>
                                        <a title="view" class="dropdown-item" href="<?=$routes['admin_prakriti']?>?uid=<?=$v['user_id']?>"><i class="fa fa-eye"></i></a>
                                    </td>
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
$( function() {
    $("#sortable").sortable({
        update: function (event, ui) {
            var data = $(this).sortable('serialize');
            var sorted = $( "#sortable" ).sortable( "serialize", { key: "sort" } );
            $.post( "<?=$routes['admin_create_news']?>",{ 'choices[]': sorted});

//             $.ajax({
//                 data: data,
//                 type: 'POST',
//                 url: '<?=$routes['admin_create_news']?>'
//             });
        }
    });
    $( "#sortable" ).disableSelection();
});
</script>
