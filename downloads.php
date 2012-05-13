<!doctype html>
<html>
<head>
  <title>Real-Time Deformable Terrain</title>
  
  <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
  
  <script type="text/javascript">
    function mouseEvent(id, state)
    {
      document.getElementById(id).src="images/buttons/"+id+state+".png";
	}
  </script>

</head>
<body>
<div id="container">
  <!------------------------------------------------------------->
  <!---- BANNER ---->
  <!------------------------------------------------------------->
  <header id="banner">
  </header>
  <!------------------------------------------------------------->
  <!---- NAVIGATION ---->
  <!------------------------------------------------------------->
  <nav>
    <ul>
      <li>
        <a href="index.php">
          <img src="images/buttons/home.png" id="home"
           onMouseOver="mouseEvent('home', '-hover')"
           onMouseDown="mouseEvent('home', '-pressed')"
           onMouseOut="mouseEvent('home', '')"
           onMouseUp="mouseEvent('home', '-hover')"
          >
        </a>
      </li>
      <li>
        <a href="details.php">
          <img src="images/buttons/details.png" id="details"
           onMouseOver="mouseEvent('details', '-hover')"
           onMouseDown="mouseEvent('details', '-pressed')"
           onMouseOut="mouseEvent('details', '')"
           onMouseUp="mouseEvent('details', '-hover')"
          >
        </a>
      </li>
      <li>
        <a href="gallery.php">
          <img src="images/buttons/gallery.png" id="gallery"
           onMouseOver="mouseEvent('gallery', '-hover')"
           onMouseDown="mouseEvent('gallery', '-pressed')"
           onMouseOut="mouseEvent('gallery', '')"
           onMouseUp="mouseEvent('gallery', '-hover')"
          >
        </a>
      </li>
      <li>
        <a href="#">
          <img src="images/buttons/downloads.png" id="downloads"
           onMouseOver="mouseEvent('downloads', '-hover')"
           onMouseDown="mouseEvent('downloads', '-pressed')"
           onMouseOut="mouseEvent('downloads', '')"
           onMouseUp="mouseEvent('downloads', '-hover')"
           class="selected"
          >
        </a>
      </li>
      <li>
        <a href="contact.php">
          <img src="images/buttons/contact.png" id="contact"
           onMouseOver="mouseEvent('contact', '-hover')"
           onMouseDown="mouseEvent('contact', '-pressed')"
           onMouseOut="mouseEvent('contact', '')"
           onMouseUp="mouseEvent('contact', '-hover')"
          >
        </a>
      </li>
    </ul>
  </nav>

  <!------------------------------------------------------------->
  <!---- TEASER ---->
  <!------------------------------------------------------------->
  <section id="teaser">
    <header>
    </header>
  </section>
  
  <!-- start content -->
  <div id="content">
  
    <!------------------------------------------------------------->
    <!---- MAIN CONTENT ---->
    <!------------------------------------------------------------->
    <div id="mainContent">
      <section id="sectGroup">
        <section>
          <header>
            <h2>Downloads</h2>
            <p>
              A selection of downloads including reports and other documents
            </p>
          </header>
          <div>
            <h3>Project Proposal</h3>
            <table>
              <tr>
                <td width="200px">
                  <ul><li><a href="downloads/proposal.pdf">Download</a></li></ul>
                </td>
                <td width="75px" style="text-align:right">
                  [175 KiB]
                </td>
              </tr>
            </table>
          <h3>Project Poster</h3>
            <table>
              <tr>
                <td width="200px">
                  <ul><li><a href="downloads/poster.pdf">Downalod</a></li></ul>
                </td>
                <td width="75px" style="text-align:right">
                  [5,050 KiB]
                </td>
              </tr>
            </table>
            <h3>Literature Syntheses</h3>
            <table>
              <tr>
                <td width="120px">
                  <ul><li>Andrew Flower:</li></ul>
                </td>
                <td width="80px">
                  <a href="downloads/litsynth-andrew.pdf">Download</a>
                </td>
                <td width="75px" style="text-align:right">
                  [212 KiB]
                </td>
              </tr>
              <tr>
                <td width="120px">
                  <ul><li>Justin Crause:</li></ul>
                </td>
                <td width="80px">
                 <a href="downloads/litsynth-justin.pdf">Download</a>
                </td>
                <td width="75px" style="text-align:right">
                  [407 KiB]
                </td>
              </tr>
              <tr>
                <td width="120px">
                  <ul><li>Peter Juritz:</li></ul>
                </td>
                <td width="80px">
                  <a href="downloads/litsynth-peter.pdf">Download</a>
                </td>
                <td width="75px" style="text-align:right">
                  [346 KiB]
                </td>
              </tr>
            </table>
            <h3>Reports</h3>
             <table>
              <tr>
                <td width="120px">
                  <ul><li>Andrew Flower:</li></ul>
                </td>
                <td width="80px">
                  <a href="downloads/report-andrew.pdf">Download</a>
                </td>
                <td width="75px" style="text-align:right">
                  [670 KiB]
                </td>
              </tr>
              <tr>
                <td width="120px">
                  <ul><li>Justin Crause:</li></ul>
                </td>
                <td width="80px">
                <a href="downloads/report-justin.pdf">Download</a>
                </td>
                <td width="75px" style="text-align:right">
                  [1,381 KiB]
                </td>
              </tr>
              <tr>
                <td width="120px">
                  <ul><li>Peter Juritz:</li></ul>
                </td>
                <td width="80px">
                  <a href="downloads/report-peter.pdf">Download</a>
                </td>
                <td width="75px" style="text-align:right">
                  [5,013 KiB]
                </td>
              </tr>
            </table>
          </div>
        </section>
      </section>
    </div> <!-- end mainContent -->
    
  </div> <!-- end content -->
  <footer>
    <!-- Footer -->
    <table width="100%">
      <tr>
        <td>&copy; Andrew Flower & Justin Crause 2010</td>
      </tr>
    </table>
  </footer>

</div> <!-- end container -->

</body>
</html>
