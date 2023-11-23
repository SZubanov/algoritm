<?php

namespace AbstractFactory;

require_once 'ChairInterface.php';
require_once 'FurnitureFactoryInterface.php';
require_once 'TableInterface.php';
require_once 'WardrobeInterface.php';
require_once 'Classic/ClassicChair.php';
require_once 'Classic/ClassicTable.php';
require_once 'Classic/ClassicWardrobe.php';
require_once 'Classic/ClassicFurnitureFactoryFactory.php';
require_once 'Modern/ModernChair.php';
require_once 'Modern/ModernTable.php';
require_once 'Modern/ModernWardrobe.php';
require_once 'Modern/ModernFurnitureFactoryFactory.php';


// Использование фабрик
$modernFactory = new ModernFurnitureFactoryFactory();
$modernChair = $modernFactory->createChair()->createChair();
$modernTable = $modernFactory->createTable()->createTable();
$modernWardrobe = $modernFactory->createWardrobe()->createWardrobe();

$classicFactory = new ClassicFurnitureFactoryFactory();
$classicChair = $classicFactory->createChair()->createChair();
$classicTable = $classicFactory->createTable()->createTable();
$classicWardrobe = $classicFactory->createWardrobe()->createWardrobe();

// Вывод результатов
echo "Modern Furniture:".PHP_EOL;
echo $modernChair, $modernTable, $modernWardrobe.PHP_EOL;
echo "Classic Furniture:".PHP_EOL;
echo $classicChair, $classicTable, $classicWardrobe.PHP_EOL;
