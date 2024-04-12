<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<!-- постраничная навигация сверху -->
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?php echo $arResult['NAV_STRING']; ?><br />
<?endif;?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?php
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'), ['CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
	?>
	<div id="<?php echo $this->GetEditAreaId($arItem['ID']); ?>">
		<div class="ps_head">
			<a class="ps_head_link" href="<?php echo $arItem['DETAIL_PAGE_URL']; ?>"><h2 class="ps_head_h"><?php echo $arItem['NAME']; ?></h2></a>
			<span class="ps_date"><?php echo $arItem['ACTIVE_FROM']; ?></span>
		</div>
		<div class="ps_content" style='min-height:120px;'>
			<img src="<?php echo $arItem['PREVIEW_PICTURE']['SRC']; ?>" align="left" alt="фото">
			<p><?php echo $arItem['PREVIEW_TEXT']; ?></p>
		</div>
	</div>
<?endforeach?>

<!-- постраничная навигация снизу -->
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?php echo $arResult['NAV_STRING']; ?>
<?endif;?>