<?php
global $pp_constants;
$pp_constants = array();

$type = 'filtering-switches';
$consts = array(
'PP_ALL_ANON_ROLES' => 								__( "Supplemental roles assignment available for {All} and {Anonymous} metagroups", 'pp' ),
'PP_ALL_ANON_FULL_EXCEPTIONS' => 					__( "Allow the {All} and {Anonymous} metagroups to be granted reading exceptions for private content", 'pp' ),
'PP_EDIT_EXCEPTIONS_ALLOW_DELETION' => 				__( "PRO: Users who have an editing exception for a post or attachment can also delete it", 'pp' ),
'PP_EDIT_EXCEPTIONS_ALLOW_ATTACHMENT_DELETION' => 	__( "PRO: Users who have an editing exception for an attachment can also delete it", 'pp' ),
'PP_DISABLE_QUERYFILTERS' => 						__( "Don't apply any content restrictions", 'pp' ),
'PP_ALLOW_UNFILTERED_FRONT' => 						__( "Disable front end filtering if logged user is a content administrator (normally filter to force inclusion of readable private posts in get_pages() listing, post counts, etc.", 'pp' ),
'PP_UNFILTERED_FRONT' => 							__( "Disable front end filtering for all users (subject to limitation by PP_UNFILTERED_FRONT_TYPES)", 'pp' ),
'PP_UNFILTERED_FRONT_TYPES' => 						__( "Comma-separated list of post types to limit the effect of PP_UNFILTERED_FRONT and apply_filters( 'pp_skip_cap_filtering' )", 'pp' ),
'PP_NO_ADDITIONAL_ACCESS' => 						__( "'Also these' / 'Enabled' exceptions (mod_type='additional') are not applied (and cannot be assigned)", 'pp' ),
'PP_POST_NO_EXCEPTIONS' =>	 						__( "Don't assign or apply exceptions for the 'post' type", 'pp' ),
'PP_PAGE_NO_EXCEPTIONS' => 							__( "Don't assign or apply exceptions for the 'page' type", 'pp' ),
'PP_MEDIA_NO_EXCEPTIONS' => 						__( "Don't assign or apply exceptions for the 'media' type", 'pp' ),
'PP_MY_CUSTOM_TYPE_NO_EXCEPTIONS' => 				__( "Don't assign or apply exceptions for the specified custom post type", 'pp' ),
);
foreach( $consts as $k => $v ) $pp_constants[$k] = (object) array( 'descript' => $v, 'type' => $type );

$consts = array(
'PP_FUTURE_POSTS_BLOGROLL' => 		__( "Include scheduled posts in the posts query if user can edit them", 'pp' ),
'PP_UNFILTERED_TERM_COUNTS' => 		__( "Don't filter term post counts in get_terms() call", 'pp' ),
'PP_DISABLE_NAV_MENU_FILTER' => 	__( "Leave unreadable posts on WP Navigation Menus", 'pp' ),
'PP_NAV_MENU_SHOW_EMPTY_TERMS' => 	__( "Leave terms with no readable posts on WP Navigation Menus", 'pp' ),
);
foreach( $consts as $k => $v ) $pp_constants[$k] = (object) array( 'descript' => $v, 'type' => $type );

$consts = array(
);
foreach( $consts as $k => $v ) $pp_constants[$k] = (object) array( 'descript' => $v, 'type' => $type );

$consts = array(
);
foreach( $consts as $k => $v ) $pp_constants[$k] = (object) array( 'descript' => $v, 'type' => $type );

$consts = array(
);
foreach( $consts as $k => $v ) $pp_constants[$k] = (object) array( 'descript' => $v, 'type' => $type );

$consts = array(
);
foreach( $consts as $k => $v ) $pp_constants[$k] = (object) array( 'descript' => $v, 'type' => $type );

$consts = array(
);
foreach( $consts as $k => $v ) $pp_constants[$k] = (object) array( 'descript' => $v, 'type' => $type );

$consts = array(
);
foreach( $consts as $k => $v ) $pp_constants[$k] = (object) array( 'descript' => $v, 'type' => $type );

$consts = array(
);
foreach( $consts as $k => $v ) $pp_constants[$k] = (object) array( 'descript' => $v, 'type' => $type );

$consts = array(
);
foreach( $consts as $k => $v ) $pp_constants[$k] = (object) array( 'descript' => $v, 'type' => $type );

$consts = array(
);
foreach( $consts as $k => $v ) $pp_constants[$k] = (object) array( 'descript' => $v, 'type' => $type );

$consts = array(
);
foreach( $consts as $k => $v ) $pp_constants[$k] = (object) array( 'descript' => $v, 'type' => $type );

$consts = array(
);
foreach( $consts as $k => $v ) $pp_constants[$k] = (object) array( 'descript' => $v, 'type' => $type );

$consts = array(
);
foreach( $consts as $k => $v ) $pp_constants[$k] = (object) array( 'descript' => $v, 'type' => $type );

$consts = array(
);
foreach( $consts as $k => $v ) $pp_constants[$k] = (object) array( 'descript' => $v, 'type' => $type, 'suppress_display' => true );

$consts = array(
);
foreach( $consts as $k => $v ) $pp_constants[$k] = (object) array( 'descript' => $v, 'type' => $type, 'suppress_display' => true );

$consts = array(
);
foreach( $consts as $k => $v ) $pp_constants[$k] = (object) array( 'descript' => $v, 'type' => $type, 'suppress_display' => true );


$pp_constants = apply_filters( 'pp_constants', $pp_constants );

global $pp_constants_by_type;
$pp_constants_by_type = array();

global $pp_constant_types;
$pp_constant_types = array();
foreach( $pp_constants as $name => $const ) {
	if ( empty( $const->suppress_display ) ) {
		if ( ! isset( $pp_constant_types[ $const->type ] ) ) {
			$pp_constant_types[ $const->type ] = ucwords( str_replace( '-', ' ', $const->type ) );
			
			foreach( array( '-' => ' ', 'Pp' => 'PP', 'Wp' => 'WP', 'Ui' => 'UI' ) as $find => $repl )
				$pp_constant_types[ $const->type ] = ucwords( str_replace( $find, $repl, $pp_constant_types[ $const->type ] ) );
		}
		
		if ( ! isset( $pp_constants_by_type[ $const->type ] ) ) $pp_constants_by_type[ $const->type ] = array();
		
		$pp_constants_by_type[ $const->type ][]= $name;
	}
}
$pp_constant_types = apply_filters( 'pp_constant_types', $pp_constant_types );