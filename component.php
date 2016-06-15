<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
CModule::IncludeModule("iblock");
//print_r($arParams);

$arFilter = array(
	"IBLOCK_TYPE"=>$arParams["IBLOCK_TYPE"],
    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
    "ACTIVE" => "Y",
    );

$arOrder = array(
	$arParams["SORT_BY1"] =>$arParams["SORT_ORDER1"]
);

$res = CIBlockElement::GetList($arOrder, $arFilter, false, array("nPageSize" => $arParams["NEWS_COUNT"]), array("ID", "NAME", "DETAIL_PICTURE"));

while($result = $res->Fetch()){
	print_r($result);
}



$this->IncludeComponentTemplate();

?>