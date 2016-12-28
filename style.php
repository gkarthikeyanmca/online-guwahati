<?php
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
$path=str_replace('index.php','',$parse_uri[0]);
require( $path . 'wp-load.php' );
header("Content-type: text/css; charset: UTF-8");
?>
@import url('https://fonts.googleapis.com/css?family=Raleway');
body{
	font-family: 'Raleway', sans-serif;
	margin-top: 130px;
}
/* Utilities */
.section-title-center{
	text-align: center;
	font-weight: 600;
	color: #000;
}
hr.title-underline{
	width: 130px;
    border: 2px solid <?php the_field('brand_color','option'); ?>;
}
.blue-button{
	background-color: <?php the_field('brand_color','option'); ?>;
    color: #fff;
    padding: 10px 30px;
    text-decoration: none;
}
.margin-20{
	margin-top: 20px;
}
/* Topnav */
.topnav-fixed{
	position: fixed;
	width: 100%;
	display: block;
	top:0;
	z-index: 999;
}
body.logged-in .topnav-fixed{
	top: 29px;
}
.topnav-wrapper{
	background: <?php the_field('brand_color','option'); ?>;
	color: #fff;
	padding: 10px 0;
	font-size: 13px;
}
	.topnav-wrapper a{
		color: #fff;
	}
.topnav-email,.topnav-social-icons{
	float: right;
}
	.topnav-social-icons a{
		margin-right: 10px;
	}
		.topnav-social-icons a:last-child{
			margin-right: 0px;
		}

/* Primary Nav */
nav.navbar{
	background: #fff;
	padding: 17px 0;
	margin-top: 38px;
}
body.logged-in nav.navbar{
	margin-top: 63px;
}
.primary-nav ul.nav > li.active > a{
	background-color: #fff !important;
}
.primary-nav .navbar-brand img{
	margin-top: -6%;
}
.primary-nav .navbar-left{
	float: right !important;
}
.primary-nav li a{
	text-transform: uppercase;
	font-weight: 600;
	color: #000 !important;
}
.blue-bar-toggle{
    text-align: center;
    height: 0;
    margin-top: -6px;
}
.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover{
	background-color: #fff !important;
}

/* Footer */
.footer-wrapper{
	background: #3d4045;
	padding: 20px 20px 40px 20px;
	margin-top: 40px;
}
	.footer-wrapper .col-xs-12{
		padding-top: 30px;
	}
	.footer-wrapper h4{
		text-transform: uppercase;
		color: #fff;
		font-weight: 600;
	}
	.footer-wrapper ul.important-links{
		padding-left: 0;
		padding-top: 5px;
	}
		.footer-wrapper ul.important-links li{
			list-style-type: none;
			margin-top: 15px;
		}
			.footer-wrapper ul.important-links li a{
				color: #999;
				text-decoration: none;
			}
			.footer-wrapper ul.important-links li a:hover{
				color: #f97352;
			}
	.footer-wrapper .tagcloud{
		margin-top: 20px;
	}
		.footer-wrapper .tagcloud a{
			margin: 8px 3px 0 0;
		    padding: 8px 10px;
		    border: 2px solid rgba(0,0,0,.1);
		    text-transform: capitalize;
		    font-size: 12px !important;
		    line-height: 100%;
		    display: inline-block;
    		color: #F8F8F8;
    		text-decoration: none;
		}
	.footer-wrapper .address-wrapper{
		margin-top: 10px;
	}
		.footer-wrapper .address-wrapper p,
		.footer-wrapper .address-wrapper p a{
			color: #F8F8F8;
		}
			.footer-wrapper .address-wrapper p i{
				color: #b2b2b2;
			}
.sub-footer{
	background: #43474d;
}
	.sub-footer .copyright-wrapper{
		padding: 20px 0;
	}
		.sub-footer .copyright-wrapper span{
			margin-left: 30px;
			vertical-align: middle;
			color: #808080;
		}

/* Home Page */
.section-wrapper{
	margin-top: 40px;
	font-size: 16px;
	line-height: 1.8em;
	color: #777;
}
	.section-wrapper .section-content{
		margin-top: 40px;
	}
	.section-wrapper .tabs-wrapper{
		margin-top: 40px;
	}
		.section-wrapper .tabs-wrapper .nav-tabs{
			border: 0;
		}
			.section-wrapper .tabs-wrapper .nav-tabs li{
				border: 0;
				margin-right: 50px;
			}
			.section-wrapper .tabs-wrapper .nav-tabs>li:last-child{
				margin-right: 0;
			}
				.section-wrapper .tabs-wrapper .nav-tabs li>a{
					padding: 14px 18px;
					text-transform: uppercase;
					font-weight: 600;
					border: 1px solid #000;
					color: #000;
					border-radius: 0;
				}
			.section-wrapper .tabs-wrapper .nav-tabs li:hover{
				border: 0;
			}

			.section-wrapper .tabs-wrapper .nav-tabs>li>a,
			.section-wrapper .tabs-wrapper .nav-tabs>li>a:focus,
			.section-wrapper .tabs-wrapper .nav-tabs>li>a:hover{
				background: #fff;
			}
			.section-wrapper .tabs-wrapper .nav-tabs li.active{
				background: <?php the_field('brand_color','option'); ?>;
			}
				.section-wrapper .tabs-wrapper .nav-tabs li.active a{
					background: <?php the_field('brand_color','option'); ?>;
					color: #fff;
					border: 1px solid <?php the_field('brand_color','option'); ?>;
				}
		.section-wrapper .tabs-wrapper .tab-content{
			margin-top: 7%;
		}
			.section-wrapper .tabs-wrapper .tab-content h3{
				color: #000;
				text-transform: uppercase;
				font-weight: 800;
				margin-top: 0;
			}
			.section-wrapper .tabs-wrapper .tab-content img{
				width: 100%;
				height: auto;
			}
			.section-wrapper .tabs-wrapper .tab-content a{
				text-decoration: none;
			}
				.section-wrapper .tabs-wrapper .tab-content a:hover{
					color: #fff;
				}
	.service-item{
		margin-top: 20px;
	}
		.service-item h5{
			color: #000;
			background: #ddd;
			padding: 10px;
		}
		.service-item p img{
			min-width: 100%;
			height: auto;
		}
	.case-study-wrapper img{
		max-width: 100%;
		height: auto;
		margin-top: 20px;
	}
	.case-study-wrapper h4{
		font-weight: 600;
	}
	.case-study-wrapper p{
		color: #777;
		line-height: 1.5em;
	}
	.case-study-wrapper .thumbnail{
		margin-top: -1px;
		border-radius: 0;
		margin-bottom: 0;
	}
		.case-study-wrapper .thumbnail .date a{
			color: #999;
			font-style: italic;
			font-size: 10px;
			text-decoration: none;
		}
	.case-study-wrapper .read-more-wrapper{
		padding: 15px;
		border-left: 1px solid #ddd;
		border-right: 1px solid #ddd;
		border-bottom: 1px solid #ddd;
	}
		.case-study-wrapper .read-more-wrapper .read-more{
			color: #252525;
			font-size: 12px;
			font-weight: 600;
		}
		.case-study-wrapper .read-more-wrapper .loved-it{
			color: #898989;
			font-size: 12px;
			font-weight: 600;
		}
			.case-study-wrapper .read-more-wrapper .loved-it i{
				font-size: 14px;
			}
.colored-block{
	padding-bottom: 40px;
	background: #777;
	color: #fff;
	margin-top: 40px;
}
	.colored-block ul{
		padding-left: 0;
	}
	.colored-block p,.colored-block li{
		color: #fff;
		list-style-type: none;
		margin-top: 5px;
	}
	.colored-block p{
		text-align: justify;
	}
		.colored-block li i{
			color: #f97352;
		}
	.colored-block .section-content{
		text-align: center;
		color: #fff;
	}
	.colored-block .section-title-center{
		color: #fff;
	}
.frm_forms{
	margin-top: 30px !important;
}
#contact-form div.row{
	margin-top: 30px;
}
	#contact-form div.row input,
	#contact-form div.row textarea{
		border-radius: 0;
	}

/* Single Page */
.single-title-wrapper{
	margin-top: -14px;
    background: #fafafa;
    border-bottom: 1px solid #eee;
}
	.single-title-wrapper h4{
		margin: 30px 0;
		text-transform: uppercase;
	}
	.single-post .section-wrapper h3{
		text-transform: uppercase;
		color: #000;
	}
	.single-post .post-meta-wrapper{
		margin-top: 25px;
		margin-bottom: 25px;
		font-style: italic;
	}
		.single-post .post-meta-wrapper .share-icons{
			text-align: right;
			font-style: normal;
		}
			.single-post .post-meta-wrapper .share-icons a{
				margin-right: 20px;
				color: #999;
				text-decoration: none;
			}
			.single-post .popover-content a:hover{
				color: #fff;
			}
			.single-post .post-meta-wrapper .share-icons a:last-child{
				margin-right: 0px;
			}
			.single-post .post-meta-wrapper .popover-title{
				display: none;
			}
			.single-post .post-meta-wrapper .popover,
			.single-post .post-meta-wrapper .popover-content{
				background: #333 !important;
			}
			.single-post .post-meta-wrapper .popover.bottom > .arrow:after{
				border-bottom-color: #333;
			}
	.single-post .author-wrapper,
	.single-post .recent-posts-wrapper,
	.single-post .comments-wrapper{
		padding-top: 30px;
		border-top: 2px solid #ddd;
	}
		.single-post .author-wrapper img{
			float: left;
		    border-radius: 50%;
		    margin-right: 30px;
		    margin-bottom: 80px;
		}
		.single-post .author-wrapper a{
			text-decoration: none !important;
			color: #777;
			font-weight: 800;
		}
			.single-post .author-wrapper h4 a:hover{
				color: #f97352;
			}
		.single-post .author-wrapper i{			
			font-size: 18px;
		}
	.single-post .recent-posts-wrapper .thumbnail{
		padding: 0;
		border-radius: 0;
	}
		.single-post .recent-posts-wrapper .thumbnail img{
			margin: 0;
			min-width: 100%;
		}
		.single-post .recent-posts-wrapper .thumbnail a{
			text-decoration: none;
		}
		.single-post .recent-posts-wrapper .thumbnail h5{
			text-transform: uppercase;
			font-weight: 800;
		}
		.single-post .recent-posts-wrapper h4{
			margin-bottom: 40px;
			text-align: center;
			font-weight: 800;
			text-transform: uppercase;
		}

/* Contac us */
.contact-wrapper h3,
.contact-wrapper h4 {
	color: #000;
	font-weight: 800;
	margin-top: 0;
	text-transform: uppercase;
}
.contact-wrapper .fimage{
	margin-top: 15px;
}
	.contact-wrapper .fimage img{
		min-width: 100%;
		height: auto;	
	}
.contact-wrapper .contact-numbers,
.contact-wrapper .contact-address,
.contact-wrapper .contact-content{
	margin-top: 30px;
}
	.contact-wrapper .contact-address .address-item{
		margin-top: 30px;
	}
	.contact-wrapper .contact-address .address-item strong{
		color: #f97352;
		border-bottom: 2px solid;
	}
.contact-wrapper .address-map{
	min-width: 100%;
	height: 300px;
}

/* Blog Page */
.blog-wrapper .blog-item{
	margin-bottom: 50px;
}
	.blog-wrapper .blog-item h3{
		color: #000;
		text-transform: uppercase;
	}
	.blog-wrapper .blog-item .fimage img{
		min-width: 100%;
		height: auto;
		margin-bottom: 30px;
	}
	.blog-wrapper .blog-item .post-meta-wrapper{
		font-size: 12px;
		font-style: italic;
		margin-bottom: 20px;
	}
		.blog-wrapper .blog-item .post-meta-wrapper a{
			font-size: 12px;
			font-style: italic;
		}
	.blog-wrapper .blog-item .read-more-wrapper{
		margin-top: 30px;
	}
		.blog-wrapper .blog-item .read-more-wrapper a{
			padding: 14px 20px;
			background: #f97352;
			color: #fff;
			text-transform: uppercase;
			font-size: 12px;
			font-weight: 800;
			text-decoration: none;
		}
	.blog-wrapper .blog-item ul{
		padding-left: 0;
	}
		.blog-wrapper .blog-item ul li{
			list-style-type: none;
			padding: 15px 20px;
			border-bottom: 1px solid #eee;
			border-right: 1px solid #eee;
			margin: 0;
			line-height: 20px;
		}
			.blog-wrapper .blog-item ul li:last-child{
				border-bottom: 0;
			}
			.blog-wrapper .blog-item ul li a{
				text-decoration: none;
				color: #777;
			}
			.blog-wrapper .blog-item .popover-content a{
				margin-bottom: 15px;
				display: inline-block;
			}
			.blog-wrapper .blog-item .popover-content a:last-child{
				margin-bottom: 0px;
			}
			.blog-wrapper .blog-item .popover-content a:hover{
				color: #fff;
			}			
			.blog-wrapper .blog-item .popover-title{
				display: none;
			}
			.blog-wrapper .blog-item .popover,
			.blog-wrapper .blog-item .popover-content{
				background: #333 !important;
			}
			.blog-wrapper .blog-item .popover-content{
				padding-left: 19px;
			}
			.blog-wrapper .blog-item .popover.top > .arrow:after{
				border-top-color: #333;
			}

/* Important Links */
#menu-important-links li{
	padding: 8px 12px;
	border-radius: 0;
}
	#menu-important-links li a{
		text-decoration: none;
		color: #777;
	}
#menu-important-links li.current-menu-item{
	background: #eee;
}
	#menu-important-links li.current-menu-item a{
		font-weight: 800;
	}

/* Sidebar */
.sidebar h4,.sidebar h3{
	color: #000;
	text-transform: uppercase;
	margin-top: 0;
	font-weight: 800;
}
.sidebar .space-40{
	margin-top: 40px;
}
/* Slider-1 */
.slider_text{
font-size:36px !important;
color:#fff !important;
}
.slider_text_description{
color:#fff !important;
font-size:24px !important;
}

/* Comment Form */
form#commentform {
    /*margin-bottom: 40px;*/
}
	form#commentform textarea, form#commentform input[type="text"] {
	    display: block;
	    width: 100%;
	}
	form#commentform input[type="submit"]{
		background: #f97352;
	    border: 0;
	    color: #fff;
	    padding: 12px 26px;
	    margin-top: 17px;
	    text-transform: uppercase;
    	font-size: 13px;
	}
h3#comments{
	text-transform: none;
	margin-bottom: 25px;
}
ol.commentlist{
	padding-left: 0;
}
	ol.commentlist li{
		list-style-type: none;
	}
		ol.commentlist li .comment-body{
			padding-bottom: 15px;
			margin-bottom: 15px;
			border-bottom: 1px dotted;
		}
.comment-respond{
	margin-top: 40px;
}
h3.comment-reply-title,.comment-notes{
	text-align: center;
}

/*Back to top */
#back-to-top,.contact-us {
    position: fixed;
    bottom: 30px;
    right: 50px;
    z-index: 9999;
    width: 32px;
    height: 32px;
    text-align: center;
    line-height: 30px;
    background: #f5f5f5;
    color: #444;
    cursor: pointer;
    border: 0;
    border-radius: 2px;
    text-decoration: none;
    transition: opacity 0.2s ease-out;
    opacity: 0;
}
.contact-us {
	right: 100px;
    opacity: 1;
    font-size: 20px;
    background: rgba(249,115,82,0.8);
    color: #fff;
}
#back-to-top:hover {
    background: #e9ebec;
}
#back-to-top.show {
    opacity: 1;
}

/* Wp Live Chat */
#wp-live-chat{
	right: 150px !important;
}
#wp-live-chat-header{
	width: 40px !important;
	height: 40px !important;
	background-color: <?php the_field('brand_color','option'); ?> !important;
}

#recaptcha_image { width:auto !important; max-width: 100%;}
#recaptcha_image img { width:100% ;}
#recaptcha_response_field { width: 100% !important; max-width: 100%; }