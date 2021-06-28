
$(document).ready(()=>{
    
    let editElement=$('.product-edit-btn');
    
    var protocol = window.location.protocol.replace(/:/g,'');
    
    let url=""
    if(protocol=="http"){
        url = 'http://byte.lk/api/edit/product?pid=';    
    }
    else{
        url = 'https://byte.lk/api/edit/product?pid=';
    }
    
    
    function editHandleClick(e){
        let updateFormRootWrapper=$("#updateFormRootWrapper");
        updateFormRootWrapper.css('display','block')
    
        axios.get(url+e.target.id).then((res) => {
            //render the main cat and sub_cat
            $("#catid")[0].innerHTML=`<option value="${res.data.main[0].catid}">${res.data.main[0].name}</option>`;
            let subSelectElement=$("#subid")[0];
            subSelectElement.innerHTML="";
            res.data.sub.map((v)=>{
                subSelectElement.appendChild(document.createRange().createContextualFragment(`<option value="${v.subid}">${v.name}</option>`))
            })
            
            
            setDefaultValueToForm(res.data.product[0],['name','brand','model','price','description','pid'],'text');
            setDefaultValueToForm(res.data.product[0],['editer-disc'],'editer');
            setDefaultValueToForm(res.data.product[0],['subid'],'select');
            updateFormRootWrapper.css('display','none')
        })
    }
    
    for (let i = 0; i < editElement.length; i++) {
        editElement[i].addEventListener('click',editHandleClick)
    }
    
    
    function setDefaultValueToForm(data,ele,type){
        if(type=="text"){
            ele.map((v)=>{
                const element=$("#"+v)[0];
                element.value=data[v]
            })
          
        }
        else if(type=="select"){
            ele.map((v)=>{
                const options=$("#"+v)[0].options;
                for (let index = 0; index < options.length; index++) {
                    if(options[index].value==data[v]){
                        options[index].setAttribute("selected",true);
                    }
                    else{
                        options[index].setAttribute("disabled",true);
                    }
    
                }
            }) 
        }
        else if('editer'){
            ele.map((v)=>{
                tinymce.get(v).setContent(data['editerdesc']);
            }) 
        }
        
    }
})