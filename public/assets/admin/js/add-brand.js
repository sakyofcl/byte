$(document).ready(()=>{
    var brand=$('#brand');
    
    

    var brandModel=$('#brand-model');
    var modelForm=$('#model-form');
    var modelFormInput=$('#model-input-form');
    var modelHeaderTitle=$('#model-header-title')[0];
    
    var closebtn=$('button[data-dismiss*="modal"]');
    const handleclick=(e)=>{
        brandModel.removeClass('show');
        brandModel.css('display','none');
        brandModel.css('background-color','transparent');
    }
    closebtn.map((v)=>{
        closebtn[v].addEventListener('click',handleclick);
    })

    
    
    
    brand.change((e)=>{
        var v=e.target.value;
        if(v=="addnew"){
            modelForm.attr('action','/add-brand');
            modelFormInput.attr('placeholder','Ender your brand');
            modelHeaderTitle.innerText=' Brand';
            brandModel.addClass('show');
            brandModel.css('display','block');
            brandModel.css('background-color','rgba(0, 0, 0, 0.301)');
        }
    })
    
    brand.click((e)=>{
        var v=e.target.value;
        if(v=="addnew"){
            modelForm.attr('action','/add-brand');
            modelFormInput.attr('placeholder','Ender your brand');
            modelHeaderTitle.innerText=' Brand';
            brandModel.addClass('show');
            brandModel.css('display','block');
            brandModel.css('background-color','rgba(0, 0, 0, 0.301)');
        }
    })

    
})
    
    
