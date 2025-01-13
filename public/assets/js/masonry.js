/**
 * @author Ruzanna Mehrabyan
 * @since 2019-07-13
 * @copyright Aparg LLC.
 * @description Responsive Gallery Masonry with Lightbox
 */

(function($) {
    var defaults = {
        width: "300px",
        padding: "5px"
    };

    $.fn.masonry = function (options) {
        this.options = $.extend({}, defaults, options);
        var that = this;

        if (this.length === 0) {
            return this;
        }

        // call one for multiple elements
        if (this.length > 1) {
            this.each(function() {
                $(this).masonry(options);
            });
            return this;
        }

        function init(){
            var topPosition = 0;
            var leftPosition = 0;
            var oneColHeight = [];

            // Check if options width greater than window width
            if(parseInt(that.options.width) >= $(window).width() ){
                that.columnCount = 1;
                $(that).css('width', ($(window).width() - 20)+'px');
                $(that.children()).css({
                    'width': '100%',
                    'padding': that.options.padding,
                    'left': 0
                });

            }else{
                that.columnCount = Math.floor(($(window).width() / parseInt(that.options.width)));
                $(that).css('width', (parseInt(that.options.width) * that.columnCount)+'px');
                $(that.children()).css({
                    'width': that.options.width,
                    'padding': that.options.padding,
                    'left': 0
                });
            }

            // Update positions of items
            that.updateItem = function(i){
                $(that[0].children[i]).css({
                    'left': leftPosition,
                    'top': topPosition
                });
            };

            for(var i = 0; i <  that.children().length; i++){
                if(i < that.columnCount){
                    oneColHeight.push(parseInt($(that[0].children[i]).outerHeight(true)));
                    if(i == 0){
                        leftPosition = 0;
                    }else{
                        leftPosition += parseInt(that.options.width);
                    }
                    topPosition = 0;
                    that.updateItem(i);
                }else{
                    var minHeight = oneColHeight[0];
                    for(var j = 0; j < oneColHeight.length; j++){
                        if(oneColHeight[j] < minHeight){
                            minHeight = oneColHeight[j];
                        }
                    }
                    var currentIndex = oneColHeight.indexOf(minHeight);
                    leftPosition = currentIndex * parseInt(that.options.width);
                    topPosition = minHeight;
                    oneColHeight[currentIndex] = minHeight + parseInt($(that[0].children[i]).outerHeight(true) );
                    that.updateItem(i);
                }
                if(i == (that.children().length - 1)){
                    var maxHeight = oneColHeight[0];
                    for(j = 0; j < oneColHeight.length; j++){
                        if(oneColHeight[j] > maxHeight){
                            maxHeight = oneColHeight[j];
                        }
                    }
                    $(that).css('height', maxHeight +'px');
                }
            }
        }

        init();

        $(window).resize(function() {
            init(that);
        });

        // Lightbox Click Event
        $(that.children()).on( "click",function(){
            var imageSrc = $(this).find('img').attr("src");
            var imageAlt = $(this).find('img').attr("alt");

            $('body').append(
                "<div class='remMasonry-modal-overlay'>"+
                "<div class='remMasonry-modal'>"+
                "<div id='remMasonry-modal-close' class='close-container'>" +
                "<div class='leftright'></div>" +
                "<div class='rightleft'></div>" +
                "<label class='close'>close</label>" +
                "</div>" +
                "<img src='" + imageSrc + "' alt='" + imageAlt + "' class='remMasonry-modal-img' />"+
                "</div>"+
                "</div>"
            ).show(500);

            $('#remMasonry-modal-close').click(function(){
                $('.remMasonry-modal-overlay').hide(500, function(){
                    $(this).remove();
                });
            });
        });

    };


})(jQuery);