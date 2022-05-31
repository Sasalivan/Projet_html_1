<h1>Contact</h1>

<form method="POST" action="">
        <label for="firstname">Prénom : </label>
        <input required id="firstname" placeholder="Votre prénom" 
            name="firstName" type="text"><br>

        <br>
        <br>

        <label>Mot de passe : </label>
        <input type="password" name="password"><br>
        
        <br>
        <br>

        <label>Email : </label>
        <input type="email" name="mail"><br>
        
        <br>
        <br>

        <label> Age : </label>
        <select name="age">
            <option disabled></option>
            <option value="<12">< 12 ans</option>
            <option value="1218">> 12 ans & < 18 ans</option>
            <option value=">18">> 18 ans</option>
        </select>

        <br>
        <br>

        <label>Femme</label><input type="radio" value="F" name="gender">
        <label>Homme</label><input type="radio" value="H" name="gender">
        <label>N/C</label><input type="radio" value="NC" name="gender">

        <br>
        <br>

        <label>Hardware</label><input type="checkbox" value="hardware" name="cours">
        <label>Programmation</label><input type="checkbox" value="Programmation" name="cours">
        <label>Network</label><input type="checkbox" value="network" name="cours">

        <br>
        <br>
        
        <label> langage : </label>
        <select multiple="true" name="tech">
            <option disabled></option>
            <option value="HTML">HTML</option>
            <option value="CSS">CSS</option>
            <option value="Node">Node</option>
            <option value="Python">Python</option>
            <option value="PHP">PHP</option>
            <option value="C#">C#</option>
            <option value="Java">Java</option>
            <option value="JS">JS</option>
        </select>
        
        <br>
        <br>

        <label for="favB">Browser : </label>
        <input list="browsers" id="favB" name="favBrowser" type="text"><br>

        <datalist id="browsers">
            <?php
            foreach($datalist as $row)
            {
                echo "<option value='$row'>";
            }
            ?>
        </datalist>

        <br>
        <br>
        
        <label for="experience"> Année experience : </label>
        <input type="number" name="anneeexp">

        <br>
        <br>

        <label for="datedispo"> Date de disponibilité :  </label>
        <input type="date" id ="datadispo" name="disponibilite">

        <br>
        <br>
        <div class="button1">
        <button type="submit">Envoyer!</button>
        </div>
    </form>


    <a href="../demoWad22">Vers l'accueil</a>
