<div class="flex">
  <form action="index.php?module=article&action=insert" method='post'>
    <h2>Votre Article</h2>
    <label for="titre">Titre
      <input type="text" name="titre">
    </label>
    <label for="article">
      <textarea name="article" id="article" cols="60" rows="10" required></textarea>
    </label>
    <input type="submit">
  </form>
  <div class="container">
    <h3>Article à la une</h3>
    <?php foreach($test as $ligne) { ?>
      <h4><?php echo $ligne['titre'] ?></h4>
      <p><?php echo $ligne['article'] ?></p>
    <?php } ?>
  </div>
</div>
