<div id="header">
      <h2>Jump for Joy Sale</h2>
    </div>
    <div id="main">
      <div class="guess_box"><img src="images/jump1.jpg"/></div>
      <div class="guess_box"><img src="images/jump2.jpg"/></div>
      <div class="guess_box"><img src="images/jump3.jpg"/></div>
      <div class="guess_box"><img src="images/jump4.jpg"/></div>
    </div>

    <script>
      $(document).ready(function() {
        $(".guess_box").click( function() {
          $(".guess_box p").remove();
          var discount = Math.floor((Math.random()*5) + 5);
          var discount_msg = "<p>Your Discount is "+discount+"%</p>";
          $(this).append(discount_msg);
        });
      });
    </script>


