<form action="index.php?module=user&action=edit" method="post">
    <input type="hidden" name="userId" value="<?php echo $data['utilisateur']['id']; ?>">
        <label>
            Nom
            <input type="text" name="nom" value="<?php echo $data['utilisateur']['nom']; ?>">
        </label>
        <label>
            Nom d'utilisateur
            <input type="email" name="nom_utilisateur" value="<?php echo $data['utilisateur']['nom_utilisateur']; ?>">
        </label>
        <label>
            Date de naissance
            <input type="date" name="birthday" value="<?php echo date_format(date_create($data['utilisateur']['naissance']),"Y-m-d") ?>">
        </label>
        </label>
        <input type="submit">
    </form>
 