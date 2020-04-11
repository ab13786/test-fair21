<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Kiawanis Fair - Show</title>

        <link rel="stylesheet" href="/stylesheets/shows.css" type="text/css">
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="/views/main.html" >Home</a></li>
                    <li><a href="/views/Vendors.html">Vendors</a></li>
                    <li><a href="/views/News.html">News</a></li>
                    <li><a href="/views/Applications.php">Applications</a></li>
                    <li><a href="/views/Shows.html">Shows</a></li>
                    <li><a href="/views/Map.html">Map</a></li>
                    <li><a href="/views/Sponsors.html">Sponsors</a></li>
                </ul>
            </nav>
        </header>

        <div class="tab">
            <button class="tablinks" onclick="opentab(event,'all')">All Shows</button>
            <button class="tablinks" onclick="opentab(event,'add')">Add Shows</button>
            <button class="tablinks" onclick="opentab(event,'attendance')">Attendance</button>
        </div>

            <script>
            function opentab(evt, tabName) {

              var i, tabcontent, tablinks;
              tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
              tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(tabName).style.display = "block";
              evt.currentTarget.className += " active";
            }
        </script>

        <div id="all" class="tabcontent">
            <h1>Query for all shows in database</h1>
        </div>

        <div id="add" class="tabcontent">
            <section>
                <form>
                    <fieldset>
                        <legend> News Update</legend>

                        <label for = "Title"> Title: </label>
                        <input type="text" id="Title" name="showTitle" placeholder="Enter Title">

                        <label for="date">Date: </label>
                        <input type="date" id="date" name="showDate">

                        <label for="time">Time: </label>
                        <input id="time" name="showTime" type="time">

                        <label for="description">Description: </label>
                        <textarea  id="description" placeholder="Enter Description here"></textarea>

                        <section id="submitButtons">
                            <input  id="submit" value ="Submit" type="submit" class="submission">
                        </section>
                    </fieldset>
                </form>
                <br>
		    </section>
        </div>

        <div id="attendance" class="tabcontent">
            <h1>Query database for planned show attendance</h1>
        </div>
    </body>
</html>