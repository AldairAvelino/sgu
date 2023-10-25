let currentTab = 0; // A aba atual é definida como a primeira aba (0)
showTab(currentTab); // Exibe a aba atual

function showTab(n) {
  const x = document.getElementsByClassName("tab");
  x[n].style.display = "block";

  if (n === 0) {
    document.getElementById("prevBtn").style.display = "none"; // Esconde o botão "Previous" na primeira etapa
  } else {
    document.getElementById("prevBtn").style.display = "inline"; // Mostra o botão "Previous" nas etapas subsequentes
  }
  if (n === (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Edit User"; // Altera o texto do botão "Next" para "Sign Up" na última etapa
  } else {
    document.getElementById("nextBtn").innerHTML = "Next"; // Restaura o texto do botão "Next" nas etapas anteriores
  }

  fixStepIndicator(n); // Atualiza os indicadores de etapa
}

function nextPrev(n) {
  const x = document.getElementsByClassName("tab");

  if (n === 1 && !validateForm()) return false; // Valida o formulário; se for inválido, interrompe o progresso

  x[currentTab].style.display = "none"; // Esconde a etapa atual
  currentTab = currentTab + n; // Atualiza a aba atual

  if (currentTab >= x.length) {
    document.getElementById("submitButton").click(); // Clica no botão de envio oculto quando todas as etapas forem concluídas
    return false;
  }

  showTab(currentTab); // Exibe a próxima etapa
}

function validateForm() {
  let x;
  let y;
  let i;
  let valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");

  for (i = 0; i < y.length; i++) {
    if (y[i].value === "") {
      y[i].className += " invalid"; // Adiciona a classe "invalid" aos campos vazios
      valid = false; // Define a validação como falsa se houver campos vazios
    }
  }

  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish"; // Marca a etapa como concluída se for válida
  }

  return valid; // Retorna o status de validação
}

function fixStepIndicator(n) {
  let i;
  const x = document.getElementsByClassName("step");

  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", ""); // Remove a classe "active" de todos os indicadores de etapa
  }

  x[n].className += " active"; // Adiciona a classe "active" ao indicador de etapa atual
}
