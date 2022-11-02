<?php

require_once dirname(__FILE__).'/global.php';

$objDb->insert("INSERT INTO articles (user_id, category, source_site, title, content, url_slug,
                    orig_url, img_path, datetime_text, author_credit, date_create, status)
                    VALUES
                    (11111111111, 'test', 'test', 'test', 'test', 'test', 'test', 'test',
                    'test', 'test', '" . date('Y-m-d H:i:s') . "', 'paused')");
                    
                    exit;
