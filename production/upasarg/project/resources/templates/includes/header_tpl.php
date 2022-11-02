    <?php
//     if($contentFile == 'index_tpl.php') {
    if($contentFile != '') {
    // Menu on Index page will be on the bottom left corner
    ?>
    <header id="header" class="fixed-top d-flex align-items-center header-transparent" style="margin-left:30px">
        <div class="d-flex">

        <nav class="nav-menu d-none d-lg-block nav-bg">
            <ul>
                <li class="nav-item-bg"><a style="font-weight:bold" class="pt12 white" href="<?=$routes['base']?>">Home</a></li>
                <!-- Dynamic Header links -->
                <?php
                $font_class = $contentFile == 'index_tpl.php' ? 'white' : '';
                foreach($headerMenu as $menu) {
                $url = !empty($menu['url']) ? "{$routes['base']}/{$menu['url']}" : '#';
                $class = isset($menu['child']) ? 'drop-down' : '';
                echo '<li class="nav-item-bg ' . $class . '"><a style="font-weight:bold;display:inline-block" class="pt12 ' . $font_class . '" href="'. $url .'">'. $menu['title'] . '</a><span>&nbsp;</span>';
                if(isset($menu['child'])) {
                    echo '<ul>';
                    foreach($menu['child'] as $level1) {
                        $l1_url = !empty($level1['url']) ? "{$routes['base']}/{$level1['url']}" : '#';
                        $l1_class = isset($level1['child']) ? 'drop-down' : '';
                        echo '<li class="' . $l1_class . '"><a href="' . "{$l1_url}" . '">' . $level1['title'] . '</a>';
                        if(isset($level1['child'])) {
                            echo '<ul>';
                            foreach($level1['child'] as $level2) {
                                echo '<li><a href="' . "{$routes['base']}/{$level2['url']}" . '">' . $level2['title'] . '</a></li>';
                            }
                            echo '</ul>';
                        }
                        echo '</li>';
                    }
                    echo '</ul>';
                }
                echo '</li>';
                } ?>
                
                <li class="nav-item-bg d-lg-none"><a style="font-weight:bold" class="pt12 white" href="<?=$routes['contact_us']?>">Contact</a></li>

            </ul>
        </nav><!-- .nav-menu -->

        <div class="logo mr-auto" style="margin-top:40px">
<!--         <h1 class="text-light"><a href="<?=$routes['base']?>"><?=$config['site_settings']['brand_name']?></a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a class="bottom-logo" href="<?=$routes['base']?>">
                <img src="<?=$routes['base']?>/assets/img/transparent-logo-2.webp" alt="<?=$config['site_settings']['brand_name']?>" class="img-fluid">
            </a>
        </div>

        </div>
    </header>
    <?php
    } else {
    // Menu on Non Index pages will be on the top left corner
    ?>
<style>
.nav-menu, .nav-menu * {
  margin: auto 0;
/*   padding: 8px 0 0 5px; */
/*   padding: 3px 0 0 5px; */
  list-style: none;
  background: #fff;
}

.nav-menu > ul > li {
  position: relative;
  white-space: nowrap;
  float: left;
}

.nav-menu > ul > li + li {
  padding-left: 20px;
}

.nav-menu a {
  display: block;
  position: relative;
  color: #65534c;
  padding: 0px 0 15px 0;
  transition: 0.3s;
  font-size: 15px;
  font-family: "Open Sans", sans-serif;
/*   text-transform: uppercase; */
  font-weight: 600;
}

.nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
  color: #f03c02;
  text-decoration: none;
}

.nav-menu .drop-down ul {
  display: block;
  position: absolute;
  left: 20px;
  top: calc(100% + 30px);
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  padding: 10px 0;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: ease all 0.3s;
}

.nav-menu .drop-down:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.nav-menu .drop-down li {
  min-width: 180px;
  position: relative;
}

.nav-menu .drop-down ul a {
  padding: 3px 20px;
  font-size: 13px;
  font-weight: 500;
  text-transform: none;
  color: #581601;
}

.nav-menu .drop-down ul a:hover, .nav-menu .drop-down ul .active > a, .nav-menu .drop-down ul li:hover > a {
  color: #f03c02;
}

/*.nav-menu .drop-down > a:after {
  content: "\ea99";
  font-family: IcoFont;
  padding-left: 5px;
}*/

.nav-menu .drop-down .drop-down ul {
  top: 0;
  left: calc(100% - 30px);
}

.nav-menu .drop-down .drop-down:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
}

.nav-menu .drop-down .drop-down > a {
  padding-right: 35px;
}

.nav-menu .drop-down .drop-down > span:after {
  content: "\eaa0";
  font-family: IcoFont;
  position: absolute;
  right: 15px;
}

</style>

    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex">

        <div class="logo mr-auto">
<!--         <h1 class="text-light"><a href="<?=$routes['base']?>"><?=$config['site_settings']['brand_name']?></a></h1> -->
            <a href="<?=$routes['base']?>">
                <img src="<?=$routes['base']?>/assets/img/upasarg-transparent-logo.png" alt="<?=$config['site_settings']['brand_name']?>" class="img-fluid">
            </a>
        </div>

        <nav class="nav-menu d-none d-lg-block" style="border-radius: 3px;">
            <ul>
                <li><a class="pt12 white" href="<?=$routes['base']?>">Home</a></li>
                <!-- Dynamic Header links -->
                <?php
                $font_class = $contentFile == 'index_tpl.php' ? 'white' : '';
                foreach($headerMenu as $menu) {
                $url = !empty($menu['url']) ? "{$routes['base']}/{$menu['url']}" : '#';
                $class = isset($menu['child']) ? 'drop-down' : '';
                echo '<li class="' . $class . '"><a class="pt12 ' . $font_class . '" href="'. $url .'">'. $menu['title'] . '</a><span>&nbsp;</span>';
                if(isset($menu['child'])) {
                    echo '<ul>';
                    foreach($menu['child'] as $level1) {
                        $l1_url = !empty($level1['url']) ? "{$routes['base']}/{$level1['url']}" : '#';
                        $l1_class = isset($level1['child']) ? 'drop-down' : '';
                        echo '<li class="' . $l1_class . '"><a href="' . "{$l1_url}" . '">' . $level1['title'] . '</a>';
                        if(isset($level1['child'])) {
                            echo '<ul>';
                            foreach($level1['child'] as $level2) {
                                echo '<li><a href="' . "{$routes['base']}/{$level2['url']}" . '">' . $level2['title'] . '</a></li>';
                            }
                            echo '</ul>';
                        }
                        echo '</li>';
                    }
                    echo '</ul>';
                }
                echo '</li>';
                } ?>

<!--             <li><a class="pt12 <?=$font_class?>" href="<?=$routes['base']?>/contact-us">Contact Us</a></li> -->
            </ul>
        </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->
    <?php
    }
    ?>
