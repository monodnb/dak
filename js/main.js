(function ($, window, document) {

	//Variables
	var $document = $(document),
		$window = $(window),
		$body = $("body"),
        $toolbar = $("#toolbar"),
        $button = $("button"),
        $tile = $(".tile"),
        $richMedia = $(".rich-media");

	// The $ is now locally scoped
	$(function () {

		// DOM ready!
        $richMedia.each(function(){
            var $this = $(this),
                thisWidth = $this.outerWidth();
            $this.css("height", (0.75*thisWidth));
        }).ripple();
        $button.ripple({
            rippleColor: "rgba(255, 255, 255, 0.4)"
        });

		// Initial setup

		// Event delegation

	});


}(window.jQuery, window, document)); // Fully reference jQuery after this point.
