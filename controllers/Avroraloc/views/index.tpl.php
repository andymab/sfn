<?php
$layout = "index";

$title = "AvroraLoc";

$js = [];
$jss = '';

$path = str_replace(rPATH, '', __DIR__);
$css = [
    //   $path . '/assets/css/styles.css?h=' . filemtime(__DIR__ . '/assets/css/styles.css')
];

$js = [
    //   $path . '/assets/css/styles.css?h=' . filemtime(__DIR__ . '/assets/css/styles.css')
];

function start_section()
{
    ob_start();
}

function end_section()
{
    return ob_get_clean();
}
?>

<ul>
    <li><a href="/avroraloc/action/catalog_img">Формирование существующих картинок (убирание не нужных)</a></li>
</ul>