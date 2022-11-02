<?php

require_once dirname(__FILE__) . '/../config/common.php';

adminAuthWall();

$data = $objDb->select("SELECT A.id, A.user_id, A.title, u.user_id, u.user_username
                            FROM articles A
                            INNER JOIN se_users u ON u.user_id = A.user_id
                            WHERE A.id IN (SELECT MAX(id) FROM articles GROUP BY user_id)");

foreach($data as $k => $res) {
    $cnt = $objDb->select("SELECT COUNT(id) AS count FROM articles
                            WHERE user_id = " . $res['user_id']);
    $data[$k]['TOT_CNT'] = !empty($cnt[0]['count']) ? $cnt[0]['count'] : 0;
}
// echo '<pre>';print_r($data);exit;
$contentFile = 'list_users_tpl.php';

require_once $config['paths']['config'] . '/admin_exit.php';

?>
