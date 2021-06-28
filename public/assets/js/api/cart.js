$(document).ready(() => {
    let inpEle = $('.qty');


    for (let i = 0; i < inpEle.length; i++) {
        $(inpEle[i]).on("keyup", handleChange);
    }
})



function handleChange(e) {
    let sub = document.getElementsByClassName('plus');

    if (e.currentTarget.value == "" || e.currentTarget.value == 0) {


        for (let i = 0; i < sub.length; i++) {
            if (sub[i].id == e.currentTarget.id) {
                sub[i].disabled = true;
            }
        }

    } else {
        for (let i = 0; i < sub.length; i++) {
            if (sub[i].id == e.currentTarget.id) {
                sub[i].disabled = false;
            }
        }
    }

}