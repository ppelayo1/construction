jQuery(document).ready(function (){
    jQuery('#headerHamburger').click(function () {
        jQuery('#mobileMenu').toggle('slide');
    })
    
    if(window.innerWidth >= 500){
            jQuery('#headerHamburger').hide();
    }else{
        jQuery('#headerHamburger').show();
    }
    
    jQuery(window).on('resize', function () {
        if(window.innerWidth >= 500){
            jQuery('#headerHamburger').hide();
        }else{
            jQuery('#headerHamburger').show();
        }
    });
});

