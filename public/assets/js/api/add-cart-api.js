$(document).ready((e)=>{
    let plus=$('#plus');
    let minus=$('#minus');
    let qty=$('#qty');
    let buy=$('#buy-product');
    let addCart=$('#add-cart');

    let apiUrl="/buy/product?pid="+buy.attr('pid')+"&"+"type=buy&qty=";
    let apiUrlAddCart="/add/cart?pid="+buy.attr('pid')+"&"+"type=cart&qty=";

    qty.keyup((e)=>{
        console.log(e.target.value);
        if(e.target.value>=1){
            buy.attr('href',apiUrl+e.target.value);
            addCart.attr('href',apiUrlAddCart+e.target.value)
        }else{
            buy.attr('href',apiUrl+1);
            addCart.attr('href',apiUrlAddCart+1)
        }
    })

    plus.click((e)=>{
        if(qty.val()>=1){
            let incV=Number(qty.val())+1
            qty.val(incV);
            buy.attr('href',apiUrl+incV);
            addCart.attr('href',apiUrlAddCart+incV);

        }else{
            qty.val(1);
            buy.attr('href',apiUrl+1);
            addCart.attr('href',apiUrlAddCart+1);
        }
        
    })
    minus.click((e)=>{
        
        if(qty.val()>1){
            let dcnV=Number(qty.val())-1
            qty.val(dcnV);
            buy.attr('href',apiUrl+dcnV);
            addCart.attr('href',apiUrlAddCart+dcnV);
        }else{
            qty.val(1);
            buy.attr('href',apiUrl+1);
            addCart.attr('href',apiUrlAddCart+1);
        }
    })
})