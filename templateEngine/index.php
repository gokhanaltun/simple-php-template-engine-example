<?php
    require_once 'templateRenderer.php';
    $renderer = new TemplateRenderer();

    $data = ['data'=>[
        'location' => 'Türkiye',
        'github' => 'github.com/gokhanaltun',
        'instagram' => '@gkhan3591',
    ]];

    $renderer->render_template('contacts', $data);


    $listData = ['listData'=>[
        'Some Text Here', 
        'Some Text Here',
        'Some Text Here',
        'Some Text Here',
        'Some Text Here',
        'Some Text Here',
        'Some Text Here',
        'Some Text Here',
        'Some Text Here',
        'Some Text Here']];

    //$renderer->render_template('list', $listData);

?>