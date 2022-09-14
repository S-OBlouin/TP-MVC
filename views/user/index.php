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
    <?php print_r($data);
     foreach($data as $row) { ?>
      <h4><?php echo $row['titre'] ?></h4>
      <p><?php echo $row['article'] ?></p>
    <?php } ?>
  </div>
</div>
