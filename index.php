<?php

define('IN_DOUCO', true);

require (dirname(__FILE__). '/include/init.php');
if ($_REQUEST['s']) {
    if ($check->is_text($keyword = trim($_REQUEST['s']))) {
        require (ROOT_PATH . 'include/search.inc.php');
    } else {
        $dou->dou_msg($_LANG['search_keyword_wrong']);
    }
}


$sql = "SELECT * FROM " . $dou->table('page') . " WHERE id = '1'";

$query = $dou->query($sql);

$about = $dou->fetch_array($query);



// 写入到index数组

$index['about_name'] = $about['page_name'];

$index['about_content'] = $dou->dou_substr($about['content'], 300);

$index['about_link'] = $dou->rewrite_url('page', '1');

$index['product_link'] = $dou->rewrite_url('product_category');

$index['article_link'] = $dou->rewrite_url('article_category');

$index['cur'] = true;



// 赋值给模板-meta和title信息

$smarty->assign('page_title', $dou->page_title());

$smarty->assign('keywords', $_CFG['site_keywords']);

$smarty->assign('description', $_CFG['site_description']);



// 赋值给模板-导航�?

$smarty->assign('nav_top_list', $dou->get_nav('top'));

$smarty->assign('nav_middle_list', $dou->get_nav('middle'));

$smarty->assign('nav_bottom_list', $dou->get_nav('bottom'));



// 赋值给模板-数据





$smarty->assign('show_list', $dou->get_show_list());

$smarty->assign('link', get_link_list());

$smarty->assign('index', $index);

$smarty->assign('recommend_product', $dou->get_product_list('ALL', $_CFG['home_display_product'], 'recommend'));

$smarty->assign('recommend_article', $dou->get_article_list('ALL', $_CFG['home_display_article'], 'recommend'));



$smarty->assign('ldrs', $dou->get_article_list('5', '10'));

$smarty->assign('jtsg', $dou->get_article_list('6', '10'));

$smarty->assign('fchy', $dou->get_article_list('7', '10'));

$smarty->assign('xsbh', $dou->get_article_list('11', '10'));

$smarty->assign('pid110', $dou->get_article_list('10', '10'));



$smarty->display('index.dwt');




function get_link_list() {

    $sql = "SELECT * FROM " . $GLOBALS['dou']->table('link') . " ORDER BY sort ASC, id ASC";

    $query = $GLOBALS['dou']->query($sql);

    while ($row = $GLOBALS['dou']->fetch_array($query)) {

        $link_list[] = array (

                "id" => $row['id'],

                "link_name" => $row['link_name'],

                "link_url" => $row['link_url'],

                "sort" => $row['sort'] 

        );

    }

    

    return $link_list;

}



?>