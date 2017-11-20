# emergence-cms-featured-image
Adds a featured image field to the Emergence CMS app

## Installation
This package assumes you have an Emergence site already set up that has Emergence Skeleton V2 as a parent.

1. Add a git source file in `/site-config/Git.config.d/emergence-cms-featured-image.php` with the following contents:

```
<?php

Git::$repositories['emergence-cms-featured-image'] = [
    'remote' => 'git@github.com:JarvusInnovations/emergence-cms-featured-image.git',
    'originBranch' => 'master',
    'workingBranch' => 'master',
    'trees' => [
        'php-config/Emergence/CMS/AbstractContent.config.d',
        'php-migrations/Emergence/CMS/20171115_abstract-content-featured-image.php',
        'sencha-workspace/packages/emergence-cms-featured-images',
    ]
];
```

2. Initialize repo and pull files into VFS
3. Run featured image migration avaiable at: `php-migrations/Emergence/CMS/20171115_abstract-content-featured-image.php`
