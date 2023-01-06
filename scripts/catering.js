// TOGGLE SUBMENU RESPONSIVE
document.getElementById('show_filters').onclick = () => {
    let submenu = document.getElementById('filters_submenu');
    let section = document.getElementById('section_catering');
    let filterStatus = section.getAttribute('class').split(' ');
    if(filterStatus.indexOf('catering_filters_on') === -1){
        section.classList.add('catering_filters_on');
        submenu.classList.add('submenu_on');
    }else{
        section.classList.remove('catering_filters_on');
        submenu.classList.remove('submenu_on');
    }
};

// PRODUCTS FILTERS
document.querySelectorAll('nav.submenu ul li input').forEach(function (e){
    e.onchange = applyFilters;
});

function applyFilters(){
    let selectedCategories = getSelectedCategories();
    let selectedFilters = getSelectedFilters();
    
    document.querySelectorAll('main.section_catering post.product').forEach(function(e){
        e.classList.remove('hidden');
        let itemCategory = e.getAttribute('data-category');
        if(!selectedCategories.includes(itemCategory)){
            e.classList.add('hidden');
        }else{
            let itemFilters = e.getAttribute('data-tags').split(' ');
            let setHidden = true;
            if(itemFilters.some( f => selectedFilters.indexOf(f) !== -1)){
                setHidden = false;
            }
            if(setHidden)
                e.classList.add('hidden');
        }
    });
}
function getSelectedCategories(){
    let selectedCategories = [];
    document.querySelectorAll('nav.submenu ul li input[data-type=category]').forEach(function (e){
        if(e.checked)
            selectedCategories.push(e.getAttribute('data-filter'));
    });
    return selectedCategories;
}
function getSelectedFilters(){
    let selectedFilters = [];
    document.querySelectorAll('nav.submenu ul li input[data-type=filter]').forEach(function (e){
        if(e.checked)
            selectedFilters.push(e.getAttribute('data-filter'));
    });
    return selectedFilters;
}