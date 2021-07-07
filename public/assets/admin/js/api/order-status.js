$(document).ready((e)=>{
//let orderStatusOption=document.getElementById('order-status');$('.order-check-btn');
let orderStatusOption=$('.order-status');
let orderPaymentStatus=$('.order-payment-status');
let actionMessage=document.getElementById('action-message');



function handleChange(e){

    let oid=e.target.getAttribute("orderid");
    let url="/api/order/status?oid="+oid+"&"+"status=";
    if(e.target.value=="courier"){
        e.target.classList.add("bg-primary");
        e.target.classList.remove("bg-success");
        e.target.classList.remove("bg-dark");

        //call api
        axios.get(url+"courier").then((res)=>{
            console.log(actionMessage);
            if(res.data.status=="yes"){
                actionMessage.classList.add('d-block');
                actionMessage.classList.add('text-success');
                actionMessage.classList.add('font-weight-bold');
                actionMessage.classList.remove("d-none");
                actionMessage.innerText="Order status updated..!";


                setTimeout(()=>{
                    actionMessage.classList.add("d-none");
                    actionMessage.classList.remove("d-block");
                }, 1000);
            }
        })
    }else if(e.target.value=="delivered"){
        e.target.classList.add("bg-success");
        e.target.classList.remove("bg-primary");
        e.target.classList.remove("bg-dark");

        //call api
        axios.get(url+"delivered").then((res)=>{
            if(res.data.status=="yes"){
                actionMessage.classList.add('d-block');
                actionMessage.classList.add('text-success');
                actionMessage.classList.add('font-weight-bold');
                actionMessage.classList.remove("d-none");
                actionMessage.innerText="Order status updated..!";

                setTimeout(()=>{
                    actionMessage.classList.add("d-none");
                    actionMessage.classList.remove("d-block");
                }, 1000);
            }
        })
    }
    else if(e.target.value=="prepare"){
        e.target.classList.add("bg-dark");
        e.target.classList.remove("bg-primary");
        e.target.classList.remove("bg-success");

        //call api
        axios.get(url+"prepare").then((res)=>{
            if(res.data.status=="yes"){
                actionMessage.classList.add('d-block');
                actionMessage.classList.add('text-success');
                actionMessage.classList.add('font-weight-bold');
                actionMessage.classList.remove("d-none");
                actionMessage.innerText="Order status updated..!";


                setTimeout(()=>{
                    actionMessage.classList.add("d-none");
                    actionMessage.classList.remove("d-block");
                }, 1000);
            }
        })
    }
}

function paymentHandleChange(e){
    let oid=e.target.getAttribute("oid");
    let url="/api/order/payment/status?oid="+oid+"&"+"status=";
    if(e.target.value=="1"){
        e.target.classList.add("bg-success");
        e.target.classList.remove("bg-danger");
        console.log(url+"1")
        axios.get(url+"1").then((res)=>{
            if(res.data.status=="yes"){
                actionMessage.classList.add('d-block');
                actionMessage.classList.add('text-success');
                actionMessage.classList.add('font-weight-bold');
                actionMessage.classList.remove("d-none");
                actionMessage.innerText="Payment status updated..!";

                setTimeout(()=>{
                    actionMessage.classList.add("d-none");
                    actionMessage.classList.remove("d-block");
                }, 1000);
            }
        })
        
    }
    else if(e.target.value=="0"){
        e.target.classList.add("bg-danger");
        e.target.classList.remove("bg-success");
        axios.get(url+"0").then((res)=>{
            if(res.data.status=="yes"){
                actionMessage.classList.add('d-block');
                actionMessage.classList.add('text-success');
                actionMessage.classList.add('font-weight-bold');
                actionMessage.classList.remove("d-none");
                actionMessage.innerText="Payment status updated..!";

                setTimeout(()=>{
                    actionMessage.classList.add("d-none");
                    actionMessage.classList.remove("d-block");
                }, 1000);
            }
        })
    }
}
///
for (let i = 0; i < orderStatusOption.length; i++) {
    orderStatusOption[i].addEventListener('change',handleChange)
}
for (let j = 0; j < orderPaymentStatus.length; j++) {
    orderPaymentStatus[j].addEventListener('change',paymentHandleChange)
}



});