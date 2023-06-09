
fetch('/api/marques')
  .then(response => response.json())
  .then(data => {
        // Utilisez les données JSON pour modifier le DOM
        const marquesList = document.querySelector('#l-mark');

        data.forEach(marque => {
        const marqueItem = document.createElement('li');
        marquesList.appendChild(marqueItem);
        });
  })
  .catch(error => {
    // Gérez les erreurs de récupération du fichier JSON
    console.error('Une erreur s\'est produite :', error);
  });