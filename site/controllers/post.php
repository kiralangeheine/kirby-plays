<?php
return function($page){
    return [
        'long_title' => strlen($page->title()) > 20,
    ];
};