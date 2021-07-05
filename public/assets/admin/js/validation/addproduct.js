import { setEventToElement as setEventsToClass } from '../../../js/api/dom/element.js';

$(document).ready(() => {

    const keyUpEle = ['name', 'model', 'brand'];
    const changeEle = ['image'];
    setEventToElement(keyUpEle, 'keyup', handleKeyup);
    setEventToElement(changeEle, 'change', handleChange);
    setEventsToClass('.stock', handleChange, 'change');
    $("#addbtn").prop("disabled", true);
    $('#submitbtn').prop("disabled", true);
    state.stock=false;

})
var state = {
    'name': true,
    'image': true,
    'brand': true,
    'model': true,
    'stock': true,
}

function handleChange(c) {
    if (c.target.name == "image") {
        if (c.target.files.length === 1) {
            state[c.target.name] = false;
            $(`#${c.target.id}`).addClass('noerror');
            $(`#${c.target.id}`).removeClass('error');

        } else if (c.target.files.length === 0) {
            state[c.target.name] = true;
            $(`#${c.target.id}`).addClass('error');
            $(`#${c.target.id}`).removeClass('noerror');
        }

    }
    if (c.target.name == "stock") {
        condtion(c, state);
    }
   
    if ( state['image'] || state['name']  || state['model']) {
        $("#addbtn").prop("disabled", true);
        $('#submitbtn').prop("disabled", true);
    } else {
        $("#addbtn").prop("disabled", false);
        $('#submitbtn').prop("disabled", false);
    }
    
}

function handleKeyup(e) {

    CheckTextOrNot(['model','name','brand'], e);

    


    if ( state['image'] || state['name']  || state['model']) {
        $("#addbtn").prop("disabled", true);
        $('#submitbtn').prop("disabled", true);

    } else {
        $("#addbtn").prop("disabled", false);
        $('#submitbtn').prop("disabled", false);
    }
}


function setEventToElement(element, event, handle) {
    switch (event) {
        case "keyup":
            $.map(element, (v) => {
                const id = `#${v}`;
                $(id).keyup(handle);
            })
            break;
        case "change":
            $.map(element, (v) => {
                const id = `#${v}`;
                $(id).change(handle);
            })
            break;
        default:
            break;
    }

}


function CheckTextOrNot(obj, e) {
    obj.map((v) => {
        if (e.target.name == v) {
            condtion(e, state);
        }
    })
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

function showOrHide() {

}