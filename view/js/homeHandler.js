async function handler(id_planta, apelido) {
  sessionStorage.setItem("id_planta", id_planta);
  sessionStorage.setItem("apelido", apelido);
  goToPage("details");
}
