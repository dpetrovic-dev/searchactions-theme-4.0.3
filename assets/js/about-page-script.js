$('.david-dunkelberg-click').click(function(){
    $('.david-dunkelberg-click').addClass("border-person");
    $('.anthony-jones-click').removeClass("border-person");
    $('.john-decesare-click').removeClass("border-person");
    $('.bernard-galagher-click').removeClass("border-person");
    $('.david-dunkelberg').removeClass("focus-person");
    $('.anthony-jones').addClass("focus-person");
    $('.john-decesare').addClass("focus-person");
    $('.bernard-galagher').addClass("focus-person");
    
    $('.david-dunkelberg-box').addClass("focus-box");
    $('.anthony-jones-box').removeClass("focus-box");
    $('.john-decesare-box').removeClass("focus-box");
    $('.bernard-galagher-box').removeClass("focus-box");
});

$('.anthony-jones-click').click(function(){
$('.david-dunkelberg-click').removeClass("border-person");
    $('.anthony-jones-click').addClass("border-person");
    $('.john-decesare-click').removeClass("border-person");
    $('.bernard-galagher-click').removeClass("border-person");
    $('.david-dunkelberg').addClass("focus-person");
    $('.anthony-jones').removeClass("focus-person");
    $('.john-decesare').addClass("focus-person");
    $('.bernard-galagher').addClass("focus-person");
    
    $('.david-dunkelberg-box').removeClass("focus-box");
    $('.anthony-jones-box').addClass("focus-box");
    $('.john-decesare-box').removeClass("focus-box");
    $('.bernard-galagher-box').removeClass("focus-box");
});

$('.john-decesare-click').click(function(){
$('.david-dunkelberg-click').removeClass("border-person");
    $('.anthony-jones-click').removeClass("border-person");
    $('.john-decesare-click').addClass("border-person");
    $('.bernard-galagher-click').removeClass("border-person");
    $('.david-dunkelberg').addClass("focus-person");
    $('.anthony-jones').addClass("focus-person");
    $('.john-decesare').removeClass("focus-person");
    $('.bernard-galagher').addClass("focus-person");
    
    $('.david-dunkelberg-box').removeClass("focus-box");
    $('.anthony-jones-box').removeClass("focus-box");
    $('.john-decesare-box').addClass("focus-box");
    $('.bernard-galagher-box').removeClass("focus-box");
});

$('.bernard-galagher-click').click(function(){
$('.david-dunkelberg-click').removeClass("border-person");
    $('.anthony-jones-click').removeClass("border-person");
    $('.john-decesare-click').removeClass("border-person");
    $('.bernard-galagher-click').addClass("border-person");
    $('.david-dunkelberg').addClass("focus-person");
    $('.anthony-jones').addClass("focus-person");
    $('.john-decesare').addClass("focus-person");
    $('.bernard-galagher').removeClass("focus-person");
    
    $('.david-dunkelberg-box').removeClass("focus-box");
    $('.anthony-jones-box').removeClass("focus-box");
    $('.john-decesare-box').removeClass("focus-box");
    $('.bernard-galagher-box').addClass("focus-box");
});