
const descrizioni = document.querySelectorAll('.descrizione');
for(const descrizione of descrizioni){
    descrizione.addEventListener('click', mostraDescrizione);
}
//funzione che interviene quando clicco su "Clicca per più dettagli"
function mostraDescrizione(event) {
    event.currentTarget.removeEventListener('click', mostraDescrizione);

    selected = event.currentTarget.parentNode.dataset.city;
    event.currentTarget.textContent = cittaa[selected].descrizione;
    event.currentTarget.classList.add('fixdescrizione');

    event.currentTarget.addEventListener('click', nascondi);
}

function nascondi(event) {

    event.currentTarget.removeEventListener('click', nascondi);
    
    event.currentTarget.classList.remove('fixdescrizione');
    event.currentTarget.textContent = 'Clicca per più dettagli';
    
    event.currentTarget.addEventListener('click', mostraDescrizione);
}
