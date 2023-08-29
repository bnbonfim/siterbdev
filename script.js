function abrirForm(){
    const form = document.getElementById('janela-modal')
    form.classList.add('abrir')
    
    form.addEventListener('click', (e) => {
        if(e.target.id == 'fechar' || e.target.id == 'janela-modal'){
            form.classList.remove('abrir')
        }
    })
}
function entrar(){
    
}