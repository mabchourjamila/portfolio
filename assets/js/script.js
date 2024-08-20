document.addEventListener('DOMContentLoaded', function() {
    // Sélectionner l'élément parent
    const container = document.querySelector('.webtion-single-icon-inner');

    // Vérifier si l'élément parent existe
    if (container) {
        // Sélectionner tous les éléments <i> à l'intérieur de cet élément
        const icons = container.querySelectorAll('i');

        // Parcourir tous les éléments <i> trouvés
        icons.forEach(icon => {
            // Vérifier si l'élément <i> a la classe 'fa-x-twitter'
            if (icon.classList.contains('fa-x-twitter')) {
                // Remplacer la classe 'fa-x-twitter' par 'fa-twitter'
                icon.classList.remove('fa-x-twitter');
                icon.classList.add('fa-twitter');
            }
        });
    }
});
