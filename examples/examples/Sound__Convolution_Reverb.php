<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="learn-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <p id="backlink"><a href="../#examples">< Back to Examples</a></p>
          <h2> Convolution Reverb</h2>
          <p><p>The p5.Convolver can recreate the sound of actual
 spaces using convolution. Convolution takes an Impulse Response,
 (the sound of a room reverberating), and uses that to
 recreate the sound of that space.</p><p>Click to play a sound through
 convolution. Every time you click, the sound is convolved with
 a different Impulse Response. To hear the Impulse Response itself,
 press any key.</p>
 *
 <p><em><span class="small">To run this example locally, you will need the
 <a href="http://p5js.org/reference/#/libraries/p5.sound">p5.sound library</a>
 a sound file, and a running <a href="https://github.com/processing/p5.js/wiki/Local-server">local server</a>.
 These convolution samples are Creative Commons BY
 <a href="https://www.freesound.org/people/recordinghopkins/">
 recordinghopkins</a></em></span></p>
 </p>

          <div id="exampleDisplay">
            <iframe id="exampleFrame" src="../example.html" ></iframe>
            <div class="edit_space">
              <button id="runButton" class="edit_button">run</button>
              <button id="resetButton" class="reset_button">reset</button>
            </div>
            <div id="exampleEditor"></div>
          </div>

          <p><a style="border-bottom:none !important;" href="http://creativecommons.org/licenses/by-nc-sa/4.0/" target=_blank><img src="http://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" style="width:88px"/></a></p>
      </section>

      <?php include('../../footer.php'); ?>
    </div><!-- end column-span -->

    <!-- outside of column for footer to go across both -->

    <p class="clearfix"> &nbsp; </p>

    <object type="image/svg+xml" data="../../img/thick-asterisk-alone.svg" id="asterisk-design-element">
         *<!-- to do: add fallback image in CSS -->
    </object>

    <?php include('../../end.php'); ?>

    <script src="../../js/vendor/ace-nc/ace.js"></script>
    <script src="../../js/examples.js"></script>
    <script>
      $(document).ready( function () {
          examples.init('../examples_src/33_Sound/18_Convolution_Reverb.js');
      });
    </script>
  </body>
</html>