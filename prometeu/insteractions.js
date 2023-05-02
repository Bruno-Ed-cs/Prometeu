var ui_menus = document.querySelectorAll('.menu');


function none_menu(exeptions)
for (let n = 0; n < ui_menus.length; n++){
    ui_menus[n].style.display = 'none';
};

function call(target_id){
    document.getElementById(target_id).style.display = "flex"
    console.log(target_id)
};

function close_element(parent_id){
    document.getElementById(parent_id).style.display = "none"
    console.log(parent_id)
};

