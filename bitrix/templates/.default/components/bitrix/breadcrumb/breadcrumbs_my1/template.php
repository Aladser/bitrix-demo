<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '<div class="bc_breadcrumbs"><ul>';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$link = $arResult[$index]["LINK"];

	if($link <> "" && $index != $itemSize-1)
	{
		$strReturn .= "<li><a href='$link' title='$title'>$title</a></li>";
	}
	else
	{
		$strReturn .= "<li><a href=''>$title</a></li>";
	}
}

$strReturn .= '</ul><div class="clearboth"></div></div>';

return $strReturn;
