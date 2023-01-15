function toggle_items(item_name){
    element = document.querySelector(item_name);
    element.classList.toggle("active");
}
function add_items(item_name){
    element = document.querySelector(item_name);
    element.classList.add("active");
}
function remove_items(item_name){
    element = document.querySelector(item_name);
    element.classList.remove("active");
}

function tag_items(item_name){
    element = document.querySelector(item_name);
    element.classList.add("tagged");

}


function untag_items(item_name){
    element = document.querySelector(item_name);
    element.classList.remove("tagged");

}

function initiate_chat(){
    //move the button to the top
    document.querySelector('.chat_prompt').classList.toggle("active");

    //kill bottom navigation
    document.querySelector('.bottom_navigation').classList.toggle("killed");

    //increase height of content
    document.querySelector('.content').classList.toggle("full");

    //show the type area
    document.querySelector('.type_area').classList.toggle("active");



}