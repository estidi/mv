
function $ (selector, el) {
     if (!el) {el = document;}
     return el.querySelector(selector);
}

 
/////////////////////////////////
fadetWrapper = function(nr)
{
    var getEventHandler = function()
    {
        fade(nr);
    };

    return getEventHandler;
};

function fade(el) {    
    if(!el.style.opacity)
    {
        el.style.opacity = 1;
    }
    else {
        el.style.opacity = el.style.opacity - 0.005;
    }
    if (el.style.opacity <= 0){
        el.style.display = 'none';
    } else {
    setTimeout(function(){fade(el);}, 2);
    }
}
  
    
window.onload = function () {
    
  var elements = document.getElementsByClassName('fade');
    
    for (var i = 0; i < elements.length; i++) {
        elements[i].onclick = fadetWrapper(elements[i]);
    }
};
    