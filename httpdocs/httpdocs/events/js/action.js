// Aside Menu Code 

var	$parent = $("#main"),
$aside = $("#aside"),
$asideTarget = $aside.find(".aside--details"),
$asideClose = $aside.find(".close"),
$tilesParent = $(".tiles-a"),
$tiles = $tilesParent.find("a"),
slideClass = "show-detail";

// tile click
$tiles.on("click", function(e){
    e.preventDefault();
    e.stopPropagation();
    if(!$("html").hasClass(slideClass)){
        $tiles.removeClass("active");
        $(this).addClass("active");
        $(this).attr("aria-expanded","true");
        loadTileData($(this));
    }else{
        killAside();
        $(this).attr("aria-expanded","false");
    }
});

// kill aside
$asideClose.on("click", function(e){
    e.preventDefault();
    killAside();
});

// load data to aside
function loadTileData(target){
    var $this = $(target),
            itemHtml = $this.find(".details").html();
            $asideTarget.html(itemHtml);
            showAside();
}

// show/hide aside
function showAside(){
    if(!$("html").hasClass(slideClass)){
        $("html").toggleClass(slideClass);
        $aside.attr("aria-hidden","false");
        focusCloseButton();
    }
}

// handle esc key
window.addEventListener("keyup", function(e){

    // grab key pressed
    var code = (e.keyCode ? e.keyCode : e.which);
    
    // escape
    if(code === 27){
        killAside();
    }

}, false);

// kill aside
function killAside(){
    if($("html").hasClass(slideClass)){
        $("html").removeClass(slideClass);
        sendFocusBack();
        $aside.attr("aria-hidden","true");
        $tiles.attr("aria-expanded","false");
    }
}

// send focus to close button
function focusCloseButton(){
    $asideClose.focus();	
}

// send focus back to item that triggered event
function sendFocusBack(){
    $(".active").focus();
}

// handle body click to close off-canvas
$parent.on("click",function(e){
    if($("html").hasClass(slideClass)){
        killAside();
    }
}); 

//Image Slow Loading
$('.inner-bx').on('mouseover', function(){
    $(this).find('.gal-img').children('img[data-lazysrc]').each( function(){
        //* set the img src from data-src
        $( this ).attr( 'src', $( this ).attr( 'data-lazysrc' ) );
        }
    );
})

// Open Navigations
//Cult Sidebar
function openCult() {
    document.getElementById("sideCult").style.width = "200px";
    document.getElementById("sideOnline").style.width = "0";
    document.getElementById("sideTech").style.width = "0";
}

function closeCult() {
    document.getElementById("sideCult").style.width = "0";
}

//Tech Sidebar
function openTech() {
    document.getElementById("sideTech").style.width = "200px";
    document.getElementById("sideOnline").style.width = "0";
    document.getElementById("sideCult").style.width = "0";
}

function closeTech() {
    document.getElementById("sideTech").style.width = "0";
}

//Online Sidebar
function openOnline() {
    document.getElementById("sideOnline").style.width = "200px";
    document.getElementById("sideTech").style.width = "0";
    document.getElementById("sideCult").style.width = "0";
}

function closeOnline() {
    document.getElementById("sideOnline").style.width = "0";
}

$('#sideOnline a').on('click', function(){
    closeOnline();
})

$('#sideTech a').on('click', function(){
    closeTech();
})

$('#sideCult a').on('click', function(){
    closeCult();
})
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


$("#arrow").click(function(){
    $('html, body').animate({
        scrollTop: $("#cult").offset().top
    }, 500);
});