<?php
$settings = $pages->get(1051);
$frontpage = $pages->get(1);

$templates = $config->urls->templates;

$pageTitle = $settings->pageTitle;
$template = $page->template;
$title = $page->title;
$headline = $page->headline;
$body = $page->body;
$id = $page->id;

