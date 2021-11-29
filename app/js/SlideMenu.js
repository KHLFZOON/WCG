function Close(){
    document.getElementsByTagName('aside')[0].style.width = '0px'
    document.getElementById('aside_links_con').style.display = 'none'
}
function Open(){
    document.getElementsByTagName('aside')[0].style.width = '100%'
    document.getElementById('aside_links_con').style.display = 'unset'
    
}