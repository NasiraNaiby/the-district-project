const spinnerElement  = document.querySelector('.spinner-container');
setTimeout(()=>{
    spinnerElement.style.display = 'none';
}, 3000);

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
    if(!validateEmail(email)){
        alert('entere une email valid  ');
        return;
    }
    if (!validatePhone(phone)) {
        alert('Veuillez entrer un numéro de téléphone valide.');
        return;
    }


    alert('Formulaire soumis avec succès!');
    document.getElementById('contactForm').reset();
});
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function validatePhone(phone) {
    const re = /^\d{10}$/; //  regex for phone number format
    return re.test(phone);
}
function ordersubmit(){
    alert("Votre commande a été soumise! ");
    window.location.href = "plats.html";

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
