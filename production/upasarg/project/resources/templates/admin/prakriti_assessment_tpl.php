<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="row">
                    <div class="col-sm-10">
                        <?php
                        if(count($answers) > 0) {
                        $str = '';
                        foreach($ans_attr as $k => $v) {
                            $str .= $prakriti[$k] . ', ';
                        }
                        $str = trim($str, ', ');
                        ?>
                        <?php } ?>
                        <h4>Prakriti Assessment for User ID : <?=$_GET['uid']?> (<?php if(!empty($user_info[0]['user_username']))echo $user_info[0]['user_username'];else echo $user_info[0]['user_email']?>) (Body type : <?=$str?>)</h4>
                    </div>
                </div>
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">

                        <?php
                            $total_answers = 0;
                            foreach($questions as $q) {
                        ?>
                        <div class="mb-4">
                        <p><b><?=$q['question']?></b></p>
                        <?php
                        $ans = 'Not Answered';
                        for($i=1;$i<=8;$i++) {
                            if(empty($q['option_' . $i])) {
                                continue;
                            }
                            if(!empty($answers[$q['id']]['option_' . $i])) {
                                $ans = $q['option_' . $i];
                                $total_answers++;
                            }
                        }
                        echo "<p>{$ans}</p>";?>
                        </div>
                        <?php } ?>
                        <h4>Total Questions Answered : <?=$total_answers?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
