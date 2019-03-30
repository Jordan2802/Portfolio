<div class="fond1">
  <form action="web/verif/verif.php" method="post">
    <div class="row">
      <div class="col form-group">
        <label for="exampleFormControlInput1">Prénom</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="prenom" required>
      </div>
      <div class="col form-group">
        <label for="exampleFormControlInput2">Nom</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" name="nom" required>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput3">Email</label>
      <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="name@example.com" name="email"
        required>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Message</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="message" required></textarea>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Envoyer</button>
      <p>
        <?php if(isset($_GET['valid'])){echo $_GET['valid'];}?>
      </p>
    </div>
  </form>
</div>

<div class="fond2">
  <div class="mescontacts">
    <h2> <span>Contact :</span> OUDOT Jordan</h2>
    <p> <span>téléphone :</span> 06/15/86/26/64</p>
    <p> <span>Email :</span> jordan.oudot@jordanoweb.fr</p>
  </div>
</div>