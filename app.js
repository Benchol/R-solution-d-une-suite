let container = document.querySelector('.container')


let calcul = () => {
    let form = document.querySelector('#form')
    console.log(form);
    let formData = new FormData(form)
    let request = new XMLHttpRequest();
    request.open('POST', 'calcul.php', true);
    request.onreadystatechange = () => {
        if (request.readyState === 4) {
            console.log('Type => ', typeof(request.responseText))
            container.textContent = request.responseText;
            container.classList.add('border')
            container.classList.add('border-success')
            MathJax.typeset();
        }
    }
    request.send(formData);
}

document.querySelector('.calcul').addEventListener('click', (event) => {
    event.preventDefault()
    calcul()
})