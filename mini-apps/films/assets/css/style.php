<style type="text/css">

	body {
	    padding: 0px;
	    margin: 0px;
	    font-family: sans-serif;
	}

	.content {
	    display: block;
	    float: none;
	    width: 750px;
	    margin: 0 auto;
	}

	.films_block {
	    display: block;
	    float: left;
	    width: 100%;
	    position: relative;
	    margin-top: 20px;
	}

	.center_content {
	    display: block;
	    float: left;
	    width: 100%;
	    position: relative;
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

	.film_card {
	    display: block;
	    float: left;
	    width: 160px;
	    cursor: pointer;
	    object-fit: cover;
	    border-radius: 5px;
	    position: relative;
	    margin-right: 36px;
	    margin-bottom: 36px;
	    transition: .2s ease all;
	    -moz-transition: .2s ease all;
	    -webkit-transition: .2s ease all;
	}

	.film_card:hover {
	    -webkit-transform: scale(1.08);
	    transform: scale(1.08);
	}


	.film_preview {
	    display: block;
	    float: left;
	    width: 100%;
	    object-fit: cover;
	    border-radius: 5px;
	    pointer-events: none;
	}

	.age {
	    display: block;
	    float: left;
	    position: absolute;
	    top: 20px;
	    left: 10px;
	    padding: 5px;
	    border-radius: 3px;
	    background: #0077f5;
	    color: #fff;
	    font-weight: 700;
	    font-size: 14px;

	}

	.films_block .film_card:nth-child(4n+4) {
	    display: block;
	    margin-right: 0px;
	}

	.film_title {
	    display: block;
	    float: left;
	    width: 100%;
	    color: #000;
	    font-weight: 700;
	    margin-top: 10px;
	}

	.film_param {
	    display: inline-block;
	    float: left;
	    padding: 5px;
	    padding-left: 10px;
	    padding-right: 10px;
	    background: #ffdd2d;
	    border-radius: 5px;
	    font-size: 12px;
	    color: #000;
	    font-weight: 700;
	    margin-right: 10px;
	}

	.film_params {
	    display: block;
	    float: left;
	    width: 100%;
	    margin-top: 10px;
	}

	.nav_bar {
	    display: block;
	    float: left;
	    width: 100%;
	    padding-top: 20px;
	    padding-bottom: 15px;
	    margin-bottom: 20px;
	    border-bottom: 1px solid #e6e6e6;
	}

	.nav_btn {
	    display: block;
	    color: #0077f5;
	    text-decoration: none;
	    font-size: 20px;
	    transition: .1s ease all;
	    -moz-transition: .1s ease all;
	    -webkit-transition: .1s ease all;
	}

	.nav_btn:hover {
	    color: #006bdc;
	}

	.nav_btn:active {
	    -webkit-transform: scale(.96);
	    transform: scale(.96);
	}

	.side_info {
	    display: block;
	    float: left;
	    width: 160px;
	}

	.main_info {
	    display: block;
	    float: left;
	    width: 540px;
	    margin-left: 50px;
	}

	.film_rating {
	    display: inline-block;
	    float: left;
	    margin-right: 10px;
	    padding: 3px;
	    padding-left: 8px;
	    padding-right: 8px;
	    border: 2px solid #000;
	    border-radius: 5px;
	    font-size: 14px;
	}

	.film_desc {
	    display: block;
	    float: left;
	    width: 100%;
	    position: relative;
	    margin-top: 20px;
	}

	.film_title_main {
	    display: block;
	    float: left;
	    width: 100%;
	    position: relative;
	    font-size: 25px;
	    font-weight: 700;
	    color: #000;
	}

	.promo_block {
	    display: none;
	    float: left;
	    width: 100%;
	    position: relative;
	    margin-top: 10px;
	    transition: .2s ease all;
	    -moz-transition: .2s ease all;
	    -webkit-transition: .2s ease all;
	}


	.promo_image {
	    display: block;
	    float: left;
	    width: 100%;
	    object-fit: cover;
	    border-radius: 5px;
	}

	::-webkit-scrollbar {
	    width: 10px;
	}

	::-webkit-scrollbar-track {
	    background: #f1f1f1;
	}

	::-webkit-scrollbar-thumb {
	    background: #e6e6e6;
	}

	::-webkit-scrollbar-thumb:hover {
	    background: #555;
	}

</style>