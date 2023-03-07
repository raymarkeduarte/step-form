/**
 * @description hide current form then shows the target
 * @author RED
 */
$(document).on('click', '[target-form-step]', function(){
    const container = $(this).closest('[form-step]');
    const selector = $(this).attr('target-form-step');
    const target = $('[form-step="'+selector+'"]');
    const targetMenu = $('[form-step-menu="'+selector+'"]');
    const currentMenu = $('[form-step-menu="'+container.attr('form-step')+'"]');
    currentMenu.removeClass('active');
    currentMenu.addClass('disabled');
    targetMenu.removeClass('disabled');
    targetMenu.addClass('active');
    container.hide();
    target.show();
});
function randomHexColor(){
    return '#'+Math.floor(Math.random()*16777215).toString(16);
}