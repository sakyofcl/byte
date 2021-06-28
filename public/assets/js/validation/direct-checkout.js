var state = {
    qty: true
}
$(document).ready(() => {
    $('#qty').keyup(handleKeyUp);
})

function handleKeyUp(e) {

    if (e.target.name == 'quantity') {
        let url = $('#buy-product').attr('href') + "/" + e.target.value;
        $('#buy-product').attr('href', url)
        $('#buy-product').attr('href', url)

    }
}