<div class="footer">
Many thanks to <a href="http://www.lightlink.com">Lightlink</a> for hosting our site.
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("[data-toggle='tooltip']").tooltip();
    });
    $(window).scroll( function () {
    	if ($(this).scrollTop() > 122) {
    		if (!$(".navbar-default").hasClass("fixed-navbar"))
    			$(".navbar-default").addClass("fixed-navbar");
    	} else{
    		if ($(".navbar-default").hasClass("fixed-navbar"))
    			$(".navbar-default").removeClass("fixed-navbar");
    	}
    	console.log($(this).scrollTop());

    });
</script>
</body>
</html>