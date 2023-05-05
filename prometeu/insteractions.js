var ui_menus = document.getElementsByClassName('menu');

// chat gpt
var elementsWithListener = [];

/*
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

*/

document.addEventListener('click', function (event){

  if (event.target.classList.contains('menu') || event.target.closest('.menu') || event.target.hasAttribute('onclick') || event.target.closest('[onclick]')) {
    
    event.stopPropagation();

  } else{

    for (i = 0; i < ui_menus.length; i++){
      ui_menus[i].style.display = 'none'
    }

  };
});





function call(target_id){

    if (document.getElementById(target_id).style.display == "flex"){
        document.getElementById(target_id).style.display = "none";
        console.log('c')
        
    } else{
        document.getElementById(target_id).style.display = "flex";
        console.log('b')
    };
    
    for (var n = 0; n < ui_menus.length; n++){
        if (ui_menus[n].id !== target_id){
            console.log(ui_menus[n].id);
            ui_menus[n].style.display = 'none';
        };
        console.log(ui_menus[n])
    };
};

function close_element(parent_id){
    document.getElementById(parent_id).style.display = "none"
    console.log(parent_id)
};


  