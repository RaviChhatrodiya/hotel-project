<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>hotel - Contact</title>
  <?php require ('inc/links.php') ?>
</head>

<body class="bg-light">

  <?php require ('inc/header.php') ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">CONTACT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Aliquid quibusdam odio ullam molestias voluptate est,<br>
      quae reprehenderit veniam libero magnam dolore pariatur minus ab rerum architecto,
      et officia non amet?
    </p>
  </div>
  <div class="cointener">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">

        <div class="bg-white rounded shadow p-4">
          <iframe class="w-100 rounded md-4" height="320px"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.550176191021!2d70.78827227529246!3d22.295023179690368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca19b942ac15%3A0x43959c45a1d3f88a!2sThe%20Imperial%20Palace!5e0!3m2!1sen!2sin!4v1721564877941!5m2!1sen!2sin"
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          <h5>Address</h5>
          <a href="https://maps.app.goo.gl/pqa9NAgnMZovE3Se8 " target="_blank"
            class="d-line-block text-decoration-none text-dark">
            <i class="bi bi-geo-alt-fill"></i> Empire,rajkot
          </a>

          <h5 class="mt-4">Call us</h5>
          <a href="tel: +919898345656" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +919898345656
          </a>
          <br>
          <a href="tel: +919898345656" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +919898345656
          </a>

          <h5 class="mt-4">Email</h5>
          <a href="mailto: ask.empire@mail.com" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-envelope-fill"></i> ask.empire@mail.com
          </a>

          <h5 class="mt-4">Follow us</h5>
          <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
            <i class="bi bi-twitter me-1"></i>
          </a>

          <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>

          </a>
          <a href="#" class="d-inline-block   text-dark fs-5">
            <i class="bi bi-facebook me-1"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-6 col-md-6  px-4">
        <div class="bg-white rounded shadow p-4">
          <form action="bg-white rounded shadow p-4">
            <h5>Send a message</h5>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Name</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="mb-3">
              <label class="form-label">Subject</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mb-3">
              <label class="form-label">Message</label>
              <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
            </div>
            <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>

          </form>
        </div>
      </div>
    </div>
  </div>

  <?php require ('inc/footer.php') ?>

</body>

</html>