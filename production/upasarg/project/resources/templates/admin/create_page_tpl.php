<?php
//     require_once $config['paths']['vendor'] . '/fckeditor/fckeditor.php';
// 	$editor = new FCKeditor('content');
// 	$editor->Width = '100%';
// 	$editor->Height = '600px';
// 	$editor->BasePath = $config['paths']['vendor'] . '/fckeditor/';
// 	$editor->ToolbarSet = 'Custom';
// 	if(!empty($db_detail['content'])) {
//         $editor->Value = $db_detail['content'];
// 	}
?>

<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <h4><?php if(isset($_GET['id'])) {echo 'Update';} else {echo 'Create';} ?> Page<?php if(isset($_GET['id'])) {echo " - {$db_detail['title']}";}?></h4>
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">

                        <?=success_alert()?>
                        <?=error_alert()?>
                        <form method="POST" name="frm-login" class="account-form" data-parsley-validate="">

                            <div class="row">
                                <div class="col col-lg-6 form-group">
                                    <label for="title">Title <span class="red">*</span></label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Page Title" id="title" value="<?=old('title')?>" required>
                                    <?=error('title')?>
                                </div>

                                <div class="col col-lg-6 form-group">
                                    <label for="title">Url Slug </label>
                                    <input type="text" class="form-control" name="url_slug" placeholder="URL slug" id="url_slug" value="<?=old('url_slug')?>">
                                    <small>Auto generated from title. Only use url friendly characters while updating this manually </small>
                                    <?=error('url_slug')?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col col-lg-6 form-group">
                                    <label for="id_parent_page">Parent <span class="red">*</span></label>
                                    <select class="form-control" name="id_parent_page" id="id_parent_page">
                                        <option value="">No Parent</option>
                                        <?php foreach($parent_pages as $parent) {
                                        $selected = (!empty($_REQUEST['id_parent_page']) && $_REQUEST['id_parent_page'] == $parent['id']) || (!empty($db_detail['id_parent_page']) && $db_detail['id_parent_page'] == $parent['id']) ? 'selected="selected"' : '';
                                        ?>
                                        <option value="<?=$parent['id']?>" <?=$selected?> ><?=$parent['title']?></option>
                                        <?php } ?>
                                    </select>
                                    <?=error('id_parent_page')?>
                                </div>
                                <div class="col col-lg-6 form-group">
                                    <label for="link_placement">Place link to  <span class="red">*</span></label>
                                    <select class="form-control" name="link_placement" id="link_placement">
                                        <?php foreach($placement as $key => $val) { ?>
                                        <option value="<?=$key?>" <?php if((!empty($_REQUEST['link_placement']) && $_REQUEST['link_placement'] == $key) || (!empty($db_detail['link_placement']) && $db_detail['link_placement'] == $key)) {echo 'selected="selected"';} ?>><?=$val?></option>
                                        <?php } ?>
                                    </select>
                                    <?=error('link_placement')?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col col-lg-6 form-group">
                                    <label for="has_child">Has submenu? <span class="red">*</span></label>
                                    <?php if((!empty($_REQUEST['has_child']) && $_REQUEST['has_child'] == 'yes') || (!empty($db_detail['has_child']) && $db_detail['has_child'] == 'yes')) { ?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="has_child" id="has_child_y" value="yes" checked="checked">
                                        <label class="form-check-label" for="has_child_y">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="has_child" id="has_child_n" value="no">
                                        <label class="form-check-label" for="has_child_n">No</label>
                                    </div>
                                    <?php } else { ?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="has_child" id="has_child_y" value="yes">
                                        <label class="form-check-label" for="has_child_y">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="has_child" id="has_child_n" value="no" checked="checked">
                                        <label class="form-check-label" for="has_child_n">No</label>
                                    </div>
                                    <?php } ?>
                                    <br>
                                    <small>Select yes if this menu has submenu</small>
                                    <?=error('has_child')?>
                                </div>

                                <div class="col col-lg-6 form-group">
                                    <label for="login_required">Login Required? <span class="red">*</span></label>
                                    <?php if((!empty($_REQUEST['login_required']) && $_REQUEST['login_required'] == 'yes') || (!empty($db_detail['login_required']) && $db_detail['login_required'] == 'yes')) { ?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="login_required" id="login_required_y" value="yes" checked="checked">
                                        <label class="form-check-label" for="login_required_y">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="login_required" id="login_required_n" value="no">
                                        <label class="form-check-label" for="login_required_n">No</label>
                                    </div>
                                    <?php } else { ?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="login_required" id="login_required_y" value="yes">
                                        <label class="form-check-label" for="login_required_y">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="login_required" id="login_required_n" value="no" checked="checked">
                                        <label class="form-check-label" for="login_required_n">No</label>
                                    </div>
                                    <?php } ?>
                                    <br>
                                    <small>Few pages should be accessible only after login f.e profile settings</small>
                                    <?=error('login_required')?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col col-lg-6 form-group">
                                    <label for="ordering">Ordering </label>
                                    <input type="text" class="form-control" name="ordering" placeholder="Enter link order" id="ordering" value="<?=old('ordering')?>">
                                    <small>Links will be displayed in the above ordering</small>
                                    <?=error('ordering')?>
                                </div>

                                <div class="col col-lg-6 form-group">
                                    <label for="meta_title">Meta Title </label>
                                    <input type="text" class="form-control" name="meta_title" placeholder="Meta Title" id="meta_title" value="<?=old('meta_title')?>">
                                    <?=error('meta_title')?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col col-lg-6 form-group">
                                    <label for="meta_keywords">Meta Keywords </label>
                                    <input type="text" class="form-control" name="meta_keywords" placeholder="Meta Keywords" id="meta_keywords" value="<?=old('meta_keywords')?>">
                                    <?=error('meta_keywords')?>
                                </div>

                                <div class="col col-lg-6 form-group">
                                    <label for="meta_description">Meta Description </label>
                                    <input type="text" class="form-control" name="meta_description" placeholder="Meta Description" id="meta_description" value="<?=old('meta_description')?>">
                                    <?=error('meta_description')?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="content">Content </label>
                                <?php /*$editor->Create();*/ ?>
                                <textarea id="content-editor" class="form-control" name="content" placeholder="Enter Page content"><?=old('content')?></textarea>
                                <?=error('content')?>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" name="submit" class="btn btn-success mt-2 mb-2">
                                    <?php if(isset($_GET['id'])) {echo 'Update';} else {echo 'Create';} ?>
                                </button>
                                <a href="<?=$routes['admin_list_pages']?>">
                                    <button type="button" name="cancel" class="btn btn-danger mt-2 mb-2">Cancel</button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.tiny.cloud/1/2go2zsha2nimjhk3zzl3rgsasj42ns14289ol09ob8mosc2h/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    $(document).ready(function() {
        $("#title").on('keyup', function(evt) {
            $.ajax({
                url: 'create_page.php?action=slugify&title=' + $(this).val(),
                success: function (data) {
                    $('#url_slug').val(data);
                },
                error: function (message) {
                    console.log('Error: ' + message);
                    response('Error: ' + message);
                }
            });
        });
    });

    var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

    tinymce.init({
    selector: 'textarea#content-editor',
    plugins: 'code print preview importcss tinydrive searchreplace autolink autosave save directionality visualblocks visualchars fullscreen image link unlink media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
    tinydrive_token_provider: 'URL_TO_YOUR_TOKEN_PROVIDER',
    tinydrive_dropbox_app_key: 'YOUR_DROPBOX_APP_KEY',
    tinydrive_google_drive_key: 'YOUR_GOOGLE_DRIVE_KEY',
    tinydrive_google_drive_client_id: 'YOUR_GOOGLE_DRIVE_CLIENT_ID',
    mobile: {
        plugins: 'print preview importcss tinydrive searchreplace autolink autosave save directionality visualblocks visualchars fullscreen image link unlink media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount textpattern noneditable help charmap quickbars emoticons'
    },
    menubar: 'file edit view insert format tools table tc help',
    toolbar: 'code | undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor casechange removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link unlink anchor codesample | ltr rtl | showcomments addcomment',
    autosave_ask_before_unload: true,
    autosave_interval: '30s',
    autosave_prefix: '{path}{query}-{id}-',
    autosave_restore_when_empty: false,
    autosave_retention: '2m',
    link_list: [
        { title: 'My page 1', value: 'https://www.tiny.cloud' },
        { title: 'My page 2', value: 'http://www.moxiecode.com' }
    ],
    image_list: [
        { title: 'My page 1', value: 'https://www.tiny.cloud' },
        { title: 'My page 2', value: 'http://www.moxiecode.com' }
    ],
    image_class_list: [
        { title: 'None', value: '' },
        { title: 'Some class', value: 'class-name' }
    ],
    importcss_append: true,
    templates: [
            { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
        { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
        { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
    ],
    template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
    template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
    height: 600,
    image_caption: true,
    quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
    noneditable_noneditable_class: 'mceNonEditable',
    toolbar_mode: 'sliding',
    content_style: '.mymention{ color: gray; }',
    contextmenu: 'link unlink image imagetools table',
    skin: useDarkMode ? 'oxide-dark' : 'oxide',
    content_css: useDarkMode ? 'dark' : 'default',
    /*
    The following settings require more configuration than shown here.
    For information on configuring the mentions plugin, see:
    https://www.tiny.cloud/docs/plugins/premium/mentions/.
    */
//     mentions_fetch: mentions_fetch,
//     mentions_menu_hover: mentions_menu_hover,
//     mentions_menu_complete: mentions_menu_complete,
//     mentions_select: mentions_select,
    element_format: 'html',
    encoding: 'html',
    images_upload_url: '<?=$routes['admin_base']?>/upload_data.php',
    images_upload_handler: function (blobInfo, success, failure) {
        var xhr, formData;
        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', '<?=$routes['admin_base']?>/upload_data.php');
        xhr.onload = function() {
            var json;
            if (xhr.status != 200) {
                failure('HTTP Error: ' + xhr.status);
                return;
            }
            json = JSON.parse(xhr.responseText);
            if (!json || typeof json.location != 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }
            success(json.location);
        };
        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());
        xhr.send(formData);
    },
    });

</script>
