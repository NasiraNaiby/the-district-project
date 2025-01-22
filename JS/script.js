document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.querySelector("#toggle-button");
    if (toggleButton) {
        toggleButton.addEventListener('click', function(){
            document.querySelector("#sidebar").classList.toggle("expand");
        });
    }
    
    const addProductButton = document.getElementById("addProduct");
    if (addProductButton && addClientButton) {
        addProductButton.addEventListener("click", function () {
            var form = document.getElementById("ProductForm");
            if (form) {
                form.style.display = form.style.display === "none" ? "block" : "none";
            }
        });
    }

    const addClientButton = document.getElementById("addClientBtn");
    if (addClientButton) {
        addClientButton.addEventListener("click", function () {
            var form = document.getElementById("clientForm");
            if (form) {
                form.style.display = form.style.display === "none" ? "block" : "none";
            }
        });
    }

    const editClientProfileButton = document.getElementById("editclientProfile");
    if (editClientProfileButton) {
        editClientProfileButton.addEventListener("click", function (event) {
            event.preventDefault();
            var form = document.getElementById("clientProfile");
            if (form) {
                form.style.display = form.style.display === "none" ? "block" : "none";
            }
        });
    }

    const clientForm = document.getElementById('clientForm');
    if (clientForm) {
        clientForm.addEventListener('submit', function (event) {
            event.preventDefault();
            validateForm(this);
        });
    }

    const updateForm = document.getElementById('UpdateForm');
    if (updateForm) {
        updateForm.addEventListener('submit', function (event) {
            event.preventDefault();
            validateForm(this);
        });
    }

    function validateForm(form) {
        const nom = form.querySelector('#nom').value.trim();
        const prenom = form.querySelector('#prenom').value.trim();
        const addresse = form.querySelector('#addresse').value.trim();
        const codePostal = form.querySelector('#codePostal').value.trim();
        const ville = form.querySelector('#ville').value.trim();
        const tel = form.querySelector('#tel').value.trim();
        const mail = form.querySelector('#mail').value.trim();

        if (!nom || !prenom || !addresse || !codePostal || !ville || !tel || !mail) {
            alert('Tous les champs sont obligatoires');
            return;
        }

        const allValidations = [
            validateText(nom),
            validateText(prenom),
            validateText(addresse),
            validateText(ville),
            validateCodePostal(codePostal),
            validateTel(tel),
            validateMail(mail)
        ];
        
        if (!allValidations.every(Boolean)) {
            alert('Veuillez vérifier vos informations.');
            return;
        }

        form.submit();
    }

    function validateText(text) {
        const re = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/;
        return re.test(text);
    }

    function validateCodePostal(codePostal) {
        const re = /^[1-9][0-9]{4}$/;
        return re.test(codePostal);
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
