<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <h4><?php if(isset($_GET['id'])) {echo 'Update';} else {echo 'Create';} ?> News</h4>
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">

                        <?=success_alert()?>
                        <?=error_alert()?>
                        <form method="POST" name="frm-login" class="account-form" data-parsley-validate="">

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
                                <a href="<?=$routes['admin_list_news']?>">
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
