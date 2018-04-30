jQuery(document).ready(function () {
    "use strict";
    /*
    * Click Events for   Check
    **/

    jQuery('.checkboxFour').click(function () {

        jQuery(this).parent().toggleClass('choose-checkbox');

        if (jQuery(this).find('input').val() == 0) {

            jQuery(this).find('input').val(1);

        } else {

            jQuery(this).find('input').val(0);

        }


        return false;

    });

    jQuery('#mobile-bar').click(function (e) {
        e.preventDefault();
        jQuery('.navigation-top').toggleClass("menu-open");
        jQuery('#mobile-bar a').toggleClass(" is-active");


    });

    jQuery('.your-phone input.wpcf7-form-control').inputmask({"mask": "+7 (999) 999-9999"});

    /*
    * Scroll to Next Block
     */

    jQuery('.buttons-slide').click(function (e) {
        e.preventDefault();
        jQuery('html, body').animate({scrollTop: jQuery('#about').offset().top }, 500);


    });

/*
* Confim checkbox
 */




    jQuery('.choose-checkbox input').click(function (e) {

        var value  = jQuery(this).val();
        if(value =='1'){
            jQuery(this).val('0');
        }else{
            jQuery(this).val('1');
        }

    });

    jQuery('.form-main .wpcf7-submit').click(function (e) {

        var valuechechbox = jQuery("#checkboxFourInput").val();
        if(valuechechbox !='1'){
            e.preventDefault();
            jQuery('.wpcf7-response-output').addClass(' wpcf7-validation-errors');
            jQuery('.wpcf7-response-output').html(' ');
            jQuery('.wpcf7-response-output').append('Вы не согласились с политикой конфиденциальности');
            jQuery('.wpcf7-response-output').slideDown();
        }



    });


/*
    function ConfimCheckbox() {
        if (jQuery(".registration-page, .page-user-profile").length) {
            var checkbox = document.getElementById("checkboxFourInput");
            var checkboxvalue = document.getElementById("checkboxFourInput").val();



            checkbox.onkeyup =  function () {
                if (checkboxvalue == '0') {
                    confirm_password.setCustomValidity("error");
                } else {
                    confirm_password.setCustomValidity('');
                }
            }

        }
    }*/




});

var MutationObserver = (function () {
    var prefixes = ['WebKit', 'Moz', 'O', 'Ms', ''];
        for (var i=0; i < prefixes.length; i++) {
            if (prefixes[i] + 'MutationObserver' in window) {
                 return window[prefixes[i] + 'MutationObserver'];
            }
        }
        return false;
}());

window.onload = function() {
    stickyFooter();

    if (MutationObserver) {
        observer.observe(target, config);
    } else {
        //old IE
        setInterval(stickyFooter, 500);
    }
};

//check for changes to the DOM
var target = document.body;
var observer;
var config = { attributes: true, childList: true, characterData: true, subtree:true };

if (MutationObserver) {
    // create an observer instance
    observer = new MutationObserver(mutationObjectCallback);
}

function mutationObjectCallback(mutationRecordsList) {  
    stickyFooter();
}
     

//check for resize event
window.onresize = function() {
    stickyFooter();
};

//lets get the marginTop for the <footer>
function getCSS(element, property) {

  var elem = document.getElementsByTagName(element)[0];
  var css = null;
  
  if (elem.currentStyle) {
    css = elem.currentStyle[property];
  
  } else if (window.getComputedStyle) {
    css = document.defaultView.getComputedStyle(elem, null).
    getPropertyValue(property);
  }
  
  return css;

}

function stickyFooter() {
    if (MutationObserver) {
        observer.disconnect();
    }
    document.body.setAttribute("style","height:auto");
    
    //only get the last footer
    var footer = document.getElementsByTagName("footer")[document.getElementsByTagName("footer").length-1];
            
    if (footer.getAttribute("style") !== null) {
        footer.removeAttribute("style");
    }
    
    if (window.innerHeight != document.body.offsetHeight) {
        var offset = window.innerHeight - document.body.offsetHeight;
        var current = getCSS("footer", "margin-top");
        
        if (isNaN(parseInt(current)) === true) {
            footer.setAttribute("style","margin-top:0px;");
            current = 0;
        } else {
            current = parseInt(current);
        }
                        
        if (current+offset > parseInt(getCSS("footer", "margin-top"))) {            
            footer.setAttribute("style","margin-top:"+(current+offset)+"px;");
        }
    }
    
    document.body.setAttribute("style","height:100%");
    
    //reconnect
    if (MutationObserver) {
        observer.observe(target, config);
    }
}

/*
! end sticky footer
*/