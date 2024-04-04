<!DOCTYPE html>
<html lang="fr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="./forms/bootstrap.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    ::-webkit-scrollbar {
      display: none;
    }
  </style>
  <link href="./forms/style.css" rel="stylesheet">
</head>

<body>
  <main id="main">
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route"
      style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="container">
        <div class="d">
          <div class="d">
            <div class="d">
              <div id="contact">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">Envoyez-moi un message</h5>
                    </div>
                    <div>
                      <form action="https://www.cnassim.com/forms/contact.php" method="post" role="form"
                        class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom"
                                required="">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email"
                                placeholder="Votre e-mail" required="">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet"
                                required="">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required=""></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 text-center my-3">
                            <div class="loading">Chargement</div>
                            <div class="error-message"></div>
                            <div class="sent-message">
                              <p
                                style='font-weight: 600; text-align: center; font-size: 32px; font-family: \"Roboto\", sans-serif; color: white; background: #3a3a3a; position: relative; margin: 4vw;'>
                                Le message à bien été envoyé.</p>
                            </div>
                          </div>

                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">
                              Envoyer le message
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">Restons en contact</h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        N'hésitez pas à me contacter pour toute question, demande de collaboration ou simplement pour
                        échanger des idées. Je suis disponible et prêt à discuter de vos projets. Votre message est
                        important pour moi, et je m'engage à vous répondre dans les plus brefs délais. Merci de votre
                        intérêt et à bientôt !
                      </p>

                      <ul class="list-ico">
                        <li>
                          <i class='bx bxs-map' style='color:#5e3bee'></i></span> Lyon, France
                        </li>
                        <li>
                          <i class='bx bxs-phone' style='color:#5e3bee'></i></span> (+33) 764719858
                        </li>
                        <li>
                          <i class='bx bx-mail-send' style='color:#5e3bee'></i></span> <a
                            href="mailto:chantoutnassim@gmail.com">chantoutnassim@gmail.com</a>
                        </li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li>
                          <a href="https://github.com/NassCT"><span class="ico-circle"><i
                                class="bx bxl-github"></i></span></a>
                        </li>
                        <li>
                          <a href="https://www.linkedin.com/in/nassim-chantout-990aa7260/"><span class="ico-circle">
                              <i class="bx bxl-linkedin"></i></span></a>
                        </li>


                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>

</html>