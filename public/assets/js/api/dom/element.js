const strToDom = (e) => {
    return document.createRange().createContextualFragment(e);
}

const setEventToElement = (cls, handle, eventName) => {
    const ele = document.querySelectorAll(cls)
    ele.forEach((v) => {
        v.addEventListener(eventName, handle)
    })
}

export { strToDom, setEventToElement }