<?php if (isset($_SESSION['check'])): ?>
   <style>
     #Cookies{visibility: hidden}
   </style>
<?php else: ?>
  <?php $_SESSION['check']="lol" ?>
<?php endif ?>

<div id="Cookies">
    <p>
      Voulez-vous accepter les cookies ?
    </p>
    <button class="oui btn btn-warning btn_yellow">Oui</button>
    <button class="non btn btn-warning btn_yellow">Non</button>

    <script>
      $(document).ready(function () {
        $(".oui").click(function () {
          $("#Cookies")
            .text("Vous avez accepté les cookies, merci !")
            .delay(1800)
            .slideUp(300);
      });
      });
    </script>

    <script>
      $(document).ready(function () {
        $(".non").click(function () {
          $("#Cookies")
            .text("Vous avez refusé les cookies :(")
            .delay(1800)
            .slideUp(300);
        });
      });
    </script>
</div>