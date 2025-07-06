document.addEventListener("DOMContentLoaded", function () {
    const pointList = document.getElementById("pointList");
    if (!pointList) return;

    fetch("?json")
        .then(response => response.json())
        .then(data => {
            pointList.innerHTML = "";
            data.forEach(item => {
                const nom = item.nom || "";
                const adresse = item.adresse || "";
                const ville = item.ville || "";
                const li = document.createElement("li");
                li.className = "list-group-item";
                li.innerHTML = `
                  <a href="?page=update&id=${item.id}">
                      <strong>${nom}</strong> <span class="separator">|</span> ${adresse}, ${ville}
                  </a>
                `;
                pointList.appendChild(li);
            });
        })
        .catch(() => {
            pointList.innerHTML = "<li class='list-group-item text-danger'>Erreur lors du chargement.</li>";
        });
});