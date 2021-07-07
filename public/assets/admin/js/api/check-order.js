
$(document).ready(()=>{
    
    
    function productListDom(name,qty,tot){
        return`
        <tr>
            <td>${name}</td>
            <td class="text-center">${qty}</td>
            <td class="text-center">${tot} Rs</td>
        </tr>
        
        `
    }
    let orderCheckBtn=$('.order-check-btn');
    let productRootWrapper=document.getElementById('product-root-wrapper');
    //let productRootWrapper=$('product-root-wrapper').append(productListDom('dell i3',10,25155));

    //dele
    
    let url="/api/check/order?oid=";
     
    function editHandleClick(e){
        console.log(e.target.id);
        
        axios.get(url+e.target.id).then((res)=>{

            let rejectOrderBtn=document.getElementById('reject-order');
            let acceptOrderBtn=document.getElementById('accept-order')
            
            setValueToInnerHtml(res.data.address,['street','zip','province','city','oid'],'text');
            setValueToInnerHtml(res.data.order,['phone','name','date','note'],'text');
            setValueToInnerHtml(res.data.payment,['method'],'text');
            

            productRootWrapper.innerHTML="";//reset dom
            let subTot=0;//subtotal calculate
            
            res.data.product.map((v)=>{
                let tableRow=document.createElement('tr')

                let tdName=document.createElement('td');
                let tdQty=document.createElement('td');
                let tdPrice=document.createElement('td');
                

                tdName.innerText=v.name;
                tdQty.innerText=v.qty;
                let tot=(v.qty*v.price).toFixed(2);
                
                tdPrice.innerText=tot.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");+" Rs";
                tableRow.appendChild(tdName);
                tableRow.appendChild(tdQty);
                tableRow.appendChild(tdPrice);
                
                productRootWrapper.appendChild(tableRow);

                //calculate subtotal
                subTot=subTot+(v.qty*v.price);
                
            })

            //set subtotal
            const subTotEle=document.getElementById('sub-total');
            subTotEle.innerText=subTot.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");+" Rs";
            //set total
            let disc=0;
            let fullTot=subTot-disc;//full total calculate
            let fullTotEle=document.getElementById('full-total');
            fullTotEle.innerText=fullTot.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");+" Rs";

            
            if(res.data.stage.stage=="accept" || res.data.stage.stage=="complete"){
                acceptOrderBtn.style.display="none";
            }else{
                acceptOrderBtn.addEventListener('click',(e)=>{
                    window.open(`/order/accept?v=accept&oid=${res.data.order.oid}`,'_self');
                })
            }
            
            rejectOrderBtn.addEventListener('click',(e)=>{
                window.open(`/order/cancel?v=cancel&oid=${res.data.order.oid}`,'_self');
            })

        }) 
        //const ele=document.createRange().createContextualFragment(productListDom('dell i3',10,25155));
        
        
        
        //productRootWrapper.appendChild(documentFragment)
    }
    
    for (let i = 0; i < orderCheckBtn.length; i++) {
        orderCheckBtn[i].addEventListener('click',editHandleClick)
    }
    function setValueToInnerHtml(data,ele,type){
        if(type=="text"){
            ele.map((v)=>{
                const e=document.getElementById(v);
                //const element=$("#"+)[0];
                if(data[v]==null || data[v]==""){
                    e.innerText="-";
                }
                else{
                    e.innerText=data[v];
                }
                
            })
          
        }
    }

    
})