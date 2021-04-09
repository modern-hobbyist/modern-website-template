import "jquery";
// import "bootstrap";
import "popper.js";
import "bs4-summernote";
$(document).ready(function(){
    $('#page_content').summernote({
        dialogsInBody: false,
        callbacks:{
            onInit:function(){
                $('body > .note-popover').hide();
            }
        },
    });

    $('.square').on('click', function(){
        $($(this).data('trigger')).click();
    })
})
