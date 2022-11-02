<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="row">
                    <div class="col-sm-10">
                        <h4>Newsletter Subscriber</h4>
                    </div>
                </div>
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">

                        <?=success_alert()?>
                        <?=error_alert()?>

                        <table id="zero-config" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Created On</th>
                                    <th>Updated On</th>
                                    <th>Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data as $k => $v) {
                                    $style = $v['status'] == 'unverified' ? 'background-color:#F9D5D5' : '';
                                ?>
                                <tr style="<?=$style?>">
                                    <td><?=$v['id']?></td>
                                    <td><?=$v['email']?></td>
                                    <td>
                                        <?=$v['status']?>
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink-<?=$k?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink-<?=$k?>">
                                            <?php
                                            foreach($status as $s) { 
                                            if($s == $v['status']) {
                                                continue;
                                            }
                                            ?>
                                            <a class="dropdown-item" href="<?=$routes['admin_list_subscriber']?>?id=<?=$v['id']?>&status=<?=$s?>" onclick="return confirm('Are you sure to change the status?')">
                                                <?=ucwords($s)?>
                                            </a>
                                            <?php } ?>
                                        </div>
                                    </td>
                                    <td><?=$v['date_create']?></td>
                                    <td><?=$v['date_modify']?></td>
                                    <td>
                                        <a title="delete" class="dropdown-item" href="<?=$routes['admin_list_subscriber']?>?id=<?=$v['id']?>&action=delete" onclick="return confirm('Are you sure to proceed?')">
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
</div>
