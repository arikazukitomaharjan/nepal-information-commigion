<?php


function menu($menus)
{

    $html = "<ul class='nav' id='side-menu'>";
    foreach ($menus as $menu):
        $html .= "<li>
                    <a href= '" . url($menu['menu_url']) . "'><i class='" . $menu['icon'] . "'></i>" . $menu['menu_name'] . "</a>
                </li>";
    endforeach;
    $html .= "</ul>";

    return $html;
}

function switchLangField($fields, $columnName){

    $locale = LaravelLocalization::getCurrentLocale();

    return $fields[$columnName ."_". $locale];

}