
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


$(function () {
    $('.navbar-toggle').click(function () {
        $('.navbar-nav').toggleClass('slide-in');
        $('.side-body').toggleClass('body-slide-in');
        $('#search').removeClass('in').addClass('collapse').slideUp(200);

        /// uncomment code for absolute positioning tweek see top comment in css
        //$('.absolute-wrapper').toggleClass('slide-in');
        
    });
   
   // Remove menu for searching
   $('#search-trigger').click(function () {
        $('.navbar-nav').removeClass('slide-in');
        $('.side-body').removeClass('body-slide-in');

        /// uncomment code for absolute positioning tweek see top comment in css
        //$('.absolute-wrapper').removeClass('slide-in');

    });

   $(document).on('submit', '.delete-item', function(event) {

        return confirm("¿Desea borrar el gif?");
    });

    $(document).on('click', '.autorize-item', function(event) {
        event.preventDefault();
        var url=$(this).attr('href');
        var element=$(this).prop('disabled','disable');
        var autorize=($(this).children('i').hasClass('fa-eye'))?0:1;
       $.ajax({
            url: url,
            type: 'PUT',
            dataType: 'JSON',
            headers: {'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content")},
            data: {autorize: autorize},
        })
        .done(function(data) {
            console.log("success");
            if(data.status==200)
            {
                element.prop('disabled','');
               if(parseInt(data.autorize)){
                    element.removeClass('btn-default').addClass('btn-primary').children('i').removeClass('fa-eye-slash').addClass('fa-eye'); 
                }else{
                    element.removeClass('btn-primary').addClass('btn-default').children('i').removeClass('fa-eye').addClass('fa-eye-slash');
                }
            }
        })
        .fail(function(error) {
            console.log("error");
            console.log(error.resposeText);
        })
        .always(function() {
            console.log("complete");
        });
        
        return false;
    });

});