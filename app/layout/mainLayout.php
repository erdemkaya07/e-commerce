<html>

<head>

    <title></title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">

    <link rel="stylesheet" href="/css/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/assets/owl.theme.default.min.css">

    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script>

        $(document).ready(function () {

            <?php if(isset($data['msg'])): ?>
                GlobalMessage('<?=$data['msg']?>');
            <?php endif; ?>

        });

    </script>
</head>
<body>

<div class="global-message" style="top: 0 !important;"></div>

<?php View::renderView("default", "navbar"); ?>

<?=$data['VIEW']?>

<?php View::renderView("default", "footer"); ?>

</body>

</html>


