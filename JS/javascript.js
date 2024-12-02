if (!sessionStorage.getItem('preloaderShown')) { 
    const spinnerElement = document.querySelector('.spinner-container'); 
    setTimeout(()=>{ spinnerElement.style.display = 'none'; // Set session storage flag to indicate the preloader has been shown 
        sessionStorage.setItem('preloaderShown', 'true'); 
    }, 2000); } 
    else { // Hide the preloader immediately if it has been shown before 
        document.querySelector('.spinner-container').style.display = 'none'; 
    }

$('.carousel-one').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText: ['<span class="owl-prev">‹</span>', '<span class="owl-next">›</span>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:5
        }
    }
});
$('.carousel-two').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText: ['<span class="owl-prev">‹</span>', '<span class="owl-next">›</span>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:6
        }
    }
});
$('.carousel-three').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText: ['<span class="owl-prev">‹</span>', '<span class="owl-next">›</span>'],
    responsive:{
        0:{
            items:1
        },
        810:{
            items:2
        },
        1000:{
            items:6
        }
    }
});

let cartCount = 0;
document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function() {
        cartCount++;
        let cartCountElement = document.getElementById('cart-count');
        cartCountElement.textContent = cartCount;

        cartCountElement.classList.add('bounce');

        // Remove the animation
        cartCountElement.addEventListener('animationend', () => {
            cartCountElement.classList.remove('bounce');
        });
    });
});

document.getElementById('contactForm').addEventListener('submit', function(event){
    event.preventDefault();

    const name = document.getElementById('name').value.trim();
    const phone = document.getElementById('téléphone').value.trim();
    const email = document.getElementById('emailAddress').value.trim();
    const message = document.getElementById('message').value.trim();

    if(name === '' || phone === '' || email === '' || message === ''){
        alert('tous les chambre sont obligatoire ');
        return;
    }
    if (!validateName(name)) {
        alert('Veuillez entrer un nom valide.');
        return;
    }
    if(!validateEmail(email)){
        alert('entrez une email valide');
        return;
    }
    if (!validatePhone(phone)) {
        alert('Veuillez entrer un numéro de téléphone valide.');
        return;
    }
    if (!validateMessage(message)) {
        alert('Veuillez entrer un message valide.');
        return;
    }

    // window.location.href = "phpscript.php";
    alert('Formulaire soumis avec succès!');
    document.getElementById('contactForm').reset();
});

function validateName(name) {
    const re = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/;
    return re.test(name);
}

function validateEmail(email) {
    const re = /^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/;
    return re.test(email);
}

function validatePhone(phone) {
    const re = /^0[1-9]([-. ]?[0-9]{2}){4}$/; //  regex for phone number format // 
    return re.test(phone);
}

function validateMessage(message) {
    const re = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/;
    return re.test(message);
}

function ordersubmit(){
    alert("Votre commande a été soumise! ");
    window.location.href = "plats.php";

}

function searchFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
      }
  }
