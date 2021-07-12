$(document).ready(() => {

    const valid = ['name', 'email', 'number', 'address', 'town', 'province', 'zipcode', 'slip'];
    setEventToElement('change',valid,handleChange);

    var payment = document.getElementsByName('payment');
    for (let i = 0; i < payment.length; i++) {
        $(payment[i]).change(handleChange);
    }

    $("#placeorder").prop("disabled", true);


    // applay radio checked event while touch the radio btn text
    const label=['cash','bank','card'];
    
    setEventToElement('click',label,handleLabelChange);

    function handleLabelChange(e){
        const ele=document.getElementsByName('payment');
        if (e.target.id == "bank") {
            $('#bankslip').css({ display: 'block' });
            state['slip'] = true;
        } else {
            $('#bankslip').css({ display: 'none' });
            state['slip'] = false;
        }
        for (let index = 0; index < ele.length; index++) {
            if(ele[index].getAttribute('option')==e.target.id){
                if(!ele[index].disabled){
                    ele[index].checked = true;
                    state.payment=false;
                    

                    if (state['name'] || state['address'] || state['town'] || state['zipcode'] || state['province'] || state['number'] || state['email'] || state['payment'] || state['slip']) {
                        $("#placeorder").prop("disabled", true);
                    } else {
                        $("#placeorder").prop("disabled", false);
                
                        let shipname = document.getElementById('shipname');
                        let shipaddrs = document.getElementById('shipaddrs');
                        let shipcity = document.getElementById('shipcity');
                        let shipzipcode = document.getElementById('shipzipcode');
                        let shipnumber = document.getElementById('shipnumber');
                        shipname.innerText = $('#name').val() + ',';
                        shipaddrs.innerText = $('#address').val() + ',';
                        shipcity.innerText = $('#town').val() + ` | ${$('#province').val()}` + ',';
                        shipzipcode.innerText = 'Postal code: ' + $('#zipcode').val() + ',';
                        shipnumber.innerText = $('#number').val() + '.'
                
                    }
                    
                    break;
                    
                }
                
            }
        }
       
    }
    
})

var state = {
    'name': true,
    'address': true,
    'town': true,
    'zipcode': true,
    'province': true,
    'number': true,
    'email': true,
    'payment': true,
    'slip': false
}

function handleChange(e) {


    if (e.target.name == 'name') {
        condtion(e, state);
    }

    if (e.target.name == "payment") {

        if (e.target.value) {
            if (e.target.value == "bank") {
                $('#bankslip').css({ display: 'block' });
                state['slip'] = true;
            } else {
                $('#bankslip').css({ display: 'none' });
                state['slip'] = false;
            }
            state[e.target.name] = false;
        } else {
            state[e.target.name] = true;
        }

    }
    if (e.target.name == "slip") {
        if (e.target.files.length === 1) {
            state['slip'] = false;
            $(`#${e.target.id}`).addClass('noerror');
            $(`#${e.target.id}`).removeClass('error');
        } else {
            state['slip'] = true;
            $(`#${e.target.id}`).addClass('error');
            $(`#${e.target.id}`).removeClass('noerror');
        }

    }


    if (e.target.name == 'email') {
        if (e.target.value) {
            const regx = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            let input = e.target.value;
            if (regx.test(input)) {
                state[e.target.name] = false;
                $(`#${e.target.id}`).addClass('noerror');
                $(`#${e.target.id}`).removeClass('error');
            } else {
                state[e.target.name] = true;
                $(`#${e.target.id}`).addClass('error');
                $(`#${e.target.id}`).removeClass('noerror');
            }
        }

    }
    if (e.target.name == 'number') {
        if (e.target.value) {
            const regx = /^[0]?[0]\d{9}$/;
            let input = e.target.value;
            if (regx.test(input)) {
                state[e.target.name] = false;
                $(`#${e.target.id}`).addClass('noerror');
                $(`#${e.target.id}`).removeClass('error');
            } else {
                state[e.target.name] = true;
                $(`#${e.target.id}`).addClass('error');
                $(`#${e.target.id}`).removeClass('noerror');
            }
        }

    }
    if (e.target.name == 'address') {
        condtion(e, state);

    }
    if (e.target.name == 'town') {
        condtion(e, state);
    }

    if (e.target.name == 'zipcode') {
        condtion(e, state);
    }


    if (e.target.name == 'province') {
        if (e.target.value) {
            state[e.target.name] = false;
            $(`#${e.target.id}`).addClass('noerror');
            $(`#${e.target.id}`).removeClass('error');
        } else {
            state[e.target.name] = true;
            $(`#${e.target.id}`).addClass('error');
            $(`#${e.target.id}`).removeClass('noerror');
        }
    }

    if (e.target.name == "countryer") {
        if (e.target.files.length === 1) {
            state[e.target.name] = false;
            $(`#${e.target.id}`).addClass('noerror');
            $(`#${e.target.id}`).removeClass('error');
        } else if (e.target.files.length === 0) {
            state[e.target.name] = true;
            $(`#${e.target.id}`).addClass('error');
            $(`#${e.target.id}`).removeClass('noerror');
        }
    }

    if (state['name'] || state['address'] || state['town'] || state['zipcode'] || state['province'] || state['number'] || state['email'] || state['payment'] || state['slip']) {
        $("#placeorder").prop("disabled", true);
    } else {
        $("#placeorder").prop("disabled", false);

        let shipname = document.getElementById('shipname');
        let shipaddrs = document.getElementById('shipaddrs');
        let shipcity = document.getElementById('shipcity');
        let shipzipcode = document.getElementById('shipzipcode');
        let shipnumber = document.getElementById('shipnumber');
        shipname.innerText = $('#name').val() + ',';
        shipaddrs.innerText = $('#address').val() + ',';
        shipcity.innerText = $('#town').val() + ` | ${$('#province').val()}` + ',';
        shipzipcode.innerText = 'Postal code: ' + $('#zipcode').val() + ',';
        shipnumber.innerText = $('#number').val() + '.'

    }

}


function setEventToElement(name,element,eve) {
    if(name=="change"){
        $.map(element, (v) => {
            const id = `#${v}`;
            $(id).change(eve);
        })
    }
    else if(name=="click"){
        $.map(element, (v) => {
            const id = `#${v}`;
            $(id).click(eve);
        })
    }
    
}

function condtion(e, s) {
    if (e.target.value) {
        s[e.target.name] = false;
        $(`#${e.target.id}`).addClass('noerror');
        $(`#${e.target.id}`).removeClass('error');

    } else {
        $(`#${e.target.id}`).removeClass('noerror');
        $(`#${e.target.id}`).addClass('error');
        s[e.target.name] = true;

    }
}