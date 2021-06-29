import { setEventToElement, strToDom } from '../../../js/api/dom/element.js';

$(document).ready(() => {
    const catForm = $('#cat-form')
    const catSave = $('#save-cat')
    const catName = $('#cat-name')
    const catLableName = $('#cat-label-name')
    const mainCatName = $('#main-cat-name')
    const CatMsg = $('#cat-msg');

    //category edit variable
    const mainCatDataId = $('#main-cat-data-id')
    const mainCatEditBtn = $('#main-cat-edit-btn')
    const mainCatEditBox = $('#main-cat-edit-box')

    //subcategory edit variable
    const listDelSubCatRoot = $('#list-del-sub-cat');
    const delSubDataBtn = $('#del-sub-cat-data');
    const editSubCatNameBtn = $('#edit-subcat-name-btn');
    const editSubCatName = $('#edit-subcat-name');
    const DelSubCatEle = (id, name) => {
        return (
            `
                <option value=${id}>${name}</option>
            `
        )
    }

    //default hide button
    catSave.attr('disabled', 'disabled');
    //set keyup event to input box
    catName.keyup((e) => {
        if (e.target.value === "") {
            catSave.attr('disabled', 'disabled');
        } else {
            catSave.removeAttr('disabled')
        }

    })

    // set onchange to select box
    mainCatName.change((c) => {
        if (c.target.value === "d-v") {
            catName.attr('placeholder', 'type maincategory..!');
            catLableName.text('main category');
            catLableName.addClass('badge-danger');
            catLableName.removeClass('badge-success');
            catForm.attr('action', 'add-main-category')
        } else {
            catName.attr('placeholder', 'type subcategory..!');
            catLableName.text('sub category')
            catLableName.removeClass('badge-danger');
            catLableName.addClass('badge-success');
            catForm.attr('action', 'add-sub-category')
        }
    })

    // hide response msg based on time
    setTimeout(() => {
        CatMsg.hide()
    }, 3000);


    // set click event to all category edit btn 
    setEventToElement('.cat-edit-btn', handleEditClick, 'click')


    function handleEditClick(e) {

        // get main category data from db
        axios.get('demo/api/get-category', { headers: { 'main': e.currentTarget.id } }).then((res) => {

            mainCatEditBox.attr('value', res.data.main.name);
            mainCatDataId.attr('value', res.data.main.catid);
            editSubCatNameBtn.attr('disabled', 'disabled');

            //set keyup maincategory edit box
            mainCatEditBox.keyup((v) => {
                if (v.target.value == "") {
                    mainCatEditBtn.attr('disabled', 'disabled')
                } else {
                    mainCatEditBtn.removeAttr('disabled')
                }
            })

            //check subcategory data
            if (res.data.sub.length !== 0) {
                listDelSubCatRoot[0].innerHTML = "";
                res.data.sub.map((subData) => {
                    listDelSubCatRoot[0].appendChild(strToDom(DelSubCatEle(subData.subid, subData.name)))
                })
                listDelSubCatRoot.change((d) => {
                    const url = `deletesubcategory/${d.target.value}`
                    delSubDataBtn.attr('href', url)
                })
                editSubCatName.keyup((s) => {
                    if (s.target.value == "") {
                        editSubCatNameBtn.attr('disabled', 'disabled');
                    } else {
                        editSubCatNameBtn.removeAttr('disabled');
                    }
                })

            }
        })

    }
})