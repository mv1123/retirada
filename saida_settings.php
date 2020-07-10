<?php



$tdatasaida = array();
$tdatasaida[".searchableFields"] = array();
$tdatasaida[".ShortName"] = "saida";
$tdatasaida[".OwnerID"] = "";
$tdatasaida[".OriginalTable"] = "saida";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatasaida[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasaida[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasaida[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelssaida = array();
$fieldToolTipssaida = array();
$pageTitlessaida = array();
$placeHolderssaida = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelssaida["Portuguese(Brazil)"] = array();
	$fieldToolTipssaida["Portuguese(Brazil)"] = array();
	$placeHolderssaida["Portuguese(Brazil)"] = array();
	$pageTitlessaida["Portuguese(Brazil)"] = array();
	$fieldLabelssaida["Portuguese(Brazil)"]["ID"] = "ID";
	$fieldToolTipssaida["Portuguese(Brazil)"]["ID"] = "";
	$placeHolderssaida["Portuguese(Brazil)"]["ID"] = "";
	$fieldLabelssaida["Portuguese(Brazil)"]["Produto"] = "Produto";
	$fieldToolTipssaida["Portuguese(Brazil)"]["Produto"] = "";
	$placeHolderssaida["Portuguese(Brazil)"]["Produto"] = "";
	$fieldLabelssaida["Portuguese(Brazil)"]["Quantidade"] = "Quantidade";
	$fieldToolTipssaida["Portuguese(Brazil)"]["Quantidade"] = "";
	$placeHolderssaida["Portuguese(Brazil)"]["Quantidade"] = "";
	$fieldLabelssaida["Portuguese(Brazil)"]["Unidade"] = "Unidade";
	$fieldToolTipssaida["Portuguese(Brazil)"]["Unidade"] = "";
	$placeHolderssaida["Portuguese(Brazil)"]["Unidade"] = "";
	$fieldLabelssaida["Portuguese(Brazil)"]["Data"] = "Data";
	$fieldToolTipssaida["Portuguese(Brazil)"]["Data"] = "";
	$placeHolderssaida["Portuguese(Brazil)"]["Data"] = "";
	$fieldLabelssaida["Portuguese(Brazil)"]["Destino"] = "Destino";
	$fieldToolTipssaida["Portuguese(Brazil)"]["Destino"] = "";
	$placeHolderssaida["Portuguese(Brazil)"]["Destino"] = "";
	$pageTitlessaida["Portuguese(Brazil)"]["add"] = "Retirada de Produto";
	$pageTitlessaida["Portuguese(Brazil)"]["edit"] = "Editar Retirada de Produto[{%ID}]";
	$pageTitlessaida["Portuguese(Brazil)"]["import"] = "Importar";
	$pageTitlessaida["Portuguese(Brazil)"]["list"] = "Retirada de Produto";
	$pageTitlessaida["Portuguese(Brazil)"]["print"] = "Retirada de Produto";
	$pageTitlessaida["Portuguese(Brazil)"]["search"] = "Retirada de Produto - Busca Avancada";
	$pageTitlessaida["Portuguese(Brazil)"]["view"] = "Retirada de Produto [{%ID}]";
	if (count($fieldToolTipssaida["Portuguese(Brazil)"]))
		$tdatasaida[".isUseToolTips"] = true;
}


	$tdatasaida[".NCSearch"] = true;



$tdatasaida[".shortTableName"] = "saida";
$tdatasaida[".nSecOptions"] = 0;

$tdatasaida[".mainTableOwnerID"] = "";
$tdatasaida[".entityType"] = 0;

$tdatasaida[".strOriginalTableName"] = "saida";

		 



$tdatasaida[".showAddInPopup"] = false;

$tdatasaida[".showEditInPopup"] = false;

$tdatasaida[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasaida[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasaida[".listAjax"] = false;
//	temporary
$tdatasaida[".listAjax"] = false;

	$tdatasaida[".audit"] = true;

	$tdatasaida[".locking"] = false;


$pages = $tdatasaida[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasaida[".edit"] = true;
	$tdatasaida[".afterEditAction"] = 0;
	$tdatasaida[".closePopupAfterEdit"] = 1;
	$tdatasaida[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasaida[".add"] = true;
$tdatasaida[".afterAddAction"] = 0;
$tdatasaida[".closePopupAfterAdd"] = 1;
$tdatasaida[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasaida[".list"] = true;
}



$tdatasaida[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasaida[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasaida[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasaida[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasaida[".printFriendly"] = true;
}



$tdatasaida[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasaida[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasaida[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasaida[".isUseAjaxSuggest"] = true;

$tdatasaida[".rowHighlite"] = true;





$tdatasaida[".ajaxCodeSnippetAdded"] = false;

$tdatasaida[".buttonsAdded"] = false;

$tdatasaida[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasaida[".isUseTimeForSearch"] = false;


$tdatasaida[".badgeColor"] = "EDCA00";


$tdatasaida[".allSearchFields"] = array();
$tdatasaida[".filterFields"] = array();
$tdatasaida[".requiredSearchFields"] = array();

$tdatasaida[".googleLikeFields"] = array();
$tdatasaida[".googleLikeFields"][] = "ID";
$tdatasaida[".googleLikeFields"][] = "Produto";
$tdatasaida[".googleLikeFields"][] = "Quantidade";
$tdatasaida[".googleLikeFields"][] = "Unidade";
$tdatasaida[".googleLikeFields"][] = "Data";
$tdatasaida[".googleLikeFields"][] = "Destino";



$tdatasaida[".tableType"] = "list";

$tdatasaida[".printerPageOrientation"] = 0;
$tdatasaida[".nPrinterPageScale"] = 100;

$tdatasaida[".nPrinterSplitRecords"] = 40;

$tdatasaida[".geocodingEnabled"] = false;










$tdatasaida[".pageSize"] = 20;

$tdatasaida[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasaida[".strOrderBy"] = $tstrOrderBy;

$tdatasaida[".orderindexes"] = array();

$tdatasaida[".sqlHead"] = "SELECT ID,  	Produto,  	Quantidade,  	Unidade,  	`Data`,  	Destino";
$tdatasaida[".sqlFrom"] = "FROM saida";
$tdatasaida[".sqlWhereExpr"] = "";
$tdatasaida[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasaida[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasaida[".arrGroupsPerPage"] = $arrGPP;

$tdatasaida[".highlightSearchResults"] = true;

$tableKeyssaida = array();
$tableKeyssaida[] = "ID";
$tdatasaida[".Keys"] = $tableKeyssaida;


$tdatasaida[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "saida";
	$fdata["Label"] = GetFieldLabel("saida","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasaida["ID"] = $fdata;
		$tdatasaida[".searchableFields"][] = "ID";
//	Produto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Produto";
	$fdata["GoodName"] = "Produto";
	$fdata["ownerTable"] = "saida";
	$fdata["Label"] = GetFieldLabel("saida","Produto");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "Produto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Produto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "produtos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "Nome";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nome";

	

	
	$edata["LookupOrderBy"] = "Nome";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasaida["Produto"] = $fdata;
		$tdatasaida[".searchableFields"][] = "Produto";
//	Quantidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Quantidade";
	$fdata["GoodName"] = "Quantidade";
	$fdata["ownerTable"] = "saida";
	$fdata["Label"] = GetFieldLabel("saida","Quantidade");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "Quantidade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Quantidade";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasaida["Quantidade"] = $fdata;
		$tdatasaida[".searchableFields"][] = "Quantidade";
//	Unidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Unidade";
	$fdata["GoodName"] = "Unidade";
	$fdata["ownerTable"] = "saida";
	$fdata["Label"] = GetFieldLabel("saida","Unidade");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "Unidade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Unidade";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasaida["Unidade"] = $fdata;
		$tdatasaida[".searchableFields"][] = "Unidade";
//	Data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Data";
	$fdata["GoodName"] = "Data";
	$fdata["ownerTable"] = "saida";
	$fdata["Label"] = GetFieldLabel("saida","Data");
	$fdata["FieldType"] = 7;

	
	
	
										

		$fdata["strField"] = "Data";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Data`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 1;
	$edata["LastYearFactor"] = 5;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasaida["Data"] = $fdata;
		$tdatasaida[".searchableFields"][] = "Data";
//	Destino
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Destino";
	$fdata["GoodName"] = "Destino";
	$fdata["ownerTable"] = "saida";
	$fdata["Label"] = GetFieldLabel("saida","Destino");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "Destino";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Destino";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "setores";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Setor";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Setor";

	

	
	$edata["LookupOrderBy"] = "Setor";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasaida["Destino"] = $fdata;
		$tdatasaida[".searchableFields"][] = "Destino";


$tables_data["saida"]=&$tdatasaida;
$field_labels["saida"] = &$fieldLabelssaida;
$fieldToolTips["saida"] = &$fieldToolTipssaida;
$placeHolders["saida"] = &$placeHolderssaida;
$page_titles["saida"] = &$pageTitlessaida;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["saida"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["saida"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_saida()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	Produto,  	Quantidade,  	Unidade,  	`Data`,  	Destino";
$proto0["m_strFrom"] = "FROM saida";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "saida",
	"m_srcTableName" => "saida"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "saida";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Produto",
	"m_strTable" => "saida",
	"m_srcTableName" => "saida"
));

$proto8["m_sql"] = "Produto";
$proto8["m_srcTableName"] = "saida";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantidade",
	"m_strTable" => "saida",
	"m_srcTableName" => "saida"
));

$proto10["m_sql"] = "Quantidade";
$proto10["m_srcTableName"] = "saida";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Unidade",
	"m_strTable" => "saida",
	"m_srcTableName" => "saida"
));

$proto12["m_sql"] = "Unidade";
$proto12["m_srcTableName"] = "saida";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Data",
	"m_strTable" => "saida",
	"m_srcTableName" => "saida"
));

$proto14["m_sql"] = "`Data`";
$proto14["m_srcTableName"] = "saida";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Destino",
	"m_strTable" => "saida",
	"m_srcTableName" => "saida"
));

$proto16["m_sql"] = "Destino";
$proto16["m_srcTableName"] = "saida";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "saida";
$proto19["m_srcTableName"] = "saida";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ID";
$proto19["m_columns"][] = "Produto";
$proto19["m_columns"][] = "Quantidade";
$proto19["m_columns"][] = "Unidade";
$proto19["m_columns"][] = "Data";
$proto19["m_columns"][] = "Destino";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "saida";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "saida";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="saida";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_saida = createSqlQuery_saida();


	
					
;

						

$tdatasaida[".sqlquery"] = $queryData_saida;

$tableEvents["saida"] = new eventsBase;
$tdatasaida[".hasEvents"] = false;

?>