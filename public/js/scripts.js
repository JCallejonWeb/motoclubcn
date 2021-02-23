$(document).ready(function() {
    $('.ojo').css('cursor', 'pointer');

    function ver() {
        $(".ojo").unbind('click').click(function() {
            $("#inputPass").attr('type', 'text');
            $('.ojo').addClass('nojo').removeClass('ojo');
            $('.nojo').removeClass('fa-eye-slash').addClass('fa-eye');
            noVer();
        });

    }

    function noVer() {
        $(".nojo").unbind('click').click(function() {
            $("#inputPass").attr('type', 'password');
            $('.nojo').addClass('ojo').removeClass('nojo');
            $('.ojo').removeClass('fa-eye').addClass('fa-eye-slash');
            ver();
        });


    }

    ver();
    noVer();

});