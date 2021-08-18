//显示隐藏对应的switchPwd()方法:
function switchPwd() {
    var passwordeye = $('#passwordeye');
    var showPwd = $("#password");
    passwordeye.off('click').on('click',function(){
        if(passwordeye.hasClass('invisible')){
            passwordeye.removeClass('invisible').addClass('visible');//密码可见
            showPwd.prop('type','text');
        }else{
            passwordeye.removeClass('visible').addClass('invisible');//密码不可见
            showPwd.prop('type','password');
        };
    });     
 }