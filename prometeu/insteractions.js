var ui_menus = document.querySelectorAll('.menu');

// chat gpt
var elementsWithListener = [];

document.addEventListener('click', function(event) {
  if (event.target.hasAttribute('onclick') || event.target.closest('[onclick]')) {
    // If the clicked element or one of its ancestors has an onclick event, do nothing
    event.stopPropagation();
  } else if (!event.target.classList.contains('menu')) {
    // Get all elements with the 'menu' class
    var menuElements = document.querySelectorAll('.menu');

    // Loop through each menu element and set its display to 'none'
    for (var i = 0; i < menuElements.length; i++) {
      menuElements[i].style.display = 'none';
    }

    // Add the clicked element to the list of elements with the event listener
    if (!elementsWithListener.includes(event.target)) {
      elementsWithListener.push(event.target);
    }

    // Print the list of elements with the event listener on the console
    console.log('Elements with event listener:', elementsWithListener);
  }
});





function call(target_id){

    let target = document.getElementById(target_id);
    
    if (target.style.display == "flex"){
        target.style.display = "none";
        
    }else{
        target.style.display = "flex";
    };
    
    for (let n = 0; n < ui_menus.length; n++){
        if (target.id =! ui_menus[n].id){
            ui_menus[n].style.display = 'none';
        };
        console.log(target_id =! ui_menus[n].id)
    };

    console.log(target_id)
};

function close_element(parent_id){
    document.getElementById(parent_id).style.display = "none"
    console.log(parent_id)
};


  