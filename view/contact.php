<?php $title = 'Jean Forteroche - Contact'; ?>
<?php require("../view/header.php"); ?>
                <!--Section: Contact v.2-->
                <section id="sectionContact">

                    <!--Section heading-->
                    <h1>Me Contacter</h1>
                    <!--Section description-->
                    <p>N'hésitez pas à me contacter en me laissant un message avec ce formulaire !</p>

                    <div class="contactBoxAll">
                            <form id="contact-form" name="contact-form" action="" method="POST">
                                  <div class="contactBox">
                                      <label for="name">Nom : </label>
                                      <input type="text" name="name"/>
                                  </div>
                                  <div class="contactBox">
                                      <label for="email">E-mail : </label>
                                      <input type="text" name="email"/>
                                  </div>

                                <div class="subjectBox">
                                    <label for="subject">Sujet : </label>
                                    <input type="text" name="subject"/>
                                </div>
                                <div class="messageBox">
                                    <label for="message">Votre message : </label>
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                </div>
                                <a href="" id="buttonSendContact">Envoyer</a>
                            </form>
                    </div>

                </section>
                <!--Section: Contact v.2-->
<?php include('../view/footer.php'); ?>
<?php include('../view/template.php'); ?>
