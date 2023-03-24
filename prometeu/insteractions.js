
function call_aside(){
    let window = document.getElementById('side_menu').style.display


    if (window == 'flex') {
        document.getElementById('side_menu').style.display = 'none'

    } else{
        document.getElementById('side_menu').style.display = 'flex'
        document.getElementById('config_menu').style.display = 'none'
        document.getElementById('bar').style.display = 'none'

    }

}

function call_bar(){
    let window_2 = document.getElementById('bar').style.display


    if (window_2 == 'flex') {
        document.getElementById('bar').style.display = 'none'

    } else{
        document.getElementById('bar').style.display = 'flex'
        document.getElementById('side_menu').style.display = 'none'
        document.getElementById('config_menu').style.display = 'none'

    }

}

function call_config(){
    let window_3 = document.getElementById('config_menu').style.display


    if (window_3 == 'flex') {
        document.getElementById('config_menu').style.display = 'none'

    } else{
        document.getElementById('config_menu').style.display = 'flex'
        document.getElementById('side_menu').style.display = 'none'
        document.getElementById('bar').style.display = 'none'

    }

}