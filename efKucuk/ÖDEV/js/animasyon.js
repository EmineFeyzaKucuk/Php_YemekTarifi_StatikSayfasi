 $(document).ready(function(){
	 $('[data-toggle="tooltip"]').tooltip();
		function boyutlandir(){
			y=$("#resimOlcu").height();
			g=$("#resimOlcu").width();
			$(".dolgu").css({height:y-20,width:g-20});
		}
		boyutlandir();
		$(window).resize(function(){
			boyutlandir();
		});
		
		$(".reklam").mouseenter(function(){
			i=$(".reklam").index(this);
			$(".reklam:eq("+i+") .dolgu").show(250);
		});
		$(".reklam").mouseleave(function(){
			$(".reklam:eq("+i+") .dolgu").hide(250);
		});

		$(".bilgi").mouseenter(function(){
			i=$(".bilgi").index(this);
			$(".bilgi:eq("+i+") img").rotate({animateTo:360});
		});
		$(".bilgi").mouseleave(function(){
			$(".bilgi:eq("+i+") img").rotate({animateTo:0});
		});
		});