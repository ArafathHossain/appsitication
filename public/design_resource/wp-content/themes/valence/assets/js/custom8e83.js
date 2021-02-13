jQuery(function($) {
    "use strict";

    //--login click--//
	$(document).on('click', '.login-btn', function(){
		$(this).parent().addClass('act');
	});

    //--Login--//
    $('form#login').on('submit', function(e){
        e.preventDefault();
        var _is_error = false,
            loginform = $(this),
            statusdiv   = loginform.find('.status'),
            error_1   = ( $('body').hasClass('site_en') ? 'Please fill the required fields.' : 'Будь ласка, заповніть необхідні поля!' );
        loginform.find('.simple-input').each(function(){
            if( $(this).attr('data-required') && !$(this).val() ){
                $(this).addClass('invalid');
                _is_error = true;
            } else {
                $(this).removeClass('invalid');
            }
        });
        if( _is_error ){
            statusdiv.html('<p class="error">'+error_1+'</p>');
            return false;
        }
        $('.ajaxLoader').fadeIn();
        statusdiv.html('');
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajaxurl,
            data: { 
                'action'   : 'ajaxlogin',
                'username' : loginform.find('input[name="username"]').val(),
                'password' : loginform.find('input[name="password"]').val(),
                'security' : loginform.find('input[name="security"]').val()
            },
            success: function(data){
                if( data.loggedin == true ){
                    statusdiv.html('<p class="success">'+data.message+'</p>');
                    location.reload();
                }
                else
                    statusdiv.html('<p class="error">'+data.message+'</p>');
                $('.ajaxLoader').fadeOut();
            }
        });        
    });

    $("form.domain-search").on("submit", function(e){
        e.preventDefault();
        var form    = $(this),
            domains = form.find('#domain-text').val(),
            display;
        $('.domain-search .results').remove();
        if( !domains ){
            form.append('<div class="results domain-search-error"><div class="titte-error-domain"><h5><span>o</span>ops!</h5><p>Please enter your domain!</p></div></div>');
            return false;
        }
        var data = {
            'action'   : 'valence_domains',
            'domain'   : domains,
            'select'   : form.find('.domain-select').val(),
            'security' : form.find('#valence-domains-nonce').val()
        };
        $.post(ajaxurl, data, function(response){
            var x = JSON.parse(response);
            if( x.status == 1 || x.status == 0 ){
                display = x.text;
            } else {
                display = "Error occured.";
            }
            form.append('<div class="results domain-search-error">'+unescape(display)+'</div>');
        });
    });
});