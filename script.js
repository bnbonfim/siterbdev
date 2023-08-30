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
    var login = document.getElementById('name').value;
    var senha = document.getElementById('password').value;

    if(login == 'bn' && senha =="123"){
        alert('Bem vindo(a) clique em ok.');
        location.href = "index.html";
    }else{
        alert('Nome ou senha incorretos, não tem uma conta? Clique em registrar-se')
    }
}
function registrar(){
    var novoLogin = document.getElementById('name').value;
    var novaSenha = document.getElementById('password').value;

    if (novoLogin && novaSenha) {
        alert('Conta registrada com sucesso! Agora você pode fazer login.');
        location.href = "index.html";
    } 
}