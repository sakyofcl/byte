$(document).ready(()=>{
    
    $('.main_cat_product').click((e)=>{
        
        var productid=e.currentTarget.name;
        var url=`showmaincategoryproduct/${productid}`;
        var card=document.getElementById('product_card');
        
        axios.get(url).then((response)=>{           
            $data=response.data['data'];

            if($data.length !==0){
                $.map($data,(v)=>{   
                    
                    let p_price=v.price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                    let p_name=v.name;
                    let p_description=v.description;
                    let p_image=v.image;
                    $(card).append(post_card(p_name,p_price,p_image));
                    console.log(v);
                }) 
                
            }  
            else{
                console.log('no data');
            }

            

                   
        }).catch((er)=>{
            console.log('not ok');
        })


    })



})


function post_card(name,price,image){

    return `
    
    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="product-m">
                                            <div class="product-m__thumb">

                                                <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                    href="productinfo">

                                                    <img class="aspect__img"
                                                        src="products/${image}" alt="${name}"></a>
                                               
                                                <div class="product-m__add-cart">

                                                    <a href="card" class="btn--e-brand" data-modal="modal"
                                                        data-modal-id="#add-to-cart">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="product-m__content">
                                                
                                                <div class="product-m__name">

                                                    <a href="product-detail.html">${name}</a>
                                                </div>
                                                <div class="product-m__rating gl-rating-style"><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i
                                                        class="far fa-star"></i>

                                                    <span class="product-m__review">0</span>
                                                </div>
                                                <div class="product-m__price" style="color:red;">Rs.${price}</div>
                                                
                                            </div>
                                        </div>
                                    </div>
    
    
    `
}
