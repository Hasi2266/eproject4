$(function() {
    'use strict'

    feather.replace();

    const psSidebarBody = new PerfectScrollbar('#dpSidebarBody', {
        suppressScrollX: true
    });

    $('.nav-sidebar .with-sub').on('click', function(e) {
        e.preventDefault()

        $(this).parent().toggleClass('show');
        $(this).parent().siblings().removeClass('show');

        psSidebarBody.update();
    })

    $('.burger-menu:first-child').on('click', function(e) {
        e.preventDefault();
        $('body').toggleClass('toggle-sidebar');
    })

    $('.header-search .form-control').on('focusin', function(e) {
        $(this).parent().addClass('active');
    })

    $('.header-search .form-control').on('focusout', function(e) {
        $(this).parent().removeClass('active');
    })

    $(window).scroll(function() {
        if (!$('#themeSkin').length) {
            var scroll = $(window).scrollTop();

            if (scroll >= 100) {
                $('.content-right-components').addClass('scroll-top');
            } else {
                $('.content-right-components').removeClass('scroll-top');
            }
        }
    });

    // set theme skin if it has been set
    var hasSkin = Cookies.get('theme-skin');
    if (hasSkin) {
        $('head').append('<link id="themeSkin" rel="stylesheet" href="../assets/css/skin.' + hasSkin + '.css">');

        $('.card-theme').each(function() {
            var name = $(this).attr('data-title');
            if (name === hasSkin) {
                $(this).addClass('theme-selected');
            } else {
                $(this).removeClass('theme-selected');
            }
        })
    }
})


$(document).ready(function() {
    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn'),
        allPrevBtn = $('.prevBtn');

    allWells.hide();

    navListItems.click(function(e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allPrevBtn.click(function() {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

        prevStepWizard.removeAttr('disabled').trigger('click');
    });

    allNextBtn.click(function() {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url'],input[type='number'],input[type = 'email']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});