<?php print_r($config); ?>

<form method="<?php echo $config["options"]["method"]; ?>" action="<?php echo $config["options"]["submit"]; ?>">
    
    <?php foreach ($config["struct"] as $name => $attributs):?>
        <?php if($attributs["type"] == "email"): ?>
            <input type="<?php echo $attributs["type"]; ?>" name="<?php echo $name; ?>"
            placeholder="<?php echo $attributs["placeholder"]; ?>"
            required="<?php isset($attributs["required"])?"required":"" ?>"
            >
        <?php endif; ?>
    <?php endforeach; ?>

    <input type="submit" name="" value="<?php echo $config["options"]["submit"]; ?>">
</form>