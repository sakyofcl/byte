//category element
const category = (mainCategory) => {

    return (
        `
        <div class="card border-0 mb-1">
            <div id="headingOne">
                <div class="d-flex flex-nowrap justify-content-between bg-light p-2 border">
                    <span class="ml-2 text-uppercase p-0 cat-item-list main-cat-item">${mainCategory.name}</span>    
                    <a href="#" data-toggle="collapse" data-target="#C${mainCategory.id}" aria-expanded="false">
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </div>
            </div>
                                                
            <div id="C${mainCategory.id}" class="collapse bg-light border" aria-labelledby="headingOne" data-parent="#accordion">
                <div class=" d-flex flex-column p-1">
                    <div class="w-100 pl-2">
                        <ul id="sub_cat_item${mainCategory.id}"> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        `
    )
}

//subcategory element
const sub_cat_items = (name, id) => {
    return (
        `<li class="list-unstyled text-uppercase"><span class="cat-item-list sub-cat-item" id=${id}>${name}</span> </li>`
    )
}


export { sub_cat_items, category }