<?php

require 'vendor/autoload.php';
require 'config.php';
Horntell\App::init($CONFIG['HORNTELL_KEY'], $CONFIG['HORNTELL_SECRET']);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Vidooly</title>
</head>
<body>


<div id="horntell_center"></div>
<script type="text/javascript">
  var __ht = __ht || {};
  __ht.app          = '54dc8cb91df48745078b456b';
   /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
  __ht.profile      = {
      uid: '<?php echo $_GET['u']; ?>',
      uid_hash: '<?php echo Horntell\App::hash($_GET['u']); ?>'
  };
  /* * * DON'T EDIT BELOW THIS LINE * * */
  (function() {
      var ht = document.createElement('script'); ht.type = 'text/javascript'; ht.async = true;
      ht.src = '//center.horntell.com/center.min.js';
      (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ht);
  })();
</script>
</body>
</html>