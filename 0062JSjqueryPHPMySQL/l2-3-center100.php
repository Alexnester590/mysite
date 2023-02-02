<div class="ui-widget-header ui-corner-top form_pad">
        <h2>Submit Your Cryptid Sighting</h2>
      <h3>Fill out the form below and click "Enter" to Submit</h3>
  </div>
  <form id="frmAddSighting" name="form" method="post" action="service10.php">
    <div class="ui-widget-content form_pad">
      <h3>CRYPTID SIGHTING DATA</h3>
    </div>
    <div class="ui-widget-content form_pad">
      <h3>Date of Sighting:</h3>
        <input  type="text" name="sighting_date" id="datepicker" />

      <h3>Creature Type:</h3>

        <div id="type_select">
          <input type="radio" id="radio1" name="creature_type" value="Chupacabras"/>
            <label for="radio1">Chupacabras</label>
          <input type="radio" id="radio2" name="creature_type" value="Jersey Devil"/>
            <label for="radio2">Jersey Devil</label>
          <input type="radio" id="radio3" name="creature_type" value="Loch Ness Monster"/>
            <label for="radio3">Loch Ness Monster</label>
          <input type="radio" id="radio4" name="creature_type" value="Sasquatch"/>
            <label for="radio4">Sasquatch</label>
          <input type="radio" id="radio5" name="creature_type" value="Yeti"/>
            <label for="radio5">Yeti</label>
          <input type="radio" id="radio6" name="creature_type" value="Other"/>
            <label for="radio6">Other</label>
        </div>

      <h3>Distance from Creature (in ft.):</h3>
        <input type="text" id="distance" class="just_display" name="creature_distance" readonly="readonly"/>
        <div id="slide_dist"></div>

      <h3>Creature Weight (in lbs.):</h3>
        <input  type="text" id="weight" class="just_display" name="creature_weight"   readonly="readonly"/>
        <div id="slide_weight"></div>

      <h3>Creature Height (in ft.):</h3>
        <input  type="text" id="height" class="just_display" name="creature_height" readonly="readonly"/>
        <div id="slide_height"></div>

      <h3>Color of Creature (use the color sliders to enter):</h3>
        Color:<input  type="text" class="just_display" name="creature_color_rgb" id="color_val" readonly="readonly"/>
        <div id="swatch" class="ui-widget-content ui-corner-all"></div>

        Red:<input  type="text" class="just_display" name="creature_color" id="red_val" readonly="readonly"/>
        <div id="red"></div>
        Green:<input  type="text" class="just_display" name="creature_color" id="green_val" readonly="readonly"/>
        <div id="green"></div>
        Blue:<input  type="text" class="just_display" name="creature_color" id="blue_val" readonly="readonly"/>
        <div id="blue"></div>
    </div>
    <div class="ui-widget-content form_pad">
    <h3>CRYPTID LOCATION DATA</h3>
    </div>
    <div class="ui-widget-content form_pad">
      <h3>Latitude of Sighting:</h3>
        <input  type="text" id="latitude"  name="sighting_latitude"/>
        <div id="slide_lat"></div>

      <h3>Longitude of Sighting:</h3>
        <input  type="text" id="longitude" name="sighting_longitude"/>
        <div id="slide_long"></div>
    </div>

    <div class="ui-widget-header ui-corner-bottom form_pad">
      <button type="submit" id="btnSave">Submit</button>
      <input type="hidden" name="action" value="addSighting" id="action">
    </div>
  </form>

               <script src="my_scripts10-010.js"></script>
<!-- tableContainer -->
<!-- <div id="coupon">
  <a href="freecoffee.html" title="Click here to get your free coffee">
   <img src="images/ticket.gif" alt="Starbuzz coupon ticket">
 </a>
</div> -->
