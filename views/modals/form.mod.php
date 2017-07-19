<form enctype="multipart/form-data" id="<?php echo $config["options"]["id"]; ?>" class="<?php echo $config["options"]["class"]; ?>" method="<?php echo $config["options"]["method"]; ?>" action="<?php echo $config["options"]["action"]; ?>"  >

    <?php foreach ($config["struct"] as $name => $attributs):?>
        <div class="form-row">
        <label for="<?php echo $attributs["id"]; ?>"><?php echo $attributs["label"]; ?></label>
        <?php if($attributs["type"] == "email"): ?>
            <input id="<?php echo $attributs["id"]; ?>" type="<?php echo $attributs["type"]; ?>" name="<?php echo $name; ?>"
            placeholder="<?php echo $attributs["placeholder"]; ?>" <?php if (isset($attributs["value"])) echo "value='".$attributs["value"]."'" ?>
            <?php echo ($attributs["required"])?"required":"" ?>
            >
        <?php elseif($attributs["type"] == "password"):?>
            <input id="<?php echo $attributs["id"]; ?>" type="<?php echo $attributs["type"]; ?>" name="<?php echo $name; ?>"
                   placeholder="<?php echo $attributs["placeholder"]; ?>"  <?php if (isset($attributs["value"])) echo "value='".$attributs["value"]."'" ?>
                   <?php echo ($attributs["required"])?"required":"" ?>
            >
        <?php elseif($attributs["type"] == "text"):?>
            <input id="<?php echo $attributs["id"]; ?>" type="<?php echo $attributs["type"]; ?>" name="<?php echo $name; ?>"
                   placeholder="<?php echo $attributs["placeholder"]; ?>" <?php if (isset($attributs["value"])) echo 'value="'.$attributs["value"].'"' ?>

                     <?php echo ($attributs["required"])?"required":"" ?>
            >
          <?php elseif($attributs["type"] == "textarea"):?>
              <textarea id="<?php echo $attributs["id"]; ?>" name="<?php echo $name; ?>"
                     placeholder="<?php echo $attributs["placeholder"]; ?>"
                       <?php echo ($attributs["required"])?"required":"" ?>
                       <?php echo ($attributs["readonly"])?"readonly":"" ?>
              ><?php echo $attributs["text"]; ?></textarea>
          <?php elseif($attributs["type"] == "checkbox"):?>
              <input id="<?php echo $attributs["id"]; ?>" type="<?php echo $attributs["type"]; ?>" name="<?php echo $name; ?>"
                        <?php echo ($attributs["required"])?"required":"" ; echo ($attributs["checked"])?"checked":"" ?>
                >
              <?php elseif($attributs["type"] == "file"):?>
                  <input id="<?php echo $attributs["id"]; ?>" type="<?php echo $attributs["type"]; ?>" name="<?php echo $name; ?>"
                            <?php echo ($attributs["required"])?"required":"" ?>
                    >
          <?php elseif($attributs["type"] == "select"):?>
              <select id="<?php echo $attributs["id"]; ?>" name="<?php echo $name; ?>">
                <?php 
                foreach ($attributs["option"] as $selectName => $selectValue):?>
                  <option value="<?php echo $selectName; ?>"><?php echo $selectValue; ?></option>
                <?php endforeach; ?>
              </select>


        <?php endif; ?>
        </div>
    <?php endforeach; ?>

    <div class="form-row">
        <input class="submit" type="submit" name="" value="<?php echo $config["options"]["submit"]; ?>">
    </div>
</form>
