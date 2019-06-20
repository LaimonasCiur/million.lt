!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title></title>
</head>
<body>

 
<form action="<?php echo WebToPay::PAY_URL; ?>" method="post">
 
    <?php foreach ($request as $key => $val): ?>
        <input type="hidden"
               name="<?php echo $key ?>"
               value="<?php echo htmlspecialchars($val); ?>" />
    <?php endforeach; ?>
 
    <input type="submit" value="Pay" />
</form>
 
</body>
</html>