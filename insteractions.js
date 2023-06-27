var ui_menus = document.getElementsByClassName('menu');
var root_style = document.querySelector(':root');
var root_properties = getComputedStyle(root_style);
var cur_theme = 'light_theme';
var theme_buttons = document.getElementsByClassName("field");
var sel_theme_button = localStorage.getItem('sel_theme_button');

var url = window.location.pathname;
var selectables = document.getElementsByClassName('selectable');

console.log(url);
console.log(selectables);

for (var i = 0; i < selectables.length; i++) {
  console.log(selectables[i]);
  var href = selectables[i].getAttribute('href');
  console.log(href);

  
  if (href === url || url === "/Prometeu/" && href == "/Prometeu/index.php") {
    if (selectables[i].parentElement.tagName != 'LI'){
      selectables[i].classList.add('selected');
    } else{
      selectables[i].parentElement.classList.add('selected');
      console.log('ok')
    }
    
  }
}



var themes = {
  
              dark_theme:
              [['--Primary_color', '#730099'],
              ['--Secundary_color', '#7ab10e'],
              ['--Hover_color', '#a6db3bab'],
              ['--Background_color', '#413f3f'],
              ['--Primary_font_color', '#FFFFFF'],
              ['--Secundary_font_color', '#ffffff'],
              ['--Shadow_color', 'rgba(0, 0, 0, 0.2)']],
              
              light_theme:
              [['--Primary_color', '#EE8B31'],
              ['--Secundary_color', '#EE3136'],
              ['--Hover_color', '#f72d34a2'],
              ['--Background_color', '#ffffff'],
              ['--Primary_font_color', '#FFFFFF'],
              ['--Secundary_font_color', '#000000'],
              ['--Shadow_color', 'rgba(0, 0, 0, 0.2)']],

              high_contrast:
              [['--Primary_color', '#000000'],
              ['--Secundary_color', '#f2ff00'],
              ['--Hover_color', '#fbff00dc'],
              ['--Background_color', '#000000'],
              ['--Primary_font_color', '#FFFFFF'],
              ['--Secundary_font_color', '#FFFFFF'],
              ['--Shadow_color', 'rgba(255, 255, 255, 0.2)']]
            };

// console.log(root_style);
// console.log(root_properties);

if (localStorage.getItem('cur_theme') === null){
  localStorage.setItem('cur_theme', cur_theme);

} else{
  cur_theme = localStorage.getItem('cur_theme');
  for (i = 0; i < themes[cur_theme].length; i++){

    root_style.style.setProperty(themes[cur_theme][i][0], themes[cur_theme][i][1]);
  };
};

  
if (localStorage.getItem('sel_theme_button') === null){
  console.log(localStorage.getItem('sel_theme_button'))
  localStorage.setItem('sel_theme_button', 'light');

} else{
  for (i=0; i < theme_buttons.length; i++){
    if (theme_buttons[i].id === sel_theme_button){
      
      theme_buttons[i].classList.add('selected_field');
    } else{
      theme_buttons[i].classList.remove('selected_field');
      console.log(theme_buttons[i].classList)
    }
    console.log(theme_buttons[i].classList)
  };
  console.log(localStorage.getItem('sel_theme_button'))
};

document.addEventListener('click', function (event){

  if (event.target.classList.contains('menu') || event.target.closest('.menu') || event.target.hasAttribute('onclick') || event.target.closest('[onclick]')) {
    
    event.stopPropagation();

  } else{

    for (i = 0; i < ui_menus.length; i++){
      ui_menus[i].style.display = 'none'
    }

  };
});


function change_theme(sel_theme='light_theme', element){

  for (i = 0; i < themes[sel_theme].length; i++){

    root_style.style.setProperty(themes[sel_theme][i][0], themes[sel_theme][i][1]);
  };

  cur_theme = sel_theme
  localStorage.setItem('cur_theme', cur_theme);

  sel_theme_button = element.id

  for (i=0; i < theme_buttons.length; i++){
    if (theme_buttons[i].id == sel_theme_button){
      
      theme_buttons[i].classList.add('selected_field');
    } else{
      theme_buttons[i].classList.remove('selected_field');
    }
    console.log(theme_buttons[i].classList)
  };


  console.log(sel_theme_button)

  localStorage.setItem('sel_theme_button', sel_theme_button)


  console.log(element.id)
  
  console.log(cur_theme)

};

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


  