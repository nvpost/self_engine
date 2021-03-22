
firstMenuItem = document.querySelectorAll('.line_menu_item.first_level')
//console.log(firstMenuItem)
firstMenuItem.forEach(i=>{
    i.addEventListener('mouseover', ()=>showSubMenu(event))
    i.addEventListener('mouseout', ()=>hideSubMenu(event))
    //i.onmouseover('showSubMenu')
    //console.log(i)
})

function showSubMenu(e){
    el = e.currentTarget
    el.querySelector('.line_menu.sub_level').classList.add('sub_level_active')
    // console.log(el)
}

function hideSubMenu(e){
    el = e.currentTarget
    el.querySelector('.line_menu.sub_level.sub_level_active').classList.remove('sub_level_active')
}