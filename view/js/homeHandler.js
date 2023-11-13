async function handler(id, apelido) {
  sessionStorage.setItem("id_planta", id);
  sessionStorage.setItem("apelido", apelido);
  goToPage("details");
}
