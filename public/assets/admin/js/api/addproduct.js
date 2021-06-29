import { strToDom } from '../../../js/api/dom/element.js';
$(document).ready(() => {
    var protocol = window.location.protocol.replace(/:/g,'');
    
    let optnRootEle = $('#subid');
    let optnEle = (id, value) => {
        return (
            `
            <option value="${id}">${value}</option>

            `
        )
    }
    $('#catid').on('change', (e) => {
        if (e.target.name == 'catid') {
            if (e.target.value) {
                let url="/api/get-sub-category";
                axios.get(url, { headers: { 'main': e.target.value } }).then((response) => {

                    const subcat = response.data.sub;
                    optnRootEle[0].innerHTML = "";
                    subcat.map((v) => {
                        optnRootEle[0].appendChild(strToDom(optnEle(v.subid, v.name)));
                    })

                }).catch((er) => {
                    console.log(er);
                })

            } else {
                console.log(e.target.value)
            }
        }
    })
})