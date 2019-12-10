<?php
/**
 * Smart Look - Main page view template. Lists both categories and items with parent_id = 0 and category_id = 0 
 * 
 * 
 * 
 * @copyright Edward Gao
 *
 * @license MIT
 *
 * @package smartlook
 * @version 1.0
 * @author  Edward Gao <edward.gao21@gmail.com>
 * @link    https://github.com/EdwardG21
 */
if (!defined('SCHLIX_VERSION')) die('No Access');
?>
<?php if ($smart_look_tracking_number): ?>
    
    <script type='text/javascript'>
  window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
    })(document);
    smartlook('init', '<?= ___h($smart_look_tracking_number) ?>');
</script>
<?php else: ?>
    <x-ui:alert type="danger">
        <?= ___('Smart look tracking number has not been provided') ?>
    </x-ui:alert>

<?php endif ?>