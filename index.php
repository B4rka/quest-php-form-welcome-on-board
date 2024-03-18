<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome on board</title>
    <link rel="stylesheet" href="/assets/styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <?php include '_navbar.php' ?>
        <div class="container">
            <h1>Welcome on board!</h1>
            <img src="/assets/images/avatar.png" alt="">
        </div>
    </header>
    <main>
        <section class="container">
            <h2 id="articles">Recent articles</h2>
            <div class="articles">
                <article>
                    <img src="/assets/images/responsive.png" alt="Responsive">
                    <h3>Responsive</h3>
                    <a href="#">Read</a>
                </article>
                <article>
                    <img src="/assets/images/scalable.png" alt="Scalable">
                    <h3>Scalable</h3>
                    <a href="#">Read</a>
                </article>
                <article>
                    <img src="/assets/images/inclusive.png" alt="Inclusive">
                    <h3>Inclusive</h3>
                    <a href="#">Read</a>
                </article>
            </div>
        </section>
        <section class="container">
            <h2 id="about">About</h2>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi rerum debitis fugit similique laborum,
                eveniet nam ratione sed, itaque, minus in hic dolores suscipit molestias quis quibusdam error blanditiis
                sapiente.
                Laborum laudantium aut, consequuntur voluptatum animi eaque mollitia? Saepe neque facilis minima
                laborum, provident numquam ipsum laudantium totam porro placeat exercitationem voluptates quia explicabo
                temporibus sapiente non. Quo, repellat corrupti.
            </p>
            <p>
                Excepturi dolore saepe, temporibus est voluptate necessitatibus molestiae sit minima eum quisquam et qui
                quaerat nemo nam, consequuntur nisi alias in praesentium. Fuga amet esse nam doloremque ut nemo nostrum.
            </p>
        </section>
        <?php //@todo Add a contact form  ?>
        <section class="container">
            <!-- <a href="result.php">resultat</a> Bouton de test de la seconde page -->
            <h2 id="contact">Get in Touch</h2>
            <p>Leave us a message and we will get back to you as soon as possible</p>
            <p>Fields marked with a red wildcards * are required</p>
            <form id="myForm" class="form-container" action="result.php" method="post">
                <label for="name">Name <span class ='redstar'>*</span></label>
                <br>
                <input type="text" id="name" name="name" required value="<?= $contact['name'] ?? '' ?>">
                <br>
                <label for="email">Email <span class ='redstar'>*</span></label>
                <br>
                <input type="text" id="email" name="email" required value="<?= $contact['email'] ?? '' ?>">
                <br>
                <label for="subject">Subject <span class ='redstar'>*</span></label>
                <br>
                <select id="pet-select" name="pets" required>
                    <option value=""></option>
                    <option value="appointment">Schedule an appointment</option>
                    <option value="newsletter">Subscribe to the newsletter</option>
                    <option value="quotation">Asking for a quotation</option>
                </select>
                <br>
                <label for="message">Message</label>
                <br>
                <textarea id="message" name="message" rows="10" cols="33" maxlength="500" wrap></textarea> 
                <br>
                <button>Send</button> 
            </form>
        </section>
    </main>
    <?php include '_footer.php' ?>
</body>

</html>