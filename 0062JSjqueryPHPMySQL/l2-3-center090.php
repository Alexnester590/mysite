<header>
      <h2>2011 Race Finishers!</h2>
    </header>
    <div id="main8">
      <ul class="idTabs">
        <li><a href="#male">Male Finishers</a></li>
        <li><a href="#female">Female Finishers</a></li>
        <li><a href="#all">All Finishers</a></li>
        <li><a href="#new">Add New Finisher</a></li>
      </ul>
      <div id="male">
        <h4>Male Finishers</h4>
        <ul id="finishers_m"></ul>
      </div>
      <div id="female">
        <h4>Female Finishers</h4>
        <ul id="finishers_f"></ul>
      </div>
      <div id="all">
        <h4>All Finishers</h4>
        <ul id="finishers_all"></ul>
      </div>
      <div id="new">
        <h4>All Finishers</h4>
        <form id="addRunner" name="addRunner" action="service.php" method="POST">
          First Name: <input type="text" name="txtFirstName" id="txtFirstName"> <br>
          Last Name: <input type="text" name="txtLastName" id="txtLastName"> <br>
          Gender: <select id="ddlGender" name="ddlGender">
            <option value="">--Please Select--</option>
            <option value="f">Female</option>
            <option value="m">Male</option>
          </select><br>
          Finish Time:
          <input type="text" name="txtMinutes" id="txtMinutes" size="10" maxlength="2">(Minutes)
          <input type="text" name="txtSeconds" id="txtSeconds" size="10" maxlength="2">(Seconds)<br><br>
          <button type="submit" name="btnSave" id="btnSave">Add Runner</button>
          <input type="hidden" name="action" value="addRunner" id="action">
        </form>
      </div>
    </div>
    <footer>
      <h4>Congratulations to all our finishers!</h4>
      <button id="btnStart">Start Page Updates</button>
      <button id="btnStop">Stop Page Updates</button>
      <br>
      <span id="freq"></span><br><br>
      Last Updated: <div id="updatedTime"></div>
    </footer>
               <script src="my_scripts9-010.js"></script>
<!-- tableContainer -->
<!-- <div id="coupon">
  <a href="freecoffee.html" title="Click here to get your free coffee">
   <img src="images/ticket.gif" alt="Starbuzz coupon ticket">
 </a>
</div> -->
