<form id="contactForm" action="phpscript.php" method="post">
    <!-- Name input -->
    <div class="mb-3 d-flex">
        <input class="form-control" name="name" id="name" type="text" placeholder="Nom et Prénom" required>
    </div>
    <!-- Telephone input -->
    <div class="mb-3 d-flex">
        <input class="form-control mx-1" name="number" id="téléphone" type="text" placeholder="+33 xxxxxxxx" required>
        <input class="form-control mx-1" name="email" id="emailAddress" type="email" placeholder="example@example.com" required>
    </div>
    <!-- Message input -->
    <div class="mb-3">
        <textarea class="form-control" name="message" id="message" placeholder="Message" style="height: 10rem;" required></textarea>
    </div>
    <!-- Form submit button -->
    <div class="d-flex align-items-center justify-content-center">
        <button class="btn btn-warning btn-lg px-5 text-white" type="submit">Envoyer un message</button>
    </div>
</form>
