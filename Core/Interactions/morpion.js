const cells = document.querySelectorAll('[data-cell]');
const buttonRejouer = document.getElementById('restart-button');
const joueurUn = 'X';
const joueurDeux = 'O';
let tourDuJoueur = joueurUn;
let messageStatus = document.getElementById("status-message");
let jeuActif = true; // Indicateur pour vérifier si le jeu est actif

cells.forEach(cell => {
    cell.addEventListener('click', jouerPartie, {once: true});
});

buttonRejouer.addEventListener('click', rejouer);

function verifierVictoire(joueur) {
    const combinaisonsGagnantes = [
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8],
        [0, 4, 8],
        [2, 4, 6]
    ];

    return combinaisonsGagnantes.some(combinaison => {
        return combinaison.every(index => {
            return cells[index].innerHTML === joueur;
        });
    });
}

function verifierMatchNul() {
    return [...cells].every(cell => cell.innerHTML === joueurUn || cell.innerHTML === joueurDeux);
}

function jouerPartie(e) {
    if (!jeuActif) return; // Ne pas permettre les mouvements si le jeu est terminé

    e.target.innerHTML = tourDuJoueur;

    if (verifierVictoire(tourDuJoueur)) {
        messageStatus.innerHTML = `Le joueur ${tourDuJoueur} a gagné`;
        jeuActif = false; // Arrêter le jeu
        return;
    } else if (verifierMatchNul()) {
        messageStatus.innerHTML = 'Match nul';
        jeuActif = false; // Arrêter le jeu
        return;
    }

    tourDuJoueur = tourDuJoueur === joueurUn ? joueurDeux : joueurUn;
    messageStatus.innerHTML = `Au tour de ${tourDuJoueur}`;
}

function rejouer() {
    cells.forEach(cell => {
        cell.innerHTML = '';
        cell.removeEventListener('click', jouerPartie);
        cell.addEventListener('click', jouerPartie, {once: true});
    });
    tourDuJoueur = joueurUn;
    messageStatus.innerHTML = `Au tour de ${tourDuJoueur}`;
    jeuActif = true; // Réactiver le jeu
}