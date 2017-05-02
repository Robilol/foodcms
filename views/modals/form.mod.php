<!--<pre>
<?php// print_r($config); ?>
</pre>-->
<form method="<?php echo $config["options"]["method"]; ?>" action="<?php echo $config["options"]["submit"]; ?>">
    
    <?php foreach ($config["struct"] as $name => $attributs):?>
        <label for="<?php echo $attributs["id"]; ?>"><?php echo $attributs["label"]; ?></label>
        <?php if($attributs["type"] == "email"): ?>
            <input id="<?php echo $attributs["id"]; ?>" type="<?php echo $attributs["type"]; ?>" name="<?php echo $name; ?>"
            placeholder="<?php echo $attributs["placeholder"]; ?>"
            required="<?php isset($attributs["required"])?"required":"" ?>"
            >
        <?php elseif($attributs["type"] == "password"):?>
            <input id="<?php echo $attributs["id"]; ?>" type="<?php echo $attributs["type"]; ?>" name="<?php echo $name; ?>"
                   placeholder="<?php echo $attributs["placeholder"]; ?>"
                   required="<?php isset($attributs["required"])?"required":"" ?>"
            >
        <?php elseif($attributs["type"] == "text"):?>
            <input id="<?php echo $attributs["id"]; ?>" type="<?php echo $attributs["type"]; ?>" name="<?php echo $name; ?>"
                   placeholder="<?php echo $attributs["placeholder"]; ?>"
                   required="<?php isset($attributs["required"])?"required":"" ?>"
            >
        <?php endif; ?>
        <br>
    <?php endforeach; ?>

    <input type="submit" name="" value="<?php echo $config["options"]["submit"]; ?>">
</form>