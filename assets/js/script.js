// Criando Elemento span para título do espaço de inserção do email
let span1 = document.createElement('span');
span1.className = 'form__area--box_legend-title';
span1.textContent = 'Teléfono, usuario o correo electrónico';
span1.id = 'span-1';



// Criando Elemento span para título do espaço de inserção da senha
let span2 = document.createElement('span');'<span class="form__area--box_legend-title">Senha</span>';
span2.className = 'form__area--box_legend-title';
span2.textContent = 'Contraseña';
span2.id = 'span2';



// Criando Elemento botão para visualizar a senha, caso necessite
let botao = document.createElement('a');'<a href="" class="form__area--box_legend-button">Mostrar</a>';
botao.className = 'form__area--box_legend-button';
botao.textContent = 'Mostrar';
botao.href = "#";
botao.id = 'entrar';



// Criando todas as váriáveis necessárias através do DOM
let legenda1 = document.getElementById('legend-box-1');
let legenda2 = document.getElementById('legend-box-2');
let box1 = document.getElementById('box-1');
let box2 = document.getElementById('box-2');
let email = document.getElementById('email');
let pass = document.getElementById('pass');



// Criando todas as funções necessárias para alternar entre placeholder e título com uma certa fluidez
let mudaCaixaEmail = ()=>{
    if(email.value == ''){
        box1.className = 'form__area--box-1';
        email.className = 'form__area--box_legend-input-3';
        legenda1.removeChild(span1);
    }else{
        box1.className = 'form__area--box';
        legenda1.insertBefore(span1, email);
        email.className = 'form__area--box_legend-input-1';
    }
}



let mudaCaixaSenha = ()=>{
    if(pass.value == ''){
        box2.className = 'form__area--box-1';
        pass.className = 'form__area--box_legend-input-4';
        legenda2.removeChild(span2);
        box2.removeChild(botao);

    }else{
        box2.className = 'form__area--box-2';
        legenda2.insertBefore(span2, pass);
        pass.className = 'form__area--box_legend-input-2';
        box2.appendChild(botao);        
    }
}



// Criando a função que mostra a senha para o usuário



let mudabotao = ()=>{
    if(botao.textContent == 'Mostrar'){
        botao.textContent = 'Ocultar';
        pass.type = 'text';
    }else{
        botao.textContent = 'Mostrar';
        pass.type = 'password';
    }

}


// Chamada de eventos
email.addEventListener('input', mudaCaixaEmail);
pass.addEventListener('input', mudaCaixaSenha);
botao.addEventListener('click', mudabotao)