<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script>
        $(document).ready(function (){

            <?php if(isset($data['msg'])): ?>
                GlobalMessage('<?=$data['msg'] ?>');
            <?php endif;?>
        });
    </script>

</head>
<body>
<div class="global-message" style="top: 0 !important;">Message</div>
<?php View::renderView("default", "navbar"); ?>

<?=$data['VIEW']?>

<?php View::renderView("default", "footer"); ?>

</body>
</html>


