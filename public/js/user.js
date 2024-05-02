// Données d'exemple pour les utilisateurs
let users = [
    { id: "1", nom: "Doe", prenom: "John", role: "Etudiant", mdp: "test" },
    { id: "2", nom: "Smith", prenom: "Jane", role: "Professeur", mdp: "test" }
  ];
  
  // Fonction pour afficher la liste des utilisateurs
  function displayUsers() {
    const userList = document.getElementById("users");
    userList.innerHTML = "";
    users.forEach(user => {
      const li = document.createElement("li");
      li.innerHTML = `<span>Nom: ${user.nom}</span><span>Prénom: ${user.prenom}</span><span>ID: ${user.id}</span><span>Rôle: ${user.role}</span><button onclick="editUser('${user.id}')">Modifier</button><button onclick="deleteUser('${user.id}')">Supprimer</button>`;
      userList.appendChild(li);
    });
  }
  
  // Fonction pour ajouter un utilisateur
  document.getElementById("addUserForm").addEventListener("submit", function(event) {
    event.preventDefault();
    const nom = document.getElementById("nom").value;
    const prenom = document.getElementById("prenom").value;
    const role = document.getElementById("role").value;
    const id = document.getElementById("id").value;
    const mdp = document.getElementById("mdp").value;
    users.push({ id, nom, prenom, role, mdp });
    displayUsers();
    this.reset();
  });
  
  // Fonction pour rechercher un utilisateur
  function searchUser() {
    const searchId = document.getElementById("searchUser").value;
    const user = users.find(user => user.id === searchId);
    if (user) {
      document.getElementById("editNom").value = user.nom;
      document.getElementById("editPrenom").value = user.prenom;
      document.getElementById("editRole").value = user.role;
      document.getElementById("editId").value = user.id;
      document.getElementById("editMdp").value = user.mdp;
      document.getElementById("editUserForm").style.display = "block";
    } else {
      alert("Utilisateur non trouvé !");
    }
  }
  
  // Fonction pour modifier un utilisateur
  function editUser(userId) {
    const user = users.find(user => user.id === userId);
    if (user) {
      document.getElementById("editNom").value = user.nom;
      document.getElementById("editPrenom").value = user.prenom;
      document.getElementById("editRole").value = user.role;
      document.getElementById("editId").value = user.id;
      document.getElementById("editMdp").value = user.mdp;
      document.getElementById("editUserForm").style.display = "block";
    } else {
      alert("Utilisateur non trouvé !");
    }
  }
  
  // Fonction pour sauvegarder les modifications d'un utilisateur
  function saveEdit() {
    const id = document.getElementById("editId").value;
    const nom = document.getElementById("editNom").value;
    const prenom = document.getElementById("editPrenom").value;
    const role = document.getElementById("editRole").value;
    const mdp = document.getElementById("editMdp").value;
    const index = users.findIndex(user => user.id === id);
    if (index !== -1) {
      users[index] = { id, nom, prenom, role, mdp };
      displayUsers();
      document.getElementById("editUserForm").style.display = "none";
    } else {
      alert("Utilisateur non trouvé !");
    }
  }
  
  // Fonction pour annuler la modification d'un utilisateur
  function cancelEdit() {
    document.getElementById("editUserForm").style.display = "none";
  }
  
  // Fonction pour supprimer un utilisateur
  function deleteUser(userId) {
    const index = users.findIndex(user => user.id === userId);
    if (index !== -1) {
      users.splice(index, 1);
      displayUsers();
    } else {
      alert("Utilisateur non trouvé !");
    }
  }
  
  // Afficher les utilisateurs au chargement de la page
  window.onload = function() {
    displayUsers();
  };




  function highlightButton(button) {
    button.style.backgroundColor = "#B00000";
    button.style.color = "white";
}


  function highlightButton(button) {
    button.style.backgroundColor = "#B00000";
    button.style.color = "white";
}

  