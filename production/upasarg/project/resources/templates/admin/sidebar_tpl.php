
        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">
            <nav id="sidebar">
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <?php
                    $menu = adminMenu();
                    foreach($menu as $k => $v) {
                    ?>
                    <li id="menu_<?=$k?>" class="menu">
                        <a href="<?=$v['url']?>" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="<?=$v['class']?>"></i>
                                <span><?=$v['caption']?></span>
                            </div>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </nav>

        </div>
        <!--  END SIDEBAR  -->
