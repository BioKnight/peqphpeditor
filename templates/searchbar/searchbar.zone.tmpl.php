<?php $zonetype = array(
  0   => "Unknown",
  1   => "Regular",
  2   => "Instanced",
  3   => "Hybrid",
  4   => "Raid",
  5   => "City"
);?>
      
      
      <div id="searchbar">
        <table width="100%">
          <tr>
            <td>
              <strong>1.</strong>
              <select OnChange="gotosite(this.options[this.selectedIndex].value)">
                <option value="">Select a Zone Shortname</option>
<?php foreach ($zonelist as $zone): ?>
<?php if ($zone['expansion'] <= $expansion_limit || $expansion_limit = -1 ): ?>
                <option value="index.php?editor=<?=$curreditor?>&z=<?=$zone['short_name']?>&zoneid=<?=$zone['id']?>"<?echo ($currzoneid == $zone['id']) ? " selected" : "";?>><?=$zone['short_name']?></option>
<?php endif;?>
<?php endforeach;?>
              </select>
            </td>
            <td>or <strong>&nbsp;2.</strong>
              <select OnChange="gotosite(this.options[this.selectedIndex].value)">
                <option value="">Select a Zone Longname</option>
<?php foreach ($zonelist2 as $zone): ?>
<?php if ($zone['expansion'] <= $expansion_limit || $expansion_limit = -1): ?>
                <option value="index.php?editor=<?=$curreditor?>&z=<?=$zone['short_name']?>&zoneid=<?=$zone['id']?>"<?echo ($currzoneid == $zone['id']) ? " selected" : "";?>><?=$zone['long_name']?></option>
<?php endif;?>
<?php endforeach;?>
              </select>
            </td>
          </tr>
        </table>
      </div>
