<?php

exit;
require_once dirname(__FILE__) . '/config/common.php';
echo '<pre>';
    $headerMenu = $idMap = array();

    $pages = $objDb->select("SELECT * FROM pages
                            WHERE link_placement IN ('header', 'header-footer', 'all')
                            ORDER BY ordering");

//     foreach($pages as $page) {
//         if($page['id_parent_page'] == 0) {
//             $headerMenu[$page['id']] = array('url' => $page['url_slug'], 'title' => $page['title']);
//         }
//         else {
//             $headerMenu[$page['id_parent_page']]['child'][$page['id']] = array('url' => $page['url_slug'], 'title' => $page['title']);
//         }
//     }

    foreach($pages as $page) {
        if($page['id_parent_page'] == 0) {
            $headerMenu[$page['id']] = array('url' => $page['url_slug'], 'title' => $page['title']);
        }
        if($page['has_child']) {
            foreach($pages as $page_l1) {
                if($page['id'] == $page_l1['id_parent_page']) {
                    $headerMenu[$page['id']]['child'][$page_l1['id']] = array('url' => $page_l1['url_slug'], 'title' => $page_l1['title']);
                    if($page_l1['has_child']) {
                        foreach($pages as $page_l2) {
                            if($page_l1['id'] == $page_l2['id_parent_page']) {
                                $headerMenu[$page['id']]['child'][$page_l1['id']]['child'][$page_l2['id']] = array('url' => $page_l2['url_slug'], 'title' => $page_l2['title']);
                            }
                        }
                    }
                }
            }
        }
    }

    foreach($headerMenu as $key => $menu) {
        if(!isset($menu['url'])) {
            unset($headerMenu[$key]);
        }
    }

//     print_r($headerMenu);
    ?>
            <ul>
                <!-- Dynamic Header links -->
                <?php foreach($headerMenu as $menu) {
                $url = !empty($menu['url']) ? "{$routes['base']}/{$menu['url']}" : '#';
                echo '<li class="drop-down"><a href="'. $url .'">'. $menu['title'] . '</a>';
                if(isset($menu['child'])) {
                    echo '<ul>';
                    foreach($menu['child'] as $level1) {
                        $l1_url = !empty($level1['url']) ? "{$routes['base']}/{$level1['url']}" : '#';
                        echo '<li><a href="' . "{$routes['base']}/{$l1_url}" . '">' . $level1['title'] . '</a></li>';
                        if(isset($level1['child'])) {
                            echo '<ul>';
                            foreach($level1['child'] as $level2) {
                                echo '<li><a href="' . "{$routes['base']}/{$level2['url']}" . '">' . $level2['title'] . '</a></li>';
                            }
                            echo '</ul>';
                        }
                    }
                    echo '</ul>';
                }
                echo '</li>';
                } ?>
                <!-- END Dynamic Header links -->
                </ul>
