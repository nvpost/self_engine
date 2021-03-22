<?php
$rootCats = checkCache('catsAndCounts', 0);
//контент
$menu = checkMenuCache(0);
//deb($menu);

function doFirstLevel($menu_item){
    global $home_url;
    $li_class="";
    if(isset($menu_item['sub_menu'])){
        $li_class = " class='dropdown'";
    }
    $li_item = "<li $li_class>";
    $cat_link = str_replace([' ', '.'], ['_', ''], $menu_item['label']);
    $li_item .= "<a href='".$home_url."category/".$cat_link."'>".$menu_item['label'];
    if($li_class){
        $li_item .= "<i class='fa fa-angle-down' aria-hidden='true'></i>";
    }
    $li_item .= "</a>";
        if($li_class){
            $li_item .= "<ul>";
            foreach ($menu_item['sub_menu'] as $item){
                $li_item .= doFirstLevel($item);
                }
            $li_item .="</ul>";
        }
    $li_item .= "</li>";

    return $li_item;
}


?>
<header class="header">
		<a href="#" class="nav-btn">
			<span></span>
			<span></span>
			<span></span>
		</a>
		<div class="header-menu">
			<div class="container">
				<a href="index.html" class="logo"><img src="assets/img/logo.svg" alt="logo"></a>
				<nav class="nav-menu">
					<ul class="nav-list">

                        <?php foreach ($menu as $k => $first_level):?>
                            <?=doFirstLevel($first_level)?>
                        <?php endforeach;?>

					</ul>
				</nav>
			</div>
		</div>
	</header>