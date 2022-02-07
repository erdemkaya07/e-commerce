<html>

<head>

    <title></title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">

    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
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

<?php View::renderView("panel", "navbar"); ?>

<div class="container my-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <?=$data['VIEW']?>
        </div>
    </div>
</div>

</body>

</html>


