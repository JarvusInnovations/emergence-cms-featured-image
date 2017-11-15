<?php

Emergence\CMS\AbstractContent::$fields['FeaturedImageID'] = [
    'type' => 'uint',
    'default' => null
];

Emergence\CMS\AbstractContent::$relationships['FeaturedImage'] = [
    'type' => 'one-one',
    'class' => Media::class
];
