/**
 * Created by Chun on 8/14/2016.
 */


$(document).ready(function() {
    $(".add_phone").click(function() {
        $('<div class="controls"><input  class="form-control" name="phone[]" type="text" ><input  class="form-control" value="" name="phone_id[]" type="hidden" ><span class="rem" ><a href="javascript:void(0);" ><i class="fa fa-times"></i></span></div>').appendTo("#addphone");

    });
    $('#addphone').on('click', '.rem', function() {
        $(this).parent("div").remove();
    });

    $(".add_email").click(function() {
        $('<div class="controls"><input  class="form-control" name="email[]" type="text" ><span class="rem" ><a href="javascript:void(0);" ><i class="fa fa-times"></i></span></div>').appendTo("#addemail");

    });
    $('#addemail').on('click', '.rem', function() {
        $(this).parent("div").remove();
    });

    $(".add_portfolio").click(function() {
        $('<div class="controls">' +
            '<article  class="styled"><input type="file" name="file_path[]" onchange="previewImage(this,[256],4);" /><div class="imagePreview"></div></article><span class="rem" ><a href="javascript:void(0);" ><i class="fa fa-times"></i></span></div>').appendTo("#addportfolio");

    });
    $('#addportfolio').on('click', '.rem', function() {
        $(this).parent("div").remove();
    });

    $(".add_client").click(function() {
        $('<div class="controls">' +
            '<article  class="styled"><input type="file" name="client_path[]" onchange="previewImage(this,[256],4);" /><div class="imagePreview"></div></article><span class="rem" ><a href="javascript:void(0);" ><i class="fa fa-times"></i></span></div>').appendTo("#addclient");

    });
    $('#addclient').on('click', '.rem', function() {
        $(this).parent("div").remove();
    });

    $(".add_slide").click(function() {
        $('<div class="controls">' +
            '<article  class="styled"><input type="file" name="slide_path[]" onchange="previewImage(this,[256],4);" /><div class="imagePreview"></div></article><span class="rem" ><a href="javascript:void(0);" ><i class="fa fa-times"></i></span></div>').appendTo("#addslide");

    });
    $('#addslide').on('click', '.rem', function() {
        $(this).parent("div").remove();
    });

    $('div.error-msg').delay(3000).slideUp(300);
    $('div.success-msg').delay(3000).slideUp(300);



});

$(document).ready(function(){
    $('#myTable').DataTable();
});