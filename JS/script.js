const  toggle = document.querySelector("#toggle-button");
toggle.addEventListener('click', function(){
    document.querySelector("#sidebar").classList.toggle("expand");
});
document.getElementById("addProduct").addEventListener("click", function() {
    var form = document.getElementById("ProductForm");
    if (form.style.display === "none") {
        form.style.display = "block";
    } else {
        form.style.display = "none";
    }
});
document.getElementById("addClientBtn").addEventListener("click", function() {
    var form = document.getElementById("clientForm");
    if (form.style.display === "none") {
        form.style.display = "block";
    } else {
        form.style.display = "none";
    }
});
document.getElementById("editclientProfile").addEventListener("click", function() {
    var form = document.getElementById("clientProfile");
    if (form.style.display === "none") {
        form.style.display = "block";
    } else {
        form.style.display = "none";
    }
});
document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('clientForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const nom = document.getElementById('nom').value.trim();
            const prenom = document.getElementById('prenom').value.trim();
            const addresse = document.getElementById('addresse').value.trim();
            const codePostal = document.getElementById('codePostal').value.trim();
            const ville = document.getElementById('ville').value.trim();
            const tel = document.getElementById('tel').value.trim();
            const mail = document.getElementById('mail').value.trim();

            if (nom === '' || prenom === '' || addresse === '' || codePostal === '' || ville === '' || tel === '' || mail === '') {
                alert('Tous les champs sont obligatoires');
                return;
            }
            if (!validateNom(nom)) {
                alert('Veuillez entrer un nom valide.');
                return;
            }
            if (!validatePrenom(prenom)) {
                alert('Veuillez entrer un prénom valide.');
                return;
            }
            if (!validateAddresse(addresse)) {
                alert('Veuillez entrer une adresse valide.');
                return;
            }
            if (!validateCodePostal(codePostal)) {
                alert('Veuillez entrer un code postal valide.');
                return;
            }
            if (!validateVille(ville)) {
                alert('Veuillez entrer une ville valide.');
                return;
            }
            if (!validateMail(mail)) {
                alert('Veuillez entrer une adresse mail valide.');
                return;
            }
            if (!validateTel(tel)) {
                alert('Veuillez entrer un numéro de téléphone valide.');
                return;
            }

            this.submit();
        });

        function validateNom(nom) {
            const re = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/;
            return re.test(nom);
        }

        function validatePrenom(prenom) {
            const re = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/;
            return re.test(prenom);
        }

        function validateAddresse(addresse) {
            const re = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/;
            return re.test(addresse);
        }

        function validateCodePostal(codePostal) {
            const re = /^[1-9][0-9]{4}$/;
            return re.test(codePostal);
        }

        function validateVille(ville) {
            const re = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/;
            return re.test(ville);
        }

        function validateTel(tel) {
            const re = /^0[1-9]([-. ]?[0-9]{2}){4}$/;
            return re.test(tel);
        }

        function validateMail(mail) {
            const re = /^[a-z0-9.-]+@[a-z0-9.-]{2,}\.[a-z]{2,4}$/i;
            return re.test(mail);
        }
    });


    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('UpdateForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const nom = document.getElementById('nom').value.trim();
            const prenom = document.getElementById('prenom').value.trim();
            const addresse = document.getElementById('addresse').value.trim();
            const codePostal = document.getElementById('codePostal').value.trim();
            const ville = document.getElementById('ville').value.trim();
            const tel = document.getElementById('tel').value.trim();
            const mail = document.getElementById('mail').value.trim();

            if (nom === '' || prenom === '' || addresse === '' || codePostal === '' || ville === '' || tel === '' || mail === '') {
                alert('Tous les champs sont obligatoires');
                return;
            }
            if (!validateNom(nom)) {
                alert('Veuillez entrer un nom valide.');
                return;
            }
            if (!validatePrenom(prenom)) {
                alert('Veuillez entrer un prénom valide.');
                return;
            }
            if (!validateAddresse(addresse)) {
                alert('Veuillez entrer une adresse valide.');
                return;
            }
            if (!validateCodePostal(codePostal)) {
                alert('Veuillez entrer un code postal valide.');
                return;
            }
            if (!validateVille(ville)) {
                alert('Veuillez entrer une ville valide.');
                return;
            }
            if (!validateMail(mail)) {
                alert('Veuillez entrer une adresse mail valide.');
                return;
            }
            if (!validateTel(tel)) {
                alert('Veuillez entrer un numéro de téléphone valide.');
                return;
            }

            this.submit();
        });
    function validateNom(nom) {
        const re = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/;
        return re.test(nom);
    }

    function validatePrenom(prenom) {
        const re = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/;
        return re.test(prenom);
    }

    function validateAddresse(addresse) {
        const re = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/;
        return re.test(addresse);
    }

    function validateCodePostal(codePostal) {
        const re = /^[1-9][0-9]{4}$/;
        return re.test(codePostal);
    }

    function validateVille(ville) {
        const re = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/;
        return re.test(ville);
    }

    function validateTel(tel) {
        const re = /^0[1-9]([-. ]?[0-9]{2}){4}$/;
        return re.test(tel);
    }

    function validateMail(mail) {
        const re = /^[a-z0-9.-]+@[a-z0-9.-]{2,}\.[a-z]{2,4}$/i;
        return re.test(mail);
    }
});






