$(document).on('click', '[target-form-step]', function(){
    const container = $(this).closest('[form-step]');
    const selector = $(this).attr('target-form-step');
    const target = $('[form-step='+selector+']');
    container.hide();
    target.show();
    $('body').css('background', randomHexColor());
    $('h1').css('color', randomHexColor());
});
function randomHexColor(){
    return '#'+Math.floor(Math.random()*16777215).toString(16);
}