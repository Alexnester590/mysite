
<button id="move_up">Move Up</button>
<button id="move_down">Move Down</button>
<button id="color">Change Color</button>
<button id="disappear">Disappear/Re-appear</button>
<div id="change_me">Make Me Do Stuff!</div>
        <script src="my_scripts1-010.js"></script>

<div id="clickMe">Show me the the Furry Friend of the Day</div>
                <div id="picframe">
                        <img src="images/furry_friend.jpg">
                </div>
                <script>
                        $(document).ready(function(){
                                $("#clickMe").click(function() {
                                        $("img").fadeIn(1000);
                                        $("#picframe").slideToggle("slow");
                                });
                        });
                </script>







