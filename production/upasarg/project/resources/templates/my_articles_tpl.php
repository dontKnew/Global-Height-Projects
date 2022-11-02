<section class="contact-section">
    <div class="container">
        <div class="page-title">
            <h2>My Account</h2>
        </div>
        <div class="row">
            <?php require_once $config['paths']['templates'] . '/includes/sidebar_tpl.php'; ?>
            <div class="col-sm-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <?=success_alert()?>
                        <?=error_alert()?>
                        <table id="zero-config" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>View</th>
                                    <th>Created On</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($articles as $k => $v) {
                            ?>
                            <tr style="<?=$style?>">
                                <td><?=$v['blogentry_id']?></td>
                                <td><?=$v['blogentry_title']?></td>
                                <td><?=$v['blogentry_views']?></td>
                                <td><?=date("F jS Y", $v['blogentry_date'])?></td>
                                <td>
                                    <a title="edit" class="dropdown-item" href="<?=$routes['write_article']?>?bid=<?=$v['blogentry_id']?>">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    </a>
                                    <a title="delete" class="dropdown-item" href="<?=$routes['write_article']?>?bid=<?=$v['blogentry_id']?>&action=delete" onclick="return confirm('Are you sure to proceed?')">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path><line x1="18" y1="9" x2="12" y2="15"></line><line x1="12" y1="9" x2="18" y2="15"></line></svg>
                                    </a>
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
</section>

<script src="<?=$routes['admin_assets']?>/plugins/table/datatable/datatables.js"></script>
<script src="<?=$routes['admin_assets']?>/js/admin.js"></script>
