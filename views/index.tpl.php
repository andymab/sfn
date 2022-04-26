<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic-ext,cyrillic&amp;display=swap">
    <link rel="stylesheet" href="/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <?= isset( $css ) ? $css : ''; ?>
    <?= isset( $styles ) ? $styles : ''; ?>
</head>

<body style="font-family: Roboto, sans-serif;background: var(--bs-gray-200);padding-top:50px">
    <!-- Start: Navigation with Search -->
    <nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark navigation-clean-search">
        <div class="container"><a class="navbar-brand text-uppercase" href="#" style="color: var(--bs-orange);" data-bs-target="/"><i class="fas fa-user-graduate" ></i>&nbsp;SFN</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <!-- <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#">Заметки</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Программы</a></li>
                    <li class="nav-item"></li>
                </ul>
                <form class="me-auto search-form" target="_self">
                    <div class="d-flex align-items-center"><label class="form-label d-flex mb-0" for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" id="search-field" name="search" style="color: var(--bs-gray-400);"></div>
                </form><a class="btn" role="button" href="/exit" style="color: var(--bs-gray-400);"><i class="far fa-share-square"></i></a>
            </div> -->
        </div>
    </nav><!-- End: Navigation with Search -->
    <!-- Start: breadcrumbs -->
    <section class="section_breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" style="padding: 0.45em;color: var(--bs-gray-600);"><a class="breadcrumb_link" href="/"><i class="fas fa-home"></i><span></span></a></li>
            </ol>
        </div>
    </section><!-- End: breadcrumbs -->
    <!-- Start: notes_list -->
    <section id="notes_list">
        <div class="container">
            <div class="row">
                <div class="col">
                <?= $content; ?>
                </div>
            </div>
        </div>
    </section><!-- End: notes_list -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/note_action.js"></script>

   

<?= isset( $js ) ? $js : ''; ?>
<?= isset($scripts) ? $scripts : ''?>
</body>

</html>