<?php 
use Doctrine\ORM\Tools\Console\ConsoleRunner; 
// replace with file to your own project bootstrap 
include_once 'bootstrap.php'; 
include_once 'module/Application/src/Application/Database/Article.php';
include_once 'module/Application/src/Application/Database/Broadsheet.php';
include_once 'module/Application/src/Application/Database/Block.php';
include_once 'module/Application/src/Application/Database/Container.php';
include_once 'module/Application/src/Application/Database/ContainerItem.php';
include_once 'module/Application/src/Application/Database/ContainerType.php';
include_once 'module/Application/src/Application/Database/Correspondent.php';
include_once 'module/Application/src/Application/Database/Headline.php';
include_once 'module/Application/src/Application/Database/Issue.php';
include_once 'module/Application/src/Application/Database/Picture.php';
include_once 'module/Application/src/Application/Database/Pixlink.php';
include_once 'module/Application/src/Application/Database/Richcolumn.php';
include_once 'module/Application/src/Application/Database/Textcolumn.php';
include_once 'module/Application/src/Application/Database/Wordage.php';
// replace with mechanism to retrieve DatabaseManager in your app 
return ConsoleRunner::createHelperSet($entityManager);
