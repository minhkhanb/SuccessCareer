$(document).ready(function(){
    $(".apply-now").click(function(){
        $(".apply-nav").click();
    });

    $(".apply").click(function(){
        var level = $("ul.tabContent>li.active")[0].dataset.tab;
        var role = $("ul.tabContent>li.active")[0].dataset.role;
        if(level != '' && role != ''){
            var $contactForm = $("#contact_form_pop");
            if ($contactForm.length > 0) {
                $contactForm.find("#select-role").val(role);
                $contactForm.find("#select-level").val(level);
            }
        }
    });
});

document.addEventListener('wpcf7mailsent', function(event) {
    $(".wpcf7-form.sent").trigger('reset');
    fileInfo = $('.ui-file-info h6');
    fileInfo.text('No choose file');
}, false);