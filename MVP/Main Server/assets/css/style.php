<style type="text/css">

@import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap');

body {
	padding: 0px;
	margin: 0px;
	font-family: 'Open Sans';
}

body::-webkit-scrollbar-track {
	margin-right: 5px;
	background: transparent;
	margin-right: 5px;
	border-radius: 0
}

body::-webkit-scrollbar {
	width: 4px;
	border-radius: 0
}

body::-webkit-scrollbar-thumb {
	background-color: #bdbdbd;
	padding-left: 5px;
	padding-right: 5px;
	border-radius: 0
}

.merchant_v_block {
	display: block;
	float: left;
	width: 100%;
	position: relative;
	margin-top: 20px;
}

.mv_side {
	display: block;
	float: left;
	width: 64px;
}

.mv_app_title {
	display: block;
	float: left;
	width: 100%;
	font-size: 18px;
	font-weight: 700;
}

.mv_sms_info {
	display: block;
	float: left;
	width: 100%;
	margin-top: 20px;
	font-size: 16px;
}

.mv_status {
	display: block;
	float: left;
	width: 100%;
	font-size: 30px;
	font-weight: 700;
	margin-top: 30px;
	color: #009688;
}

.mv_icon {
	display: block;
	float: left;
	width: 100%;
	border-radius: 8px;
}

.mv_main {
	display: block;
	float: left;
	margin-left: 20px;
	width: calc(100% - 84px);
}

.mv_app_desc {
	display: block;
	float: left;
	width: 100%;
	margin-top: 10px;
	font-size: 14px;
}

.mv_total_block {
	display: block;
	float: left;
	width: 100%;
	border-top: 1px solid #e6e6e6;
	margin-top: 20px;
	font-size: 25px;
	padding-top: 20px;
}

.mv_btn {
	display: block;
	float: right;
	font-size: 16px;
	padding: 10px;
	padding-left: 15px;
	padding-right: 15px;
	color: #fff;
	background: #0077f5;
	border-radius: 5px;
	text-align: center;
	text-decoration: none;
	cursor: pointer;
}

.mv_btn:hover {
	background: #006bdc;
}

.mv_btn:active {
	-webkit-transform: scale(.96);
    transform: scale(.96);
}

.all_products {
	display: block;
	float: left;
	width: 100%;
	background: #0077f5;
	height: 350px;
	margin-top: 72px;
}

.ap_total {
	display: block;
	float: left;
	width: 100%;
	font-size: 30px;
	font-weight: 700;
	color: #fff;
	margin-top: 20px;
}

.card {
	display: block;
	float: left;
	width: 240px;
	padding: 20px;
	height: 156px;
	border-radius: 5px;
	background-image: url('https://online.vtb.ru/content/dam/vtb24-online/icons/products/cards/light/default.png?date=1589798583866/_jcr_content/renditions/cq5dam.thumbnail.319.319.png');
	background-repeat: no-repeat;
	background-size: 100%;
	margin-right: 50px;
	box-shadow: rgba(0,56,110,.08) 0 10px 30px;
}

.card_value {
	display: block;
	float: left;
	width: 100%;
	font-size: 28px;
	font-weight: 700;
	margin-top: 30px;
}

.card_number {
	display: block;
	float: left;
	width: 100%;
	font-size: 22px;
	margin-top: 20px;
	font-size: 22px;
}

.card_category {
	display: block;
	float: left;
	width: 100%;
	font-size: 14px;
	text-transform: uppercase;
}

.card_logo {
	display: block;
	float: right;
	width: 50px;
	margin-top: 4px;
}

.cards_block {
	display: block;
	float: left;
	width: 100%;
	position: relative;
	margin-top: 30px;
}

.ap_center {
	display: block;
	float: none;
	width: 1100px;
	margin: 0 auto;
	margin-top: 20px;
}

.menu_item {
	display: block;
	float: left;
	text-decoration: none;
	color: #005a99;
	font-size: 16px;
	padding: 25px;
	font-weight: 700;
	transition: .2s ease all;
	--moz-transition: .2s ease all;
	-webkit-transition: .2s ease all;
}

.menu_item:hover {
	color: #009fdf;
}

.menu_block {
	display: block;
	float: left;
	margin-left: 20px;
}

.logo {
	display: block;
	float: left;
	width: 100px;
	margin-top: 15px;
	margin-bottom: 15px;
}

.center_header {
	display: block;
	float: none;
	width: 1100px;
	margin: 0 auto;
}

.sc_item_block {
	display: block;
	float: left;
	width: calc(100% - 20px);
	padding: 10px;
	border-radius: 5px;
	margin-top: 5px;
	margin-bottom: 5px;
	cursor: pointer;
	transition: .2s ease all;
	--moz-transition: .2s ease all;
	-webkit-transition: .2s ease all;
	color: #000;
}

.sc_item_block:hover {
	box-shadow: rgba(0, 56, 110, 0.08) 0px 10px 30px;
}

.sc_icon {
	display: block;
	float: left;
	width: 50px;
	height: 50px;
	border-radius: 8px;
}

.sc_active {
	display: block;
	float: left;
	box-shadow: rgba(0, 56, 110, 0.08) 0px 10px 30px;
}

.sc_title {
	display: block;
	float: left;
	width: calc( 100% - 74px);
	margin-left: 10px;
	font-size: 18px;
	font-weight: 700;
	margin-top: 12px;
}

.main_content {
	display: block;
	float: left;
	width: 780px;
	position: relative;
	min-height: 100%;
	height: 100%;
	margin-left: 35px;
}

.side_content {
	display: block;
	float: left;
	width: 285px;
}

.header {
	display: block;
	float: left;
	width: 100%;
	background: #fff;
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	z-index: 999;
	box-shadow: rgba(0, 56, 110, .08) 0 10px 30px;
}

.content {
	display: block;
	float: none;
	width: 1100px;
	margin: 0 auto;
}

.center_content {
	display: block;
	float: left;
	width: 100%;
	margin-top: 100px;
}

.frame {
	display: block;
	float: left;
	width: 100%;
	min-height: 100%;
	height: 100%;
	border: 0px;
	outline: none;
	height: auto;
}

.dc_logout {
	max-width: 250px!important;
	min-width: 250px!important;
}

.chi_icon {
	display: block;
	float: left;
	font-size: 22px!important;
}

.chi_title {
	display: block;
	float: left;
	position: relative;
	color: #3b4256;
	font-family: 'Open Sans';
}


.dc_main_title {
	display: block;
	float: left;
	width: calc(100% - 40px);
	font-size: 20px;
	font-weight: 700;
	padding: 20px;
	border-bottom: 1px solid #e6e6e6;
}

.dropbtn {
	background: transparent;
	color: #fff;
	font-size: 16px;
    padding: 25px;
	border: none;
	cursor: pointer;
	outline: none;
	font-weight: 700;
	transition: .2s ease all;
	-moz-transition: .2s ease all;
	-webkit-transition: .2s ease all;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

.dropbtn:hover,
.dropbtn:focus {
	background: #e6e6e6;
}

.dropdown {
	float: right;
	position: relative;
	display: inline-block;
}

.dropdown-content {
	display: none;
	right: 0;
	position: absolute;
	background-color: #fff;
	min-width: 250px;
	box-shadow: 0 15px 30px 0 rgba(0, 0, 0, .5);
	z-index: 999;
	border-radius: 5px;
}

.dropdown-content:before {
	position: absolute;
	top: -10px;
	right: 10px;
	content: '';
	width: 0;
	height: 0;
	border-left: 10px solid transparent;
	border-right: 10px solid transparent;
	border-bottom: 10px solid #fff;
	z-index: 2;
}

.dropdown-content:after {
	position: absolute;
	top: -12px;
	right: 10px;
	content: '';
	width: 0;
	height: 0;
	border-left: 12px solid transparent;
	border-right: 12px solid transparent;
	border-bottom: 12px solid rgba(0, 0, 0, .03);
	z-index: 1;
}

#profile_content_block {
	max-width: 300px!important;
	right: 0;
}

.sib_title {
	display: block;
	float: left;
	width: 100%;
	font-size: 16px;
	font-weight: 700;
	color: #fff;
}

.sub_info_big {
	display: block;
	float: left;
	width: calc(100% - 50px);
	background: #007aff;
	padding: 25px;
	padding-top: 15px;
	padding-bottom: 15px;
	border-radius: 0 0 4px 4px;
}

.sib_btn {
	display: block;
	float: left;
	padding: 8px;
	padding-left: 10px;
	padding-right: 10px;
	color: #007aff;
	text-decoration: none;
	text-transform: uppercase;
	background: #fff;
	border-radius: 3px;
	font-size: 14px;
	font-weight: 700;
	margin-top: 10px;
}

.sib_content {
	display: block;
	float: left;
	width: 100%;
	color: #fff;
	font-size: 14px;
	margin-top: 5px;
}

#profile_content {
	display: block;
	float: left;
	padding: 15px;
}

.dc_u_links {
	display: block;
	float: left;
	width: calc(100% - 20px);
	padding: 10px;
	text-decoration: none;
	font-size: 15px;
	font-weight: normal;
	cursor: pointer;
	color: #1e1f21;
	transition: .2s ease all;
	-moz-transition: .2s ease all;
	-webkit-transition: .2s ease all;
}

.dc_u_links:hover {
	border-radius: 3px;
	background: #e6e6e6;
}

.auth_content {
	display: block;
	float: left;
	width: 100%;
	position: relative;
	height: 100%;
	overflow: hidden;
}

.auth_container {
	display: flex!important;
	align-items: center;
	justify-content: center;
}

.hb_inner {
	width: 500px;
	display: block;
	float: none;
	margin: 0 auto;
}

.hb_start {
	display: block;
	float: left;
	padding: 15px;
	padding-left: 20px;
	padding-right: 20px;
	border-radius: 8px;
	text-decoration: none;
	color: #0077f5;
	background: #fff;
	text-align: center;
	font-size: 22px;
	font-weight: 700;
}

.hb_video {
	display: block;
	float: left;
	padding: 15px;
	padding-left: 20px;
	padding-right: 20px;
	color: #fff;
	text-decoration: none;
	font-size: 22px;
	font-weight: 700;
	margin-left: 20px;
}

.hb_btns_block {
	display: block;
	float: left;
	width: 100%;
	position: relative;
	margin-top: 50px;
}

.hb_title {
	display: block;
	float: left;
	width: 100%;
	font-size: 80px;
	font-weight: 700;
	color: #fff;
	pointer-events: none;
	letter-spacing: 5px;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

.half_block {
	display: block;
	float: left;
	width: 50%;
	height: 100%;
	position: relative;
}

.info_block {
	display: flex!important;
	align-items: center;
	justify-content: left;
	background: #0077f5;
}

.g-recaptcha {
	display: block;
	float: left;
	width: 100%;
}

h1 {
	color: #151515;
}

*,
*:before,
*:after {
	-webkit-border-sizing: border-box;
	-moz-border-sizing: border-box;
	border-sizing: border-box;
}

.reg_button {
	display: block;
	float: left;
	width: 100%;
	background: #0077f5;
	border: 1px solid #0077f5;
	padding-top: 15px;
	padding-bottom: 15px;
	color: #fff;
	margin-top: 15px;
	font-size: 18px;
	-webkit-appearance: none;
	outline: none;
	border-radius: 5px;
	moz-transition: all .2s linear;
	-o-transition: all .2s linear;
	-webkit-transition: all .2s linear;
	cursor: pointer;
}

.reg_button:hover {
	background: #006bdc;
}

.block_title {
	display: block;
	float: left;
	text-align: left;
	width: 100%;
	color: #151515;
}

.reg_block {
	display: block;
	width: 302px;
	height: 500px;
	margin: 0 auto;
	margin-top: 100px;
}

	.group {
	position: relative;
	font-family: sans-serif;
	width: 100%;
	margin-bottom: 12px;
	margin-top: 5px;
	display: block;
	float: left;
	border-radius: 5px;
}

.group input {
	display: block;
	float: left;
	font-size: 18px;
	padding: 15px;
	width: 100%;
	border: none;
	border: 2px solid #e6e6e6;
	border-radius: 5px;
	transition: .2s ease all;
	--moz-transition: .2s ease all;
	-webkit-transition: .2s ease all;
	font-family: sans-serif;
	color: #1e1e1e;
	-webkit-appearance: none;
	background: #e6e6e6;
	border-radius: 5px;
}

.group input:invalid {
	box-shadow: none;
}

.group input:focus {
	outline: none;
	border: 2px solid #0077f5;
	background: transparent;
}

.group input:disabled {
	outline: none;
	border: 2px solid #0077f5;
	background: transparent;
}

.group label {
	color: #999;
	font-size: 18px;
	font-weight: normal;
	position: absolute;
	pointer-events: none;
	left: 15px;
	top: 18px;
	transition: .2s ease all;
	--moz-transition: .2s ease all;
	-webkit-transition: .2s ease all;
	font-family: sans-serif;
}

.group input:focus~label,
input:valid~label,
input:disabled~label {
	top: -10px;
	padding-left: 5px;
	padding-right: 5px;
	background: #fff;
	border-radius: 5px;
	left: 10px;
	font-size: 16px;
	color: #0077f5;
}

.highlight {
	position: absolute;
	height: 60%;
	width: 100px;
	top: 25%;
	left: 0;
	pointer-events: none;
	opacity: .5;
}

input:focus~.highlight {
	-webkit-animation: inputHighlighter .3s ease;
	--moz-animation: inputHighlighter .3s ease;
	animation: inputHighlighter .3s ease;
}

/* MODAL WINDOW */
.modal_title {
	display: block;
	float: left;
	width: calc(100% - 40px);
	font-size: 25px;
	color: #000;
	padding: 20px;
	font-weight: 700;
}

.modal_message {
	width: 480px !important;
	max-width: 480px !important;
}

.modal_AccountSelection {
	background: #f1f4f9;
	padding-top: 15px !important;
	padding-bottom: 5px !important;
}

.TaskBlock {
	width: 764px !important;
	max-width: 764px !important;
}

.mc_avatarThumb {
	border-radius: 100%;
	object-fit: cover;
	display: block;
	float: left;
	width: 80px;
	height: 80px;
}

.mc_uc_container {
	display: block;
	float: left;
	width: calc(100% - 110px);
	margin-left: 30px;
	position: relative;
}

.mc_uc_title {
	display: block;
	float: left;
	width: 100%;
	font-size: 24px;
	font-weight: 700;
	margin-top: 10px;
}

.mc_uc_stat {
	display: block;
	float: left;
	margin-right: 10px;
	margin-top: 10px;
	text-align: center;
	color: #151515;
	font-size: 18px;
}

.mc_userCard {
	display: block;
	float: left;
	width: 100%;
	margin-top: 10px;
	background: transparent;
	border-radius: 10px;
	padding-top:10px;
	padding-bottom: 10px;
}

.cancelBtn {
	display: block;
	float: left;
	color: #007aff;
	padding-top:10px;
	padding-bottom: 10px;
	padding-left: 20px;
	padding-right: 20px;
	text-decoration: none;
	cursor: pointer;
	font-size: 20px;
	position: relative;
	outline:none;
	border:none;
	background: transparent;
	font-weight: normal;
	border-radius: 0px;
}

.cancelBtn:hover {
	background: transparent;
	color: #3395ff;
}

.block_title {
	display: block;
	float: left;
	text-align: left;
	width: 100%;
	color: #151515;
	padding-top: 0px;
	padding-bottom: 0px;
}

.block_title h1 {
	padding-top: 0px;
	padding-bottom: 0px;
	margin-top: 5px;
	margin-bottom: 5px;
}

.reg_block_side {
	display: flex;
    align-items: center;
    justify-content: center;
    float: left;
	width: 350px;
	height: 100%;
	border-radius: 10px 0px 0px 10px;
	background: -webkit-linear-gradient(to right, #e6e6e6, #ffffff);
	background: linear-gradient(to right, #e6e6e6, #ffffff);
}

.p_reminder {
	display: block;
	float: left;
	width: 100%;
	color: #0077f5;
	text-decoration: none;
	font-size: 18px;
	text-align: center;
	margin-top: 15px;
}

.rbs_image {
	display: block;
	float: none;
	margin:0 auto;
	width: 100%;
	border-radius: 10px 0px 0px 10px;
	pointer-events: none;
}


.reg_content {
	display: block;
	float: left;
	width: 100%;
	height: 425px;
	position: relative;
	background: #fff;
	background: #fff;
	border-radius: 10px;
	-webkit-box-shadow: 0 0 20px 0 rgba(31,45,61,.05);
    box-shadow: 0 0 20px 0 rgba(31,45,61,.05);
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    --moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.mm_title {
	display: block;
	float: left;
	width: calc(100% - 40px);
	font-size: 25px;
	color: #000;
	background: #fff;
	border-radius: 5px 5px 0px 0px;
	border-bottom: 1px solid #e6e6e6;
	padding: 20px;
	padding-bottom: 10px;
	font-weight: 700;
}

.blocker {
	position: fixed;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 100%;
	overflow: auto;
	z-index: 9999;
	padding: 20px;
	box-sizing: border-box;
	background-color: #000;
	background-color: rgba(30, 31, 33, 0.75);
	text-align: center
}

.blocker:before {
	content: "";
	display: inline-block;
	height: 100%;
	vertical-align: middle;
	margin-right: -0.05em
}

.blocker.behind {
	background-color: transparent
}

.modal_content {
	display: block;
	float: left;
	width: calc(100% - 40px);
	padding: 20px;
	padding-top: 0px;
	font-size: 18px;
	border-radius: 0px 0px 5px 5px;
}

.modal_code {
	display: block;
	float: left;
	padding-left: 20px;
	padding-right: 20px;
	background: #292a2f;
	width: calc(100% - 40px);
	padding-bottom: 0px;
	border-radius: 0px 0px 3px 3px;
}

.modal_code pre {
	padding-top: 0px !important;
	padding-bottom: 0px !important;
	margin-top: 0px !important;
	margin-bottom: 0px !important;
}

.modal_title {
	display: block;
	float: left;
	width: calc(100% - 40px);
	font-size: 25px;
	color: #000;
	padding: 20px;
	font-weight: 700;
}

.mm_title {
	display: block;
	float: left;
	width: calc(100% - 40px);
	font-size: 19px;
	color: #000;
	padding: 20px;
	padding-bottom: 10px;
	font-weight: 700;
	background: #f1f4f9;
}

.copy_code {
	display: block;
	float: right;
	padding: 10px;
	padding-left: 15px;
	padding-right: 15px;
	background: #e6e6e6;
	border-radius: 3px;
	margin-top: -5px;
	color: #1e1f21;
	font-size: 16px;
	transition: 0.2s ease all;
    --moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    --moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    cursor: pointer;
}

.copy_code:hover {
	background: #d9d9d9;
}

.modal {
	display: none;
	vertical-align: middle;
	position: relative;
	z-index: 999;
	max-width: 600px;
	box-sizing: border-box;
	width: 90%;
	background: #fff;
	padding: 0px;
	-webkit-border-radius: 4px;
	--moz-border-radius: 4px;
	-o-border-radius: 4px;
	-ms-border-radius: 4px;
	border-radius: 4px;
	-webkit-box-shadow: 0 0 10px #1e1f21;
	--moz-box-shadow: 0 0 10px #1e1f21;
	-o-box-shadow: 0 0 10px #1e1f21;
	-ms-box-shadow: 0 0 10px #1e1f21;
	box-shadow: 0 0 10px #1e1f21;
	text-align: left
}


.close_modal {
	display: block;
	float: right;
	color: #000;
	margin-left: 20px;
	font-size: 28px;
	padding: 5px;
	border-radius: 100%;
	margin-top: -5px;
	transition: 0.2s ease all;
    --moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    --moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    cursor: pointer;
    text-decoration: none;
}

.close_modal:hover {
	border-radius: 5px;
	background: #e6e6e6;
}

.modal a.close-modal {
	position: absolute;
	top: -12.5px;
	right: -12.5px;
	display: block;
	width: 30px;
	height: 30px;
	text-indent: -9999px;
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center center;
	background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAAA3hJREFUaAXlm8+K00Acx7MiCIJH/yw+gA9g25O49SL4AO3Bp1jw5NvktC+wF88qevK4BU97EmzxUBCEolK/n5gp3W6TTJPfpNPNF37MNsl85/vN/DaTmU6PknC4K+pniqeKJ3k8UnkvDxXJzzy+q/yaxxeVHxW/FNHjgRSeKt4rFoplzaAuHHDBGR2eS9G54reirsmienDCTRt7xwsp+KAoEmt9nLaGitZxrBbPFNaGfPloGw2t4JVamSt8xYW6Dg1oCYo3Yv+rCGViV160oMkcd8SYKnYV1Nb1aEOjCe6L5ZOiLfF120EjWhuBu3YIZt1NQmujnk5F4MgOpURzLfAwOBSTmzp3fpDxuI/pabxpqOoz2r2HLAb0GMbZKlNV5/Hg9XJypguryA7lPF5KMdTZQzHjqxNPhWhzIuAruOl1eNqKEx1tSh5rfbxdw7mOxCq4qS68ZTjKS1YVvilu559vWvFHhh4rZrdyZ69Vmpgdj8fJbDZLJpNJ0uv1cnr/gjrUhQMuI+ANjyuwftQ0bbL6Erp0mM/ny8Fg4M3LtdRxgMtKl3jwmIHVxYXChFy94/Rmpa/pTbNUhstKV+4Rr8lLQ9KlUvJKLyG8yvQ2s9SBy1Jb7jV5a0yapfF6apaZLjLLcWtd4sNrmJUMHyM+1xibTjH82Zh01TNlhsrOhdKTe00uAzZQmN6+KW+sDa/JD2PSVQ873m29yf+1Q9VDzfEYlHi1G5LKBBWZbtEsHbFwb1oYDwr1ZiF/2bnCSg1OBE/pfr9/bWx26UxJL3ONPISOLKUvQza0LZUxSKyjpdTGa/vDEr25rddbMM0Q3O6Lx3rqFvU+x6UrRKQY7tyrZecmD9FODy8uLizTmilwNj0kraNcAJhOp5aGVwsAGD5VmJBrWWbJSgWT9zrzWepQF47RaGSiKfeGx6Szi3gzmX/HHbihwBser4B9UJYpFBNX4R6vTn3VQnez0SymnrHQMsRYGTr1dSk34ljRqS/EMd2pLQ8YBp3a1PLfcqCpo8gtHkZFHKkTX6fs3MY0blKnth66rKCnU0VRGu37ONrQaA4eZDFtWAu2fXj9zjFkxTBOo8F7t926gTp/83Kyzzcy2kZD6xiqxTYnHLRFm3vHiRSwNSjkz3hoIzo8lCKWUlg/YtGs7tObunDAZfpDLbfEI15zsEIY3U/x/gHHc/G1zltnAgAAAABJRU5ErkJggg==')
}

.modal-spinner {
	display: none;
	position: fixed;
	top: 50%;
	left: 50%;
	transform: translateY(-50%) translateX(-50%);
	padding: 12px 16px;
	border-radius: 5px;
	background-color: #111;
	height: 20px
}

.modal-spinner>div {
	border-radius: 100px;
	background-color: #fff;
	height: 20px;
	width: 2px;
	margin: 0 1px;
	display: inline-block;
	-webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
	animation: sk-stretchdelay 1.2s infinite ease-in-out
}

.modal-spinner .rect2 {
	-webkit-animation-delay: -1.1s;
	animation-delay: -1.1s
}

.modal-spinner .rect3 {
	-webkit-animation-delay: -1.0s;
	animation-delay: -1.0s
}

.modal-spinner .rect4 {
	-webkit-animation-delay: -0.9s;
	animation-delay: -0.9s
}

@-webkit-keyframes sk-stretchdelay {
	0%,
	40%,
	100% {
		-webkit-transform: scaleY(0.5)
	}
	20% {
		-webkit-transform: scaleY(1.0)
	}
}

@keyframes sk-stretchdelay {
	0%,
	40%,
	100% {
		transform: scaleY(0.5);
		-webkit-transform: scaleY(0.5)
	}
	20% {
		transform: scaleY(1.0);
		-webkit-transform: scaleY(1.0)
	}
}
/* =========================== */
</style>