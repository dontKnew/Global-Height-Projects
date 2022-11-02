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
                        <form name="write_article" id="write_article" action="" method="post">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="blogentry_title" id="blogentry_title" placeholder="" class="input form-control" size="50" tabindex="1" value="<?=old('blogentry_title')?>" required />
                                <?=error('blogentry_title')?>
                            </div>

                            <div class="form-group">
                                <label for="content">Content </label>
                                <?php /*$editor->Create();*/ ?>
                                <textarea id="blogentry_body" class="form-control" tabindex="2" name="blogentry_body" placeholder="Enter article content"><?=old('blogentry_body')?></textarea>
                                <?=error('blogentry_body')?>
                            </div>

                            <div class="form-group">
                                <label for="title">Validation Code</label>
                                <img src="https://xklsv.me/captcha.php?rand=<?=rand()?>" id='captchaimg'><br>
                                <input type="text" name="captcha_code" id="captcha_code" placeholder="" class="input form-control" tabindex="3" value="" required />
                                <br>
                                Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.
                                <?=error('captcha_code')?>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" name="submit" class="btn btn-success mt-2 mb-2">
                                    <?php if(!empty($blog_detail['blogentry_id'])) {echo 'Update';} else {echo 'Create';} ?>
                                </button>
                                <?php if(!empty($blog_detail['blogentry_id'])) { ?>
                                <input type="hidden" value="<?=$blog_detail['blogentry_id']?>" name="bid"/>
                                <?php } ?>
                                <a href="<?=$routes['mypage']?>">
                                    <button type="button" name="cancel" class="btn btn-danger mt-2 mb-2">Cancel</button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://cdn.tiny.cloud/1/2go2zsha2nimjhk3zzl3rgsasj42ns14289ol09ob8mosc2h/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

    tinymce.init({
    selector: 'textarea#blogentry_body',
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
    encoding: 'html'
    });

</script>
