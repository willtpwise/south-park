<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>South Park CSS</title>
    <meta name="author" content="William Wise">
    <link href="styles/main.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="tools">
      <button id="hide-bg">Toggle BG</button>
      <button id="hide-guys">Toggle Guys</button>
    </div>
    <div class="stage hide-bg">
      <div class="the-guys">
        <div class="cartman guy">
          <div class="head">
            <div class="hat"> 
              <div class="poof">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
              <div class="main">
                <div class="inner"></div>
                <div class="front"></div>
              </div>
            </div>
            <div class="eyes">
              <div class="inner-wrap">
                <div class="eye"></div>
                <div class="eye"></div>
              </div>
            </div>
            <div class="mouth"></div>
            <div class="chin">
              <div></div>
              <div></div>
            </div>
          </div>
          <div class="torso">
            <div class="jacket">
              <div class="inner">
                <div class="zipper">
                  <div class="buttons">
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="cheesy-poofs">
              <div class="front">
                <div class="moon">
                  <span>Cheesy Poofs</span>
                </div>
                <div class="rocket-ship">
                  <div class="wing left"></div>
                  <div class="wing right"></div>
                </div>
              </div>
              <div class="top"></div>
              <div class="side"></div>
            </div>
            <div class="fat-roles">
              <div class="main">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
            <div class="cartman-mittens">
              <div class="mitten"></div>
              <div class="mitten"></div>
            </div>
          </div>
          <div class="legs">
            <div class="shoes">
              <div class="shoe"></div>
              <div class="shoe"></div>
            </div>
          </div>
        </div>
        <div class="stan guy">
          <div class="head">
            <div class="hat">
              <div class="poof">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
              <div class="main">
                <div class="inner"></div>
                <div class="front"></div>
              </div>
            </div>
            <div class="eyes">
              <div class="inner-wrap">
                <div class="eye"></div>
                <div class="eye"></div>
              </div>
            </div>
            <div class="mouth"></div>
          </div>
          <div class="torso">
            <div class="jacket">
              <div class="inner">
                <div class="collar"></div>
                <div class="zipper">
                  <div class="buttons">
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
                </div>

                <div class="sleeves">
                  <div class="sleeve"></div>
                  <div class="sleeve"></div>
                </div>
               
              </div>
            </div>
            <div class="mittens">
              <div class="mitten"></div>
              <div class="mitten"></div>
            </div>
          </div>
          <div class="legs">
            <div class="shoes">
              <div class="shoe"></div>
              <div class="shoe"></div>
            </div>
          </div>
        </div>
        <div class="kenny guy">
          <div class="head">
            <div class="face">
              <div class="eyes">
                <div class="inner-wrap">
                  <div class="eye"></div>
                  <div class="eye"></div>
                </div>
              </div>
            </div>
            <div class="shadow"></div>
            <div class="hoodie-fur">
              <div class="pull-cord">
                <div class="left"></div>
                <div class="right"></div>
              </div>
            </div>
          </div>
          <div class="torso">
            <div class="jacket">
              <div class="inner">
                <div class="zipper"></div>      
              </div>
            </div>
            <div class="mittens">
              <div class="mitten"></div>
              <div class="mitten"></div>
            </div>
          </div>
          <div class="legs">
            <div class="shoes">
              <div class="shoe"></div>
              <div class="shoe"></div>
            </div>
          </div>
        </div>
        <div class="kyle guy">
          <div class="head">
            <div class="hat">
              <div class="front"></div>
              <div class="flap left"></div>
              <div class="flap right"></div>
            </div>
            <div class="eyes">
              <div class="inner-wrap">
                <div class="eye"></div>
                <div class="eye"></div>
              </div>
            </div>
            <div class="mouth"></div>
          </div>
          <div class="torso">
            <div class="jacket">
              <div class="inner">
                <div class="collar"></div>
                <div class="zipper"></div>
                <div class="pockets">
                  <div class="pocket"></div>
                  <div class="pocket"></div>
                </div>
                <div class="sleeves">
                  <div class="sleeve"></div>
                  <div class="sleeve"></div>
                </div>
               
              </div>
            </div>
            <div class="mittens">
              <div class="mitten"></div>
              <div class="mitten"></div>
            </div>
          </div>
          <div class="legs">
            <div class="shoes">
              <div class="shoe"></div>
              <div class="shoe"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
    function toggleBg() {
      var btn = document.querySelector("#hide-bg");
      var stage = document.querySelector(".stage");
      btn.addEventListener("click", function() {
        if ( stage.className.indexOf("hide-bg") > -1 ) {
          stage.className = stage.className.replace("hide-bg", "");
        } else {
          stage.className = stage.className + " hide-bg";
        }
      });
    }
    toggleBg();
    function toggleGuys() {
      var btn = document.querySelector("#hide-guys");
      var guys = document.querySelector(".the-guys");
      btn.addEventListener("click", function() {
        if ( guys.className.indexOf("hide") > -1 ) {
          guys.className = guys.className.replace("hide", "");
        } else {
          guys.className = guys.className + " hide";
        }
      });
    }
    toggleGuys();

    document.addEventListener("keydown", function(e) {
      if ( e.keyCode === 79 ) {
        var btn = document.querySelector("#hide-guys");
        var guys = document.querySelector(".the-guys");
        if ( guys.className.indexOf("hide") > -1 ) {
          guys.className = guys.className.replace("hide", "");
        } else {
          guys.className = guys.className + " hide";
        }
      }
    });


    </script>
  </body>
</html>