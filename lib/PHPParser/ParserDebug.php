<?php

/* Prototype file of classed PHP parser.
 * Written by Moriyoshi Koizumi, based on the work by Masato Bito.
 * This file is PUBLIC DOMAIN.
 */
class PHPParser_ParserDebug
{
    const YYBADCH      = 145;
    const YYMAXLEX     = 380;
    const YYTERMS      = 145;
    const YYNONTERMS   = 91;
    const YYLAST       = 888;
    const YY2TBLSTATE  = 331;
    const YYGLAST      = 394;
    const YYSTATES     = 749;
    const YYNLSTATES   = 527;
    const YYINTERRTOK  = 1;
    const YYUNEXPECTED = 32767;
    const YYDEFAULT    = -32766;

    // {{{ Tokens
    const YYERRTOK = 256;
    const T_INCLUDE = 257;
    const T_INCLUDE_ONCE = 258;
    const T_EVAL = 259;
    const T_REQUIRE = 260;
    const T_REQUIRE_ONCE = 261;
    const T_LOGICAL_OR = 262;
    const T_LOGICAL_XOR = 263;
    const T_LOGICAL_AND = 264;
    const T_PRINT = 265;
    const T_PLUS_EQUAL = 266;
    const T_MINUS_EQUAL = 267;
    const T_MUL_EQUAL = 268;
    const T_DIV_EQUAL = 269;
    const T_CONCAT_EQUAL = 270;
    const T_MOD_EQUAL = 271;
    const T_AND_EQUAL = 272;
    const T_OR_EQUAL = 273;
    const T_XOR_EQUAL = 274;
    const T_SL_EQUAL = 275;
    const T_SR_EQUAL = 276;
    const T_BOOLEAN_OR = 277;
    const T_BOOLEAN_AND = 278;
    const T_IS_EQUAL = 279;
    const T_IS_NOT_EQUAL = 280;
    const T_IS_IDENTICAL = 281;
    const T_IS_NOT_IDENTICAL = 282;
    const T_IS_SMALLER_OR_EQUAL = 283;
    const T_IS_GREATER_OR_EQUAL = 284;
    const T_SL = 285;
    const T_SR = 286;
    const T_INSTANCEOF = 287;
    const T_INC = 288;
    const T_DEC = 289;
    const T_INT_CAST = 290;
    const T_DOUBLE_CAST = 291;
    const T_STRING_CAST = 292;
    const T_ARRAY_CAST = 293;
    const T_OBJECT_CAST = 294;
    const T_BOOL_CAST = 295;
    const T_UNSET_CAST = 296;
    const T_NEW = 297;
    const T_CLONE = 298;
    const T_EXIT = 299;
    const T_IF = 300;
    const T_ELSEIF = 301;
    const T_ELSE = 302;
    const T_ENDIF = 303;
    const T_LNUMBER = 304;
    const T_DNUMBER = 305;
    const T_STRING = 306;
    const T_STRING_VARNAME = 307;
    const T_VARIABLE = 308;
    const T_NUM_STRING = 309;
    const T_INLINE_HTML = 310;
    const T_CHARACTER = 311;
    const T_BAD_CHARACTER = 312;
    const T_ENCAPSED_AND_WHITESPACE = 313;
    const T_CONSTANT_ENCAPSED_STRING = 314;
    const T_ECHO = 315;
    const T_DO = 316;
    const T_WHILE = 317;
    const T_ENDWHILE = 318;
    const T_FOR = 319;
    const T_ENDFOR = 320;
    const T_FOREACH = 321;
    const T_ENDFOREACH = 322;
    const T_DECLARE = 323;
    const T_ENDDECLARE = 324;
    const T_AS = 325;
    const T_SWITCH = 326;
    const T_ENDSWITCH = 327;
    const T_CASE = 328;
    const T_DEFAULT = 329;
    const T_BREAK = 330;
    const T_CONTINUE = 331;
    const T_GOTO = 332;
    const T_FUNCTION = 333;
    const T_CONST = 334;
    const T_RETURN = 335;
    const T_TRY = 336;
    const T_CATCH = 337;
    const T_THROW = 338;
    const T_USE = 339;
    const T_GLOBAL = 340;
    const T_STATIC = 341;
    const T_ABSTRACT = 342;
    const T_FINAL = 343;
    const T_PRIVATE = 344;
    const T_PROTECTED = 345;
    const T_PUBLIC = 346;
    const T_VAR = 347;
    const T_UNSET = 348;
    const T_ISSET = 349;
    const T_EMPTY = 350;
    const T_HALT_COMPILER = 351;
    const T_CLASS = 352;
    const T_INTERFACE = 353;
    const T_EXTENDS = 354;
    const T_IMPLEMENTS = 355;
    const T_OBJECT_OPERATOR = 356;
    const T_DOUBLE_ARROW = 357;
    const T_LIST = 358;
    const T_ARRAY = 359;
    const T_CLASS_C = 360;
    const T_METHOD_C = 361;
    const T_FUNC_C = 362;
    const T_LINE = 363;
    const T_FILE = 364;
    const T_COMMENT = 365;
    const T_DOC_COMMENT = 366;
    const T_OPEN_TAG = 367;
    const T_OPEN_TAG_WITH_ECHO = 368;
    const T_CLOSE_TAG = 369;
    const T_WHITESPACE = 370;
    const T_START_HEREDOC = 371;
    const T_END_HEREDOC = 372;
    const T_DOLLAR_OPEN_CURLY_BRACES = 373;
    const T_CURLY_OPEN = 374;
    const T_PAAMAYIM_NEKUDOTAYIM = 375;
    const T_NAMESPACE = 376;
    const T_NS_C = 377;
    const T_DIR = 378;
    const T_NS_SEPARATOR = 379;
    // }}}

    private static $yyterminals = array(
        '$EOF',
        "error",
        "T_INCLUDE",
        "T_INCLUDE_ONCE",
        "T_EVAL",
        "T_REQUIRE",
        "T_REQUIRE_ONCE",
        "','",
        "T_LOGICAL_OR",
        "T_LOGICAL_XOR",
        "T_LOGICAL_AND",
        "T_PRINT",
        "'='",
        "T_PLUS_EQUAL",
        "T_MINUS_EQUAL",
        "T_MUL_EQUAL",
        "T_DIV_EQUAL",
        "T_CONCAT_EQUAL",
        "T_MOD_EQUAL",
        "T_AND_EQUAL",
        "T_OR_EQUAL",
        "T_XOR_EQUAL",
        "T_SL_EQUAL",
        "T_SR_EQUAL",
        "'?'",
        "':'",
        "T_BOOLEAN_OR",
        "T_BOOLEAN_AND",
        "'|'",
        "'^'",
        "'&'",
        "T_IS_EQUAL",
        "T_IS_NOT_EQUAL",
        "T_IS_IDENTICAL",
        "T_IS_NOT_IDENTICAL",
        "'<'",
        "T_IS_SMALLER_OR_EQUAL",
        "'>'",
        "T_IS_GREATER_OR_EQUAL",
        "T_SL",
        "T_SR",
        "'+'",
        "'-'",
        "'.'",
        "'*'",
        "'/'",
        "'%'",
        "'!'",
        "T_INSTANCEOF",
        "'~'",
        "T_INC",
        "T_DEC",
        "T_INT_CAST",
        "T_DOUBLE_CAST",
        "T_STRING_CAST",
        "T_ARRAY_CAST",
        "T_OBJECT_CAST",
        "T_BOOL_CAST",
        "T_UNSET_CAST",
        "'@'",
        "'['",
        "T_NEW",
        "T_CLONE",
        "T_EXIT",
        "T_IF",
        "T_ELSEIF",
        "T_ELSE",
        "T_ENDIF",
        "T_LNUMBER",
        "T_DNUMBER",
        "T_STRING",
        "T_STRING_VARNAME",
        "T_VARIABLE",
        "T_NUM_STRING",
        "T_INLINE_HTML",
        "T_ENCAPSED_AND_WHITESPACE",
        "T_CONSTANT_ENCAPSED_STRING",
        "T_ECHO",
        "T_DO",
        "T_WHILE",
        "T_ENDWHILE",
        "T_FOR",
        "T_ENDFOR",
        "T_FOREACH",
        "T_ENDFOREACH",
        "T_DECLARE",
        "T_ENDDECLARE",
        "T_AS",
        "T_SWITCH",
        "T_ENDSWITCH",
        "T_CASE",
        "T_DEFAULT",
        "T_BREAK",
        "T_CONTINUE",
        "T_GOTO",
        "T_FUNCTION",
        "T_CONST",
        "T_RETURN",
        "T_TRY",
        "T_CATCH",
        "T_THROW",
        "T_USE",
        "T_GLOBAL",
        "T_STATIC",
        "T_ABSTRACT",
        "T_FINAL",
        "T_PRIVATE",
        "T_PROTECTED",
        "T_PUBLIC",
        "T_VAR",
        "T_UNSET",
        "T_ISSET",
        "T_EMPTY",
        "T_HALT_COMPILER",
        "T_CLASS",
        "T_INTERFACE",
        "T_EXTENDS",
        "T_IMPLEMENTS",
        "T_OBJECT_OPERATOR",
        "T_DOUBLE_ARROW",
        "T_LIST",
        "T_ARRAY",
        "T_CLASS_C",
        "T_METHOD_C",
        "T_FUNC_C",
        "T_LINE",
        "T_FILE",
        "T_START_HEREDOC",
        "T_END_HEREDOC",
        "T_DOLLAR_OPEN_CURLY_BRACES",
        "T_CURLY_OPEN",
        "T_PAAMAYIM_NEKUDOTAYIM",
        "T_NAMESPACE",
        "T_NS_C",
        "T_DIR",
        "T_NS_SEPARATOR",
        "';'",
        "'{'",
        "'}'",
        "'('",
        "')'",
        "'$'",
        "'`'",
        "']'",
        "'\"'"
        , "???"
    );

    private static $yyproduction = array(
        '$start : start',
        "start : top_statement_list",
        "top_statement_list : top_statement_list top_statement",
        "top_statement_list : /* empty */",
        "namespace_name : namespace_name_sub",
        "namespace_name_sub : T_STRING",
        "namespace_name_sub : namespace_name_sub T_NS_SEPARATOR T_STRING",
        "top_statement : statement",
        "top_statement : function_declaration_statement",
        "top_statement : class_declaration_statement",
        "top_statement : T_HALT_COMPILER",
        "top_statement : T_NAMESPACE namespace_name ';'",
        "top_statement : T_NAMESPACE namespace_name '{' top_statement_list '}'",
        "top_statement : T_NAMESPACE '{' top_statement_list '}'",
        "top_statement : T_USE use_declarations ';'",
        "top_statement : constant_declaration ';'",
        "use_declarations : use_declarations ',' use_declaration",
        "use_declarations : use_declaration",
        "use_declaration : namespace_name",
        "use_declaration : namespace_name T_AS T_STRING",
        "use_declaration : T_NS_SEPARATOR namespace_name",
        "use_declaration : T_NS_SEPARATOR namespace_name T_AS T_STRING",
        "constant_declaration : constant_declaration ',' T_STRING '=' static_scalar",
        "constant_declaration : T_CONST T_STRING '=' static_scalar",
        "inner_statement_list : inner_statement_list inner_statement",
        "inner_statement_list : /* empty */",
        "inner_statement : statement",
        "inner_statement : function_declaration_statement",
        "inner_statement : class_declaration_statement",
        "inner_statement : T_HALT_COMPILER",
        "statement : '{' inner_statement_list '}'",
        "statement : T_IF '(' expr ')' statement elseif_list else_single",
        "statement : T_IF '(' expr ')' ':' inner_statement_list new_elseif_list new_else_single T_ENDIF ';'",
        "statement : T_WHILE '(' expr ')' while_statement",
        "statement : T_DO statement T_WHILE '(' expr ')' ';'",
        "statement : T_FOR '(' for_expr ';' for_expr ';' for_expr ')' for_statement",
        "statement : T_SWITCH '(' expr ')' switch_case_list",
        "statement : T_BREAK ';'",
        "statement : T_BREAK expr ';'",
        "statement : T_CONTINUE ';'",
        "statement : T_CONTINUE expr ';'",
        "statement : T_RETURN ';'",
        "statement : T_RETURN expr ';'",
        "statement : T_GLOBAL global_var_list ';'",
        "statement : T_STATIC static_var_list ';'",
        "statement : T_ECHO expr_list ';'",
        "statement : T_INLINE_HTML",
        "statement : expr ';'",
        "statement : T_UNSET '(' variables_list ')' ';'",
        "statement : T_FOREACH '(' expr T_AS variable ')' foreach_statement",
        "statement : T_FOREACH '(' expr T_AS '&' variable ')' foreach_statement",
        "statement : T_FOREACH '(' expr T_AS variable T_DOUBLE_ARROW optional_ref variable ')' foreach_statement",
        "statement : T_DECLARE '(' declare_list ')' declare_statement",
        "statement : ';'",
        "statement : T_TRY '{' inner_statement_list '}' catches",
        "statement : T_THROW expr ';'",
        "statement : T_GOTO T_STRING ';'",
        "statement : T_STRING ':'",
        "catches : catch",
        "catches : catches catch",
        "catch : T_CATCH '(' name T_VARIABLE ')' '{' inner_statement_list '}'",
        "variables_list : variable",
        "variables_list : variables_list ',' variable",
        "optional_ref : /* empty */",
        "optional_ref : '&'",
        "function_declaration_statement : T_FUNCTION optional_ref T_STRING '(' parameter_list ')' '{' inner_statement_list '}'",
        "class_declaration_statement : class_entry_type T_STRING extends_from implements_list '{' class_statement_list '}'",
        "class_declaration_statement : T_INTERFACE T_STRING interface_extends_list '{' class_statement_list '}'",
        "class_entry_type : T_CLASS",
        "class_entry_type : T_ABSTRACT T_CLASS",
        "class_entry_type : T_FINAL T_CLASS",
        "extends_from : /* empty */",
        "extends_from : T_EXTENDS name",
        "interface_extends_list : /* empty */",
        "interface_extends_list : T_EXTENDS interface_list",
        "implements_list : /* empty */",
        "implements_list : T_IMPLEMENTS interface_list",
        "interface_list : name",
        "interface_list : interface_list ',' name",
        "for_statement : statement",
        "for_statement : ':' inner_statement_list T_ENDFOR ';'",
        "foreach_statement : statement",
        "foreach_statement : ':' inner_statement_list T_ENDFOREACH ';'",
        "declare_statement : statement",
        "declare_statement : ':' inner_statement_list T_ENDDECLARE ';'",
        "declare_list : T_STRING '=' static_scalar",
        "declare_list : declare_list ',' T_STRING '=' static_scalar",
        "switch_case_list : '{' case_list '}'",
        "switch_case_list : '{' ';' case_list '}'",
        "switch_case_list : ':' case_list T_ENDSWITCH ';'",
        "switch_case_list : ':' ';' case_list T_ENDSWITCH ';'",
        "case_list : /* empty */",
        "case_list : case_list T_CASE expr case_separator inner_statement_list",
        "case_list : case_list T_DEFAULT case_separator inner_statement_list",
        "case_separator : ':'",
        "case_separator : ';'",
        "while_statement : statement",
        "while_statement : ':' inner_statement_list T_ENDWHILE ';'",
        "elseif_list : /* empty */",
        "elseif_list : elseif_list T_ELSEIF '(' expr ')' statement",
        "new_elseif_list : /* empty */",
        "new_elseif_list : new_elseif_list T_ELSEIF '(' expr ')' ':' inner_statement_list",
        "else_single : /* empty */",
        "else_single : T_ELSE statement",
        "new_else_single : /* empty */",
        "new_else_single : T_ELSE ':' inner_statement_list",
        "parameter_list : non_empty_parameter_list",
        "parameter_list : /* empty */",
        "non_empty_parameter_list : optional_class_type optional_ref T_VARIABLE",
        "non_empty_parameter_list : optional_class_type optional_ref T_VARIABLE '=' static_scalar",
        "non_empty_parameter_list : non_empty_parameter_list ',' optional_class_type optional_ref T_VARIABLE",
        "non_empty_parameter_list : non_empty_parameter_list ',' optional_class_type optional_ref T_VARIABLE '=' static_scalar",
        "optional_class_type : /* empty */",
        "optional_class_type : name",
        "optional_class_type : T_ARRAY",
        "function_call_argument_list : non_empty_function_call_argument_list",
        "function_call_argument_list : /* empty */",
        "non_empty_function_call_argument_list : expr",
        "non_empty_function_call_argument_list : '&' variable",
        "non_empty_function_call_argument_list : non_empty_function_call_argument_list ',' expr",
        "non_empty_function_call_argument_list : non_empty_function_call_argument_list ',' '&' variable",
        "global_var_list : global_var_list ',' global_var",
        "global_var_list : global_var",
        "global_var : T_VARIABLE",
        "global_var : '$' variable",
        "global_var : '$' '{' expr '}'",
        "static_var_list : static_var_list ',' T_VARIABLE",
        "static_var_list : static_var_list ',' T_VARIABLE '=' static_scalar",
        "static_var_list : T_VARIABLE",
        "static_var_list : T_VARIABLE '=' static_scalar",
        "class_statement_list : class_statement_list class_statement",
        "class_statement_list : /* empty */",
        "class_statement : variable_modifiers class_variable_declaration ';'",
        "class_statement : class_constant_declaration ';'",
        "class_statement : method_modifiers T_FUNCTION optional_ref T_STRING '(' parameter_list ')' method_body",
        "method_body : ';'",
        "method_body : '{' inner_statement_list '}'",
        "variable_modifiers : non_empty_member_modifiers",
        "variable_modifiers : T_VAR",
        "method_modifiers : /* empty */",
        "method_modifiers : non_empty_member_modifiers",
        "non_empty_member_modifiers : member_modifier",
        "non_empty_member_modifiers : non_empty_member_modifiers member_modifier",
        "member_modifier : T_PUBLIC",
        "member_modifier : T_PROTECTED",
        "member_modifier : T_PRIVATE",
        "member_modifier : T_STATIC",
        "member_modifier : T_ABSTRACT",
        "member_modifier : T_FINAL",
        "class_variable_declaration : class_variable_declaration ',' T_VARIABLE",
        "class_variable_declaration : class_variable_declaration ',' T_VARIABLE '=' static_scalar",
        "class_variable_declaration : T_VARIABLE",
        "class_variable_declaration : T_VARIABLE '=' static_scalar",
        "class_constant_declaration : class_constant_declaration ',' T_STRING '=' static_scalar",
        "class_constant_declaration : T_CONST T_STRING '=' static_scalar",
        "expr_list : expr_list ',' expr",
        "expr_list : expr",
        "for_expr : /* empty */",
        "for_expr : expr_list",
        "expr : variable",
        "expr : T_LIST '(' assignment_list ')' '=' expr",
        "expr : variable '=' expr",
        "expr : variable '=' '&' variable",
        "expr : variable '=' '&' T_NEW class_name_reference ctor_arguments",
        "expr : T_NEW class_name_reference ctor_arguments",
        "expr : T_CLONE expr",
        "expr : variable T_PLUS_EQUAL expr",
        "expr : variable T_MINUS_EQUAL expr",
        "expr : variable T_MUL_EQUAL expr",
        "expr : variable T_DIV_EQUAL expr",
        "expr : variable T_CONCAT_EQUAL expr",
        "expr : variable T_MOD_EQUAL expr",
        "expr : variable T_AND_EQUAL expr",
        "expr : variable T_OR_EQUAL expr",
        "expr : variable T_XOR_EQUAL expr",
        "expr : variable T_SL_EQUAL expr",
        "expr : variable T_SR_EQUAL expr",
        "expr : variable T_INC",
        "expr : T_INC variable",
        "expr : variable T_DEC",
        "expr : T_DEC variable",
        "expr : expr T_BOOLEAN_OR expr",
        "expr : expr T_BOOLEAN_AND expr",
        "expr : expr T_LOGICAL_OR expr",
        "expr : expr T_LOGICAL_AND expr",
        "expr : expr T_LOGICAL_XOR expr",
        "expr : expr '|' expr",
        "expr : expr '&' expr",
        "expr : expr '^' expr",
        "expr : expr '.' expr",
        "expr : expr '+' expr",
        "expr : expr '-' expr",
        "expr : expr '*' expr",
        "expr : expr '/' expr",
        "expr : expr '%' expr",
        "expr : expr T_SL expr",
        "expr : expr T_SR expr",
        "expr : '+' expr",
        "expr : '-' expr",
        "expr : '!' expr",
        "expr : '~' expr",
        "expr : expr T_IS_IDENTICAL expr",
        "expr : expr T_IS_NOT_IDENTICAL expr",
        "expr : expr T_IS_EQUAL expr",
        "expr : expr T_IS_NOT_EQUAL expr",
        "expr : expr '<' expr",
        "expr : expr T_IS_SMALLER_OR_EQUAL expr",
        "expr : expr '>' expr",
        "expr : expr T_IS_GREATER_OR_EQUAL expr",
        "expr : expr T_INSTANCEOF class_name_reference",
        "expr : '(' expr ')'",
        "expr : expr '?' expr ':' expr",
        "expr : expr '?' ':' expr",
        "expr : T_ISSET '(' variables_list ')'",
        "expr : T_EMPTY '(' variable ')'",
        "expr : T_INCLUDE expr",
        "expr : T_INCLUDE_ONCE expr",
        "expr : T_EVAL '(' expr ')'",
        "expr : T_REQUIRE expr",
        "expr : T_REQUIRE_ONCE expr",
        "expr : T_INT_CAST expr",
        "expr : T_DOUBLE_CAST expr",
        "expr : T_STRING_CAST expr",
        "expr : T_ARRAY_CAST expr",
        "expr : T_OBJECT_CAST expr",
        "expr : T_BOOL_CAST expr",
        "expr : T_UNSET_CAST expr",
        "expr : T_EXIT exit_expr",
        "expr : '@' expr",
        "expr : scalar",
        "expr : T_ARRAY '(' array_pair_list ')'",
        "expr : '`' backticks_expr '`'",
        "expr : T_PRINT expr",
        "expr : T_FUNCTION optional_ref '(' parameter_list ')' lexical_vars '{' inner_statement_list '}'",
        "lexical_vars : /* empty */",
        "lexical_vars : T_USE '(' lexical_var_list ')'",
        "lexical_var_list : lexical_var_list ',' optional_ref T_VARIABLE",
        "lexical_var_list : optional_ref T_VARIABLE",
        "function_call : name '(' function_call_argument_list ')'",
        "function_call : class_name T_PAAMAYIM_NEKUDOTAYIM T_STRING '(' function_call_argument_list ')'",
        "function_call : reference_variable T_PAAMAYIM_NEKUDOTAYIM T_STRING '(' function_call_argument_list ')'",
        "function_call : static_property_with_arrays '(' function_call_argument_list ')'",
        "function_call : variable_without_objects '(' function_call_argument_list ')'",
        "class_name : T_STATIC",
        "class_name : name",
        "name : namespace_name",
        "name : T_NAMESPACE T_NS_SEPARATOR namespace_name",
        "name : T_NS_SEPARATOR namespace_name",
        "class_name_reference : class_name",
        "class_name_reference : dynamic_class_name_reference",
        "dynamic_class_name_reference : object_access_for_dcnr",
        "dynamic_class_name_reference : base_variable",
        "object_access_for_dcnr : /* empty */",
        "object_access_for_dcnr : base_variable T_OBJECT_OPERATOR object_property",
        "object_access_for_dcnr : object_access_for_dcnr T_OBJECT_OPERATOR object_property",
        "object_access_for_dcnr : object_access_for_dcnr '[' dim_offset ']'",
        "object_access_for_dcnr : object_access_for_dcnr '{' expr '}'",
        "exit_expr : /* empty */",
        "exit_expr : '(' ')'",
        "exit_expr : '(' expr ')'",
        "backticks_expr : /* empty */",
        "backticks_expr : T_ENCAPSED_AND_WHITESPACE",
        "backticks_expr : encaps_list",
        "ctor_arguments : /* empty */",
        "ctor_arguments : '(' function_call_argument_list ')'",
        "common_scalar : T_LNUMBER",
        "common_scalar : T_DNUMBER",
        "common_scalar : T_CONSTANT_ENCAPSED_STRING",
        "common_scalar : T_LINE",
        "common_scalar : T_FILE",
        "common_scalar : T_DIR",
        "common_scalar : T_CLASS_C",
        "common_scalar : T_METHOD_C",
        "common_scalar : T_FUNC_C",
        "common_scalar : T_NS_C",
        "common_scalar : T_START_HEREDOC T_ENCAPSED_AND_WHITESPACE T_END_HEREDOC",
        "common_scalar : T_START_HEREDOC T_END_HEREDOC",
        "static_scalar : common_scalar",
        "static_scalar : name",
        "static_scalar : '+' static_scalar",
        "static_scalar : '-' static_scalar",
        "static_scalar : T_ARRAY '(' static_array_pair_list ')'",
        "static_scalar : class_name T_PAAMAYIM_NEKUDOTAYIM T_STRING",
        "scalar : T_STRING_VARNAME",
        "scalar : class_constant",
        "scalar : name",
        "scalar : common_scalar",
        "scalar : '\"' encaps_list '\"'",
        "scalar : T_START_HEREDOC encaps_list T_END_HEREDOC",
        "static_array_pair_list : /* empty */",
        "static_array_pair_list : non_empty_static_array_pair_list optional_comma",
        "optional_comma : /* empty */",
        "optional_comma : ','",
        "non_empty_static_array_pair_list : non_empty_static_array_pair_list ',' static_array_pair",
        "non_empty_static_array_pair_list : static_array_pair",
        "static_array_pair : static_scalar T_DOUBLE_ARROW static_scalar",
        "static_array_pair : static_scalar",
        "variable : object_access",
        "variable : base_variable",
        "variable : function_call",
        "object_access : object_access_arrayable",
        "object_access : object_access_arrayable '(' function_call_argument_list ')'",
        "object_access : variable T_OBJECT_OPERATOR object_property '(' function_call_argument_list ')'",
        "object_access_arrayable : variable T_OBJECT_OPERATOR object_property",
        "object_access_arrayable : object_access_arrayable '[' dim_offset ']'",
        "object_access_arrayable : object_access_arrayable '{' expr '}'",
        "variable_without_objects : reference_variable",
        "variable_without_objects : '$' reference_variable",
        "base_variable : variable_without_objects",
        "base_variable : class_name T_PAAMAYIM_NEKUDOTAYIM '$' reference_variable",
        "base_variable : reference_variable T_PAAMAYIM_NEKUDOTAYIM '$' reference_variable",
        "base_variable : static_property_with_arrays",
        "static_property_with_arrays : class_name T_PAAMAYIM_NEKUDOTAYIM T_VARIABLE",
        "static_property_with_arrays : reference_variable T_PAAMAYIM_NEKUDOTAYIM T_VARIABLE",
        "static_property_with_arrays : class_name T_PAAMAYIM_NEKUDOTAYIM '$' '{' expr '}'",
        "static_property_with_arrays : reference_variable T_PAAMAYIM_NEKUDOTAYIM '$' '{' expr '}'",
        "static_property_with_arrays : static_property_with_arrays '[' dim_offset ']'",
        "static_property_with_arrays : static_property_with_arrays '{' expr '}'",
        "reference_variable : reference_variable '[' dim_offset ']'",
        "reference_variable : reference_variable '{' expr '}'",
        "reference_variable : T_VARIABLE",
        "reference_variable : '$' '{' expr '}'",
        "dim_offset : /* empty */",
        "dim_offset : expr",
        "object_property : T_STRING",
        "object_property : '{' expr '}'",
        "object_property : variable_without_objects",
        "assignment_list : assignment_list ',' assignment_list_element",
        "assignment_list : assignment_list_element",
        "assignment_list_element : variable",
        "assignment_list_element : T_LIST '(' assignment_list ')'",
        "assignment_list_element : /* empty */",
        "array_pair_list : /* empty */",
        "array_pair_list : non_empty_array_pair_list optional_comma",
        "non_empty_array_pair_list : non_empty_array_pair_list ',' array_pair",
        "non_empty_array_pair_list : array_pair",
        "array_pair : expr T_DOUBLE_ARROW expr",
        "array_pair : expr",
        "array_pair : expr T_DOUBLE_ARROW '&' variable",
        "array_pair : '&' variable",
        "encaps_list : encaps_list encaps_var",
        "encaps_list : encaps_list T_ENCAPSED_AND_WHITESPACE",
        "encaps_list : encaps_var",
        "encaps_list : T_ENCAPSED_AND_WHITESPACE encaps_var",
        "encaps_var : T_VARIABLE",
        "encaps_var : T_VARIABLE '[' encaps_var_offset ']'",
        "encaps_var : T_VARIABLE T_OBJECT_OPERATOR T_STRING",
        "encaps_var : T_DOLLAR_OPEN_CURLY_BRACES expr '}'",
        "encaps_var : T_DOLLAR_OPEN_CURLY_BRACES T_STRING_VARNAME '[' expr ']' '}'",
        "encaps_var : T_CURLY_OPEN variable '}'",
        "encaps_var_offset : T_STRING",
        "encaps_var_offset : T_NUM_STRING",
        "encaps_var_offset : T_VARIABLE",
        "class_constant : class_name T_PAAMAYIM_NEKUDOTAYIM T_STRING",
        "class_constant : reference_variable T_PAAMAYIM_NEKUDOTAYIM T_STRING"
    );

    private static $yytranslate = array(
            0,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,   47,  144,  145,  141,   46,   30,  145,
          139,  140,   44,   41,    7,   42,   43,   45,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,   25,  136,
           35,   12,   37,   24,   59,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,   60,  145,  143,   29,  145,  142,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  137,   28,  138,   49,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,    1,    2,    3,    4,
            5,    6,    8,    9,   10,   11,   13,   14,   15,   16,
           17,   18,   19,   20,   21,   22,   23,   26,   27,   31,
           32,   33,   34,   36,   38,   39,   40,   48,   50,   51,
           52,   53,   54,   55,   56,   57,   58,   61,   62,   63,
           64,   65,   66,   67,   68,   69,   70,   71,   72,   73,
           74,  145,  145,   75,   76,   77,   78,   79,   80,   81,
           82,   83,   84,   85,   86,   87,   88,   89,   90,   91,
           92,   93,   94,   95,   96,   97,   98,   99,  100,  101,
          102,  103,  104,  105,  106,  107,  108,  109,  110,  111,
          112,  113,  114,  115,  116,  117,  118,  119,  120,  121,
          122,  123,  124,  125,  126,  145,  145,  145,  145,  145,
          145,  127,  128,  129,  130,  131,  132,  133,  134,  135
    );

    private static $yyaction = array(
           55,   56,  360,   57,   58,-32766,-32766,-32766,  249,   59,
        -32767,-32767,-32767,-32767,   98,   99,  100,  101,  102,  847,
          847,-32766,    0,-32766,-32766,   44,  106,  107,  108,  109,
          110,  111,  112,  113,  114,  115,  116,-32766,-32766,   60,
           61,-32766,-32766,-32766,-32766,   62,  584,   63,  236,  237,
           64,   65,   66,   67,   68,   69,   70,   71,-32766,  247,
           72,  337,  361,  704,  706,  256,  792,  793,  362,  810,
          847,  295,  573,  358,  794,   50,   26,  363,  227,  364,
          621,  365,  477,  366,-32766,  479,  367,  121,  273,  396,
           39,   40,  368,  340,  338,   41,  370,  338,   73,  243,
          296,  339,  641,  371,  372,  297,  371,  372,  373,  374,
          375,  847,  556,  595,  376,  556,  595,  376,  377,  378,
          798,  799,  800,  795,  796,  253,  205,   82,   83,   84,
          383,  801,  797,  332,  580,  505,  123,   74,   53,  273,
          257,  847,  261,   43,  311,   85,   86,   87,   88,   89,
           90,   91,   92,   93,   94,   95,   96,   97,   98,   99,
          100,  101,  102,  103,  104,  105,   54,  248,  673,  674,
          675,  672,  671,  670,  532,-32766,  122,-32766,-32766,-32766,
          273,  532,  245,  207,  847,-32766,   46,  436,-32766,-32766,
        -32766,  622,-32766,-32766,-32766,-32766,-32766,  348,  851,-32766,
          541,   80,  239,-32766,-32766,-32766,  762,  770,-32766,-32766,
          273,-32766,  409,-32766,  770,  119,-32766,   33,-32766,-32766,
        -32766,-32766,  532,  229,  259,  877,-32766,  879,  878,-32766,
        -32766,-32766,  412,-32766,  570,-32766,  383,-32766,  471,  332,
        -32766,   52,  276,  120,-32766,-32766,-32766,-32766,-32766,-32766,
        -32766,  665,-32766,  273,-32766,  770,   51,-32766,  510,  334,
          471,  507,-32766,  532,  240,  124,  847,-32766,   38,  273,
        -32766,-32766,-32766,  665,-32766,  270,-32766,  242,-32766,-32766,
          594,-32766,  100,  101,  102,-32766,-32766,-32766,-32766,-32766,
        -32766,-32766,  650,-32766,  399,-32766,  770,  641,-32766,  196,
          415,  202,  593,-32766,  532,  241,  868,  839,-32766,  349,
          485,-32766,-32766,-32766,  493,-32766, -107,-32766,  118,-32766,
           20,  456,-32766,  840,  476,   27,-32766,-32766,-32766,-32766,
        -32766,-32766,-32766,  117,-32766,  273,-32766,  770,  262,-32766,
          199,  571,  208,  353,-32766,  532,  244,  204,  868,-32766,
          486,  487,-32766,-32766,-32766,  130,-32766,  198,-32766,  815,
        -32766,  228,  197,-32766,   21,  538,  508,-32766,-32766,-32766,
        -32766,-32766,-32766,-32766,  803,-32766,  277,-32766,  770,  203,
        -32766,  131,  301,  662,  526,-32766,  532,-32766,-32766,-32766,
        -32766,  803,  278,-32766,-32766,-32766,  525,-32766,  209,-32766,
          210,-32766,  211,-32766,-32766,-32766,-32766,-32766,-32766,-32766,
        -32766,-32766,-32766,-32766,-32766,  591,-32766,  814,-32766,  770,
          513,-32766,  521,  542,  517,  512,-32766,  532,  103,  104,
          105,-32766,  248,  127,-32766,-32766,-32766,  522,-32766,  660,
        -32766,  248,-32766,  659,  496,-32766,  873,  126,  453,-32766,
        -32766,-32766,-32766,-32766,-32766,-32766,  275,-32766,  274,-32766,
          770,  494,-32766,  489,  809,  357,  483,-32766,  532,  416,
          466,  500,-32766,  548,  533,-32766,-32766,-32766,  763,-32766,
          532,-32766,  868,-32766,  546,  433,-32766,  343,  344,  392,
        -32766,-32766,-32766,-32766,-32766,-32766,-32766,  785,-32766,  393,
        -32766,  770,  404,-32766,  405,  417,  424,  426,-32766,  532,
          432,  407,  401,-32766,  499,  492,-32766,-32766,-32766,  491,
        -32766,  484,-32766,  468,-32766,  443,  395,-32766, -137,  764,
          480,-32766,-32766,-32766,-32766,-32766,-32766,-32766,  269,-32766,
          596,-32766,  770,  458,-32766,  230,  442,  267,-32766,-32766,
          532,  802,  597,   81,-32766,  333,  314,-32766,-32766,-32766,
           42,-32766,  398,-32766,  258,-32766,  260,  268,-32766,  342,
          758,  206,-32766,-32766,-32766,  566,-32766,-32766,-32766,   45,
        -32766,    0,-32766,  770,    0,-32766,  315,    0,    0,    0,
        -32766,  532,  286,  285, -244,-32766,  288,  457,-32766,-32766,
        -32766,  287,-32766,  334,-32766,  567,-32766,  569,  582,-32766,
          516,  583,  515,-32766,-32766,-32766,  564,-32766,-32766,-32766,
          609,-32766,  561,-32766,  770,  572,-32766,  624,   49,  611,
          575,-32766,  532,  616,   48,  617,-32766,  607,  559,-32766,
        -32766,-32766,  565,-32766,  574,-32766,  128,-32766,  200,  201,
        -32766,  129,  519,  518,-32766,-32766,-32766,  568,-32766,-32766,
        -32766,  338,-32766,  524,-32766,  770,-32766,-32766,-32766,  506,
          371,  372,-32766,  509,  514,  792,  793,  875,  614,  556,
          595,  376,-32766,  794,-32766,-32766,-32766,-32766,-32766,-32767,
        -32767,-32767,-32767,  615,  876,  842,  841,  874,-32766,-32766,
          338,  369,  848,  846,  592,  844,  294,  338,  369,  371,
          372,  832,  783,  294,  652,  852,  371,  372,  537,  595,
          376,   29,   30,   32,   34,  537,  595,  376,  439,  798,
          799,  800,  795,  796,  323,   35,   36,  272,   37,   47,
          801,  797,  271,  539,  272,  338,  369,  252,  251,  250,
          540,  294,  336,  238,  371,  372,-32766,-32766,-32766,   75,
           76,  338,   77,  537,  595,  376,   78,-32766,-32766,-32766,
          371,  372,-32766,  235,-32766,-32766,-32766,-32766,-32766,  556,
          595,  376,  272,-32766,  234,-32766,-32766,-32766,-32766,  338,
          226,  225,  338,  195,  133,  132,  338,  444,  371,  372,
          125,  371,  372,   79,  557,  371,  372,  556,  595,  376,
          556,  595,  376,   31,  556,  595,  376,  857,  338,  446,
          503,  741,  786,   19,   25,   28,  298,  371,  372,  497,
          464,  502,  335,  338,    0,  760,  556,  595,  376,  587,
          338,  872,  371,  372,  737,  338,  808,  767,  766,  371,
          372,  556,  595,  376,  371,  372,  829,  791,  556,  595,
          376,  663,  828,  556,  595,  376,  769,  768,  765,  757,
          498,  465,  350,  302,   23,  744,  740,   22,    0,   24,
            0,    0,    0,  782,  831,  843,  845,  474
    );

    private static $yycheck = array(
            2,    3,    4,    5,    6,    8,    9,   10,   61,   11,
           35,   36,   37,   38,   39,   40,   41,   42,   43,   72,
           72,   24,    0,   26,   27,   12,   13,   14,   15,   16,
           17,   18,   19,   20,   21,   22,   23,    8,    9,   41,
           42,    8,    8,    9,   10,   47,   25,   49,   50,   51,
           52,   53,   54,   55,   56,   57,   58,   59,   24,   61,
           62,   63,   64,   50,   51,    7,   68,   69,   70,   71,
           72,    7,   74,    7,   76,   77,   78,   79,    7,   81,
           25,   83,   80,   85,  103,   86,   88,    7,  141,  141,
           92,   93,   94,   95,   95,   97,   98,   95,  100,   30,
          102,  103,  121,  104,  105,    7,  104,  105,  110,  111,
          112,   72,  113,  114,  115,  113,  114,  115,  120,  121,
          122,  123,  124,  125,  126,  127,   12,    8,    9,   10,
          132,  133,  134,  135,  136,  137,   25,  139,   60,  141,
          142,   72,  144,   24,   72,   26,   27,   28,   29,   30,
           31,   32,   33,   34,   35,   36,   37,   38,   39,   40,
           41,   42,   43,   44,   45,   46,   60,   48,  103,  104,
          105,  106,  107,  108,   70,   64,  137,    8,    9,   10,
          141,   70,   30,   12,   72,   74,    7,    7,   77,   78,
           79,  136,   81,   24,   83,   26,   85,   25,   70,   88,
          136,  129,  130,   92,   93,   94,  140,  103,   97,   98,
          141,  100,    7,  102,  103,  137,   64,  139,    8,    9,
           10,  110,   70,   30,  118,   70,   74,   72,   73,   77,
           78,   79,  120,   81,  136,   83,  132,   85,   96,  135,
           88,   60,   60,  137,   92,   93,   94,  136,  137,   97,
           98,  109,  100,  141,  102,  103,   60,   64,   25,  135,
           96,  137,  110,   70,   30,  137,   72,   74,    7,  141,
           77,   78,   79,  109,   81,    7,   83,    7,   85,  103,
          138,   88,   41,   42,   43,   92,   93,   94,  136,  137,
           97,   98,   72,  100,    7,  102,  103,  121,   64,    7,
          118,   12,  138,  110,   70,   30,   75,   72,   74,  137,
            7,   77,   78,   79,    7,   81,  140,   83,  137,   85,
          140,   75,   88,   72,   65,   66,   92,   93,   94,  136,
          137,   97,   98,  137,  100,  141,  102,  103,   75,   64,
           12,  136,   12,  119,  110,   70,   30,   12,   75,   74,
           65,   66,   77,   78,   79,   12,   81,   12,   83,  128,
           85,  141,   12,   88,  140,  136,  137,   92,   93,   94,
          136,  137,   97,   98,  128,  100,  141,  102,  103,   12,
           64,   90,   91,  136,  137,  110,   70,    8,    9,   10,
           74,  128,  141,   77,   78,   79,   25,   81,   12,   83,
           12,   85,   12,   24,   88,   26,   27,   28,   92,   93,
           94,  136,  137,   97,   98,   30,  100,  144,  102,  103,
           25,   64,   25,  136,   25,   25,  110,   70,   44,   45,
           46,   74,   48,   25,   77,   78,   79,   25,   81,  136,
           83,   48,   85,  136,   67,   88,   70,   60,   70,   92,
           93,   94,  136,  137,   97,   98,   75,  100,   75,  102,
          103,   70,   64,   89,   70,   95,   70,  110,   70,   71,
          101,   70,   74,   70,   70,   77,   78,   79,   72,   81,
           70,   83,   75,   85,   70,   70,   88,   70,   70,   70,
           92,   93,   94,  136,  137,   97,   98,  140,  100,   70,
          102,  103,   70,   64,   70,   70,   70,   70,  110,   70,
           70,   87,   79,   74,   72,   72,   77,   78,   79,   72,
           81,   72,   83,   72,   85,   72,   72,   88,   72,   72,
           89,   92,   93,   94,  136,  137,   97,   98,  116,  100,
          114,  102,  103,   99,   64,   87,   87,  116,  103,  110,
           70,  128,  114,  137,   74,  135,  131,   77,   78,   79,
          139,   81,  135,   83,  118,   85,  118,  117,   88,  139,
          142,  119,   92,   93,   94,  136,  137,   97,   98,  119,
          100,   -1,  102,  103,   -1,   64,  131,   -1,   -1,   -1,
          110,   70,  131,  131,  131,   74,  131,  131,   77,   78,
           79,  131,   81,  135,   83,  136,   85,  136,  136,   88,
          136,  136,  136,   92,   93,   94,  136,  137,   97,   98,
          136,  100,  136,  102,  103,  136,   64,  136,  136,  136,
          136,  110,   70,  136,  136,  136,   74,  136,  136,   77,
           78,   79,  136,   81,  136,   83,  137,   85,   41,   42,
           88,  137,  137,  137,   92,   93,   94,  136,  137,   97,
           98,   95,  100,  137,  102,  103,    8,    9,   10,  137,
          104,  105,  110,  137,  137,   68,   69,  138,  138,  113,
          114,  115,   24,   76,   26,   27,   28,   29,   30,   31,
           32,   33,   34,  138,  138,  138,  138,  138,  136,  137,
           95,   96,  138,  138,  138,  138,  101,   95,   96,  104,
          105,  138,  138,  101,  138,  138,  104,  105,  113,  114,
          115,  139,  139,  139,  139,  113,  114,  115,  121,  122,
          123,  124,  125,  126,  127,  139,  139,  132,  139,  139,
          133,  134,  139,  138,  132,   95,   96,  139,  139,  139,
          138,  101,  139,  139,  104,  105,    8,    9,   10,  139,
          139,   95,  139,  113,  114,  115,  139,    8,    9,   10,
          104,  105,   24,  139,   26,   27,   28,   29,   30,  113,
          114,  115,  132,   24,  139,   26,   27,   28,   29,   95,
          139,  139,   95,  139,  139,  139,   95,  140,  104,  105,
          139,  104,  105,  139,  138,  104,  105,  113,  114,  115,
          113,  114,  115,  139,  113,  114,  115,  140,   95,  140,
           82,  140,  140,  140,  140,  140,  140,  104,  105,   84,
          140,  140,  138,   95,   -1,  138,  113,  114,  115,  138,
           95,  143,  104,  105,  140,   95,  140,  140,  140,  104,
          105,  113,  114,  115,  104,  105,  140,  140,  113,  114,
          115,  138,  140,  113,  114,  115,  140,  140,  140,  140,
          140,  140,  140,  140,  140,  140,  140,  140,   -1,  140,
           -1,   -1,   -1,  143,  143,  143,  143,  143
    );

    private static $yybase = array(
            0,  612,  605,  650,  666,  694,    2,   -1,  745,  566,
          697,  738,  701,  723,  750,  750,  750,  750,  750,  400,
          395,  399,  399,  412,  399,  233,   -2,   -2,   -2,  234,
          275,  275,  275,  275,  275,  275,  275,  275,  234,  480,
          439,  521,  357,  111,  193,  316,  152,  562,  562,  562,
          562,  562,  562,  562,  562,  562,  562,  562,  562,  562,
          562,  562,  562,  562,  562,  562,  562,  562,  562,  562,
          562,  562,  562,  562,  562,  562,  562,  562,  562,  562,
          398,  562,  562,  562,  562,  562,  562,  562,  562,  562,
          562,  562,  562,  562,  562,  562,  562,  562,  562,  562,
          562,  562,  562,  562,  562,  562,  562,  562,  562,  562,
          562,  562,  562,  562,  562,  562,  562,  562,  562,  562,
          562,  562,  562,  562,  562,  562,  562,  562,  562,  562,
          562,  562,  562,  562,   55,  508,  506,  469,  471,  472,
          704,  735,  682,  684,  683,  458,  686,  460,  559,  564,
          408,  565,  567,  573,  574,  576,  577,  690,  744,  558,
          557,  685,  691,  119,  119,  119,  119,  119,  119,  119,
          119,  119,  119,   33,   29,  210,  210,  210,  210,  210,
          210,  210,  210,  210,  210,  210,  210,  210,  210,  210,
           34,   34,  169,   -3,  379,  607,  607,  607,  607,  607,
          607,  607,  607,  607,  607,  607,  607,  607,  607,  607,
          607,  607,  759,  748,  658,  658,  658,  658,   13,  -25,
          -25,  -25,  -25,  142,  164,  112,  112,  112,   39,  -53,
           69,  456,  241,  241,  194,  194,  194,  194,  194,  194,
          194,  194,  194,  194,  194,  194,  194,  194,  194,  194,
          176,  176,  176,  263,  231,  273,  -19,  383,  128,  128,
          128,  381,  423,  407,  384,  384,  384,  445,  445,  445,
          445,  445,  124,  416,   72,   72,  155,  509,  514,  461,
          674,   78,  465,  455,  106,  436,  437,  440,  415,  224,
          441,  540,  374,  555,  420,  420,  220,  220,  172,  259,
          285,   55,  247,  287,  463,  181,  489,  434,   64,   98,
          205,  182,  229,  196,  235,  251,  180,  657,  736,  681,
          679,  556,  196,  246,  196,  196,  677,  737,  303,  307,
          739,   66,  410,  410,  410,  444,  385,  421,  385,  454,
          385,  585,  432,  431,  422,  261,  450,  385,  476,  474,
          369,  444,  585,  385,  385,  292,  449,  385,  385,   22,
          620,  621,   21,  623,  600,  627,  430,  664,  419,  429,
          532,  426,  438,  645,  634,  614,  417,  652,  582,  427,
          418,  462,  584,  468,  393,  446,  583,  470,  446,  425,
          448,  433,  475,  350,  424,  345,  416,  428,  404,  435,
          610,  661,  498,   80,  328,  609,  459,  414,  446,  453,
          446,  536,  651,  446,  729,  376,  387,  289,  393,  393,
          393,  596,  728,  179,  597,  743,  599,  742,  727,  726,
          741,  722,  597,  599,  717,  740,  378,  732,   58,  654,
          463,  466,  403,  367,  494,  268,  343,  446,  698,  446,
          446,  537,  492,  335,  731,  451,  423,  394,  603,  446,
          716,  268,  708,  707,  486,  516,  613,  515,  114,  452,
          706,  396,  370,  446,  539,  446,  656,  491,  734,  493,
          497,  447,  443,  171,  330,  391,  655,  397,  377,  499,
          457,  386,  730,  442,  388,  401,  502,  484,  526,  390,
          608,  406,  371,  501,  733,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,    0,    0,    0,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,  119,  119,  119,  119,  119,  119,  119,  119,  119,
          119,  119,  119,  119,  119,  119,  119,  119,  119,  119,
          119,  119,  119,  119,  119,  119,  119,  119,  119,  119,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
          119,  119,  119,  119,  119,  119,  119,  119,  119,  119,
          119,  119,  119,  119,  119,  119,  119,  119,  119,  119,
          119,  119,  104,  104,  104,  104,  104,  104,  104,  104,
          104,  104,  104,  104,  104,  104,  104,  104,  104,  119,
          119,  119,  119,  119,  119,  446,  384,  384,  384,  384,
           65,   65,  104,  104,  104,  104,  104,  104,   65,  384,
          384,  104,  104,  104,  104,  104,  104,  104,  104,  104,
          104,  104,  104,  104,  104,  104,  104,  104,  104,  104,
           72,   72,   72,  104,   72,  -52,  -52,  -52,   72,   72,
           72,    0,    0,    0,  104,  104,  104,  104,  104,  410,
          -52,    0,    0,    0,  -52,  -52,  196,  181,    0,  196,
          196,    0,  235,  251,  235,  251,  446,  291,  291,  291,
          291,  410,  410,    0,    0,    0,    0,    0,    0,    0,
            0,  583,    0,   80,  610,    0,    0,    0,    0,    0,
            0,    0,    0,    0,  270,  270,  446,   71,  446,    0,
            0,    0,    0,   71,  446,    0,    0,  446
    );

    private static $yydefault = array(
            3,32767,32767,    1,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,  100,   93,  105,   92,  101,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,  332,
          116,  116,  116,  116,  116,  116,  116,  116,  292,32767,
        32767,32767,32767,32767,32767,32767,32767,  157,  157,  157,
        32767,  322,  322,  322,  322,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,  337,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,  215,  216,  218,  219,  156,  117,  323,
          155,  336,  119,  183,  185,  232,  184,  161,  166,  167,
          168,  169,  170,  171,  172,  173,  174,  175,  176,  160,
          212,  211,  181,  182,  186,  289,  292,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,  188,  187,  203,  204,  201,  202,  159,  205,
          206,  207,  208,  139,  139,  331,  331,  331,32767,32767,
        32767,  140,  195,  196,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,  252,  252,  252,
          112,  112,  112,32767,32767,32767,  112,  260,32767,32767,
        32767,32767,32767,  262,  190,  191,  189,32767,32767,32767,
        32767,32767,32767,32767,  261,32767,32767,32767,32767,  306,
          311,  300,  306,  306,  250,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,  102,
          104,32767,32767,32767,  285,  311,32767,32767,32767,32767,
        32767,  344,32767,  307,32767,32767,32767,32767,32767,32767,
        32767,32767,  306,32767,  309,  310,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,   63,  257,   63,  243,
           63,  263,32767,   73,   71,  291,   75,   63,   91,   91,
          234,   54,  263,   63,   63,  291,32767,   63,   63,32767,
        32767,32767,    5,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,    4,
        32767,32767,  308,32767,  199,  178,  244,32767,  180,  248,
          251,32767,32767,32767,   18,  128,32767,32767,32767,32767,
        32767,32767,32767,  158,32767,32767,   20,32767,  124,32767,
           61,32767,32767,  329,32767,32767,  283,32767,  192,  193,
          194,  303,32767,  115,  353,32767,  354,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,  106,32767,
          278,32767,32767,  126,32767,   74,32767,  339,32767,  162,
          118,32767,32767,32767,32767,32767,32767,32767,32767,   62,
        32767,   76,32767,32767,32767,32767,32767,32767,  108,  296,
        32767,32767,32767,  338,32767,  120,32767,32767,32767,32767,
        32767,32767,32767,32767,  151,32767,32767,32767,32767,32767,
        32767,  110,32767,32767,32767,32767,32767,32767,32767,  149,
        32767,32767,32767,32767,32767,   25,   25,    3,    3,  131,
           25,   98,   25,   25,  131,   91,   91,   25,   25,   25,
           25,   25,   25,   25,   25,   25,   25
    );

    private static $yygoto = array(
          147,  168,  168,  168,  168,  168,  168,  168,  168,  147,
          136,  137,  138,  142,  150,  177,  171,  172,  167,  167,
          167,  167,  169,  169,  169,  169,  163,  164,  165,  166,
          175,  724,  725,  384,  727,  747,  748,  749,  750,  751,
          752,  753,  755,  692,  139,  140,  141,  143,  144,  145,
          146,  148,  149,  173,  174,  176,  192,  193,  194,  212,
          213,  214,  215,  216,  217,  219,  220,  221,  222,  232,
          233,  264,  265,  266,  418,  419,  420,  178,  179,  180,
          181,  182,  183,  184,  185,  186,  187,  188,  151,  152,
          153,  154,  170,  155,  190,  156,  157,  158,  191,  159,
          160,  189,  134,  161,  162,  440,  440,  440,  440,  440,
          440,  440,  440,  440,  440,  440,  440,  440,  440,  440,
          440,  440,  428,  429,  431,  434,  460,  462,  463,  536,
          536,  536,  535,  535,  535,  386,  386,  386,  386,  386,
          386,  312,  452,  478,  386,  386,  386,  386,  386,  386,
          386,  386,  386,  386,  386,  386,  386,  771,  771,  771,
          640,  640,  640,  394,  394,  861,  640,  427,  430,  435,
          305,  305,  305,  390,  390,  390,  306,  604,  604,  599,
          605,  482,  441,  441,  441,  441,  441,  441,  441,  441,
          441,  441,  441,  441,  441,  441,  441,  441,  441,  867,
          867,  774,  406,  773,  577,  263,  578,  870,  867,  255,
          291,  820,  387,  387,  387,  387,  387,  387,  326,  870,
          870,  387,  387,  387,  387,  387,  387,  387,  387,  387,
          387,  387,  387,  387,  389,  389,  389,  282,  282,  282,
          282,  282,  282,  736,  352,  854,  282,  282,  282,  282,
          282,  282,  282,  282,  282,  282,  282,  282,  282,  283,
          283,  283,    5,  669,  454,  504,   14,  354,    6,    7,
          322,  322,  322,    8,    9,   10,   15,   16,   11,   17,
           12,   18,   13,  781,  780,  313,  835,  835,  835,  324,
          325,  413,  413,  413,  408,  449,  289,  853,  853,  853,
          410,  410,  385,  388,  319,  321,  447,  450,  459,  327,
          473,  475,  330,  804,  804,  804,  804,  804,  804,  804,
          804,  804,  804,  804,  804,  804,  804,  804,  804,  804,
          550,  656,  612,  806,  807,  549,  654,  613,  636,  822,
          681,  679,  638,  680,  677,  534,  534,  534,    1,    2,
          461,  318,  543,  648,  520,  586,  817,  690,  224,    0,
            0,    0,    0,  623,  610,  608,  608,  606,  608,  511,
          391,  630,  626,  307,    0,  400,  292,  293,    0,    0,
            0,    0,  455,    0,    0,    0,    0,    0,  246,  481,
            0,    0,  495,  501
    );

    private static $yygcheck = array(
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   35,   35,   35,   35,   35,
           35,   35,   35,   35,   35,   35,   35,   35,   35,   35,
           35,   35,   47,   47,   47,   47,   47,   47,   47,    8,
            8,    8,    7,    7,    7,   35,   35,   35,   35,   35,
           35,    4,   21,   21,   35,   35,   35,   35,   35,   35,
           35,   35,   35,   35,   35,   35,   35,   35,   35,   35,
           35,   35,   35,    4,    4,   88,   35,   76,   76,   76,
           70,   70,   70,   74,   74,   74,   26,   35,   35,   35,
           35,   35,   68,   68,   68,   68,   68,   68,   68,   68,
           68,   68,   68,   68,   68,   68,   68,   68,   68,   89,
           89,    4,    4,    4,   29,   77,   29,   89,   89,   77,
           43,   83,   68,   68,   68,   68,   68,   68,   58,   89,
           89,   68,   68,   68,   68,   68,   68,   68,   68,   68,
           68,   68,   68,   68,   68,   68,   68,   69,   69,   69,
           69,   69,   69,   59,   59,   86,   69,   69,   69,   69,
           69,   69,   69,   69,   69,   69,   69,   69,   69,   69,
           69,   69,   13,   57,   36,   36,   13,   46,   13,   13,
           69,   69,   69,   13,   13,   13,   13,   13,   13,   13,
           13,   13,   13,   75,   75,   69,   71,   71,   71,   69,
           69,   28,   28,   28,   28,   28,   28,   71,   71,   71,
           28,   28,   28,   28,   28,   28,   28,   28,   28,   28,
           28,   28,   28,   78,   78,   78,   78,   78,   78,   78,
           78,   78,   78,   78,   78,   78,   78,   78,   78,   78,
           12,   12,   12,   12,   12,   12,   12,   12,   12,   12,
           12,   12,   12,   12,   12,    6,    6,    6,    2,    2,
           42,   27,   11,   49,   44,   34,   82,   60,   40,   -1,
           -1,   -1,   -1,    6,    6,    6,    6,    6,    6,    6,
            6,    6,    6,   30,   -1,   30,   43,   43,   -1,   -1,
           -1,   -1,   30,   -1,   -1,   -1,   -1,   -1,   30,   30,
           -1,   -1,   30,   30
    );

    private static $yygbase = array(
            0,    0, -159,    0, -131,    0,  344,  131,  128,    0,
            0,   57,  133, -244,    0,  -29,    0,    0,    0,    0,
            0,   94,    0,    0,    0,    0,  126,  116,   66,  182,
           35,    0,    0,    0,    4,  -90,   13,    0,    0,    0,
         -156,    0,   82, -139,   53,    0,   11,   91,    0,   56,
            0,    0,    0,    0,    0,    0,    0,   32,   -8,   -5,
            5,    0,    0,    0,    0,    0,    0,    0,  -13,   12,
          -77,   39,    0,    0,  -74,   24,  115,  -52,  118,    0,
            0,    0,    1,   15,    0,    0,   18,    0,  127,  -55,
            0
    );

    private static $yygdefault = array(
        -32768,  359,    3,  529,  772,  379,  553,  554,  555,  308,
          303,  544,  469,    4,  551,  135,  299,  558,  300,  488,
          560,  402,  562,  563,  309,  310,  403,  317,  218,  576,
          490,  316,  579,  351,  585,  304,  437,  380,  346,  451,
          223,  411,  445,  290,  523,  438,  347,  422,  423,  649,
          657,  356,  329,  328,  472,  661,  231,  668,  320,  341,
          691,  754,  756,  414,  397,  467,  331,  826,  381,  279,
          280,  382,  776,  284,  825,  421,  425,  254,  813,  470,
          811,  355,  860,  821,  824,  281,  855,  345,  862,  869,
          448
    );

    private static $yylhs = array(
            0,    1,    2,    2,    4,    5,    5,    3,    3,    3,
            3,    3,    3,    3,    3,    3,    9,    9,   11,   11,
           11,   11,   10,   10,   13,   13,   14,   14,   14,   14,
            6,    6,    6,    6,    6,    6,    6,    6,    6,    6,
            6,    6,    6,    6,    6,    6,    6,    6,    6,    6,
            6,    6,    6,    6,    6,    6,    6,    6,   33,   33,
           34,   27,   27,   30,   30,    7,    8,    8,   37,   37,
           37,   38,   38,   41,   41,   39,   39,   42,   42,   22,
           22,   29,   29,   32,   32,   31,   31,   23,   23,   23,
           23,   43,   43,   43,   44,   44,   20,   20,   16,   16,
           18,   18,   17,   17,   19,   19,   36,   36,   45,   45,
           45,   45,   46,   46,   46,   47,   47,   48,   48,   48,
           48,   24,   24,   49,   49,   49,   25,   25,   25,   25,
           40,   40,   50,   50,   50,   55,   55,   51,   51,   54,
           54,   56,   56,   57,   57,   57,   57,   57,   57,   52,
           52,   52,   52,   53,   53,   26,   26,   21,   21,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   65,   65,   66,   66,   67,   67,
           67,   67,   67,   68,   68,   35,   35,   35,   59,   59,
           72,   72,   73,   73,   73,   73,   73,   61,   61,   61,
           64,   64,   64,   60,   60,   78,   78,   78,   78,   78,
           78,   78,   78,   78,   78,   78,   78,   12,   12,   12,
           12,   12,   12,   62,   62,   62,   62,   62,   62,   79,
           79,   82,   82,   81,   81,   83,   83,   28,   28,   28,
           84,   84,   84,   85,   85,   85,   71,   71,   74,   74,
           74,   74,   70,   70,   70,   70,   70,   70,   69,   69,
           69,   69,   76,   76,   75,   75,   75,   58,   58,   86,
           86,   86,   63,   63,   87,   87,   88,   88,   88,   88,
           77,   77,   77,   77,   89,   89,   89,   89,   89,   89,
           90,   90,   90,   80,   80
    );

    private static $yylen = array(
            1,    1,    2,    0,    1,    1,    3,    1,    1,    1,
            1,    3,    5,    4,    3,    2,    3,    1,    1,    3,
            2,    4,    5,    4,    2,    0,    1,    1,    1,    1,
            3,    7,   10,    5,    7,    9,    5,    2,    3,    2,
            3,    2,    3,    3,    3,    3,    1,    2,    5,    7,
            8,   10,    5,    1,    5,    3,    3,    2,    1,    2,
            8,    1,    3,    0,    1,    9,    7,    6,    1,    2,
            2,    0,    2,    0,    2,    0,    2,    1,    3,    1,
            4,    1,    4,    1,    4,    3,    5,    3,    4,    4,
            5,    0,    5,    4,    1,    1,    1,    4,    0,    6,
            0,    7,    0,    2,    0,    3,    1,    0,    3,    5,
            5,    7,    0,    1,    1,    1,    0,    1,    2,    3,
            4,    3,    1,    1,    2,    4,    3,    5,    1,    3,
            2,    0,    3,    2,    8,    1,    3,    1,    1,    0,
            1,    1,    2,    1,    1,    1,    1,    1,    1,    3,
            5,    1,    3,    5,    4,    3,    1,    0,    1,    1,
            6,    3,    4,    6,    3,    2,    3,    3,    3,    3,
            3,    3,    3,    3,    3,    3,    3,    2,    2,    2,
            2,    3,    3,    3,    3,    3,    3,    3,    3,    3,
            3,    3,    3,    3,    3,    3,    3,    2,    2,    2,
            2,    3,    3,    3,    3,    3,    3,    3,    3,    3,
            3,    5,    4,    4,    4,    2,    2,    4,    2,    2,
            2,    2,    2,    2,    2,    2,    2,    2,    2,    1,
            4,    3,    2,    9,    0,    4,    4,    2,    4,    6,
            6,    4,    4,    1,    1,    1,    3,    2,    1,    1,
            1,    1,    0,    3,    3,    4,    4,    0,    2,    3,
            0,    1,    1,    0,    3,    1,    1,    1,    1,    1,
            1,    1,    1,    1,    1,    3,    2,    1,    1,    2,
            2,    4,    3,    1,    1,    1,    1,    3,    3,    0,
            2,    0,    1,    3,    1,    3,    1,    1,    1,    1,
            1,    4,    6,    3,    4,    4,    1,    2,    1,    4,
            4,    1,    3,    3,    6,    6,    4,    4,    4,    4,
            1,    4,    0,    1,    1,    3,    1,    3,    1,    1,
            4,    0,    0,    2,    3,    1,    3,    1,    4,    2,
            2,    2,    1,    2,    1,    4,    3,    3,    6,    3,
            1,    1,    1,    3,    3
    );

    /* Debug Mode */
    protected function yyprintln($msg) {
        echo $msg, "\n";
    }

    private function YYTRACE_NEWSTATE($state, $sym) {
        $this->yyprintln(
            '% State ' . $state
          . ', Lookahead ' . ($sym < 0 ? '--none--' : self::$yyterminals[$sym])
        );
    }

    private function YYTRACE_READ($sym) {
        $this->yyprintln('% Reading ' . self::$yyterminals[$sym]);
    }

    private function YYTRACE_SHIFT($sym) {
        $this->yyprintln('% Shift ' . self::$yyterminals[$sym]);
    }

    private function YYTRACE_ACCEPT() {
        $this->yyprintln('% Accepted.');
    }

    private function YYTRACE_REDUCE($n) {
        $this->yyprintln('% Reduce by (' . $n . ') ' . self::$yyproduction[$n]);
    }

    private function YYTRACE_POP($state) {
        $this->yyprintln('% Recovering, uncovers state ' . $state);
    }

    private function YYTRACE_DISCARD($sym) {
        $this->yyprintln('% Discard ' . self::$yyterminals[$sym]);
    }

    protected $yyval;
    protected $yyastk;
    protected $yysp;
    protected $yyaccept;
    protected $lexer;

    /**
     * Parses PHP code into a node tree and prints out debugging information.
     *
     * @param PHPParser_Lexer $lexer A lexer
     *
     * @return array Array of statements
     */
    public function parse(PHPParser_Lexer $lexer) {
        $this->lexer  = $lexer;

        $this->yysp   = 0;                   // Stack pos
        $yysstk       = array($yystate = 0); // State stack
        $this->yyastk = array();             // AST   stack (?)
        $yylstk       = array($yyline  = 1); // Line  stack
        $yydstk       = array($yyDC = null); // Doc comment stack

        $yychar       = -1;

        for (;;) {
            $this->YYTRACE_NEWSTATE($yystate, $yychar);
            if (self::$yybase[$yystate] == 0) {
                $yyn = self::$yydefault[$yystate];
            } else {
                if ($yychar < 0) {
                    if (($yychar = $lexer->lex($yylval, $yyline, $yyDC)) < 0)
                        $yychar = 0;
                    $yychar = $yychar < self::YYMAXLEX ?
                        self::$yytranslate[$yychar] : self::YYBADCH;
                    $yylstk[$this->yysp] = $yyline;
                    $yydstk[$this->yysp] = $yyDC;
                    $this->YYTRACE_READ($yychar);
                }
                if ((($yyn = self::$yybase[$yystate] + $yychar) >= 0
                     && $yyn < self::YYLAST && self::$yycheck[$yyn] == $yychar
                     || ($yystate < self::YY2TBLSTATE
                        && ($yyn = self::$yybase[$yystate + self::YYNLSTATES]
                            + $yychar) >= 0
                        && $yyn < self::YYLAST
                        && self::$yycheck[$yyn] == $yychar))
                    && ($yyn = self::$yyaction[$yyn]) != self::YYDEFAULT) {
                    /*
                     * >= YYNLSTATE: shift and reduce
                     * > 0: shift
                     * = 0: accept
                     * < 0: reduce
                     * = -YYUNEXPECTED: error
                     */
                    if ($yyn > 0) {
                        /* shift */
                        $this->YYTRACE_SHIFT($yychar);
                        ++$this->yysp;

                        $yysstk[$this->yysp]       = $yystate = $yyn;
                        $this->yyastk[$this->yysp] = $yylval;
                        $yylstk[$this->yysp]       = $yyline;
                        $yydstk[$this->yysp]       = $yyDC;
                        $yychar = -1;

                        if ($yyn < self::YYNLSTATES)
                            continue;

                        /* $yyn >= YYNLSTATES means shift-and-reduce */
                        $yyn -= self::YYNLSTATES;
                    } else {
                        $yyn = -$yyn;
                    }
                } else {
                    $yyn = self::$yydefault[$yystate];
                }
            }

            for (;;) {
                /* reduce/error */
                if ($yyn == 0) {
                    /* accept */
                    $this->YYTRACE_ACCEPT();
                    return $this->yyval;
                } elseif ($yyn != self::YYUNEXPECTED) {
                    /* reduce */
                    $this->YYTRACE_REDUCE($yyn);
                    try {
                        $this->{'yyn' . $yyn}(
                            $yylstk[$this->yysp - self::$yylen[$yyn]],
                            $yydstk[$this->yysp - self::$yylen[$yyn]]
                        );
                    } catch (PHPParser_Error $e) {
                        $e->setRawLine($yyline);

                        throw $e;
                    }

                    /* Goto - shift nonterminal */
                    $this->yysp -= self::$yylen[$yyn];
                    $yyn = self::$yylhs[$yyn];
                    if (($yyp = self::$yygbase[$yyn] + $yysstk[$this->yysp]) >= 0
                         && $yyp < self::YYGLAST
                         && self::$yygcheck[$yyp] == $yyn) {
                        $yystate = self::$yygoto[$yyp];
                    } else {
                        $yystate = self::$yygdefault[$yyn];
                    }

                    ++$this->yysp;

                    $yysstk[$this->yysp] = $yystate;
                    $this->yyastk[$this->yysp] = $this->yyval;
                    $yylstk[$this->yysp]       = $yyline;
                    $yydstk[$this->yysp]       = $yyDC;
                } else {
                    /* error */
                    throw new PHPParser_Error(
                        'Unexpected token ' . self::$yyterminals[$yychar],
                        $yyline
                    );
                }

                if ($yystate < self::YYNLSTATES)
                    break;
                /* >= YYNLSTATES means shift-and-reduce */
                $yyn = $yystate - self::YYNLSTATES;
            }
        }
    }

    private function yyn0() {
        $this->yyval = $this->yyastk[$this->yysp];
    }

    private function yyn1($line, $docComment) {
         $this->yyval = PHPParser_Node_Stmt_Namespace::postprocess($this->yyastk[$this->yysp-(1-1)]); 
    }

    private function yyn2($line, $docComment) {
         if (is_array($this->yyastk[$this->yysp-(2-2)])) { $this->yyval = array_merge($this->yyastk[$this->yysp-(2-1)], $this->yyastk[$this->yysp-(2-2)]); } else { $this->yyastk[$this->yysp-(2-1)][] = $this->yyastk[$this->yysp-(2-2)]; $this->yyval = $this->yyastk[$this->yysp-(2-1)]; }; 
    }

    private function yyn3($line, $docComment) {
         $this->yyval = array(); 
    }

    private function yyn4($line, $docComment) {
         $this->yyval = new PHPParser_Node_Name($this->yyastk[$this->yysp-(1-1)], PHPParser_Node_Name::NORMAL, $line, $docComment); 
    }

    private function yyn5($line, $docComment) {
         $this->yyval = array($this->yyastk[$this->yysp-(1-1)]); 
    }

    private function yyn6($line, $docComment) {
         $this->yyastk[$this->yysp-(3-1)][] = $this->yyastk[$this->yysp-(3-3)]; $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn7($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn8($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn9($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn10($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_HaltCompiler(array('remaining' => $this->lexer->handleHaltCompiler()), $line, $docComment); 
    }

    private function yyn11($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Namespace(array('name' => $this->yyastk[$this->yysp-(3-2)], 'stmts' => null), $line, $docComment); 
    }

    private function yyn12($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Namespace(array('name' => $this->yyastk[$this->yysp-(5-2)], 'stmts' => $this->yyastk[$this->yysp-(5-4)]), $line, $docComment); 
    }

    private function yyn13($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Namespace(array('name' => null, 'stmts' => $this->yyastk[$this->yysp-(4-3)]), $line, $docComment); 
    }

    private function yyn14($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Use(array('uses' => $this->yyastk[$this->yysp-(3-2)]), $line, $docComment); 
    }

    private function yyn15($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Const(array('consts' => $this->yyastk[$this->yysp-(2-1)]), $line, $docComment); 
    }

    private function yyn16($line, $docComment) {
         $this->yyastk[$this->yysp-(3-1)][] = $this->yyastk[$this->yysp-(3-3)]; $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn17($line, $docComment) {
         $this->yyval = array($this->yyastk[$this->yysp-(1-1)]); 
    }

    private function yyn18($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_UseUse(array('name' => $this->yyastk[$this->yysp-(1-1)], 'alias' => null), $line, $docComment); 
    }

    private function yyn19($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_UseUse(array('name' => $this->yyastk[$this->yysp-(3-1)], 'alias' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn20($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_UseUse(array('name' => $this->yyastk[$this->yysp-(2-2)], 'alias' => null), $line, $docComment); 
    }

    private function yyn21($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_UseUse(array('name' => $this->yyastk[$this->yysp-(4-2)], 'alias' => $this->yyastk[$this->yysp-(4-4)]), $line, $docComment); 
    }

    private function yyn22($line, $docComment) {
         $this->yyastk[$this->yysp-(5-1)][] = new PHPParser_Node_Stmt_ConstConst(array('name' => $this->yyastk[$this->yysp-(5-3)], 'value' => $this->yyastk[$this->yysp-(5-5)]), $line, $docComment); $this->yyval = $this->yyastk[$this->yysp-(5-1)]; 
    }

    private function yyn23($line, $docComment) {
         $this->yyval = array(new PHPParser_Node_Stmt_ConstConst(array('name' => $this->yyastk[$this->yysp-(4-2)], 'value' => $this->yyastk[$this->yysp-(4-4)]), $line, $docComment)); 
    }

    private function yyn24($line, $docComment) {
         if (is_array($this->yyastk[$this->yysp-(2-2)])) { $this->yyval = array_merge($this->yyastk[$this->yysp-(2-1)], $this->yyastk[$this->yysp-(2-2)]); } else { $this->yyastk[$this->yysp-(2-1)][] = $this->yyastk[$this->yysp-(2-2)]; $this->yyval = $this->yyastk[$this->yysp-(2-1)]; }; 
    }

    private function yyn25($line, $docComment) {
         $this->yyval = array(); 
    }

    private function yyn26($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn27($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn28($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn29($line, $docComment) {
         throw new PHPParser_Error('__halt_compiler() can only be used from the outermost scope'); 
    }

    private function yyn30($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(3-2)]; 
    }

    private function yyn31($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_If(array('cond' => $this->yyastk[$this->yysp-(7-3)], 'stmts' => is_array($this->yyastk[$this->yysp-(7-5)]) ? $this->yyastk[$this->yysp-(7-5)] : array($this->yyastk[$this->yysp-(7-5)]), 'elseifList' => $this->yyastk[$this->yysp-(7-6)], 'else' => $this->yyastk[$this->yysp-(7-7)]), $line, $docComment); 
    }

    private function yyn32($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_If(array('cond' => $this->yyastk[$this->yysp-(10-3)], 'stmts' => $this->yyastk[$this->yysp-(10-6)], 'elseifList' => $this->yyastk[$this->yysp-(10-7)], 'else' => $this->yyastk[$this->yysp-(10-8)]), $line, $docComment); 
    }

    private function yyn33($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_While(array('cond' => $this->yyastk[$this->yysp-(5-3)], 'stmts' => is_array($this->yyastk[$this->yysp-(5-5)]) ? $this->yyastk[$this->yysp-(5-5)] : array($this->yyastk[$this->yysp-(5-5)])), $line, $docComment); 
    }

    private function yyn34($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Do(array('stmts' => is_array($this->yyastk[$this->yysp-(7-2)]) ? $this->yyastk[$this->yysp-(7-2)] : array($this->yyastk[$this->yysp-(7-2)]), 'cond' => $this->yyastk[$this->yysp-(7-5)]), $line, $docComment); 
    }

    private function yyn35($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_For(array('init' => $this->yyastk[$this->yysp-(9-3)], 'cond' => $this->yyastk[$this->yysp-(9-5)], 'loop' => $this->yyastk[$this->yysp-(9-7)], 'stmts' => is_array($this->yyastk[$this->yysp-(9-9)]) ? $this->yyastk[$this->yysp-(9-9)] : array($this->yyastk[$this->yysp-(9-9)])), $line, $docComment); 
    }

    private function yyn36($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Switch(array('cond' => $this->yyastk[$this->yysp-(5-3)], 'caseList' => $this->yyastk[$this->yysp-(5-5)]), $line, $docComment); 
    }

    private function yyn37($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Break(array('num' => null), $line, $docComment); 
    }

    private function yyn38($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Break(array('num' => $this->yyastk[$this->yysp-(3-2)]), $line, $docComment); 
    }

    private function yyn39($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Continue(array('num' => null), $line, $docComment); 
    }

    private function yyn40($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Continue(array('num' => $this->yyastk[$this->yysp-(3-2)]), $line, $docComment); 
    }

    private function yyn41($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Return(array('expr' => null), $line, $docComment); 
    }

    private function yyn42($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Return(array('expr' => $this->yyastk[$this->yysp-(3-2)]), $line, $docComment); 
    }

    private function yyn43($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Global(array('vars' => $this->yyastk[$this->yysp-(3-2)]), $line, $docComment); 
    }

    private function yyn44($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Static(array('vars' => $this->yyastk[$this->yysp-(3-2)]), $line, $docComment); 
    }

    private function yyn45($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Echo(array('exprs' => $this->yyastk[$this->yysp-(3-2)]), $line, $docComment); 
    }

    private function yyn46($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_InlineHTML(array('value' => $this->yyastk[$this->yysp-(1-1)]), $line, $docComment); 
    }

    private function yyn47($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(2-1)]; 
    }

    private function yyn48($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Unset(array('vars' => $this->yyastk[$this->yysp-(5-3)]), $line, $docComment); 
    }

    private function yyn49($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Foreach(array('expr' => $this->yyastk[$this->yysp-(7-3)], 'keyVar' => null, 'byRef' => false, 'valueVar' => $this->yyastk[$this->yysp-(7-5)], 'stmts' => is_array($this->yyastk[$this->yysp-(7-7)]) ? $this->yyastk[$this->yysp-(7-7)] : array($this->yyastk[$this->yysp-(7-7)])), $line, $docComment); 
    }

    private function yyn50($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Foreach(array('expr' => $this->yyastk[$this->yysp-(8-3)], 'keyVar' => null, 'byRef' => true, 'valueVar' => $this->yyastk[$this->yysp-(8-6)], 'stmts' => is_array($this->yyastk[$this->yysp-(8-8)]) ? $this->yyastk[$this->yysp-(8-8)] : array($this->yyastk[$this->yysp-(8-8)])), $line, $docComment); 
    }

    private function yyn51($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Foreach(array('expr' => $this->yyastk[$this->yysp-(10-3)], 'keyVar' => $this->yyastk[$this->yysp-(10-5)], 'byRef' => $this->yyastk[$this->yysp-(10-7)], 'valueVar' => $this->yyastk[$this->yysp-(10-8)], 'stmts' => is_array($this->yyastk[$this->yysp-(10-10)]) ? $this->yyastk[$this->yysp-(10-10)] : array($this->yyastk[$this->yysp-(10-10)])), $line, $docComment); 
    }

    private function yyn52($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Declare(array('declares' => $this->yyastk[$this->yysp-(5-3)], 'stmts' => is_array($this->yyastk[$this->yysp-(5-5)]) ? $this->yyastk[$this->yysp-(5-5)] : array($this->yyastk[$this->yysp-(5-5)])), $line, $docComment); 
    }

    private function yyn53($line, $docComment) {
         $this->yyval = array(); /* means: no statement */ 
    }

    private function yyn54($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_TryCatch(array('stmts' => $this->yyastk[$this->yysp-(5-3)], 'catches' => $this->yyastk[$this->yysp-(5-5)]), $line, $docComment); 
    }

    private function yyn55($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Throw(array('expr' => $this->yyastk[$this->yysp-(3-2)]), $line, $docComment); 
    }

    private function yyn56($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Goto(array('name' => $this->yyastk[$this->yysp-(3-2)]), $line, $docComment); 
    }

    private function yyn57($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Label(array('name' => $this->yyastk[$this->yysp-(2-1)]), $line, $docComment); 
    }

    private function yyn58($line, $docComment) {
         $this->yyval = array($this->yyastk[$this->yysp-(1-1)]); 
    }

    private function yyn59($line, $docComment) {
         $this->yyastk[$this->yysp-(2-1)][] = $this->yyastk[$this->yysp-(2-2)]; $this->yyval = $this->yyastk[$this->yysp-(2-1)]; 
    }

    private function yyn60($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Catch(array('type' => $this->yyastk[$this->yysp-(8-3)], 'var' => substr($this->yyastk[$this->yysp-(8-4)], 1), 'stmts' => $this->yyastk[$this->yysp-(8-7)]), $line, $docComment); 
    }

    private function yyn61($line, $docComment) {
         $this->yyval = array($this->yyastk[$this->yysp-(1-1)]); 
    }

    private function yyn62($line, $docComment) {
         $this->yyastk[$this->yysp-(3-1)][] = $this->yyastk[$this->yysp-(3-3)]; $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn63($line, $docComment) {
         $this->yyval = false; 
    }

    private function yyn64($line, $docComment) {
         $this->yyval = true; 
    }

    private function yyn65($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Func(array('byRef' => $this->yyastk[$this->yysp-(9-2)], 'name' => $this->yyastk[$this->yysp-(9-3)], 'params' => $this->yyastk[$this->yysp-(9-5)], 'stmts' => $this->yyastk[$this->yysp-(9-8)]), $line, $docComment); 
    }

    private function yyn66($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Class(array('type' => $this->yyastk[$this->yysp-(7-1)], 'name' => $this->yyastk[$this->yysp-(7-2)], 'extends' => $this->yyastk[$this->yysp-(7-3)], 'implements' => $this->yyastk[$this->yysp-(7-4)], 'stmts' => $this->yyastk[$this->yysp-(7-6)]), $line, $docComment); 
    }

    private function yyn67($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Interface(array('name' => $this->yyastk[$this->yysp-(6-2)], 'extends' => $this->yyastk[$this->yysp-(6-3)], 'stmts' => $this->yyastk[$this->yysp-(6-5)]), $line, $docComment); 
    }

    private function yyn68($line, $docComment) {
         $this->yyval = 0; 
    }

    private function yyn69($line, $docComment) {
         $this->yyval = PHPParser_Node_Stmt_Class::MODIFIER_ABSTRACT; 
    }

    private function yyn70($line, $docComment) {
         $this->yyval = PHPParser_Node_Stmt_Class::MODIFIER_FINAL; 
    }

    private function yyn71($line, $docComment) {
         $this->yyval = null; 
    }

    private function yyn72($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(2-2)]; 
    }

    private function yyn73($line, $docComment) {
         $this->yyval = array(); 
    }

    private function yyn74($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(2-2)]; 
    }

    private function yyn75($line, $docComment) {
         $this->yyval = array(); 
    }

    private function yyn76($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(2-2)]; 
    }

    private function yyn77($line, $docComment) {
         $this->yyval = array($this->yyastk[$this->yysp-(1-1)]); 
    }

    private function yyn78($line, $docComment) {
         $this->yyastk[$this->yysp-(3-1)][] = $this->yyastk[$this->yysp-(3-3)]; $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn79($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn80($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(4-2)]; 
    }

    private function yyn81($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn82($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(4-2)]; 
    }

    private function yyn83($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn84($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(4-2)]; 
    }

    private function yyn85($line, $docComment) {
         $this->yyval = array(new PHPParser_Node_Stmt_DeclareDeclare(array('key' => $this->yyastk[$this->yysp-(3-1)], 'value' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment)); 
    }

    private function yyn86($line, $docComment) {
         $this->yyastk[$this->yysp-(5-1)][] = new PHPParser_Node_Stmt_DeclareDeclare(array('key' => $this->yyastk[$this->yysp-(5-3)], 'value' => $this->yyastk[$this->yysp-(5-5)]), $line, $docComment); $this->yyval = $this->yyastk[$this->yysp-(5-1)]; 
    }

    private function yyn87($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(3-2)]; 
    }

    private function yyn88($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(4-3)]; 
    }

    private function yyn89($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(4-2)]; 
    }

    private function yyn90($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(5-3)]; 
    }

    private function yyn91($line, $docComment) {
         $this->yyval = array(); 
    }

    private function yyn92($line, $docComment) {
         $this->yyastk[$this->yysp-(5-1)][] = new PHPParser_Node_Stmt_Case(array('cond' => $this->yyastk[$this->yysp-(5-3)], 'stmts' => $this->yyastk[$this->yysp-(5-5)]), $line, $docComment); $this->yyval = $this->yyastk[$this->yysp-(5-1)]; 
    }

    private function yyn93($line, $docComment) {
         $this->yyastk[$this->yysp-(4-1)][] = new PHPParser_Node_Stmt_Case(array('cond' => null, 'stmts' => $this->yyastk[$this->yysp-(4-4)]), $line, $docComment); $this->yyval = $this->yyastk[$this->yysp-(4-1)]; 
    }

    private function yyn94() {
        $this->yyval = $this->yyastk[$this->yysp];
    }

    private function yyn95() {
        $this->yyval = $this->yyastk[$this->yysp];
    }

    private function yyn96($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn97($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(4-2)]; 
    }

    private function yyn98($line, $docComment) {
         $this->yyval = array();
    }

    private function yyn99($line, $docComment) {
         $this->yyastk[$this->yysp-(6-1)][] = new PHPParser_Node_Stmt_ElseIf(array('cond' => $this->yyastk[$this->yysp-(6-4)], 'stmts' => is_array($this->yyastk[$this->yysp-(6-6)]) ? $this->yyastk[$this->yysp-(6-6)] : array($this->yyastk[$this->yysp-(6-6)])), $line, $docComment); $this->yyval = $this->yyastk[$this->yysp-(6-1)]; 
    }

    private function yyn100($line, $docComment) {
         $this->yyval = array(); 
    }

    private function yyn101($line, $docComment) {
         $this->yyastk[$this->yysp-(7-1)][] = new PHPParser_Node_Stmt_ElseIf(array('cond' => $this->yyastk[$this->yysp-(7-4)], 'stmts' => $this->yyastk[$this->yysp-(7-7)]), $line, $docComment); $this->yyval = $this->yyastk[$this->yysp-(7-1)]; 
    }

    private function yyn102($line, $docComment) {
         $this->yyval = null; 
    }

    private function yyn103($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Else(array('stmts' => is_array($this->yyastk[$this->yysp-(2-2)]) ? $this->yyastk[$this->yysp-(2-2)] : array($this->yyastk[$this->yysp-(2-2)])), $line, $docComment); 
    }

    private function yyn104($line, $docComment) {
         $this->yyval = null; 
    }

    private function yyn105($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Else(array('stmts' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn106($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn107($line, $docComment) {
         $this->yyval = array(); 
    }

    private function yyn108($line, $docComment) {
         $this->yyval = array(new PHPParser_Node_Stmt_FuncParam(array('type' => $this->yyastk[$this->yysp-(3-1)], 'name' => substr($this->yyastk[$this->yysp-(3-3)], 1), 'byRef' => $this->yyastk[$this->yysp-(3-2)], 'default' => null), $line, $docComment)); 
    }

    private function yyn109($line, $docComment) {
         $this->yyval = array(new PHPParser_Node_Stmt_FuncParam(array('type' => $this->yyastk[$this->yysp-(5-1)], 'name' => substr($this->yyastk[$this->yysp-(5-3)], 1), 'byRef' => $this->yyastk[$this->yysp-(5-2)], 'default' => $this->yyastk[$this->yysp-(5-5)]), $line, $docComment)); 
    }

    private function yyn110($line, $docComment) {
         $this->yyastk[$this->yysp-(5-1)][] = new PHPParser_Node_Stmt_FuncParam(array('type' => $this->yyastk[$this->yysp-(5-3)], 'name' => substr($this->yyastk[$this->yysp-(5-5)], 1), 'byRef' => $this->yyastk[$this->yysp-(5-4)], 'default' => null), $line, $docComment); $this->yyval = $this->yyastk[$this->yysp-(5-1)]; 
    }

    private function yyn111($line, $docComment) {
         $this->yyastk[$this->yysp-(7-1)][] = new PHPParser_Node_Stmt_FuncParam(array('type' => $this->yyastk[$this->yysp-(7-3)], 'name' => substr($this->yyastk[$this->yysp-(7-5)], 1), 'byRef' => $this->yyastk[$this->yysp-(7-4)], 'default' => $this->yyastk[$this->yysp-(7-7)]), $line, $docComment); $this->yyval = $this->yyastk[$this->yysp-(7-1)]; 
    }

    private function yyn112($line, $docComment) {
         $this->yyval = null; 
    }

    private function yyn113($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn114($line, $docComment) {
         $this->yyval = 'array'; 
    }

    private function yyn115($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn116($line, $docComment) {
         $this->yyval = array(); 
    }

    private function yyn117($line, $docComment) {
         $this->yyval = array(new PHPParser_Node_Expr_FuncCallArg(array('value' => $this->yyastk[$this->yysp-(1-1)], 'byRef' => false), $line, $docComment)); 
    }

    private function yyn118($line, $docComment) {
         $this->yyval = array(new PHPParser_Node_Expr_FuncCallArg(array('value' => $this->yyastk[$this->yysp-(2-2)], 'byRef' => true), $line, $docComment)); 
    }

    private function yyn119($line, $docComment) {
         $this->yyastk[$this->yysp-(3-1)][] = new PHPParser_Node_Expr_FuncCallArg(array('value' => $this->yyastk[$this->yysp-(3-3)], 'byRef' => false), $line, $docComment); $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn120($line, $docComment) {
         $this->yyastk[$this->yysp-(4-1)][] = new PHPParser_Node_Expr_FuncCallArg(array('value' => $this->yyastk[$this->yysp-(4-4)], 'byRef' => true), $line, $docComment); $this->yyval = $this->yyastk[$this->yysp-(4-1)]; 
    }

    private function yyn121($line, $docComment) {
         $this->yyastk[$this->yysp-(3-1)][] = $this->yyastk[$this->yysp-(3-3)]; $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn122($line, $docComment) {
         $this->yyval = array($this->yyastk[$this->yysp-(1-1)]); 
    }

    private function yyn123($line, $docComment) {
         $this->yyval = new PHPParser_Node_Variable(substr($this->yyastk[$this->yysp-(1-1)], 1), $line, $docComment); 
    }

    private function yyn124($line, $docComment) {
         $this->yyval = new PHPParser_Node_Variable($this->yyastk[$this->yysp-(2-2)], $line, $docComment); 
    }

    private function yyn125($line, $docComment) {
         $this->yyval = new PHPParser_Node_Variable($this->yyastk[$this->yysp-(4-3)], $line, $docComment); 
    }

    private function yyn126($line, $docComment) {
         $this->yyastk[$this->yysp-(3-1)][] = new PHPParser_Node_Stmt_StaticVar(array('name' => substr($this->yyastk[$this->yysp-(3-3)], 1), 'default' => null), $line, $docComment); $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn127($line, $docComment) {
         $this->yyastk[$this->yysp-(5-1)][] = new PHPParser_Node_Stmt_StaticVar(array('name' => substr($this->yyastk[$this->yysp-(5-3)], 1), 'default' => $this->yyastk[$this->yysp-(5-5)]), $line, $docComment); $this->yyval = $this->yyastk[$this->yysp-(5-1)]; 
    }

    private function yyn128($line, $docComment) {
         $this->yyval = array(new PHPParser_Node_Stmt_StaticVar(array('name' => substr($this->yyastk[$this->yysp-(1-1)], 1), 'default' => null), $line, $docComment)); 
    }

    private function yyn129($line, $docComment) {
         $this->yyval = array(new PHPParser_Node_Stmt_StaticVar(array('name' => substr($this->yyastk[$this->yysp-(3-1)], 1), 'default' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment)); 
    }

    private function yyn130($line, $docComment) {
         $this->yyastk[$this->yysp-(2-1)][] = $this->yyastk[$this->yysp-(2-2)]; $this->yyval = $this->yyastk[$this->yysp-(2-1)]; 
    }

    private function yyn131($line, $docComment) {
         $this->yyval = array(); 
    }

    private function yyn132($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_Property(array('type' => $this->yyastk[$this->yysp-(3-1)], 'props' => $this->yyastk[$this->yysp-(3-2)]), $line, $docComment); 
    }

    private function yyn133($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_ClassConst(array('consts' => $this->yyastk[$this->yysp-(2-1)]), $line, $docComment); 
    }

    private function yyn134($line, $docComment) {
         $this->yyval = new PHPParser_Node_Stmt_ClassMethod(array('type' => $this->yyastk[$this->yysp-(8-1)], 'byRef' => $this->yyastk[$this->yysp-(8-3)], 'name' => $this->yyastk[$this->yysp-(8-4)], 'params' => $this->yyastk[$this->yysp-(8-6)], 'stmts' => $this->yyastk[$this->yysp-(8-8)]), $line, $docComment); 
    }

    private function yyn135($line, $docComment) {
         $this->yyval = null; 
    }

    private function yyn136($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(3-2)]; 
    }

    private function yyn137($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn138($line, $docComment) {
         $this->yyval = PHPParser_Node_Stmt_Class::MODIFIER_PUBLIC; 
    }

    private function yyn139($line, $docComment) {
         $this->yyval = PHPParser_Node_Stmt_Class::MODIFIER_PUBLIC; 
    }

    private function yyn140($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn141($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn142($line, $docComment) {
         PHPParser_Node_Stmt_Class::verifyModifier($this->yyastk[$this->yysp-(2-1)], $this->yyastk[$this->yysp-(2-2)]); $this->yyval = $this->yyastk[$this->yysp-(2-1)] | $this->yyastk[$this->yysp-(2-2)]; 
    }

    private function yyn143($line, $docComment) {
         $this->yyval = PHPParser_Node_Stmt_Class::MODIFIER_PUBLIC; 
    }

    private function yyn144($line, $docComment) {
         $this->yyval = PHPParser_Node_Stmt_Class::MODIFIER_PROTECTED; 
    }

    private function yyn145($line, $docComment) {
         $this->yyval = PHPParser_Node_Stmt_Class::MODIFIER_PRIVATE; 
    }

    private function yyn146($line, $docComment) {
         $this->yyval = PHPParser_Node_Stmt_Class::MODIFIER_STATIC; 
    }

    private function yyn147($line, $docComment) {
         $this->yyval = PHPParser_Node_Stmt_Class::MODIFIER_ABSTRACT; 
    }

    private function yyn148($line, $docComment) {
         $this->yyval = PHPParser_Node_Stmt_Class::MODIFIER_FINAL; 
    }

    private function yyn149($line, $docComment) {
         $this->yyastk[$this->yysp-(3-1)][] = new PHPParser_Node_Stmt_PropertyProperty(array('name' => substr($this->yyastk[$this->yysp-(3-3)], 1), 'default' => null), $line, $docComment); $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn150($line, $docComment) {
         $this->yyastk[$this->yysp-(5-1)][] = new PHPParser_Node_Stmt_PropertyProperty(array('name' => substr($this->yyastk[$this->yysp-(5-3)], 1), 'default' => $this->yyastk[$this->yysp-(5-5)]), $line, $docComment); $this->yyval = $this->yyastk[$this->yysp-(5-1)]; 
    }

    private function yyn151($line, $docComment) {
         $this->yyval = array(new PHPParser_Node_Stmt_PropertyProperty(array('name' => substr($this->yyastk[$this->yysp-(1-1)], 1), 'default' => null), $line, $docComment)); 
    }

    private function yyn152($line, $docComment) {
         $this->yyval = array(new PHPParser_Node_Stmt_PropertyProperty(array('name' => substr($this->yyastk[$this->yysp-(3-1)], 1), 'default' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment)); 
    }

    private function yyn153($line, $docComment) {
         $this->yyastk[$this->yysp-(5-1)][] = new PHPParser_Node_Stmt_ClassConstConst(array('name' => $this->yyastk[$this->yysp-(5-3)], 'value' => $this->yyastk[$this->yysp-(5-5)]), $line, $docComment); $this->yyval = $this->yyastk[$this->yysp-(5-1)]; 
    }

    private function yyn154($line, $docComment) {
         $this->yyval = array(new PHPParser_Node_Stmt_ClassConstConst(array('name' => $this->yyastk[$this->yysp-(4-2)], 'value' => $this->yyastk[$this->yysp-(4-4)]), $line, $docComment)); 
    }

    private function yyn155($line, $docComment) {
         $this->yyastk[$this->yysp-(3-1)][] = $this->yyastk[$this->yysp-(3-3)]; $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn156($line, $docComment) {
         $this->yyval = array($this->yyastk[$this->yysp-(1-1)]); 
    }

    private function yyn157($line, $docComment) {
         $this->yyval = array(); 
    }

    private function yyn158($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn159($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn160($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_List(array('assignList' => $this->yyastk[$this->yysp-(6-3)], 'expr' => $this->yyastk[$this->yysp-(6-6)]), $line, $docComment); 
    }

    private function yyn161($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Assign($this->yyastk[$this->yysp-(3-1)], $this->yyastk[$this->yysp-(3-3)], $line, $docComment); 
    }

    private function yyn162($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_AssignRef($this->yyastk[$this->yysp-(4-1)], $this->yyastk[$this->yysp-(4-4)], $line, $docComment); 
    }

    private function yyn163($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Assign($this->yyastk[$this->yysp-(6-1)], new PHPParser_Node_Expr_New(array('class' => $this->yyastk[$this->yysp-(6-5)], 'args' => $this->yyastk[$this->yysp-(6-6)]), $line, $docComment), $line, $docComment); 
    }

    private function yyn164($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_New(array('class' => $this->yyastk[$this->yysp-(3-2)], 'args' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn165($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Clone(array('expr' => $this->yyastk[$this->yysp-(2-2)]), $line, $docComment); 
    }

    private function yyn166($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_AssignPlus($this->yyastk[$this->yysp-(3-1)], $this->yyastk[$this->yysp-(3-3)], $line, $docComment); 
    }

    private function yyn167($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_AssignMinus($this->yyastk[$this->yysp-(3-1)], $this->yyastk[$this->yysp-(3-3)], $line, $docComment); 
    }

    private function yyn168($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_AssignMul($this->yyastk[$this->yysp-(3-1)], $this->yyastk[$this->yysp-(3-3)], $line, $docComment); 
    }

    private function yyn169($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_AssignDiv($this->yyastk[$this->yysp-(3-1)], $this->yyastk[$this->yysp-(3-3)], $line, $docComment); 
    }

    private function yyn170($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_AssignConcat($this->yyastk[$this->yysp-(3-1)], $this->yyastk[$this->yysp-(3-3)], $line, $docComment); 
    }

    private function yyn171($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_AssignMod($this->yyastk[$this->yysp-(3-1)], $this->yyastk[$this->yysp-(3-3)], $line, $docComment); 
    }

    private function yyn172($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_AssignBinAnd($this->yyastk[$this->yysp-(3-1)], $this->yyastk[$this->yysp-(3-3)], $line, $docComment); 
    }

    private function yyn173($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_AssignBinOr($this->yyastk[$this->yysp-(3-1)], $this->yyastk[$this->yysp-(3-3)], $line, $docComment); 
    }

    private function yyn174($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_AssignBinXor($this->yyastk[$this->yysp-(3-1)], $this->yyastk[$this->yysp-(3-3)], $line, $docComment); 
    }

    private function yyn175($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_AssignShiftLeft($this->yyastk[$this->yysp-(3-1)], $this->yyastk[$this->yysp-(3-3)], $line, $docComment); 
    }

    private function yyn176($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_AssignShiftRight($this->yyastk[$this->yysp-(3-1)], $this->yyastk[$this->yysp-(3-3)], $line, $docComment); 
    }

    private function yyn177($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_PostInc(array('var' => $this->yyastk[$this->yysp-(2-1)]), $line, $docComment); 
    }

    private function yyn178($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_PreInc(array('var' => $this->yyastk[$this->yysp-(2-2)]), $line, $docComment); 
    }

    private function yyn179($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_PostDec(array('var' => $this->yyastk[$this->yysp-(2-1)]), $line, $docComment); 
    }

    private function yyn180($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_PreDec(array('var' => $this->yyastk[$this->yysp-(2-2)]), $line, $docComment); 
    }

    private function yyn181($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_BooleanOr(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn182($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_BooleanAnd(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn183($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_LogicalOr(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn184($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_LogicalAnd(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn185($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_LogicalXor(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn186($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_BinaryOr(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn187($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_BinaryAnd(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn188($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_BinaryXor(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn189($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Concat(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn190($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Plus(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn191($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Minus(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn192($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Mul(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn193($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Div(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn194($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Mod(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn195($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ShiftLeft(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn196($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ShiftRight(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn197($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_UnaryPlus(array('expr' => $this->yyastk[$this->yysp-(2-2)]), $line, $docComment); 
    }

    private function yyn198($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_UnaryMinus(array('expr' => $this->yyastk[$this->yysp-(2-2)]), $line, $docComment); 
    }

    private function yyn199($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_BooleanNot(array('expr' => $this->yyastk[$this->yysp-(2-2)]), $line, $docComment); 
    }

    private function yyn200($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_BinaryNot(array('expr' => $this->yyastk[$this->yysp-(2-2)]), $line, $docComment); 
    }

    private function yyn201($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Identical(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn202($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_NotIdentical(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn203($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Equal(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn204($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_NotEqual(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn205($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Smaller(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn206($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_SmallerOrEqual(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn207($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Greater(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn208($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_GreaterOrEqual(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn209($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Instanceof(array('expr' => $this->yyastk[$this->yysp-(3-1)], 'class' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn210($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(3-2)]; 
    }

    private function yyn211($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Ternary(array('cond' => $this->yyastk[$this->yysp-(5-1)], 'if' => $this->yyastk[$this->yysp-(5-3)], 'else' => $this->yyastk[$this->yysp-(5-5)]), $line, $docComment); 
    }

    private function yyn212($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Ternary(array('cond' => $this->yyastk[$this->yysp-(4-1)], 'if' => null, 'else' => $this->yyastk[$this->yysp-(4-4)]), $line, $docComment); 
    }

    private function yyn213($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Isset(array('vars' => $this->yyastk[$this->yysp-(4-3)]), $line, $docComment); 
    }

    private function yyn214($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Empty(array('var' => $this->yyastk[$this->yysp-(4-3)]), $line, $docComment); 
    }

    private function yyn215($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Include(array('expr' => $this->yyastk[$this->yysp-(2-2)], 'type' => PHPParser_Node_Expr_Include::TYPE_INCLUDE), $line, $docComment); 
    }

    private function yyn216($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Include(array('expr' => $this->yyastk[$this->yysp-(2-2)], 'type' => PHPParser_Node_Expr_Include::TYPE_INCLUDE_ONCE), $line, $docComment); 
    }

    private function yyn217($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Eval(array('expr' => $this->yyastk[$this->yysp-(4-3)]), $line, $docComment); 
    }

    private function yyn218($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Include(array('expr' => $this->yyastk[$this->yysp-(2-2)], 'type' => PHPParser_Node_Expr_Include::TYPE_REQUIRE), $line, $docComment); 
    }

    private function yyn219($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Include(array('expr' => $this->yyastk[$this->yysp-(2-2)], 'type' => PHPParser_Node_Expr_Include::TYPE_REQUIRE_ONCE), $line, $docComment); 
    }

    private function yyn220($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_IntCast(array('expr' => $this->yyastk[$this->yysp-(2-2)]), $line, $docComment); 
    }

    private function yyn221($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_DoubleCast(array('expr' => $this->yyastk[$this->yysp-(2-2)]), $line, $docComment); 
    }

    private function yyn222($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_StringCast(array('expr' => $this->yyastk[$this->yysp-(2-2)]), $line, $docComment); 
    }

    private function yyn223($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ArrayCast($this->yyastk[$this->yysp-(2-2)], $line, $docComment); 
    }

    private function yyn224($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ObjectCast(array('expr' => $this->yyastk[$this->yysp-(2-2)]), $line, $docComment); 
    }

    private function yyn225($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_BoolCast(array('expr' => $this->yyastk[$this->yysp-(2-2)]), $line, $docComment); 
    }

    private function yyn226($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_UnsetCast(array('expr' => $this->yyastk[$this->yysp-(2-2)]), $line, $docComment); 
    }

    private function yyn227($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Exit(array('expr' => $this->yyastk[$this->yysp-(2-2)]), $line, $docComment); 
    }

    private function yyn228($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ErrorSuppress(array('expr' => $this->yyastk[$this->yysp-(2-2)]), $line, $docComment); 
    }

    private function yyn229($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn230($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Array($this->yyastk[$this->yysp-(4-3)], $line, $docComment); 
    }

    private function yyn231($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ShellExec(array('parts' => $this->yyastk[$this->yysp-(3-2)]), $line, $docComment); 
    }

    private function yyn232($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Print(array('expr' => $this->yyastk[$this->yysp-(2-2)]), $line, $docComment); 
    }

    private function yyn233($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_LambdaFunc(array('byRef' => $this->yyastk[$this->yysp-(9-2)], 'params' => $this->yyastk[$this->yysp-(9-4)], 'useVars' => $this->yyastk[$this->yysp-(9-6)], 'stmts' => $this->yyastk[$this->yysp-(9-8)]), $line, $docComment); 
    }

    private function yyn234($line, $docComment) {
         $this->yyval = array(); 
    }

    private function yyn235($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(4-3)]; 
    }

    private function yyn236($line, $docComment) {
         $this->yyastk[$this->yysp-(4-1)][] = new PHPParser_Node_Expr_LambdaFuncUse(array('var' => substr($this->yyastk[$this->yysp-(4-4)], 1), 'byRef' => $this->yyastk[$this->yysp-(4-3)]), $line, $docComment); $this->yyval = $this->yyastk[$this->yysp-(4-1)]; 
    }

    private function yyn237($line, $docComment) {
         $this->yyval = array(new PHPParser_Node_Expr_LambdaFuncUse(array('var' => substr($this->yyastk[$this->yysp-(2-2)], 1), 'byRef' => $this->yyastk[$this->yysp-(2-1)]), $line, $docComment)); 
    }

    private function yyn238($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_FuncCall(array('func' => $this->yyastk[$this->yysp-(4-1)], 'args' => $this->yyastk[$this->yysp-(4-3)]), $line, $docComment); 
    }

    private function yyn239($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_StaticCall(array('class' => $this->yyastk[$this->yysp-(6-1)], 'func' => $this->yyastk[$this->yysp-(6-3)], 'args' => $this->yyastk[$this->yysp-(6-5)]), $line, $docComment); 
    }

    private function yyn240($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_StaticCall(array('class' => $this->yyastk[$this->yysp-(6-1)], 'func' => $this->yyastk[$this->yysp-(6-3)], 'args' => $this->yyastk[$this->yysp-(6-5)]), $line, $docComment); 
    }

    private function yyn241($line, $docComment) {
        
            if ($this->yyastk[$this->yysp-(4-1)] instanceof PHPParser_Node_Expr_StaticPropertyFetch) {
                $this->yyval = new PHPParser_Node_Expr_StaticCall(array('class' => $this->yyastk[$this->yysp-(4-1)]->class, 'func' => $this->yyastk[$this->yysp-(4-1)]->name, 'args' => $this->yyastk[$this->yysp-(4-3)]), $line, $docComment);
            } elseif ($this->yyastk[$this->yysp-(4-1)] instanceof PHPParser_Node_Expr_ArrayDimFetch) {
                $tmp = $this->yyastk[$this->yysp-(4-1)];
                while ($tmp->var instanceof PHPParser_Node_Expr_ArrayDimFetch) {
                    $tmp = $tmp->var;
                }

                $this->yyval = new PHPParser_Node_Expr_StaticCall(array('class' => $tmp->var->class, 'func' => $this->yyastk[$this->yysp-(4-1)], 'args' => $this->yyastk[$this->yysp-(4-3)]), $line, $docComment);
                $tmp->var = new PHPParser_Node_Variable($tmp->var->name, $line, $docComment);
            } else {
                throw new Exception;
            }
          
    }

    private function yyn242($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_FuncCall(array('func' => $this->yyastk[$this->yysp-(4-1)], 'args' => $this->yyastk[$this->yysp-(4-3)]), $line, $docComment); 
    }

    private function yyn243($line, $docComment) {
         $this->yyval = 'static'; 
    }

    private function yyn244($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn245($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn246($line, $docComment) {
         $this->yyastk[$this->yysp-(3-3)]->type = PHPParser_Node_Name::RELATIVE; $this->yyval = $this->yyastk[$this->yysp-(3-3)]; 
    }

    private function yyn247($line, $docComment) {
         $this->yyastk[$this->yysp-(2-2)]->type = PHPParser_Node_Name::FULLY_QUALIFIED; $this->yyval = $this->yyastk[$this->yysp-(2-2)]; 
    }

    private function yyn248($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn249($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn250($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn251($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn252() {
        $this->yyval = $this->yyastk[$this->yysp];
    }

    private function yyn253($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_PropertyFetch(array('var' => $this->yyastk[$this->yysp-(3-1)], 'name' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn254($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_PropertyFetch(array('var' => $this->yyastk[$this->yysp-(3-1)], 'name' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn255($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ArrayDimFetch($this->yyastk[$this->yysp-(4-1)], $this->yyastk[$this->yysp-(4-3)], $line, $docComment); 
    }

    private function yyn256($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ArrayDimFetch($this->yyastk[$this->yysp-(4-1)], $this->yyastk[$this->yysp-(4-3)], $line, $docComment); 
    }

    private function yyn257($line, $docComment) {
         $this->yyval = null; 
    }

    private function yyn258($line, $docComment) {
         $this->yyval = null; 
    }

    private function yyn259($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(3-2)]; 
    }

    private function yyn260($line, $docComment) {
         $this->yyval = array(); 
    }

    private function yyn261($line, $docComment) {
         $this->yyval = array(PHPParser_Node_Scalar_String::parseEscapeSequences($this->yyastk[$this->yysp-(1-1)])); 
    }

    private function yyn262($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn263($line, $docComment) {
         $this->yyval = array(); 
    }

    private function yyn264($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(3-2)]; 
    }

    private function yyn265($line, $docComment) {
         $this->yyval = new PHPParser_Node_Scalar_LNumber((int) $this->yyastk[$this->yysp-(1-1)], $line, $docComment); 
    }

    private function yyn266($line, $docComment) {
         $this->yyval = new PHPParser_Node_Scalar_DNumber((double) $this->yyastk[$this->yysp-(1-1)], $line, $docComment); 
    }

    private function yyn267($line, $docComment) {
         $this->yyval = PHPParser_Node_Scalar_String::create($this->yyastk[$this->yysp-(1-1)], $line, $docComment); 
    }

    private function yyn268($line, $docComment) {
         $this->yyval = new PHPParser_Node_Scalar_LineConst($line, $docComment); 
    }

    private function yyn269($line, $docComment) {
         $this->yyval = new PHPParser_Node_Scalar_FileConst($line, $docComment); 
    }

    private function yyn270($line, $docComment) {
         $this->yyval = new PHPParser_Node_Scalar_DirConst($line, $docComment); 
    }

    private function yyn271($line, $docComment) {
         $this->yyval = new PHPParser_Node_Scalar_ClassConst($line, $docComment); 
    }

    private function yyn272($line, $docComment) {
         $this->yyval = new PHPParser_Node_Scalar_MethodConst($line, $docComment); 
    }

    private function yyn273($line, $docComment) {
         $this->yyval = new PHPParser_Node_Scalar_FuncConst($line, $docComment); 
    }

    private function yyn274($line, $docComment) {
         $this->yyval = new PHPParser_Node_Scalar_NSConst($line, $docComment); 
    }

    private function yyn275($line, $docComment) {
         $this->yyval = new PHPParser_Node_Scalar_String(PHPParser_Node_Scalar_String::parseEscapeSequences($this->yyastk[$this->yysp-(3-2)]), $line, $docComment); 
    }

    private function yyn276($line, $docComment) {
         $this->yyval = new PHPParser_Node_Scalar_String('', $line, $docComment); 
    }

    private function yyn277($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn278($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ConstFetch(array('name' => $this->yyastk[$this->yysp-(1-1)]), $line, $docComment); 
    }

    private function yyn279($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_UnaryPlus(array('expr' => $this->yyastk[$this->yysp-(2-2)]), $line, $docComment); 
    }

    private function yyn280($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_UnaryMinus(array('expr' => $this->yyastk[$this->yysp-(2-2)]), $line, $docComment); 
    }

    private function yyn281($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_Array($this->yyastk[$this->yysp-(4-3)], $line, $docComment); 
    }

    private function yyn282($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ClassConstFetch(array('class' => $this->yyastk[$this->yysp-(3-1)], 'name' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn283($line, $docComment) {
         $this->yyval = new PHPParser_Node_Scalar_String($this->yyastk[$this->yysp-(1-1)], $line, $docComment); 
    }

    private function yyn284($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn285($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ConstFetch(array('name' => $this->yyastk[$this->yysp-(1-1)]), $line, $docComment); 
    }

    private function yyn286($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn287($line, $docComment) {
         $this->yyval = new PHPParser_Node_Scalar_Encapsed($this->yyastk[$this->yysp-(3-2)], $line, $docComment); 
    }

    private function yyn288($line, $docComment) {
         $this->yyval = new PHPParser_Node_Scalar_Encapsed($this->yyastk[$this->yysp-(3-2)], $line, $docComment); 
    }

    private function yyn289($line, $docComment) {
         $this->yyval = array(); 
    }

    private function yyn290($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(2-1)]; 
    }

    private function yyn291() {
        $this->yyval = $this->yyastk[$this->yysp];
    }

    private function yyn292() {
        $this->yyval = $this->yyastk[$this->yysp];
    }

    private function yyn293($line, $docComment) {
         $this->yyastk[$this->yysp-(3-1)][] = $this->yyastk[$this->yysp-(3-3)]; $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn294($line, $docComment) {
         $this->yyval = array($this->yyastk[$this->yysp-(1-1)]); 
    }

    private function yyn295($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ArrayItem($this->yyastk[$this->yysp-(3-1)], $this->yyastk[$this->yysp-(3-3)], false, $line, $docComment); 
    }

    private function yyn296($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ArrayItem(null, $this->yyastk[$this->yysp-(1-1)], false, $line, $docComment); 
    }

    private function yyn297($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn298($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn299($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn300($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn301($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_FuncCall(array('func' => $this->yyastk[$this->yysp-(4-1)], 'args' => $this->yyastk[$this->yysp-(4-3)]), $line, $docComment); 
    }

    private function yyn302($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_MethodCall(array('var' => $this->yyastk[$this->yysp-(6-1)], 'name' => $this->yyastk[$this->yysp-(6-3)], 'args' => $this->yyastk[$this->yysp-(6-5)]), $line, $docComment); 
    }

    private function yyn303($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_PropertyFetch(array('var' => $this->yyastk[$this->yysp-(3-1)], 'name' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn304($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ArrayDimFetch($this->yyastk[$this->yysp-(4-1)], $this->yyastk[$this->yysp-(4-3)], $line, $docComment); 
    }

    private function yyn305($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ArrayDimFetch($this->yyastk[$this->yysp-(4-1)], $this->yyastk[$this->yysp-(4-3)], $line, $docComment); 
    }

    private function yyn306($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn307($line, $docComment) {
         $this->yyval = new PHPParser_Node_Variable($this->yyastk[$this->yysp-(2-2)], $line, $docComment); 
    }

    private function yyn308($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn309($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_StaticPropertyFetch(array('class' => $this->yyastk[$this->yysp-(4-1)], 'name' => $this->yyastk[$this->yysp-(4-4)]), $line, $docComment); 
    }

    private function yyn310($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_StaticPropertyFetch(array('class' => $this->yyastk[$this->yysp-(4-1)], 'name' => $this->yyastk[$this->yysp-(4-4)]), $line, $docComment); 
    }

    private function yyn311($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn312($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_StaticPropertyFetch(array('class' => $this->yyastk[$this->yysp-(3-1)], 'name' => substr($this->yyastk[$this->yysp-(3-3)], 1)), $line, $docComment); 
    }

    private function yyn313($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_StaticPropertyFetch(array('class' => $this->yyastk[$this->yysp-(3-1)], 'name' => substr($this->yyastk[$this->yysp-(3-3)], 1)), $line, $docComment); 
    }

    private function yyn314($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_StaticPropertyFetch(array('class' => $this->yyastk[$this->yysp-(6-1)], 'name' => $this->yyastk[$this->yysp-(6-5)]), $line, $docComment); 
    }

    private function yyn315($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_StaticPropertyFetch(array('class' => $this->yyastk[$this->yysp-(6-1)], 'name' => $this->yyastk[$this->yysp-(6-5)]), $line, $docComment); 
    }

    private function yyn316($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ArrayDimFetch($this->yyastk[$this->yysp-(4-1)], $this->yyastk[$this->yysp-(4-3)], $line, $docComment); 
    }

    private function yyn317($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ArrayDimFetch($this->yyastk[$this->yysp-(4-1)], $this->yyastk[$this->yysp-(4-3)], $line, $docComment); 
    }

    private function yyn318($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ArrayDimFetch($this->yyastk[$this->yysp-(4-1)], $this->yyastk[$this->yysp-(4-3)], $line, $docComment); 
    }

    private function yyn319($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ArrayDimFetch($this->yyastk[$this->yysp-(4-1)], $this->yyastk[$this->yysp-(4-3)], $line, $docComment); 
    }

    private function yyn320($line, $docComment) {
         $this->yyval = new PHPParser_Node_Variable(substr($this->yyastk[$this->yysp-(1-1)], 1), $line, $docComment); 
    }

    private function yyn321($line, $docComment) {
         $this->yyval = new PHPParser_Node_Variable($this->yyastk[$this->yysp-(4-3)], $line, $docComment); 
    }

    private function yyn322($line, $docComment) {
         $this->yyval = null; 
    }

    private function yyn323($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn324($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn325($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(3-2)]; 
    }

    private function yyn326($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn327($line, $docComment) {
         $this->yyastk[$this->yysp-(3-1)][] = $this->yyastk[$this->yysp-(3-3)]; $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn328($line, $docComment) {
         $this->yyval = array($this->yyastk[$this->yysp-(1-1)]); 
    }

    private function yyn329($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn330($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(4-3)]; 
    }

    private function yyn331($line, $docComment) {
         $this->yyval = null; 
    }

    private function yyn332($line, $docComment) {
         $this->yyval = array(); 
    }

    private function yyn333($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(2-1)]; 
    }

    private function yyn334($line, $docComment) {
         $this->yyastk[$this->yysp-(3-1)][] = $this->yyastk[$this->yysp-(3-3)]; $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn335($line, $docComment) {
         $this->yyval = array($this->yyastk[$this->yysp-(1-1)]); 
    }

    private function yyn336($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ArrayItem($this->yyastk[$this->yysp-(3-1)], $this->yyastk[$this->yysp-(3-3)], false, $line, $docComment); 
    }

    private function yyn337($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ArrayItem(null, $this->yyastk[$this->yysp-(1-1)], false, $line, $docComment); 
    }

    private function yyn338($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ArrayItem($this->yyastk[$this->yysp-(4-1)], $this->yyastk[$this->yysp-(4-4)], true, $line, $docComment); 
    }

    private function yyn339($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ArrayItem(null, $this->yyastk[$this->yysp-(2-2)], true, $line, $docComment); 
    }

    private function yyn340($line, $docComment) {
         $this->yyastk[$this->yysp-(2-1)][] = $this->yyastk[$this->yysp-(2-2)]; $this->yyval = $this->yyastk[$this->yysp-(2-1)]; 
    }

    private function yyn341($line, $docComment) {
         $this->yyastk[$this->yysp-(2-1)][] = PHPParser_Node_Scalar_String::parseEscapeSequences($this->yyastk[$this->yysp-(2-2)]); $this->yyval = $this->yyastk[$this->yysp-(2-1)]; 
    }

    private function yyn342($line, $docComment) {
         $this->yyval = array($this->yyastk[$this->yysp-(1-1)]); 
    }

    private function yyn343($line, $docComment) {
         $this->yyval = array(PHPParser_Node_Scalar_String::parseEscapeSequences($this->yyastk[$this->yysp-(2-1)]), $this->yyastk[$this->yysp-(2-2)]); 
    }

    private function yyn344($line, $docComment) {
         $this->yyval = new PHPParser_Node_Variable(substr($this->yyastk[$this->yysp-(1-1)], 1), $line, $docComment); 
    }

    private function yyn345($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ArrayDimFetch(new PHPParser_Node_Variable(substr($this->yyastk[$this->yysp-(4-1)], 1), $line, $docComment), $this->yyastk[$this->yysp-(4-3)], $line, $docComment); 
    }

    private function yyn346($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_PropertyFetch(array('var' => new PHPParser_Node_Variable(substr($this->yyastk[$this->yysp-(3-1)], 1), $line, $docComment), 'name' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn347($line, $docComment) {
         $this->yyval = new PHPParser_Node_Variable($this->yyastk[$this->yysp-(3-2)], $line, $docComment); 
    }

    private function yyn348($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ArrayDimFetch(new PHPParser_Node_Variable($this->yyastk[$this->yysp-(6-2)], $line, $docComment), $this->yyastk[$this->yysp-(6-4)], $line, $docComment); 
    }

    private function yyn349($line, $docComment) {
         $this->yyval = $this->yyastk[$this->yysp-(3-2)]; 
    }

    private function yyn350($line, $docComment) {
         $this->yyval = new PHPParser_Node_Scalar_String($this->yyastk[$this->yysp-(1-1)], $line, $docComment); 
    }

    private function yyn351($line, $docComment) {
         $this->yyval = new PHPParser_Node_Scalar_LNumber((int) $this->yyastk[$this->yysp-(1-1)], $line, $docComment); 
    }

    private function yyn352($line, $docComment) {
         $this->yyval = new PHPParser_Node_Variable(substr($this->yyastk[$this->yysp-(1-1)], 1), $line, $docComment); 
    }

    private function yyn353($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ClassConstFetch(array('class' => $this->yyastk[$this->yysp-(3-1)], 'name' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }

    private function yyn354($line, $docComment) {
         $this->yyval = new PHPParser_Node_Expr_ClassConstFetch(array('class' => $this->yyastk[$this->yysp-(3-1)], 'name' => $this->yyastk[$this->yysp-(3-3)]), $line, $docComment); 
    }
}
