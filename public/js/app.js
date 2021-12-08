function goto(link){
    window.location.href = link;
}

function confirmImageDelete(formId) {
    const form = document.getElementById(formId);

    if(form) {
        let destroy = confirm('Tem certeza?');

        if(destroy) {
            form.submit();
        }
    }
}