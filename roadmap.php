<?php require_once("php/template.php"); ?><?php head(); ?>
  <div id="title"><img src="images/roadmap.gif"></div>

  <h2>Development Status</h2>
  <p>Asgard is in active development.</p>
  <p>The next release is scheduled for 2/15/2013.  The functional goals of that
  release are 'interactions', 'menus' and 'dialogs'.  With these gameplay
  elements, the gamer will be able to open treasure chests and view an
  inventory.  There will also be some in-game instructions presented by a
  dialog.</p>

  <h2>Game Requirements</h2>
  <table border="1" cellspacing="0" style="margin-left: 10%; margin-right: 10%;" >
    <tbody>
      <tr>
        <td>Section 1.</td>

        <td>Map</td>
      </tr>

      <tr>
        <td>1.0</td>

        <td>The primary mode of the game is a Map.</td>
      </tr>

      <tr>
        <td>1.1</td>

        <td>The Map is aerial, having a slight angle to provide
        illusion of depth.</td>
      </tr>

      <tr>
        <td>1.2</td>

        <td>The Map is flat and continuous in all directions.</td>
      </tr>

      <tr>
        <td>1.3</td>

        <td>Doors are traversable connections to other Maps.</td>
      </tr>

      <tr>
        <td>1.4</td>

        <td>All game action will occur on Maps.</td>
      </tr>

      <tr>
        <td>1.5</td>

        <td>The Map will employ Terrain to restrict movement.</td>
      </tr>

      <tr>
        <td>1.5.0</td>

        <td>Mountain.</td>
      </tr>

      <tr>
        <td>1.5.1</td>

        <td>River.</td>
      </tr>

      <tr>
        <td>1.5.2</td>

        <td>In-climate Weather.</td>
      </tr>

      <tr>
        <td>1.6</td>

        <td>A Fog of War may be used to limit visibility.</td>
      </tr>

      <tr>
        <td>1.7</td>

        <td>Depending on location, a Fog of War may be one of these
        modes:</td>
      </tr>

      <tr>
        <td>1.7.0</td>

        <td>Lantern.</td>
      </tr>

      <tr>
        <td>1.7.1</td>

        <td>Whiteout.</td>
      </tr>

      <tr>
        <td>1.7.2</td>

        <td>Discovery.</td>
      </tr>

      <tr>
        <td>1.7.3</td>

        <td>In-climate Fog.</td>
      </tr>

      <tr>
        <td>1.8</td>

        <td>The edges of the map are either circular (wraps around
        to opposite side of the map) or impassable (a sheer
        cliff).</td>
      </tr>

      <tr>
        <td>Section 2.</td>

        <td>Vehicles</td>
      </tr>

      <tr>
        <td>2.0</td>

        <td>Vehicles can be used on the Map.</td>
      </tr>

      <tr>
        <td>2.1</td>

        <td>Vehicles can overcome certain types of Terrain.</td>
      </tr>

      <tr>
        <td>2.2</td>

        <td>Certain Vehicles can assist in Battle.</td>
      </tr>

      <tr>
        <td>2.3</td>

        <td>Certain Vehicles can disable Battle due to technical
        constraints.</td>
      </tr>

      <tr>
        <td>2.4</td>

        <td>Flying vehicles (i.e. airships) move on a sky or world
        map.</td>
      </tr>

      <tr>
        <td>2.4.0</td>

        <td>When parked, flying vehicles are represented and
        boarded via a climbable rope and a shadow.</td>
      </tr>

      <tr>
        <td>2.4.1</td>

        <td>The sky map has two smaller maps below it: Brant and
        Asgard, the former being below the latter.</td>
      </tr>

      <tr>
        <td>2.4.2</td>

        <td>In regards to visual perception, flying vehicles pass
        over the Asgard map quicker than they pass over the Brant
        map.</td>
      </tr>

      <tr>
        <td>2.5</td>

        <td>Flying vehicles can only land at designated landing
        areas on the map.</td>
      </tr>

      <tr>
        <td>Section 3.</td>

        <td>Menu</td>
      </tr>

      <tr>
        <td>3.0</td>

        <td>The Menu is a textual/graphical display used to
        configure various aspects of the game.</td>
      </tr>

      <tr>
        <td>3.0.0</td>

        <td>Equipment.</td>
      </tr>

      <tr>
        <td>3.0.1</td>

        <td>Party Status.</td>
      </tr>

      <tr>
        <td>3.0.2</td>

        <td>Party Configuration.</td>
      </tr>

      <tr>
        <td>3.0.3</td>

        <td>Character Behaviors.</td>
      </tr>

      <tr>
        <td>3.1</td>

        <td>The Menu is a mode of operation separate from the
        Map.</td>
      </tr>

      <tr>
        <td>3.2</td>

        <td>The Menu overlays the Map.</td>
      </tr>

      <tr>
        <td>3.3</td>

        <td>Menu text should support multiple translations.</td>
      </tr>

      <tr>
        <td>3.4</td>

        <td>Menus should be able to render Bandas.</td>
      </tr>

      <tr>
        <td>Section 4.</td>

        <td>Characters</td>
      </tr>

      <tr>
        <td>4.0</td>

        <td>Characters are objects on the map.</td>
      </tr>

      <tr>
        <td>4.1</td>

        <td>Character Properties are used to enforce Character
        specific constraints.</td>
      </tr>

      <tr>
        <td>4.1.0</td>

        <td>Playable.</td>
      </tr>

      <tr>
        <td>4.1.1</td>

        <td>Non-Playable.</td>
      </tr>

      <tr>
        <td>4.1.2</td>

        <td>Fightable.</td>
      </tr>

      <tr>
        <td>4.2</td>

        <td>Characters traverse the Map using combinations of
        Movement Behaviors.</td>
      </tr>

      <tr>
        <td>4.2.0</td>

        <td>Form Stat Based.</td>
      </tr>

      <tr>
        <td>4.2.1</td>

        <td>Gamer Controlled.</td>
      </tr>

      <tr>
        <td>4.2.2</td>

        <td>Directed Waypoint Path.</td>
      </tr>

      <tr>
        <td>4.2.3</td>

        <td>Area Controlled.</td>
      </tr>

      <tr>
        <td>4.3</td>

        <td>Playable Characters can belong to a Party, other types
        may not.</td>
      </tr>

      <tr>
        <td>4.4</td>

        <td>An Enemy is a Character that has the Fightable
        property.</td>
      </tr>

      <tr>
        <td>4.5</td>

        <td>Form Based Movement Behavior for Characters is
        determined by Waveform predisposition.</td>
      </tr>

      <tr>
        <td>4.5.0</td>

        <td>Hyper, influenced by Whimsy form.</td>
      </tr>

      <tr>
        <td>4.5.1</td>

        <td>Timid, influenced by Grace form.</td>
      </tr>

      <tr>
        <td>4.5.2</td>

        <td>Curious, influenced by Robos form.
        form.</td>
      </tr>

      <tr>
        <td>4.5.3</td>

        <td>Defensive, influenced by Urth form.</td>
      </tr>

      <tr>
        <td>4.5.4</td>

        <td>Aggressive, influenced by Pyromania form.</td>
      </tr>

      <tr>
        <td>4.5.5</td>

        <td>Spastic, influenced by Vethr form.</td>
      </tr>

      <tr>
        <td>4.5.6</td>

        <td>Mechanical, influenced by Alector form.</td>
      </tr>

      <tr>
        <td>4.5.7</td>

        <td>Direct, influenced by Ferrum form.</td>
      </tr>

      <tr>
        <td>4.6</td>

        <td>A Character's health is displayed by that Character's
        fullness of color. The paler and more transparent the
        Character, the less healthy he is.</td>
      </tr>

      <tr>
        <td>Section 5.</td>

        <td>Party</td>
      </tr>

      <tr>
        <td>5.0</td>

        <td>A Party is a group of Characters.</td>
      </tr>

      <tr>
        <td>5.1</td>

        <td>A Party can contain no more than 'n' Characters.</td>
      </tr>

      <tr>
        <td>5.2</td>

        <td>A Party must have exactly one Gamer Controlled
        Character called a Lead Character.</td>
      </tr>

      <tr>
        <td>5.3</td>

        <td>The Lead Character can be moved by the Gamer.</td>
      </tr>

      <tr>
        <td>5.4</td>

        <td>Non-Lead Characters in a Party move according to a
        Walking Behavior though do not stray far from the Lead
        Character.</td>
      </tr>

      <tr>
        <td>5.5</td>

        <td>The Lead Character may be changed at any time.</td>
      </tr>

      <tr>
        <td>5.6</td>

        <td>When Fog of War is present, Party Characters can reveal
        areas obscured.</td>
      </tr>

      <tr>
        <td>Section 6.</td>

        <td>Map Objects</td>
      </tr>

      <tr>
        <td>6.0</td>

        <td>Map Objects are visible on the Map.</td>
      </tr>

      <tr>
        <td>6.1</td>

        <td>Map Objects may be invisible.</td>
      </tr>

      <tr>
        <td>6.2</td>

        <td>Objects may have zero or more properties.</td>
      </tr>

      <tr>
        <td>6.2.1</td>

        <td>Useable.</td>
      </tr>

      <tr>
        <td>6.2.2</td>

        <td>Storeable.</td>
      </tr>

      <tr>
        <td>6.2.3</td>

        <td>Container.</td>
      </tr>

      <tr>
        <td>6.2.4</td>

        <td>Equipable.</td>
      </tr>

      <tr>
        <td>6.2.5</td>

        <td>Edible.</td>
      </tr>

      <tr>
        <td>6.2.6</td>

        <td>Drinkable.</td>
      </tr>

      <tr>
        <td>6.2.7</td>

        <td>Plantable.</td>
      </tr>

      <tr>
        <td>6.2.8</td>

        <td>Interactable.</td>
      </tr>

      <tr>
        <td>6.2.9</td>

        <td>Vehicular.</td>
      </tr>

      <tr>
        <td>6.3</td>

        <td>Some Map Object properties may be exclusive of
        others.</td>
      </tr>

      <tr>
        <td>Section 7.</td>

        <td>Skills and Waveform System</td>
      </tr>

      <tr>
        <td>7.0</td>

        <td>Characters have a learned set of Skills.</td>
      </tr>

      <tr>
        <td>7.1</td>

        <td>A Waveform is a distribution of Form-based statistics.</td>
      </tr>

      <tr>
        <td>7.2</td>

        <td>Characteristics of Characters and other Map Objects are
        determined by Waveforms.</td>
      </tr>

      <tr>
        <td>7.3</td>

        <td>Typical RPG stats (strength, magic attack, defense,
        etc) are computed based on Waveform distribution.</td>
      </tr>

      <tr>
        <td>Section 8.</td>

        <td>Battle Mechanics</td>
      </tr>

      <tr>
        <td>8.0</td>

        <td>Battle Mode exists on the Map.</td>
      </tr>

      <tr>
        <td>8.1</td>

        <td>Battle Mode occurs between two parties.</td>
      </tr>

      <tr>
        <td>8.2</td>

        <td>Battle Mode is entered when a Character in the Gamer
        Controlled Party enters within a certain radius of a
        Fightable Character.</td>
      </tr>

      <tr>
        <td>Section 9.</td>

        <td>Time</td>
      </tr>

      <tr>
        <td>9.0</td>

        <td>Time passes in the game.</td>
      </tr>

      <tr>
        <td>9.1</td>

        <td>The Map shows the passage of time using daytime,
        sunrise, sunset and night time.</td>
      </tr>

      <tr>
        <td>9.2</td>

        <td>Map Objects Properties and Character Behaviors may be
        sensitive to Time.</td>
      </tr>
    </tbody>
  </table><br>

  <h2>Questions?</h2>

  <p>Please email <a href=
  "mailto:asgard.team@gmail.com">asgard.team@gmail.com</a> with any
  questions you may have.</p><br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <?php foot(); ?>
