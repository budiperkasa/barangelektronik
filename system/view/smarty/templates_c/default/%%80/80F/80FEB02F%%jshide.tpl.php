<?php /* Smarty version 2.6.26, created on 2012-04-17 07:32:22
         compiled from frontend/categories/jshide.tpl */ ?>
%OBRACKET%
	"data" : %OBRACKET%
		"title" : "<?php echo $this->_tpl_vars['VH']->_utf8_encode("%NAME_WITHOUT_QUOTES%"); ?>
%COUNTER%",
		"attr" : %OBRACKET% 
			"href" : "%URL%"
			%HIGHLIGHT%
		%CBRACKET%
	%CBRACKET%,
	"attr" : %OBRACKET% 
		"id" : "category_list_%ID%"
	%CBRACKET%,
	"state" : "leaf",
	"children" : [ %CHILDREN% ]
	%ISCHILDRENLABEL%
%CBRACKET%,