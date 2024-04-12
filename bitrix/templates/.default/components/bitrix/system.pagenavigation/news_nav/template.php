<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

/*if(!$arResult["NavShowAlways"])
{
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
        return;
}
*/

$strNavQueryString = ($arResult['NavQueryString'] != '' ? $arResult['NavQueryString'].'&amp;' : '');
$strNavQueryStringFull = ($arResult['NavQueryString'] != '' ? '?'.$arResult['NavQueryString'] : '');
?>
<div class='nav-block'>
	<span class="forum-page-title"><?php echo GetMessage('pages'); ?></span>
<?php
if ($arResult['bDescPageNumbering'] === true) {
    $bFirst = true;
    if ($arResult['NavPageNomer'] < $arResult['NavPageCount']) {
        if ($arResult['bSavePage']) {
            ?>
			
			<a class="forum-page-previous" href="<?php echo $arResult['sUrlPath']; ?>?<?php echo $strNavQueryString; ?>PAGEN_<?php echo $arResult['NavNum']; ?>=<?php echo $arResult['NavPageNomer'] + 1; ?>"><?php echo GetMessage('nav_prev'); ?></a>
<?php
        } else {
            if ($arResult['NavPageCount'] == ($arResult['NavPageNomer'] + 1)) {
                ?>
			<a class="forum-page-previous" href="<?php echo $arResult['sUrlPath']; ?><?php echo $strNavQueryStringFull; ?>"><?php echo GetMessage('nav_prev'); ?></a>
<?php
            } else {
                ?>
			<a class="forum-page-previous" href="<?php echo $arResult['sUrlPath']; ?>?<?php echo $strNavQueryString; ?>PAGEN_<?php echo $arResult['NavNum']; ?>=<?php echo $arResult['NavPageNomer'] + 1; ?>"><?php echo GetMessage('nav_prev'); ?></a>
<?php
            }
        }

        if ($arResult['nStartPage'] < $arResult['NavPageCount']) {
            $bFirst = false;
            if ($arResult['bSavePage']) {
                ?>
			<a class="forum-page-first" href="<?php echo $arResult['sUrlPath']; ?>?<?php echo $strNavQueryString; ?>PAGEN_<?php echo $arResult['NavNum']; ?>=<?php echo $arResult['NavPageCount']; ?>">1</a>
<?php
            } else {
                ?>
			<a class="forum-page-first" href="<?php echo $arResult['sUrlPath']; ?><?php echo $strNavQueryStringFull; ?>">1</a>
<?php
            }
            if ($arResult['nStartPage'] < ($arResult['NavPageCount'] - 1)) {
                ?>
			<span class="forum-page-dots">...</span>
<?php
            }
        }
    }
    do {
        $NavRecordGroupPrint = $arResult['NavPageCount'] - $arResult['nStartPage'] + 1;

        if ($arResult['nStartPage'] == $arResult['NavPageNomer']) {
            ?>
		<span class="<?php echo $bFirst ? 'forum-page-first ' : ''; ?>forum-page-current"><?php echo $NavRecordGroupPrint; ?></span>
<?php
        } elseif ($arResult['nStartPage'] == $arResult['NavPageCount'] && $arResult['bSavePage'] == false) {
            ?>
		<a href="<?php echo $arResult['sUrlPath']; ?><?php echo $strNavQueryStringFull; ?>" class="<?php echo $bFirst ? 'forum-page-first' : ''; ?>"><?php echo $NavRecordGroupPrint; ?></a>
<?php
        } else {
            ?>
		<a href="<?php echo $arResult['sUrlPath']; ?>?<?php echo $strNavQueryString; ?>PAGEN_<?php echo $arResult['NavNum']; ?>=<?php echo $arResult['nStartPage']; ?>"<?php
            ?> class="<?php echo $bFirst ? 'forum-page-first' : ''; ?>"><?php echo $NavRecordGroupPrint; ?></a>
<?php
        }

        --$arResult['nStartPage'];
        $bFirst = false;
    } while ($arResult['nStartPage'] >= $arResult['nEndPage']);

    if ($arResult['NavPageNomer'] > 1) {
        if ($arResult['nEndPage'] > 1) {
            if ($arResult['nEndPage'] > 2) {
                ?>
		<span class="forum-page-dots">...</span>
<?php
            }
            ?>
		<a href="<?php echo $arResult['sUrlPath']; ?>?<?php echo $strNavQueryString; ?>PAGEN_<?php echo $arResult['NavNum']; ?>=1"><?php echo $arResult['NavPageCount']; ?></a>
<?php
        }

        ?>
		<a class="forum-page-next"href="<?php echo $arResult['sUrlPath']; ?>?<?php echo $strNavQueryString; ?>PAGEN_<?php echo $arResult['NavNum']; ?>=<?php echo $arResult['NavPageNomer'] - 1; ?>"><?php echo GetMessage('nav_next'); ?></a>
<?php
    }
} else {
    $bFirst = true;

    if ($arResult['NavPageNomer'] > 1) {
        if ($arResult['bSavePage']) {
            ?>
			<a class="forum-page-previous" href="<?php echo $arResult['sUrlPath']; ?>?<?php echo $strNavQueryString; ?>PAGEN_<?php echo $arResult['NavNum']; ?>=<?php echo $arResult['NavPageNomer'] - 1; ?>"><?php echo GetMessage('nav_prev'); ?></a>
<?php
        } else {
            if ($arResult['NavPageNomer'] > 2) {
                ?>
			<a class="forum-page-previous" href="<?php echo $arResult['sUrlPath']; ?>?<?php echo $strNavQueryString; ?>PAGEN_<?php echo $arResult['NavNum']; ?>=<?php echo $arResult['NavPageNomer'] - 1; ?>"><?php echo GetMessage('nav_prev'); ?></a>
<?php
            } else {
                ?>
			<a class="forum-page-previous" href="<?php echo $arResult['sUrlPath']; ?><?php echo $strNavQueryStringFull; ?>"><?php echo GetMessage('nav_prev'); ?></a>
<?php
            }
        }

        if ($arResult['nStartPage'] > 1) {
            $bFirst = false;
            if ($arResult['bSavePage']) {
                ?>
			<a class="forum-page-first" href="<?php echo $arResult['sUrlPath']; ?>?<?php echo $strNavQueryString; ?>PAGEN_<?php echo $arResult['NavNum']; ?>=1">1</a>
<?php
            } else {
                ?>
			<a class="forum-page-first" href="<?php echo $arResult['sUrlPath']; ?><?php echo $strNavQueryStringFull; ?>">1</a>
<?php
            }
            if ($arResult['nStartPage'] > 2) {
                ?>
			<span class="forum-page-dots">...</span>
<?php
            }
        }
    }

    do {
        if ($arResult['nStartPage'] == $arResult['NavPageNomer']) {
            ?>
		<span class="<?php echo $bFirst ? 'forum-page-first ' : ''; ?>forum-page-current"><?php echo $arResult['nStartPage']; ?></span>
<?php
        } elseif ($arResult['nStartPage'] == 1 && $arResult['bSavePage'] == false) {
            ?>
		<a href="<?php echo $arResult['sUrlPath']; ?><?php echo $strNavQueryStringFull; ?>" class="<?php echo $bFirst ? 'forum-page-first' : ''; ?>"><?php echo $arResult['nStartPage']; ?></a>
<?php
        } else {
            ?>
		<a href="<?php echo $arResult['sUrlPath']; ?>?<?php echo $strNavQueryString; ?>PAGEN_<?php echo $arResult['NavNum']; ?>=<?php echo $arResult['nStartPage']; ?>"<?php
            ?> class="<?php echo $bFirst ? 'forum-page-first' : ''; ?>"><?php echo $arResult['nStartPage']; ?></a>
<?php
        }
        ++$arResult['nStartPage'];
        $bFirst = false;
    } while ($arResult['nStartPage'] <= $arResult['nEndPage']);

    if ($arResult['NavPageNomer'] < $arResult['NavPageCount']) {
        if ($arResult['nEndPage'] < $arResult['NavPageCount']) {
            if ($arResult['nEndPage'] < ($arResult['NavPageCount'] - 1)) {
                ?>
		<span class="forum-page-dots">...</span>
<?php
            }
            ?>
		<a href="<?php echo $arResult['sUrlPath']; ?>?<?php echo $strNavQueryString; ?>PAGEN_<?php echo $arResult['NavNum']; ?>=<?php echo $arResult['NavPageCount']; ?>"><?php echo $arResult['NavPageCount']; ?></a>
<?php
        }
        ?>
		<a class="forum-page-next" href="<?php echo $arResult['sUrlPath']; ?>?<?php echo $strNavQueryString; ?>PAGEN_<?php echo $arResult['NavNum']; ?>=<?php echo $arResult['NavPageNomer'] + 1; ?>"><?php echo GetMessage('nav_next'); ?></a>
<?php
    }
}

if ($arResult['bShowAll']) {
    if ($arResult['NavShowAll']) {
        ?>
		<a class="forum-page-pagen" href="<?php echo $arResult['sUrlPath']; ?>?<?php echo $strNavQueryString; ?>SHOWALL_<?php echo $arResult['NavNum']; ?>=0"><?php echo GetMessage('nav_paged'); ?></a>
<?php
    } else {
        ?>
		<a class="forum-page-all" href="<?php echo $arResult['sUrlPath']; ?>?<?php echo $strNavQueryString; ?>SHOWALL_<?php echo $arResult['NavNum']; ?>=1"><?php echo GetMessage('nav_all'); ?></a>
<?php
    }
}
?>
</div>