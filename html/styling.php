<style type="text/css">
	@media (max-width: 767px) {
		html.mantis-float-top{
			margin-top: 50px !important;
		}

		html.mantis-float-bottom{
			margin-bottom: 50px !important;
		}

		.mantis-ad.mantis-float > div{
			position: fixed;
			text-align: center;
			width: 100%;
			z-index: 4000;
		}

		.mantis-ad.mantis-float-top > div{
			top: 0;
		}

		.mantis-ad.mantis-float-bottom > div{
			bottom: 0;
		}
	}
</style>
<script type="text/javascript">
	(function($){
		var hasFloat = $('.mantis-float');

		if(hasFloat.length > 0){
			if(hasFloat.hasClass('mantis-float-top')){
				$('html').addClass('mantis-float-top');
			}else{
				$('html').addClass('mantis-float-bottom');
			}
		}
	})(jQuery);
</script>