//Criado por Rangel Santos 
//10/07/2019
//Scripts gerais


//Esta função verifica se alguns campos específicos foram preenchidos

function myCheck(checkform){
  nome = document.getElementById("checkName");
  fone = document.getElementById("checkFone");
  email = document.getElementById("checkEmail");
  ende = document.getElementById("checkEnde");
  cep = document.getElementById("checkCep");
  obje = document.getElementById("checkObje");

  if(nome.value == ""){
    alert ("Insira o seu nome");
    document.getElementById("checkName").style.border = "2px solid red";
    document.getElementById("checkName").placeholder = "Insira o seu nome..";
    nome.focus();
    return false;
  }
  if(nome.value.length <= 3){
    alert ("Nome invalido");
    document.getElementById("checkName").style.border = "2px solid red";
    nome.focus();
    return false;
  }
  if(fone.value == ""){
    alert ("Insira o seu telefone");
    document.getElementById("checkFone").style.border = "2px solid red";
    fone.focus();
    return false;
  }
  if(fone.value.length < 8){
    alert ("Telefone invalido");
    document.getElementById("checkFone").style.border = "2px solid red";
    nome.focus();
    return false;
  }
  if(email.value == ""){
    alert ("Insira o seu E-Mail");
    document.getElementById("checkEmail").style.border = "2px solid red";
    email.focus();
    return false;
  }
  if(ende.value == ""){
    alert ("Insira o seu endereço");
    document.getElementById("checkEnde").style.border = "2px solid red";
    ende.focus();
    return false;
  }
  if(cep.value == ""){
    alert ("Insira o CEP");
    document.getElementById("checkCep").style.border = "2px solid red";
    cep.focus();
    return false;
  }
  if(obje.value == ""){
    alert ("Insira o seu objetivo");
    document.getElementById("checkObje").style.border = "2px solid red";
    obje.focus();
    return false;
  }
}

//Esta função adiciona campos dinamicamente, e após três campos remove o botão com esta opção

var x = 0;
function myClone(){
    if (x < 3){
    var original = document.getElementById("academy_info");
    var clone = original.cloneNode(true);
    x++;
    clone.id = "academy_info" + x;
    clone.children[1].name = "nomecurso" + x;
    clone.children[4].name = "instituicao" + x;
    clone.children[7].name = "conclusao_curso" + x;
    clone.children[8].name = "conclusao_ano" + x;
    original.parentNode.appendChild(clone);
    if (x > 2){
      var button = document.getElementById("clone");
      button.parentNode.removeChild(button);
      return false;
    }
  }
}

//Esta função adiciona campos dinamicamente, e após três campos remove o botão com esta opção

var y = 0;
function myProfiClone(){
  if (y < 3){
    var original = document.getElementById("prof_info");
    var clone = original.cloneNode(true);
    y++;
    clone.id = "prof_info" + y;
    clone.children[1].name = "nomeempresa" + y;
    clone.children[4].name = "cargo" + y;
    clone.children[7].name = "entrou" + y;
    clone.children[8].name = "saiu" + y;
    clone.children[11].name = "atividades" + y;
    original.parentNode.appendChild(clone);
    if (y > 2){
      var button = document.getElementById("clone2");
      button.parentNode.removeChild(button);
      return false;
    }
  }
}

//Função para imprimir

function myPrint(){
  window.print();
}

