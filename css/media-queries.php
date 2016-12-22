<?php
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
$path=str_replace('index.php','',$parse_uri[0]);
require( $path . 'wp-load.php' );
header("Content-type: text/css; charset: UTF-8");
?>
@media only screen and (min-width: 992px) {
	.crellyslider-slider {
	    margin-top: -1%;
	}
}
@media only screen and (min-width: 768px) {
	#primary-nav-wrapper li a{
		padding-left: 0 !important;
		padding-right: 0 !important;
		margin-left: 10px;
		margin-right: 10px;
		padding-bottom: 5px;
	}
	#primary-nav-wrapper,#primary-nav-wrapper li:last-child a{
		padding-right: 0 !important;
	}
	form#commentform .comment-form-author,
	form#commentform .comment-form-email,
	form#commentform .comment-form-url{
		width: 32%;
	}
	form#commentform .comment-form-author,
	form#commentform .comment-form-email{
		float: left;
	}
	form#commentform .comment-form-url{
		float: right;
	}
	form#commentform .comment-form-email{
		margin-left: 2%;
	}
	.crellyslider-slider {
	    margin-top: -1.5%;
	}
}

@media only screen and (max-width: 768px) {
	#primary-nav-wrapper .navbar-left{
		float: left !important;
		display: block;
    	min-width: 100%;
	}
	.topnav-wrapper{
		text-align: left !important;
		display: none;
	}
	.topnav-email,.topnav-social-icons{
		margin-top: 10px;
		float: none !important;
	}
	nav.navbar{
		margin-bottom : 0 !important;
		position: relative;
		margin-top: 0 !important;
	}
	.topnav-fixed{
		position: relative !important;
	}
	body{
		margin-top: 0 !important;
	}
	/* Primary Nav Mobile View */
	.navbar-toggle{
		border: 0;
	}
		.navbar-toggle:focus,.navbar-toggle:active,.navbar-toggle:hover{
			background: #fff !important;
		}
		.navbar-collapse{
			margin-top: 20px;
			padding: 0;
		}
		.navbar-collapse .nav{
			margin: 0;
		}
			.navbar-collapse .nav > li{
				padding: 5px 0;
		    	border-top: 1px solid #ddd;
			}
			.navbar-collapse .nav > li:first-child{
				padding: 5px 0;
		    	border-top: 0;
			}
				.navbar-collapse .nav > li > a > span.caret{
					float: right;
					margin-top: 4px;
				}
				.navbar-collapse .nav > li > a:active,
				.navbar-collapse .nav > li > a:focus{
					background: #fff !important;
				}
				.navbar-collapse .nav > li:hover{
					background: #eee;
				}
				.navbar-collapse .nav > li:active,
				.navbar-collapse .nav > li:focus,
				.navbar-collapse .nav li > .dropdown-menu:hover,
				.navbar-collapse .nav li > .dropdown-menu:focus,
				.navbar-collapse .nav li > .dropdown-menu:active,
				.navbar-collapse .nav li > .dropdown-menu > li:hover,
				.navbar-collapse .nav li > .dropdown-menu > li:focus,
				.navbar-collapse .nav li > .dropdown-menu > li:active,				
				.navbar-collapse .nav li > .dropdown-menu > li > a:focus,
				.navbar-collapse .nav li > .dropdown-menu > li > a:active{
					background: #fff;
				}
				.navbar-collapse .nav li > .dropdown-menu > li > a:hover,
				.navbar-collapse .nav li > .dropdown-menu > li:hover{
					background: #eee;
				}
				.navbar-collapse .nav li.dropdown.open{
					background: #fff;
				}
				.navbar-collapse .nav li.dropdown.open > a{
					padding-bottom: 15px;
					border-bottom: 1px solid #ddd;
				}
	.sidebar{
		margin-top: 50px;
	}
}