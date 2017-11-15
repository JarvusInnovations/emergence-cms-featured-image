<?php

$abstractContentTable = \Emergence\CMS\AbstractContent::$tableName;
$historyAbstractContentTable = 'history_' . $abstractContentTable;

// skip conditions
$skipped = true;
if (!static::tableExists($abstractContentTable)) {
    printf("Skipping migration because table `" . $abstractContentTable . "` does not exist yet\n");
    return static::STATUS_SKIPPED;
}

// migration
if (!static::getColumn($abstractContentTable, 'FeaturedImageID')) {
    print("Adding field `FeaturedImageID` to table `" . $abstractContentTable . "`'\n");
    DB::nonQuery("ALTER TABLE `" . $abstractContentTable . "` ADD COLUMN `FeaturedImageID` INT(10) UNSIGNED NULL DEFAULT 0 AFTER `LayoutConfig`;");
    $skipped = false;
}

if (!static::getColumn($historyAbstractContentTable, 'FeaturedImageID')) {
    print("Adding field `FeaturedImageID` to table `" . $historyAbstractContentTable . "`'\n");
    DB::nonQuery("ALTER TABLE `" . $historyAbstractContentTable . "` ADD COLUMN `FeaturedImageID` INT(10) UNSIGNED NULL DEFAULT 0 AFTER `LayoutConfig`;");
    $skipped = false;
}

// done
return $skipped ? static::STATUS_SKIPPED : static::STATUS_EXECUTED;
